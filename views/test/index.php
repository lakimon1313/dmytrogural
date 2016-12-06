<?php

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div>

    <input type="hidden" name="route" value="<?= $route; ?>">
    <div class="panel panel-primary">
        <div class="panel-heading">Cut String</div>
        <div class="panel-body">
            <div>
                <input type="hidden" name="operation-number" value="1">
                <a href="" class="btn btn-primary submit-btn">Submit</a>
                <p class="text-success"></p>
            </div>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Upper String</div>
        <div class="panel-body">
            <input type="hidden" name="operation-number" value="2">
            <a href="" class="btn btn-primary submit-btn">Submit</a>
            <p class="text-success"></p>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Find word String</div>
        <div class="panel-body">
            <input type="hidden" name="operation-number" value="3">
            <a href="" class="btn btn-primary submit-btn">Submit</a>
            <p class="text-success"></p>
        </div>
    </div>

</div>

