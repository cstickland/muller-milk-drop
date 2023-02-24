<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        const adminUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
        const postCodeFoundRedirectUrl = "<?php the_field('postcode_found_url', 'option'); ?>";
        const noPostCodeFoundRedirectUrl = "<?php the_field('postcode_not_found_url', 'option'); ?>";
    </script>
    <?php wp_head(); ?>
    
</head>
<body>
 
