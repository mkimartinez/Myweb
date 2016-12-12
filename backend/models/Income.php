<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "income".
 *
 * @property integer $id
 * @property string $source
 * @property integer $amount
 * @property string $date_recieved
 */
class Income extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'income';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['source', 'amount', 'date_recieved'], 'required'],
            [['amount'], 'integer'],
            [['date_recieved'], 'safe'],
            [['source'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'source' => 'Source',
            'amount' => 'Amount',
            'date_recieved' => 'Date Recieved',
        ];
    }
}
