<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>CSS</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="normalize.css">
     <link rel="stylesheet" href="estiloej2.css">

      <ul>  
          <a href="ej1.php" target="_blank">Página anterior</a>
         </ul>
</head>

<body>

 

<script src="https://kit.fontawesome.com/351c2c0ed8.js" crossorigin="anonymous"></script>


<!--
                MEDIA QUERIES 2:09:10
              -->

            <section class="impar">
                <h1 class="ti">Media Query:</h1>
              <div class="cont">

              	<div class="caj">
              		<h4 >Título</h4>
              		<em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at pulvinar massa. In egestas, sem a aliquam fermentum, eros quam hendrerit justo, vitae feugiat enim arcu sed orci. Nulla at metus tempor, tempor justo ac, tincidunt nulla.</em>
              	</div>

              	<div class="caj">
              		<h4 >Título</h4>
              		<em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at pulvinar massa. In egestas, sem a aliquam fermentum, eros quam hendrerit justo, vitae feugiat enim arcu sed orci. Nulla at metus tempor, tempor justo ac, tincidunt nulla.</em>
              	</div>

              </div>
              
              <br>
            </section>




            <!--
                Tipografía:
                -Serif
                -Sans-Serif
                -Monospace
              -->
              <section class="par">
                <h1 class="ti">Tipografía:</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at pulvinar massa. In egestas, sem a aliquam fermentum, eros quam hendrerit justo, vitae feugiat enim arcu sed orci. Nulla at metus tempor, tempor justo ac, tincidunt nulla.</p>

                   <br>
            </section>
            



            <!--
                fuentes internas

                fontsquirrel.com

                Nos descargamos la fuente en ttf y luego las subimos al generador y nos descargamos nuestro kit, nos lo descargamos en woff

                caniuse.com
                ponemos el formato y nos dice en que navegadores se ve, en opera no, pero en los demas si




                creamos una carpeta nueva en la página, y pasamos del kit los woff y woff2


                el stylesheet también se pasa a la carpeta general, modificamos la url
              -->
              <section class="impar">
                <h1 class="ti">Fuentes internas:</h1>
<p id="cambio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at pulvinar massa. In egestas, sem a aliquam fermentum, eros quam hendrerit justo, vitae feugiat enim arcu sed orci. Nulla at metus tempor, tempor justo ac, tincidunt nulla.</p>

                   <br>
            </section>


 <!--
                Google fonts


                fonts.google.com

                seleccionamos la fuente(hay hasta tamaño 900, lo normal es 400), la seleccionamos,cogemos los links y los pegamos justo debajo del titulo

                Abajo del link te viene el css que hay que copiar y pegar en la hoja de estilo




                network, deshabilitas la cache y contr.r
                ponemos el filtro de los css y recargamos, tarda un poco más, con red 3G, se mira cuanto dura
                Cuantos más descargues más tardará
              -->
              <section class="par">
                <h1 class="ti">Google fonts:</h1>
<p id="camb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at pulvinar massa. In egestas, sem a aliquam fermentum, eros quam hendrerit justo, vitae feugiat enim arcu sed orci. Nulla at metus tempor, tempor justo ac, tincidunt nulla.</p>

                   <br>
            </section>




 <!--
             Iconos

             fontawesome.com, te registras, plan free
             copiamos el codigo y lo ponemos en el body
              -->

            <section class="impar">
                <h1 class="ti">Iconos:</h1>
 <spam id="icon">
    <i class="fas fa-users fa-4x"></i>
  </spam>

                   <br>
            </section>




             <!--
          Imágenes CSS
          poner una carpeta de imagenes
          
          El.png suelen tener el fondo trasparente
          Poner el alt es muy importante
              -->

            <section class="par">
                <h1 class="ti">Imágenes CSS:</h1>
 
<img height="100" width="100" src="imagenes/HTML5.png" alt="es una imagen html con fondo trasparente">
<img height="250" width="250" src="imagenes/OIP.jpg" alt="la imagen jpg de html5">  <!--Por defesto ocupa todo su espacio si no le pones nada, se puede deformar o pixelar
              -->


                   <br>
            </section>





<!--Filtros CSS
  Utilizamos las imagenes anteriores
  En las png no funcionan tan bien

  Es util para cambiarlo con hover
              -->
            <section class="impar">
                <h1 class="ti">Filtros CSS:</h1>
 

<img id="filtro"  src="imagenes/flor.jpg" alt="la imagen jpg de html5">  


                   <br>
            </section>






            <!--Formularios Introducción
              -->
            <section class="par">
                <h1 class="ti">Formulario:</h1>
 
<form action="">
  <div class="form-group">
  <label for="nombre">Nombre:</label>
  <input type="text">
</div>
<div class="form-group">
  <label for="email">Email:</label>
  <input type="email">
  </div>
  <div class="form-group">
  <input type="submit" value="enviar">
  <input type="reset" value="reset">
 </div>
</form>
  


                   <br>
            </section>


              <!--Inputs   3:27:00
              -->
            <section class="impar">
                <h1 class="ti">Inputs:</h1>
 
<form action="">
  <div class="form-group">
  <label for="nombre">Edad:</label>
  <input type="number">
</div>
<div class="form-group">
  <label for="email">Email:</label>
  <input type="email">
  </div>
<div class="form-group">
  <label for="password">Contraseña:</label>
  <input type="password">
  </div>
  <div class="form-group">
  <input type="date" value="fecha">
</div>
  <div class="form-group">
  <input type="color" value="color">
  </div>
  <div class="form-group">
  <textarea name="cuadro" id="ta" cols="30" rows="10"></textarea>
</div>
<div class="form-group">
  <input type="text" value="Hola">  <!--Es mejor usar placeholder
              -->
</div>
<div class="form-group">
  <input type="text" placeholder="Pon tu nombre">
</div>
<div class="form-group">
  <input type="text" placeholder="Solo lectura" readonly >
</div>
<div class="form-group">
  <input type="text" placeholder="Desactivado" disabled >
</div>
<div class="form-group">
  <input type="text" placeholder="Autofocus" autofocus >
</div>
<div class="form-group">
  <input type="text" placeholder="Solo 5 caracteres" maxlength="5" >
</div>
  <input type="submit" value="enviar">
  <input type="reset" value="reset">
 </div>
</form>
  


                   <br>
            </section>




<!--Data list
              -->
<section class="par">
                <h1 class="ti">Data List:</h1>
 
<form>
  <div>
<input type="text" list="paises">
<datalist id="paises">
  <option value="españa">España</option>
   <option value="italia">Italia</option>
    <option value="alemania">Alemania</option>
     <option value="francia">Francia</option>
</datalist>
</div>

<div>
<input type="text" list="paises"> <!--Ver por que no sale
              -->
<datalist id="paises">
  <option data-value="españa">España</option>
   <option data-value="italia">Italia</option>
    <option data-value="alemania">Alemania</option>
     <option data-value="francia">Francia</option>
</datalist>
</div>

</form>
  


                   <br>
            </section>


<!--Lista desplegable

  milligram.io
  nos descargamos el que queramos y pegamos justo debajo del title, vemos que se descargan distintos estilos
              -->
<section class="impar">
                <h1 class="ti">Lista desplegable:</h1>
 
<form>
  <select>
    <option value="0">Selecciona un elemento de la lista.</option>
    <option value="1">HTML</option>
    <option value="2">CSS</option>
    <option value="3">JavaScript</option>
    <option value="4">PHP</option>
  </select>


</form>


<form>
  <select multiple><!--Con Shift puedes seleccionar varias
              -->
    <option value="0">Selecciona un elemento de la lista.</option>
    <option value="1">HTML</option>
    <option value="2">CSS</option>
    <option value="3">JavaScript</option>
    <option value="4">PHP</option>
  </select>


</form>


<form>
  <select><!--Con Shift puedes seleccionar varias
              -->
              <optgroup label="Front-End">
                <option value="1">HTML</option>
                <option value="2">CSS</option>
                <option value="3">JavaScript</option>
                <option value="4">PHP</option>
              </optgroup>
              <optgroup label="Back-End">
                <option value="1">NODE</option>
                <option value="2">PHP</option>
              </optgroup>
  
  </select>


</form>
  
                   <br>
            </section>



<!--Check-box
              -->
<section class="par">
                <h1 class="ti">Check Box:</h1>
 
<form>
  <input type="checkbox" name="" id="front-end" checked>
  <label for="front-end" id="bot">Front-end</label>


</form>


  
                   <br>
            </section>




<!--Radio buttons, selecciono solo uno, tienen que estar en el mismo grupo
              -->
<section class="impar">
                <h1 class="ti">Radio Buttons:</h1>
 
<form>
  <div>
 <input type="radio" name="membresia" id="oro">
 <label for="oro">Oro</label>
</div>

  <div>
 <input type="radio" name="membresia" id="plata">
 <label for="plata">Plata</label>
</div>

  <div>
 <input type="radio" name="membresia" id="bronce" disabled>
 <label for="bronce">Bronce</label>
</div>

</form>


  
                   <br>
            </section>



<!--Transform
              -->
<section class="par">
                <h1 class="ti">Transform:</h1>
 <div class="cuadradito">
<div class="caja80 ">
  
</div>

</div>
  
                   <br>
            </section>

<!--3d en CSS
              -->
<section class="impar">
                <h1 class="ti">3D en CSS:</h1>
 <div class="cuadradito2">
<div class="caja90 ">
  
</div>

</div>
  
                   <br>
            </section>


            <!--Transiciones
              -->
<section class="par">
                <h1 class="ti">Transiciones:</h1>
 <div class="cuadradito3">
<div class="caja100 ">
  
</div>

</div>
  
                   <br>
            </section>

<!--Propiedades custo o variables
              -->
<section class="impar">
                <h1 class="ti">Propiedades custo o variables:</h1>
 <div class="cuadradito3">
<div class="caja101 ">
  
</div>
<div class="caja102 ">
  
</div>

</div>
  
                   <br>
            </section>



            <!--Buenas prácticas
              -->
<section class="par">
                <h1 class="ti">Buenas prácticas:</h1>
<li>No poner nombres raros, usar guiones medios o guiones bajos, o CamelCasse.</li><br>
<li>Empezar por el root, luego el selector general, el body...,ir de mayor a menor. Ser coherentes. Ir de los elementos más generales a los más específicos.</li><br>
<li>Crear comentarios.</li><br>
<li>No repetir código.</li><br>
  
                   <br>
            </section>



<!--Bem
              -->
            <section class="impar">
                <h1 class="ti">Bem:</h1>
<li>Cada vez que bajemos un elemento ponemos __ (guiones bajos).</li><br>
<li>Cada vez que pongamos un elemente en el mismo nivel -- (guiones medios).</li><br>

  
                   <br>
            </section>



</body>
<section class="pie">
          <ul>  
          <a href="ej1.php" target="_blank">Página anterior</a>
         </ul>
</section>

</html>