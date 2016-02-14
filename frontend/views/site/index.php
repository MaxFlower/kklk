<?php

/* @var $this yii\web\View */

$this->title = 'Калининградский Клуб Любителей Кошек (ККЛК)';

$this->registerJsFile('@web/js/main-index.js', ['position'=>$this::POS_END], 'main-index')
?>

<section class="left">
    <div id="catsCarousel" data-ride="carousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#catsCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#catsCarousel" data-slide-to="1"></li>
            <li data-target="#catsCarousel" data-slide-to="2"></li>
        </ol>
        <div role="listbox" class="carousel-inner">
            <div class="item active"><img src="img/slide1.jpg" title="Wild Cat"/></div>
            <div class="item"><img src="img/slide2.jpg" title="Cute Cat"/></div>
            <div class="item"><img src="img/slide3.jpg" title="Big Cat"/></div>
        </div>
        <a href="#catsCarousel" data-slide="prev" class="carousel-control left">&lsaquo;</a>
        <a href="#catsCarousel" data-slide="next" class="carousel-control right">&rsaquo;</a>
    </div>
    
    <article class="about">
        <p><img src="img/icon_about_us-01.png"/></p>
        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
    </article>
    
    <div class="calendar">
        <div class="calendar-ui">
            <div class="calendar-label">
            <div class="label-image"><img src="img/icon_calender-02.png"/></div>
            <div class="label-text"><span>Календарь событий</span></div>
        </div>
        <div class="events-calendar">
            <div id="datepicker"></div>            
        </div>
    </div>
            
    <div class="eventslist">
        <div class="event">
            <hr/>
            <p class="eventdate">05.02.2016, пятница 2016</p><a class="eventname">Международная выставка кошек</a>
            <p class="eventinfo">ДК Рыбаков, 18.00</p>
        </div>
        <div class="event">
            <hr/>
            <p class="eventdate">05.02.2016, пятница 2016</p><a class="eventname">Международная выставка кошек</a>
            <p class="eventinfo">ДК Рыбаков, 18.00  </p>
        </div><a href="#">Смотреть все</a>
    </div>
    </div>
</section>
<section class="right">
    <div class="banner">
        <img src="http://placehold.it/200x200"/>
    </div>
    <div class="ad-label">
        <div class="label-image">
            <img src="img/icon_advertisment-02.png"/>
        </div>
        <div class="label-text">
            <span>Объявления</span></div>
        </div>
    <div class="ad">
        <a>Персидские котята в добрые руки</a>
        <img src="img/thumbnail1.jpg" title="Персидские котята в добрые руки"/>
        <p>Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker.</p>
    </div>
    <div class="banner">
        <img src="http://placehold.it/200x90"/>
    </div>
    <div class="ad"><a>Персидские котята в добрые руки</a>
        <img src="img/thumbnail2.jpg" title="Персидские котята в добрые руки"/>
        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века спользуя Lorem Ipsum для распечатки образцов. </p>
    </div>
</section>