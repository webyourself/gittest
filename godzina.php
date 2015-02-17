<?php

echo 'Date: '. date("r", $_GET['q']);

echo '<br />';
echo 'Strtotime: '. strtotime($_GET['q']);

echo '<br />';
echo 'time(): '. time();
echo '<br />Data: '. date("r", time());

?>