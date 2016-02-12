<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "advs".
 *
 * @property integer $id
 * @property string $ad_text
 * @property integer $created_at
 * @property string $ad_photo
 * @property integer $creater_id
 * @property integer $rank
 * @property string $tags
 */
class Advs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ad_text', 'ad_photo', 'creater_id', 'rank', 'tags'], 'required'],
            [['created_at', 'creater_id', 'rank'], 'integer'],
            [['tags'], 'string'],
            [['ad_text', 'ad_photo'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad_text' => 'Ad Text',
            'created_at' => 'Created At',
            'ad_photo' => 'Ad Photo',
            'creater_id' => 'Creater ID',
            'rank' => 'Rank',
            'tags' => 'Tags',
        ];
    }
}
