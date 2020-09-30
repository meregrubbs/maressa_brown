<?php get_header(); ?>

<?php $hero = get_field('hero'); 
if( $hero ): ?>
<div class="hero hero-home">
    <div class="hero-content-container">
        <div class="hero-img"></div>
        
        <div class="hero-content">
            <h1><?php echo $hero['title'] ?></h1>
            <p><?php echo $hero['paragraph'] ?></p>
            <a class="body-link" href="<?php echo $hero['link_url'] ?>"><?php echo $hero['link_text'] ?></a>
        </div>
    </div>  
</div>
<style>
    .hero {
    background-image: url('<?php echo $hero['background_image'] ?>');
    }
    .hero-img {
    background-image: url('<?php echo $hero['image'] ?>');
    }
</style>
<?php endif; ?>


<div class="container">


    <?php $portfolio = get_field('portfolio');
    if( $portfolio ): 
        
        if( have_rows( 'portfolio' ) ) : ?>
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
    <?php endif; ?>



<?php $services = get_field('services'); 
if( $services ): ?>
    <?php if( have_rows( 'services' ) ) : ?>
    <section class="services">
        <h1 class="section-title"><?php echo $services['section_title'] ?></h1>

            <?php 
            while( have_rows( 'services' ) ) : the_row();

                if( have_rows( 'service_items' ) ) : ?>
                <div class="service-items">

                    <?php while ( have_rows( 'service_items' ) ) : the_row();

                    $service = get_sub_field('service');
                    $service_info = get_sub_field('service_info');
                    $icon = get_sub_field('image');
                    ?>

                    <div class="service-item">
                        <img src="<?php echo $icon ?>" alt="<?php echo $service ?>">

                        <h2><?php echo $service ?></h2>

                        <p><?php echo $service_info ?></p>
                    </div>
                    <?php endwhile; ?>

                </div>
                <?php endif; ?>
            <?php endwhile;

        if( $services['link_url'] ): ?>
        <a href="<?php echo $pservices['link_url'] ?>" class="button"><?php echo $services['link_text'] ?></a>
        <?php endif; ?>
    
    </section>
    <?php endif; ?>
<?php endif; ?>


<?php $clients = get_field('client_logos'); 
if( $clients ): 
    if( have_rows( 'client_logos' ) ) :  ?>
    <div class="pink-borders">
        <div class="container">
            <section class="clients">
                <h1 class="section-title"><?php echo $clients['section_title'] ?></h1>

        <?php while( have_rows( 'client_logos' ) ) : the_row();

            if( have_rows( 'logos' ) ) : ?>
        
                <div class="client-logos">

                    <?php while ( have_rows( 'logos' ) ) : the_row();

                    $logo = get_sub_field('logo');
                    ?>

                    <img src="<?php echo $logo ?>">

                    <?php endwhile; ?>
                </div>
            <?php endif; 
        endwhile;?>
            </section>
        </div>
    </div>
            
    <?php endif;
endif; ?>



<?php $testimonial = get_field('testimonial'); 
$testimonials_section_title = get_field('testimonials_section_title');
$buttons = get_field('buttons');
if( $testimonial ): ?>
<div class="container">
<section class="testimonials">
    <?php if( $testimonials_section_title ): ?>
    <h1 class="section-title"><?php echo $testimonials_section_title ?></h1>
    <?php endif; ?>

    <?php if( have_rows( 'testimonial' ) ) : ?>
    
        <div class="testimonial-group">

            <?php while ( have_rows( 'testimonial' ) ) : the_row(); 
                $author = get_sub_field('author');
                $title = get_sub_field('title');
                $quote = get_sub_field('quote');
            ?>

            <div class="testimonial">
                <p class="quote">
                    <span class="quotation-mark">&#10077;</span>
                    <?php echo $quote ?>
                    <span class="quotation-mark">&#10078;</span>
                </p>
                <h2 class="author"><?php echo $author ?></h2>
                <h3 class="title"><?php echo $title ?></h3>
            </div>

            <?php endwhile; ?>
        </div>
    <?php endif; ?> 
    <a href="<?php echo $buttons['home_page_button_url'] ?>" class="button"><?php echo $buttons['home_page_button_text'] ?></a>
</section>
</div>         
<?php endif; ?>
        
<?php get_footer(); ?>