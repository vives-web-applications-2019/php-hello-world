<?php

require_once('voidElement.php');

class Img extends VoidElement{

    public function __construct($attributes = []) {
        parent::__construct('img', $attributes);
    }
}