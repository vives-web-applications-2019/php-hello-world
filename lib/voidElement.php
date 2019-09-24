<?php

class VoidElement {

    protected $element = "";
    protected $attributes;

    public function __construct($element, $attributes = []) {
        $this->element = $element;
        $this->attributes = $attributes;
    }

    public function __toString() {
        $attributes = $this->attributesList();
        return "<$this->element$attributes>";
    }

    private function attributesList() {
        $content = '';
        foreach ($this->attributes as $key => $value) {
            $content .= " $key=\"$value\"";
        }
        return $content;
    }
}