<?php
declare(strict_types=1);

$modversion['name'] = _ADDRESSBOOK_NAME;
$modversion['version'] = '0.01';
$modversion['description'] = _ADDRESSBOOK_DESC;
$modversion['credits'] = _ADDRESSBOOK_CRED;
$modversion['author'] = 'Dr. Clone http://www.drclone.net';
$modversion['help'] = '';
$modversion['license'] = 'GPL';
$modversion['official'] = 0;
$modversion['image'] = 'images/addressbook_slogo.png';
$modversion['dirname'] = 'addressbook';
$modversion['sqlfile']['mysql'] = 'sql/addressbook.sql';
$modversion['tables'][0] = 'addressbook';
$modversion['hasMain'] = 1;
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'index.php';
