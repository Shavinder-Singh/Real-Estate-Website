<?php
//  Template Name: testimonials
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
</head>

<body>
    <div class="testimonials_Page">
        <?php
        get_header();
        ?>
        <div class=" h-full py-[196px] w-full relative   top-[-91px]  flex flex-col justify-center items-center"
            style="background-image:url('<?php echo the_field("mainsectionimage", "57") ?>')">
            <div class=" relative  z-[2] px-[15px] text-center ">
                <h2 class="text-whiteColor uppercase font-poppinsBold text-[36px] leading-[43px] mb-[15px]">
                    <span
                        class=" text-primaryColor font-poppinsBold text-[36px]"><?php echo the_field("testimonial_page_content", "120") ?></span>
                </h2>
                <p class=" text-whiteColor leading-[22px] lg:text-[17px]">
                    <?php echo the_field("testimonial_page_main_tagline", "120") ?>
                </p>
            </div>
            <div class="absolute top-0 w-full h-full bg-opacity-80 bg-gray-800">


            </div>
        </div>
        <div class="testimonials_section mb-[80px]">
            <div
                class="testimonials grid grid-cols-1 lg:grid-cols-2 lg:px-[54px] px-[16px] vs:px-[17px] md:px-[0px] gap-6 vs:gap-10 md:max-w-[686px] lg:max-w-none 1md:max-w-[821px] md:m-auto mb-[50px]">
                <div class="testimonial inline-block ">
                    <div class="testimonial_image float-left">
                        <img src="<?php echo the_field("testimonialimage1", "18") ?>"
                            class="mr-[22px] xl:mr-[32px] w-[80px] h-[80px] vs:h-[90px] lg:h-[120px] vs:w-[90px] md:w-[120px] xl:w-[140px] rounded-[4px]">
                    </div>
                    <div class="right_content_testimonial">
                        <!-- <h2 class="font-poppinsMedium trakcing-wide text-[19px] mb-[6px] text-ContentColor">John Doe -->
                        <!-- </h2> -->
                        <p class="text-[14px] leading-[23px] text-secondaryColor font-robotoThin font-bold">
                            <?php echo the_field("client_review1", "120") ?>
                        </p>
                    </div>
                </div>

                <div class="testimonial inline-block  ">
                    <div class="testimonial_image float-left">
                        <img src="<?php echo the_field("testimonialimage2", "18") ?>"
                            class=" xl:mr-[32px] mr-[22px] w-[80px] h-[80px] vs:h-[90px] lg:h-[120px] vs:w-[90px] md:w-[120px] xl:w-[140px] rounded-[4px]">
                    </div>
                    <div>
                        <!-- <h2 class="font-poppinsMedium trakcing-wide text-[19px] mb-[6px] text-ContentColor">John Doe
                            </h2> -->
                        <p class="text-[14px] leading-[23px] text-secondaryColor font-robotoThin font-bold">
                            <?php echo the_field("client_review2", "120") ?>
                        </p>
                    </div>
                </div>
                <div class="testimonial inline-block  ">
                    <div class="testimonial_image float-left">
                        <img src="<?php echo the_field("testimonialimage3", "18") ?>"
                            class="xl:mr-[32px] mr-[22px] w-[80px] h-[80px] vs:h-[90px] lg:h-[120px] vs:w-[90px] md:w-[120px] xl:w-[140px] rounded-[4px]">
                    </div>
                    <div>
                        <!-- <h2 class="font-poppinsMedium trakcing-wide text-[19px] mb-[6px] text-ContentColor">John Doe
                            </h2> -->
                        <p class="text-[14px] leading-[23px] text-secondaryColor font-robotoThin font-bold">
                            <?php echo the_field("client_review3", "120") ?>
                        </p>
                    </div>
                </div>
                <div class="testimonial inline-block  ">
                    <div class="testimonial_image float-left">
                        <img src="<?php echo the_field("testimonialimage4", "18") ?>"
                            class="xl:mr-[32px] mr-[22px] w-[80px] h-[80px] vs:h-[90px] lg:h-[120px] vs:w-[90px] md:w-[120px] xl:w-[140px] rounded-[4px]">
                    </div>
                    <div>
                        <!-- <h2 class="font-poppinsMedium trakcing-wide text-[19px] mb-[6px] text-ContentColor">John Doe
                            </h2> -->
                        <p class="text-[14px] leading-[23px] text-secondaryColor font-robotoThin font-bold">
                            <?php echo the_field("client_review3", "120") ?>
                        </p>
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