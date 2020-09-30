<?php get_header(); ?>

<?php 
$section_title = get_field( 'section_title' ); 
$information = get_field( 'information' );
$contact_form = get_field( 'contact_form' );
?>

    <div class="container contact-page">
            <h1 class="section-title"><?php echo $section_title ?></h1>

            <p><?php echo $information ?></p>

            <?php echo $contact_form ?>
        
    </div> <!-- container -->


<?php get_footer(); ?>