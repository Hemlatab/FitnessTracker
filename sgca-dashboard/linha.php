<!doctype html>
<html>

<head>
    <meta lang="pt-pt">
    <meta charset="utf-8">
    <title>Linha</title>
<link rel="stylesheet" href="./Css/responsivo.css">
    <!-- PHP ligação-->
<?php

//$serverName = "FEC-SGCA";
//$connectionInfo = array( "Database"=>"SGCA");
$serverName = "WIN-N31K4BTH0I0\SQLEXPRESS";
$connectionInfo = array("Database"=>"SGCALC");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if( $conn === false) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT horaturno,cdArtigo,qtplaneado,
qtreal,oeeHora,tempoParagem
  FROM DASHBOARD_DETAL_LN where nLinha=$_GET[linha]";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
$sql2 = "SELECT DescArtigo, ProxLinha
  FROM DASHBOARD_GERAL_LN where nLinha=$_GET[linha]";
$stmt2 = sqlsrv_query( $conn, $sql2 );
if( $stmt2 === false) {
    die( print_r( sqlsrv_errors(), true) );
}
$proxln = $row2[1];

$sql2 = "SELECT sum(QtPlaneado) as tPlano, sum(QtReal) as tReal, avg(OEEHora) as mOEE, sum(TempoParagem) as tTempo from DASHBOARD_DETAL_LN where nLinha = $_GET[linha]";
$stmt2 = sqlsrv_query( $conn, $sql2 );
$row3 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_NUMERIC);
?>
<!-- PHP ligação-->



    <!-- css -->
    <style>
        * {
            padding: 0px;
            margin: 0px;
            background-color: black;
        }

         img{
             width:100%;
             height:auto;
         }
        .header {
            width: 100%;
            height: auto;
            border-bottom: black 1px;
            background-color: blue;
            }
        /*header*/

        .header>h1,
        a {
            margin-left: 10px;
        }

        .header a {
            text-decoration: none;
            color: black;
        }
        /*header*/
        /*relatorios*/

        .relatorios {
            width: 100%;
            height: auto;
            background-color: blue;
            display:inline-block;
        }
        /*relatorios*/

        .turnos{
         width:20%;
         height:auto;
         background-color:red;
         padding:2px;
           display:inline-block;
        }
        .producao{
         width:20%;
         height:auto;
         background-color:red;
         padding:2px;
           display:inline-block;
        }
        oee_geral{
         width:20%;
         height:auto;
         background-color:red;
         padding:2px;
           display:inline-block;
        }
        /*intro-tabela*/

        .intro-tabela {
            width: 100%;
            height: 90%;
            margin-top: 0em;
            background-color: blue;
        }

        .intro-tabela .descricao-linha {
            background-color: blue;
            text-align: center;
            font-size: 60px;
            color: white;
        }

        .intro-tabela .referencia {
            text-align: center;
            margin-top: 2px;
        }

        .intro-tabela .OEE h1 {
            text-align: right;
            font-size: 20px;
        }
        /*intro-tabela*/
        /*tabela*/

        .tabela {
            width: 100%;
            background-color: black;
        }
        table th,td{
             border:none;
             color: white;
             height: 90px;
             text-align: center;
             
         }
         
          td{
        font-size:55px;
        color:yellow;
        text-align:center;
        border-bottom:black;
    }

table td:nth-child(1) {
        color:yellow;
        text-align:right;
    } 
table td:nth-child(2) {
        color:yellow;
        text-align:right;
    } 
    table td:nth-child(3) {
        color:yellow;
        text-align:right;
    } 
    table td:nth-child(4) {
        color:yellow;
        text-align:right;
    } 
    table td:nth-child(5) {
        color:yellow;
        text-align:right;
    } 
    table td:nth-child(6) {
        color:yellow;
        text-align:right;
    } 

    th{
        font-size:45px;
        font-family:verdana;
        text-align:center;
    }

    .tabelaresumo {
            width: 100%;
            background-color: black;
        }
         table th,td{
             border:none;
             color: white;
             height: 80px;
             text-align: right;           
         }
        /*tabela*/


        /*footer*/
        
        /*footer*/
    </style>
    <!-- css -->
</head>

<body>
  <div class="header">
        <!--<h1>NVC-SGCA</h1>-->
        <p><a href="#">Voltar ao menu inicial</a></p>
    </div>
    

    </div>
    <div class="intro-tabela">
        <br>
        <h1 class="descricao-linha">LINHA <?php echo $_GET["linha"]?>  -  <?php echo $row2[0] ?> </h1>
        <h1 class="descricao-linha"></h1><br>
        <!--<h1 class="referencia">REF #000001
            </h1>-->
                <!-- criar div para OEE>
            <div class="OEE">
              <h1>OEE</h1>
              <h1>PERCENTAGEM</h1>
            </div>
            <!criar div para OEE-->
    </div>
    <div class="tabela">
        <table style="HEIGHT:100%;WIDTH:100%;" border=0><col width="4%"><col width="51%"><col width="13%"><col width="13%"><col width="9%"><col width="10%">
            <thead>
                <tr>
                    <th style="text-align:center;">Hr</th>
                    <th style="text-align:center;">Artigo</th>
                    <th>Plano kg</th>
                    <th>Real kg</th>
                    <th style="text-align:right;">Prd %</th>
                    <th style="text-align:right;">Stop m</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
                    echo "<tr>";
                    echo "<td>", $row[0]."</td>";
                    echo "<td>", $row[1]. "</td>";
                    echo "<td>",  Number_Format($row[2]). "</td>";
                    echo "<td>", Number_Format($row[3]). " </td>";
                    echo "<td>", $row[4]. " </td>";
                    echo "<td>", $row[5]. " </td>";
                    echo "</tr>";
                    }
                ?>              
            </tbody>
    </div>
    <div class="tabelaresumo">
        <table style="HEIGHT:100%;WIDTH:100%;" border=0><col width="4%"><col width="51%"><col width="13%"><col width="13%"><col width="9%"><col width="10%">
            <thead>
                <tr>
                    <th></th>
                    <th>Totais</th>
                    <th><?php echo Number_Format($row3[0])?></th>
                    <th><?php echo Number_Format($row3[1])?></th>
                    <th><?php echo $row3[2]?></th>
                    <th><?php echo $row3[3]?></th>
                </tr>
            </thead>
            <tbody>
                              
            </tbody>
    </div>
  <!-- js timer -->

 <script>

   var novalinha = <?php echo $GLOBALS["proxln"];?>; 
   var pagina = 'linha.php?linha='+String(Number(novalinha));    
    if (Number(novalinha) == 0) 
        pagina = 'index.php';
            setTimeout(function(){
       window.location=pagina;
    }, 15000);
</script>
    <!-- js timer --> 
 </body>
 
</html>