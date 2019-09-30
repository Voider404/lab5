<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "demoxml".
 *
 * @property int $re
 */
class DemoXml extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'demoxml';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['re'], 'required'],
            [['re'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            're' => 'Re',
        ];
    }
}
