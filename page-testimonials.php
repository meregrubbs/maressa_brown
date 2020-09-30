<?php get_header(); ?>

<?php $testimonial = get_field('testimonial'); 
$section_title = get_field('section_title');
$buttons = get_field('buttons');
if( $testimonial ): ?>
<div class="pink-borders mb-4">
<section class="testimonials container testimonials-page">
    <?php if( $section_title ): ?>
    <h1 class="section-title"><?php echo $section_title ?></h1>
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
</section>
</div>
    <?php if ($buttons) : ?>
    <div class="buttons">
        <a href="<?php echo $buttons['first_button_url'] ?>" class="button primary-btn"><?php echo $buttons['first_button_text'] ?></a>
        <a href="<?php echo $buttons['second_button_url'] ?>" class="button secondary-btn"><?php echo $buttons['second_button_text'] ?></a>
    </div>   
    <?php endif; ?>          
<?php endif; ?>

<?php get_footer(); ?>