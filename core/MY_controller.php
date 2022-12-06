<?php
class MY_controller
{
    
    function __construct()
    {
        
    }

    function load_model($string)
    {
        require_once('model/' . $string . '.php');
    }
    function load_view($string)
    {
        require_once('view/' . $string . '.php');
    }
}

