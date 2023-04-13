<!-- Ska vi lägga in Get header som i föreläsningen och sen ta bort doctype osv?

Om ja, så ska följande kod finnas:
Enligt föreläsning 2, skapa eget tema, runt 20 min in, så ska det bara vara att skriva in
get_header.
< ?php get_header(); ?>
<section>
    < ?php if (have_posts() ) : ?>
	
	Mallhierarkin måste man ha koll på. 
single.php - för enskilda inlägg. 
 index.php ska visa standardmallad sida. 
front-page.php - för startsidan. 
home.php samlingssida för alla bloginlägg
page.php för sidor, samt för hur man kan malla en specifik sida via slug eller id.
Kan du bestämma själv.
custom.php - kan välja själv från adminpanelen, kan välja vilken mall sidan ska ha.
custom.php behöver man nog inte ha i inlämningsuppgiften.
page-slug.php används också för att eg sidan innehåll. Kan användas
till sidoinnehåll. 

page-slug.php eller id, för att kunna visa innehåll för en enskild sida
så man gör en enskild för varje sida. 

slug - kan likna vid länk, namn på en sida. 
istället för att länka med adress, så har man ett namn. 
man sätter ett namn på en sida. Så skriver man namnet så vet man
att det är den sidan som ska visas. Bakom domännamnet, sista delen av url-länken.

Vill man bara visa en del av innehållet så är det
the_excerpt som gäller.


get_sidbar.
-->

	<?php get_header(); ?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<img src="img/city.jpg" />
								<div class="text">
									<h1>Hej och välkommen!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php get_footer(); ?>