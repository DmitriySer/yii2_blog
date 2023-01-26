<?php

/** @var yii\web\View $this */

$this->title = 'Главная';
?>

<?php

?>
<div class="container" id="hero">
    <div class="row justify-content-end">
        <div class="col-lg-6 hero-img-container">
            <a href="single.html">
                <div class="hero-img">
                    <img src="img/hero-img.png">
                </div>
            </a>
        </div>

        <div class="col-lg-9">
            <div class="hero-title">
                <a href="single.html">
                    <h1>Открытый блог</h1>
                </a>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="hero-meta">
                <p>Открытая площадка для любых постов</p>
            </div>
        </div>
    </div>
</div>
<div class="container text-center ">
    <a href="#" class="btn btn-lg btn-light">Все посты</a>
</div>
<div class="container mt-2 mb-2 pt-5 pb-5" id="article-grid">
    <div class="row justify-content-center">
<?foreach ($posts as $post):?>
        <div class="col-xl-6 col-lg-12 text-center">
            <a href="single.html">
                <div class="article-card">
                    <div class="article-img">
                        <img src="img/1.jpeg">
                    </div>

                    <div class="article-meta text-left">
                        <h2><a href="<?=\yii\helpers\Url::to(['post/view','id'=>$post->id])?>"><?=$post->title?></a> </h2>
                        <p><?=$post->text?></p>
                        <p><?=$post->categorii->title?></p>
                        <p><?=Yii::$app->formatter->asDate($post->date, 'dd MMMM')?></p>
                    </div>
                </div>
            </a>
        </div>
<?endforeach;?>
    </div>
</div>
<nav aria-label="Page navigation example">
        <?=\yii\widgets\LinkPager::widget([
            'pagination' => $pages,
            'options' => ['class' => 'pagination  justify-content-center'],
            'linkOptions' => ['class' => 'btn btn-lg btn-light'],
            'pageCssClass' => ['class' => 'page-item'],
            'disabledPageCssClass' => ['class' => 'btn btn-lg btn-light']
            ]);?>
    </nav>




