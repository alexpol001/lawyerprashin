<?php
return [
    'adminEmail' => 'admin@example.com',
    'tinyMceOptions' => [
        'options' => ['rows' => 16],
        'clientOptions' => [
            'language_url' => '/admin/js/langs/ru.js',
            'plugins' => [
                'advlist autolink lists link charmap hr preview pagebreak',
                'searchreplace wordcount textcolor colorpicker visualblocks visualchars code fullscreen nonbreaking',
                'save insertdatetime media table contextmenu template paste image responsivefilemanager filemanager',
            ],
            'toolbar' => 'undo redo | styleselect | bold italic | fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager link image media | forecolor backcolor',
            'fontsize_formats' => '0.25em 0.5em 0.75em 1em 1.25em 1.5em 1.75em 2em',
            'external_filemanager_path' => '/admin/plugins/responsivefilemanager/filemanager/',
            'filemanager_title' => 'Responsive Filemanager',
            'external_plugins' => [
                'filemanager' => '/admin/plugins/responsivefilemanager/filemanager/plugin.min.js',
                'responsivefilemanager' => '/admin/plugins/responsivefilemanager/tinymce/plugins/responsivefilemanager/plugin.min.js',
            ],
            'relative_urls' => false,
            'filemanager_access_key' => md5('admin_symbweb-yii2'),
        ]
    ]
//    sizeselect | bold italic | fontselect |  fontsizeselect
];
