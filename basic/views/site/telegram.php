<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->registerJsFile('js/company-index.js'); 
?>
<h1>Тексты сообщений</h1>
<ul>
<?php foreach ($texts as $text): ?>
    <li>
        <?= Html::encode("{$text->id} ({$text->text})") ?>
    </li>
<?php endforeach; ?>
</ul>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="telegramMasage" placeholder="Сообщение в теллеграмме" aria-label="Сообщение в теллеграмме" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" onclick="SaveTelegramMasage();">Отправтить</button>
  </div>
</div>

<script src="<?php echo Yii::$app->request->baseUrl;?>/js/telegramm.js"></script>
