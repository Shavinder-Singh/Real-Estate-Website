<?php

//Template Name:Single.php property
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php wp_head(); ?>
    
</head>
<style>
    html,
    body {}



    .swiper {
        width: 100%;
        height: 230px;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }

    @media (min-width:589px) {
        .swiper {
            width: 100%;
            height: 420px;
        }
    }

    @media (min-width:1024px) {
        .swiper {
            width: 100%;
            height: 470px;
            object-fit: contain;
        }
    }

    @media (min-width:1280px) {
        .swiper {
            width: 1100px;
            height: 470px;
            object-fit: contain;
        }
    }
</style>

<body>
    <div class="PropertiesDetail_Page">
        <?php
        get_header();
        ?>
        <div class=" h-full py-[196px] w-full relative   top-[-91px]  flex flex-col justify-center items-center"
            style="background-image:url('<?php echo the_field("mainsectionimage", "57") ?>')">
            <div class=" relative  z-[2] px-[15px] text-center ">
                <h2 class="text-whiteColor uppercase font-poppinsBold text-[36px] leading-[43px] mb-[15px]">Property
                    <span class=" text-primaryColor font-poppinsBold text-[36px]">Detail</span>
                </h2>
                <p class=" text-whiteColor leading-[22px]"><?php echo the_title() ?>/<?php
                   $housegaj = get_field("house_gaj");
                   if ($housegaj) {
                       echo $housegaj . 'Gaj';
                   } else {
                       $houselocation = get_field("location_state");
                       if ($houselocation) {
                           echo $houselocation;
                       }
                   }
                   ?>
                </p>
            </div>
            <div class="absolute top-0 w-full h-full bg-opacity-80 bg-gray-800">


            </div>
        </div>

        <!-- slider -->
        <div
            class="slider_conatiner p-[16px] vs:px-[17px] lg:px-[54px] md:max-w-[719px] 1md:max-w-[846px] lg:max-w-none m-auto rounded-lg">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <?php $tag = get_field("slider_image$i"); ?>
                        <?php if ($tag): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $tag ?>">
                            </div>
                        <?php endif; ?>
                    <?php endfor ?>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
        </div>
        <!--  -->
        <div
            class="read_blog_section mt-[150px] mb-[120px] md:max-w-[719px] 1md:max-w-[850px] m-auto lg:max-w-none lg:px-[54px]">
            <div class="read_blog_columns flex flex-col 1md:flex-row lg:items-start lg:justify-between gap-[25px]">
                <!-- first -->
                <div class="read_blog_columns flex flex-col lg:flex-row lg:items-start gap-[25px]">
                    <div
                        class="read_blog_col_first px-[17px] lg:px-0 xl:px-[0px] vs:px[0px] flex flex-col flex-wrap justify-center items gap-[30px]">
                        <div class="property_specs triggerDiv shadow-xl shadow-slate-700 border cursor-pointer p-[20px] px-[10px] text-[19px] text-primaryColor tracking-tight flex items-center gap-5 text-nowrap "
                            onclick="showDiv(0)">
                            <span>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[50px]"
                                    stroke="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path opacity="0.5"
                                            d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                            fill="#ed563b"></path>
                                        <path
                                            d="M12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75Z"
                                            fill="#ed563b"></path>
                                        <path
                                            d="M12 7C12.5523 7 13 7.44771 13 8C13 8.55229 12.5523 9 12 9C11.4477 9 11 8.55229 11 8C11 7.44771 11.4477 7 12 7Z"
                                            fill="#ed563b"></path>
                                    </g>
                                </svg>
                            </span>Properties Specs
                        </div>
                        <div class="property_description triggerDiv shadow-xl shadow-slate-700 border cursor-pointer p-[20px] px-[10px] text-[19px] text-ContentColor tracking-tight flex items-center gap-5 text-nowrap"
                            onclick="showDiv(1)">

                            <span>
                                <svg fill="#ed563b" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"
                                    class="w-[50px]" stroke="#ed563b">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M698.8 563.1l69.2-.1V460.8l-69.1-.2-7.7.2c-14.4-.1-18.4-12-18.4-26.5 0-7.2 2.9-13.7 7.6-18.4l48.8-48.8-72.4-72.4-48.9 48.9c-4.7 4.7-11.2 7.6-18.4 7.6-14.5 0-26.2-11.7-26.3-26.1v-69.2H460.8v68.9h-.1c-.1 14.5-11.8 26.2-26.3 26.2-7.1 0-13.5-2.9-18.2-7.4l-49.1-49.1-72.3 72.4 48.8 48.8s0 .1-.1.1c4.7 4.8 7.6 11.3 7.6 18.5 0 14.4-4 26.2-18.4 26.5H256v102.4l69-.2v.2c14.4.1 26.1 11.8 26.1 26.3 0 7.1-2.9 13.5-7.4 18.2l-49 49 72.4 72.4 48.8-48.8s.1 0 .1.1c4.7-4.6 11.2-7.6 18.4-7.6 14.4 0 26.2 4.1 26.4 18.5 0 0-.1 7.5 0 7.5v69.3l102.4-.2v-69.1h.1c.2-14.4 11.8-26 26.2-26 7.2 0 13.6 2.9 18.4 7.5h.1l48.8 48.8 72.4-72.4-48.8-48.8c-4.6-4.7-7.5-11.2-7.5-18.4-.1-14.6 11.5-26.3 25.9-26.4zM512 614c-56.5 0-102.3-45.8-102.3-102.3S455.5 409.3 512 409.3s102.3 45.8 102.3 102.4C614.4 568.2 568.5 614 512 614z">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                            Properties Description
                        </div>
                        <div class="property_contact shadow-xl  triggerDiv shadow-slate-700 border p-[20px] px-[10px] text-[19px] text-ContentColor cursor-pointer tracking-tight flex items-center gap-5 text-nowrap"
                            onclick="showDiv(2)">
                            <span>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#"
                                    class="w-[40px]">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z"
                                            fill="#ed563b"></path>
                                    </g>
                                </svg>
                            </span> Contact Details
                        </div>
                    </div>
                </div>


                <!-- second -->
                <!-- Property Specs Details -->
                <div
                    class="PropertySpecs_details hiddenDetail hidden toggle-div div1 px-[20px] md:px-0 xl:pr-[0px] vs:px[0px] lg:w-[65%]">
                    <div class="md:pl-[20px]">
                        <h1 class="font-poppinsBold text-[24px] mb-[10px] md:mb-[20px]">Property Spaces</h1>
                        <?php
                        $args = array(
                            'post_type' => 'property',
                            'post_status' => 'publish',
                            'posts_per_page' => 1,
                        );

                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <div class="grid md:grid-cols-2 md:items-center items-start md:justify-center gap-7 md:gap-6">
                                    <?php
                                    $fields = array(
                                        'house_type' => 'House Type',
                                        'status' => 'Status',
                                        'resale' => 'Resale',
                                        'price' => 'house_price',
                                        'new/resale' => 'Resale',
                                        'furnished' => 'furnishedstatus',
                                        'house_facing' => 'house facing',
                                        'location_state' => 'State',
                                        'location_locality' => 'Locality',
                                        'Gaj' => 'House Gaj',
                                        'story' => 'house story',
                                        'bhk' => 'BHK',
                                        'sqft' => 'sq/ft',
                                    );

                                    foreach ($fields as $field_key => $field_label):
                                        $field_value = get_field($field_key);
                                        if ($field_value != ""):
                                            ?>
                                            <div>
                                                <h2 class="mb-[9px]"><?php echo $field_label; ?></h2>
                                                <?php if ($field_label === 'BHK'): ?>
                                                    <p class="font-poppinsThin font-bold text-secondaryColor">
                                                        <?php echo $field_value; ?>&nbsp;BHK
                                                    </p>
                                                <?php else: ?>
                                                    <p class="font-robotoThin font-bold text-secondaryColor"><?php echo $field_value; ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                            <?php
                                        endif;
                                    endforeach;
                                    ?>
                                </div>
                                <?php
                            }
                        } else {
                            // No posts found
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

                <!-- Property description -->
                <div
                    class="Propertydescription hiddenDetail hidden toggle-div div2 px-[20px] md:px-0 xl:pr-[0px] vs:px[0px] lg:w-[65%] ">
                    <div class="md:pl-[20px]">
                        <h1 class="font-poppinsBold text-[24px] mb-[10px] md:mb-[20px]">Description</h1>
                        <?php
                        $args = array(
                            'post_type' => ('property'),
                            'post_status' => 'publish',
                            'posts_per_page' => 1,
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <div
                                    class=" grid md:grid-cols-1 font-robotoThin  md:items-center items-start md:justify-center gap-7 md:gap-6 ">
                                    <p>
                                        <?php
                                        $house_description = get_field("house_description");
                                        if ($house_description) {
                                            echo $house_description;
                                        } else {
                                            echo '/--';
                                        }
                                        ?>
                                    </p>
                                </div>
                                <?php
                            }
                        } else {
                            // No posts found
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <!-- contact_description -->
                <div
                    class="Property_contact_description hiddenDetail hidden toggle-div div3 px-[20px] md:px-0 xl:pr-[0px] vs:px[0px] lg:w-[65%] ">
                    <div class="md:pl-[20px]">
                        <h1 class="font-poppinsBold text-[24px] mb-[10px] md:mb-[20px]">Contact Details</h1>


                        <div
                            class=" grid md:grid-cols-2 md:items-center items-start md:justify-center gap-7 md:gap-6 mb-[40px]">
                            <div>
                                <h2 class="mb-[9px]">Name</h2>
                                <p class="font-robotoThin font-bold  text-secondaryColor contact_details">
                                    <?php echo the_field("owner_name", "551") ?>
                                </p>
                            </div>
                            <div>
                                <h2 class="mb-[9px]">Phone</h2>
                                <p class="font-robotoThin font-bold  text-secondaryColor contact_details">
                                    <?php echo the_field("owner_phone_number", "551") ?>
                                </p>
                            </div>
                            <div>
                                <h2 class="mb-[9px]">Email</h2>
                                <p class="font-robotoThin font-bold  text-secondaryColor contact_details">
                                    <?php echo the_field("owner_gmail", "551") ?>
                                </p>
                            </div>
                            <!-- <div class="redirectContactPage hidden">
                                        <h2 class="mb-[9px]">Login to See the Contact</h2>
                                        <p
                                            class=" flex w-[130px] items-center justify-center p-3 bg-primaryColor  text-whiteColor ">
                                            <a href="<?php echo the_field("contactpageredirectlink", 18) ?>">Connect Now</a>
                                        </p>
                                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        get_footer()
            ?>

    </div>
    <script>
        function showDiv(index) {
            var divs = document.querySelectorAll('.toggle-div ');
            divs.forEach(function (div, i) {
                if (i === index) {
                    div.classList.remove('hidden');
                    div.scrollIntoView({
                        behavior: "smooth"
                    })
                } else {
                    div.classList.add('hidden');
                }
            });
        }
        // Initially showing the first div
        document.querySelector('.toggle-div').classList.remove('hidden');
    </script>

    <!-- slider -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>



    <!-- <script>
        var userLoggedin = <?php echo is_user_logged_in() ? 'true' : 'false'; ?>;
        console.log(userLoggedin);

        if (!userLoggedin) {
            var contact_details = document.querySelectorAll(".contact_details");
            var redirectContactPage = document.querySelectorAll(".redirectContactPage");
            contact_details.forEach((contact) => {
                contact.textContent = 'XXXXXXX';

            });
            redirectContactPage.forEach((redirect) => {
                redirect.classList.remove("hidden")
                redirect.classList.add("block")
            });
        }


    </script> -->
</body>

</html>