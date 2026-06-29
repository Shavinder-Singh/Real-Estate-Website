<header class="header_small md:hidden w-full bg-white">
    <div class=" flex justify-between items-center p-[16px] vs:p-[17px] xl:p-[19px]">
        <h1 class="text-[21px] font-bold vs:text-[27px] text-ContentColor"><a
                href="<?php echo get_home_url(); ?>">Dashmesh <em class="text-primaryColor">Property</em></a></h1>
        <span class="relative">
            <svg class="svg-icon" onclick="OpenPopup()"
                style="width: 1.5em; height: 2em; vertical-align: middle; fill: currentColor; overflow: hidden;"
                viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M916.6 210.2H107.4c-17.7 0-32-14.3-32-32s14.3-32 32-32h809.2c17.7 0 32 14.3 32 32s-14.3 32-32 32zM714.3 544H107.4c-17.7 0-32-14.3-32-32s14.3-32 32-32h606.9c17.7 0 32 14.3 32 32s-14.3 32-32 32zM916.6 877.8H107.4c-17.7 0-32-14.3-32-32s14.3-32 32-32h809.2c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
            </svg>

            <!-- dropdown mobile -->
            <?php
            $nav_menu = wp_get_nav_menu_items('top-menu');
            ?>
            <div class="dropdown_navbar_mobile ">
                <div class="explore py-[14px] px-[76px] flex flex-col items-center gap-5">
                    <h2 class="bg-whiteColor  w-[210px] vs:w-[327px] p-[10px] flex items-center justify-between "
                        onclick="Close_submenu_popupbox()">Explore
                        <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 491.415 491.415" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
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
                    </h2>
                    <div class="dropdown_menu">
                        <ul class="dropdown_container">
                            <?php foreach ($nav_menu as $item): ?>
                                <?php if ($item->menu_item_parent == 0): ?>
                                    <li class="<?php echo $item->title ?> w-[210px] vs:w-[327px]">
                                        <a href="<?php echo $item->url ?>">
                                            <?php echo $item->title; ?>
                                            <?php if ($item->title === 'About'): ?>
                                                <span class="arrow_icon_about_mobile"><svg version="1.0"
                                                        xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                                        viewBox="0 0 24.000000 24.000000" preserveAspectRatio="xMidYMid meet">
                                                        <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)"
                                                            fill="black" stroke="none">
                                                            <path
                                                                d="M20 167 c0 -7 23 -35 50 -62 l50 -49 50 49 c28 27 50 55 50 62 0 10 -25 13 -100 13 -75 0 -100 -3 -100 -13z" />
                                                        </g>
                                                    </svg></span>
                                                <ul class="sub_menu_mobile mt-[12px] "> <!-- Add submenu here -->
                                                    <?php foreach ($nav_menu as $sub_item): ?>
                                                        <?php if ($sub_item->menu_item_parent == $item->ID): ?>
                                                            <li>
                                                                <a href="<?php echo $sub_item->url; ?>">
                                                                    <?php echo $sub_item->title; ?>
                                                                </a>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </span>
    </div>
</header>


<!-- big screen -->


<div class="header_laptop hidden md:flex w-[100%] m-auto  z-10 ">
    <div
        class="header_laptop_container w-full flex justify-between items-center p-5 vs:p-[17.9px] md:px-0 vs:pr-[0px]  max-w-[688px] 1md:max-w-[824px] m-auto px-0 lg:justify-between lg:max-w-none lg:px-[54px] ">
        <h1 class="text-[21px] font-bold vs:text-[27px] text-black uppercase"><a
                href="<?php echo get_home_url(); ?>">Dashmesh <em class="text-primaryColor">Property</em></a></h1>
        <span>
            <!-- dropdown laptop -->
            <?php
            $nav_menu = wp_get_nav_menu_items('top-menu');
            ?>
            <div class="dropdown_navbar_laptop ">
                <div class="">
                    <div class="dropdown_menu_laptop">
                        <ul class="dropdown_container_laptop flex items-center gap-2 lg:gap-9 text-black uppercase">
                            <?php foreach ($nav_menu as $item): ?>
                                <?php if ($item->menu_item_parent == 0): ?>
                                    <li class="<?php echo $item->title ?> text-white laptop_menu_items">
                                        <a href="<?php echo $item->url ?>">
                                            <?php echo $item->title; ?>
                                            <?php if ($item->title === 'About'): ?>
                                                <span class="arrow_icon_about_laptop"><svg version="1.0"
                                                        xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                                        viewBox="0 0 24.000000 24.000000" preserveAspectRatio="xMidYMid meet">
                                                        <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)"
                                                            fill="white" stroke="none">
                                                            <path
                                                                d="M20 167 c0 -7 23 -35 50 -62 l50 -49 50 49 c28 27 50 55 50 62 0 10 -25 13 -100 13 -75 0 -100 -3 -100 -13z" />
                                                        </g>
                                                    </svg></span>
                                                <ul
                                                    class="sub_menu_laptop absolute top-[34px] left-0 bg-whiteColor text-black flex flex-col justify-start px-[10px] pt-[10px] pb-[4px]">
                                                    <!-- Add submenu here -->
                                                    <?php foreach ($nav_menu as $sub_item): ?>
                                                        <?php if ($sub_item->menu_item_parent == $item->ID): ?>
                                                            <li class="gap-[10px] p-[10px] xl:pr-[20px]">
                                                                <a href="<?php echo $sub_item->url; ?>">
                                                                    <?php echo $sub_item->title; ?>
                                                                </a>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </span>
    </div>
</div>

<script>
    var dropdown_container = document.querySelector(".dropdown_container .About");
    var sub_menu_mobile = document.querySelector(".sub_menu_mobile");
    dropdown_container.addEventListener("click", () => {
        var arrow_icon_about_mobile = document.querySelector(".arrow_icon_about_mobile");
        arrow_icon_about_mobile.classList.toggle("rotateMobileArrow")
        sub_menu_mobile.classList.toggle("showSmallSubMenus")
    })
    //openPopup
    function OpenPopup() {
        let dropdown_navbar_mobile = document.querySelector(".dropdown_navbar_mobile");
        dropdown_navbar_mobile.classList.add("showPopup_Nav");
        dropdown_navbar_mobile.classList.remove("closePopup_Nav");
    }
    // close popupHeader
    function Close_submenu_popupbox() {
        let dropdown_navbar_mobile = document.querySelector(".dropdown_navbar_mobile");
        dropdown_navbar_mobile.classList.add("closePopup_Nav");
        dropdown_navbar_mobile.classList.remove("showPopup_Nav");
    }

    // -------------------------------------------
    // Laptop Popup
    var dropdown_navbar_laptop = document.querySelector(".dropdown_container_laptop .About");
    var arrow_icon_about_laptop = document.querySelector(".arrow_icon_about_laptop");

    console.log(dropdown_navbar_laptop)
    var sub_menu_laptop = document.querySelector(".sub_menu_laptop");
    dropdown_navbar_laptop.addEventListener("click", () => {
        arrow_icon_about_laptop.classList.toggle("rotateMobileArrow");
        sub_menu_laptop.classList.toggle("showlaptopSubMenus");
    });
    document.body.addEventListener("click", (event) => {
        if (!dropdown_navbar_laptop.contains(event.target)) {
            if (sub_menu_laptop.classList.contains("showlaptopSubMenus")) {
                sub_menu_laptop.classList.remove("showlaptopSubMenus");
                arrow_icon_about_laptop.classList.remove("rotateMobileArrow");
            }
        }
        else {

        }
    })
    // navbar mobile
    const navbar = document.querySelector(".header_small");
    var scrolltoTopMobile = 0;
    let scrolltimerMobile;
    window.addEventListener("scroll", () => {

        var { scrollY } = window;
        clearTimeout(scrolltimerMobile);

        if (scrollY > scrolltoTopMobile || scrollY == 0) {
            navbar.classList.remove("visible");

        }
        else {
            navbar.classList.add("visible");
            scrolltimerMobile = setTimeout(() => {
                navbar.classList.remove("visible");
            }, 200);
        }
        scrolltoTopMobile =
            scrollY <= 0 ? 0 : scrollY

    })

    // laptop scrolling
    var arrow_icon_about_laptopcolorchange = document.querySelector(".arrow_icon_about_laptop svg g path ");
    var dropdown_container_laptop = document.querySelectorAll(".laptop_menu_items ");
    const navbarLaptop = document.querySelector(".header_laptop");
    var scrolltoTop = 0;
    var scrolltimer;
    window.addEventListener("scroll", () => {

        var { scrollY } = window;
        clearTimeout(scrolltimer);
        if (scrollY > scrolltoTop || scrollY == 0) {
            navbarLaptop.classList.remove("visible");
            navbarLaptop.classList.remove("bg-white");
            arrow_icon_about_laptopcolorchange.classList.remove("show_black_arrow")

            dropdown_container_laptop.forEach((menu_item) => {
                menu_item.classList.add("text-white");
                menu_item.classList.remove("text-black");
            })
        }
        else {
            navbarLaptop.classList.add("visible");
            scrolltimer = setTimeout(() => {
                navbarLaptop.classList.remove("visible");
                navbarLaptop.classList.add("bg-white");
                dropdown_container_laptop.forEach((menu_item) => {
                    menu_item.classList.add("text-black");
                    menu_item.classList.remove("text-white");
                });
                arrow_icon_about_laptopcolorchange.classList.add("show_black_arrow")

            }, 800);

        }
        scrolltoTop =
            scrollY <= 0 ? 0 : scrollY

    })

</script>