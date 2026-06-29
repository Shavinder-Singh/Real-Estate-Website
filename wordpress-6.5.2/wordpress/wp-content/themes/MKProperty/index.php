<?php
// Template Name:Blog Page
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.scss">
</head>

<body>
    <div class="indexPage">
        <?php
        get_header();
        ?>
        <div class=" h-full py-[196px] w-full relative   top-[-91px]  flex flex-col justify-center items-center"
            style="background-image:url('<?php echo the_field("mainsectionimage", "57") ?>')">
            <div class=" relative  z-[2] px-[15px] text-center ">
                <p class="text-white text-[29px]">
                    <?php echo the_field("blog_page_content_main", "124") ?>

                </p>
                <p class=" text-whiteColor leading-[22px]"><?php echo the_field("blog_page_tagline", "124") ?>
                </p>
            </div>
            <div class="absolute top-0 w-full h-full bg-opacity-80 bg-gray-800">


            </div>
        </div>


        <!--  -->
        <div class="read_blog_section mb-[120px] md:max-w-[683px] 1md:max-w-[824px] m-auto lg:max-w-none lg:px-[54px]">
            <div class="read_blog_columns flex flex-col lg:flex-row lg:items-start gap-[25px] lg:gap-[39px]">
                <div
                    class="flex flex-col justify-center items-center gap-10 px-[16px] md:px-0 xl:pr-[0px] vs:px[0px] lg:w-[65%]">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );

                    $recent_posts_query = new WP_Query($args);

                    if ($recent_posts_query->have_posts()):
                        while ($recent_posts_query->have_posts()):

                            $recent_posts_query->the_post();
                            // Display property information
                    
                            ?>
                            <div>
                                <div class="w-full h-[226px] vs:h-[280px] md:h-[352px] lg:h-[322px] lg:w-[570px]">
                                    <img src="<?php
                                    $blog_post_image = get_field("blog_post_image");
                                    if ($blog_post_image) {
                                        echo $blog_post_image;
                                    } ?>" class="rounded-md w-full h-full  object-cover" />
                                </div>
                                <div class=" mt-[30px]  mb-[20px]">
                                    <h2 class="text-[23px] leading-[28px] font-poppinsBold text-ContentColor">
                                        <?php
                                        $title = get_the_title();
                                        if ($title) {
                                            echo $title;
                                        } else {
                                            echo 'Post Title';
                                        }
                                        ?>
                                    </h2>
                                </div>
                                <div class="mb-[28px] text-[14px] text-secondaryColor">
                                    <span class="flex items-center flex-wrap  leading-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1" width="12px" height="12px" viewBox="0 0 256 256" xml:space="preserve">

                                            <defs>
                                            </defs>
                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                <path
                                                    d="M 84.657 90 H 5.343 v -2 c 0 -21.867 17.79 -39.657 39.657 -39.657 c 21.867 0 39.657 17.79 39.657 39.657 V 90 z M 9.398 86 h 71.203 C 79.562 67.265 63.99 52.343 45 52.343 S 10.439 67.265 9.398 86 z"
                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path
                                                    d="M 45 43.971 c -12.123 0 -21.985 -9.863 -21.985 -21.986 C 23.015 9.863 32.877 0 45 0 c 12.123 0 21.985 9.863 21.985 21.985 C 66.985 34.108 57.123 43.971 45 43.971 z M 45 4 c -9.917 0 -17.985 8.068 -17.985 17.985 c 0 9.917 8.068 17.986 17.985 17.986 s 17.985 -8.068 17.985 -17.986 C 62.985 12.068 54.917 4 45 4 z"
                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            </g>
                                        </svg>&nbsp
                                        <?php the_author(); ?> &nbsp;|
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="calendar"
                                            class=" w-[18px]">
                                            <g fill="#134563">
                                                <path
                                                    d="M49.6 54H14.4C12 54 10 52 10 49.6V17.3c0-2.4 1.6-4.4 3.7-4.4h2.2v2.9h-2.2c-.3 0-.7.6-.7 1.5v32.3c0 .8.7 1.5 1.5 1.5h35.2c.8 0 1.5-.7 1.5-1.5V17.3c0-.9-.5-1.5-.7-1.5h-2.2v-2.9h2.2c2 0 3.7 2 3.7 4.4v32.3C54 52 52 54 49.6 54">
                                                </path>
                                                <path
                                                    d="M20.3 18.8c-.8 0-1.5-.7-1.5-1.5v-5.9c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5v5.9c-.1.8-.7 1.5-1.5 1.5m23.4 0c-.8 0-1.5-.7-1.5-1.5v-5.9c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5v5.9c0 .8-.7 1.5-1.5 1.5M24.7 12.9h14.6v3H24.7zM12.9 21.7h38.2v3H12.9zM45.2 27.6h2.9v2.9h-2.9zM39.3 27.6h3v2.9h-3zM33.5 27.6h2.9v2.9h-2.9zM27.6 27.6h2.9v2.9h-2.9zM21.7 27.6h3v2.9h-3zM45.2 33.5h2.9v2.9h-2.9zM39.3 33.5h3v2.9h-3zM33.5 33.5h2.9v2.9h-2.9zM27.6 33.5h2.9v2.9h-2.9zM21.7 33.5h3v2.9h-3zM15.9 33.5h2.9v2.9h-2.9zM45.2 39.3h2.9v3h-2.9zM39.3 39.3h3v3h-3zM33.5 39.3h2.9v3h-2.9zM27.6 39.3h2.9v3h-2.9zM21.7 39.3h3v3h-3zM15.9 39.3h2.9v3h-2.9zM39.3 45.2h3v2.9h-3zM33.5 45.2h2.9v2.9h-2.9zM27.6 45.2h2.9v2.9h-2.9zM21.7 45.2h3v2.9h-3zM15.9 45.2h2.9v2.9h-2.9z">
                                                </path>
                                            </g>
                                        </svg>
                                        <?php
                                        $date_time_picker = get_field("date_time_picker_");
                                        if ($date_time_picker) {
                                            echo $date_time_picker;
                                        } else {
                                            echo '/--';
                                        }
                                        ?> &nbsp;|&nbsp;
                                        <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                            viewBox="796 796 200 200" enable-background="new 796 796 200 200"
                                            xml:space="preserve">
                                            <path d="M896.001,812.517c-55.23,0-100.001,31.369-100.001,70.071c0,18.018,9.72,34.439,25.67,46.851
    c3.721,2.895,5.446,7.685,4.424,12.286l-6.872,30.926c-0.498,2.242,0.419,4.561,2.316,5.855c1.896,1.295,4.391,1.304,6.297,0.022
    l36.909-24.804c3.238-2.176,7.17-3.074,11.032-2.516c6.532,0.945,13.294,1.448,20.226,1.448c55.227,0,99.999-31.37,99.999-70.069
    C996,843.886,951.229,812.517,896.001,812.517z" />
                                        </svg>&nbsp;
                                        <span onclick="openPopup(<?php the_ID(); ?>)"><span
                                                class="mr-[5px]"><?php echo get_comments_number(); ?></span> comments</span>
                                </div>
                                <div class="mb-[28px]">
                                    <p class="text-[14px] tracking-wide leading-5 text-secondaryColor">
                                        <?php
                                        $blog_post_description = get_field("blog_post_description_first_para");
                                        if ($blog_post_description) {
                                            echo $blog_post_description;
                                        } else {
                                            echo 'In the absence of description, its a silent invitation, urging curiosity to take the lead and explore the unknown.';
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div
                                    class="w-full border flex items-center justify-center max-w-[197px] p-3 bg-primaryColor text-whiteColor transition duration-200 hover:opacity-[0.9]">
                                    <button class="uppercase">
                                        <a href="<?php echo the_permalink() ?>">Continue
                                            Reading
                                        </a>
                                    </button>
                                </div>
                            </div> <?php
                        endwhile;
                    else:
                        // No properties found
                    endif;
                    ?>

                </div>
                <!-- second -->
                <div
                    class="read_blog_col_second px-[16px] md:px-0 xl:px-[0px] vs:px[0px] flex flex-col justify-center items gap-[30px] lg:w-[35%]">
                    <form>
                        <div class="flex flex-col gap-3">
                            <label class="text-[20px]">Search</label>
                            <input type="search" name="search" id="search" class="border w-full p-2 text-[14px]"
                                placeholder="type to search...">
                        </div>
                    </form>
                    <div class="recent_posts_section">
                        <h2 class="text-[20px] mb-[10px]">Recent Posts</h2>

                        <?php

                        $search_query = isset($_GET['search']) ? $_GET['search'] : '';

                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            's' => $search_query, //search query
                        );

                        $recent_posts_query = new WP_Query($args);

                        if ($recent_posts_query->have_posts()):
                            while ($recent_posts_query->have_posts()):
                                $recent_posts_query->the_post();
                                ?>
                                <div class="flex flex-col">
                                    <a class="text-primaryColor block text-[14px] mb-[10px]" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>

                                    </a>
                                    <div class="flex items-center text-[14px] mb-[10px]">
                                        <p class="flex items-center text-lightblackColor">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                version="1.1" width="12px" height="12px" viewBox="0 0 256 256"
                                                xml:space="preserve">

                                                <defs>
                                                </defs>
                                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                    transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                    <path
                                                        d="M 84.657 90 H 5.343 v -2 c 0 -21.867 17.79 -39.657 39.657 -39.657 c 21.867 0 39.657 17.79 39.657 39.657 V 90 z M 9.398 86 h 71.203 C 79.562 67.265 63.99 52.343 45 52.343 S 10.439 67.265 9.398 86 z"
                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                        transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    <path
                                                        d="M 45 43.971 c -12.123 0 -21.985 -9.863 -21.985 -21.986 C 23.015 9.863 32.877 0 45 0 c 12.123 0 21.985 9.863 21.985 21.985 C 66.985 34.108 57.123 43.971 45 43.971 z M 45 4 c -9.917 0 -17.985 8.068 -17.985 17.985 c 0 9.917 8.068 17.986 17.985 17.986 s 17.985 -8.068 17.985 -17.986 C 62.985 12.068 54.917 4 45 4 z"
                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                        transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                </g>
                                            </svg>&nbsp;
                                            <?php echo get_the_author(); ?> &nbsp;
                                        </p>|
                                        <p class="flex items-center text-lightblackColor">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="calendar"
                                                class=" w-[18px]">
                                                <!-- SVG content -->
                                            </svg> <?php
                                            $date_time_picker = get_field("date_time_picker_");
                                            if ($date_time_picker) {
                                                echo $date_time_picker;
                                            } else {
                                                echo '/--';
                                            }
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); // Reset the post data query
                        else:
                            // No post found
                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <?php

        get_footer()
            ?>
    </div>


</body>

</html>