<?
function sqllink()
{
$dbname = 'zzy8200';/*�ӻ���������ȡ�����ݿ�������Ҫ�Ĳ���*/

$host = "localhost";

$user = "zzy8200";

$pwd = "asdlfnks9OOICSDJKF";
$link = @mysql_connect($host,$user,$pwd,true);
if(!$link) {
    return NULL;
}
/*���ӳɹ�����������mysql_select_db()ѡ����Ҫ���ӵ����ݿ�*/
mysql_query("set names utf8");
if(!mysql_select_db($dbname,$link)) return NULL;
return $link;
}
?>