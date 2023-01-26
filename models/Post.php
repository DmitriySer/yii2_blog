<?php

namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }
    public function getCategorii()
    {
        return $this->hasOne(Categorii::class,['id' =>'category']);
    }
}