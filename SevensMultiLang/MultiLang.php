<?php
require '/manage/MultiLangManage.php';
use multiLang\manage;
define("MULTILANG_PATH", dirname(__FILE__));

//加載指定語言文件
multiLang\manage\MultiLangManage::getInstance()->loadFile();

//語言變量保存在全局變量中
multiLang\manage\MultiLangManage::getInstance()->getLanguage();
// var_dump($mlang);
//提供的方便函數
require '/function/common.php';