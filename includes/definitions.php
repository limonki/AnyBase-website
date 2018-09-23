<?php

// Defines root directory.
define('__ROOT__', dirname(dirname(__FILE__)));

$installed_lang = array('en');

function language()
{
  global $installed_lang;

  $user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  if(in_array($user_lang, $installed_lang)) return $user_lang.'.php';
  else return 'en.php';
}

function updateLang($from, $to)
{
  global $lang;

  $path = '../languages/'.language();
  $file = file_get_contents($path, FILE_USE_INCLUDE_PATH);

  foreach($from as $key => $value)
  {
    $file = str_replace($value, $to[$key], $file);
  }

  if(file_put_contents($path, $file, FILE_USE_INCLUDE_PATH)) return "Succedx01";
  else return "Errorx01";
}

function url2hash($url)
{
  return hash('sha256', $url);
}


?>
