<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chickenproject".
 *
 * @property integer $id
 * @property integer $amount_invested
 * @property string $date
 * @property string $description
 */
class Chicken extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chickenproject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amount_invested', 'date', 'description'], 'required'],
            [['amount_invested'], 'integer'],
            [['date'], 'safe'],
            [['description'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amount_invested' => 'Amount Invested',
            'date' => 'Date',
            'description' => 'Description',
        ];
    }
}
