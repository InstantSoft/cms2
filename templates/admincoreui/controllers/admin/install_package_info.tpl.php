<?php

    $this->addTplJSName([
        'datatree'
    ]);

    $this->addTplCSSName('datatree');

    $this->setPageTitle(LANG_CP_INSTALL_PACKAGE_INFO);
    $this->addBreadcrumb(LANG_CP_INSTALL_PACKAGE, $this->href_to('install').'?step=1');
    $this->addBreadcrumb(LANG_CP_INSTALL_PACKAGE_INFO);

    $this->addMenuItem('breadcrumb-menu', [
        'title' => LANG_HELP,
        'url'   => LANG_HELP_URL_INSTALL,
        'options' => [
            'target' => '_blank',
            'icon' => 'question-circle'
        ]
    ]);

    // Зависимости удовлетворены
    $depends_pass = true;

    if(!empty($manifest['notice_system_files'])){
        cmsUser::addSessionMessage($manifest['notice_system_files'], 'error');
    }

?>
<h1>
    <?php html($manifest['info']['title']); ?>
    <sup>
        <?php html($manifest['version']['major']); ?>.<?php html($manifest['version']['minor']); ?>.<?php html($manifest['version']['build']); ?>
    </sup>
</h1>


<div id="cp_package_info" class="without-tabs card">
<div class="card-body">
    <form action="<?php echo $this->href_to('install', 'ftp'); ?>" method="post">
        <?php if (isset($manifest['info']['image'])) { ?>
            <div class="image float-right ml-4">
                <img class="rounded" style="max-width: 200px;" src="<?php echo $manifest['info']['image']; ?>?<?php echo mt_rand(); ?>" />
            </div>
        <?php } ?>
        <div class="info">
            <?php if (isset($manifest['author'])) { ?>
            <fieldset>
                <legend><?php echo LANG_CP_PACKAGE_AUTHOR; ?></legend>
                <?php if (isset($manifest['author']['name'])) { ?>
                <p class="author m-0 d-flex align-items-center">
                    <span><?php html($manifest['author']['name']); ?></span>
                    <?php if (isset($manifest['author']['url'])) { ?>
                        <a rel="noopener noreferrer" class="url btn btn-primary btn-sm ml-2" href="<?php echo $manifest['author']['url']; ?>" target="_blank">
                            <?php html_svg_icon('solid', 'link'); ?>
                        </a>
                    <?php } ?>
                    <?php if (isset($manifest['author']['email'])) { ?>
                        <a class="mail btn btn-success btn-sm ml-2" href="mailto:<?php echo $manifest['author']['email']; ?>">
                            <?php html_svg_icon('solid', 'envelope-open-text'); ?>
                        </a>
                    <?php } ?>
                </p>
                <?php } ?>
            </fieldset>
            <?php } ?>

            <?php if (isset($manifest['package'])) { ?>
            <fieldset>
                <legend><?php echo LANG_CP_PACKAGE_TYPE; ?></legend>
                <p class="m-0"><?php echo $manifest['package']['type_hint']; ?>
                <?php if (!empty($manifest['package']['installed_version'])) { ?>
                    <?php echo ' '.$manifest['package']['installed_version'].' => '.$manifest['version']['major'].'.'.$manifest['version']['minor'].'.'.$manifest['version']['build']; ?>
                <?php } ?>
                </p>
            </fieldset>
            <?php } ?>

            <?php if (isset($manifest['description'])) { ?>
            <fieldset>
                <legend><?php echo LANG_CP_PACKAGE_DESCRIPTION; ?></legend>
                <p class="m-0">
                    <?php echo string_make_links(nl2br(implode("\n", $manifest['description']['text']))); ?>
                </p>
            </fieldset>
            <?php } ?>

            <?php if (isset($manifest['depends'])) { ?>
            <fieldset>
                <legend><?php echo LANG_CP_PACKAGE_DEPENDS; ?></legend>
                <div class="list-group list-group-accent">
                    <?php if (isset($manifest['depends']['php'])) { ?>
                        <?php $hl_class = !$manifest['depends_results']['php'] ? 'danger' : 'success'; ?>
                        <div class="list-group-item list-group-item-accent-<?php echo $hl_class; ?>">
                            <?php echo LANG_CP_PACKAGE_DEPENDS_PHP; ?>
                            <span class="ml-3 badge badge-<?php echo $hl_class; ?> badge-pill">
                                <?php echo $manifest['depends']['php']; ?>
                            </span>
                        </div>
                        <?php if (!$manifest['depends_results']['php']){ $depends_pass = false; } ?>
                    <?php } ?>
                    <?php if (isset($manifest['depends']['core'])) { ?>
                        <?php $hl_class = !$manifest['depends_results']['core'] ? 'danger' : 'success'; ?>
                        <div class="list-group-item list-group-item-accent-<?php echo $hl_class; ?>">
                            <?php echo LANG_CP_PACKAGE_DEPENDS_CORE; ?>
                            <span class="ml-3 badge badge-<?php echo $hl_class; ?> badge-pill">
                                <?php echo $manifest['depends']['core']; ?>
                            </span>
                        </div>
                        <?php if (!$manifest['depends_results']['core']){ $depends_pass = false; } ?>
                    <?php } ?>
                    <?php if (isset($manifest['depends']['package'])) { ?>
                        <?php $hl_class = !$manifest['depends_results']['package'] ? 'danger' : 'success'; ?>
                        <div class="list-group-item list-group-item-accent-<?php echo $hl_class; ?>">
                            <?php echo LANG_CP_PACKAGE_DEPENDS_PACKAGE; ?>
                            <span class="ml-3 badge badge-<?php echo $hl_class; ?> badge-pill">
                                <?php echo $manifest['depends']['package']; ?>
                            </span>
                        </div>
                        <?php if (!$manifest['depends_results']['package']){ $depends_pass = false; } ?>
                    <?php } ?>
                    <?php if (isset($manifest['depends']['dependent_type'])) { ?>
                        <?php $hl_class = !$manifest['depends_results']['dependent_type'] ? 'danger' : 'success'; ?>
                        <div class="list-group-item list-group-item-accent-<?php echo $hl_class; ?>">
                            <?php echo sprintf(LANG_CP_PACKAGE_DEPENDENT_TYPE, string_lang('LANG_CP_PACKAGE_DEPENDENT_'.$manifest['depends']['dependent_type']), $manifest['depends']['dependent_url'], $manifest['depends']['dependent_title']); ?>
                            <span class="ml-3 badge badge-<?php echo $hl_class; ?> badge-pill">
                                <?php echo $manifest['depends_results']['dependent_type'] ? LANG_CP_INSTALLED : LANG_CP_NOT_INSTALLED; ?>
                            </span>
                        </div>
                        <?php if (!$manifest['depends_results']['dependent_type']){ $depends_pass = false; } ?>
                    <?php } ?>
                    <?php if (!empty($manifest['depends_results']['dependent_type']) && isset($manifest['depends']['dependent_version'])) { ?>
                        <?php $hl_class = !$manifest['depends_results']['dependent_version'] ? 'danger' : 'success'; ?>
                        <div class="list-group-item list-group-item-accent-<?php echo $hl_class; ?>">
                            <?php echo LANG_CP_PACKAGE_DEPENDS_PACKAGE; ?> <a href="<?php echo $manifest['depends']['dependent_url']; ?>" target="_blank" rel="noopener noreferrer"><?php echo $manifest['depends']['dependent_title']; ?></a>
                            <span class="ml-3 badge badge-<?php echo $hl_class; ?> badge-pill">
                                <?php echo $manifest['depends']['dependent_version']; ?>
                            </span>
                        </div>
                        <?php if (!$manifest['depends_results']['dependent_version']){ $depends_pass = false; } ?>
                    <?php } ?>
                </div>
            </fieldset>
            <?php } ?>

            <?php if ($manifest['contents']) { ?>
            <fieldset>
                <legend><?php echo LANG_CP_PACKAGE_CONTENTS; ?></legend>
                <div id="tree" class="no-overflow skeleton-tree">
                    <?php echo html_array_to_list($manifest['contents']); ?>
                </div>
                <?php ob_start(); ?><script>
                    $(function(){
                        $("#tree").dynatree({
                            expand: true
                        });
                    });
                </script><?php $this->addBottom(ob_get_clean()); ?>
            </fieldset>
            <?php } ?>
        </div>
        <div class="buttons mt-4">
            <?php if ($depends_pass){ ?>
                <a href="<?php echo $this->href_to('install', 'ftp'); ?>" class="btn btn-primary">
                    <?php echo LANG_INSTALL; ?>
                </a>
            <?php } ?>
            <a href="<?php echo $this->href_to('addons_list'); ?>" class="btn btn-secondary">
                <?php echo LANG_CANCEL; ?>
            </a>
        </div>
    </form>
</div>
</div>