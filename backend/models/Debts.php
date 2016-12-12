<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "debts".
 *
 * @property integer $id
 * @property string $debt_date
 * @property string $person_name
 * @property integer $amount
 * @property string $current_status
 * @property string $description
 */
class Debts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'debts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['debt_date', 'person_name', 'amount', 'current_status', 'description'], 'required'],
            [['debt_date'], 'safe'],
            [['amount'], 'integer'],
            [['description'], 'string'],
            [['person_name', 'current_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'debt_date' => 'Debt Date',
            'person_name' => 'Person Name',
            'amount' => 'Amount',
            'current_status' => 'Current Status',
            'description' => 'Description',
        ];
    }
}
