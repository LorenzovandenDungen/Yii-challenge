<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telaat_komers".
 *
 * @property int $id
 * @property string $naam
 * @property string $datum
 * @property string $tijd
 * @property string|null $reden
 */
class TelaatKomers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telaat_komers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naam', 'datum', 'tijd'], 'required'],
            [['datum', 'tijd'], 'safe'],
            [['reden'], 'string'],
            [['naam'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
