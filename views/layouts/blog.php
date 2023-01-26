<?php

use \app\assets\AppAsset;
use yii\helpers\Html;


AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container-fluid" id="header">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo1.png" width="80"></a>


            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="btn btn-lg btn-light">Авторизация</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- hero ends -->

<?= $content ?>

<footer class="container-fluid mt-1 p-4">
    <div class="container ">
        <div class="row pb-1">
            <!-- Footer logo -->
            <div class="col-lg-3 col-md-12"><img src="img/logo1.png" width="80"></div>

            <!-- footer links -->
            <div class="col-lg-6 col-md-12">
<!--                <ul class="nav justify-content-center">-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active" href="#">Travel Tips</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">Get Inspired</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">Cheap Airfare</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">About</a>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>

            <!-- footer social links -->
            <div class="col-lg-3 col-md-12">
<!--                <ul class="nav justify-content-end">-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active btn btn-light" href="#"><i class="fab fa-facebook-f"></i></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active btn btn-light" href="#"><i class="fab fa-google"></i></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active btn btn-light" href="#"><i class="fab fa-twitter"></i></a>-->
<!--                    </li>-->
<!--                </ul>-->

            </div>

            <hr>
        </div>
        <hr>

        <!-- copyright text -->
        <div class="row pt-2">
            <div class="col-lg-12 text-center">
                <span>&copy <a href="">NewToDesign.com</a> All Rights Received.</span>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>