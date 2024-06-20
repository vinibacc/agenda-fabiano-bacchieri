<div data-control="toolbar" class="loading-indicator-container">
    <a
        href="javascript:;"
        data-request="onRefresh"
        data-load-indicator="<?= e(trans('backend::lang.list.updating')) ?>"
        class="btn btn-primary wn-icon-refresh">
        <?= e(trans('backend::lang.list.refresh')) ?>
    </a>
    <a
        href="javascript:;"
        data-request="onEmptyLog"
        data-request-confirm="<?= e(trans('backend::lang.list.delete_selected_confirm')) ?>"
        data-load-indicator="<?= e(trans('system::lang.event_log.empty_loading')) ?>"
        class="btn btn-default wn-icon-eraser">
        <?= e(trans('system::lang.event_log.empty_link')) ?>
    </a>
    <button
        class="btn btn-danger wn-icon-trash-o"
        disabled="disabled"
        onclick="$(this).data('request-data', {
            checked: $('.control-list').listWidget('getChecked')
        })"
        data-request="onDelete"
        data-trigger-action="enable"
        data-trigger=".control-list input[type=checkbox]"
        data-trigger-condition="checked"
        data-request-success="$(this).prop('disabled', true)"
        data-stripe-load-indicator>
        <?= e(trans('backend::lang.list.delete_selected')) ?>
    </button>
</div>
