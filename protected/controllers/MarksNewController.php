<?php

class MarksNewController extends Controller
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
		$model=new MarksNew;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MarksNew']))
		{
			$model->attributes=$_POST['MarksNew'];
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

		if(isset($_POST['MarksNew']))
		{
			$model->attributes=$_POST['MarksNew'];
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
		$dataProvider=new CActiveDataProvider('MarksNew');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new MarksNew('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MarksNew']))
			$model->attributes=$_GET['MarksNew'];

             $masKeyMarkNew = array();
             
                
		$this->render('admin',array(
			'model'=>$model,
                        
		));
	}
        public function actionMy()
	{   
     
           
//           $modM = MarksNew::model()->findAll();
          // $modM = array(131=>131,132=>132);
         
           // Достать marker_id в таб marName - id
                 
//                foreach($modM as $key){
             
            // $attr = $key['shortname'];//выбор id  марок не повтор
                    $attr = 1743; //так как айдишники
        
             
//                 $datarF = array();
//                 $datarL = array();
//               $rescnt = Measurements::model()->count('markerName_id = :num', array(':num' => $attr));  //все марки с одним id их кол
                  //   $attr = 14 считает количество id в таблице Mesurments
                  //$attr = $key;
                
                                         //////выбор всего по markerName_id ///////сортируя по началу даты
//               $result1 = Measurements::model()->findAllBySql(('SELECT `b_date`  FROM  `measurements` WHERE  `markerName_id` = :num ORDER BY   `b_date` DESC '),array(':num'=>$attr));  //count gotov
//                if(!$result1)continue;
              //   print_r($result1);
//                            foreach ($result1 as $value) {
 //                              $idupdate = $value['markerName_id'];
                                
//                                $datarF[] = $value['b_date'];
//                            }
//                            $result2 = Measurements::model()->findAllBySql(('SELECT  `e_date`  FROM  `measurements` WHERE  `markerName_id` = :num ORDER BY   `e_date` ASC '),array(':num'=>$attr));  //count gotov
                       
//                            foreach ($result2 as $value) {
                               // echo $value['b_date'];
//                                $datarL[] = $value['e_date'];//massiv s datami konca izmeren
//                            }

//                             $firstdat = array_pop($datarF);
                            // print('<hr>');
                            // print_r($datarF);
                            // print('<hr>');
                            // print_r($datarL);
                               
//                             $lastdat = array_pop($datarL);
                            // proverka kolich F esli bolishe 1 to proverka esli data == 0000-00-00 elalyaem posled bereb snova
                             // esli odin element
                     
                        
//                           $datetime1 = new DateTime($firstdat);
//                           $datetime2 = new DateTime($lastdat);
//                           $interval = $datetime1->diff($datetime2);
//                           $intDay =$interval->format('%a');
                          
                         
//                            $model = MarksNew::model()->findByAttributes(array('shortname' => $attr));//опять находим модель по id марок  и правим ее
                           
//                            print($model->shortname);
//                            $model->shortname= $model->shortname;
//                            $model->name = $model->name;
//                            $model->meas_first = $firstdat;
                                //print(gettype($firstdat).'<hr>');
//                            $model->meas_last = $lastdat;
                                //$lastda = date('Y-m-d', strtotime($lastdat));
                                // print($lastdat.'<hr>');
 //                               $model->meas_period_days = $intDay;
//                                $model->meas_count = "$rescnt";
                                // print($rescnt.'<hr>');
                                 //print($rescnt.'<hr>');
                                 //$model=$this->loadModel($idTek);
//                                $model->description ='ffffffffffffff';
                               
//                                if($model->save())
//                                    $this->redirect(array('admin'));
                                            
                                
                         
//                }
               
             $this->render('my',array(
			
		));
         
           
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return MarksNew the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=MarksNew::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param MarksNew $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='marks-new-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
