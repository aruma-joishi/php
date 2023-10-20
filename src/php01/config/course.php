<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$radio = htmlspecialchars($_POST['radio'], ENT_QUOTES);
$quantity = htmlspecialchars($_POST['quantity'], ENT_QUOTES);


print "{$name}様、{$radio}セットを{$quantity}個ですね";