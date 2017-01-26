<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appointments".
 *
 * @property integer $id
 * @property string $date
 * @property string $place
 * @property string $details
 */
class Appointments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appointments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'place', 'details'], 'required'],
            [['date'], 'safe'],
            [['details'], 'string'],
            [['place'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'place' => 'Place',
            'details' => 'Details',
        ];
    }
}
