
<!DOCTYPE html>
<html>
<head>
	<title>

	</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
</head>
<body>
	<footer>
	</footer>
</body>
</html>

<?php
// à utiliser avec front-page.php
//wp_redirect(site_url());
//exit;
?>
<?php get_header(); ?>

<!--pull anthony-->

<section id='content'>
  <aside>
    <fieldset id="fieldsetsidebar">
  <legend>index.php: &lt;aside&gt; + <code>get_sidebar()</code></legend>
  <?php get_sidebar(); ?>
  </aside>

  <fieldset id="fieldsetcontent">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <fieldset class="post">


   	<!-- Display the Title as a link to the Post's permalink. -->

   	<h2> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


   	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

   	<small>Date et auteur <code>the_time('j F Y à G:i')</code> : <?php the_time('j F Y à G:i'); ?> par <code>the_author_posts_link()</code> : <?php the_author_posts_link(); ?></small>


   	<!-- Display the Post's content in a div box. -->

   	<div class="entry">
      <fieldset>
   		<?php the_content(); ?>
    </fieldset>
   	</div>

    <p style="font-size:.9em;">
      <!-- Display the number of comments. -->
      Cet article a <code>comments_number(...)</code><a href="<?php the_permalink(); ?>#comments"><?php comments_number( 'aucun commentaire', 'un commentaire', '% commentaires' ); ?></a>.
   	<!-- Display a comma separated list of the Post's Categories. -->
   	<span class="postmetadata">Posté dans <code>the_category(', ')</code><?php the_category( ', ' ); ?></span>
  </p>

    <fieldset style="margin-left:10%;">
<?php
    if ( comments_open() || get_comments_number() ) :
              comments_template();
    endif;?>
    </fieldset>
  </fieldset> <!-- closes the first div box -->

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</fieldset>
</section>

<?php get_footer(); ?>
