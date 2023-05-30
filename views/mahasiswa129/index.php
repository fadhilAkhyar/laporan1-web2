<?php
    use yii\helpers\Html;
    use app\widgets\Alert;
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
?>

<?=
Html::a('Mahasiswa Baru', ['tambah'], ['class' => 'btn btn-primary']);

?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id129',
            'nim129',
            'nama129',
            'kelas129',
            'status129',
            ['class' => ActionColumn::className()]
        ]
]);
?>
