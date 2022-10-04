<?php
// How to use: 
// require_once('./debug.php');
// $debug = new Debug();
// $debug->print_line('some text');

class Debug {
    function print_line($content = null) {
        print_r($content);
        print_r('<br>');
    }

    function print_object($object_or_array) {
        echo '<pre>';
        print_r($object_or_array);
        echo '</pre>';
    }
}