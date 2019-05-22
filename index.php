<html>
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>Alternuz</title>
		<link rel="stylesheet" href="C:\wamp64\www\pagWeb\Carrito\CSS\reset.css">
        <link rel="stylesheet" href="C:\wamp64\www\pagWeb\Carrito\CSS\style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fahkwang" rel="stylesheet">
		
		<script>
			function oferta(){
				
				var opcion=prompt("Ingrese su nooooooooombre");
				
			}
			var slideIndex = 1;
				showDivs(slideIndex);

				function plusDivs(n) {
				  showDivs(slideIndex += n);
				}
				function showDivs(n) {
				  var i;
				  var x = document.getElementsByClassName("mySlides");
				  if (n > x.length) {slideIndex = 1} 
				  if (n < 1) {slideIndex = x.length} ;
				  for (i = 0; i < x.length; i++) {
					x[i].style.display = "none"; 
					
					
				  }
				  x[slideIndex-1].style.display = "block"; 
					
				}
		</script>
	</head>
		<body onload=oferta();>
			<header class="header">
				<h1>
				</h1>
			</header>
			
			<!-- Menu de navegacion -->
			<nav class="navar">
				<a href="#">Inicio</a>
				<a href="#">Productos</a>
				<a href="#">Contacto</a>
			</nav>
			
			<!-- Menu Inicio -->
			<section class=" content inicio">
				<h2 class="title">Inicio</h2>
				<p>En Alternuz somos una empresa de venta de ropa alternativa con diseños originales, únicos y muy diferentes.
Hay un estilo diferente para cada tipo de persona y nosotros somos conscientes de eso y por esa razón nosotros ofrecemos una enorme variedad de diseños y tipos de playera para que puedan encajar según tu personalidad o tus gustos.</p>
			</section>
			
			<!-- Menu Productos -->
			<section class=" content productos">
				<h2 class="title">Productos</h2>
				<p>
					<img class="mySlides" src="C:\Users\fhern\Software\Sem 6\AppWeb\LandingPage-HTMLyCSS/imagenes/1.jpg" width="250" height="250">
					<img class="mySlides" src="C:\Users\fhern\Software\Sem 6\AppWeb\LandingPage-HTMLyCSS/imagenes/99.jpg" width="250" height="250">
					<img class="mySlides" src="C:\Users\fhern\Software\Sem 6\AppWeb\LandingPage-HTMLyCSS/imagenes/descarga.jpg" width="250" height="250">
					<img class="mySlides" src="C:\Users\fhern\Software\Sem 6\AppWeb\LandingPage-HTMLyCSS/imagenes/alternuz.jpg" width="250" height="250">
					<img class="mySlides" src="C:\Users\fhern\Software\Sem 6\AppWeb\LandingPage-HTMLyCSS/imagenes/images.jpg" width="250" height="250">
				</p>
				<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
				<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
			</section>
			
			<!-- Menu Contacto -->
			<section class=" content contacto">
				<article class="contain">
					<h2 class="title">Contacto</h2>
					<p> email:tienda@hotmail.com</p>
					<p>telefono: 01234567789</p>
				</article>
			</section>
		</body>
<html>