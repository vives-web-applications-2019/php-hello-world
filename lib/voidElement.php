<?php

class VoidElement {

    protected $element = "";

    public function __construct($element) {
        $this->element = $element;
    }

    public function __toString() {
        return "<$this->element>";
    }
}