<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $project_name
 * @property string $start_time
 * @property string $project_place
 * @property string $description
 * @property integer $invested_capital
 * @property string $partners
 * @property string $project_evaluation
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'start_time', 'project_place', 'description', 'invested_capital', 'partners', 'project_evaluation'], 'required'],
            [['start_time'], 'safe'],
            [['description'], 'string'],
            [['invested_capital'], 'integer'],
            [['project_name', 'project_place', 'partners', 'project_evaluation'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'start_time' => 'Start Time',
            'project_place' => 'Project Place',
            'description' => 'Description',
            'invested_capital' => 'Invested Capital',
            'partners' => 'Partners',
            'project_evaluation' => 'Project Evaluation',
        ];
    }
}
