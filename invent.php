
<body>

<?php include("header.php");?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1> ¿Quieres saber nuestro inventario?</h1>
			</div>

			<div class="articulo">
				<article>
					<form action="welcome.php" method="post">
                        Nombre: <input type="text" name="name"><br>
                        E-mail: <input type="text" name="email"><br>
                        <input type="submit">
                        </form>
				</article>
			</div>

			<?php include("aside.php");?>
		</div>
	</section>
	
	<?php include("footer.php");?>
</body>
</html>