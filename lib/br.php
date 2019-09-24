<?php

require_once('element.php');

class BR extends Element{

    public function __construct() {
        parent::__construct('br');
    }

    public function __toString() {
        return "<$this->element>";
    }
}