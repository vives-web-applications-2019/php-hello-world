<?php

require_once('voidElement.php');

class HR extends VoidElement{

    public function __construct($attributes = []) {
        parent::__construct('hr', $attributes);
    }
}