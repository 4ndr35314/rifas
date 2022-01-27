window.addEventListener('load', function() {

    if(XMLHttpRequest){
        xmlhttp=new XMLHttpRequest()
    }else{
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")
    }

    let compradores=document.getElementById("compradores")
    compradores.addEventListener("click",function(){

        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               
                let datos=document.getElementById("mostrar")
              
                datos.innerHTML=xmlhttp.responseText

            }
        }
        xmlhttp.open("GET","php/compradores.php?var="+"compradores",true);
        xmlhttp.send();
        
    })

    let abonos=document.getElementById("abonos")
    abonos.addEventListener("click",function(){
        
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               
                let datos=document.getElementById("mostrar")
              
                datos.innerHTML=xmlhttp.responseText

            }
        }
        xmlhttp.open("GET","php/abonos.php?var="+"abonos",true);
        xmlhttp.send();

    })

    let boletas=document.getElementById("boletas")
    boletas.addEventListener("click",function(){

        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               
                let datos=document.getElementById("mostrar")
              
                datos.innerHTML=xmlhttp.responseText

            }
        }
        xmlhttp.open("GET","php/boletas.php?var="+"boletas",true);
        xmlhttp.send();


    })

    let informes=document.getElementById("informes")
    informes.addEventListener("click",function(){

        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               
                let datos=document.getElementById("mostrar")
              
                datos.innerHTML=xmlhttp.responseText

            }
        }
        xmlhttp.open("GET","php/abonos.php?var="+"informes",true);
        xmlhttp.send();


    })

    
    let cerrarCaja=document.getElementById("cerrarCaja")
    cerrarCaja.addEventListener("click",function(){

        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               
                let datos=document.getElementById("mostrar")
              
                datos.innerHTML=xmlhttp.responseText

            }
        }
        xmlhttp.open("GET","php/cerrarCaja.php?var="+"cerrarCaja",true);
        xmlhttp.send();


    })


    
    let salir=document.getElementById("salir")
    salir.addEventListener("click",function(){

        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               
                let datos=document.getElementById("mostrar")
              
                datos.innerHTML=xmlhttp.responseText

            }
        }
        xmlhttp.open("GET","php/salir.php?var="+"salir",true);
        xmlhttp.send();


    })

  

})




