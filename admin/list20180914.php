<?php
include "../../../include/cp_header.php";
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.php";
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php";
//-----函數區-----


//整理所有的學生名單
function studentList(){
  global $xoopsDB;
  $main="";
  //抓取所有的學生名單
  
  $sql="select * from `" . $xoopsDB->prefix('forth_student') . "` order by id";
  $result=$xoopsDB->query($sql) or die($sql);
  while (list($sn, $id, $name, $sex, $year, $month, $day, $school, $class, $phone, $note, $place)=$xoopsDB->fetchRow($result)){
    $birthday="$year-$month-$day";
    $main.="<tr align='center'><td>$id</td><td>$name</td><td>$sex</td><td>$birthday</td><td>$school</td><td>$class</td><td>$phone</td><td>$note</td><td>$place</td></tr>";

  }

return $main;  
}

function del($sn){
  global $xoopsDB;
  $sql="delete from `" . $xoopsDB->prefix('forth_student') . "` where `sn`=$sn";
  $xoopsDB->queryF($sql) or die($sql);
}


//修改的表單
function updateForm($sn){
  global $xoopsDB;
  $sql="select * from `" . $xoopsDB->prefix('forth_student') . "` where `sn`=$sn";
  $result=$xoopsDB->query($result) or die($sql);

}



//-----判斷區-----
$op=(empty($_REQUEST['op']))?"":$_REQUEST['op'];
$sn=(empty($_REQUEST['sn']))?"":$_REQUEST['sn'];
switch ($op)
{
  case "studentList":
  
  break;

  case "addForm":

  break;
  
  case "add":

  break;

  case "updateForm":

  break;

  case "update":

  break;

  case "del":

  del($sn);
  redirect_header("list.php", 3, "刪除成功");

  break;

  case "updateForm":

  break;

  default:
  $main = studentList();
}



//-----顯示區-----
xoops_cp_header();
loadModuleAdminMenu(2);
//style
echo "
<script type='text/javascript'>
        window.onload=function(){
        var tfrow = document.getElementById('tfhover').rows.length;
        var tbRow=[];
        for (var i=1;i<tfrow;i++) {
                tbRow[i]=document.getElementById('tfhover').rows[i];
                tbRow[i].onmouseover = function(){
                  this.style.backgroundColor = '#ffffff';
                };
                tbRow[i].onmouseout = function() {
                  this.style.backgroundColor = '#d4e3e5';
                };
        }
};
</script>
";
//css
echo "
<style type='text/css'>
table.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
table.tftable th {font-size:14px;font-weight:bold;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:center;}
table.tftable tr {background-color:#d4e3e5;}
table.tftable td {font-size:14px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
</style>
";
echo "<h1>學生名單</h1><br>";
echo "<table id='tfhover' class='tftable'>";
echo "<tr><th>編號</th><th>姓名</th><th width='30'>性別</th><th width='80'>出生年月日</th><th>學校</th><th width='30'>班級</th><th>電話</th><th>備註</th><th width='30'>考場</th></tr>";
echo $main;
echo "</table>";
xoops_cp_footer();
?>