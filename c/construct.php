<?php
$page = cq($_GET['p']);
if($page == ""){
	$page = "home";
}
if(!file_exists('./v/'.$page.'.php')){
	$page = "404";
}

define('SITE_PAGE', ''.$page.'.php');
$pname = strtoupper($page);

if(!defined("".$pname."")){
	$pname = "ERROR";
}
else{
	$pname = constant("".$pname."");
}

$date_y = date("Y");
define('SITE_PAGE_NAME', ''.$pname.'');
define('DATE_Y', ''.$date_y.'');

// Constructor
function constructor($v){
	global $page;
	if(file_exists('./v/'.$v.'.html')){
		$v_page = file_get_contents('./v/'.$v.'.html', true);
	}
	else{
		$v_page = file_get_contents('./v/'.$v.'.php', true);
	}
	$i = 0;
	$pmatch = preg_match_all('/{{(.*?)}}/s', $v_page, $match);
	while($match[1][$i]){
		if(defined("".$match[1][$i]."")){
			$cons = constant($match[1][$i]);
		}
		else{
			$cons = "{{".$match[1][$i]."}}";
		}
		$v_page = str_replace("{{".$match[1][$i]."}}", $cons, $v_page);
		$i++;
	}
	echo $v_page;
}

function need_head(){
	constructor("head");
}

function need_header(){
	constructor("header");
}

function need_body(){
	global $page;
	constructor($page);
}

function need_foot(){
	constructor("foot");
}

function need_footer(){
	constructor("footer");
}

function create_page(){
	need_head();
	need_header();
	need_body();
	need_footer();
	need_foot();
}