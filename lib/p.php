<?php

require_once('element.php');

class P extends Element
{
    public function __construct($content = '', $attributes = []) {
        parent::__construct('p', $content, $attributes);
    }
}
