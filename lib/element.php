<?php

require_once('voidElement.php');

class Element extends VoidElement
{
    protected $content = "";

    public function __construct($element, $content = "") {
        parent::__construct($element);
        $this->content = $content;
    }

    public function __toString() {
        $opentag = parent::__toString();
        return "$opentag$this->content</$this->element>";
    }
}
