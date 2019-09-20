<?php

class Element 
{
    private $content = "";
    private $element = "";

    public function __construct($element, $content = "") {
        $this->content = $content;
        $this->element = $element;
    }

    public function __toString() {
        return "<$this->element>$this->content</$this->element>";
    }
}
