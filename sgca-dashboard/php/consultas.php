<?php
include 'ligacao.php'; 
/*******************************VALORES DOS INDICADORES DO REAL*****************************************************************************************/
//echo "<br><br> ". "Valores reais<br>";
//para a linha 1 //
$sql = "SELECT L1Oee,L1Qual,L1Perfo,L1Dispo
        FROM DASHBOARD_INDIC
       ";

	 
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

$str = sqlsrv_get_field( $stmt, 0);
$str1 = sqlsrv_get_field($stmt,1);
$str2 = sqlsrv_get_field($stmt,2);
$str3 = sqlsrv_get_field($stmt,3);

//echo "linha 1 :<br>". $str. "<br>". $str1 . "<br>". $str2 . "<br>". $str3."<br><br>";

//para a linha 1 //


//para a linha 2 //
$sql = "SELECT L2Oee,L2Qual,L2Perfo,L2Dispo FROM DASHBOARD_INDIC";
$stmt1 = sqlsrv_query( $conn, $sql);
if( $stmt1 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

if( sqlsrv_fetch( $stmt1 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}
$l2_texto = sqlsrv_get_field( $stmt1, 0);
$l2_texto1 = sqlsrv_get_field($stmt1,1);
$l2_texto2 = sqlsrv_get_field($stmt1,2);
$l2_texto3 = sqlsrv_get_field($stmt1,3);

//echo "linha 2:<br>". $l2_texto. "<br>". $l2_texto1 . "<br>". $l2_texto2 . "<br>". $l2_texto3."<br><br>";

//para a linha 2 //

//para a linha 3 //
$sql = "SELECT L3Oee,L3Qual,L3Perfo,L3Dispo FROM DASHBOARD_INDIC";
$stmt2 = sqlsrv_query( $conn, $sql);
if( $stmt2 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt2 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}
$l3_texto = sqlsrv_get_field( $stmt2, 0);
$l3_texto1 = sqlsrv_get_field($stmt2,1);
$l3_texto2 = sqlsrv_get_field($stmt2,2);
$l3_texto3 = sqlsrv_get_field($stmt2,3);

//echo "linha 3:<br>". $l3_texto. "<br>". $l3_texto1 . "<br>". $l3_texto2 . "<br>". $l3_texto3."<br>";
//para a linha 3 //

//para a linha 4 //
$sql = "SELECT L4Oee,L4Qual,L4Perfo,L4Dispo FROM DASHBOARD_INDIC";
$stmt3 = sqlsrv_query( $conn, $sql);
if( $stmt3 === false ) {
     die( print_r( sqlsrv_errors(), true));
}
if( sqlsrv_fetch( $stmt3 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}
$l4_texto = sqlsrv_get_field( $stmt3, 0);
$l4_texto1 = sqlsrv_get_field($stmt3,1);
$l4_texto2 = sqlsrv_get_field($stmt3,2);
$l4_texto3 = sqlsrv_get_field($stmt3,3);

//echo "linha 4:<br>". $l4_texto. "<br>". $l4_texto1 . "<br>". $l4_texto2 . "<br>". $l4_texto3."<br><br>";
//para a linha 4 //

//para a linha 5 //
$sql = "SELECT L5Oee,L5Qual,L5Perfo,L5Dispo FROM DASHBOARD_INDIC";
$stmt4 = sqlsrv_query( $conn, $sql);
if( $stmt4 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt4 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}
$l5_texto = sqlsrv_get_field( $stmt4, 0);
$l5_texto1 = sqlsrv_get_field($stmt4,1);
$l5_texto2 = sqlsrv_get_field($stmt4,2);
$l5_texto3 = sqlsrv_get_field($stmt4,3);

//echo "linha 5:<br>". $l5_texto. "<br>". $l5_texto1 . "<br>". $l5_texto2 . "<br>". $l5_texto3."<br><br>";
//para a linha 5 //

//para a linha 6 //
$sql = "SELECT L6Oee,L6Qual,L6Perfo,L6Dispo FROM DASHBOARD_INDIC";
$stmt5 = sqlsrv_query( $conn, $sql);
if( $stmt5 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

if( sqlsrv_fetch( $stmt5 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}
$l6_texto = sqlsrv_get_field( $stmt5, 0);
$l6_texto1 = sqlsrv_get_field($stmt5,1);
$l6_texto2 = sqlsrv_get_field($stmt5,2);
$l6_texto3 = sqlsrv_get_field($stmt5,3);

//echo "linha 6:<br>". $l6_texto. "<br>". $l6_texto1 . "<br>". $l6_texto2 . "<br>". $l6_texto3."<br><br>";
/*******************************VALORES DOS INDICADORES DO REAL*****************************************************************************************/



/*******************************VALORES DOS INDICADORES DO PLANEADO*****************************************************************************************/
/*linha1*/
$sql = "SELECT L10ee_a,L1Qual_a,L1Perfo_a,L1Dispo_a
        FROM DASHBOARD_INDIC
       ";

	 
$stmt6 = sqlsrv_query( $conn, $sql);
if( $stmt6 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt6 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

$l1oee_a = sqlsrv_get_field( $stmt6, 0);
$l1qual_a = sqlsrv_get_field($stmt6,1);
$l1perfo_a = sqlsrv_get_field($stmt6,2);
$l1dispo_a = sqlsrv_get_field($stmt6,3);
//echo "<br>";
//echo "linha1 planeado:"."<br>".$l1oee_a ."<br>" .$l1qual_a ."<br>" .$l1perfo_a ."<br>".$l1dispo_a;
/*linha1*/

/*linha2*/
$sql = "SELECT L2oee_a,L2Qual_a,L2Perfo_a,L2Dispo_a
        FROM DASHBOARD_INDIC
       ";

	 
$stmt7 = sqlsrv_query( $conn, $sql);
if( $stmt7 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt7 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

$l2oee_a = sqlsrv_get_field( $stmt7, 0);
$l2qual_a = sqlsrv_get_field($stmt7,1);
$l2perfo_a = sqlsrv_get_field($stmt7,2);
$l2dispo_a = sqlsrv_get_field($stmt7,3);
//echo "<br>";
//echo "linha2 planeado:"."<br>".$l2oee_a ."<br>" .$l2qual_a ."<br>" .$l2perfo_a ."<br>".$l2dispo_a;
/*linha2*/


/*linha3*/
$sql = "SELECT L3oee_a,L3Qual_a,L3Perfo_a,L3Dispo_a
        FROM DASHBOARD_INDIC
       ";

	 
$stmt8 = sqlsrv_query( $conn, $sql);
if( $stmt8 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt8 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

$l3oee_a = sqlsrv_get_field( $stmt8, 0);
$l3qual_a = sqlsrv_get_field($stmt8,1);
$l3perfo_a = sqlsrv_get_field($stmt8,2);
$l3dispo_a = sqlsrv_get_field($stmt8,3);
//echo "<br>";
//echo "linha3 planeado:"."<br>".$l3oee_a ."<br>" .$l3qual_a ."<br>" .$l3perfo_a ."<br>".$l3dispo_a;

/*linha3*/

/*linha4*/
$sql = "SELECT COALESCE(L4oee_a, 0),COALESCE(L4Qual_a, 0), COALESCE(L4Perfo_a, 0), COALESCE(L4Dispo_a,0) 
        FROM DASHBOARD_INDIC
       ";

	 
$stmt9 = sqlsrv_query( $conn, $sql);
if( $stmt9 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt9 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

$l4oee_a = sqlsrv_get_field( $stmt9, 0);
$l4qual_a = sqlsrv_get_field($stmt9,1);
$l4perfo_a = sqlsrv_get_field($stmt9,2);
$l4dispo_a = sqlsrv_get_field($stmt9,3);
//echo "<br>";
//echo "linha4 planeado:"."<br>".$l4oee_a ."<br>" .$l4qual_a ."<br>" .$l4perfo_a ."<br>".$l4dispo_a;
/*linha4*/



/*linha5*/
$sql = "SELECT L5oee_a,L5Qual_a,L5Perfo_a,L5Dispo_a
        FROM DASHBOARD_INDIC
       ";

	 
$stmt10 = sqlsrv_query( $conn, $sql);
if( $stmt10 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt10 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

$l5oee_a = sqlsrv_get_field( $stmt10, 0);
$l5qual_a = sqlsrv_get_field($stmt10,1);
$l5perfo_a = sqlsrv_get_field($stmt10,2);
$l5dispo_a = sqlsrv_get_field($stmt10,3);
//echo "<br>";
//echo "linha5 planeado:"."<br>".$l5oee_a ."<br>" .$l5qual_a ."<br>" .$l5perfo_a ."<br>".$l5dispo_a;

/*linha5*/

/*linha6*/
$sql = "SELECT L6oee_a,L6Qual_a,L6Perfo_a,L6Dispo_a
        FROM DASHBOARD_INDIC
       ";

	 
$stmt11 = sqlsrv_query( $conn, $sql);
if( $stmt11 === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt11 ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

$l6oee_a = sqlsrv_get_field( $stmt11, 0);
$l6qual_a = sqlsrv_get_field($stmt11,1);
$l6perfo_a = sqlsrv_get_field($stmt11,2);
$l6dispo_a = sqlsrv_get_field($stmt11,3);
//echo "<br>";
//echo "linha6 planeado:"."<br>".$l6oee_a ."<br>" .$l6qual_a ."<br>" .$l6perfo_a ."<br>".$l6dispo_a;

/*linha5*/



/*******************************VALORES DOS INDICADORES DO PLANEADO*****************************************************************************************/



?>