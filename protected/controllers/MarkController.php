<?php

class MarkController extends Controller
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
				'actions'=>array('index','view','create','update','admin','my'),
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
		$model=new Mark;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mark']))
		{
			$model->attributes=$_POST['Mark'];
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

		if(isset($_POST['Mark']))
		{
			$model->attributes=$_POST['Mark'];
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
		$dataProvider=new CActiveDataProvider('Mark');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
          // $num = 394;  
           // $cooun = Measurements::model()->countBySql('SELECT COUNT( * ) FROM  `measurements` WHERE  `markerName_id` =:num',array(':num'=>$num));
              
              
            $model=new Mark('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Mark']))
			$model->attributes=$_GET['Mark'];
                       
               
                // print_r($_GET['Mark']);
		$this->render('admin',array(
			'model'=>$model,
                       
                   
		));
	}
        
        public function actionMy()
	{   
          //  $criteria=new CDbCriteria;
          //  $criteria->condition = 'id = 12';
          //  $criteria->together = true;
          //  $idmark = Marks::model()->findAll($criteria);
            //$idmark->many;
           
           $modM = Marks::model()->findAll();
          // $modM = array(131=>131,132=>132);
         
           // Достать marker_id в таб marName - id
                
                  
                  
                foreach($modM as $key){
             
             $attr = $key['marker_id'];//выбор id марок не повтор
                   // $attr = 131;
        
             
                 $datarF = array();
                 $datarL = array();
               $rescnt = Measurements::model()->count('markerName_id = :num', array(':num' => $attr));  //count gotov
                  //   $attr = 14;
                  //$attr = $key;
                  //выбор всего по markerName_id
               $result1 = Measurements::model()->findAllBySql(('SELECT  markerName_id ,`b_date`  FROM  `measurements` WHERE  `markerName_id` = :num ORDER BY   `b_date` DESC '),array(':num'=>$attr));  //count gotov
                if(!$result1)continue;
              //   print_r($result1);
                            foreach ($result1 as $value) {
                               $idupdate = $value['markerName_id'];
                                
                                $datarF[] = $value['b_date'];
                            }
                            $result2 = Measurements::model()->findAllBySql(('SELECT  `e_date`  FROM  `measurements` WHERE  `markerName_id` = :num ORDER BY   `e_date` ASC '),array(':num'=>$attr));  //count gotov
                       
                            foreach ($result2 as $value) {
                               // echo $value['b_date'];
                                $datarL[] = $value['e_date'];
                            }

                             $firstdat = array_pop($datarF);
               
                             $lastdat = array_pop($datarL);
                            
                     
                        
                           $datetime1 = new DateTime($firstdat);
                           $datetime2 = new DateTime($lastdat);
                           $interval = $datetime1->diff($datetime2);
                           $intDay =$interval->format('%a');
                          
                         
                                $model=Marks::model()->findByAttributes(array('marker_id' => $attr));
                                $model->meas_first = $firstdat;
                                $model->meas_last = $lastdat;
                                $model->meas_period_days = $intDay;
                                $model->meas_count = $rescnt;
                                $model->save(); // сохраняем изменения
                                if($model->save())
				$this->redirect(array('admin'));
                                //
                         //  }
                         
                          // if($modelUp->save());
                
             
               // }
                
                 
                //echo '-- count ='.$result.'  '; 
                   // echo $attr.'-';
           //          $model2 = Measurements::model()->findAllByAttributes(array('markerName_id'=>$attr));
                    // print_r($model2);
                //   foreach($model2 as $ke){
                //          print_r($key['marker_id']); //all mark name
                //       echo $ke['b_date'];
                //     echo '<hr>';
                     //расчет количества
                     

                     //запись в марки 
                     
                     
         
                //   }
         
              
                   
              // }
               
               
      
                   // 7 дней; 24 часа; 60 минут; 60 секунд
     //  $datetime1 = new DateTime($firstdat);
     //   $datetime2 = new DateTime($lastdat);
     //  $interval = $datetime1->diff($datetime2);
         
  //   echo 'interval day '.$interval->format('%a');
  //   echo '<hr>';
                }
               // $this->redirect(array('admin'));
               
             $this->render('my',array(
			
		));
            //print_r($arr);
           
            //$criteria->with = 'many';
            //$criteria->together = true;
            //$ctg=MarkReg::model()->with('markreg')->findByPk(12);
           // $ctg=MarkReg::model()->with('markreg')->findAll();
           // $ctg = Mark::model()->find($criteria);
         // echo  $bk = $ctg->id;//394 IV24
            
            
 //             $o = Marks::model()->findAll();
              //$m = $o->mark;
 //             $ar =array();
 //             foreach($o as $one){
              
 //                $r = $one->many;
 //                 foreach($r as $g){
 //                     $mar = MarkNams::model()->findByPk($one->id );
                  //   echo $mar->markers_name. '->'.$g->name.'<hr>';
 //                 }
 //            }
           //   print_r($ar);
            // $ctg1=MarkReg::model()->findByPk($bk);
           // $ctg=MarkReg::model()->findByPk('12');
           //print_r($ctg);
          //  echo '<hr>'.$ctg->id;
         //   foreach($t as $one){
           //      $c=MarkReg::model()->findByPk($one->id);
           //  echo '----- '. $c->name;
            // $ctg=MarkReg::model()->with('markreg')->findByAll();
         //    echo '<hr>';
           // }
            
           // $points=Marks::model()->with('regs')->findAll();
           // $criteria->compare('regs.center_number', $this->device_id, true);
            //$criteria->compare('type',$this->type);
               // $points= Marks::model()->findAll($criteria);
              
             //   foreach($points as $one){
                 //     print_r($one);
                 //  echo '<hr>';
        //        }
		//$dataProvider=new CActiveDataProvider('Marks');
		//$this->render('index',array(
		//	'dataProvider'=>$dataProvider,
		//));
           
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Mark the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Mark::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Mark $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='mark-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
