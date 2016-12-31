<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "houseproject".
 *
 * @property integer $id
 * @property string $date
 * @property integer $amount_invested
 * @property string $description
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'houseproject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'amount_invested', 'description'], 'required'],
            [['date'], 'safe'],
            [['amount_invested'], 'integer'],
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
            'date' => 'Date',
            'amount_invested' => 'Amount Invested',
            'description' => 'Description',
        ];
    }
}
