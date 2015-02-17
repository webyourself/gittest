<?php

echo 'Date: '. date("r", $_GET['q']);

echo '<br />';
echo 'Strtotime x: '. strtotime($_GET['q']);

echo '<br />';
echo 'Wywolane funkcji time(): '. time();
echo '<br />Data: '. date("r", time());

// dodajmy komentarz testowy

// kolejny komentarz

?>
