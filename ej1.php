<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>CSS</title>
<!--Segunda forma de poner estilo-->
<!--
     <style>
	     h1{
	     	text-decoration: underline;
	     }
     </style>

 -->
   <link rel="stylesheet" href="normalize.css">
     <link rel="stylesheet" href="estiloej1.css">


     <ul>  
          <a href="ej2.php" target="_blank">Página siguiente</a>
         </ul>
</head>



<body>
        <main>
        </main>
        	<section class="impar">
        			<h1 class="ti">Selectores:</h1>
        		<h1 id="tit" class="superior">Encabezado</h1>  <!--Primera forma de poner estilo
                <h1 style="border: 1px solid red;">Encabezado</h1>
        	-->
        	    <h2 class="titulo">Titulo 1</h2>
        	    <h5 class="titulo">Titulo 1</h5>
        	    <h2>Titulo 2</h2>
        	    <p>Texto 1</p>
        	    <p id="texto">Texto 2</p>

        	    


        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at pulvinar massa. In egestas, sem a aliquam fermentum, eros quam hendrerit justo, vitae feugiat enim arcu sed orci. Nulla at metus tempor, tempor justo ac, tincidunt nulla. Proin non tempor magna. Duis sem ex, egestas sit amet rutrum in, malesuada eget est. Quisque eget finibus dui, vitae facilisis libero. Duis sed faucibus diam. Praesent egestas facilisis elit non mattis. Nunc urna augue, auctor a aliquet id, feugiat et magna. In vulputate, magna ut venenatis molestie, dui lorem elementum sem, vitae cursus erat dolor et lorem. Cras ornare ut eros quis malesuada. Maecenas vitae nunc arcu. Nullam tincidunt, eros vitae efficitur elementum, nulla massa rhoncus lacus, quis convallis erat augue hendrerit ante. Proin vitae sodales nisl, a elementum purus. In ultricies tristique sapien, et suscipit ex dapibus vitae. Praesent laoreet eleifend tincidunt.</p>
        		<br>
        	</section>




             <section class="articulo">
        	    	<p class="orange">Texto ej dentro</p>
        	    	<p>Otro texto ej dentro</p>
        	    </section>
        	    <p>Texto ej fuera</p>
              <!--
              	Formas de representar color:

              	Nombre del color
              	RGB
              	HSL
              	Hexadecimal
              -->






              <!--
              	Bordes y sombras
              -->
              <section class="par">
              	<h1 class="ti">Bordes y sombras:</h1>
              <div class="caja">
              	<h3>Encabezado</h3>
              </div>
              <br>
             </section>





             <!--
              	Modelo de caja
              -->
              <section class="impar">
              	<h1 class="ti">Modelo de caja:</h1>
             <div class="caja2">
              	<p>text parrafo 1</p>
              	<p>text parrafo 2</p>
              </div>
               <br>
             </section>
      





            <!--
              	Tamaño de elementos, en este apartado comentar el normalize.css
              -->
              <section class="par">
              	<h1 class="ti">Tamaño de elementos:</h1>
             <div class="caja3">
              	
              </div>

              <div class="caja4">
              	
              </div>
              <br>
             </section>





 <!--
              	Overflow
              -->
              <section class="impar">
              	<h1 class="ti">Overflow:</h1>
           <div class="contenedor">
           	        <div class="caja5">
           		         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at pulvinar massa. In egestas, sem a aliquam fermentum, eros quam hendrerit justo, vitae feugiat enim arcu sed orci. Nulla at metus tempor, tempor justo ac, tincidunt nulla.
           		           </p>
           	         </div>
           </div>
           <br>
       </section>




<!--
              	Unidades de medida en css
              -->
              <section class="par">
              	<h1 class="ti">Unidades de medida en CSS:</h1>
           <div class="caja6">
              	
              </div>
            <br>
               </section>



<!--
              	Posicionamiento de los elementos
              -->



            <section class="impar">
              	<h1 class="ti">Posicionamiento de los elementos:</h1>

              <div class="contenedor2">
              	<div class="caja7 caja-uno"></div>
              	<div class="caja7 caja-dos"></div>
              	<div class="caja7 caja-tres"></div>
              </div>

            
             <br>

            <div class="caja8">
              	
              </div>

              <div class="contenedor3">
              	<div class="caja9 caja-cuatro"></div>
              	<div class="caja9 caja-cinco"></div>
              	<div class="caja9 caja-seis"></div>
              </div>

        <br>
        <br>

        <div class="caja10">
              	
              </div>


                 <br>
               </section>






<!--
              	flex box
              -->
               <section class="par">
              	<h1 class="ti">Flex-box:</h1>
              <div class="contenedor4">
              	<div class="caja11 caja-1">CAJA UNO</div>
              	<div class="caja11 caja-2">CAJA DOS</div>
              	<div class="caja11 caja-3">CAJA TRES</div>
              	      	<div class="caja11 caja-1">CAJA UNO</div>
              	<div class="caja11 caja-2">CAJA DOS</div>
              	<div class="caja11 caja-3">CAJA TRES</div>
              	      	<div class="caja11 caja-1">CAJA UNO</div>
              	<div class="caja11 caja-2">CAJA DOS</div>
              	<div class="caja11 caja-3">CAJA TRES</div>

              </div>

          <br>
               </section>





               <!--
              	CSS GRID
              	Se puede inspeccionar con grid, defines un template y les das tamaños, es responsive
              -->
               <section class="impar">
              	<h1 class="ti">CSS GRID:</h1>
              
              <div class="grid-container">
              	<header>
              		<h4>HEADER</h4>
              	</header>
              	<nav>
              		<h4>SIDE BAR</h4>
              	</nav>
              	<main>
              		<h4>MAIN</h4>
              	</main>
              	<nav class="derecha">
              		<h4>NAV DERECHA</h4>
              	</nav>
              	<footer>
              		<h4>FOOTER</h4>
              	</footer>
              </div>
               <br>
               </section>





             
   
</body>

<section class="pie">
          <ul>  
          <a href="ej2.php" target="_blank">Página siguiente</a>
         </ul>
</section>
</html>