<?php

header('Cache-control: private, max-age=0');
require_once "hexlettasks.php";
// an array with the names and links of the Hexlet tasks from their site
$listOfTasks = array (
    "taskPhpCgi" => ["Task PHP CGI" => 'https://ru.hexlet.io/courses/php-mvc/lessons/php-cgi/exercise_unit'],
    "htmlInPhp"  => ["HTML в PHP" => "https://ru.hexlet.io/courses/php-mvc/lessons/php-html/exercise_unit"]
);
// function, witch helps to show linls
print_r(" Hello, world!!!<br />");

foreach($_SERVER as $name => $option)
{
    print_r("{$name} => {$option} <br />");
}
// showing how $_GEt is changing
print_r("<br /><br />");
print_r("<a href = 'http://localhost:8080/?key=value&key2=value2'>get link</a> <br />");
print_r($_GET);

//list of tasks
print_r("<br /><br /> Tasks from Hexlet: <br />");
$numb = 0;
foreach($listOfTasks as $func => $links)
{
    foreach ($links as $name => $link)
    {
        ++$numb;
        print_r("<br />-------<br />");
        print_r("{$numb}) <a href={$link} target='_blank'>{$name}</a>");
        print_r("<br /><br />");
        $func();
    }
}


