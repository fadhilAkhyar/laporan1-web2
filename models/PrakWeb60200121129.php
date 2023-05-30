<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prak_web_60200121129".
 *
 * @property int $id
 * @property string $Nim
 * @property string $Nama
 * @property string $Kelas
 */
class PrakWeb60200121129 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prak_web_60200121129';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Nim', 'Nama', 'Kelas'], 'required'],
            [['id'], 'integer'],
            [['Nim', 'Nama', 'Kelas'], 'string', 'max' => 20],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nim' => 'Nim',
            'Nama' => 'Nama',
            'Kelas' => 'Kelas',
        ];
    }
}
