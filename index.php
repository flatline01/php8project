<?php
use Flatline\Testing\Template as Template;

require_once __DIR__ . '/vendor/autoload.php';

$f = new Template();
echo $f->header();
?>

<h1>hiii</h1>

<?php
echo $f->footer();
?>