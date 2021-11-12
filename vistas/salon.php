<html>
    <head>
        <title>prohglobal</title>
        <meta charset="UTF-8">
        <meta name="description" content="descripcion de la pagina para los buscadores">
        <meta name="keywords" content="palabra_clave_para_buscadores;palabra2,palabra3">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <script>
    function openNav() {
        document.getElementById("sideNavigation").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }
     
    function closeNav() {
        document.getElementById("sideNavigation").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    </script>
    <body>        
        <div id="sideNavigation" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Inicio</a>
            <a href="#">Registro Visitas</a>
            <a href="#">Salon Social</a>
            <a href="#">Contactenos</a>
          </div>
           
          <nav class="topnav">
            <a href="#" onclick="openNav()">
              <svg width="30" height="30" id="icoOpen">
                  <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
                  <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
                  <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
              </svg>
            </a>
          </nav>          
        <header>   
            <div>       
                <div id="titulo"><img id="logo" src="https://i.ibb.co/vXwn2Fq/logo.png"> </div>                         
            </div>
        </header>      
        <section id="contenido"><p id="bienvenida">SALON SOCIAL</p>            
     
        </section>
    </body>
</html>

<?php
?>