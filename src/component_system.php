<?php
    class component implements component_system{

        public function __construct(string $var = null) {
            $this->var = $var;
        }

        public function input($id, $class, $name, $type, $placeholder, $required){
            include 'input.php';
        }

        public function button($class, $type, $value){
            include 'button.php';
        }

        public function span($loopnum, $class, $text){
            $count = 0;
            if($count != $loopnum){
                include 'span.php';
                $count+=1;
                $this -> span($loopnum - 1, $class, $text);
            }
        }
    }

    $component = new component();
?>