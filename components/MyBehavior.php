<?php
namespace app\components;

use yii\base\Behavior;

class MyBehavior extends Behavior
{
    public $fieldData;
    public $offset = 20;
    public $word = 'posuere';

    public function cutString()
    {
        $result = substr($this->fieldData, 0, $this->offset);

        return $result.'...';
    }

    public function upperString()
    {
        $result = strtoupper($this->fieldData);

        return $result;
    }

    public function boldString()
    {
        if (strripos($this->fieldData, $this->word)) {
            $result = str_replace($this->word, '<b>'.$this->word.'</b>', $this->fieldData);
        } else {
            $result = 0;
        }

        return $result;
    }
}