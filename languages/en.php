<?php

$lang = new Language('en');
$help = new Language('en');

$downloads_num = 0;
$changelog_num = 0;

$lang->add('MENU_1', 'Home');
$lang->add('MENU_2', 'Downloads');
$lang->add('MENU_3', 'Help');
$lang->add('MENU_4', 'Privacy Policy');
$lang->add('MENU_5', 'Terms and Conditions');
$lang->add('MENU_6', 'Changelog');
$lang->add('MENU_7', 'About');

$lang->add('COOKIES_TITLE', 'Cool with cookies and gathering data?');
$lang->add('COOKIES_TEXT', 'Our application like most websites uses cookies in order to deliver a responsive and personalized services to improve functionality. We store and gather informations about how you use it and to communicate our application with your browser. This things are done by files called cookies which sits on your computer. By clicking X, Got it or continue to use application you agree with our <a href="terms-and-conditions.php">Terms and Conditions</a> and <a href="privacy-policy.php">Privacy Policy</a>.');
$lang->add('COOKIES_AGREE', 'Got it!');
$lang->add('COOKIES_MORE_INFO', 'More info');

$lang->add('FOOTER', 'Copyright © 2018. Made with all the <div class="heart"></div> by <a href="about.php">@mateuszbalcerzak</a>. Distributed under the GPLv2 license (or later) from the <a href="https://www.fsf.org/">Free Software Foundation</a>. A copy of the license is included with every copy, but you can also read the text of the license <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html">here</a>.');

$lang->add('INDEX_SITE_TITLE', 'AnyBase - Build your own relational database in cloud.');
$lang->add('INDEX_SITE_DESCRIPTION', 'Build your own relational database in cloud.');
$lang->add('INDEX_SITE_AUTHOR', 'Mateusz Balcerzak');
$lang->add('INDEX_MAIN_TITLE', 'AnyBase');
$lang->add('INDEX_MAIN_TITLE_TEXT_1', 'Build your own relational database with the fastest, the most perspicious and user-friendly project on the web.');
$lang->add('INDEX_MAIN_TITLE_TEXT_2', 'AnyBase is an relational database user-friendly engine operating on MySQL databse. Simply and quickly create tables, fill them with data, register users with special permissions, restrict unauthorized users to view important data and more.');
$lang->add('INDEX_BUTTON_1', 'Download');
$lang->add('INDEX_BUTTON_2', 'More info');
$lang->add('INDEX_CURRENT_VER', 'Current v');
$lang->add('INDEX_CURRENT_VER_NUM', '1.0');
$lang->add('INDEX_NOTE_1', 'Installation');
$lang->add('INDEX_NOTE_1_TEXT', 'Downloaded files should be unziped in server root directory. Next run <code>install.php</code> script via browser address bar and follow the simplest and easiest step by step installation. Remember to prepare required data <code>database server, database name, database username, database password</code> which could be found in administration panel you should be authorized for by your hosting service provider.');
$lang->add('INDEX_NOTE_1_BUTTON', 'Installation notes');
$lang->add('INDEX_NOTE_2', 'Permissions');
$lang->add('INDEX_NOTE_2_TEXT', 'Included system allows you to simply manage and assign permissions for specified database users. Seven levels provides handful of special authorizations. We take care about security and it\'s our priority. To improve safety and prevent unathorized data access we also attached possibility to restrict some portions of data using restriction module.');
$lang->add('INDEX_NOTE_2_BUTTON', 'Permissions');
$lang->add('INDEX_NOTE_3', 'Simple construction');
$lang->add('INDEX_NOTE_3_TEXT', 'We apprecieate simplicity and functionality mixed together so our product is maximally simplified while maintaining it\'s all functionality. This makes AnyBase user-friendly, allowing to add large portions of data to the database. Building as simplest as possible let us to save processing time and made our product even faster than the competition. Intuitive interface caused usage is quicker, simpler and friendlier. This three words marks our activity and products.');
$lang->add('INDEX_NOTE_3_BUTTON', 'About');

$lang->add('DOWNLOADS_SITE_TITLE', 'AnyBase - Downloads.');
$lang->add('DOWNLOADS_SITE_DESCRIPTION', 'Get the latest version!');
$lang->add('DOWNLOADS_SITE_AUTHOR', 'Mateusz Balcerzak');
$lang->add('DOWNLOADS_DOWNLOADS_TITLE', 'GET ALL RELEASES');
$lang->add('DOWNLOADS_DOWNLOADS_TEXT', 'Here are all releases. You can download any release but we recommend to download the latest version. It helps to improve safety and provides new functionality.');
$lang->add('DOWNLOADS_NO_DOWNLOADS', 'There is no downloads yet.');
$lang->add('DOWNLOADS_TITLE_', '');
$lang->add('DOWNLOADS_LINK_', '');

$lang->add('PRIVACY_POLICY_SITE_TITLE', 'AnyBase - Privacy Policy.');
$lang->add('PRIVACY_POLICY_SITE_DESCRIPTION', 'Privacy Policy. Also visit Terms and Conditions.');
$lang->add('PRIVACY_POLICY_SITE_AUTHOR', 'Mateusz Balcerzak');

$lang->add('TERMS_AND_CONDITIONS_SITE_TITLE', 'AnyBase - Terms and Conditions.');
$lang->add('TERMS_AND_CONDITIONS_SITE_DESCRIPTION', 'Terms and Conditions. Also visit Privacy Policy.');
$lang->add('TERMS_AND_CONDITIONS_SITE_AUTHOR', 'Mateusz Balcerzak');

$lang->add('CHANGELOG_SITE_TITLE', 'AnyBase - Changelog.');
$lang->add('CHANGELOG_SITE_DESCRIPTION', 'Here are history of changes. Enjoy!');
$lang->add('CHANGELOG_SITE_AUTHOR', 'Mateusz Balcerzak');
$lang->add('CHANGELOG_TITLE', 'HISTORY OF CHANGES');
$lang->add('CHANGELOG_TEXT', 'Below you find all fixes and updates done with upcoming versions. Remember that it\'s always recomended to stay up-to-dated. If you want to download latest version <a href="downloads.php">click here</a>.');
$lang->add('CHANGELOG_NO_CHANGELOGS', 'There is no changelogs yet.');
$lang->add('CHANGELOG_TITLE_', '');
$lang->add('CHANGELOG_TEXT_', '');

$lang->add('ABOUT_SITE_TITLE', 'AnyBase - About.');
$lang->add('ABOUT_SITE_DESCRIPTION', 'More informations about project and us.');
$lang->add('ABOUT_SITE_AUTHOR', 'Mateusz Balcerzak');
$lang->add('ABOUT_TITLE', 'FIND MORE ABOUT');
$lang->add('ABOUT_TEXT', $lang->get('INDEX_MAIN_TITLE_TEXT_2').' '.$lang->get('INDEX_NOTE_2_TEXT').' '.$lang->get('INDEX_NOTE_3_TEXT'));
$lang->add('ABOUT_TITLE_1', 'CREATORS');
$lang->add('ABOUT_TEXT_1', 'Hi! My name is Mateusz Balcerzak and I\'m the creator of AnyBase! I\'m glad you are using my software, because it\'s my priority to stand against consumers needs. I created this system to make managing data in databases easier and more accessible. For example you can host AnyBase and use it from every place in the world! Simple? So let\'s go and try it now!');

$lang->add('HELP_SITE_TITLE', 'AnyBase - Help Center');
$lang->add('HELP_SITE_DESCRIPTION', 'Welcome to AnyBase help center!');
$lang->add('HELP_SITE_AUTHOR', 'Mateusz Balcerzak');
$lang->add('HELP_MAIN_PAGE', 'MAIN PAGE');
$lang->add('HELP_DOWNLOADS', 'DOWNLOADS');
$lang->add('HELP_SEARCH_ENGINE', 'ANYBASE HELP CENTER');
$lang->add('HELP_SEARCH_PLACEHOLDER', 'What are you looking for?');
$lang->add('HELP_NOT_FOUND', 'There was no matches found.');

$help->add('HELP_INSTALLATION', '<h1>Installation</h1><div>Installation is very simple and easy process. Go to the install.php script via your browser address bar. All you need is to proceed step by step with instructions. Please prepare informations such as your MySQL database name, MySQL database server, username and password for this database. Data needed to install AnyBase can be taken from your server support or administration panel you shuold be authorized for. If you don\'t have required data or don\'t know how to get it ask about: MySQL database server, your username and password, your website database.</div>');
$help->add('HELP_REGISTRATION', '<h1>Registration</h1><div>After installation you will be asked to register now as administrator. You can copy link and register later otherwise it will unable to register as administrator without this link! Also it\'s possible to construct this link using MySQL database and AnyBase register module but it requires advanced knowledge.</div>');
$help->add('HELP_PROFILE1', '<h1>Profile - basic informations</h1><div>You can edit your informations you have given while registration. This informations will be seen by administrators and moderators who have rights to edit users data. It\'s possible to change username, firstname, lastname, email and your bio. Username can\'t be shorter than 4 characters. Other fields (excluding bio) can\'t be empty.</div>');
$help->add('HELP_PROFILE2', '<h1>Profile - avatar: size, image type</h1><div>Avatar is image which represents your profile. It can by any size but will be scaled to 64x64. Image type should be .jpg.</div>');
$help->add('HELP_PROFILE3', '<h1>Profile - password requirements</h1><div>Safety of your account depends on how strong is your password. We recommend you to use characters mixed with numbers and special characters. Password can\'t be shorter than 8 characters (weak password even with numbers or/and special chars).</div>');
$help->add('HELP_BACKUP_CONFIGURATION', '<h1>Backup - configuration</h1><div>Backup configuration provides two simple options. First sets the backup packages directory on server. Second determines if you want to auto download backup package after backup.</div>');
$help->add('HELP_BACKUP_RESTORATION', '<h1>Which data will be restored?</h1><div>Safety module provides MySQL database backup. It means that only database will be backuped. If any module will be damaged you need to restore it manually simply by copying it from orginal package.</div>');
$help->add('HELP_GENERATING_LINKS', '<h1>About generating links</h1><div>Anyone can register to this database but will have restricted permissions to the first level. It means that this user won\'t be able to do anything in our database. You can manually change his permissions level or generate link with specified permission level and send to the user you want to register with this permission level. After registration link will be destroyed and you need to generate another one to register user with the same rights. Only administrators can generate this links. If somehow you need to cancel users registration with specified links - you can clear all links and destroy them before they will register with special permissions.</div>');
$help->add('HELP_MANAGING', '<h1>Managing - create, edit, delete</h1><div>Tables creation is very simple process. You need to determine table name (it will be added to database with specified prefix given while installing) and minimum 2 columns to make table usable. To add column you need to specify number of columns and click on Add columns button. All tables need primary key with auto increment (A_I). Columns can be named as you wish. Some data types will demand length parameter. To delete column click on red X.<br><br>Editing provides all fields to be edited. Easy click on table you want to edit and wait to content load. After this you can edit all columns and insert new ones. Simply determine columns number and select after which column you want to add and click Add columns. Now you can specify new columns names, types etc.<br><br>There is no simplest action than deleting. Click on delete icon and wait to table delete.</div>');
$help->add('HELP_TABLES', '<h1>Tables- add, delete, update rows</h1><div>To manage table content click on table which is interesting you.<br><br>To add row you nedd to fill all empty fields on the end of table data. Row won\'t be added if some values won\'t agree with nominal column type.<br><br>To delete selected row click on delete icon.<br><br>To update row click on data you want to edit. Change column data and click anywhere to apply changes.</div>');
$help->add('HELP_CONFIGURATION1', '<h1>About session</h1><div>Session is a mechanism which make user authentication safer. Make sure session is about to expire, because it may grant unwanted third person access. Setting session time to 0 will disable session expiration. Time is specified in seconds.</div>');
$help->add('HELP_CONFIGURATION2', '<h1>Advanced settings</h1><div>Advanced setttings provides support contact emial on which database users can contact with you if they have some questions. This email is seen on login page. Also you can change database language.</div>');
$help->add('HELP_CONFIGURATION3', '<h1>Time and data formats</h1><div>You can simpy create your own time and data formats. Any format is accepted. To construct usable format see more on: <a style="color: initial;" href="http://php.net/manual/en/function.date.php">http://php.net/manual/en/function.date.php</a>');
$help->add('HELP_RESTRICT_ACCESS', '<h1>About restricting access</h1><div>Restricting access is to prevent users with lower permission level to not see sensitive data. To restrict access simpy select column from table and click Restrict access.</div>');
$help->add('HELP_FREE_ACCESS', '<h1>About freeing access</h1><div>Restricting access is to prevent users with lower permission level to not see sensitive data. To free access simpy select column from table and click Free access.</div>');
$help->add('HELP_PERMISSIONS', '<h1>Permissions</h1><div>There are 7 types of permissions: 2-staged guest level, 2-staged user level, 2-staged moderator level and administrator. There are also 4 types of actions: view, edit, delete, configure. [r] - restricted - if none then full acces to specified action eg. view. nnnn means no rights. Example: v[r]e[r]nn means that we have restricted view actions and restricted edit actions. Also we have no rights to delete content and configure database.</div>');

$lang->add('PANEL_SITE_TITLE', 'AnyBase - Administration Panel');
$lang->add('PANEL_SITE_DESCRIPTION', 'Welcome to AnyBase website administration panel.');
$lang->add('PANEL_SITE_AUTHOR', 'Mateusz Balcerzak');

?>
