<?php
    require "HtmlElement.php";
    class HtmlList {
        public $ordered;
        public $list;
        public $name;
        function __construct($name, $list) {
            $this->name = $name;
            $this->list = $list;
        }
        function setListType($ordered){
            $this->ordered = $ordered;
        }
        function shuffle(){
            shuffle($this->list);
        }
        function render(){
            if($this->ordered==FALSE){
                return renderUL();
            } else {
                return renderOL();
            }
        }
        function renderUL(){
                $cout = "<ul>";
                foreach($this->list as $x => $x_value) {
                    $cout .= "<li>".$value."</li>";
                }
                $cout .= "</ul>";
                return $cout;
        }
        function renderOL(){
                $cout = "<ol>";
                foreach($this->list as $x => $x_value) {
                    $cout .= "<li>".$value."</li>";
                }
                $cout .= "</ol>";
        }
    }