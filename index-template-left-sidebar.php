<?php
/*
Template Name: TEMPLATE LEFT SIDEBAR
*/
?>




<?php get_header(); ?>




<div id="article" class="row">

 <div class="col-xs-12 col-sm-8 col-sm-push-4">

<!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

 	<?php if ( in_category( '3' ) ) : ?>
 		<div>
 	<?php else : ?>
 		<div>
 	<?php endif; ?>


 	<!-- Display the Title as a link to the Post's permalink. -->

 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


 	<!-- Display the Post's content in a div box. -->

 	<div>
 		<?php the_content(); ?>
         
 	</div>



 	</div> <!-- closes the first div box -->


 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
 
</div>  

<div class="col-xs-12 col-sm-4 col-sm-pull-8"> 
 
 <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Template Left Sidebar')) : ?>
[ No widgets added... ]
<?php endif; ?>

</div>
</div>


<?php get_footer(); ?>