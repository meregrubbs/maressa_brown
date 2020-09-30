<?php get_header(); ?>

<?php 
    $client = get_field('client', 'option');
    $portfolio_link = get_field('back_to_portfolio_link', 'option');
    if( $client ): ?> 
        <div class="portfolio-nav-bar">
            <div class="container">
                <h1 class="portfolio-title"><a href="<?php echo $portfolio_link?>">Portfolio</a> | On Camera </h1>
            </div>
        </div>
        
        <?php if( have_rows( 'client', 'option' ) ) : ?>
            <div class="container">
                <div class="portfolio-container">
                
                    <?php 
                    while( have_rows( 'client', 'option' ) ) : the_row(); 
                        $client_logo = get_sub_field('client_logo', 'option');
                        $article_links = get_sub_field('article_links', 'option');
                    ?>
                        <!-- On Camera -->
                        <?php if( have_rows( 'on_camera', 'option' ) ) : ?>
                            <div class="portfolio-group">
                                <div class="portfolio-logo">
                                    <?php if($client_logo === 'https://maressabrown.com/wp-content/uploads/2020/08/weight_watchers.svg') { ?>
                                        <img id="weight-watchers" src="<?php echo $client_logo ?>">
                                    <?php } else { ?>
                                        <img src="<?php echo $client_logo ?>">
                                    <?php } ?>
                                </div>
                                    
                                <div class="portfolio-links">

                                <?php while ( have_rows( 'on_camera', 'option') ) : the_row();
                                $link = get_sub_field('article_link', 'option');
                                $article_title = get_sub_field('article_title', 'option');
                                $pdf = get_sub_field('pdf', 'option');
                                ?>

                                    <?php if( $pdf ) { ?>
                                    
                                        <a href="<?php echo $pdf ?>" target="_blank">
                                        <?php echo $article_title ?>
                                        </a>

                                    <?php } else { ?>

                                        <a href="<?php echo $link ?>" target="_blank">
                                        <?php echo $article_title ?>
                                        </a>

                                    <?php } ?>

                                <?php endwhile; ?>
                                </div> <!-- portfolio-links -->
                            </div> <!-- portfolio-group -->
                        <?php endif; ?>                 

                        
                    <?php endwhile; ?>
                </div> <!-- portfolio-container -->
            </div> <!-- container -->
         <?php endif; ?>
    <?php endif; ?>

<?php get_footer(); ?>