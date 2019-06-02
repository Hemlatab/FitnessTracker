  <?php
//$serverName = "FEC-SGCA\SQL_SGCA";
//$connectionInfo = array( "Database"=>"SGCA");
$serverName = "WIN-N31K4BTH0I0\SQLEXPRESS";
$connectionInfo = array("Database"=>"SGCALC");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false) {
    die( print_r( sqlsrv_errors(), true));
}else //echo "ligado a base de dados";


//MUDANCA DE LINHA --------> ESTA AQUIII!
$sql = "SELECT top 1 nLinha from DASHBOARD_GERAL_LN where LinhaAtiva = -1 ORDER BY nLinha";
$stmtgeral = sqlsrv_query( $conn, $sql );
if( $stmtgeral === false) {
  die( print_r( sqlsrv_errors(), true) );
}
$rowgeral = sqlsrv_fetch_array( $stmtgeral, SQLSRV_FETCH_NUMERIC); 
$proxln = $rowgeral[0];
?>