<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "calendar".
 *
 * @property integer $id
 * @property string $date
 * @property string $value
 */
class Calendar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calendar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'value'], 'required'],
            [['date'], 'safe'],
            [['value'], 'string'],
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
            'value' => 'Value',
        ];
    }
}
