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
                    ['label' => 'Рабочий стол', 'icon' => 'fa fa-television', 'url' => Yii::$app->homeUrl],
                    ['label' => 'Профиль', 'icon' => 'fa fa-user', 'url' => ['/profile']],
                    ['label' => 'Календарь', 'icon' => 'fa fa-calendar', 'url' => ['/calendar']],                    
                    [
                        'label' => 'User менеджер',
                        'icon' => 'fa fa-group',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Пользователи', 'icon' => 'fa fa-clone', 'url' => ['/user']],
                            ['label' => 'Управление ролями', 'icon' => 'fa fa-hand-pointer-o', 'url' => ['/permit/access/role'],],
                            ['label' => 'Правила доступа', 'icon' => 'fa fa-lock', 'url' => ['/permit/access/permission'],],                            
                        ],
                    ],
                    ['label' => 'Объявления', 'icon' => 'fa fa-newspaper-o', 'url' => ['/advs']],
                    ['label' => 'Статьи', 'icon' => 'fa fa-file-word-o', 'url' => ['/articles']],
                    ['label' => 'События', 'icon' => 'fa fa-bicycle', 'url' => ['/events']],
                    [
                        'label' => 'Менеджер категорий',
                        'icon' => 'fa  fa-folder-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Категории объявлений', 'icon' => 'fa fa-sticky-note-o', 'url' => ['/ad-category']],
                            ['label' => 'Категории статей', 'icon' => 'fa fa-sticky-note-o', 'url' => ['/article-category'],],                                              
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
