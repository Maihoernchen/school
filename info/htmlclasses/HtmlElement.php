<?php 
    class Attribute {
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

        public function __construct($attributes) {
            foreach($attributes as $key => $val) {  
                $this->attributes[] = $val;
            }
            var_dump($attributes);
        }
        public function addAttribute($attribute) {
            $this->attributes = $attribute;
        }
        // incomplete
        public function render() {
            foreach($this->attributes as $x => $x_value) {
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
        }
    }
?>