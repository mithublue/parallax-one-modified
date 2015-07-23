<?php
/*
 * Template Name: Portfolio
 */
get_header();
?>
    <section class="team wow" id="team">
        <div class="section-overlay-layer">
            <div class="container">

                <!-- SECTION HEADER -->

                <div class="section-header">
                       <h2 class="dark-text"><?php echo get_the_title(); ?></h2><div class="colored-line"></div>
                        <div class="sub-heading"><?php echo get_the_content(); ?></div>
                </div>
                <?php
                    echo '<div class="row team-member-wrap items-wrap">';

                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    query_posts( array( 'post_type' => 'portfolio', 'posts_per_page' => 10, 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) ) );
                    //$parallax_one_team_decoded = get_posts();
                    //foreach($portfolios as $item){
                     if ( have_posts() ) :
                        while( have_posts() ): the_post();
                        ?>

                        <div class="col-md-3 team-member-box item_box">
                            <div class="team-member border-bottom-hover">
                                <div class="member-pic">
                                    <?php $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(),array(500,500) );?>
                                    <a href="<?php echo $thumb_url[0] ; ?>" rel="prettyPhoto[gallery1]" ><?php the_post_thumbnail();?></a>
                                </div><!-- .member-pic -->

                                <div class="member-details">
                                    <div class="member-details-inner">
                                       <h3 class="colored-text"> <a href="<?php the_permalink(); ?>" class="cc_item_link"><?php the_title();?></a></h3>
                                        <div class="small-text">
                                            <?php
                                            the_excerpt();
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- .team-member -->
                        </div><!-- .team-member -->
                        <!-- MEMBER -->
                        <?php
                        endwhile;
                         the_posts_navigation();
                     endif;
                    //}
                    ?>

                    <?php ?>
                    <?php
                    wp_reset_postdata();
                    echo '</div>';
                ?>
            </div>
            <script>
                (function ($) {
                    $(document).ready(function () {
                        $("area[rel^='prettyPhoto']").prettyPhoto();
                    })
                }( jQuery ))
            </script>
        </div><!-- container  -->
    </section><!-- #section9 -->
<?php get_footer();

