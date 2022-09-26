<?php 
// extends TextElement 
    class HtmlElement {
        public function __construct($el){
            $this->name = $el;
        }
        public function render(){
            print_r('<'.$this->name.'>');
        }
    }
    // $el is the name of the element
    // $el = 'h1';
    // $obj = new HtmlElement($el);
?>