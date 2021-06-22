<?php

class PointsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
                    array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','admin'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update','my','delpoints','admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Points;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Points']))
		{
			$model->attributes=$_POST['Points'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Points']))
		{
			$model->attributes=$_POST['Points'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Points');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
                $datetime = array();
                $pDate = PointsDate::model()->findAll();
                if($pDate){
                foreach($pDate as $value){
                 $datetime = $value->date_f;  
                }
                }
             
		$model=new Points('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Points']))
			$model->attributes=$_GET['Points'];

		$this->render('admin',array(
			'model'=>$model,
                        'datetime'=>$datetime,
		));
	}
         public function actionDelpoints()
	{
            
              Points::model()->deleteAll();
             $this->redirect(array('admin')); 
        }
        public function actionMy()
	{ 
            //Yii::app()->db->createCommand('TRUNCATE TABLE points1 ');
            
            // Points1::model()->deleteAll();TRUNCATE TABLE table_name;
             $modM = MarkPoints::model()->findAll();//имена пунктов
              foreach($modM as $key){
             
             $attr = $key['id'];//выбор id марок не повтор
                   // $attr = 131;
        
            $atname = $key['name'];//выбор id марок не повтор
          
                
                 //выбор всего из марок где id = id из пункта текущего
                 $markPo = Mark::model()->findAllBySql(('SELECT  * FROM `marks` WHERE `points_id` = :num ORDER BY  `marker_id` DESC '),array(':num'=>$attr));  //count gotov
                // $result1 = Mark::model()->findAllByPk($attr);
                 $yearInst =array();//массив для всех марок год установки
                 $yearDist =array();//массив для всех марок год уничтожения
                 $namMaar = array();//массив для всех марок в пункте
                 $dataar = array();//массив для всех дат для выборки
                 //
                 $measCntArr = array();// для подсчета кол измерений meas_count
                 // Массивы для средних значений коардинат
                 $arrLonE = array();
                 $arrLanN = array();
                 $arrAltiH = array();
                 
                 // массивы для хранения  первых изменений марок и последних измерений марок для последующ извлеч минемаль и максим значения
                 $minMaxMeaCntFirsdate = array();
                 $miMaxMeaCntLastdate = array();
                 
                 $typeOfGrnArr = array();
                 
                 //$id = $result1->marker_id;
            if($markPo){     //object всех марок по id пунктов
                 
                 foreach($markPo as $marki){
                    $netAar = array();//массив для сети
                    $idMarki = $marki->marker_id; 
                    $net_id = $marki->net_id;
                    $yerIn = $marki->year_of_installation;// год установки
                    $yerDs = $marki->year_of_destruction; // год разрушения
                    $tyGrou_id = $marki->typeofground_id;
                    $tyFondation_id = $marki->typeoffoundation_id;//тип основания id
                    $condofsurvey_id = $marki->conditionsofsurvey_id;
                    $typeoFfas_id = $marki->typeoffastening_id;
                    $lonE = $marki->longitude_e;
                    $lanN = $marki->latitude_n;
                    $lanH = $marki->altitude_h;
                    $msCnt = $marki->meas_count;
                    $marCountrid = $marki->country;
                  
                    // даты всех начал марок
                    $measFbdate = $marki->meas_first;
                    // даты всех последних измерениц марок
                    $measLedate = $marki->meas_last;
                     $conditSurve = ConditionsOfSurvey::model()->findByPk($condofsurvey_id);
                     $typeoffastening = TypesOfFastening::model()->findByPk($typeoFfas_id);
                     $tyFondation = TypesOfFoundation::model()->findByPk($tyFondation_id);//тип основания
                      
                     $typOfFondation =$tyFondation->description;//тип основания
                     $typOFast = $typeoffastening->description;
                     $condOfSurve =$conditSurve->name;
                    
                     $tyOfGrN = TypesOfGround::model()->findByPk($tyGrou_id);
                      $resNet = Nets::model()->findByPk($net_id);
                      $resMark = MarkNams::model()->findByPk($idMarki);
                     
                     $countri = Countries::model()->findByPk($marCountrid);
                    // $countri->name;
                     $countryM = $countri->description;   //$country
                        
                      $nameMark =  $resMark->markers_name;
                   
                    
                      array_push($measCntArr,$msCnt);// все кол измерений марок на пункт
                      array_push($arrLonE, $lonE);//коор е
                      array_push($arrLanN, $lanN);//коор n
                      array_push($arrAltiH, $lanH);//коор h
                      array_push($namMaar, $nameMark);
                      array_push($netAar, $resNet->name);//Сети
                      array_push($yearInst, $yerIn);
                      array_push($yearDist, $yerDs);
                      
                      array_push($minMaxMeaCntFirsdate, $measFbdate);//запись всех первых дат
                      array_push($miMaxMeaCntLastdate, $measLedate);// запись всех последних дат
                      
                    
                      $grntype = $tyOfGrN->description;
                      array_push($typeOfGrnArr, $grntype);// type of ground
               
                   
                }//     ----------------- конец forech марок по пункту ---------------
                  
                    
                   
                $yeInst =  min($yearInst);
                if ($yeInst == '0000-00-00'){
                    print($yeInst);
                }
                $yeDis = max($yearDist);
                   
                $sumMesCnt = array_sum($measCntArr); //кол измерений
               // print_r($namMaar);
                 $comma = implode(", ", $namMaar);//разбить по ", " 
      
                $points1 = new Points;
                
                $points1-> marker_name = $atname;//Пункт
                $points1 ->point_marks = $comma;//Марки
                $points1 ->kroki = $marki->kroki;
                $points1 ->country = $countryM;

             ////////////////////////////////////////////////////
                        if(preg_match("/[A-Z]{4}/", $comma,$matches)){//4 буквы
                               foreach($matches as $key=>$val){
                             
                $points1 ->marker_site = $val;

                               }
                           }else if(preg_match("/IV[0-9]{2}/", $comma,$matches)){//IV две цифры
                               foreach($matches as $key=>$val){
                              
                $points1 ->marker_site = $val;

                               }

                           }else//if
                       {
                              sort($namMaar);
                         $marker_site=$namMaar[0];
                              
                $points1 ->marker_site = $marker_site;

                       }
                       
           
             ////////////////////////////////////////////////////
             
                $points1->type_of_ground=$typeOfGrnArr[0];
                $points1-> type_of_foundation =  $typOfFondation;//тип основания
                $points1->conditions_of_survey =$condOfSurve;
                $points1 ->net_number = $netAar[0];
                $points1 ->year_of_installation =$yeInst;
                $points1 ->year_of_destruction =$yeDis;
                $points1->longitude_e = $sLonE= array_sum($arrLonE)/count($arrLonE);
                $points1->latitude_n = $sLanN= array_sum($arrLanN)/count($arrLanN);
                $points1->altitude_h = $AltH= array_sum($arrAltiH)/count($arrAltiH);
                $points1 ->count =$sumMesCnt;
                $points1 ->b_date =$minFirsDate =  min($minMaxMeaCntFirsdate);
                $points1 ->e_date = $maxLastDate = max($miMaxMeaCntLastdate);
                $points1 ->type_of_fastening =$typOFast;
                $points1 ->id_user = "oper";
              
             
              $points1->save();
              }//IF
              
              
              } 
          //  $ar = array('1995-06-13','1995-06-14','1993-07-21');
          //  echo min($ar);
          //  echo '<br>';
          //  echo max($ar);
          //  echo '<hr>';
          //  $a = array(2, 4, 6, 8);
          //  echo "sum(a) = " . array_sum($a) . "\n";
                        $modeMN =  new PointsDate;
                        $datetime = date('Y-m-d H:i:s');
                       // $datetime = date('Y-m-d', strtotime($this->b_date));//strtotime($this->date_start);
                       // $this->e_date = date('Y-m-d', strtotime($this->e_date));//strtotime($this->date_start);
                        $modeMN->date_f = $datetime;
                        $modeMN->save();
                        
                    $this->redirect(array('admin'));
                 $this->render('my',array(
			
		));
        }
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Points the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Points::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        public function loadModelAll()
	{
		$model=Points1::model()->findAll();
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Points $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='points-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
