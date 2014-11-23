<?php
use yii\helpers\Html;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
$this->title = 'Employer list';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo   Yii::$app->language ?>">
<head>
    <meta charset="<?php echo  Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo Html::csrfMetaTags() ?>
    <title><?php echo  Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">

        <div class="container">
            <?php echo $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
          <p class="pull-left">&copy; Employer list <?php echo  date('Y') ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
