    //timer para os indicadores
      var text = ["OEE Geral", "Qualidade", "Performance","Disponiblidade"];
        var counter = 0;
        
        var elem = document.getElementById("textoL1");
        var elem1 = document.getElementById("textoL2");
        var elem2 = document.getElementById("textoL3");
        var elem3 = document.getElementById("textoL4");
        var elem4 = document.getElementById("textoL5");
        var elem5 = document.getElementById("textoL6");

        setInterval(change,3500); // <-- mudar tempo aqui 
        function change() {
            elem.innerHTML = text[counter];
            elem1.innerHTML = text[counter];
            elem2.innerHTML = text[counter];
            elem3.innerHTML = text[counter];
            elem4.innerHTML = text[counter];
            elem5.innerHTML = text[counter];
            
           
            counter++;
            if (counter >= text.length) { counter = 0; }
        }