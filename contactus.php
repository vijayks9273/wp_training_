<?php
/*
Template Name: contactus
Template Post Type: post, page, event
*/
// Page code here... 
get_header(); ?>
<style>
    .input {
        width: 40%;
        margin-top: 10px;
    }

    .gap {
        margin-top: 50px;
    }
</style>

<div class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    if (!post_password_required()):
    ?>

        <form id="contact-form" action="<?php echo esc_url(get_permalink()); ?>" method="post">

            <input type="hidden" name="contact_form">

            <div class="form-section">
                <label for="full-name"><?php echo esc_html('Full Name', 'products'); ?></label>
                <input type="text" id="full-name" name="full_name" class="input" style="height:40px;">
            </div>
            <div class="form-section">
                <label for="email"><?php echo esc_html('Email', 'products'); ?></label>
                <input type="text" id="email" name="email" class="input" style="height:40px; ">
            </div>
            <div class="form-section">
                <label for="message"><?php echo esc_html('Message', 'products'); ?></label>
                <textarea id="message" name="message" class="input" style="height:100px; "></textarea>
            </div>
            <div class="form-section">
                <input type="submit" id="contact-form-submit" value="<?php echo esc_attr('Submit', 'products'); ?>">
            </div>
</div>
</form>
<?php
    endif;
endwhile;
endif;
?>
<div class=gap></div>
<?php
the_content();
get_sidebar();
get_footer(); ?>