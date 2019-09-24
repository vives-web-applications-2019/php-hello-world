<?php

require_once('voidElement.php');

class Element extends VoidElement
{
    protected $content = "";

    public function __construct($element, $content = "", $attributes = []) {
        parent::__construct($element, $attributes);
        $this->content = $content;
    }

    public function __toString() {
        $opentag = parent::__toString();
        return "$opentag$this->content</$this->element>";
    }
}
