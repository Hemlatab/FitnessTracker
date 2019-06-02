var idx = 0; var timers = [];
/********************************* VARIAVEIS REAL & PLANEADO *************************************************/

            /*linha1********************************************************************************/
            var l1oee = 35; var l1qual = 90;var l1perfo = 90; var l1dispo = 23;
            var L1oee_a = 5; var l1qual_a =50 ; var l1perfo_a = 5; var l1dispo_a = 50;
            /*linha1*******************************************************************************/


            /*linha2******************************************************************************/
            var l2oee = 50; var l2qual = 67;  var l2perfo = 70;  var l2dispo = 65;
            var l2oee_a = 9; var l2qual_a = 80; var l2perfo_a = 9; var l2dispo_a = 80;
           /*linha2******************************************************************************/


           /*linha3*****************************************************************************/
             var l3oee = 60;  var l3qual = 32;  var l3perfo = 100;   var l3dispo = 90;
             var l3oee_a= 12; var l3qual_a = 90; var l3perfo_a = 12; var l3dispo_a = 90;
            /*linha3***************************************************************************/
            
            
            /*linha4**************************************************************************/
              var l4oee = 40;  var l4qual = 20;   var l4perfo = 23;   var l4dispo = 56;
                 var l4oee_a= 30; var l4qual_a = 10; var l4perfo_a = 30; var l4dispo_a = 10;
             /*linha4************************************************************************/

            /*linha5************************************************************************/
               var l5oee = 50; var l5qual = 30;  var l5perfo = 45;  var l5dispo = 58;
                  var l5oee_a = 50; var l5qual_a = 20; var l5perfo_a = 50; var l5dispo_a = 20;
            /*linha5***********************************************************************/

            /*linha6**********************************************************************/
             var l6oee = 60; var l6qual = 40; var l6perfo = 34; var l6dispo = 40;
                var l6oee_a = 60; var l6qual_a = 30 ; var l6perfo_a = 60; var l6dispo_a = 30;
             /*linha6********************************************************************/

/********************************* VARIAVEIS REAL & PLANEADO *************************************************/
function animateGauges() {
    document.gauges.forEach(function(gauge) {
        timers.push(setInterval(function() {
             var planeado = [L1oee_a, l2oee_a, l3oee_a, l4oee_a, l5oee_a, l6oee_a, l1qual_a, l2qual_a, l3qual_a,l4qual_a,l5qual_a,l6qual_a,
                l1perfo_a, l2perfo_a, l3perfo_a, l4perfo_a, l5perfo_a, l6perfo_a, l1dispo_a, l2dispo_a, l3dispo_a,l4dispo_a,l5dispo_a,l6dispo_a];

            var real = [l1oee, l2oee, l3oee,l4oee,l5oee,l6oee,l1qual,l2qual,l3qual,l4qual,l5qual,l6qual,
                 l1perfo, l2perfo, l3perfo,l4perfo,l5perfo,l6perfo, l1dispo, l2dispo, l3dispo,l4dispo,l5dispo,l6dispo];
            
            var txtIndic = ["OEE", "Qualidade", "Performance","Disponiblidade"];
            var elem1 = document.getElementById("ind");
            var nome = "Paulo";
            elem1.innerHTML = nome;
           
            if(idx % 4 == 0){
                elem1.innerHTML = txtIndic[idx];    
            };
            
            if (idx < 24){
                gauge.update({highlights: [{ from:planeado[idx], to: planeado[idx]+10, color: '#0000ff' }]});
                gauge.value = real[idx];

            }
            else {gauge.update({highlights: [{ from:0, to: 0, color: '#0000ff' }]});gauge.value = 0;}                            
            idx++;         
            }, gauge.animation.duration + 7000));
    });
}

