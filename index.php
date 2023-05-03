<?php
require 'vendor/autoload.php';
require __dir__ . '\view\common\header.view.php';
?>
<main>
    <?php
 require Router::load('routes.php')->direct(Request::uri());
 ?>
</main>
<?php
require __dir__ . '\view\common\footer.view.php';
?>