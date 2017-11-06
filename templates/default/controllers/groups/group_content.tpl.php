<div id="group_profile_header">
    <?php $this->renderChild('group_header', array('group' => $group)); ?>
</div>
<?php if (!empty($datasets)){
    $this->renderAsset('ui/datasets-panel', array(
        'datasets'        => $datasets,
        'dataset_name'    => $dataset,
        'current_dataset' => $current_dataset,
        'base_ds_url'     => $base_ds_url
    ));
} ?>
<div id="group_content_list">
    <?php echo $html; ?>
</div>