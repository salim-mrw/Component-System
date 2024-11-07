<?php
    use component_system\component_system;
    class component implements component_system{

        public function __construct(string $var = null) {
            $this->var = $var;
        }

        public function div($id, $class){
            include 'HTML_Tags/div.php';
        }

        public function form($id, $class, $name, $method){
            include 'HTML_Tags/form.php';
        }

        public function labal($id, $class, $for){
            include 'HTML_Tags/labal.php';
        }

        public function input($id, $class, $name, $type, $placeholder, $required){
            include 'HTML_Tags/input.php';
        }

        public function button($id, $class, $type, $value){
            include 'HTML_Tags/button.php';
        }

        public function table($id, $class){
            include 'HTML_Tags/table.php';
        }

        public function tr($id, $class){
            include 'HTML_Tags/tr.php';
        }

        public function th($id, $class){
            include 'HTML_Tags/th.php';
        }

        public function td($id, $class){
            include 'HTML_Tags/td.php';
        }

        public function img($id, $class, $width, $height){
            include 'HTML_Tags/img.php';
        }

        public function h1($id, $class){
            include 'HTML_Tags/h1.php';
        }

        public function h2($id, $class){
            include 'HTML_Tags/h2.php';
        }

        public function h3($id, $class){
            include 'HTML_Tags/h3.php';
        }

        public function h4($id, $class){
            include 'HTML_Tags/h4.php';
        }

        public function h5($id, $class){
            include 'HTML_Tags/h5.php';
        }

        public function h6($id, $class){
            include 'HTML_Tags/h6.php';
        }

        public function p($id, $class){
            include 'HTML_Tags/p.php';
        }

        public function ul($id, $class){
            include 'HTML_Tags/ul.php';
        }

        public function li($id, $class){
            include 'HTML_Tags/li.php';
        }

        public function lo($id, $class){
            include 'HTML_Tags/lo.php';
        }

        public function span($id, $class, $text, $loopnum){
            $count = 0;
            if($count != $loopnum){
                include 'HTML_Tags/span.php';
                $count+=1;
                $this -> span($id, $class, $text, $loopnum - 1);
            }
        }
    }
?>