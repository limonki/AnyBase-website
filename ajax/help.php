<?php

require_once("../includes/definitions.php");
require_once(__ROOT__.'/includes/language.php');
require_once(__ROOT__.'/languages/'.language());

$search_ = htmlentities($_POST['search'], ENT_QUOTES);

$flag = true;

if(!empty($_POST['search']))
{
  $search_lvl = 1;
  if(strpos($search_, ' -all') !== false)
  {
    $search_ = str_replace(' -all', '', $search_);
    $search_lvl = 0;
  }

  $search = explode(' ', $search_);
  $found = false;

  $array = array();

  foreach($help->get() as $key => $value)
  {
    $found = false;

    if(!empty($value))
    {
      if(strpos($value, ' '.$search_.' ') !== false)
      {
        array_push($array, str_replace(' '.$search_.' ', ' <b>'.$search_.'</b> ', $value));
        $flag = false;
        $found = true;
      }
      else if(strpos($value, $search_.' ') !== false)
      {
        array_push($array, str_replace($search_.' ', '<b>'.$search_.'</b> ', $value));
        $flag = false;
        $found = true;
      }
      else if(strpos($value, ' '.$search_.':') !== false)
      {
        array_push($array, str_replace(' '.$search_.':', ' <b>'.$search_.'</b>: ', $value));
        $flag = false;
        $found = true;
      }
      else if(strpos($value, ' '.$search_.'-') !== false)
      {
        array_push($array, str_replace(' '.$search_.'-', ' <b>'.$search_.'</b>-', $value));
        $flag = false;
        $found = true;
      }
    }

    if(!$found && $search_lvl == 1)
    {
      $found = false;
      foreach($search as $key2 => $value2)
      {
        if(!empty($value2) && !$found)
        {
          if(strpos($value, ' '.$value2.' ') !== false)
          {
            array_push($array, str_replace(' '.$value2.' ', ' <b>'.$value2.'</b> ', $value));
            $flag = false;
            $found = true;
          }
          else if(strpos($value, $value2.' ') !== false)
          {
            array_push($array, str_replace($value2.' ', '<b>'.$value2.'</b> ', $value));
            $flag = false;
            $found = true;
          }
          else if(strpos($value, ' '.$value2.':') !== false)
          {
            array_push($array, str_replace(' '.$value2.':', ' <b>'.$value2.'</b>: ', $value));
            $flag = false;
            $found = true;
          }
          else if(strpos($value, ' '.$value2.'-') !== false)
          {
            array_push($array, str_replace(' '.$value2.'-', ' <b>'.$value2.'</b>-', $value));
            $flag = false;
            $found = true;
          }
        }
      }
    }
  }
}

if($flag) echo '<h1>'.$lang->get("HELP_NOT_FOUND").'</h1>';
else foreach($array as $key => $value) echo $value;

?>
