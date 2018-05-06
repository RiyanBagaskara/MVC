<?php

// setup auto include menggurnakan foreach
foreach (glob("classes/*.class.php") as $filename)
{
    include $filename;
}

//jika router.php dibuka tanpa pathinfo
if (!isset($_SERVER['PATH_INFO'])) {
  header('Location: router.php/FormController/viewForm');
}

//pathinfo
$pathInfo = $_SERVER['PATH_INFO'];
$mvc = explode("/", $pathInfo);
$controller = $mvc[1];
$method = $mvc[2];

// instansiasi controller
if (isset($_POST)) {
  $c = new FormController();
  $c->setData($_POST);
  $c->setFile($_FILES);
}
// panggil method dari controller
call_user_func(array($c, $method));
