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
class Mahasiswa extends \yii\db\ActiveRecord
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
            [['Nim', 'Nama', 'Kelas'], 'required'],
            [['Nim', 'Nama', 'Kelas'], 'string', 'max' => 20],
            [['Nim'], 'unique'],
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
