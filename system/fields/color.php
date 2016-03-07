<?php

class fieldColor extends cmsFormField {

    public $title       = LANG_PARSER_COLOR;
    public $sql         = 'varchar(7) NULL DEFAULT NULL';
    public $filter_type = 'str';
    public $filter_hint = '#RRGGBB';
    public $allow_index = false;
    public $var_type    = 'string';

    public function getRules() {

        $this->rules[] = array('color');

        return $this->rules;

    }
    
    public function applyFilter($model, $value) {
        return $model->filterLike($this->name, "%{$value}%");
    }
    
    public function parse($value){
        return '<div class="color-block" style="background-color:'.$value.'" title="'.$value.'"></div>';
    }

    public function getStringValue($value){
        return $value;
    }

}
