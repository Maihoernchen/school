<?php 
    class Attributes {
        private $name;
        private $value;
        public function __construct($name,$value) {
            $this->name = $name;
            $this->value = $value;
        }
        public function getName() {
            return $this->name;
        }
        public function getValue() {
            return $this->value;
        }
    }
    class TextElement {
        private $text;

        public function __construct($text){
            $this->name = $text;
        }
        public function render(){
            return $this->text;
        }
    }
    class HtmlElement extends TextElement{
        protected $name;

        public function __construct($name){
            $this->name = $name;
        }
        public function render(){
            return $this->name;
        }
    }
    class WithAttribute extends HtmlElement {
        protected $attributes = array();
        public function __construct($attributes,$name) {
            $this->attributes = $attributes;
            $this->name = $name;
        }
        public function addAttribute($attribute) {
            $this->attributes = $attribute;
        }
        // incomplete
        public function render() {
            $out = '';
            $out .= '<'.$this->name;
            foreach($this->attributes as $x => $x_value) {
                $out .= ' '.$x.'="'.$x_value.'"';
            }
            $out .= '>';
            return $out;
        }
    }
    class WithContent extends WithAttribute {
        protected $textelement;
        public function __construct($attributes, $textelement, $name) {
            $this->attributes = $attributes;
            $this->textelement = $textelement;
            $this->name = $name;
        }
        public function render(){
            $out = '';
            $out .= '<'.$this->name;
            foreach($this->attributes as $x => $x_value) {
                $out .= ' '.$x.'="'.$x_value.'"';
            }
            $out .= '>';
            $out .= $this->textelement;
            $out .= '</'.$this->name.'>';
            return $out;
        }
    }
?>