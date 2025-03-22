<?php

    /**
     * 
     * 
     */

    namespace component_system;
    interface component_system{
        public static function div($id, $class):string;
        public static function form($id, $class, $name, $method):string;
        public static function labal($id, $class, $for):string;
        public static function input($id, $class, $name, $type, $placeholder):string;
        public static function button($id, $class, $type, $value):string;
        public static function table($id, $class):string;
        public static function tr($id, $class):string;
        public static function th($id, $class):string;
        public static function td($id, $class):string;
        public static function img($id, $class, $src, $width, $height):string;
        public static function h1($id, $class, $text):string;
        public static function h2($id, $class, $text):string;
        public static function h3($id, $class, $text):string;
        public static function h4($id, $class, $text):string;
        public static function h5($id, $class, $text):string;
        public static function h6($id, $class, $text):string;
        public static function p($id, $class, $text):string;
        public static function ul($id, $class):string;
        public static function li($id, $class):string;
        public static function lo($id, $class):string;
        public static function hr($id, $class, $color):string;
        public static function br($id, $class, $color):string;
        public static function span($id, $class, $text):string;
    }
?>