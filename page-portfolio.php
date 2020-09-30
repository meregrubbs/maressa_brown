<?php get_header(); ?>

<?php $portfolio = get_field('portfolio');
    if( $portfolio ): ?> 
        <div class="container">
        
        <?php if( have_rows( 'portfolio' ) ) : ?>
            <section class="portfolio">
                <h1 class="section-title"><?php echo $portfolio['section_title'] ?></h1>

            <?php 
            while( have_rows( 'portfolio' ) ) : the_row();

                if( have_rows( 'portfolio_categories' ) ) : ?>
                <div class="portfolio-tiles">

                    <?php while ( have_rows( 'portfolio_categories' ) ) : the_row();

                    $category_name = get_sub_field('category_name');
                    $category_image = get_sub_field('category_image');
                    $category_link = get_sub_field('category_link');
                    $remove = [' ','&',','];
                    $category_class = str_replace($remove,'-',$category_name);
                    ?>

                    <div class="portfolio-tile <?php echo $category_class ?>">
                        <a href="<?php echo $category_link ?>"><?php echo $category_name ?></a>
                    </div>

                    <style>
                        <?php echo '.'. $category_class ?> {
                            background: url('<?php echo $category_image ?>');
                            background-size: cover;
                            background-position: center;
                        }
                    </style>
                    <?php endwhile; ?>

                </div>

                <?php endif; ?>
            <?php endwhile;

            if( $portfolio['link_url'] ): ?>
                <a href="<?php echo $portfolio['link_url'] ?>" class="button"><?php echo $portfolio['link_text'] ?></a>
                <?php endif; ?>
        
            </section>
         <?php endif; ?>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>