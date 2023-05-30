<?php
    use yii\widgets\DetailView;
    use yii\helpers\Html;
?>

<?=
Html::a('Kembali', ['index'], ['class' => 'btn btn-primary']);

?>
<br>
<br>
<?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id129',
            'nim129',
            'nama129',
            'kelas129',
            'status129',
        ]
]);
?>