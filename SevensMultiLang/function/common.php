<?php
if ( ! function_exists('mlang'))
{
	function mlang($key){
		return multiLang\manage\MultiLangManage::getInstance()->get($key);
	}
}

if ( ! function_exists('changeMlang'))
{
	function changeMlang($lang){
		multiLang\manage\MultiLangManage::getInstance()->changeLanguage($lang);
	}
}