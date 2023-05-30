<?php

namespace app\controllers;
use app\models\Mahasiswa129;
use app\widgets\Alert;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswa129Controller extends \yii\web\Controller
{
    public function actionIndex()
{
       $query = Mahasiswa129::find();
       $dataProvider = new ActiveDataProvider ([
            'query' => $query
       ]);
       return $this->render('index',['dataProvider' => $dataProvider
    ]);
} 
    public function actionTambah()
    {
        $mahasiswa129 = new Mahasiswa129;
        $randomNumber = mt_rand(100, 999);
        $mahasiswa129 -> nim129 = '60200121129-' . $randomNumber;
        $mahasiswa129 -> nama129 = 'Fadhil';
        $mahasiswa129 -> kelas129 = 'C';
        $mahasiswa129 -> status129 = 'Baru';
        $mahasiswa129->save();
        if ($mahasiswa129->save()) {
            Yii::$app->session->setFlash('success', 'Data DItambah');
            return $this->redirect(['index']);
        }
    }
    public function actionUpdate($id = '')
    {
       $mahasiswa129 = Mahasiswa129::findOne(['id129' => $id]);
       $mahasiswa129 -> status129 = 'Update';
       $mahasiswa129 -> kelas129 = 'B';
       if ($mahasiswa129->save()) {
        Yii::$app->session->setFlash('success', 'Data Diubah');
            return $this->redirect(['index']);
       }
    }
    public function actionDelete($id = '')
    {
       $mahasiswa129 = Mahasiswa129::findOne(['id129' => $id]);
       if ($mahasiswa129->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Tehapus');
            return $this->redirect(['index']);
       }
    }
    public function actionView($id)
    {
       $mahasiswa129 = Mahasiswa129::findOne(['id129' => $id]);
        return $this->render('view',['model' => $mahasiswa129]);
     

}

}

