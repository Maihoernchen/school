<?php 
// extends TextElement 
    class HtmlElement {
        private $name;

        public function __construct($name){
            $this->name = $name;
        }
        public function render(){
            return('<'.$this->name.'>');
        }
    }
?>