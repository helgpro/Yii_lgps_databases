<?php

class MarksNewUpdateController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
         public function actionMy()
	{   
            
            $counttt = 0;                                                                         //  $attr = 1743; //так как айдишники  ?????????????????/                этот отработал
                                                                                       //$attr = 1772; //так как айдишники                                     отработал
                                                                                                                                                   //   $attr = 1797; //так как айдишники
             //$masKeyMarkNew = array();
             $modM = MarksNew::model()->findAll();
          // $modM = array(131=>131,132=>132);
          
           // Достать marker_id в таб marName - id
                 
             
            foreach($modM as $key){
             
                
             
            // if($counttt == 263 ) continue;
              
             if($counttt == 600) continue;
                 $datarF = array();
                 $datarL = array();
                 
                 $attr = $key['shortname'];//выбор id  марок не повтор
                 $gid = $key['id'];
                 
                 if($gid>=500){ 
                     print($gid . '   '.$attr.'<br>');
               
                 //$idupdate = array();
                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
               
                  $rescnt = Measurements::model()->count('markerName_id = :num', array(':num' => $attr));  //все марки с одним id их кол
                  
                  //   $attr = 14 считает количество id в таблице Mesurments
                 
                                         //////выбор только b_date  по shortname  id  ///////сортируя по началу даты
                    //$result3 = Measurements::model()->findAllByAttributes(array('markerName_id'=>$attr));
                    //$result1 = Measurements::model()->findAllByAttributes(array('markerName_id'=>$attr),array('order'=>'id DESC'));// вместо SQL запроса
                  
               $result1 = Measurements::model()->findAllBySql(('SELECT *  FROM  `measurements` WHERE  `markerName_id` = :num ORDER BY   `b_date` DESC '),array(':num'=>$attr));
                //$result1 = Measurements::model()->findAllBySql(('SELECT `b_date`  FROM  `measurements` WHERE  `markerName_id` = :num ORDER BY   `b_date` DESC '),array(':num'=>$attr));  //count gotov
                $counttt++;  
               if(!$result1)continue;                          ////   если нет последней даты то continue  .......//////////
                // но тогда не попадают марки с 0000-00-00 датой 
              
                            foreach ($result1 as $value) {
                                
                                $datarF[] = $value['b_date'];
                                $datarL[] = $value['e_date'];//massiv s datami konca izmeren
                                //print($value['id']);
                            }
                           // var_dump($result1);
                //            $result2 = Measurements::model()->findAllBySql(('SELECT  `e_date`  FROM  `measurements` WHERE  `markerName_id` = :num ORDER BY   `e_date` ASC '),array(':num'=>$attr));  //count gotov
                       
                //            foreach ($result2 as $value) {
                               // echo $value['b_date'];
                //                $datarL[] = $value['e_date'];//massiv s datami konca izmeren
                //            }
                         
                        
                         if($datarF){ 
                         foreach($datarF as $val){
                          if(($key = array_search('0000-00-00',$datarF)) !== FALSE){unset($datarF[$key]);}
                         }}
                         if($datarF){
                            // print(min($datarF));
                             $firstdat = (min($datarF));
                         }else{
                         //print('Пустой массив');
                         $firstdat = '0000-00-00';
                         }
                         //-----------------------------------------------------
                         //print_r($datarL);
                         if($datarL){ 
                         foreach($datarL as $val){
                          if(($key = array_search('0000-00-00',$datarL)) !== FALSE){unset($datarL[$key]);}
                         }}
                         
                         if($datarL){
                             //print(max($datarL));
                             $lastdat = (max($datarL));
                         }else{
                         //print('Пустой массив');
                         $lastdat = '0000-00-00';
                         }
                          //
                           //////////////////////////////////////////// 
                        
                   if($firstdat != '0000-00-00'& $lastdat != '0000-00-00'){//IF 1
                        
                           $datetime1 = new DateTime($firstdat);
                           $datetime2 = new DateTime($lastdat);
                           $interval = $datetime1->diff($datetime2);
                           $intDay =$interval->format('%a');
                           
         
                            
                            $model = MarksNewUpdate::model()->findByAttributes(array('shortname' => $attr));//опять находим модель по shortName == id марок  и правим ее
                            //$model->description = 'opis';
                            //$model->save();
                            //var_dump($model);
                            $model->meas_first = $firstdat;
                            $model->meas_last = $lastdat;
                            $model ->meas_period_days =$intDay;
                            $model->meas_count = "$rescnt";
                            $model->save();
                            //if($model->save())
                                     //$this->redirect(array('my'));
                                //    $this->redirect(array('marksNew/admin'));
                            
                    }     // END IF 1  
                    
                           
                    if($lastdat == '0000-00-00'){// IF 2
                        $model = MarksNewUpdate::model()->findByAttributes(array('shortname' => $attr));//опять находим модель по shortName == id марок  и правим ее
                        $model->meas_first = $firstdat;         
                        $model->meas_last = $firstdat;
                        $model ->meas_period_days =1;
                        $model->meas_count = 1;
                        //$model->description = 'opis';         
                        $model->save();
                                    //$this->redirect(array('index'));
                                    //$this->redirect(array('marksNew/admin'));
                                 
                    }//END IF 2
                    
                    if($firstdat=='0000-00-00' and $lastdat == '0000-00-00'){
                        $model = MarksNewUpdate::model()->findByAttributes(array('shortname' => $attr));//опять находим модель по shortName == id марок  и правим ее             
                        $model ->meas_period_days =1;
                       // $model->description = 'opis';
                        $model->save();
                                    //if($model->save())
                                    //$this->redirect(array('index'));
                                    //$this->redirect(array('marksNew/admin'));
                    }
                           
                    if($firstdat=='0000-00-00'){//IF 3
                        $model = MarksNewUpdate::model()->findByAttributes(array('shortname' => $attr));//опять находим модель по shortName == id марок  и правим ее
                        $model ->meas_first =$lastdat;
                        $model->meas_last = $lastdat;
                        $model ->meas_period_days =1;
                        $model->meas_count = 1;
                        //$model->description = 'opis';
                        $model->save();
                    }// END IF3
                            
                       
                  

                                //if($model->save())
                                     //$this->redirect(array('my'));
                                //    $this->redirect(array('marksNew/admin'));
            //$model ->save();                                
                                  //  */  
                   }// end moy if count   
                }//end foreach  
                    //$this->redirect(array('marksNew/admin'));
            // $this->redirect(array('marksNew/admin'));
			
		
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

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}