<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Онлайн</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Поиск..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Admin меню', 'options' => ['class' => 'header']],
                    ['label' => 'Рабочий стол', 'icon' => 'fa fa-newspaper-o', 'url' => Yii::$app->homeUrl],
                    ['label' => 'Профиль', 'icon' => 'fa fa-user', 'url' => ['/site/profile']],
                    ['label' => 'Календарь', 'icon' => 'fa fa-calendar', 'url' => ['/site/calendar']],                    
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'User менеджер',
                        'icon' => 'fa fa-group',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Пользователи', 'icon' => 'fa fa-clone', 'url' => ['/user/index']],
                            ['label' => 'Управление ролями', 'icon' => 'fa fa-hand-pointer-o', 'url' => ['/permit/access/role'],],
                            ['label' => 'Правила доступа', 'icon' => 'fa fa-lock', 'url' => ['/permit/access/permission'],],                            
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
