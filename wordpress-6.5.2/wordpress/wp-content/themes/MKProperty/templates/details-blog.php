<?php
// Template Name:Blog Detail Page
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
    <div class="BlogDetail_Page">
        <?php
        get_header();
        ?>
        <div class=" h-full py-[196px] w-full relative   top-[-91px]  flex flex-col justify-center items-center"
            style="background-image:url('<?php echo the_field("mainsectionimage", "57") ?>')">
            <div class=" relative  z-[2] px-[15px] text-center ">
                <p class="text-white text-[29px]">
                <h2 class="text-whiteColor uppercase font-poppinsBold text-[36px] leading-[43px] mb-[15px]">What
                    Trending &nbsp;<span class=" text-primaryColor font-poppinsBold text-[36px]">Blog Says?</span> </h2>
                </p>

            </div>
            <div class="absolute top-0 w-full h-full bg-opacity-80 bg-gray-800">


            </div>
        </div>


        <!-- Read Blog -->
        <div class="read_blog_section mb-[120px] md:max-w-[717px] 1md:max-w-[857px] m-auto lg:max-w-none lg:px-[54px]">

            <div class="read_blog_columns flex flex-col lg:flex-row lg:items-start gap-[25px]">

                <div class="read_blog_col_second px-[16px] vs:px-[17px] lg:px-0 xl:pr-[0px] vs:px[0px]">
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
                            <?php echo get_the_author(); ?> &nbsp;|
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
                    <div class="mb-[20px] w-full lg:w-[638px] h-[200px] vs:h-[280px] 1md:h-[360px] m-auto">
                        <img src=<?php
                        $blog_post_image = get_field("blog_post_image");
                        if ($blog_post_image) {
                            echo $blog_post_image;
                        } else {
                            $nophotoavailable = get_field("nophotoavailable");
                            if ($nophotoavailable) {
                                echo $nophotoavailable;
                            } else {
                            }
                        } ?>   class="rounded-md w-full h-full object-cover" />

                    </div>

                    <div class="mb-[28px] flex flex-col gap-[29px]">
                        <p class="text-[14px] tracking-wide leading-6 text-secondaryColor">
                            <?php
                            $blog_post_description1 = get_field("blog_post_description_first_para");
                            if ($blog_post_description1) {
                                echo $blog_post_description1;
                            } else {
                                echo 'In the absence of description, its a silent invitation, urging curiosity to take the lead and explore the unknown.';
                            }
                            ?>
                        </p>

                        <p class="text-[14px] tracking-wide leading-6 text-secondaryColor">
                            <?php
                            $blog_post_description2 = get_field("blog_post_description_second_para");
                            if ($blog_post_description2) {
                                echo $blog_post_description2;
                            } else {
                                echo 'In the absence of description, its a silent invitation, urging curiosity to take the lead and explore the unknown.';
                            }
                            ?>
                        </p>


                        <p class="text-[14px] tracking-wide leading-6 text-secondaryColor">
                            <?php
                            $blog_post_description3 = get_field("blog_post_description_third_para");
                            if ($blog_post_description3) {
                                echo $blog_post_description3;
                            } else {
                                echo 'In the absence of description, its a silent invitation, urging curiosity to take the lead and explore the unknown.';
                            }
                            ?>
                        </p>

                        <p class="text-[14px] tracking-wide leading-6 text-secondaryColor">
                            <?php
                            $blog_post_description4 = get_field("blog_post_description_fourth_para");
                            if ($blog_post_description4) {
                                echo $blog_post_description4;
                            } else {
                                echo 'In the absence of description, its a silent invitation, urging curiosity to take the lead and explore the unknown.';
                            }
                            ?>
                        </p>

                    </div>
                    <div class="w-full flex items-center gap-2">
                        <h2>Share this: </h2>
                        <div class="text-ContentColor flex items-center justify-start gap-2">
                            <a href="<?php echo the_field("facebook_link", "120") ?>"> <span>
                                    <svg fill="#000000" height="15px" width="15px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 310 310" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g id="XMLID_834_">
                                                <path id="XMLID_835_"
                                                    d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064 c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996 V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545 C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703 c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </span></a>
                            <span>
                                <a href="<?php echo the_field("twitter", "120") ?>"> <svg fill="#000000" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" class="w-[15px]" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g id="7935ec95c421cee6d86eb22ecd12f847">
                                                <path style="display: inline;"
                                                    d="M459.186,151.787c0.203,4.501,0.305,9.023,0.305,13.565 c0,138.542-105.461,298.285-298.274,298.285c-59.209,0-114.322-17.357-160.716-47.104c8.212,0.973,16.546,1.47,25.012,1.47 c49.121,0,94.318-16.759,130.209-44.884c-45.887-0.841-84.596-31.154-97.938-72.804c6.408,1.227,12.968,1.886,19.73,1.886 c9.55,0,18.816-1.287,27.617-3.68c-47.955-9.633-84.1-52.001-84.1-102.795c0-0.446,0-0.882,0.011-1.318 c14.133,7.847,30.294,12.562,47.488,13.109c-28.134-18.796-46.637-50.885-46.637-87.262c0-19.212,5.16-37.218,14.193-52.7 c51.707,63.426,128.941,105.156,216.072,109.536c-1.784-7.675-2.718-15.674-2.718-23.896c0-57.891,46.941-104.832,104.832-104.832 c30.173,0,57.404,12.734,76.525,33.102c23.887-4.694,46.313-13.423,66.569-25.438c-7.827,24.485-24.434,45.025-46.089,58.002 c21.209-2.535,41.426-8.171,60.222-16.505C497.448,118.542,479.666,137.004,459.186,151.787z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg></a>
                            </span>
                            <span>
                                <a href="<?php echo the_field("linkedin", "120") ?>"><svg fill="#000000" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" class="w-[15px]"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g id="7935ec95c421cee6d86eb22ecd125aef">
                                                <path style="display: inline; fill-rule: evenodd; clip-rule: evenodd;"
                                                    d="M116.504,500.219V170.654H6.975v329.564H116.504 L116.504,500.219z M61.751,125.674c38.183,0,61.968-25.328,61.968-56.953c-0.722-32.328-23.785-56.941-61.252-56.941 C24.994,11.781,0.5,36.394,0.5,68.722c0,31.625,23.772,56.953,60.53,56.953H61.751L61.751,125.674z M177.124,500.219 c0,0,1.437-298.643,0-329.564H286.67v47.794h-0.727c14.404-22.49,40.354-55.533,99.44-55.533 c72.085,0,126.116,47.103,126.116,148.333v188.971H401.971V323.912c0-44.301-15.848-74.531-55.497-74.531 c-30.254,0-48.284,20.38-56.202,40.08c-2.897,7.012-3.602,16.861-3.602,26.711v184.047H177.124L177.124,500.219z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg></a>
                            </span>
                            <span>
                                <a href="<?php echo the_field("instagram", "120") ?>"><svg class="w-[15px] h-[16px]"
                                        viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>instagram [#167]</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs> </defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="Dribbble-Light-Preview"
                                                    transform="translate(-340.000000, -7439.000000)" fill="#000000">
                                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                                        <path
                                                            d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792"
                                                            id="instagram-[#167]"> </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container comment_form -->
        <div
            class="container_comments flex flex-col justify-center gap-5 px-[16px] vs:px-[17px] lg:flex-row md:max-w-[717px] 1md:max-w-[857px] lg:max-w-[100%] m-auto lg:px-[54px]">
            <div class="lg:w-[85%]">
                <h2 class="text-[23px] font-poppinsBold mb-[10px]">Comments</h2>
                <?php
                if (comments_open() || get_comments_number()):
                    // Query comments specific to the current post
                    $comments = get_comments(
                        array(
                            'post_id' => get_the_ID(),
                            'status' => 'approve'
                        )
                    );
                    if ($comments):
                        foreach ($comments as $comment): ?>
                            <div class="comment_content inline-block w-full mb-[30px] lg:mb-[49px]">
                                <div class="float-left mr-4"><?php echo get_avatar($comment, 80); ?></div>
                                <div>
                                    <div class="mb-[7px] flex flex-col vs:items-center vs:flex-row vs:gap-2">
                                        <span
                                            class="text-nowrap font-poppinsBold text-[19px]"><?php echo $comment->comment_author; ?></span>
                                        <span
                                            class="text-nowrap font-poppinsThin text-[13px] font-bold"><?php echo $comment->comment_date; ?></span>
                                    </div>
                                    <div>
                                        <p class="text-wrap font-thin text-secondaryColor">
                                            <?php echo $comment->comment_content; ?>
                                        </p>
                                    </div>
                                    <div>
                                        <?php if (comments_open() && get_option('thread_comments')): ?>
                                            <a class="comment-reply-link" href="#" data-comment-id="<?php echo $comment->comment_ID; ?>"
                                                onclick="toggleReplyForm(event)">Reply</a>
                                        <?php endif; ?>
                                    </div>
                                    <!-- Reply Form -->
                                    <div class="reply-form" id="reply-form-<?php echo $comment->comment_ID; ?>"
                                        style="display: none;">
                                        <?php comment_form(array('comment_parent' => $comment->comment_ID)); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;
                    endif;
                endif; ?>
            </div>
            <div class="right_side_comment_form">
                <?php
                $comments_args = array(
                    'label_submit' => 'Send',
                    'title_reply' => 'Leave a comment',
                    'comment_notes_after' => '',
                    'comment_notes_before' => '',
                    'fields' => array(
                        'author' => '<p class="comment-form-author"><label for="author">' . __('Name') . '</label> <input id="author" name="author" type="text" placeholder="Your name...*" aria-required="true"></p>',
                        'email' => '<p class="comment-form-email"><label for="email">' . __('Email') . '</label> <input id="email" name="email" type="email" placeholder="Your email...*" aria-required="true"></p>',
                        'url' => '', // Remove the website field
                    ),
                    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label><br /><textarea id="comment" name="comment" placeholder="Your Message*" aria-required="true" cols="17" rows="5"></textarea></p>',
                );
                comment_form($comments_args);
                ?>
                <button
                    class="bg-primaryColor hidden p-3 signuppage text-whiteColor transition duration-1000 hover:opacity-[0.9] mt-[12px] rounded-md"><a
                        href="<?php echo the_field("contactpageredirectlink", 18) ?>">Go to Signup Page</a>
                </button>
            </div>
        </div>

        <?php
        get_footer()
            ?>
    </div>
    <!-- sss -->


</body>

<script>
    function toggleReplyForm(event) {
        event.preventDefault();
        var commentID = event.target.getAttribute('data-comment-id');
        var replyForm = document.getElementById('reply-form-' + commentID);
        if (replyForm.style.display === 'none') {
            replyForm.style.display = 'block';
        } else {
            replyForm.style.display = 'none';
        }
    }


    var userLoggedIn = <?php echo is_user_logged_in() ? 'true' : 'false'; ?>;
    var signuppage = document.querySelector(".signuppage");


    if (!userLoggedIn) {
        signuppage.style.display = "block";

    }
</script>


</html>