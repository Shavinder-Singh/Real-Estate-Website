<?php
// Start the loop
if (have_posts()):
    while (have_posts()):
        the_post();

        // Check if the current post is a check
        if (get_post_type() === 'property') {
            // Include template for check details
            get_template_part('templates/details', 'check');
        }
        // Check if the current post is a blog post
        elseif (get_post_type() === 'post') {
            // Include template for blog post details
            get_template_part('templates/details', 'blog');
        }
        // Default behavior
        else {
            // Include default template
            get_template_part('templates/details', 'default');
        }

    endwhile;
endif;
?>