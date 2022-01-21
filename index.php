<?php
use Flatline\Testing\Template as Template;
use Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

$t = new Template();
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo $t->header();
var_dump($_ENV);
?>

<h1 id="hey" class="title">hiii</h1>

<?php
echo $t->footer();
?>