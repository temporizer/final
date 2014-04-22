<?php include 'includes/header.inc.php'; ?>
<section id="contact">
	<form action="#">
		<h1>send me a message...</h1>

		<input id="name" name="name" type="text" placeholder="Name">
		<input id="email" name="mail" type="text" placeholder="Email">
		<input id="website" name="website" type="text" placeholder="Website - optional">

		<textarea id="comments" name="comments" placeholder="Tell me something - optional"></textarea>
		
		<button type="submit">Submit</button>
		<button type="reset">Reset</button>


	</form>
</section>
<?php include 'includes/footer.inc.php'; ?>