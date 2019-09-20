<?php

require_once('element.php');

class P extends Element
{
    public function __construct($content = '') {
        parent::__construct('p', $content);
    }
}
