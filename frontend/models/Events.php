<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $text
 * @property integer $date
 * @property string $description
 * @property string $ev_picture
 * @property integer $creater_id
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'date', 'description', 'ev_picture', 'creater_id'], 'required'],
            [['text', 'description'], 'string'],
            [['date', 'creater_id'], 'integer'],
            [['ev_picture'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'date' => 'Date',
            'description' => 'Description',
            'ev_picture' => 'Ev Picture',
            'creater_id' => 'Creater ID',
        ];
    }
}
