<?php
//  Template Name: properties
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.scss">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/properties/properties.scss">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/demo/demo.scss">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<style>
    .swiper {
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 0;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }
</style>

<body>
    <?php
    get_header();
    ?>
    <div class="Properties_Page">

        <div class="Properties_main h-full py-[196px] w-full relative top-[-91px] flex flex-col justify-center items-center z-[-1]"
            style="background-image:url('<?php echo the_field("mainsectionimage", "57") ?>')">
            <div class=" relative  z-[0] px-[15px] text-center">
                <h2 class="text-whiteColor uppercase font-poppinsBold text-[36px] leading-[43px] mb-[15px]">Our
                    <span class=" text-primaryColor font-poppinsBold text-[36px]">Properties</span>
                </h2>
                <p class=" text-whiteColor leading-[22px]"><?php echo the_field("properties_page_tagline", "57") ?>
                </p>
            </div>
            <div class="absolute z-[-1] top-0 w-full h-full bg-opacity-80 bg-gray-800">


            </div>
        </div>
        <!-- propeties start -->
        <div class="w-full  mb-[10px] p-2 md:bg-white pl-[16px] xl:pl-[50px]">
            <form class="flex gap-3 items-center overflow-x-auto" action="properties#featuredPropertiesSection"
                style="scrollbar-width:thin; scrollbar-color:white transparent; ">
                <button type="submit" name="propertylocation" value="panji"
                    class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] border p-[7px] ">Panji</button>
                <button type="submit" name="propertylocation" value="tripura"
                    class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] border p-[7px] ">Tripura</button>
                <button type="submit" name="propertybhk" value="9"
                    class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] border p-[7px]">9
                    BHK</button>
                <button type="submit" name="propertytype" value="Residential Apartment"
                    class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] border p-[7px]">Residential
                    Apartment</button>
                <button type="submit" name="propertyfurnishedstatus" value="unfurnished"
                    class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] border p-[7px]">Unfurnished</button>
                <button type="submit" name="propertybathrooms" value="12"
                    class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] border p-[7px]">12
                    bathrooms</button>

                <button type="submit" name="propertylocation" value="Chandigarh"
                    class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] border p-[7px]">
                    Chandigarh</button>
                <button type="submit" name="propertytype" value="bunglow"
                    class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] border p-[7px]">bunglow
                </button>
            </form>
        </div>
        <div
            class="flex flex-col gap-10 lg:flex-row justify-center items-start px-[16px] md:px-[10px] md:max-w-[707px] 1md:max-w-[842px] m-auto lg:max-w-[100%] lg:pl-[54px] lg:pr-[50px]">
            <div
                class="properties_search_section  border lg:w-[30%] shadow-2xl w-full px-[10px] rounded-md lg:p-[15px] py-[22px]">
                <div class="properties_search_bar flex flex-col items-center justify-center lg:pl-[0px]  ">
                    <form class="w-full" action="properties#featuredPropertiesSection" method="get" id="myForm">
                        <div
                            class="grid gap-10 grid-cols-2 md:grid-cols-3 lg:grid-cols-none xl:grid-cols-2 mb-[50px] w-full">
                            <!-- <div class="flex flex-col justify-center items-start">
                                <label class="mb-1 font-poppinsMedium  text-ContentColor">Status</label>
                                <input name="propertyStatus" id=""
                                    class="border  w-full  p-2 text-secondaryColor font-poppinsThin font-bold ">

                            </div> -->
                            <div class="flex flex-col justify-center items-start">
                                <label class="mb-1 text-ContentColor">Location</label>
                                <input name="propertylocation" id=""
                                    class="border  w-full  p-2 text-secondaryColor font-robotoThin font-bold">
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <label for="propType" class="mb-1 text-ContentColor">Type:</label>
                                <input list="propertytype" name="propertytype" id="propType"
                                    class="border  w-full  p-2 text-secondaryColor font-robotoThin font-bold">
                                <datalist id="propertytype">
                                    <option value="Ready to Move">
                                    <option value="Apartment ">
                                    <option value="Resale">
                                    <option value="Kothi">
                                    <option value="3bhk independent Floor">
                                </datalist>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <label for="bhkproperty" class="mb-1 text-ContentColor">BHK</label>
                                <input list="propertybhk" name="propertybhk" id="bhkproperty"
                                    class="border  w-full  p-2 text-secondaryColor font-robotoThin font-bold">
                                <datalist id="propertybhk">
                                    <option value="1 ">
                                    <option value="2">
                                    <option value="3">
                                    <option value="4">
                                    <option value="5">
                                </datalist>
                            </div>

                            <div class="flex flex-col justify-center items-start">
                                <label for="furn" class="mb-1 text-ContentColor">Furnished Status</label>
                                <input list="propertyfurnishedstatus" name="propertyfurnishedstatus" id="furn"
                                    class="border  w-full  p-2 text-secondaryColor font-robotoThin font-bold">
                                <datalist id="propertyfurnishedstatus">
                                    <option value="furnished">
                                    <option value="semi-furnished">
                                    <option value="un-furnished">
                                </datalist>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <label for="bathproperty" class="mb-1 text-ContentColor">Bathrooms</label>

                                <input list="propertybathrooms" name="propertybathrooms" id="bathproperty"
                                    class="border  w-full  p-2 text-secondaryColor font-robotoThin font-bold">
                                <datalist id="propertybathrooms">
                                    <option value="1">
                                    <option value="2">
                                    <option value="3">
                                    <option value="4">
                                    <option value="5">
                                    <option value="10">
                                </datalist>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <label class="mb-1 text-ContentColor">Min Budget:</label>
                                <input type="number" name="minBGT" id="" class="border p-2 w-full">
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <label class="mb-1 text-ContentColor">Max Budget:</label>
                                <input type="number" name="maxBGT" id="" class="border p-2 w-full">
                            </div>
                        </div>
                        <!-- <form>
                        <button type="submit" name="propertylocation" value="panji"
                            class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] font-robotoThin font-bold border p-[7px] hidden md:block">Goa</button>
                            </form> -->
                        <!-- <button type="submit" name="propertytype" value="3bhk independent Floor"
                            class="bg-white text-black text-nowrap rounded-xl shadow-2xl font-robotoThin font-bold mb-[10px] border p-[7px] hidden md:block">
                            Apartment
                        </button> -->
                        <!-- <button type="submit" name="propertytype" value="Residential Apartment"
                            class="bg-white text-black text-nowrap rounded-xl shadow-2xl mb-[10px] font-robotoThin font-bold border p-[7px] hidden md:block">Residential
                            Apartment
                        </button> -->
                        <div class="w-full flex justify-center items-center">
                            <input type=submit
                                class="p-3 bg-primaryColor text-whiteColor text-center w-[140px] uppercase transition duration-200 hover:opacity-[0.9]"
                                type="submit" value="Find Dreams">
                        </div>

                    </form>
                </div>
            </div>

            <!-- Featured Projects -->
            <div class="featured_properties_section pb-[80px] flex flex-col justify-center items-center w-full lg:w-[70%] z-[0]"
                id="featuredPropertiesSection">
                <div class="featured_projects_container w-full flex flex-col gap-3">
                    <!-- searched data -->
                    <?php
                    $propertylocation = isset($_GET['propertylocation']) ? $_GET['propertylocation'] : '';
                    $propertybhk = isset($_GET['propertybhk']) ? $_GET['propertybhk'] : '';
                    $propertybathrooms = isset($_GET['propertybathrooms']) ? $_GET['propertybathrooms'] : '';
                    $propertyfurnishedstatus = isset($_GET['propertyfurnishedstatus']) ? $_GET['propertyfurnishedstatus'] : '';
                    $propertyStatus = isset($_GET['propertyStatus']) ? $_GET['propertyStatus'] : '';

                    $propertytype = isset($_GET['propertytype']) ? $_GET['propertytype'] : '';
                    $minBGT = isset($_GET['minBGT']) ? $_GET['minBGT'] : '';
                    $maxBGT = isset($_GET['maxBGT']) ? $_GET['maxBGT'] : '';

                    if ($propertylocation !== " " && $minBGT == "" && $maxBGT == "" && $propertybathrooms == "" && $propertyStatus == "" && $propertyfurnishedstatus == "" && $propertytype == "" && $propertybhk == "") {
                        $the_query = new WP_Query(
                            array(
                                'post_type' => 'property',
                                'paged' => $paged,
                                'meta_query' => array(
                                    'relation' => 'OR',
                                    array(
                                        'key' => 'location_locality',
                                        'value' => $propertylocation,
                                        'compare' => 'LIKE',
                                    ),
                                    array(
                                        'key' => 'location_state',
                                        'value' => $propertylocation,
                                        'compare' => 'LIKE',
                                    ),
                                ),
                            )
                        );
                    } else if ($propertybhk !== "" && $minBGT == "" && $maxBGT == "" && $propertyfurnishedstatus == "" && $propertyStatus == "" && $propertybathrooms == "" && $propertylocation == "" && $propertytype == "") {
                        $the_query = new WP_Query(
                            array(
                                'post_type' => 'property',
                                'paged' => $paged,
                                'meta_query' => array(

                                    array(
                                        'key' => 'bhk',
                                        'type' => 'NUMERIC',
                                        'value' => $propertybhk,
                                        'compare' => 'LIKE'
                                    )
                                )
                            )
                        );
                    } else if ($propertyStatus !== "" && $minBGT == "" && $maxBGT == "" && $propertyfurnishedstatus == "" && $propertybathrooms == "" && $propertylocation == "" && $propertytype == "") {
                        $the_query = new WP_Query(
                            array(
                                'post_type' => 'property',
                                'paged' => $paged,
                                'meta_query' => array(

                                    array(
                                        'key' => 'status',
                                        'value' => $propertyStatus,
                                        'compare' => 'LIKE'
                                    )
                                )
                            )
                        );
                    } else if ($propertytype !== "" && $minBGT == "" && $maxBGT == "" && $propertyfurnishedstatus == "" && $propertyStatus == "" && $propertybathrooms == "" && $propertybhk == "" && $propertylocation == "") {
                        $the_query = new WP_Query(
                            array(
                                'post_type' => 'property',
                                'paged' => $paged,
                                'meta_query' => array(

                                    array(
                                        'key' => 'house_type',
                                        'value' => $propertytype,
                                        'compare' => 'LIKE'
                                    )
                                )
                            )
                        );
                    } else if ($propertybathrooms !== "" && $minBGT == "" && $maxBGT == "" && $propertybhk == "" && $propertyStatus == "" && $propertyfurnishedstatus == "" && $propertylocation == "") {
                        $the_query = new WP_Query(
                            array(
                                'post_type' => 'property',
                                'paged' => $paged,
                                'meta_query' => array(

                                    array(
                                        'key' => 'bathrooms',
                                        'value' => $propertybathrooms,
                                        'compare' => 'LIKE'
                                    )
                                )
                            )
                        );
                    } else if ($minBGT !== "" && $maxBGT !== "" && $propertylocation == "" && $propertybathrooms == "" && $propertyStatus == "" && $propertyfurnishedstatus == "" && $propertytype == "" && $propertybhk == "") {
                        $the_query = new WP_Query(
                            array(
                                'post_type' => 'property',
                                'paged' => $paged,

                                'meta_query' => array(

                                    array(
                                        'key' => 'houseprice',
                                        'type' => 'NUMERIC',
                                        'value' => array($minBGT, $maxBGT),
                                        'compare' => 'BETWEEN'
                                    )
                                )
                            )
                        );
                    } else if ($propertyfurnishedstatus !== "" && $minBGT == "" && $maxBGT == "" && $propertyStatus == "" && $propertybathrooms == "" && $propertylocation == "" && $propertytype == "" && $propertybhk == "") {
                        $the_query = new WP_Query(
                            array(
                                'post_type' => 'property',
                                'paged' => $paged,
                                'meta_query' => array(

                                    array(
                                        'key' => 'furnishedstatus',
                                        'value' => $propertyfurnishedstatus,
                                        'compare' => 'LIKE'
                                    ),


                                )
                            )
                        );
                    } else {
                        $the_query = new WP_Query(
                            array(
                                'post_type' => 'property',
                                'paged' => $paged,
                                'meta_query' => array(
                                    array(
                                        'key' => 'location_locality',
                                        'value' => $propertylocation,
                                        'compare' => 'LIKE'
                                    ),
                                    array(
                                        'key' => 'bhk',
                                        'type' => 'NUMERIC',
                                        'value' => $propertybhk,
                                        'compare' => 'LIKE'
                                    ),
                                    array(
                                        array(
                                            'key' => 'house_type',
                                            'value' => $propertytype,
                                            'compare' => 'LIKE'
                                        )
                                    ),
                                    array(
                                        'key' => 'houseprice',
                                        'type' => 'NUMERIC',
                                        'value' => array($minBGT, $maxBGT),
                                        'compare' => 'BETWEEN'
                                    ),
                                    array(
                                        'key' => 'bathrooms',
                                        'value' => $propertybathrooms,
                                        'compare' => 'LIKE'
                                    ),
                                    array(
                                        'key' => 'furnishedstatus',
                                        'value' => $propertyfurnishedstatus,
                                        'compare' => 'LIKE'
                                    ),
                                    array(
                                        'key' => 'status',
                                        'value' => $propertyStatus,
                                        'compare' => 'LIKE'
                                    ),
                                )
                            )
                        );
                    }
                    while ($the_query->have_posts()):
                        $the_query->the_post();
                        ?>
                        <div
                            class="property rounded-md  grid grid-cols-1 lg:grid-cols-2 items-start gap-4 border ">
                            <div
                                class="property rounded-md lg:p-[15px] grid grid-cols-1 md:grid-cols-1 items-start gap-4 p-3">
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
                                    <div class="swiper-pagination"></div>
                                </div>

                            </div>
                            <!-- details  -->
                            <div class="flex flex-col gap-[10px] p-3 lg:p-[15px]">
                                <a href="<?php echo the_permalink(); ?>">
                                    <div class="flex flex-col items-start border-b gap-1  mb-[10px] pb-[4px]">
                                        <p class="text-[16px] font-poppinsBold text-ContentColor">
                                            <?php
                                            $houseType = get_field("house_type");
                                            if ($houseType) {
                                                echo $houseType;
                                            } else {
                                                echo '/--';
                                            }
                                            ?>
                                        </p>
                                        <p class="text-[14px] text-secondaryColor font-robotoLight tracking-wider ">
                                            <?php
                                            $location_locally = get_field("location_locality");
                                            if ($location_locally) {
                                                echo $location_locally;
                                            } else {
                                                echo '/--';
                                            }
                                            ?>,
                                            <?php
                                            $location_state = get_field("location_state");
                                            if ($location_state) {
                                                echo $location_state;
                                            } else {
                                                echo '/--';
                                            }
                                            ?>
                                </a>
                                </p>
                            </div>
                            <div class="flex items-start vs:items-center border-b gap-8  justify-between">
                                <div class="grid grid-cols-2  vs:grid-cols-3 gap-7 items-center justify-start">
                                    <div class="flex flex-col"><span class="flex items-center"><sup>₹</sup><span
                                                class="font-poppinsBold"> <?php
                                                $houseprice = get_field("houseprice");
                                                if ($houseprice) {
                                                    echo $houseprice;
                                                } else {
                                                    echo '/--';
                                                }
                                                ?></span>L</span><span
                                            class="text-[14px] text-secondaryColor font-robotoLight font-bold"><a
                                                href="<?php echo the_permalink(); ?>">
                                            </a></span>
                                        <?php
                                        $sqft = get_field("sqft");
                                        if ($sqft) {
                                            echo '<div class="flex gap-1 text-[14px] text-secondaryColor font-robotoLight font-bold ">';
                                            echo $sqft;
                                            echo ' <span
                                                    class="text-[14px] text-secondaryColor font-robotoLight font-thin"><a
                                                        href="<?php echo the_permalink(); ?>">sqft
                                                    </a></span>';
                                            echo '</div>';
                                        } else {
                                            echo '/--';
                                        }
                                        ?>
                                    </div>
                                    <div class="flex flex-col"><span class="font-poppinsBold leading-[14px] text-[15px]">
                                            <?php
                                            $HouseGaj = get_field("house_gaj");
                                            if ($HouseGaj) {
                                                echo '<div class="flex flex-col justify-center items-center">';

                                                echo $HouseGaj;
                                                echo '<span
                                                            class="text-[14px] text-secondaryColor font-robotoLight "><a
                                                                href="<?php echo the_permalink(); ?>">
                                                                Gaj</a></span>';
                                                echo '</div>';

                                            } else {
                                                $bhk = get_field("bhk");
                                                if ($bhk) {
                                                    echo '<div class="flex flex-col justify-center items-center">';

                                                    echo $bhk;
                                                    echo '<span
                                                            class="text-[14px] text-secondaryColor font-robotoLight "><a
                                                                href="<?php echo the_permalink(); ?>">
                                                                BHK</a></span>';
                                                    echo '</div>';

                                                }

                                            } ?></span></div>
                                    <div class="flex flex-col"><span class="font-poppinsBold"><a
                                                href="<?php echo the_permalink(); ?>"> <?php
                                                   $statushouse = get_field("status");
                                                   if ($statushouse) {
                                                       echo '<div class="flex flex-col">';
                                                       echo $statushouse;
                                                       echo '<span
                                                            class="text-[14px] text-secondaryColor font-robotoLight font-bold">status</span>';
                                                       echo '</div>';
                                                   } else {
                                                       $furnishedstatuss = get_field("furnishedstatus");
                                                       if ($furnishedstatuss) {
                                                           echo '<div class="flex flex-col">';
                                                           echo $furnishedstatuss;
                                                           echo '<span
                                                                   class="text-[14px] text-secondaryColor font-robotoLight font-bold">furn/unfurnished</span>';
                                                           echo '</div>';
                                                       }
                                                   }
                                                   ?></a></span>
                                    </div>
                                </div>
                                <div>
                                    <!-- clipper -->
                                    <a href="<?php echo the_permalink(); ?>">
                                        <p><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                viewBox="0 -3.34 50 49.68" enable-background="new 0 -3.34 50 49.68"
                                                xml:space="preserve" fill="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill="none" stroke="#000000" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M36.025,19.506L20.202,35.329 c-7.823,7.823-18.078-1.494-9.786-9.785c2.753-2.753,20.716-20.716,20.716-20.716c10.16-10.16,23.429,3.482,13.456,13.455 c-3.363,3.364-20.716,20.715-20.716,20.715C10.519,52.351-6.795,35.974,7.025,22.154L22.849,6.331">
                                                    </path>
                                                </g>
                                            </svg></p>
                                    </a>
                                </div>
                            </div>
                            <div class="border-b">
                                <span class="text-[13px] md:tracking-wide">
                                    <?php
                                    $bathrooms = get_field("bathrooms");
                                    if ($bathrooms) {
                                        echo $bathrooms . ' bathrooms';
                                    } else {
                                        $house_story = get_field("house_story");
                                        if ($house_story) {
                                            echo $house_story;
                                        }
                                    }
                                    ?>
                                    | <?php
                                    $opensides = get_field("open_sides_house");
                                    if ($opensides) {
                                        echo $opensides;
                                    } else {
                                        $bhk = get_field("bhk");
                                        if ($bhk) {
                                            echo $bhk . ' BHK';
                                        }
                                    }
                                    ?></span>
                                <a href="<?php echo the_permalink(); ?>">
                                    <div class="flex justify-between">
                                        <p
                                            class="w-[380px] overflow-hidden whitespace-nowrap text-ellipsis text-secondaryColor md:tracking-wide text-[14px] tracking-wide font-robotoLight font-bold">
                                            <?php
                                            $house_description = get_field("house_description");
                                            if ($house_description) {
                                                echo $house_description;
                                            } else {
                                                echo '/--';
                                            }
                                            ?>
                                        </p><span class="text-[14px]">
                                            More</span>
                                    </div>
                                </a>
                            </div>
                            <div class="flex gap-4 items-center justify-between">
                                <div class="flex gap-3 items-center"><span><svg viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="w-[25px]">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z"
                                                    stroke="#000000" stroke-width="0.576" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                        </svg></span>
                                    <!-- now------------------------------------------------------ -->
                                    <span class="sharebutton" onclick="share(<?php echo the_ID() ?>)"><svg fill="#000000"
                                            width="20px" height="20px" viewBox="0 0 32.00 32.00" class="w-[30px]"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#000000"
                                            stroke-width="0.00032">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M27 22c-1.646 0-3.103 0.8-4.013 2.028l-13.168-6.71c0.114-0.421 0.181-0.86 0.181-1.317 0-0.572-0.101-1.119-0.277-1.63l13.242-6.426c0.909 1.244 2.375 2.056 4.035 2.056 2.762 0 5-2.239 5-5s-2.238-5-5-5-5 2.239-5 5c0 0.388 0.049 0.764 0.133 1.127l-13.432 6.518c-0.915-1.009-2.231-1.646-3.7-1.646-2.761 0-5 2.239-5 5s2.239 5 5 5c1.59 0 3.004-0.744 3.92-1.902l13.222 6.739c-0.090 0.374-0.142 0.762-0.142 1.163 0 2.761 2.238 5 5 5s5-2.239 5-5-2.238-5-5-5zM27 2c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3zM5 19c-1.657 0-3-1.343-3-3s1.343-3 3-3c1.657 0 3 1.344 3 3s-1.343 3-3 3zM27 30c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z">
                                                </path>
                                            </g>
                                        </svg></span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <p class="text-[14px] text-primaryColor cursor-pointer">
                                        <a onclick="toggleDetails(<?php the_id(); ?>)">View Phone
                                        </a>
                                    </p>
                                    <a class="bg-primaryColor p-3 rounded-md text-whiteColor text-[13px] text-nowrap viewDetails transition duration-200 hover:opacity-[0.9]"
                                        href="<?php echo the_permalink(); ?>">View Property</a>
                                    <!-- social_icon_popup_box -->
                                    <!-- now--------------------------------------------------------------- -->
                                    <div class="icons_container-<?php echo the_ID(); ?> social_icons_wrapper ">
                                        <div
                                            class="fixed top-0 z-[999] w-full h-full px-[16px] vs:px-[17px] left-0 flex justify-center items-center social_wrapper">
                                            <div class="border bg-white p-4 md:p-5 lg:p-7 rounded-md">
                                                <div class="flex justify-end mb-[10px]">
                                                    <svg fill="#000000" height="30px" width="20px"
                                                        class="lg:h-[34px] w-[34px]" version="1.1" id="Capa_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        onclick="closePopupIcon(<?php echo the_ID() ?>)"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 491.415 491.415" xml:space="preserve">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M491.015,80.959c-0.2-2.9-0.1-5.7-0.6-8.6c-0.7-5.7-2-11.3-3.9-16.8c-7.6-21.8-24.6-39.9-45.9-48.6 c-2.7-1-5.4-2.1-8.1-2.9c-2.9-0.7-5.4-1.5-8.6-2l-4.8-0.7l-2.4-0.3l-1.7-0.1l-3.3-0.2l-1.6-0.1h-2.6l-26.1,0.1l-52.2,0.1 c-69.6,0.1-139.1,0.1-208.5-0.5c-12.3-0.1-31.7,3.4-37.8,5.8c-12.1,4.9,3.6,9,27.1,12.1c77.5,10.3,171.5,14.8,267.2,16l21.6,0.3 l10.1,0.1l5.4,0.3c1.5,0.2,2.4,0.5,3.7,0.6c10.5,2.1,20.7,8.2,27.5,16.7c6.9,8.6,10.5,19.3,10.3,30.2l-0.6,43.2 c-0.7,57.6-1.3,115.2-2,172.9c-0.2,28.8-0.4,57.7-0.6,86.5l-0.1,21.6c0.1,8.1-0.3,12.6-1.5,16.8c-2.4,9.7-8.4,18.5-16.6,24.3 c-4.1,2.9-8.6,5.1-13.4,6.5c-2.4,0.7-4.9,1.1-7.4,1.5l-3.8,0.2c-1.4,0.1-3.5,0-5.2,0.1l-43.4,0.2c-28.9,0.3-57.9,0.6-86.8,0.9 c-28.7-0.4-57.3-0.7-86-1.1l-68.2-0.6l-34.1-0.2h-4.3h-2.1h-0.3h-0.8l-4.3-0.2c-0.8,0-1.2-0.1-1.5-0.2l-1.1-0.2 c-1.3-0.1-3.3-0.8-5.2-1.2c-1.8-0.7-3.7-1.2-5.4-2.1c-7-3.2-13-8.5-17.3-14.9c-4.2-6.5-6.7-13.9-6.9-21.6l-0.1-67.3 c-0.1-45.4-0.4-90.8-0.9-136.1c-0.3-22.7-0.6-45.3-0.9-67.9l-0.8-33.9l-0.3-17l-0.2-8.5v-1.1v-0.3v-0.1c0-0.1,0-0.1,0-0.1l0.1-1.8 c0.1-1.3,0-3.1,0.2-4s0.3-1.9,0.4-2.8c0.1-0.9,0.5-2.2,0.6-3.3c0.2-1.1,0.5-2.2,0.9-3.3c0.4-1.1,0.6-2.2,1-3.2 c1.5-4.2,3.8-8,6.1-11.5c4.9-6.8,10.9-12.1,16.6-15.8c11.3-7.2,20.8-9.4,19-14.2c-0.8-1.9-3.8-4.1-9-5c-5.2-1.2-12.7-1-21.5,1.8 c-8.7,2.8-19,8.4-27.5,18.2c-8.6,9.7-15.4,23.2-16.8,39.8l-0.3,4.4l-0.1,5.1l-0.2,8.9l-0.5,17.8c-0.2,11.9-0.4,23.8-0.6,35.7 c-0.4,23.8-0.8,47.6-1.1,71.4c-0.7,47.6-1.1,95.3-1,142.9l0.1,28.7l0.1,14.4c0,2.5,0,4.6,0.1,7.4c0.2,3,0.1,6,0.7,9 c1.6,12,6,23.6,12.8,33.6c6.8,9.9,15.9,18.3,26.4,24.2c2.6,1.5,5.4,2.7,8.1,4c2.8,1,5.6,2.2,8.5,3c3,0.7,5.6,1.6,9.1,2l4.9,0.7 c1.7,0.2,2.5,0.1,3.8,0.2l4.4,0.2h3.6l7.2-0.1l14.3-0.1l57.4-0.5c76.5-0.7,153-1.5,229.5-2.2l12.9,0.5c2.2,0.1,4.1,0.2,6.7,0.2 c2.6-0.1,5.2,0,7.8-0.3c10.5-0.9,20.8-4.1,30.1-9.3c18.6-10.3,32.9-28.9,37.7-50.2c2.7-13.2,1.8-20.1,2.3-29.1l0.6-25.9 c0.3-17.3,0.6-34.6,0.9-51.9c1-69.2,1.4-138.6,1.4-208.2v-26.1v-3.3C491.115,83.559,491.115,82.559,491.015,80.959z">
                                                                    </path>
                                                                    <path
                                                                        d="M147.315,315.859c-1.3,1.2-0.8,5.6,0.3,8c2.2,4.7,6.7,6,11.3,5.8c15.1-0.5,27.8-6.9,38.4-15.7 c15.8-13.3,32.1-26.1,47.2-40.2c0.1,0.1,0.3,0.2,0.4,0.3c2.6,3.2,5.2,6.4,7.9,9.5c17.2,19.6,35.2,38.3,56.4,53.7 c6,4.4,13.6,5.5,19.6-1.4c5.5-6.2,6.1-14.2,1.5-20.2c-8.4-10.8-16.7-21.8-26.5-31.3c-12-11.6-24.7-22.5-37.3-33.5 c1.2-1.4,2.4-2.7,3.5-4.1c3.2-2.6,6.4-5.2,9.5-7.9c19.6-17.2,38.3-35.2,53.7-56.4c4.4-6,5.5-13.6-1.4-19.6 c-6.2-5.5-14.2-6.1-20.2-1.5c-10.8,8.4-21.8,16.7-31.3,26.5c-12,12.4-23.2,25.4-34.5,38.4c-19.8-28.2-47.4-49.4-70.1-75 c-1.2-1.3-5.6-0.8-8,0.3c-4.7,2.2-6,6.7-5.8,11.3c0.5,15.1,6.9,27.8,15.7,38.4c13.4,15.9,26.3,32.3,40.5,47.5 C191.915,268.259,171.615,294.259,147.315,315.859z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="flex flex-wrap gap-3 mb-[12px] px-4">
                                                    <div class="flex gap-2 items-center bg-lightGray rounded-md">
                                                        <span class="close_icon_social_media"> <svg version="1.1"
                                                                id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                                viewBox="0 -3.34 50 49.68"
                                                                enable-background="new 0 -3.34 50 49.68"
                                                                xml:space="preserve" fill="#000000">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path fill="none" stroke="#000000"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M36.025,19.506L20.202,35.329 c-7.823,7.823-18.078-1.494-9.786-9.785c2.753-2.753,20.716-20.716,20.716-20.716c10.16-10.16,23.429,3.482,13.456,13.455 c-3.363,3.364-20.716,20.715-20.716,20.715C10.519,52.351-6.795,35.974,7.025,22.154L22.849,6.331">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <input type="text" value="<?php echo the_permalink() ?>"
                                                            class="whitespace-nowrap overflow-hidden text-ellipsis p-3 w-full bg-lightGray  copy_value-<?php echo the_ID(); ?>">
                                                    </div>
                                                    <div
                                                        class="bg-primaryColor p-3 rounded-sm md:min-w-[130px] text-center">
                                                        <button class="text-white copy_url_button-<?php echo the_ID() ?>"
                                                            onclick="copyURLFunc(<?php echo the_ID() ?>)">Copy
                                                            URL</button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <?php if (function_exists('ADDTOANY_SHARE_SAVE_KIT')) {
                                                        ADDTOANY_SHARE_SAVE_KIT();
                                                    } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- if user not loggin then show this -->
                                    <!-- <div class="popup_box_number fixed top-0 w-full left-0 flex px-[16px] flex-col justify-center z-[9999999] items-center h-full   connect-<?php the_id(); ?>"
                                            style="display:none;">
                                            <div class="Owner_number_container m-auto bg-blue-50 ">
                                                <div class="border flex justify-end items-end p-[10px]">
                                                    <span class="close_icon_number_box-<?php echo the_id(); ?>"
                                                        onclick="closeBoxnumber(<?php echo the_ID(); ?>)">
                                                        <svg fill="#000000" height="20px" width="20px" class=""
                                                            version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 0 491.415 491.415" xml:space="preserve">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="M491.015,80.959c-0.2-2.9-0.1-5.7-0.6-8.6c-0.7-5.7-2-11.3-3.9-16.8c-7.6-21.8-24.6-39.9-45.9-48.6 c-2.7-1-5.4-2.1-8.1-2.9c-2.9-0.7-5.4-1.5-8.6-2l-4.8-0.7l-2.4-0.3l-1.7-0.1l-3.3-0.2l-1.6-0.1h-2.6l-26.1,0.1l-52.2,0.1 c-69.6,0.1-139.1,0.1-208.5-0.5c-12.3-0.1-31.7,3.4-37.8,5.8c-12.1,4.9,3.6,9,27.1,12.1c77.5,10.3,171.5,14.8,267.2,16l21.6,0.3 l10.1,0.1l5.4,0.3c1.5,0.2,2.4,0.5,3.7,0.6c10.5,2.1,20.7,8.2,27.5,16.7c6.9,8.6,10.5,19.3,10.3,30.2l-0.6,43.2 c-0.7,57.6-1.3,115.2-2,172.9c-0.2,28.8-0.4,57.7-0.6,86.5l-0.1,21.6c0.1,8.1-0.3,12.6-1.5,16.8c-2.4,9.7-8.4,18.5-16.6,24.3 c-4.1,2.9-8.6,5.1-13.4,6.5c-2.4,0.7-4.9,1.1-7.4,1.5l-3.8,0.2c-1.4,0.1-3.5,0-5.2,0.1l-43.4,0.2c-28.9,0.3-57.9,0.6-86.8,0.9 c-28.7-0.4-57.3-0.7-86-1.1l-68.2-0.6l-34.1-0.2h-4.3h-2.1h-0.3h-0.8l-4.3-0.2c-0.8,0-1.2-0.1-1.5-0.2l-1.1-0.2 c-1.3-0.1-3.3-0.8-5.2-1.2c-1.8-0.7-3.7-1.2-5.4-2.1c-7-3.2-13-8.5-17.3-14.9c-4.2-6.5-6.7-13.9-6.9-21.6l-0.1-67.3 c-0.1-45.4-0.4-90.8-0.9-136.1c-0.3-22.7-0.6-45.3-0.9-67.9l-0.8-33.9l-0.3-17l-0.2-8.5v-1.1v-0.3v-0.1c0-0.1,0-0.1,0-0.1l0.1-1.8 c0.1-1.3,0-3.1,0.2-4s0.3-1.9,0.4-2.8c0.1-0.9,0.5-2.2,0.6-3.3c0.2-1.1,0.5-2.2,0.9-3.3c0.4-1.1,0.6-2.2,1-3.2 c1.5-4.2,3.8-8,6.1-11.5c4.9-6.8,10.9-12.1,16.6-15.8c11.3-7.2,20.8-9.4,19-14.2c-0.8-1.9-3.8-4.1-9-5c-5.2-1.2-12.7-1-21.5,1.8 c-8.7,2.8-19,8.4-27.5,18.2c-8.6,9.7-15.4,23.2-16.8,39.8l-0.3,4.4l-0.1,5.1l-0.2,8.9l-0.5,17.8c-0.2,11.9-0.4,23.8-0.6,35.7 c-0.4,23.8-0.8,47.6-1.1,71.4c-0.7,47.6-1.1,95.3-1,142.9l0.1,28.7l0.1,14.4c0,2.5,0,4.6,0.1,7.4c0.2,3,0.1,6,0.7,9 c1.6,12,6,23.6,12.8,33.6c6.8,9.9,15.9,18.3,26.4,24.2c2.6,1.5,5.4,2.7,8.1,4c2.8,1,5.6,2.2,8.5,3c3,0.7,5.6,1.6,9.1,2l4.9,0.7 c1.7,0.2,2.5,0.1,3.8,0.2l4.4,0.2h3.6l7.2-0.1l14.3-0.1l57.4-0.5c76.5-0.7,153-1.5,229.5-2.2l12.9,0.5c2.2,0.1,4.1,0.2,6.7,0.2 c2.6-0.1,5.2,0,7.8-0.3c10.5-0.9,20.8-4.1,30.1-9.3c18.6-10.3,32.9-28.9,37.7-50.2c2.7-13.2,1.8-20.1,2.3-29.1l0.6-25.9 c0.3-17.3,0.6-34.6,0.9-51.9c1-69.2,1.4-138.6,1.4-208.2v-26.1v-3.3C491.115,83.559,491.115,82.559,491.015,80.959z">
                                                                        </path>
                                                                        <path
                                                                            d="M147.315,315.859c-1.3,1.2-0.8,5.6,0.3,8c2.2,4.7,6.7,6,11.3,5.8c15.1-0.5,27.8-6.9,38.4-15.7 c15.8-13.3,32.1-26.1,47.2-40.2c0.1,0.1,0.3,0.2,0.4,0.3c2.6,3.2,5.2,6.4,7.9,9.5c17.2,19.6,35.2,38.3,56.4,53.7 c6,4.4,13.6,5.5,19.6-1.4c5.5-6.2,6.1-14.2,1.5-20.2c-8.4-10.8-16.7-21.8-26.5-31.3c-12-11.6-24.7-22.5-37.3-33.5 c1.2-1.4,2.4-2.7,3.5-4.1c3.2-2.6,6.4-5.2,9.5-7.9c19.6-17.2,38.3-35.2,53.7-56.4c4.4-6,5.5-13.6-1.4-19.6 c-6.2-5.5-14.2-6.1-20.2-1.5c-10.8,8.4-21.8,16.7-31.3,26.5c-12,12.4-23.2,25.4-34.5,38.4c-19.8-28.2-47.4-49.4-70.1-75 c-1.2-1.3-5.6-0.8-8,0.3c-4.7,2.2-6,6.7-5.8,11.3c0.5,15.1,6.9,27.8,15.7,38.4c13.4,15.9,26.3,32.3,40.5,47.5 C191.915,268.259,171.615,294.259,147.315,315.859z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div
                                                    class="seller_image rounded-full flex justify-center items-center flex-col p-4">
                                                    <p>Owner</p>
                                                    <img src="<?php echo the_field("owneraccountphoto", "57") ?>" alt=""
                                                        width="60px" height="60px" class="rounded-full">
                                                </div>
                                                <hr>
                                                <div
                                                    class="p-2 h-[225px] md:h-[100%] overflow-y-scroll  md:overflow-hidden">
                                                    <div>
                                                        <p class="text-[14px] text-center text-ContentColor">Connect
                                                            With The seller
                                                            Right Now</p>
                                                    </div>
                                                    <div class="contact_form_properties">
                                                        <?php echo do_shortcode('[contact-form-7 id="04f9f29" title="Contact Form 2"]') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- else second phone number box -->
                                    <div class="popup_box_number_owner-<?php the_id(); ?> succesfull_number_Popup fixed top-0 w-full left-0 flex flex-col justify-center z-[9999999] items-center h-full   connectowner-<?php the_id(); ?>"
                                        style="display:none;">
                                        <div class="Owner_number_container m-auto bg-blue-50 rounded-md">
                                            <div class=" flex justify-end items-end p-[10px]">
                                                <span class="close_icon_number_box-<?php echo the_id(); ?>"
                                                    onclick="closeBoxnumberowner(<?php echo the_ID(); ?>)">
                                                    <svg fill="#000000" height="20px" width="20px" class="" version="1.1"
                                                        id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 491.415 491.415" xml:space="preserve">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M491.015,80.959c-0.2-2.9-0.1-5.7-0.6-8.6c-0.7-5.7-2-11.3-3.9-16.8c-7.6-21.8-24.6-39.9-45.9-48.6 c-2.7-1-5.4-2.1-8.1-2.9c-2.9-0.7-5.4-1.5-8.6-2l-4.8-0.7l-2.4-0.3l-1.7-0.1l-3.3-0.2l-1.6-0.1h-2.6l-26.1,0.1l-52.2,0.1 c-69.6,0.1-139.1,0.1-208.5-0.5c-12.3-0.1-31.7,3.4-37.8,5.8c-12.1,4.9,3.6,9,27.1,12.1c77.5,10.3,171.5,14.8,267.2,16l21.6,0.3 l10.1,0.1l5.4,0.3c1.5,0.2,2.4,0.5,3.7,0.6c10.5,2.1,20.7,8.2,27.5,16.7c6.9,8.6,10.5,19.3,10.3,30.2l-0.6,43.2 c-0.7,57.6-1.3,115.2-2,172.9c-0.2,28.8-0.4,57.7-0.6,86.5l-0.1,21.6c0.1,8.1-0.3,12.6-1.5,16.8c-2.4,9.7-8.4,18.5-16.6,24.3 c-4.1,2.9-8.6,5.1-13.4,6.5c-2.4,0.7-4.9,1.1-7.4,1.5l-3.8,0.2c-1.4,0.1-3.5,0-5.2,0.1l-43.4,0.2c-28.9,0.3-57.9,0.6-86.8,0.9 c-28.7-0.4-57.3-0.7-86-1.1l-68.2-0.6l-34.1-0.2h-4.3h-2.1h-0.3h-0.8l-4.3-0.2c-0.8,0-1.2-0.1-1.5-0.2l-1.1-0.2 c-1.3-0.1-3.3-0.8-5.2-1.2c-1.8-0.7-3.7-1.2-5.4-2.1c-7-3.2-13-8.5-17.3-14.9c-4.2-6.5-6.7-13.9-6.9-21.6l-0.1-67.3 c-0.1-45.4-0.4-90.8-0.9-136.1c-0.3-22.7-0.6-45.3-0.9-67.9l-0.8-33.9l-0.3-17l-0.2-8.5v-1.1v-0.3v-0.1c0-0.1,0-0.1,0-0.1l0.1-1.8 c0.1-1.3,0-3.1,0.2-4s0.3-1.9,0.4-2.8c0.1-0.9,0.5-2.2,0.6-3.3c0.2-1.1,0.5-2.2,0.9-3.3c0.4-1.1,0.6-2.2,1-3.2 c1.5-4.2,3.8-8,6.1-11.5c4.9-6.8,10.9-12.1,16.6-15.8c11.3-7.2,20.8-9.4,19-14.2c-0.8-1.9-3.8-4.1-9-5c-5.2-1.2-12.7-1-21.5,1.8 c-8.7,2.8-19,8.4-27.5,18.2c-8.6,9.7-15.4,23.2-16.8,39.8l-0.3,4.4l-0.1,5.1l-0.2,8.9l-0.5,17.8c-0.2,11.9-0.4,23.8-0.6,35.7 c-0.4,23.8-0.8,47.6-1.1,71.4c-0.7,47.6-1.1,95.3-1,142.9l0.1,28.7l0.1,14.4c0,2.5,0,4.6,0.1,7.4c0.2,3,0.1,6,0.7,9 c1.6,12,6,23.6,12.8,33.6c6.8,9.9,15.9,18.3,26.4,24.2c2.6,1.5,5.4,2.7,8.1,4c2.8,1,5.6,2.2,8.5,3c3,0.7,5.6,1.6,9.1,2l4.9,0.7 c1.7,0.2,2.5,0.1,3.8,0.2l4.4,0.2h3.6l7.2-0.1l14.3-0.1l57.4-0.5c76.5-0.7,153-1.5,229.5-2.2l12.9,0.5c2.2,0.1,4.1,0.2,6.7,0.2 c2.6-0.1,5.2,0,7.8-0.3c10.5-0.9,20.8-4.1,30.1-9.3c18.6-10.3,32.9-28.9,37.7-50.2c2.7-13.2,1.8-20.1,2.3-29.1l0.6-25.9 c0.3-17.3,0.6-34.6,0.9-51.9c1-69.2,1.4-138.6,1.4-208.2v-26.1v-3.3C491.115,83.559,491.115,82.559,491.015,80.959z">
                                                                    </path>
                                                                    <path
                                                                        d="M147.315,315.859c-1.3,1.2-0.8,5.6,0.3,8c2.2,4.7,6.7,6,11.3,5.8c15.1-0.5,27.8-6.9,38.4-15.7 c15.8-13.3,32.1-26.1,47.2-40.2c0.1,0.1,0.3,0.2,0.4,0.3c2.6,3.2,5.2,6.4,7.9,9.5c17.2,19.6,35.2,38.3,56.4,53.7 c6,4.4,13.6,5.5,19.6-1.4c5.5-6.2,6.1-14.2,1.5-20.2c-8.4-10.8-16.7-21.8-26.5-31.3c-12-11.6-24.7-22.5-37.3-33.5 c1.2-1.4,2.4-2.7,3.5-4.1c3.2-2.6,6.4-5.2,9.5-7.9c19.6-17.2,38.3-35.2,53.7-56.4c4.4-6,5.5-13.6-1.4-19.6 c-6.2-5.5-14.2-6.1-20.2-1.5c-10.8,8.4-21.8,16.7-31.3,26.5c-12,12.4-23.2,25.4-34.5,38.4c-19.8-28.2-47.4-49.4-70.1-75 c-1.2-1.3-5.6-0.8-8,0.3c-4.7,2.2-6,6.7-5.8,11.3c0.5,15.1,6.9,27.8,15.7,38.4c13.4,15.9,26.3,32.3,40.5,47.5 C191.915,268.259,171.615,294.259,147.315,315.859z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div
                                                class="seller_image rounded-full flex justify-center items-center flex-col p-4 pb-[26px]">
                                                <p class="text-ContentColor mb-[8px]">Owner</p>
                                                <img src="<?php echo the_field("owneraccountphoto", "57") ?>" width="60px"
                                                    height="60px" class="rounded-full">
                                            </div>
                                            <hr>
                                            <div class="p-2">
                                                <div>
                                                    <p
                                                        class="text-[14px] text-center text-ContentColor font-poppinsThin font-bold">
                                                        Connect
                                                        With The dealer
                                                        Right Now</p>
                                                </div>
                                                <div class="contact_form_properties p-3 ">
                                                    <div class=" flex justify-between gap-8">
                                                        <p class="text-[14px]   text-primaryColor font-bold"><a
                                                                href="tel:+919855101877"
                                                                class="hu"><span>(+91)</span>9855101877</a>
                                                        </p>
                                                        <p class="text-[14px] text-primaryColor font-bold"><a
                                                                href="tel:+919501416641"><span>(+91)</span>9501416641</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                    if (!$the_query->have_posts()):
                        ?>
                    <p>No Properties available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div>
        <?php
        get_footer();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // connect Now Number-----------------
        // var user_logged_in = <?php echo is_user_logged_in() ? 'true' : 'false'; ?>;
        // console.log("User Logged In:", user_logged_in);
        function toggleDetails(postID) {
            // var detailsDiv = document.querySelector('.connect-' + postID);
            // var checkPhone = document.querySelector('.checkPhone-' + postID);

            // if (user_logged_in) {
            // if (checkPhone) {
            // detailsDiv.style.display = 'none';
            var popup_box_number_owner = document.querySelector('.popup_box_number_owner-' + postID);
            popup_box_number_owner.style.display = 'flex';

            // } else {
            // console.error("Details Div not found.");
            // }
            // } else {
            //     detailsDiv.style.display = 'flex';
            // }
            // }
        }
        document.addEventListener('wpcf7mailsent', function (event) {
            location.reload();
        }, false);




        // function closeBoxnumber(postID) {
        //     var detailsDiv = document.querySelector('.connect-' + postID);
        //     detailsDiv.style.display = 'none';
        // }
        function closeBoxnumberowner(postID) {
            var detailsDiv = document.querySelector('.connectowner-' + postID);
            detailsDiv.style.display = 'none';
        }
        // -----------------
        // open share icons
        function share(postid) {
            var icons_container = document.querySelector(".icons_container-" + postid);
            icons_container.style.display = "block";
        }

        // close icon for social media
        var closeIcon = document.querySelector(".close_icon_social_media");

        function closePopupIcon(postID) {
            var icons_PopupBox = document.querySelector(".icons_container-" + postID);
            icons_PopupBox.style.display = "none";
            function share(postid) {
                var icons_container = document.querySelector(".icons_container-" + postid);
                icons_container.style.display = "none";
            }
        }
        function copyURLFunc(postid) {
            var copy_value = document.querySelector(".copy_value-" + postid);
            var copiedText = copy_value.value;
            navigator.clipboard.writeText(copiedText);
            var copy_url_button = document.querySelector(".copy_url_button-" + postid);

            copy_url_button.innerHTML = "Copied";
            console.log(copiedText);
        }

        // // form  -------------------------------

        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myForm');
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                setTimeout(function () {
                    form.submit();

                    // Scroll to the target section
                    const featuredPropertiesSection = document.getElementById('featuredPropertiesSection');
                    if (featuredPropertiesSection) {
                        featuredPropertiesSection.scrollIntoView({
                            behavior: 'smooth'
                        });
                    } else {
                        console.error("Element 'featuredPropertiesSection' not found.");
                    }
                }, 200);
            });
        });



        // slider
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


</body>



</html>