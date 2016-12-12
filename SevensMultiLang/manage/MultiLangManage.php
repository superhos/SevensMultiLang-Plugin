<?php
namespace multiLang\manage;
/**
 *  Multi Language.
**/
class MultiLangManage {

	//Instance
	public static $_instance;

	public $currentLang;

	/**
	 *  Store all language data;
	**/
	public $language = array();

	public function __construct(){
		$config = require(MULTILANG_PATH.'/config/config.php');
		//默認語言
		$this->currentLang = $config['lang'];
	}

	public static function getInstance(){
		if(!(self::$_instance instanceof self)){
			self::$_instance = new self;
		}
		return self::$_instance;
	}

	public function get($key){
		return $this->language[$this->currentLang][$key];
	}

	public function getLanguage(){
		return $this->language[$this->currentLang];
	}

	/**
	 *  load language File
	 **/
	public function loadFile($lang = null){
		if (!isset($lang)){
			$lang = $this->currentLang;
		}
		//Read Files
		$handle = opendir(MULTILANG_PATH.'/lang/'.$lang); 
		while($file = readdir($handle)) { 
			if (($file !== ".")and($file !== "..")) { 
				require(MULTILANG_PATH.'/lang/'.$lang.'/'.$file);
			} 
		} 
		closedir($handle);
		$this->language[$lang] = $MLang;
	}

	/**
	 *  ChangeLanguage
	 **/
	public function changeLanguage($lang){
		if ($lang == $this->currentLang){
			return;
		}
		if (!isset($this->language[$lang])){
			$this->loadFile($lang);
		}
		$this->currentLang = $lang;
		return TRUE;
	}

	//Override clone
	public function __clone(){
		trigger_error('Clone is not allow!',E_USER_ERROR);
	}
}