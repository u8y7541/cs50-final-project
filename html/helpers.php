<?php
function render($view, $args=[]) {
    extract($args);
    require('views/header.php');
    require('views/' . $view);
    require('views/footer.php');
    exit;
}
?>
