<?php

namespace backend\widgets;


use Yii;
use yii\base\Widget;

class AttributeWidget extends Widget
{
    public $attribute_list;
    public $simple = 0;

    public function run()
    {
        $this->view->registerJs($this->addScript(), \yii\web\View::POS_READY);
        return $this->render('attribute/index', [
            'attribute_list' => $this->attribute_list,
            'simple' => $this->simple,
        ]);
    }

    private function addScript()
    {
        $tinyMceOptions = json_encode(Yii::$app->params['tinyMceOptions']['clientOptions']);
        $script = <<<JS
        var simple = $this->simple; 
        var tinyMceOptions = $tinyMceOptions;
        
        var mceSelector = '.attribute-html';
        tinyMceOptions['selector'] = mceSelector;
        var attributes = $('.attribute-table .attributes');
        
        function tinyMceReInti() {
            tinymce.remove(mceSelector);
            tinymce.init(tinyMceOptions);
        }
        
        tinyMceReInti();
        
        $('.attribute_tab').on('click', '.add',function(e) {
        e.preventDefault();
            var attribute = $("select[name='select_attribute']");
            var attribute_num = attributes.find('tr').length;
            if (attribute.val() != '') {
                $.ajax({
            url: '/admin/materials/attribute/helper/add',
            type: 'POST',
            data: {
                'simple' : simple,
                'attribute_id' : attribute.val(),
                'attribute_num' : attribute_num,
            },
            success: function(res){
                res = res.split('<tr>');
                $('.attribute-table.add-table').append(res[0]);
                $('.attribute-table.add-table .attributes').append('<tr>'+res[1]);
                tinyMceReInti();
            },
            error: function() {
                alert("Не удалось получить атрибут");
            }
        });
            }
        });
        
        $('.attribute_tab').on('click', '.delete',  function(e) {
            e.preventDefault();
            $(this).closest('tr').detach();
        });
        
        $('.attribute_change').change(function(e) {
            $.ajax({
            url: '/admin/materials/attribute/helper/change',
            type: 'POST',
            data: {
                'simple' : simple,
                'id' : $(this).val(),
            },
            success: function(res){
                $('.attribute_tab').html(res);
                tinyMceReInti();
            },
            error: function() {
                alert("Не удалось получить атрибуты");
            }
        });
            });
JS;
        return $script;
    }
}