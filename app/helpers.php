<?php 

if(! function_exists('page_title'))
{
    function page_title($title)
    {
        $base_title = 'MISSIONNAIRE DE JESUS';

        if($title === '')
        {
            return $base_title ;
        }else {
            return $title .' | ' .$base_title;
        }
    }
}