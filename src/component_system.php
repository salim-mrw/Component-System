<?php

    /**
     * 
     * 
     */

    use component_system\component_system;
    abstract class component implements component_system{

        private function __construct($tital, $theme_color){
            $this->tital = $tital;
            $this->theme_color = $theme_color;
        }

        public static function div($id, $class):string{
            include 'HTML_Tags/div.php';
            return $return;
        }

        public static function form($id, $class, $name, $method):string{
            include 'HTML_Tags/form.php';
            return $return;
        }

        public static function labal($id, $class, $for):string{
            include 'HTML_Tags/labal.php';
            return $return;
        }

        public static function input($id, $class, $name, $type, $placeholder, $required = "required"):string{
            include 'HTML_Tags/input.php';
            return $return;
        }

        public static function button($id, $class, $type, $value):string{
            include 'HTML_Tags/button.php';
            return $return;
        }

        public static function table($id, $class):string{
            include 'HTML_Tags/table.php';
            return $return;
        }

        public static function tr($id, $class):string{
            include 'HTML_Tags/tr.php';
            return $return;
        }

        public static function th($id, $class):string{
            include 'HTML_Tags/th.php';
            return $return;
        }

        public static function td($id, $class):string{
            include 'HTML_Tags/td.php';
            return $return;
        }

        public static function img($id, $class, $src, $width, $height):string{
            include 'HTML_Tags/img.php';
            return $return;
        }

        public static function h1($id, $class, $text):string{
            include 'HTML_Tags/h1.php';
            return $return;
        }

        public static function h2($id, $class, $text):string{
            include 'HTML_Tags/h2.php';
            return $return;
        }

        public static function h3($id, $class, $text):string{
            include 'HTML_Tags/h3.php';
            return $return;
        }

        public static function h4($id, $class, $text):string{
            include 'HTML_Tags/h4.php';
            return $return;
        }

        public static function h5($id, $class, $text):string{
            include 'HTML_Tags/h5.php';
            return $return;
        }

        public static function h6($id, $class, $text):string{
            include 'HTML_Tags/h6.php';
            return $return;
        }

        public static function p($id, $class, $text):string{
            include 'HTML_Tags/p.php';
            return $return;
        }

        public static function ul($id, $class):string{
            include 'HTML_Tags/ul.php';
            return $return;
        }

        public static function li($id, $class):string{
            include 'HTML_Tags/li.php';
            return $return;
        }

        public static function lo($id, $class):string{
            include 'HTML_Tags/lo.php';
            return $return;
        }

        public static function hr($id, $class, $color):string{
            include 'HTML_Tags/hr.php';
            return $return;
        }

        public static function br($id, $class, $color):string{
            include 'HTML_Tags/br.php';
            return $return;
        }

        public static function span($id, $class, $text, $loopnum):string{
            $count = 0;
            if($count != $loopnum){
                include 'HTML_Tags/span.php';
                $count+=1;
                //$this->span($id, $class, $text, $loopnum - 1);
            }
            return $return;
        }

        public static function loop($text, $loopnum, $count=0):string{
            if($count != $loopnum){
                $count+=1;
                $return = $text;
                self::loop($text, $loopnum - 1);
            }
            return $return;
        }
    }
?>