<?php

require_once('element.php');

class H1 extends Element
{
    public function __construct($content) {
        parent::__construct('h1', $content);
    }
}
