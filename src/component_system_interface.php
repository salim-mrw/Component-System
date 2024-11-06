<?php
    interface component_system{
        public function input($id, $class, $name, $type, $placeholder, $required);
        public function button($class, $type, $value);
        public function span($loopnum, $class, $text);
    }
?>