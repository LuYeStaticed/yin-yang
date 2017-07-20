<?php
	require_once substr(dirname(__FILE__), 0,-5)."init.inc.php";
	//缓存是否开启
	define("CACHE", false);
	if(CACHE){ 
		ob_start();
	}
	//伪静态是否开启
	define("STATIC_URL", false);

	if(isset($_GET['ctrl']) && !empty($_GET['ctrl'])){ 
		$ctrl = ucwords($_GET['ctrl']).'AdminController';
		new $ctrl($templates);
	}else{ 
		Tool::alertBack('参数错误');
	}
?>