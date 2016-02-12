<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cats".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $photo
 * @property integer $rank
 */
class Cats extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text', 'photo', 'rank'], 'required'],
            [['rank'], 'integer'],
            [['name', 'text', 'photo'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'photo' => 'Photo',
            'rank' => 'Rank',
        ];
    }
}
