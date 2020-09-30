<?php get_header(); ?>


<?php $about_page_title = get_field('about_page_title'); 
$bio = get_field('bio');
$buttons = get_field('buttons');
$photo = get_field('photo');
$background_photo = get_field('background_photo');
?>
<?php if ( $bio ) : ?>

    <div class="hero about-page">
        <div class="hero-content-container">
            <div class="hero-img"></div>
            
            <div class="hero-content">
                <h1><?php echo $about_page_title ?></h1>
                <p><?php echo $bio ?></p>
            </div>
        </div> 
    </div>
    <style>
    .hero {
    background-image: url('<?php echo $background_photo ?>');
    }
    .hero-img {
    background-image: url('<?php echo $photo ?>');
    }
</style>

    <?php if ($buttons) : ?>
    <div class="buttons">
        <a href="<?php echo $buttons['button_1_url'] ?>" class="button primary-btn"><?php echo $buttons['button_1_text'] ?></a>
        <a href="<?php echo $buttons['button_2_url'] ?>" class="button secondary-btn"><?php echo $buttons['button_2_text'] ?></a>
    </div>
    <?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>