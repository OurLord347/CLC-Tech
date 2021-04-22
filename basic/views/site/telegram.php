<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Тексты сообщений</h1>
<ul>
<?php foreach ($texts as $text): ?>
    <li>
        <?= Html::encode("{$text->id} ({$text->text})") ?>
    </li>
<?php endforeach; ?>
</ul>
