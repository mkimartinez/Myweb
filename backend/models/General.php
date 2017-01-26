<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "general_plans".
 *
 * @property integer $id
 * @property string $title
 * @property string $date
 * @property string $description
 */
class General extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general_plans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'date', 'description'], 'required'],
            [['date'], 'safe'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'date' => 'Date',
            'description' => 'Description',
        ];
    }
}
