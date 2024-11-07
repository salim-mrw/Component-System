<?php

    /**
     * 
     */

    use component_system\component_system;
    class component implements component_system{

        public function __construct(string $var = null) {
            $this->var = $var;
        }

        public function div($id, $class):string{
            include 'HTML_Tags/div.php';
            return '';
        }

        public function form($id, $class, $name, $method):string{
            include 'HTML_Tags/form.php';
            return '';
        }

        public function labal($id, $class, $for):string{
            include 'HTML_Tags/labal.php';
            return '';
        }

        public function input($id, $class, $name, $type, $placeholder, $required):string{
            include 'HTML_Tags/input.php';
            return '';
        }

        public function button($id, $class, $type, $value):string{
            include 'HTML_Tags/button.php';
            return '';
        }

        public function table($id, $class):string{
            include 'HTML_Tags/table.php';
            return '';
        }

        public function tr($id, $class):string{
            include 'HTML_Tags/tr.php';
            return '';
        }

        public function th($id, $class):string{
            include 'HTML_Tags/th.php';
            return '';
        }

        public function td($id, $class):string{
            include 'HTML_Tags/td.php';
            return '';
        }

        public function img($id, $class, $width, $height):string{
            include 'HTML_Tags/img.php';
            return '';
        }

        public function h1($id, $class):string{
            include 'HTML_Tags/h1.php';
            return '';
        }

        public function h2($id, $class):string{
            include 'HTML_Tags/h2.php';
            return '';
        }

        public function h3($id, $class):string{
            include 'HTML_Tags/h3.php';
            return '';
        }

        public function h4($id, $class):string{
            include 'HTML_Tags/h4.php';
            return '';
        }

        public function h5($id, $class):string{
            include 'HTML_Tags/h5.php';
            return '';
        }

        public function h6($id, $class):string{
            include 'HTML_Tags/h6.php';
            return '';
        }

        public function p($id, $class):string{
            include 'HTML_Tags/p.php';
            return '';
        }

        public function ul($id, $class):string{
            include 'HTML_Tags/ul.php';
            return '';
        }

        public function li($id, $class):string{
            include 'HTML_Tags/li.php';
            return '';
        }

        public function lo($id, $class):string{
            include 'HTML_Tags/lo.php';
            return '';
        }

        public function span($id, $class, $text, $loopnum):string{
            $count = 0;
            if($count != $loopnum){
                include 'HTML_Tags/span.php';
                $count+=1;
                $this -> span($id, $class, $text, $loopnum - 1);
            }
            return '';
        }
    }
?>