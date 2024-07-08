<?php

$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$item = htmlspecialchars($_POST["item"], ENT_QUOTES);
$quantity = htmlspecialchars($_POST["quantity"], ENT_QUOTES);

print "お名前は、" . $name . "<br />";
print "ご希望の商品は、" . $item . "<br />";
print "ご注文数は、" . $quantity . "<br />";