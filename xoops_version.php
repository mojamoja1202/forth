<?php
$modversion = array();
$modversion['name'] = "四年級初試計算系統";
$modversion['version'] = "1.0";
$modversion['description'] = "一整個超級不爽";
$modversion['credits'] = "";
$modversion['author'] = "moyamoya(mojamoja1202@gmail.com)";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = "0";
$modversion['image'] = "images/logo.png";
$modversion['dirname'] = "forth";


//---使用者主選單設定---//
$modversion['hasMain'] = 1;


//---資料表架構---//
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//學生名單
$modversion['tables'][1] = "forth_student";
//對照1
$modversion['tables'][2] = "forth_check1";
//對照2
$modversion['tables'][3] = "forth_check2";
//對照3
$modversion['tables'][4] = "forth_check3";
//總分對照
$modversion['tables'][5] = "forth_check4";
//學生成績
$modversion['tables'][6] = "forth_grade";



//---管理介面設定---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";




?>
