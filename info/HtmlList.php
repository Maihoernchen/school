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
        function renderUL(){
            if($ordered==FALSE){
                $cout = "<ul>";
                foreach($this->list as $x => $x_value) {
                    $cout .= "<li>".$value."</li>";
                }
                $cout .= "</ul>";
                return $cout;
            }
        }
        function renderOL(){
            if($ordered==TRUE){
                $cout = "<ol>";
                foreach($this->list as $x => $x_value) {
                    $cout .= "<li>".$value."</li>";
                }
                $cout .= "</ol>";
                return $cout;
            }
        }
    }