<?php
    namespace component_system;
    interface component_system{
        public function div($id, $class);
        public function form($id, $class, $name, $method);
        public function labal($id, $class, $for);
        public function input($id, $class, $name, $type, $placeholder, $required);
        public function button($id, $class, $type, $value);
        public function table($id, $class);
        public function tr($id, $class);
        public function th($id, $class);
        public function td($id, $class);
        public function img($id, $class, $width, $height);
        public function h1($id, $class);
        public function h2($id, $class);
        public function h3($id, $class);
        public function h4($id, $class);
        public function h5($id, $class);
        public function h6($id, $class);
        public function p($id, $class);
        public function ul($id, $class);
        public function li($id, $class);
        public function lo($id, $class);
        public function span($id, $class, $text, $loopnum);
    }
?>