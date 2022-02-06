<?php
use Flatline\Testing\Template as Template;
use Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';


$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$router = new \Bramus\Router\Router();
$t = new Template();
$t->settings(array("path"=>"/content/views"));

$router->get('/', function() use ($t){
    echo $t->header();
    echo "<h1>home</h1>";
    echo $t->get_path();
    echo $t->footer();

 });

 $router->get('/about', function() use ($t) {
    echo $t->header();
    echo 'About Page Contents';
    echo $t->footer();
});

$router->run();
/* echo $t->header();x      
var_dump($_ENV);
?>

<h1 id="hey" class="title">hiii</h1>

<?php
echo $t->footer();
?> */