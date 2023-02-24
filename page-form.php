<?php /* Template Name: Form */ ?>

<?php get_header(); ?>
    <header class="logo-link-container">
    <a href="/"><img src="<?php echo get_template_directory_uri() . '/assets/logos/muller_milk_drop_logo.svg'; ?>" /></a>
    </header>

    <section class="form-section">
        <h1 class="form-heading"><?php the_field('form_heading'); ?></h1>
        <div class="form-message"><?php the_field('form_text'); ?></div>
        <?php if(get_field('postcode_found_success_page') == true): ?>
            <form class="contact-form" id="contact-form" name="contact-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
        <?php endif; ?>
        <?php if(get_field('postcode_found_success_page') == false): ?>
            <form class="contact-form" id="contact-form" name="contact-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
        <?php endif; ?>    
                <input type="hidden" name="action" value="contact"></input>
                <input type="hidden" name="submitted" value="contact"></input>
                
                <input class='form-input' type="text" placeholder="Enter Your Full Name"  name="first-name" pattern="[a-zA-Z0-9 ]+" required />
                <input class='form-input' type="email" name="email" placeholder="Enter Your Email" class="form-input" />
                <input type="tel" name="phone" pattern="[0-9]{11}" placeholder="Telephone Number" class="form-input" />
                <input class='form-input span-full' type="text" placeholder="Postcode"  name="postcode" pattern="[a-zA-Z0-9 ]+" required />
            <?php if(get_field('postcode_found_success_page') == true): ?>
                <textarea rows="5" class="form-input span-full" name="message" placeholder='Message'></textarea>
            <?php endif; ?>
                <div id="response"></div>
                <button type="submit" id="wp-submit" class="btn" value="Send" >Submit</button>
            </form>
    </section>

    <style>
        .logo-link-container {
            max-width: 120rem;
            margin: 0 auto;
            padding: 1.375rem 1.875rem;
            padding-top: 1.375rem;

            padding-left: 1.875rem;
            padding-left: clamp(1.875rem, -2.267rem + 6.681vw, 5.75rem);
        }
        
        .logo-link-container img {
            width: 3.125rem;
            width: clamp(3.125rem, 1.042rem + 4.34vw, 6.25rem);
        }
        .form-section {
            max-width: 810px;
            width: 100%;
            margin: 0 auto;
            padding: 1.875rem 1.25rem;
            padding-bottom: 1.875rem;
            padding-bottom: clamp(1.875rem, -2.802rem + 7.543vw, 6.25rem);

            padding-top: 1.875rem;
            padding-top: clamp(1.875rem, -2.802rem + 7.543vw, 6.25rem);
        }
        .form-heading,
        .form-message {
            text-align: center;
            max-width: 644px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-message {
            margin-bottom: 1.875rem;
            margin-bottom: clamp(1.875rem, -2.802rem + 7.543vw, 6.25rem);

            margin-top: 1.875rem;
            margin-top: clamp(1.875rem, -0.129rem + 3.233vw, 3.75rem);

            font-size: 1rem;
            font-size: clamp(1rem, 0.466rem + 0.862vw, 1.5rem);
        }
        .contact-form {
            display: flex;
            flex-direction: column;
            width: 100%;
            gap: 1.25rem;
        }

        .contact-form input,
        .contact-form textarea {
            border-radius: 5px;
            padding: 0.875rem 1.25rem;

            font-size: 1rem;
            font-size: clamp(1rem, 0.866rem + 0.216vw, 1.125rem);

            padding-top: clamp(0.875rem, 0.207rem + 1.078vw, 1.5rem);
            padding-bottom: clamp(0.875rem, 0.207rem + 1.078vw, 1.5rem);
            padding-left: clamp(1.25rem, 0.181rem + 1.724vw, 2.25rem);
            padding-right: clamp(1.25rem, 0.181rem + 1.724vw, 2.25rem);
            color: #3C3C3C;
        }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder {
            color: #3C3C3C;
        }
        .contact-form .btn {
            width: min-content;
            border-radius: 5px;
        }
        .contact-form textarea {
            resize: none;
        }

        textarea.form-input {
            margin-bottom: 0.875rem;
        }

        @media only screen and( min-width: 62rem) {
            .logo-link-container {
                padding-left: 5.75rem;
                padding-left: clamp(1.875rem, -2.267rem + 6.681vw, 5.75rem);
            }

            .logo-link-container img {
                width: 6.25rem;
                width: clamp(3.125rem, 1.042rem + 4.34vw, 6.25rem);
            }

            .form-section {
                margin: 0 auto;
                padding: 1.875rem 1.25rem;
                padding-bottom: 6.25rem;
                padding-bottom: clamp(1.875rem, -2.802rem + 7.543vw, 6.25rem);

                padding-top: 6.25rem;
                padding-top: clamp(1.875rem, -2.802rem + 7.543vw, 6.25rem);
            }

            .contact-form input,
            .contact-form textarea {
                font-size: 1.25rem;
                font-size: clamp(1rem, 0.866rem + 0.216vw, 1.125rem);

                padding: 1.5rem 2.25rem;
                padding-top: clamp(0.875rem, 0.207rem + 1.078vw, 1.5rem);
                padding-bottom: clamp(0.875rem, 0.207rem + 1.078vw, 1.5rem);
                padding-left: clamp(1.25rem, 0.181rem + 1.724vw, 2.25rem);
                padding-right: clamp(1.25rem, 0.181rem + 1.724vw, 2.25rem);
            }

            .form-message {
                margin-bottom: 6.25rem;
                margin-bottom: clamp(1.875rem, -2.802rem + 7.543vw, 6.25rem);
                
                margin-top: 2.5rem;
                margin-top: clamp(1.875rem, -0.129rem + 3.233vw, 3.75rem);

                font-size: 1.5rem;
                font-size: clamp(1rem, 0.466rem + 0.862vw, 1.5rem);
            }
        }
    </style>
<?php get_footer() ?>