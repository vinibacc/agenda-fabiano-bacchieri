<div class="scoreboard">
    <div data-control="toolbar">
        <div class="scoreboard-item title-value">
            <h4><?= e(trans('system::lang.project.name')) ?></h4>
            <?php if ($projectId): ?>
                <p class="wn-icon-chain"><?= $projectName ?></p>
                <p class="description">
                    <?= e(trans('system::lang.project.owner_label')) ?>: <?= $projectOwner ?>
                    (<a
                        href="javascript:;"
                        data-request-confirm="<?= e(trans('system::lang.project.detach_confirm')) ?>"
                        data-request="onDetachProject"
                        data-stripe-load-indicator><?= e(trans('system::lang.project.detach')) ?></a>)
                </p>
            <?php else: ?>
                <p class="wn-icon-chain-broken"><?= e(trans('system::lang.project.none')) ?></p>
                <p class="description">
                    <a
                        href="javascript:;"
                        data-control="popup"
                        data-handler="onLoadProjectForm">
                        <?= e(trans('system::lang.project.attach')) ?>
                    </a>
                </p>
            <?php endif ?>
        </div>
        <div class="scoreboard-item title-value">
            <h4><?= e(trans('system::lang.updates.plugins')) ?></h4>
            <p><?= $pluginsCount ?></p>
            <p class="description">
                <?= e(trans('system::lang.updates.disabled')) ?>: <?= $pluginsCount - $pluginsActiveCount ?>
            </p>
        </div>
        <?php if ($coreBuild): ?>
            <div class="scoreboard-item title-value">
                <h4><?= e(trans('system::lang.updates.core_current_build')) ?></h4>
                <?php if ($coreBuildModified): ?>
                    <p
                        class="oc-icon-exclamation-circle"
                        data-toggle="tooltip"
                        data-placement="bottom"
                        title="This build has been modified"
                    >
                        <?= $coreBuild ?>
                    </p>
                <?php else: ?>
                    <p><?= $coreBuild ?></p>
                <?php endif; ?>

                <p class="description">
                    <a
                        href="javascript:;"
                        data-control="popup"
                        data-handler="onLoadChangelog">
                        <?= e(trans('system::lang.updates.core_view_changelog')) ?>
                    </a>
                </p>
            </div>
        <?php endif ?>
    </div>
</div>
<?php if (count($warnings)): ?>
    <div class="scoreboard">
        <div class="callout fade in callout-danger no-icon">
            <div class="header">
                <h3><?= e(trans('system::lang.updates.update_warnings_title')) ?></h3>
                <ul>
                    <?php foreach ($warnings as $warning): ?>
                        <li><?= $warning ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif ?>
<?= $this->listRender() ?>
