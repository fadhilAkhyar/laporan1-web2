<?php

namespace app\controllers;
use app\models\prakweb60200121129;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => prakweb60200121129::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
       ]);
}

}
?>