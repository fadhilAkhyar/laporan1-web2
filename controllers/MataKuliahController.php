<?php

namespace app\controllers;
use app\models\matakuliah129;
use yii\data\ActiveDataProvider;

class MataKuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => matakuliah129::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
       ]);
}

}
?>