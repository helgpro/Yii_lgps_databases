<?php

class Points1Controller extends Controller
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
		$model=new Points1;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Points1']))
		{
			$model->attributes=$_POST['Points1'];
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

		if(isset($_POST['Points1']))
		{
			$model->attributes=$_POST['Points1'];
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
		$dataProvider=new CActiveDataProvider('Points1');
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
                
		$model=new Points1('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Points1']))
			$model->attributes=$_GET['Points1'];
               
                }
             
		$this->render('admin',array(
			'model'=>$model,
                        'datetime'=>$datetime,
		));
	}
        
        
         public function actionMy()
	{ 
            //Yii::app()->db->createCommand('TRUNCATE TABLE points1 ');
            
            // Points1::model()->deleteAll();TRUNCATE TABLE table_name;
             $modM = MarkPoints::model()->findAll();//имена из \имена пунктов
           
              foreach($modM as $key){
             
             $attr = $key['id'];//выбор id марок не повтор
                   // $attr = 131;
        
           $atname = $key['name'];//выбор id марок не повтор
          
             //  print(' <br> '.$atname); 
                 //выбор всего из марок где id = id из пункта текущего
                 #$markPo = MarksNew::model()->findAllBySql(('SELECT  * FROM `marksNew` WHERE `name` = :num ORDER BY  `shortname` DESC '),array(':num'=>$attr));  //count gotov
                 //$markPo = MarksNew::model()->findAllByAttributes(array('name'=>$atname),array('shortname'=>'id DESC'));// вместо SQL запроса
                 $markPo = MarksNew::model()->findAllByAttributes(array('name'=>$atname));// вместо SQL запроса
          
                // $result1 = Mark::model()->findAllByPk($attr);
                 $mainMarks = array();
                 $pointName=array();
                 $all_marks=array();
                 $cond_of_surv=array();
                 $countryArr=array();
                 $kroky_arr=array();
                 $deskrip_arr=  array();
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
                    $idMarki = $marki->id; 
                    $name = $marki->name;
                    $shortname = $marki->shortname;
                    $mainm = $marki->mainMark;
                    $net = $key['nets'];
                    $yerIn = $marki->year_of_installation;// год установки
                    $yerDs = $marki->year_of_destruction; // год разрушения
                    $tyGrou_id = $marki->typeofground_id;
                    $tyFondation_id = $marki->typeoffoundation_id;//тип основания id
                    $condofsurvey_id = $marki->conditionsofsurvey;
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
     #                $conditSurve = ConditionsOfSurvey::model()->findByPk($condofsurvey_id);
                     $conditSurv = $key['condsurv'];
                     $typeoffastening = TypesOfFastening::model()->findByPk($typeoFfas_id);
                     $tyFondation = TypesOfFoundation::model()->findByPk($tyFondation_id);//тип основания
                     $tyOfGrN = TypesOfGround::model()->findByPk($tyGrou_id);
                     $typOfFondation =$tyFondation->description;//тип основания
                     $typOFast = $typeoffastening->description; $grntype = $tyOfGrN->description;
                     $markNames = MarkNams::model()->findByPk($shortname);
                     $marN = $markNames['markers_name'];// имена из имена марок $country = $key['country'];
                     $kroky = $key['kroky'];
                     $descr = $key['description'];
                     $country =$key['country'];
                   
    //                  $nameMark =  $resMark->markers_name;
                   
                      array_push($mainMarks,$mainm);// добавляет в конец массива по одному из гл Марок  
                      array_push($pointName,$name);// 
                      array_push($all_marks,$marN);// 
                      array_push($cond_of_surv,$conditSurv);// 
                      array_push($countryArr,$country);// 
                      array_push($kroky_arr,$kroky);//
                       array_push($deskrip_arr,$descr);//
                      
                      array_push($measCntArr,$msCnt);// добавляет в конец массива по одному из кол измерений из marksNew 
                      array_push($arrLonE, $lonE);//коор е
                      array_push($arrLanN, $lanN);//коор n
                      array_push($arrAltiH, $lanH);//коор h
                      array_push($namMaar, $shortname);//ьарки в пункте
                      array_push($netAar, $net);//Сети 
                      array_push($yearInst, $yerIn);
                      array_push($yearDist, $yerDs);
                      
                      array_push($minMaxMeaCntFirsdate, $measFbdate);//запись всех первых дат
                      array_push($miMaxMeaCntLastdate, $measLedate);// запись всех последних дат
                       
                      array_push($typeOfGrnArr, $grntype);// type of ground
               
                    // print($mainm.'  '.$name.'     '.$marN.'    '. $conditSurv.'  '.$net.'  '.$country.'  '.$kroky.'  '.$descr.'  '.'<br>');
                }//     ----------------- конец forech марок по пункту ---------------
            }
                  //  print($mainm.'  '.$name.'     '.$marN.'    '. $conditSurv.'  '.$net.'  '.$country.'  '.$kroky.'  '.$descr.'  '.'<br>');
           
             $comma = implode(", ", $all_marks);//разбить по ", " 
                 //  print('гл Ма'.$mainMarks[0].'  Пункт-'.$pointName[0].'   Марки- '.$comma.'  condSur -'.$cond_of_surv[0].'  krok -'.$kroky_arr[0].'  stran '.$countryArr[0]   .'<br>');
               
               $yeInst =  min($yearInst);
               $yeDis = max($yearDist);
               $sumMesCnt = array_sum($measCntArr); //кол измерений
                 //print($sumMesCnt.'<br>');
                // $comma = implode(", ", $namMaar);//разбить по ", " 
      
                $points1 = new Points1;
                $points1-> marker_site = $mainMarks[0];//main Mark
                $points1-> marker_name = $pointName[0];//Пункт
                $points1 ->point_marks = $comma;//Марки
                $points1 ->kroki = $kroky_arr[0];
                $points1 ->country = $countryArr[0];
          
                $points1->type_of_ground=$typeOfGrnArr[0];
                $points1-> type_of_foundation =  $typOfFondation;//тип основания
                $points1->conditions_of_survey =$cond_of_surv[0];
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
                $points1 ->description = $deskrip_arr[0];
              
           
              $points1->save();
              //}//IF
              
              
         
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
                        $modeMN->save(); // сохраняет дату 
                        
                   
                 
        }//forea
         $this->redirect(array('admin'));
         $this->render('my',array());
        }
        
              
              
         public function actionDelpoints()
	{
            
              Points1::model()->deleteAll();
             $this->redirect(array('admin')); 
        }      

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Points1 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Points1::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Points1 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='points1-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
