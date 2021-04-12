<?php
namespace common\components;


use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

class Common extends \yii\base\Component
{

    /**
     * @param $array ActiveQuery|array
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public static function deleteAll($array)
    {
        /** @var $item ActiveRecord */
        foreach ($array as $item) {
            $item->delete();
        }
    }
}