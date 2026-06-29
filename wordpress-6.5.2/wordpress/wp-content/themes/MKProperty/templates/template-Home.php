<?php
//  Template Name: Home
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/header/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <?php wp_head(); ?>

</head>

<body>
<?php
        get_header();
        ?>
    <div class="homepage">
        
        <div class="hompage_main relative  h-[100vh] vs:h-[100vh] lg:h-[100%] border">
            <div class="video_container" class="  h-[100vh] vs:h-[100vh] lg:h-[100%]">
                <video autoplay muted width="100%" class="  h-[100vh] vs:h-[100vh] lg:h-[100%]">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/mainvideo.mp4" type="video/mp4">
                </video>
            </div>
            <div
                class="homepage_main_content absolute top-[94px] vs:top-[134px] md:top-[146px] xl:top-[135px]  md:p-[18px] lg:pt-[20px] flex flex-col justify-center items-center w-full">
                <div class="homepage_main_contents z-[2] text-center">
                    <p
                        class="hidden sm:block pt-[12px] px-[10px] text-center text-whiteColor uppercase tracking-wider pb-[25px] xl:pb-[30px]">
                        <?php echo the_field("homepage_main_content_short_line", "18") ?>
                    </p>
                    <h1
                        class="text-[60px] font-poppinsBold lg:text-[85px] text-center text-whiteColor  pl-6 pr-10 leading-[70px]  lg:leading-[90px] xl:leading-[100px] ">
                        FIND THE PERFECT
                        <strong class="font-poppinsBold text-primaryColor">REAL</strong> <strong
                            class="font-poppinsBold text-primaryColor">ESTATE</strong>
                    </h1>
                </div>
                <div
                    class="homepage_main_button  bg-primaryColor z-[2] w-[135px] p-2 py-3 mt-[26px] shadow-2xl flex justify-center items-center  transition duration-200 hover:opacity-[0.9]">
                    <button class="font-thin text-whiteColorColor text-[14px] text-whiteColor "><a
                            href="<?php echo the_field("contactpageredirectlink", 18) ?>">CONTACT US</a></button>
                </div>
            </div>
            <div class="overlay_homepage_main top-0 h-[100%] z-[1] ">
            </div>
        </div>
        <!-- Featured Projects -->
        <div
            class="featured_properties_section pb-[80px] pl-[17px] pr-[16px] m-auto md:max-w-[694px] lg:max-w-none 1md:max-w-[824px] flex flex-col justify-center items-center w-full md:px-[4px]">
            <div class=" pt-[120px] mb-[80px] flex flex-col justify-center items-center">
                <div class="featured_Projects_title ">
                    <h1 class="text-[29px] leading-8 text-center font-poppinsBold text-ContentColor">FEATURED <span
                            class=" text-primaryColor font-poppinsBold">PROPERTIES</span></h1>
                </div>
                <div class="my-5">
                    <img src="<?php echo the_field("wavy_lines", "18") ?>">
                </div>
                <div>
                    <p
                        class="text-[14px] font-robotoThin font-bold text-center text-secondaryColor leading-[23px] md:px-10 lg:text-[17px] lg:max-w-[740px] ">
                        <?php echo the_field("homepagefeaturedprojecttagline", "18") ?>
                    </p>
                </div>
            </div>
            <div class="featured_projects_container lg:px-[55px] w-full">
                <div
                    class="featured_projects grid grid-cols-1 justify-center items-center gap-[30px] mb-[34px] md:max-w-[700px] 1md:max-w-[824px]  md:grid-cols-2 md:justify-between md:mx-auto md:items-start xl:grid-cols-3 lg:max-w-full">
                    <?php
                    $args = array(
                        'post_type' => 'property',
                        'posts_per_page' => 3,
                    );

                    $property_query = new WP_Query($args);

                    if ($property_query->have_posts()):
                        while ($property_query->have_posts()):
                            $property_query->the_post();
                            ?>

                            <div class="border p-[15px] rounded-md ">
                                <div class="h-[223px] vs:h-[290px]">
                                    <img src=" <?php
                                    $house_image1 = get_field("slider_image1");
                                    if ($house_image1) {
                                        echo $house_image1;
                                    }

                                    ?>" alt="house" class="rounded-md h-full w-full object-cover">
                                </div>
                                <div class="flex  items-center gap-2 mt-[25px]  mb-[10px]">
                                    <p class="text-[13px]  text-primaryColor ">
                                        <sup>₹</sup><?php
                                        $houseprice = get_field("houseprice");
                                        if ($houseprice) {
                                            echo $houseprice;
                                        } else {
                                            echo '/--';
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div>
                                    <p
                                        class="text-[19px] leading-[23px] tracking-wide mb-[18px]  font-semibold text-ContentColor">
                                        <?php
                                        $houseType = get_field("house_type");
                                        if ($houseType) {
                                            echo $houseType;
                                        } else {
                                            echo '/--';
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="mb-[20px]">
                                    <p class="text-[13px]  flex tracking-wide text-secondaryColor">
                                        <?php
                                        $houseprice = get_field("houseprice");
                                        if ($houseprice) {
                                            echo ' ₹';
                                            echo $houseprice;
                                        } else {
                                            echo '/--';
                                        }
                                        ?> &nbsp;/ <?php
                                         $status = get_field("status");
                                         if ($status) {
                                             echo $status;
                                         } else {
                                             echo '/--';
                                         }
                                         ?>
                                        &nbsp;/
                                        <?php
                                        $bathrooms = get_field("bathrooms");
                                        if ($bathrooms) {
                                            echo $bathrooms;
                                        } else {
                                            echo '/--';
                                        }
                                        ?> bathrooms &nbsp;/
                                        &nbsp;
                                        <?php
                                        $years_old = get_field("years_old");
                                        if ($years_old) {
                                            echo $years_old;
                                        } else {
                                            echo '/--';
                                        }
                                        ?> Years Old
                                    </p>
                                </div>
                                <div class="text-ContentColor">
                                    <a href="<?php echo the_permalink(); ?>">
                                        + View More
                                    </a>
                                </div>


                            </div>

                            <?php
                        endwhile;
                        wp_reset_postdata(); // Reset post data after custom query
                    else:
                        // No posts found
                    endif;

                    ?>
                </div>

                <div class="w-full flex justify-center items-center">
                    <button
                        class="w-[180px]  bg-primaryColor text-whiteColor mx-[auto] transition duration-200 hover:opacity-[0.9]"><a
                            href="<?php echo the_field("propertiespagelink", 18) ?>"
                            class="font-robotoThin font-bold text-[14px] tracking-wide p-[12px] inline-block">VIEW
                            PROPERTIES</a>
                    </button>
                </div>
            </div>
        </div>
        <!-- about us in homepage -->
        <div class="ReadAboutUS relative  py-[80px] "
            style="background-image: url('<?php echo the_field("hompagetreeimage", "18"); ?>')">

            <div
                class="readAbout_content_container px-[16px] h-full z-[2] relative flex flex-col items-center justify-center gap-[50px] text-whiteColor ">
                <div class=" flex justify-center items-center flex-col gap-[19px]">
                    <h1 class="text-[28px] lg:text-[32px] font-poppinsBold">READ <span
                            class="text-primaryColor font-poppinsBold">ABOUT
                            US</span></h1>
                    <img src="<?php echo the_field("wavy_lines", "18") ?>">

                </div>
                <div>
                    <p
                        class="text-center text-whiteColor text-[14px] lg:text-[16px] lg:px-[260px] leading-[22px] font-robotoThin font-bold tracking-wider ">
                        <?php echo the_field("homepage_about_us_para2", "18") ?>

                    </p>
                </div>
                <div class=" flex flex-col items-center justify-center gap-[20px] lg:px-[86px] leading-[22px]  ">
                    <p
                        class="text-center text-whiteColor text-[14px] lg:text-[16px] font-robotoThin font-bold tracking-wider ">
                        <?php echo the_field("homepage_about_us_para1", "18") ?>

                    </p>
                    <p
                        class="text-center text-whiteColor text-[14px] lg:text-[16px] leading-[22px]  font-robotoThin font-bold tracking-wider ">
                        <?php echo the_field("homepage_about_us_para3", "18") ?>
                    </p>
                </div>
            </div>
            <div class="overlay_banner">
            </div>
        </div>



        <!-- Read Blog -->
        <div
            class="read_blog_section  mt-[150px] mb-[120px] m-auto lg:max-w-none lg:px-[55px] pl-[17px] pr-[16px] md:px-0 md:max-w-[684px] 1md:max-w-[824px]">
            <div class="read_blog_title flex flex-col justify-center items-center gap-3 px-[15px] md:px-0 mb-[80px]">
                <h1 class="text-[32px] text-ContentColor font-poppinsBold">READ OUR <span
                        class="text-primaryColor font-poppinsBold">BLOG</span></h1>
                <img src="<?php echo the_field("wavy_lines", "18") ?>" class="mb-[10px]">
                <p
                    class="text-[14px] text-center text-secondaryColor text leading-[22px] lg:text-[17px] lg:max-w-[740px]  font-robotoThin font-bold tracking-wider">
                    <?php echo the_field("homepageblogtagline") ?>
                </p>
            </div>
            <div class="read_blog_columns flex flex-col lg:justify-between lg:flex-row lg:items-start gap-[25px]">
                <div class="flex flex-col xl:px-[0px] vs:px[0px] gap-4">
                    <div class="read_blog_col_first flex flex-col justify-center items gap-[30px] ">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                        );

                        $property_query = new WP_Query($args);

                        if ($property_query->have_posts()):
                            while ($property_query->have_posts()):
                                $property_query->the_post();
                                ?>
                                <div class="post-button triggerBtn_<?php echo get_the_ID(); ?> rounded-md  shadow-xl shadow-slate-700 border p-[30px] text-[19px]  text-ContentColor text-wrap  lg:min-w-[250px] xl:min-w-[330px] font-poppinsBold tracking-wider"
                                    data-post-id="<?php echo get_the_ID(); ?>">
                                    <?php
                                    $title = get_the_title();
                                    if ($title) {
                                        echo $title;
                                    } else {
                                        echo 'Post Title';
                                    }
                                    ?>
                                </div>

                            <?php endwhile;
                        else:
                            _e('Sorry, no posts were found.', 'textdomain');
                        endif; ?>
                    </div>
                    <div
                        class="w-full border flex items-center justify-center bg-primaryColor rounded-md text-whiteColor  transition duration-1000 hover:opacity-[0.9]">
                        <a href="<?php echo the_field("blogpageredirectlink", "18") ?>"
                            class="font-poppinsBold tracking-wider text-[16px] p-4 w-full  text-center inline-block">Read
                            More</a>
                    </div>
                </div>

                <?php
                $property_query->rewind_posts();

                if ($property_query->have_posts()):
                    while ($property_query->have_posts()):
                        $property_query->the_post();
                        ?>
                        <div class="post-content read_blog_col_second xl:pr-[0px] vs:px[0px] lg:max-w-[760px]"
                            id="post-<?php echo get_the_ID(); ?>" style="display: none;">
                            <div class="h-[40vh] vs:h-[60vh] lg:h-[400px]">
                                <img src=<?php
                                $blog_post_image = get_field("blog_post_image");
                                if ($blog_post_image) {
                                    echo $blog_post_image;
                                } ?> class="rounded-md w-full h-full object-cover" />
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
                                <span class="flex items-center flex-wrap  leading-4">
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
                                    <?php the_author(); ?> |
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="calendar" class=" w-[18px]">
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
                                        viewBox="796 796 200 200" enable-background="new 796 796 200 200" xml:space="preserve">
                                        <path d="M896.001,812.517c-55.23,0-100.001,31.369-100.001,70.071c0,18.018,9.72,34.439,25.67,46.851
    c3.721,2.895,5.446,7.685,4.424,12.286l-6.872,30.926c-0.498,2.242,0.419,4.561,2.316,5.855c1.896,1.295,4.391,1.304,6.297,0.022
    l36.909-24.804c3.238-2.176,7.17-3.074,11.032-2.516c6.532,0.945,13.294,1.448,20.226,1.448c55.227,0,99.999-31.37,99.999-70.069
    C996,843.886,951.229,812.517,896.001,812.517z" />
                                    </svg>&nbsp;
                                    <span><?php echo get_comments_number(); ?></span> comments
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
                        </div>

                    <?php endwhile;
                else:
                    _e('Sorry, no posts were found.', 'textdomain');
                endif; ?>

            </div>
        </div>
        <!-- banner homepage -->
        <div class="banner_section relative py-[80px] xl:py-[100px] "
            style="background-image: url('<?php echo the_field("homepagebannerimage", "18"); ?>')">

            <div
                class="banner_content text-whiteColor flex items-center justify-center flex-col gap-6 px-[15px] z-[2] relative">
                <h1 class=" text-[36px] text-center font-poppinsBold leading-9">SEND US A <span
                        class=" text-primaryColor font-poppinsBold">MESSAGE</span></h1>
                <p class="text-center text-whiteColor leading-[23px] lg:text-[17px] lg:px-[56px]">
                    <?php echo the_field("home_page_send_us_message_tagline", "18") ?>
                </p>
                <div
                    class="  bg-primaryColor z-[2] w-[135px] p-2 py-3 mt-[26px] shadow-2xl flex justify-center items-center  transition duration-200 hover:opacity-[0.9]">
                    <button class="font-thin text-whiteColorColor text-[14px] text-whiteColor "><a
                            href="<?php echo the_field("contactpageredirectlink", 18) ?>">CONTACT US</a></button>
                </div>
            </div>
            <div class="overlay_banner">
            </div>
        </div>
        <!-- testimonials -->
        <div class="testimonials_section mb-[80px] md:max-w-[688px] lg:max-w-none md:m-auto 1md:max-w-[824px]">
            <div class="testimonials_title flex justify-center items-center flex-col px-[15px] mt-[120px] mb-[50px]">
                <h1 class="text-[32px] mb-[15px] font-poppinsBold text-center text-ContentColor leading-[37px]">READ OUR
                    <span class="font-poppinsBold text-primaryColor">TESTIMONIALS</span>
                </h1>
                <img src="<?php echo the_field("wavy_lines", "18") ?>" class="mb-[15px]">
                <p class="text-[14px] text-center text-secondaryColor font-robotoThin font-bold tracking-wider ">
                    <?php echo the_field("homepagetestimonialstagline", "18") ?>
                </p>
            </div>
            <div
                class="testimonials grid grid-cols-1 lg:grid-cols-2 lg:px-[54px] px-[17px] md:px-[0px] gap-6 vs:gap-10  mb-[66px]">
                <div class="testimonial inline-block ">
                    <div class="testimonial_image float-left">
                        <img src="<?php echo the_field("testimonialimage1", "18") ?>"
                            class="mr-[22px] w-[80px] h-[80px] vs:h-[90px] lg:h-[120px] vs:w-[90px] md:w-[120px] xl:w-[140px] rounded-[4px]">
                    </div>
                    <div class="right_content_testimonial">
                        <h2 class="font-poppinsMedium tracking-wide text-[19px] mb-[6px] text-ContentColor">sheflie
                        </h2>
                        <p
                            class="text-[14px] leading-[23px] text-secondaryColor font-robotoThin font-bold tracking-wider">
                            <?php echo the_field("client_review1", "120") ?>
                        </p>
                    </div>
                </div>
                <div class="testimonial inline-block  ">
                    <div class="testimonial_image float-left">
                        <img src="<?php echo the_field("testimonialimage2", "18") ?>"
                            class="mr-[22px] w-[80px] h-[80px] vs:h-[90px] lg:h-[120px] vs:w-[90px] md:w-[120px] xl:w-[140px] rounded-[4px]">
                    </div>
                    <div>
                        <h2 class="font-poppinsMedium tracking-wide text-[19px] mb-[6px] text-ContentColor">John Doe
                        </h2>
                        <p
                            class="text-[14px] leading-[23px] text-secondaryColor font-robotoThin font-bold tracking-wider">
                            <?php echo the_field("client_review2", "120") ?>
                        </p>
                    </div>
                </div>
                <div class="testimonial inline-block  ">
                    <div class="testimonial_image float-left">
                        <img src="<?php echo the_field("testimonialimage3", "18") ?>"
                            class="mr-[22px] w-[80px] h-[80px] vs:h-[90px] lg:h-[120px] vs:w-[90px] md:w-[120px] xl:w-[140px] rounded-[4px]">
                    </div>
                    <div>
                        <h2 class="font-poppinsMedium tracking-wide text-[19px] mb-[6px] text-ContentColor">william
                        </h2>

                        <p
                            class="text-[14px] leading-[23px] text-secondaryColor font-robotoThin font-bold tracking-wider">
                            <?php echo the_field("client_review3", "120") ?>
                        </p>
                    </div>
                </div>
                <div class="testimonial inline-block  ">
                    <div class="testimonial_image float-left">
                        <img src="<?php echo the_field("testimonialimage4", "18") ?>"
                            class="mr-[22px] w-[80px] h-[80px] vs:h-[90px] lg:h-[120px] vs:w-[90px] md:w-[120px] xl:w-[140px] rounded-[4px]">
                    </div>
                    <div>
                        <h2 class=" tracking-wide text-[18px] mb-[6px] text-ContentColor  font-poppinsMedium">tom
                        </h2>

                        <p class="text-[14px] leading-[23px] text-secondaryColor">
                            <?php echo the_field("client_review3", "120") ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class=" w-full flex justify-center items-center">
                <button class="bg-primaryColor p-3 text-whiteColor transition duration-1000 hover:opacity-[0.9]"><a
                        href="<?php echo the_field("blogpageredirectlink", "18") ?>">READ MORE</a></button>
            </div>
        </div>
        <?php echo get_footer() ?>

    </div>

</body>
<script>
    var postbuttons = document.querySelectorAll(" .post-button");
    var postContent = document.querySelectorAll(".post-content");
    for (let i = 1; i < postContent.length; i++) { postContent[i].style.display = "none"; }
    postContent[0].style.display = "block";
    postbuttons.forEach(function (button, index) {
        button.addEventListener("click", () => {
            postContent.forEach(function (content) {
                content.style.display = "none";
            })
            postContent[index].style.display = "block";
            postContent[index].scrollIntoView({
                behavior: "smooth"
            })
        })
    })
</script>

</html>