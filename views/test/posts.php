<?php

/* @var $this yii\web\View */
$this->title = 'Posts';
?>
<div>
    <? foreach ($posts as $post) { ?>
        <div class="panel panel-primary">
            <div class="panel-heading"><?= $post['title'] ?></div>
            <div class="panel-body">
                <div>
                    <p><?= $post['body'] ?></p>
                </div>
            </div>
        </div>
    <? } ?>
</div>

