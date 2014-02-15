<?
if ($_POST['ip']=='ip') {
echo "Your public (WAN) ip address is:<br/>";
echo $_SERVER['REMOTE_ADDR'];
}
?>