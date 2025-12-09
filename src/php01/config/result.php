<?php
// $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
$selected = htmlspecialchars($_GET['selected'], ENT_QUOTES);
$suryo = htmlspecialchars($_GET['suryo'], ENT_QUOTES);
print "わたしの名前は" . $name;
print "<br />";
print "希望商品は" . $selected;
print "<br />";
print "数量は" . $suryo . "個";
print "<br />";
