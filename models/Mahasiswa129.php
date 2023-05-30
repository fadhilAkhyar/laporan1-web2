<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa129".
 *
 * @property int $id129
 * @property string $nim129
 * @property string $nama129
 * @property string $kelas129
 * @property string $status129
 */
class Mahasiswa129 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa129';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim129', 'nama129', 'kelas129', 'status129'], 'required'],
            [['nim129', 'nama129', 'kelas129', 'status129'], 'string', 'max' => 255],
            [['nim129'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id129' => 'ID129',
            'nim129' => 'N0.Induk Mahasiswa129',
            'nama129' => 'Nama Mahasiswa129',
            'kelas129' => 'Kelas129',
            'status129' => 'Status129',
        ];
    }
}
