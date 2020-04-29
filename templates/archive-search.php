<?php
/* Template Name: Custom Search */        
get_header(); ?>
             
<div id="main-content">
   <div class="container">
      <div id="content-area" class="clearfix">
         <div id="left-area">
            <h1>Resultado de búsqueda: <?php echo "$s"; ?> </h1>       
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
               <div id="post-<?php the_ID(); ?>" class="posts">        
                  <article class="loop-gim">
                     <div class="avatar">
                        <?php the_post_thumbnail(); ?>
                     </div>
                     <div class="loop-content">
                        <h2>
                           <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h2>       
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Leer mas</a>
                     </div>
                  </article><!-- #post -->
               </div><!-- post -->
            <?php endwhile;endif; ?>
         </div><!-- left-area -->
         <?php get_sidebar(); ?>
      </div><!-- content-area -->
   </div><!-- container -->
</div><!-- main-content -->

<?php

get_footer();