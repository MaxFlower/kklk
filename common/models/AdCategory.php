<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ad_category".
 *
 * @property string $id
 * @property string $title
 *
 * @property Advs[] $advs
 */
class AdCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ad_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvs()
    {
        return $this->hasMany(Advs::className(), ['category_id' => 'id']);
    }
}
