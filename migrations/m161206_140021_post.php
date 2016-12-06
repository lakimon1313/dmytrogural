<?php

use yii\db\Migration;

class m161206_140021_post extends Migration
{
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(12)->notNull()->unique(),
            'body' => $this->text()
        ]);
    }

    public function down()
    {
        $this->dropTable('post');
    }
}
