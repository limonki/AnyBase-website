<?php

require_once('includes/definitions.php');
require_once(__ROOT__.'/includes/template.php');
require_once(__ROOT__.'/includes/language.php');
require_once(__ROOT__.'/languages/'.language());

$changelog = new Template('changelog', 'templates/');
$changelog->add('SITE.TITLE', $lang->get('CHANGELOG_SITE_TITLE'));
$changelog->add('SITE.DESCRIPTION', $lang->get('CHANGELOG_SITE_DESCRIPTION'));
$changelog->add('SITE.AUTHOR', $lang->get('CHANGELOG_SITE_AUTHOR'));
$changelog->add('MENU.1', $lang->get('MENU_1'));
$changelog->add('MENU.2', $lang->get('MENU_2'));
$changelog->add('MENU.3', $lang->get('MENU_3'));
$changelog->add('MENU.4', $lang->get('MENU_4'));
$changelog->add('MENU.5', $lang->get('MENU_5'));
$changelog->add('MENU.6', $lang->get('MENU_6'));
$changelog->add('MENU.7', $lang->get('MENU_7'));
$changelog->add('COOKIES.TITLE', $lang->get('COOKIES_TITLE'));
$changelog->add('COOKIES.TEXT', $lang->get('COOKIES_TEXT'));
$changelog->add('COOKIES.AGREE', $lang->get('COOKIES_AGREE'));
$changelog->add('COOKIES.MORE.INFO', $lang->get('COOKIES_MORE_INFO'));
$changelog->add('CHANGELOG.TITLE', $lang->get('CHANGELOG_TITLE'));
$changelog->add('CHANGELOG.TEXT', $lang->get('CHANGELOG_TEXT'));
$changelog->add('FOOTER', $lang->get('FOOTER'));

$output = '';
for($i = 1, $j = $changelog_num-1; $i < $changelog_num+1; $i++, $j--)
{
  $output .= '<div class="text anim change-title">'.$lang->get('CHANGELOG_TITLE_'.$j).'</div>
  <div class="text anim change-text">'.$lang->get('CHANGELOG_TEXT_'.$j).'</div>';
}

if(empty($output)) $output = $lang->get('CHANGELOG_NO_CHANGELOGS');
$changelog->add('CHANGELOG.VERSIONS', $output);

$changelog->_init();
$changelog->show();

?>
