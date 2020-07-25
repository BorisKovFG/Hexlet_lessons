<?php

header('Cache-control: private, max-age=0');
require_once "hexlettasks.php";
// an array with the names and links of the Hexlet tasks from their site
$linksOfTasks = array (
    "Task PHP CGI" => 'https://ru.hexlet.io/courses/php-mvc/lessons/php-cgi/exercise_unit',
    "dc" => "dgdg"
);
// function, witch helps to show linls
$getLinkFromHexlet = function ($nameOfTask) use ($linksOfTasks) {
    print_r("<br /><a href={$linksOfTasks[$nameOfTask]} target='_blank'>{$nameOfTask}</a>");
    print_r("<br /> ------- <br />");
};
print_r(" Hello, world!!!<br />");

foreach($_SERVER as $name => $option)
{
    print_r("{$name} => {$option} <br />");
}
// showing how $_GEt is changing
print_r("<br /><br />");
print_r("<a href = 'http://localhost:8080/?key=value&key2=value2'>get link</a> <br />");
print_r($_GET);
//--------------------------------
print_r("<br /><br /> Tasks: <br />");
$getLinkFromHexlet('Task PHP CGI');
taskPhpCgi();

print_r("\n");