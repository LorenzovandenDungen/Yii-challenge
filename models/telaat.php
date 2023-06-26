<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Telaat extends ActiveRecord
{
    public static function tableName()
    {
        return 'telaat';
    }

    public function rules()
    {
        return [
            [['naam', 'datum', 'tijd', 'reden'], 'required'],
            [['naam'], 'string', 'max' => 255],
            [['reden'], 'string'],
            [['datum'], 'safe'],
            [['tijd'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naam' => 'Naam',
            'datum' => 'Datum',
            'tijd' => 'Tijd',
            'reden' => 'Reden',
        ];
    }
}
