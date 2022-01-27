<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>
  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-dark" id="compradores">COMPRADORES</a></li>
          <li><a href="#" class="nav-link px-2 link-dark"  id="abonos">ABONOS</a></li>
          <li><a href="#" class="nav-link px-2 link-dark"  id="boletas">BOLETAS</a></li>
          <li><a href="#" class="nav-link px-2 link-dark"  id="informes">INFORMES</a></li>
               
         
        
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control" placeholder="Buscar Boleta..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="#" id="salir">salir</a></li>
            <!-- <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li> -->
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" id="cerrarCaja">cerrar caja</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>


  <section class="container">
    <h1 class="text-center text-primary"></h1>
      <div class="mostrar container" id="mostrar"></div>

  </section>

  <footer>

      <div class="logo container-fluid">

      </div>
     
  </footer>


  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/funciones.js"></script>
<script src="js/routes.js"></script>
<script>
    function pagEliminar(e){
     
      let id=document.getElementById('delete').dataset.eliminar

      alert(id)

        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               
                // let datos=document.getElementById("mostrar")
              
                // datos.innerHTML=xmlhttp.responseText

                cambiarPagina()
    
            }
        }
        xmlhttp.open("GET","php/eliminarComprador.php?eli="+id,true)
        xmlhttp.send()


    
    }


    function cambiarPagina(){
   

        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               
                let datos=document.getElementById("mostrar")
              
                datos.innerHTML=xmlhttp.responseText

            }
        }
        xmlhttp.open("GET","php/compradores.php",true);
        xmlhttp.send();
 
    }
 
    function agregarComprador(){
      xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               
                let datos=document.getElementById("mostrar")
              
                datos.innerHTML=xmlhttp.responseText

            }
        }
        xmlhttp.open("GET","php/agregarComprador.php",true);
        xmlhttp.send();
    }
</script>


</body>
</html>