use yii\grid\GridView;
?>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'Kode Matakuliah',
            'Nama Matakuliah',
       ]
    ])
?>