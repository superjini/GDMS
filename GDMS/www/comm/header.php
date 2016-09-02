<?php
/*
$_G_['path']=array(
						'root'=>'./'
						,'core'=>'./_core/'
						,'core_js'=>'./_core/js/'
						,'core_css'=>'./_core/css/'
						,'var'=>'./_var/'
						,'elib' => './_core/elib/'
						,'action' => './_action/'
						,'function' => './_core/function/'
						,'layouts' => './layouts/'
						,'page' => './_pages/'
						,'theme' => './_theme/'
						,'layouts' => './layouts/'
						,'file' => './_file/'
						,'sign' => './_file/sign/'
						,'schema' => './_schema/'
						,'pc' => './_pages/_pc/'
						,'lang_url'=>''
					);
$_G_['img']=array(
						'icon'=>$_G_['path']['core'].'image/icon/'
						,'logo'=>$_G_['path']['core'].'image/logo/'
						,'btn'=>$_G_['path']['core'].'image/btn/'
						,'page'=>$_G_['path']['core'].'image/page/'
					);
$_G_['fork']=array(
						'layout'=>''
					);
$_G_['wcache']='?nFlag='.date('YmdHis');//cache 변경 param

require $_G_['path']['elib'] . 'elib.class.permission.php';
require $_G_['path']['elib'] . 'elib.class.form.php';
require $_G_['path']['elib'] . 'elib.class.string.php';
require $_G_['path']['elib'] . 'elib.class.db.php';
require $_G_['path']['elib'] . 'elib.class.icon.php';
require $_G_['path']['elib'] . 'elib.class.http.php';
require $_G_['path']['elib'] . 'elib.class.language.php';
require $_G_['path']['elib'] . 'elib.class.history.php';
require $_G_['path']['elib'] . 'elib.class.auto.php';
require $_G_['path']['elib'] . 'elib.default_param.php';

$_D_ = new Elib_Db_Functioin();//db 선택//초기 셋팅시 db등록
$_P_ = new Elib_Site_Perm($_SESSION['mbr_code']);//접속 및 사용권한
require $_G_['path']['elib'].'elib.parameter.php';
//아이피별 접근보안 설정시
if($_G_['useSecurityIP'] && $_G_['useSecurityIP']=='yes')$_P_->chkIP();//ip check

$_D_->setInit($_G_['nation']);//전역변수 추가후 db초기화
$_S_ = new Elib_String;
$_I_ =new 	Elib_Icon;
$_H_= new Elib_History();
$_A_= new Elib_Auto();//자동입력
 
 * 
 * */
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!--EUC-KR-->
<title>GDMS-사무장시스템</title>
 
<link rel="stylesheet" href="./comm/jquery_m/jquery.mobile-1.4.5.css">
<link rel="stylesheet" href="./comm/css/comm.css">
<script src="./comm/jquery/jquery.js"></script>
<script src="./comm/jquery_m/jquery.mobile-1.4.5.js"></script>
</head>
<body>