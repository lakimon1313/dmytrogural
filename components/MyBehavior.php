<?php
namespace app\components;

use yii\base\Behavior;

class MyBehavior extends Behavior
{
    public static function cutString($string, $length)
    {
        $result = substr($string, 0, $length);

        return $result.'...';
    }

    public static function upperString($string) {
        $result = strtoupper($string);

        return $result;
    }

    public static function boldString($string, $word) {
        if (strripos($string, $word)) {
            $result = str_replace($word, '<b>'.$word.'</b>', $string);
        } else {
            $result = 0;
        }

        return $result;
    }
}