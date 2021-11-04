
<body>

<?php include("header.php");?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1> ¿Que sala te interesa?</h1>
			</div>

			<div class="articulo">
				<article>
          <form action="/action_page.php">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <input type="submit" value="Submit">
          </form>
				</article>
			</div>

			<?php include("aside.php");?>

		</div>
	</section>
	<?php include("footer.php");?>

</body>
</html>
