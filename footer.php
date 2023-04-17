
<footer id="footer">
	<div class="container">
		<div class="row top">
			<div class="col-xs-12 col-sm-6 col-md-4">

                <!-- Wordpressfunktion som Hämtar/visar dynamiskt innehåll. Footer-1, 2 och 3 är Id för
					den funktionerna som skapar widgets placerade i footern. -->
                <?php dynamic_sidebar('footer-1') ?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-2') ?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-3') ?>
			</div>
		</div>
		<div class="row bottom">
			<div class="col-xs-12">
				<p>Copyright &copy; Grupp X, 2023</p>
			</div>
		</div>
	</div>
</footer>
	</div>

<!-- En funktion som skriver ut scripts eller kod som ska laddas i footern, eller 
efter main innehållet. -->
<?php wp_footer(); ?>

</body>
</html>