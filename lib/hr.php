<?php

require_once('element.php');

class HR extends Element{

    public function __construct() {
        parent::__construct('hr');
    }

    public function __toString() {
        return "<$this->element>";
    }
}