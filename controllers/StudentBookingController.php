<?php

namespace app\controllers;

use Yii;
use app\models\StudentBooking;
use app\models\StudentBookingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\PersonBooking;
use yii\web\UploadedFile;
use yii\helpers\Url;
use yii\helpers\Html;
/**
 * StudentBookingController implements the CRUD actions for StudentBooking model.
 */
class StudentBookingController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    /**
     * Creates a new StudentBooking model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        
        
        $this->layout = 'register';
        $model = new StudentBooking();
        $model_person = new PersonBooking();
        
        

        if ($model->load(Yii::$app->request->post())){
            $model_person->load(Yii::$app->request->post());
            
           
           
//                       $value = Yii::$app->mailer->compose(
//                       [
//                           'html' => 'form_body'
//                       ],
//                       [
//                            'model' => $model_person,
//                            'logo' => 'reservation2/web/uploads/web_img/logo.jpg',
//                       ])
//                               ->setFrom(['system.riskivector@gmail.com' => 'Incoming student form'])
//                               ->setTo('system.riskivector@gmail.com')
//                               ->setSubject('SYSTEM Student form')
//                               ->send();
//                               
                       
            $PhotoName = $model_person->name;
            $model_person->file = UploadedFile::getInstance($model_person,'file');
            $model_person->file->saveAs('uploads/persons_id/'.$PhotoName.'.'.$model_person->file->extension);
            $model_person->photo = 'uploads/persons_id/'.$PhotoName.'.'.$model_person->file->extension;
            
            if($model->validate() || $model_person->validate()){
                 echo '<pre>';
            print_r($model);
            echo '</pre>';
            die();
                $flag = $model_person->save();

                if($flag){
                   $model->person_booking_id = $model_person->id;
                   $model->arrival_date = date('Y-m-d',strtotime($model->arrival_date));
                   $model->date = date('Y-m-d');
                   $model->arrival_date = 0;
                   $model->date = 0;
                   $model->validated = 0;

                   $flag = $model->save();
                   
                   if($flag){
//                       $body = 'test';
//                       $value = Yii::$app->mailer->compose()
//                               ->setFrom(['marcin.wlodarczyk@riskivector.com' => 'Incoming student form'])
//                               ->setTo('marcin.wlodarczyk@gmail.com')
//                               ->setSubject('SYSTEM Student form')
//                               ->setHtmlBody($body)
//                               ->send();
                   }
                }
                Yii::$app->session->setFlash('Form Submitted!');
            }
            return $this->render('create', [
                'model' => $model,
                'model_person' => $model_person
            ]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'model_person' => $model_person
            ]);
        }
    }

    /**
     * Finds the StudentBooking model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentBooking the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentBooking::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
