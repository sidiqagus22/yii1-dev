<?php

/**
 * 
 */
class TesController extends Controller
{
    public function actionIndex()
    {
   //      $this->render('index');
   //      $testing = 'buntingbro?';
   //      $model = Tes::model();
   //      $tesdata = $model->findAll();
 		// $this->render('index',array('tesdata'=> $tesdata));

        //a sample query but you could use more complex than it
        $sql = 'SELECT id_pasien AS id, * from public.pasien';
        $rawData = Yii::app()->db->createCommand($sql); //or use ->queryAll(); in CArrayDataProvider
        $count = Yii::app()->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar(); //the count
        $model = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'id', 
                    'totalItemCount' => $count,
 
                    //if the command above use PDO parameters
                    //'params'=>array(
                    //':param'=>$param,
                    //),
                    'sort' => array(
                        'attributes' => array(
                            'id','kd_pasien', 'nama_pasien'
                        ),
                        'defaultOrder' => array(
                            'id' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 10,
                    ),
                ));
        $judul = 'tes judul';
        $this->render('index', array('model' => $model, 'judul' => $judul));
    }

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			// 'inlineFilterName',
			// array(
			// 	'class'=>'path.to.FilterClass',
			// 	'propertyName'=>'propertyValue',
			// ),
            // 'accessControl', // perform access control for CRUD operations
            // 'postOnly + delete', // we only allow deletion via POST request
		);
	}

    public function accessRules()
    {
        // return array(
        //     array('allow',  // allow all users to perform 'index' and 'view' actions
        //         'actions'=>array('index','view'),
        //         'users'=>array('*'),
        //     ),
        //     array('allow', // allow authenticated user to perform 'create' and 'update' actions
        //         'actions'=>array('create','update'),
        //         'users'=>array('@'),
        //     ),
        //     array('allow', // allow admin user to perform 'admin' and 'delete' actions
        //         'actions'=>array('admin','delete'),
        //         'users'=>array('admin'),
        //     ),
        //     array('deny',  // deny all users
        //         'users'=>array('*'),
        //     ),
        // );
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

    public function actionCDelete($id)
    {
        $id =  $_GET['id'];
        echo $id;
    }

    public function actionDelete($id)
    {
        // $this->loadModel($id)->delete();
        // $model = Tes::model();
        // $model->delete('public.pasien', 'id_pasien=:id_pasien', array(':id_pasien'=> $id));

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        // if(!isset($_GET['ajax']))
        //     $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }
	
}
