<?php
    require "HtmlElement.php";
    class HtmlList {
        public $this;
        public $list;
        public $name;
        function __construct($name, $list) {
            $this->name = $name;
            $this->list = $list;
        }
        function sortUp(){
            sort($this->list);
        }
        function sortDown(){
            rsort($this->list);
        }
        function setListType($type){
            $this->type = $type;
        }
        function shuffle(){
            shuffle($this->list);
        }
        function renderUL(){
            $cout = "<ul>";
            foreach($this->list as $x => $x_value) {
                $cout .= "<li>".$x_value."</li>";
            }
            $cout .= "</ul>";
            return $cout;
        }
        function renderOL(){
            $cout = "<ol>";
            foreach($this->list as $x => $x_value) {
                $cout .= "<li>".$x_value."</li>";
            }
            $cout .= "</ol>";
            return $cout;
        }
        function renderCL(){
            $cout = "<ul>";
            foreach($this->list as $x => $x_value) {
                $cout .= "<li>".'<input type="checkbox" id='.$x_value.' name='.$x_value.'>'.$x_value."</li>";
            }
            $cout .= "</ul>";
            return $cout;
        }
        function render(){
            if($this->type=='ul'){
                return $this->renderUL();
            } elseif($this->type=='ol'){
                return $this->renderOL();
            } elseif($this->type=='cl'){
                return $this->renderCL();
            }
        }
        function search($obj){
            return array_search($obj,$this->list);
        }
        function rendercsv($sep=','){
            $csv;
            foreach($this->list as $x => $x_value) {
                $csv .= $x_value;
                $csv .= $sep;
            }
            return $csv;
        }
    }