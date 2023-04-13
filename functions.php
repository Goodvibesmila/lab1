<!-- används för att utöka funktionaliteten, ge tema stöd för ex menyer, sidebars
utvalda bilder, m.m, fungerar som tillägg men är bundet till temat ist för tillgängligheten i wordpress 


thumbnail.

Lägger jag till add_theme_support( 'post-thumbnail' ); här för att
Stödja att bilden på förstasidan ska synas?

Lägger jag get_the_title() här också? - skriver ut/returnerar rubriken för en post
om posten är privat eller lösenordsskyddad kommer rubriken att få orden provat resp skyddat. om man vill
anropaen posts rubrik utanför loopen kan man använda funktionen get_the_title()

Föreläsning 2, del två 42.33 in vanliga malltaggar. 
postens titel, postens innehåll författare, länkar till postkategorier
visar url till post, post publiceringstid, visar navigeringsmeny

the_content()

template tags. finns på developer.wordpress.org teman.-->






<!-- här skapar jag min loop, för att loopa ut innehåll som 
generar output för inlägg.

genom loop bearbetar wordpress varje post som ska visas, formaterar
den enligt hur den matchar specifika kriterier i looptagg. 

loop hämtar data från alla poster som matchar givna kriterier och infogar
lämplig information.

loopstruktur.
börja loop.
visa taggar
avsluta loop.
    < ?php the_thumbnail(); ?>
< ?php wp_nav_meny(); ?>

< ?php dynamic_sidebar(); ?>

< ?php add_theme_support(); ?> -->

<!--
< ?php the_title(); ?>

< ?php the_content(); ?>

< ?php the_date(); ?>

< ?php the_category(); ?>

< ?php the_author(); ?>

< ?php the_excerpt(); ?>

< ?php have_posts(); ?>

< ?php the_post(); ?>

< ?php the_post_thumbnail_url(); ?>

< ?php the_permalink(); ?>

< ?php get_search_query(); ?>

< ?php get_search_form(); ?>

-->


<!-- fattar inte riktigt loop, förklara gärna igen? strax innan 
1.35 del 2 lektion 2. Går igenom vart man skriver loop för post.
Gå igenom igen. Men vill gärna ha hjälp.  -->

<!--
< ?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?> 
< ?php endwhile; else: ?>
    <p>< ?php esc_html_e ( 'Tyvärr, det finns inga inlägg.' ); ?></p>
    < ?php endif; ?>

    < ?php if ( have_posts() ) : ?>
        <div class="articles">
        < ?php while ( have_posts() ) : the_post(); ?>
        <article>
            <h3>< ?php the_title(); ?></h3>
            <h4>< ?php the_content(); ?></h4>
        </article>
        < ?php endwhile; ?>
        </div>
        < ?php else : ?>
            <p> Tyvärr inga poster hittades. </p>
            < ?php endif; ?>

        -->