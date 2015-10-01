<?php

class widgetContentSlider extends cmsWidget {

    public function run(){

        $ctype_id         = $this->getOption('ctype_id');
        $dataset          = $this->getOption('dataset');
        $image_field      = $this->getOption('image_field');
        $big_image_field  = $this->getOption('big_image_field');
        $big_image_preset = $this->getOption('big_image_preset');
        $teaser_fields    = $this->getOption('teaser_field');
        $limit            = $this->getOption('limit', 10);
        $delay            = $this->getOption('delay', 5);

        $model = cmsCore::getModel('content');

        $ctype = $model->getContentType($ctype_id);
        if (!$ctype) { return false; }

        if ($dataset){

            $datasets = $model->getContentDataset($ctype['id']);

            if (isset($datasets)){
                $model->applyDatasetFilters($datasets);
            } else {
                $dataset = false;
            }

        }

        if (!$dataset){
            $model->orderBy('date_pub', 'desc');
        }

        // Отключаем фильтр приватности для тех кому это разрешено
        if (cmsUser::isAllowed($ctype['name'], 'view_all')) {
            $model->disablePrivacyFilter();
        }

        // Скрываем записи из скрытых родителей (приватных групп и т.п.)
        $model->filterHiddenParents();

        $items = $model->limit($limit)->getContentItems($ctype['name']);
        if (!$items) { return false; }

        return array(
            'ctype'            => $ctype,
            'delay'            => $delay,
            'image_field'      => $image_field,
            'big_image_field'  => $big_image_field,
            'big_image_preset' => $big_image_preset,
            'teaser_field'     => $teaser_fields,
            'items'            => $items
        );

    }

}
