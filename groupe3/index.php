<?php 
session_start();
// var_dump($_GET);
if (isset($_GET['c']) && isset($_GET['m']) && isset($_GET['a'])){
	
	$ctrl = new $_GET['c'];
	$ctrl->$_GET['m']($_GET['a']);

}else if (isset($_GET['c']) && isset($_GET['m'])){
	$ctrl = new $_GET['c'];
	$ctrl->$_GET['m']();
}else if(isset($_GET['c']) && $_GET['c']!="" && !isset($_GET['m'])){
	$v=$_GET['c'];
	$ctrl = new $v;
	$ctrl->index();
}else{
	$v="CtrlContact";
	$ctrl = new $v;
	$ctrl->index();
	ini_set('safe_mode','Off');
}

function __autoload($class_name = ""){
	$repertoires = array(
			"ctrl/",
			"model/",
			"view/",
			"system/",
			"metiers/",
			"tests/",
            "javaScript"
	);
	$modules= array(
		"Modules/admin/",
		"Modules/utilisateur/",
		""
	);
	foreach($modules as $module){
		foreach($repertoires as $repertoire){
				$file = "{$module}{$repertoire}{$class_name}.php";
			// var_dump($file);
			
			if(file_exists($file)){
				include_once($file);
			}
		}
	}
}
echo "salut";
?>  