<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "logList".
 *
 * @property integer $id
 * @property string $user
 * @property string $action_description
 * @property string $action_date
 */
class LogList extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'timestamp' => [ 
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['action_date'],  //date('Y-m-d H:i:s')
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logList';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'action_description'], 'required'],
            [['action_description'], 'string'],
            [['action_date'], 'integer'],            
            [['user'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'action_description' => 'Action Description',
            'action_date' => 'Action Date',
        ];
    }    

}
