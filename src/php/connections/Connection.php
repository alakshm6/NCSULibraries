<?php


echo "testing..!!";

$username = "apatlol2";
$password = "200111268";
//$oracleUrl = "(DESCRIPTION=(ADDRESS=(PROTOCOL=tcp)(HOST=adc2190214.us.oracle.com)(PORT=1521))(CONNECT_DATA=(SERVICE_NAME=dbadc2190214.us.oracle.com)))";

//$oracleUrl = "(DESCRIPTION=(ADDRESS=(PROTOCOL=tcp)(HOST=ora.csc.ncsu.edu)(PORT=1521))(CONNECT_DATA=(SERVICE_NAME=orcl)))";
//$oracleUrl = "jdbc:oracle:thin:@ora.csc.ncsu.edu:1521/orcl";

$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = ora.csc.ncsu.edu)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))";

$c1 = ocilogon($username,$password,$db);

//$conn =  oci_connect($username,$password,$oracleUrl);
if (!$c1) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}else{
	echo "Connnection established!!";
}
?>