<?php
// Template Name:Terms & Conditions
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="terms_Page">
        <?php
        get_header();
        ?>
        <div class=" h-full py-[196px] w-full relative top-[-91px] flex flex-col justify-center items-center"
            style="background-image:url('<?php echo the_field("mainsectionimage", "57") ?>')">
            <div class=" relative  z-[2] px-[15px] text-center ">
                <?php echo the_field("main_section_terms_conditions", "122") ?>
                <p class=" text-whiteColor leading-[22px]"><?php echo the_field("terms_condition_tagline", "122") ?>
                </p>
            </div>
            <div class="absolute top-0 w-full h-full bg-opacity-80 bg-gray-800">


            </div>
        </div>
        <div
            class="terms_conditions px-[16px] vs:px-[17px] md:max-w-[686px] 1md:max-w-[824px] m-auto md:px-0 lg:max-w-none lg:px-[55px]">
            <div class="mb-[65px]">
                <h1 class="text-[23px] font-bold text-ContentColor mb-[20px]">
                    <?php echo the_field("terms_condtions_heading_1", "122") ?></h1>
                <p class=" text-secondaryColor text-[14px]">
                    <?php echo the_field("terms_condtions_description_1", "122") ?></p>
            </div>
            <div class="mb-[65px]">
                <h1 class="text-[23px] font-bold text-ContentColor mb-[20px]">
                    <?php echo the_field("terms_condtions_heading_2", "122") ?></h1>
                <p class=" text-secondaryColor text-[14px]">
                    <?php echo the_field("terms_condtions_description_2", "122") ?></p>
            </div>
            <div class="mb-[65px]">
                <h1 class="text-[23px] font-bold text-ContentColor mb-[20px]">
                    <?php echo the_field("terms_condtions_heading_3", "122") ?></h1>
                <p class=" text-secondaryColor text-[14px]">
                    <?php echo the_field("terms_condtions_description_3", "122") ?></p>
            </div>
            <div class="mb-[65px]">
                <h1 class="text-[23px] font-bold text-ContentColor mb-[20px]">
                    <?php echo the_field("terms_condtions_heading_4", "122") ?></h1>
                <p class=" text-secondaryColor text-[14px]">
                    <?php echo the_field("terms_condtions_description_4", "122") ?></p>
            </div>
        </div>
        <?php
        get_footer()
            ?>
    </div>

</body>

</html>