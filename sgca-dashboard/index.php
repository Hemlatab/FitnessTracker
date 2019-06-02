<!DOCTYPE html>
<html>
<head>

<?php include '/php/ligacao.php'; include '/php/consultas.php'; ?>
    <meta charset="UTF-8">
    <title>DASHBOARD SGCA</title>
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"-->
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="./css/responsivo.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
 <style>
body{background-color:black;overflow-x:hidden;/*overflow-y:hidden;*/}.linhas{color:white;font-size:60px;}
#ind{text-align:center;color:white;font-family:verdana;font-size:50px;}
.linhas1, .linhas4 , .linhas6{color:green;}
.linhas2 , .linhas3 , .linhas5{color:red;}

/*resoluções*/
#g1{
    width:100%;
    height:auto;
    background-color:blue;
}



}
  </style>

  <?php
$sql = "SELECT top 1 nLinha from DASHBOARD_GERAL_LN where LinhaAtiva = -1 ORDER BY nLinha";
$stmtgeral = sqlsrv_query( $conn, $sql );
if( $stmtgeral === false) {
  die( print_r( sqlsrv_errors(), true) );
}
$rowgeral = sqlsrv_fetch_array( $stmtgeral, SQLSRV_FETCH_NUMERIC); 
$proxln = $rowgeral[0];
?>
  
</head>
<body>

    <body onload="animateGauges()">
    
</nav>

     <div class="container-fluid">
       <h1 id="ind">---<h1>
         <div class="row">
             <div class="col-xs-4  ">
        <div class="gauge ">
             <!-- linha 1 -->
            
            <canvas id="g1 " data-type="radial-gauge" data-value="0"  width="300" height="400" 
                data-bar-width="8" data-bar-shadow="5" data-color-bar-progress="rgba(50,200,50,.75)"
                data-highlights='[{"from": 0, "to": 0, "color": "rgba(0,255,0,.15)"}]' data-title="LINHA 1"  data-units="%">            
            </canvas>  
          
        </div>
        </div>
        <div class=" col-xs-4 ">
           <div class="gauge ">
             <!-- linha 1 -->
            
            <canvas id="g1 " data-type="radial-gauge" data-value="0"  width="300" height="400" style="width:100%;height:100%;background-color:Red;"
                data-bar-width="8" data-bar-shadow="5" data-color-bar-progress="rgba(50,200,50,.75)"
                data-highlights='[{"from": 0, "to": 0, "color": "rgba(0,255,0,.15)"}]' data-title="LINHA 1"  data-units="%">            
            </canvas>  
          
        </div>
        </div>
         
        <div class="col-xs-4 ">
            <div class="gauge ">
             <!-- linha 1 -->
            
            <canvas id="g1 " data-type="radial-gauge" data-value="0"  width="300" height="400" style="width:100%;height:100%;background-color:Red;"
                data-bar-width="8" data-bar-shadow="5" data-color-bar-progress="rgba(50,200,50,.75)"
                data-highlights='[{"from": 0, "to": 0, "color": "rgba(0,255,0,.15)"}]' data-title="LINHA 1"  data-units="%">            
            </canvas>  
        </div>
        </div>
        </div>
<!-- linha 4-->
<div class="row">
    <div class="col-xs-4 ">
<div class="gauge ">
             <!-- linha 1 -->
            
            <canvas id="g1 " data-type="radial-gauge" data-value="0"  width="300" height="400" style="width:100%;height:100%;background-color:Red;"
                data-bar-width="8" data-bar-shadow="5" data-color-bar-progress="rgba(50,200,50,.75)"
                data-highlights='[{"from": 0, "to": 0, "color": "rgba(0,255,0,.15)"}]' data-title="LINHA 1"  data-units="%">            
            </canvas>  
          
        </div>
    </div>
    <!-- linha 5 -->
    <div class=" col-xs-4 ">
 <div class="gauge ">
             <!-- linha 1 -->
            
            <canvas id="g1 " data-type="radial-gauge" data-value="0"  width="300" height="400" style="width:100%;height:100%;background-color:Red;"
                data-bar-width="8" data-bar-shadow="5" data-color-bar-progress="rgba(50,200,50,.75)"
                data-highlights='[{"from": 0, "to": 0, "color": "rgba(0,255,0,.15)"}]' data-title="LINHA 1"  data-units="%">            
            </canvas>  
          
        </div>
    </div>

    <!-- linha 6 -->
     <div class="col-xs-4 ">
 <div class="gauge ">
             <!-- linha 1 -->
            
            <canvas id="g1 " data-type="radial-gauge" data-value="0"  width="300" height="400" style="width:100%;height:100%;background-color:Red;"
                data-bar-width="8" data-bar-shadow="5" data-color-bar-progress="rgba(50,200,50,.75)"
                data-highlights='[{"from": 0, "to": 0, "color": "rgba(0,255,0,.15)"}]' data-title="LINHA 1"  data-units="%">            
            </canvas>  
          
        </div>
    </div>  
    </div>
    
    </body>
 
       <script>
          
		       /*script para alternar páginas */
    	        var novalinha = "<?php echo $GLOBALS['proxln']?>";   
				var welcome = "<?php echo $GLOBALS['proxln']?>";
    	        if (novalinha > 0 ){

				var pagina = "linha.php?linha=" + novalinha ;  console.log(novalinha);
                  }
                 else     {
                pagina="index.php";
                   }
				if (welcomeconfig > 0){
                    var welcome = "welcome.php";
                   }
					else{
						break;
					}
				
             setTimeout(function(){
          	window.location=pagina;
		    window.location = welcome;
    	    }, 45000);
		
       </script>
<script>
/********************************* VARIAVEIS REAL & PLANEADO php *************************************************/

/*linha1*/
var l1oee = "<?php echo $str; ?>";
var l1qual = "<?php echo $str1; ?>";
var l1perfo = "<?php echo $str2; ?>";
var l1dispo = "<?php echo $str3; ?>";
console.log("linha1(real):" +l1oee,l1qual,l1perfo,l1dispo);

/*linha1*/

/*linha2*/
var l2oee = "<?php echo $l2_texto; ?>";
var l2qual = "<?php echo $l2_texto1; ?>";
var l2perfo = "<?php echo $l2_texto2; ?>";
var l2dispo = "<?php echo $l2_texto3; ?>";
console.log("linha2(real):" + l2oee,l2qual,l2perfo,l2dispo);

/*linha2*/

/*linha3*/
var l3oee = "<?php echo $l3_texto; ?>";
var l3qual = "<?php echo $l3_texto1; ?>";
var l3perfo = "<?php echo $l3_texto2; ?>";
var l3dispo = "<?php echo $l3_texto3; ?>";
console.log("linha3(real):" + l3oee,l3qual,l3perfo,l3dispo);


/*linha3*/

/*linha4*/
var l4oee = "<?php echo $l4_texto; ?>";
var l4qual = "<?php echo $l4_texto1; ?>";
var l4perfo = "<?php echo $l4_texto2 ; ?>";
var l4dispo = "<?php echo $l4_texto3; ?>";
console.log("linha4(real):" + l4oee,l4qual,l4perfo,l4dispo);


/*linha4*/

/*linha5*/
var l5oee = "<?php echo $l5_texto; ?>";
var l5qual = "<?php echo $l5_texto1; ?>";
var l5perfo = "<?php echo $l5_texto2; ?>";
var l5dispo = "<?php echo $l5_texto3; ?>";
console.log("linha5(real):" + l5oee,l5qual,l5perfo,l5dispo);


/*linha5*/

/*linha6*/
var l6oee = "<?php echo $l6_texto; ?>";
var l6qual = "<?php echo $l6_texto1; ?>";
var l6perfo = "<?php echo $l6_texto2; ?>";
var l6dispo = "<?php echo $l6_texto3; ?>";
console.log("linha6(real):" + l6oee,l6qual,l6perfo,l6dispo);


/*linha6*/

/********************************* VARIAVEIS PLANEADO  *************************************************/

var timers = [];
/********************************* VARIAVEIS  PLANEADO *************************************************/

            /*linha1********************************************************************************/
         
            var L1oee_a = "<?php echo $l1oee_a; ?>";  var l1qual_a ="<?php echo $l1qual_a; ?>";
             var l1perfo_a = "<?php echo $l1perfo_a; ?>"; var l1dispo_a = "<?php echo $l1dispo_a; ?>";
            /*linha1*******************************************************************************/


            /*linha2******************************************************************************/
        
            var l2oee_a = "<?php echo $l2oee_a; ?>";
             var l2qual_a = "<?php echo $l2qual_a; ?>";
             var l2perfo_a = "<?php echo $l2perfo_a; ?>";
              var l2dispo_a =  "<?php echo $l2dispo_a; ?>";
           /*linha2******************************************************************************/


           /*linha3*****************************************************************************/
         
             var l3oee_a= "<?php echo $l3oee_a; ?>";
              var l3qual_a = "<?php echo $l3qual_a; ?>";
               var l3perfo_a =  "<?php echo $l3perfo_a; ?>";
                var l3dispo_a = "<?php echo $l3dispo_a; ?>"; console.log("teste:"+ l3oee_a,l3qual_a,l3perfo_a,l3dispo_a)
            /*linha3***************************************************************************/
            
            
            /*linha4**************************************************************************/
            
               var l4oee_a= "<?php echo $l4oee_a; ?>";
                var l4qual_a = "<?php echo $l4qual_a; ?>";
                 var l4perfo_a ="<?php echo $l4perfo_a; ?>";
                  var l4dispo_a = "<?php echo $l4dispo_a; ?>" ;
             /*linha4************************************************************************/

            /*linha5************************************************************************/
           
                  var l5oee_a = "<?php echo $l5oee_a; ?>";
                   var l5qual_a = "<?php echo $l5qual_a; ?>";
                    var l5perfo_a = "<?php echo $l5perfo_a; ?>"; 
                    var l5dispo_a ="<?php echo $l5dispo_a; ?>";
            /*linha5***********************************************************************/

            /*linha6**********************************************************************/
            
                var l6oee_a = "<?php echo  $l6oee_a; ?>";
                 var l6qual_a = "<?php echo $l6qual_a; ?>";
                  var l6perfo_a = "<?php echo $l6perfo_a; ?>";
                   var l6dispo_a = "<?php echo $l6dispo_a; ?>";
             /*linha6********************************************************************/

/********************************* VARIAVEIS  PLANEADO *************************************************/
var idx = 0;
function animateGauges() {
    document.gauges.forEach(function(gauge) {
        gauge.value = 100; //comecar a 100 
        
        timers.push(setInterval(function() {
           
             var planeado = [L1oee_a, l2oee_a, l3oee_a, l4oee_a, l5oee_a, l6oee_a,l1qual_a, l2qual_a, l3qual_a,l4qual_a,l5qual_a,l6qual_a,
              l1perfo_a, l2perfo_a, l3perfo_a, l4perfo_a, l5perfo_a, l6perfo_a,l1dispo_a, l2dispo_a, l3dispo_a,l4dispo_a,l5dispo_a,l6dispo_a];
//var planeado = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
     if (planeado  == real ) window.alert("igual" + planeado,real);
            planeado[0] = "<?php echo $l1oee_a; ?>";
            console.log("plan:" + planeado[0]);
            var real = [l1oee, l2oee, l3oee,l4oee,l5oee,l6oee,l1qual,l2qual,l3qual,l4qual,l5qual,l6qual,
                 l1perfo, l2perfo, l3perfo,l4perfo,l5perfo,l6perfo, l1dispo, l2dispo, l3dispo,l4dispo,l5dispo,l6dispo];
            //var hlig = [[{ from:pos1, to: pos2, color: '#0000ff' }]];
            var idxTxt = 0;
            var txtIndic = ["OEE", "Qualidade", "Performance","Disponiblidade"];
            var elem1 = document.getElementById("ind");
            elem1.innerHTML = idx;//txtIndic[idxTxt];    
           if((idx + 1) % 6 == 0){
                elem1.innerHTML = txtIndic[((idx+1)/6)-1];    
            };

            if (idx < 24 ){
                var limsup = parseInt(planeado[idx]) + 10;
                gauge.update({highlights: [{from:planeado[idx], to: limsup, color: '#0000ff' }]});
                gauge.value = real[idx];
            }
            else {gauge.update({highlights: [{ from:0, to: 0, color: '#0000ff' }]});gauge.value = 0;}                            
            
            idxTxt++;
            if (idx == 23) {
                idx = 0;
            } 
            else{
                idx++;}
           
            }, gauge.animation.duration + 5000));
    });
}
</Script>
<script src='./js/gauge.min.js'></script>    

    	<!--script> 
    	      var novalinha = "<?php //echo $GLOBALS['proxln']?>";   
    	        if (novalinha > 0){
				var pagina = "linha.php?linha=" + novalinha;}else{pagina="index.php";}
        setTimeout(function(){
       	window.location=pagina;
    	}, 25000);
		</script>-->
</body>

</html>