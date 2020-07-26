<?php

header('Cache-control: private, max-age=0');

require __DIR__ . '/../vendor/autoload.php';
require_once "hexlettasks.php";

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
    $response->getBody()->write('Welcome to Slim!');
    return $response;
});
$app->get('/users', function ($request, $response) {
    return $response->write('GET /users');
});

$app->post('/users', function ($request, $response) {
    return $response->write('POST /users');
});
$app->run();
// an array with the names and links of the Hexlet tasks from their site
$listOfTasks = array (
    "taskPhpCgi" => ["PHP CGI" => 'https://ru.hexlet.io/courses/php-mvc/lessons/php-cgi/exercise_unit'],
    "htmlInPhp"  => ["HTML в PHP" => "https://ru.hexlet.io/courses/php-mvc/lessons/php-html/exercise_unit"],
    "mFrameworkSlim" => ["Микрофреймворк Slim" => "https://ru.hexlet.io/courses/php-mvc/lessons/slim/exercise_unit"],
    "requestHandler" => ["Обработчики запросов" =>
    "https://ru.hexlet.io/courses/php-mvc/lessons/handlers/exercise_unit"]
);

print_r(" Hello, world!!!<br />");

foreach ($_SERVER as $name => $option) {
    print_r("{$name} => {$option} <br />");
}
// showing how $_GEt is changing
print_r("<br /><br />");
print_r("<a href = 'http://localhost:8080/?key=value&key2=value2'>get link</a> <br />");
print_r($_GET);

//list of tasks
print_r("<br /><br /> Tasks from Hexlet: <br />");
$numberOfTask = 0;
foreach ($listOfTasks as $func => $links) {
    foreach ($links as $name => $link) {
        ++$numberOfTask;
        print_r("<br />-------<br />");
        print_r("{$numberOfTask}) <a href={$link} target='_blank'>{$name}</a>");
        print_r("<br /><br />");
        $func();
    }
}
