<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expenditures".
 *
 * @property integer $id
 * @property string $date
 * @property string $place
 * @property integer $amount_spend
 * @property string $despcription
 */
class Expenditures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'expenditures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'place', 'amount_spend', 'despcription'], 'required'],
            [['date'], 'safe'],
            [['amount_spend'], 'integer'],
            [['despcription'], 'string'],
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
            'amount_spend' => 'Amount Spend',
            'despcription' => 'Despcription',
        ];
    }
}
