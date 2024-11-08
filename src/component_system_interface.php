<?php

    /**
     * 
     * 
     */

    namespace component_system;
    interface component_system{
        public function div($id, $class):string;
        public function form($id, $class, $name, $method):string;
        public function labal($id, $class, $for):string;
        public function input($id, $class, $name, $type, $placeholder, $required):string;
        public function button($id, $class, $type, $value):string;
        public function table($id, $class):string;
        public function tr($id, $class):string;
        public function th($id, $class):string;
        public function td($id, $class):string;
        public function img($id, $class, $src, $width, $height):string;
        public function h1($id, $class):string;
        public function h2($id, $class):string;
        public function h3($id, $class):string;
        public function h4($id, $class):string;
        public function h5($id, $class):string;
        public function h6($id, $class):string;
        public function p($id, $class):string;
        public function ul($id, $class):string;
        public function li($id, $class):string;
        public function lo($id, $class):string;
        public function hr($id, $class, $color):string;
        public function br($id, $class, $color):string;
        public function span($id, $class, $text, $loopnum):string;
    }
?>