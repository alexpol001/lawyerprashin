<aside class="main-sidebar">

    <section class="sidebar">

        <?
        $checkController = function ($controller) {
            return $controller === $this->context->getUniqueId();
        };
        ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Меню', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Материалы',
                        'icon' => 'sticky-note',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Менеджер материалов', 'url' => ['/materials/material'], 'active' => $checkController('materials/material')],
//                            ['label' => 'Менеджер категорий', 'url' => ['/materials/category'], 'active' => $checkController('materials/category')],
//                            [
//                                'label' => 'Менеджер атрибутов',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Атрибуты', 'url' => ['/materials/attribute/list'], 'active' => $checkController('materials/attribute/list')],
//                                    ['label' => 'Группы атрибутов', 'url' => ['/materials/attribute/group'], 'active' => $checkController('materials/attribute/group')]
//                                ]
//                            ],
                            ['label' => 'Файловый менеджер', 'url' => ['/materials/files'], 'active' => $checkController('materials/files')],
                        ]
                    ],
                    [
                        'label' => 'Настройки',
                        'icon' => 'cog',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Сайт', 'url' => ['/setting/site'], 'active' => $checkController('setting/site')],
                            ['label' => 'Пользователи', 'url' => ['/setting/user'], 'active' => $checkController('setting/user')],
                        ]
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
