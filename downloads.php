<?php

require_once('includes/definitions.php');
require_once(__ROOT__.'/includes/template.php');
require_once(__ROOT__.'/includes/language.php');
require_once(__ROOT__.'/languages/'.language());

$downloads = new Template('downloads', 'templates/');
$downloads->add('SITE.TITLE', $lang->get('DOWNLOADS_SITE_TITLE'));
$downloads->add('SITE.DESCRIPTION', $lang->get('DOWNLOADS_SITE_DESCRIPTION'));
$downloads->add('SITE.AUTHOR', $lang->get('DOWNLOADS_SITE_AUTHOR'));
$downloads->add('MENU.1', $lang->get('MENU_1'));
$downloads->add('MENU.2', $lang->get('MENU_2'));
$downloads->add('MENU.3', $lang->get('MENU_3'));
$downloads->add('MENU.4', $lang->get('MENU_4'));
$downloads->add('MENU.5', $lang->get('MENU_5'));
$downloads->add('MENU.6', $lang->get('MENU_6'));
$downloads->add('MENU.7', $lang->get('MENU_7'));
$downloads->add('COOKIES.TITLE', $lang->get('COOKIES_TITLE'));
$downloads->add('COOKIES.TEXT', $lang->get('COOKIES_TEXT'));
$downloads->add('COOKIES.AGREE', $lang->get('COOKIES_AGREE'));
$downloads->add('COOKIES.MORE.INFO', $lang->get('COOKIES_MORE_INFO'));
$downloads->add('DOWNLOADS.TITLE', $lang->get('DOWNLOADS_DOWNLOADS_TITLE'));
$downloads->add('DOWNLOADS.TEXT', $lang->get('DOWNLOADS_DOWNLOADS_TEXT'));
$downloads->add('INDEX.CURRENT.VER', $lang->get('INDEX_CURRENT_VER'));
$downloads->add('FOOTER', $lang->get('FOOTER'));

$output = '';
for($i = 1, $j = $downloads_num-1; $i < $downloads_num+1; $i++, $j--)
{
  $output .= '<div class="downloads-elem col-6">
    <div class="main-text anim">'.$lang->get('DOWNLOADS_TITLE_'.$j).'</div>
    <div class="col-18 anim padding-btn">
      <a href="'.$lang->get('DOWNLOADS_LINK_'.$j).'"><button class="btn first">'.$lang->get('INDEX_BUTTON_1').'</button></a>
    </div>
  </div>';
}

if(empty($output)) $output = $lang->get('DOWNLOADS_NO_DOWNLOADS');
$downloads->add('DOWNLOADS.VERSIONS', $output);

$downloads->_init();
$downloads->show();

?>
