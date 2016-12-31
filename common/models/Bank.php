<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bank_info".
 *
 * @property integer $id
 * @property string $date
 * @property integer $amount_transfered
 * @property string $reciever
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'amount_transfered', 'reciever'], 'required'],
            [['date'], 'safe'],
            [['amount_transfered'], 'integer'],
            [['reciever'], 'string', 'max' => 255],
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
            'amount_transfered' => 'Amount Transfered',
            'reciever' => 'Reciever',
        ];
    }
}
