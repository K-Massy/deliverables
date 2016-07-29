<?php
echo 'hello, Zend Framework!';
// Zend_Version クラスをrequireする。
require_once 'Zend/Version.php';

// Zend Frameworkのバージョン情報をechoする
echo 'hello, Zend Framework ! version = ' . Zend_Version::VERSION;
