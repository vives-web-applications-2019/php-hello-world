<?php

require_once('voidElement.php');

class BR extends VoidElement{

    public function __construct($attributes = []) {
        parent::__construct('br', $attributes);
    }
}