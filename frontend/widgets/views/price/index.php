<?
/* @var $model \common\models\materials\Material */
?>
<!-- Modal -->
<div class="modal fade" id="myModalPrice" tabindex="-1" role="dialog" aria-labelledby="myModalPriceLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalPriceLabel"><?=$model->title?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">х</span></button>
                </h4>
            </div>
            <div class="modal-body">
                <?=$model->text?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>