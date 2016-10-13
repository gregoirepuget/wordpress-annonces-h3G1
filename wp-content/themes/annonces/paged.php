<?php get_header(); ?>
<section id="main" class="container">
  <h1>Accueil : <?php bloginfo("title"); ?></h1>
  <h2><?php bloginfo("description") ; ?></h2>
  <?php
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $args=array(
    'post_type' => 'annonce',
    'posts_per_page' => 2,
    'paged' => $paged
    );
  // The Query
  $the_query = new WP_Query( $args );

  // The Loop
  if ( $the_query->have_posts() ) {
     
      while ( $the_query->have_posts() ) {
          $the_query->the_post();
      ?>
      <article class="col-md-4" id="annonce-<?php the_ID(); ?>">
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <span class="prix"><strong>Prix : </strong><?php the_field("prix"); ?> €</span>
      </article>
      <?php
      }
     
      /* Restore original Post Data */
      wp_reset_postdata();
  } else {
      // no posts found
  }
  ?>
</section>
<div class="pagination">
  <?php wp_pagenavi( array( 'query' => $the_query ) ); ?>
</div>
<?php get_footer(); ?>












