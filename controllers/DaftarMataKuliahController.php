<?php

namespace app\controllers;

class DaftarMataKuliahController extends \yii\web\Controller
{
    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpdater()
    {
        return $this->render('updater');
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
