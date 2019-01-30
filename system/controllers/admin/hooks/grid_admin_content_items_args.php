<?php

class onAdminGridAdminContentItemsArgs extends cmsAction {

    public function run($data){

        if(!cmsCore::getInstance()->request->isAjax()){return $data;}

        list($grid, $args) = $data;

        $ctype_name = $args[1];

        $content_model = cmsCore::getModel('content');
        $ctype = $content_model->getContentTypeByName($ctype_name);

        $saved = cmsUser::getUPS('admin.grid_columns.content.'.$ctype['id']);

        if(!$saved){return $data;}

        $controller = $args[0];
        $content_table = $content_model->table_prefix.$ctype['name'];

        $settings = $this->getContentGridColumnsSettings($ctype['id']);
        $default = $this->getContentGridColumnsSettingsDefault();

        foreach($saved as $type => $fields){
            foreach($fields as $name => $field){
                if(!empty($field['enabled'])){
                    if(!empty($field['filter']) && isset($settings[$type][$name]['filters'][$field['filter']])){ // && валидация
                        $grid['columns'][$name]['filter'] = $field['filter'];
                        if(strpos($name, 'date_') === 0){

                        }else
                        if($field['filter'] === 'select'){
                            $grid['columns'][$name]['filter'] = 'exact';
                            $grid['columns'][$name]['filter_select'] = $settings[$type][$name]['filter_select'];
                        }
                        //$grid['columns'][$name]['filter'] = $field['filter'];
                    }else
                    if(isset($grid['columns'][$name]['filter'])){
                        unset($grid['columns'][$name]['filter']);
                    }
                    if(isset($default[$type][$name])){continue;} // для стоковых менять только фильтр
                    $grid['columns'][$name]['title'] = $settings[$type][$name]['title'];
                    if(!empty($field['handler']) && isset($settings[$type][$name]['handlers'][$field['handler']])){
                        if($field['handler'] === 'flag'){
                            $grid['columns'][$name]['flag'] = true;
                            $grid['columns'][$name]['flag_toggle'] = href_to($controller->name, 'toggle_item', array('{id}', $content_table, $name));
                            $grid['columns'][$name]['width'] = 60;
                        }else
                        if($field['handler'] === 'to_filter'){
                            $grid['columns'][$name]['handler'] = $settings[$type][$name]['handler_to_filter'];
                        }
                    }

                    if(!empty($settings[$type][$name]['handlers_only'])){
                        $grid['columns'][$name]['handler'] = $settings[$type][$name]['handler_only'];
                    }
                }else
                if(isset($default[$type][$name])){
                    unset($grid['columns'][$name]);
                }
            }
        }

        if(cmsUser::getUPS('admin.grid_columns.content.'.$ctype['id'].'.changed')){ // пришедшие фильтра сбивают фокус с поля ввода
            cmsUser::deleteUPS('admin.grid_columns.content.'.$ctype['id'].'.changed');
            $grid['options']['load_columns'] = true;
        }

        return array($grid, $args);

    }

}
