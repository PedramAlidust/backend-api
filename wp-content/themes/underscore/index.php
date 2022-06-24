<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

get_header();
$options = get_option('my_options'); // unique id of the framework
?>

<main id="main">
    <header class="z-50 bg-white sticky top-0">
        <!-- ----- mobile header ----- -->
        <div class="px-3 py-2 flex flex-row justify-between items-center lg:hidden shadow-lg">
            <div>
                <button class="flex flex-row p-2 gap-x-2 items-center bg-gray-100 rounded text-xs">
                    <img src="/assets/icon/burger.svg">
                    <span>فهرست دسته بندی ها</span>
                </button>
            </div>
            <div>
                <button class="loginBtn flex flex-row items-center text-gray-50 px-3 py-2 shadow-lg gap-x-2 bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded">
                    <span class="flex">
                        <img src="/assets/icon/Person.svg">
                    </span>
                    <span>ورد/ثبت نام</span>
                </button>
            </div>
            <div class="absolute left-1/2 -translate-x-1/2 top-0">
                <div class="relative lg:hidden">
                    <img src="/assets/img/mobileBgLogo.svg">
                    <img src="/assets/img/mobileLogo.svg" class="absolute bottom-0">
                </div>
            </div>
        </div>
        <!-- ------- Desktop header ------------ -->
        <div class="hidden lg:flex flex-col sticky top-0 shadow-lg">
            <div class="bg-[#0F2846]">
                <div class="lg:container lg:px-4 py-3">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-row gap-x-2 items-center">
                            <span class="text-[#A57F6A]"><?php echo $options['opt-accordion-1']['opt-text-1'] ?></span>
                            <a href="tel:0912123456" class="px-2 py-1 rounded-lg bg-slate-400 text-white flex flex-row gap-2 items-center">
                                <span><?php echo $options['opt-accordion-1']['opt-text-2'] ?></span>
                                <img src="/assets/icon/Phone.svg">
                            </a>
                        </div>

                        <div class="flex flex-row gap-x-3 items-center">
                            <button class="searchBtn">
                                <img src="/assets/icon/Search-brown.svg">
                            </button>
                            <div class="w-px h-5 bg-gray-300"></div>
                            <button class="loginBtn flex flex-row items-center text-gray-50 px-3 py-2 shadow-lg gap-x-2 bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded">
                                <span class="flex">
                                    <img src="/assets/icon/Person.svg">
                                </span>
                                <span>ورود/ثبت نام</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- --------- nav links ------------ -->
            <nav class="relative flex flex-row items-center justify-between lg:container lg:px-4 py-3">
                <!-- ---- group one links ---- -->
                <div class="flex flex-row items-center gap-2">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-row items-center">
                            <span class="w-1 h-6 bg-[#DBCEC9] rounded-2xl"></span>
                            <span class="w-1 h-9 bg-[#F3EBE8] rounded-2xl"></span>
                        </div>
                        <a href="/" class="flex flex-row items-center gap-2 font-bold text-[#946E5F] border-b-2 border-[#946E5F] py-3 px-2">
                            <img src="/assets/icon/House-Brown.svg">
                            <span>صفحه اصلی</span>
                        </a>
                        <div class="flex flex-row items-center">
                            <span class="w-1 h-9 bg-[#F3EBE8] rounded-2xl"></span>
                            <span class="w-1 h-6 bg-[#DBCEC9] rounded-2xl"></span>
                        </div>
                    </div>

                    <div class="flex flex-row items-center">
                        <a href="/consult" class="flex flex-row items-center gap-2 text-[#0F2846] py-3 px-2">
                            <img src="/assets/icon/Headphone.svg">
                            <span>مشاوره</span>
                        </a>
                    </div>
                    <div class="flex flex-row items-center">
                        <a href="/blog" class="flex flex-row items-center gap-2 text-[#0F2846] py-3 px-2">
                            <img src="/assets/icon/Document.svg">
                            <span>مطالب خواندنی</span>
                        </a>
                    </div>
                    <div class="flex flex-row items-center">
                        <a href="/books" class="flex flex-row items-center gap-2 text-[#0F2846] py-3 px-2">
                            <img src="/assets/icon/Book.svg">
                            <span>معرفی کتاب</span>
                        </a>
                    </div>
                </div>

                <!-- ----- group two links ---- -->
                <div class="flex flex-row items-center gap-2">
                    <div class="flex flex-row items-center">
                        <a href="/exams" class="flex flex-row items-center gap-2 text-[#0F2846] py-3 px-2">
                            <img src="/assets/icon/exams.svg">
                            <span>آزمون ها</span>
                        </a>
                    </div>
                    <div class="flex flex-row items-center">
                        <a href="/comments" class="flex flex-row items-center gap-2 text-[#0F2846] py-3 px-2">
                            <img src="/assets/icon/coment.svg">
                            <span>پرسش و پاسخ</span>
                        </a>
                    </div>
                    <div class="flex flex-row items-center">
                        <a href="/about_us" class="flex flex-row items-center gap-2 text-[#0F2846] py-3 px-2">
                            <img src="/assets/icon/About.svg">
                            <span>درباره ما</span>
                        </a>
                    </div>
                    <div class="flex flex-row items-center">
                        <a href="/contact_us" class="flex flex-row items-center gap-2 text-[#0F2846] py-3 px-2">
                            <img src="/assets/icon/Contact.svg">
                            <span>ارتباط با ما</span>
                        </a>
                    </div>
                </div>

                <!-- ----- logo ------ -->
                <div class="absolute left-1/2 -translate-x-1/2 top-0">
                    <div class="relative">
                        <img src="/assets/img/bgLogo.svg">
                        <img src="/assets/img/logo.svg" class="absolute bottom-0 left-0 right-0 mx-auto">
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- --------------- Main content --------------- -->
    <main class="min-h-full ">
        <section class="snap-start">
            <div class="grid lg:grid-cols-2">
                <div class="pt-20 order-2 lg:order-1">
                    <div class="flex flex-col px-6 lg:px-20 items-center">
                        <h1 class="font-extrabold text-center lg:text-right text-4xl leading-10 mb-10 text-[#0F2846]">
                            <?php echo $options['opt-accordion-1']['opt-textarea']  ?>
                        </h1>
                        <div class="flex flex-row items-center mb-10">
                            <div class="flex flex-row items-center">
                                <span class="w-1 h-20 bg-[#DBCEC9] rounded-2xl"></span>
                                <span class="w-1 h-28 bg-[#F3EBE8] rounded-2xl"></span>
                            </div>
                            <div class="rounded-lg shadow-lg bg-white px-5 py-8">
                                <div class="relative">
                                    <h5 class="font-bold text-lg text-[#0F2846] mb-3">
                                        <?php echo $options['opt-accordion-1']['opt-text-3'] ?>
                                    </h5>
                                    <div class="h-px w-full bg-secondary-100"></div>
                                    <div class="h-px w-32 bg-gradient-to-l from-[#A57F6A] absolute bottom-0 right-0">
                                    </div>
                                </div>

                                <div class="flex flex-col gap-6 mt-4">
                                    <p class="text-gray-500 ">
                                        <?php echo $options['opt-accordion-1']['opt-textarea-1'] ?>
                                    </p>
                                    <div>
                                        <a href="<?php echo $options['opt-accordion-1']['opt-link-1']['url'] ?>" target="<?php echo $options['opt-accordion-1']['opt-link-1']['target'] ?>" class="text-gray-200 px-3 py-2 rounded-lg shadow-lg bg-gradient-to-r from-[#A57F6A] to-[#7F5A52]">
                                            <?php echo $options['opt-accordion-1']['opt-text-4'] ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center">
                                <span class="w-1 h-28 bg-[#F3EBE8] rounded-2xl"></span>
                                <span class="w-1 h-20 bg-[#DBCEC9] rounded-2xl"></span>
                            </div>
                        </div>

                        <div class="relative overflow-hidden max-h-40 w-full">
                            <div class="flex flex-row gap-x-10 items-center justify-evenly">
                                <div class="flex flex-col text-center items-center">
                                    <div class="p-5 mb-5 bg-white shadow-lg rounded-full transition-all duration-500 ">
                                        <img src='/assets/icon/Mbti.svg'>
                                    </div>
                                    <h3 class="text-base text-secondary-700 font-medium mb-3">
                                        <?php echo $options['opt-accordion-1']['opt-text-5'] ?>
                                    </h3>
                                </div>
                                <div class="flex flex-col text-center items-center">
                                    <div class="p-5 mb-5 bg-secondary-100 rounded-full transition-all duration-500 ">
                                        <img src='/assets/icon/consult.svg'>
                                    </div>
                                    <h3 class="text-base text-secondary-700 font-medium mb-3">
                                        <?php echo $options['opt-accordion-1']['opt-text-6'] ?>
                                    </h3>
                                </div>
                                <div class="flex flex-col text-center items-center">
                                    <div class="p-5 mb-5 bg-secondary-100 rounded-full transition-all duration-500 ">
                                        <img src='/assets/icon/education.svg'>
                                    </div>
                                    <h3 class="text-base text-secondary-700 font-medium mb-3">
                                        <?php echo $options['opt-accordion-1']['opt-text-7'] ?>
                                    </h3>
                                </div>
                            </div>
                            <div class="absolute top-10 -bottom-5 left-0 right-0 border-4 border-secondary-100 -z-20 rounded-lg">
                            </div>
                            <div class="absolute top-10 -bottom-5 left-2/3 right-0 border-r-4 border-t-4 border-[#A57F6A] -z-10 rounded-r-lg">
                            </div>
                        </div>
                    </div>
                    <div class="h-10 bg-[#7A554F] w-full"></div>

                </div>
                <div class="bg-slate-700 relative order-1 lg:order-2" style='min-height: 60vh; background:linear-gradient(to bottom , rgba(71,85,105,0.6) , rgba(71,85,105,0.6)), url(<?php echo $options['opt-accordion-1']['opt-media-2']['url'] ?>);background-size: cover; background-position: center; background-repeat: no-repeat'>
                    <div class="h-full flex z-10">
                        <img src="<?php echo $options['opt-accordion-1']['opt-media-1']['url'] ?>" alt="ashkan" class="mx-auto mt-auto h-3/4 w-auto object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- present section ----------- -->
        <section class="min-h-full snap-start scroll-mt-2">
            <div class="lg:container px-6 mt-20">
                <div class="flex flex-row items-center w-full">
                    <div class="flex flex-row items-center">
                        <span class="w-1 h-32 bg-[#DBCEC9] rounded-2xl"></span>
                        <span class="w-1 h-40 bg-[#F3EBE8] rounded-2xl"></span>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-4 grow">
                        <div class="relative">
                            <video id="present-video" src="
                            <?php echo $options['opt-accordion-1']['video']['url'] ?>" poster="<?php echo $options['opt-accordion-1']['video-poster']['url'] ?>" class="bg-gray-200 w-full h-64 rounded-lg object-cover">
                            </video>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
                                <button id="play-preset">
                                    <img src="/assets/icon/Play-button.svg">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span class="w-1 h-40 bg-[#F3EBE8] rounded-2xl"></span>
                        <span class="w-1 h-32 bg-[#DBCEC9] rounded-2xl"></span>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="grid grid-cols-12 items-center gap-4">
                        <div class="col-span-12 lg:col-span-9">
                            <h3 class="text-2xl font-extrabold text-[#0F2846] mb-5">
                                <?php echo $options['opt-accordion-1']['video-title'] ?>
                            </h3>
                            <p class="text-justify text-[#0F2846] mb-5">
                                <?php echo $options['opt-accordion-1']['video-description'] ?>
                            </p>
                            <button class="px-3 py-2 rounded-lg text-white bg-gradient-to-r from-[#A57F6A] to-[#7A554F]">
                                <?php echo $options['opt-accordion-1']['video-desc-button-text'] ?>
                            </button>
                        </div>
                        <div class="col-span-12 lg:col-span-3 flex justify-end">
                            <img src="<?php echo $options['opt-accordion-1']['video-desc-image']['url'] ?>" alt="Ashkan" class="h-60 w-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-10 bg-[#7A554F] w-full"></div>
        </section>


        <!-- --------- comments section --------------- -->
        <section class="min-h-full snap-start scroll-mt-2">
            <div class="lg:container lg:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:mt-20 lg:items-center gap-8 lg:justify-between">
                    <div class="relative  lg:rounded-t-3xl" style="min-height: 70vh; background:linear-gradient(to bottom , #0e233ee5 , #0e233ee1), url(/assets/img/business-team-manager.png);background-size: cover; background-position: center; background-repeat: no-repeat">
                        <div class="px-7 py-14">
                            <h3 class="font-bold text-2xl text-[#C3A695] border-b border-secondary-100 pb-4">
                                <?php echo $options['opt-accordion-1']['testimonial-title'] ?>
                            </h3>
                            <p class="text-white leading-8 mt-3 text-justify">
                                <?php echo $options['opt-accordion-1']['testimonial-desc'] ?>
                            </p>
                        </div>

                        <div class="absolute bottom-0 right-0 lg:-right-14 hidden md:block">
                            <img src="<?php echo $options['opt-accordion-1']['testimonial-desc-image-right']['url'] ?>" alt="ashkan" class="w-44 h-fit object-cover">
                        </div>
                        <div class="absolute bottom-6 left-3">
                            <img src="<?php echo $options['opt-accordion-1']['testimonial-desc-image-left']['url'] ?>">
                        </div>

                    </div>

                    <div class="flex flex-col h-full px-4">
                        <div class="swiper reviewSwiper w-full">
                            <div class="swiper-wrapper">
                                <!----  swiper-slide ---->
                                <?php foreach ($options['opt-accordion-1']['testimonial-group'] as $testimonial) {
                                    echo
                                    '<div class="swiper-slide">
                                       <div class="flex flex-row items-center w-full">
                                        <div class="flex flex-row items-center">
                                            <span class="w-1 h-32 bg-[#DBCEC9] rounded-2xl"></span>
                                            <span class="w-1 h-40 bg-[#F3EBE8] rounded-2xl"></span>
                                        </div>
                                        <div class="bg-white shadow-lg rounded-lg p-4 grow">
                                            <div class="flex flex-row justify-between items-center">
                                                <div>
                                                    <h5 class="text-[#7A554F] font-bold text-sm mb-3">'
                                        .
                                        $testimonial['author-name']
                                        .
                                        '</h5>
                                                    <p class="text-secondary-500 text-xs font-bold">'
                                        .
                                        $testimonial['author-position']
                                        .
                                        '
                                                    </p>
                                                </div>
                                                <div>
                                                    <img src="/assets/icon/Conversation.svg">
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <div class="h-px w-full bg-secondary-100"></div>
                                                <div class="h-px w-32 bg-gradient-to-l from-[#7F5A52] absolute bottom-0 right-0">
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-sm text-secondary-500 leading-6 text-justify mb-3">'
                                        .
                                        $testimonial['author-desc']
                                        .
                                        '</p>
                                                <div class="flex flex-row items-center gap-3" dir="ltr">
                                                    <div>
                                                        <button id="play-voice" class="bg-[#0F2846] rounded-lg px-3 py-2 hover:opacity-90">
                                                            <img src="/assets/icon/Mic.svg">
                                                        </button>
                                                    </div>
                                                    <div id="waveform" class="basis-3/4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row items-center">
                                            <span class="w-1 h-40 bg-[#F3EBE8] rounded-2xl"></span>
                                            <span class="w-1 h-32 bg-[#DBCEC9] rounded-2xl"></span>
                                        </div>
                                    </div>
                                </div>';
                                } ?>
                            </div>
                        </div>

                        <div class="relative max-h-48 w-full mt-auto flex flex-col">
                            <div class="flex flex-row gap-x-10 items-center justify-evenly">
                                <div class="person p-2 mb-5 bg-white rounded-full border border-secondary-100">
                                    <img src='<?php echo $options['opt-accordion-1']['testimonial-author-image-left']['url'] ?>' alt="person one" class="rounded-full h-full w-full">
                                </div>
                                <div class="person p-2 mb-5 bg-secondary-100 border rounded-full transition-all duration-500 border-secondary-100">
                                    <img src='<?php echo $options['opt-accordion-1']['testimonial-author-image-center']['url'] ?>' alt="person two" class="rounded-full h-full w-full">
                                </div>
                                <div class="person p-2 mb-5 bg-secondary-100 border rounded-full transition-all duration-500 border-secondary-100">
                                    <img src='<?php echo $options['opt-accordion-1']['testimonial-author-image-right']['url'] ?>' alt="person three" class="rounded-full h-full w-full">
                                </div>
                            </div>
                            <div class="flex gap-2 justify-center items-center mb-3">
                                <button class="slidePrev-review-btn"><img src='/assets/icon/right-arrow.svg'></button>
                                <span class="swiper-review-pagination" style="width:fit-content !important"></span>
                                <button class="slideNext-review-btn"><img src='/assets/icon/left-arrow.svg'></button>
                            </div>
                            <div class="absolute top-12 -bottom-5 left-0 right-0 border-4 border-secondary-100 -z-20 rounded-lg">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="h-10 bg-[#7A554F] w-full"></div>
        </section>


        <!-- ----------- co-worker section ----------- -->
        <section id="co-worker-section" class="min-h-full snap-start scroll-mt-2">
            <div class="lg:container px-6 pt-20 mb-20">
                <div class="flex flex-row justify-between items-center">
                    <h3 class="font-bold text-2xl text-[#0F2846]"><?php echo $options['opt-accordion-1']['brand-txt-title'] ?></h3>
                    <button class="px-3 py-2 hidden lg:inline-block text-white text-xs bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded-lg hover:opacity-90">
                        درخواست مشاوره
                    </button>
                </div>

                <div class="relative my-5">
                    <div class="h-px w-full bg-secondary-100"></div>
                    <div class="h-px w-32 bg-gradient-to-l from-[#7F5A52] absolute bottom-0 right-0">
                    </div>
                </div>

                <div>
                    <!-- ----- mobile view ---- -->
                    <div class="grid sm:hidden grid-cols-12 gap-2 items-center relative">
                        <!--  ----- row 1 ----- -->
                        <div class="col-span-4">
                            <div class="flex justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="bg-secondary-100 rounded-xl px-6 py-4">
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="bg-secondary-100 rounded-xl px-6 py-4">
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="bg-secondary-100 rounded-xl px-6 py-4">
                            </div>
                        </div>
                        <!-- ----- row 2 ----- -->
                        <div class="col-span-3">
                            <div class="flex  w-full h-full justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="rotate-90 bg-secondary-100 rounded-xl h-16 ">
                            </div>
                        </div>
                        <div class="col-span-6">
                            <div class="bg-white shadow-lg rounded-xl flex gap-2 justify-center items-center h-24 w-full">
                                <img src="<?php echo $options['opt-accordion-1']['right-badge-icon']['url'] ?>" alt="Logo">
                                <div class="flex flex-col gap-2 grow">
                                    <h5 class="font-bold text-[#0F2846]"><?php echo $options['opt-accordion-1']['right-badge-txt'] ?></h5>
                                    <h5 class="font-bold text-[#946E5F]">+<span class="load-number"><?php echo $options['opt-accordion-1']['right-badge-number'] ?></span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex  w-full h-full justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="rotate-90 bg-secondary-100 rounded-xl h-16 ">
                            </div>
                        </div>
                        <!-- --- row 3 ----- -->
                        <div class="col-span-3">
                            <div class="flex  w-full h-full justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="rotate-90 bg-secondary-100 rounded-xl h-16 w-28 ">
                            </div>
                        </div>
                        <div class="col-span-6">
                            <div class="bg-white shadow-lg rounded-xl flex gap-2 justify-center items-center h-24 w-full">
                                <img src="<?php echo $options['opt-accordion-1']['right-badge-icon']['url'] ?>" alt="Logo">
                                <div class="flex flex-col gap-2 grow">
                                    <h5 class="font-bold text-[#0F2846]"><?php echo $options['opt-accordion-1']['right-badge-txt'] ?></h5>
                                    <h5 class="font-bold text-[#946E5F]">+<span class="load-number"><?php echo $options['opt-accordion-1']['right-badge-number'] ?></span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex  w-full h-full justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="rotate-90 bg-secondary-100 rounded-xl h-16 w-28 ">
                            </div>
                        </div>
                        <!-- ------ row 4 ------- -->
                        <div class="col-span-3">
                            <div class="flex  w-full h-full justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="rotate-90 bg-secondary-100 rounded-xl h-16 w-28 ">
                            </div>
                        </div>
                        <div class="col-span-6">
                            <div class="bg-white shadow-lg rounded-xl flex gap-2 justify-center items-center h-24 w-full">
                                <img src="<?php echo $options['opt-accordion-1']['left-badge-icon']['url'] ?>" alt="Logo">
                                <div class="flex flex-col gap-2 grow">
                                    <h5 class="font-bold text-[#0F2846]"><?php echo $options['opt-accordion-1']['left-badge-txt'] ?></h5>
                                    <h5 class="font-bold text-[#946E5F]">+<span class="load-number"><?php echo $options['opt-accordion-1']['left-badge-number'] ?></span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex  w-full h-full justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="rotate-90 bg-secondary-100 rounded-xl h-16 w-28 ">
                            </div>
                        </div>
                        <!-- ------ row 5 ------- -->
                        <div class="col-span-4">
                            <div class="flex justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="bg-secondary-100 rounded-xl px-6 py-4">
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="bg-secondary-100 rounded-xl px-6 py-4">
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex justify-center items-center">
                                <img src="/assets/img/logo-16.svg" alt="Logo" class="bg-secondary-100 rounded-xl px-6 py-4">
                            </div>
                        </div>

                        <!-- ---- brown box --- -->
                        <div class="absolute w-16 h-64 top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 bg-[#F3EBE8]">
                        </div>
                    </div>

                    <div class="flex justify-center items-center sm:hidden">
                        <div>
                            <a href="/" class="px-3 py-2 hidden lg:inline-block text-white text-xs bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded-lg hover:opacity-90">
                                درخواست مشاوره
                            </a>
                        </div>
                    </div>

                    <!-- ---------- Desktop view ----------- -->
                    <div class="relative hidden sm:grid grid-cols-5 grid-rows-4 lg:gap-x-5 lg:gap-y-3 sm:gap-2">
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <!-- ----- row 2 ----- -->
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="row-span-2">
                            <div class="flex flex-col gap-2 bg-white shadow-lg rounded-xl w-full h-full justify-center items-center">
                                <img src="<?php echo $options['opt-accordion-1']['right-badge-icon']['url'] ?>" alt="Logo" class="">
                                <h5 class="font-bold text-[#0f2846]"><?php echo $options['opt-accordion-1']['right-badge-txt'] ?></h5>
                                <h5 class="font-bold text-[#946E5F]">+<span class="load-number"><?php echo $options['opt-accordion-1']['right-badge-number'] ?></span></h5>
                            </div>
                        </div>
                        <div class="row-span-2">
                            <div class="flex flex-col gap-2 bg-white shadow-lg rounded-xl w-full h-full justify-center items-center">
                                <img src="<?php echo $options['opt-accordion-1']['center-badge-icon']['url'] ?>" alt="Logo" class="">
                                <h5 class="font-bold text-[#0F2846]"><?php echo $options['opt-accordion-1']['center-badge-txt'] ?></h5>
                                <h5 class="font-bold text-[#946E5F]">+<span class="load-number"><?php echo $options['opt-accordion-1']['center-badge-number'] ?></span></h5>
                            </div>
                        </div>
                        <div class="row-span-2">
                            <div class="flex flex-col gap-2 bg-white shadow-lg rounded-xl w-full h-full justify-center items-center">
                                <img src="<?php echo $options['opt-accordion-1']['left-badge-icon']['url'] ?>" alt="Logo" class="">
                                <h5 class="font-bold text-[#0F2846]"><?php echo $options['opt-accordion-1']['left-badge-txt'] ?></h5>
                                <h5 class="font-bold text-[#946E5F]">+<span class="load-number"><?php echo $options['opt-accordion-1']['left-badge-number'] ?></span></h5>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>

                        <!-- ----- row 3 ----- -->
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <!-- ------ row 4 ------ -->
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>
                        <div class="">
                            <div class="flex bg-secondary-100 rounded-xl w-full h-16 justify-center items-center">
                                <img src="/assets/img/logo-16-lg.svg" alt="Logo" class="">
                            </div>
                        </div>

                        <!--  ------ brown box ----- -->
                        <div class="absolute w-4/12 h-16 top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 bg-[#F3EBE8]">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- -------- question section ---------- -->
        <section class="min-h-full snap-start scroll-mt-2">
            <div class="lg:container px-6 pt-20 mb-20">
                <div class="flex flex-row justify-between items-center">
                    <h3 class="font-bold text-2xl text-[#0F2846]"><?php echo $options['opt-accordion-1']['faq-title'] ?></h3>
                    <a href="<?php echo $options['opt-accordion-1']['faq-btn-link']['url'] ?>" class="px-3 py-2 hidden shadow-lg lg:inline-block text-white text-xs bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded-lg hover:opacity-90">
                        <?php echo $options['opt-accordion-1']['faq-btn-txt'] ?>
                    </a>
                </div>

                <div class="relative mt-5 mb-8">
                    <div class="h-px w-full bg-secondary-100"></div>
                    <div class="h-px w-32 bg-gradient-to-l from-[#7F5A52] absolute bottom-0 right-0">
                    </div>
                </div>

                <div class="grid md:grid-cols-12 items-start gap-5">
                    <div class="order-2 md:order-1 md:col-span-7">
                        <div class="flex flex-row items-center w-full mb-7">
                            <div class="flex flex-row items-center">
                                <span class="w-1 h-32 bg-[#DBCEC9] rounded-2xl"></span>
                                <span class="w-1 h-40 bg-[#F3EBE8] rounded-2xl"></span>
                            </div>
                            <div class="accordion bg-white shadow-lg rounded-lg py-4 grow">
                                <?php foreach ($options['opt-accordion-1']['faq-accordion'] as $no => $faq) {
                                    echo '<div class="contentBx active">
                                    <button class="label w-full p-4 flex flex-row gap-3 items-center border-b last:border-b-0">
                                        <img src="/assets/icon/Plus.svg" class="show">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-square hide fill-[#7A554F]" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                        </svg>
                                        <p class="font-bold text-[#0F2846]"><span class="text-[#7A554F]">'
                                        .
                                        ++$no
                                        .
                                        '.</span> ' .
                                        $faq['faq-question']
                                        .
                                        '</p>
                                    </button>
                                    <div class="content bg-secondary-50 shadow-inner">
                                        <p class="text-secondary-500 text-sm px-4">'
                                        .
                                        $faq['faq-answer']
                                        .
                                        '</p>
                                  </div>
                                 </div>';
                                }
                                ?>
                            </div>
                            <div class="flex flex-row items-center">
                                <span class="w-1 h-40 bg-[#F3EBE8] rounded-2xl"></span>
                                <span class="w-1 h-32 bg-[#DBCEC9] rounded-2xl"></span>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 md:order-2 md:col-span-5 m-auto">
                        <img src="<?php echo $options['opt-accordion-1']['faq-image']['url'] ?>" alt="question" class="w-auto h-56 md:h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- education content section ---------- -->
        <section class="min-h-full snap-start scroll-mt-2 overflow-hidden">
            <div class="lg:container px-6 pt-20 mb-6">
                <div class="flex flex-row justify-between items-center">
                    <h3 class="font-bold text-2xl text-[#0F2846]">
                        <?php echo $options['opt-accordion-1']['articles-txt'] ?>
                    </h3>
                    <a href="<?php echo $options['opt-accordion-1']['article-btn-link']['url'] ?>" class="px-3 py-2 hidden shadow-lg lg:inline-block text-white text-xs bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded-lg hover:opacity-90">
                        <?php echo $options['opt-accordion-1']['article-btn-txt'] ?>
                    </a>
                </div>

                <div class="relative mt-5 mb-8">
                    <div class="h-px w-full bg-secondary-100"></div>
                    <div class="h-px w-32 bg-gradient-to-l from-[#7F5A52] absolute bottom-0 right-0">
                    </div>
                </div>


                <div class="tab-wrap">
                    <div class='flex flex-col lg:flex-row gap-5 '>
                        <!-- -------- tabs ---------- -->
                        <div class='w-full lg:basis-1/4 lg:max-h-96'>
                            <div class="swiper tabSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide max-h-96">
                                        <div class="flex flex-row items-center w-full ">
                                            <div class="flex flex-row items-center">
                                                <span class="w-1 h-9 bg-[#DBCEC9] rounded-2xl"></span>
                                                <span class="w-1 h-14 bg-[#F3EBE8] rounded-2xl"></span>
                                            </div>
                                            <div class="shadow-lg rounded-lg p-4 grow cursor-pointer tablink tab-active" onclick="openContentTab(this)" data-target="tabContentOne">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img src="/assets/icon/article.svg" class="basis-1/4">
                                                    <span class="text-xs lg:text-base font-bold grow basis-3/4 whitespace-nowrap">
                                                        <?php echo $options['opt-accordion-1']['articles-txt-top'] ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <span class="w-1 h-14 bg-[#F3EBE8] rounded-2xl"></span>
                                                <span class="w-1 h-9 bg-[#DBCEC9] rounded-2xl"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide max-h-96">
                                        <div class="flex flex-row items-center w-full ">
                                            <div class="flex flex-row items-center">
                                                <span class="w-1 h-9 bg-[#DBCEC9] rounded-2xl"></span>
                                                <span class="w-1 h-14 bg-[#F3EBE8] rounded-2xl"></span>
                                            </div>
                                            <div class="shadow-lg rounded-lg p-4 grow cursor-pointer tablink" onclick="openContentTab(this)" data-target="tabContentTwo">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img src="/assets/icon/EducationVideo.svg" class="basis-1/4">
                                                    <span class="text-xs lg:text-base font-bold grow basis-3/4 whitespace-nowrap">
                                                        <?php echo $options['opt-accordion-1']['articles-txt-center'] ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex flex-row items-center  ">
                                                <span class="w-1 h-14 bg-[#F3EBE8] rounded-2xl"></span>
                                                <span class="w-1 h-9 bg-[#DBCEC9] rounded-2xl"></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="swiper-slide max-h-96">
                                        <div class="flex flex-row items-center w-full ">
                                            <div class="flex flex-row items-center">
                                                <span class="w-1 h-9 bg-[#DBCEC9] rounded-2xl"></span>
                                                <span class="w-1 h-14 bg-[#F3EBE8] rounded-2xl"></span>
                                            </div>
                                            <div class="shadow-lg rounded-lg p-4 grow cursor-pointer tablink" onclick="openContentTab(this)" data-target="tabContentThree">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img src="/assets/icon/EducationBooks.svg" class="basis-1/4">
                                                    <span class="text-xs lg:text-base font-bold grow basis-3/4 whitespace-nowrap">
                                                        <?php echo $options['opt-accordion-1']['articles-txt-bottom'] ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <span class="w-1 h-14 bg-[#F3EBE8] rounded-2xl"></span>
                                                <span class="w-1 h-9 bg-[#DBCEC9] rounded-2xl"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ------ tab one contents --------- -->
                        <div class="lg:basis-3/4 px-8 mt-5 relative tabcontent active" id="tabContentOne">
                            <div class="swiper contentSwiper relative" style="padding:50px 0 !important">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="rounded-lg shadow-lg bg-white p-2">
                                            <div class="relative -top-7">
                                                <img src="<?php echo $options['opt-accordion-1']['contact-image']['url'] ?>" alt="bg" class="rounded-lg w-full h-fit object-cover">
                                                <button class="absolute left-3 top-2">
                                                    <img src="/assets/icon/Save.svg">
                                                </button>
                                            </div>
                                            <div class="flex flex-col gap-3 items-start text-start">
                                                <h3 class="text-sm font-bold text-[#0F2846]">
                                                    لورم ایپسوم متن ساختگی
                                                </h3>
                                                <p class="text-[10px] text-gray-400">لورم ایپسوم متن ساختگی با تولید
                                                    سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها
                                                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                                </p>

                                                <div class="flex flex-row w-full justify-between items-center">
                                                    <button class="flex items-center gap-2 text-sm font-bold text-[#946E5F]">
                                                        <span>ادامه مطلب</span>
                                                        <span>
                                                            <img src="/assets/icon/LeftArrowBrown.svg">

                                                        </span>
                                                    </button>

                                                    <div class="flex items-center gap-1">
                                                        <h5 class="text-xl font-bold text-gray-500">8</h5>
                                                        <p class="text-xs text-gray-500">دقیقه <br />مطالعه</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg shadow-lg bg-white p-2">
                                            <div class="relative -top-7">
                                                <img src="/assets/img/business-man-pushing.png" alt="bg" class="rounded-lg w-full h-fit object-cover">
                                                <button class="absolute left-3 top-2">
                                                    <img src="/assets/icon/Save.svg">
                                                </button>
                                            </div>
                                            <div class="flex flex-col gap-3 items-start text-start">
                                                <h3 class="text-sm font-bold text-[#0F2846]">
                                                    لورم ایپسوم متن ساختگی
                                                </h3>
                                                <p class="text-[10px] text-gray-400">لورم ایپسوم متن ساختگی با تولید
                                                    سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها
                                                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                                </p>

                                                <div class="flex flex-row w-full justify-between items-center">
                                                    <button class="flex items-center gap-2 text-sm font-bold text-[#946E5F]">
                                                        <span>ادامه مطلب</span>
                                                        <span>
                                                            <img src="/assets/icon/LeftArrowBrown.svg">

                                                        </span>
                                                    </button>

                                                    <div class="flex items-center gap-1">
                                                        <h5 class="text-xl font-bold text-gray-500">8</h5>
                                                        <p class="text-xs text-gray-500">دقیقه <br />مطالعه</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg shadow-lg bg-white p-2">
                                            <div class="relative -top-7">
                                                <img src="/assets/img/business-man-pushing.png" alt="bg" class="rounded-lg w-full h-fit object-cover">
                                                <button class="absolute left-3 top-2">
                                                    <img src="/assets/icon/Save.svg">
                                                </button>
                                            </div>
                                            <div class="flex flex-col gap-3 items-start text-start">
                                                <h3 class="text-sm font-bold text-[#0F2846]">
                                                    لورم ایپسوم متن ساختگی
                                                </h3>
                                                <p class="text-[10px] text-gray-400">لورم ایپسوم متن ساختگی با تولید
                                                    سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها
                                                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                                </p>

                                                <div class="flex flex-row w-full justify-between items-center">
                                                    <button class="flex items-center gap-2 text-sm font-bold text-[#946E5F]">
                                                        <span>ادامه مطلب</span>
                                                        <span>
                                                            <img src="/assets/icon/LeftArrowBrown.svg">

                                                        </span>
                                                    </button>

                                                    <div class="flex items-center gap-1">
                                                        <h5 class="text-xl font-bold text-gray-500">8</h5>
                                                        <p class="text-xs text-gray-500">دقیقه <br />مطالعه</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="rounded-lg shadow-lg bg-white p-2">
                                            <div class="relative -top-7">
                                                <img src="/assets/img/business-man-pushing.png" alt="bg" class="rounded-lg w-full h-fit object-cover">
                                                <button class="absolute left-3 top-2">
                                                    <img src="/assets/icon/Save.svg">
                                                </button>
                                            </div>
                                            <div class="flex flex-col gap-3 items-start text-start">
                                                <h3 class="text-sm font-bold text-[#0F2846]">
                                                    لورم ایپسوم متن ساختگی
                                                </h3>
                                                <p class="text-[10px] text-gray-400">لورم ایپسوم متن ساختگی با تولید
                                                    سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها
                                                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                                </p>

                                                <div class="flex flex-row w-full justify-between items-center">
                                                    <button class="flex items-center gap-2 text-sm font-bold text-[#946E5F]">
                                                        <span>ادامه مطلب</span>
                                                        <span>
                                                            <img src="/assets/icon/LeftArrowBrown.svg">

                                                        </span>
                                                    </button>

                                                    <div class="flex items-center gap-1">
                                                        <h5 class="text-xl font-bold text-gray-500">8</h5>
                                                        <p class="text-xs text-gray-500">دقیقه <br />مطالعه</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ----- pagination ---- -->
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- -------- navigation buttons ------- -->
                            <div class="absolute bottom-1/2 -translate-y-1/2 -left-2 lg:bottom-0 lg:left-1/2 lg:-translate-x-20 z-20">
                                <button class="slideNext-btn">
                                    <img src="/assets/icon/left-arrow.svg">
                                </button>
                            </div>
                            <div class="absolute bottom-1/2 -translate-y-1/2 -right-2 lg:bottom-0 lg:right-1/2 lg:translate-x-20 z-20">
                                <button class="slidePrev-btn">
                                    <img src="/assets/icon/right-arrow.svg">
                                </button>
                            </div>
                            <div class="absolute top-64 -bottom-60 left-0 right-0 border-4 border-secondary-100 -z-20 rounded-lg">
                            </div>
                        </div>
                        <!-- ------ tab two contents --------- -->
                        <div class="lg:basis-3/4 px-8 mt-5 relative tabcontent" id="tabContentTwo">
                            <div class="swiper contentSwiper relative" style="padding:50px 0 !important">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="rounded-lg bg-white shadow-lg p-2">
                                            <div class="relative -top-7">
                                                <img src="/assets/img/business-man-pushing.png" alt="bg" class="rounded-xl w-full h-fit object-cover">
                                                <button class="absolute left-3 top-2">
                                                    <img src="/assets/icon/Save.svg">
                                                </button>

                                                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2">
                                                    <button class="p-1 bg-slate-100 rounded-full border-2 border-gray-200">
                                                        <img src="/assets/icon/Play.svg">
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-3 items-start text-start">
                                                <h3 class="text-sm font-bold text-[#0F2846]">
                                                    لورم ایپسوم متن ساختگی
                                                </h3>
                                                <p class="text-[10px] text-gray-400">لورم ایپسوم متن ساختگی با تولید
                                                    سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها
                                                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                                </p>

                                                <div class="flex flex-row w-full justify-between items-center">
                                                    <button class="flex items-center gap-2 text-sm font-bold text-[#946E5F]">
                                                        <span>ادامه مطلب</span>
                                                        <span>
                                                            <img src="/assets/icon/LeftArrowBrown.svg">

                                                        </span>
                                                    </button>

                                                    <div class="flex items-center gap-1">
                                                        <h5 class="text-xl font-bold text-gray-500">8</h5>
                                                        <p class="text-xs text-gray-500">دقیقه <br />ویدیو</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- ----- pagination ---- -->
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- -------- navigation buttons ------- -->
                            <div class="absolute bottom-1/2 -translate-y-1/2 -left-2 lg:bottom-0 lg:left-1/2 lg:-translate-x-20 z-20">
                                <button class="slideNext-btn">
                                    <img src="/assets/icon/left-arrow.svg">
                                </button>
                            </div>
                            <div class="absolute bottom-1/2 -translate-y-1/2 -right-2 lg:bottom-0 lg:right-1/2 lg:translate-x-20 z-20">
                                <button class="slidePrev-btn">
                                    <img src="/assets/icon/right-arrow.svg">
                                </button>
                            </div>
                            <div class="absolute top-64 -bottom-60 left-0 right-0 border-4 border-secondary-100 -z-20 rounded-lg">
                            </div>
                        </div>
                        <!-- ------ tab three contents --------- -->
                        <div id="tabContentThree" class="tabcontent lg:basis-3/4 px-8 mt-5 relative">
                            <div class="swiper contentSwiper relative" style="padding:50px 0 !important">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="rounded-lg bg-white shadow-lg p-2">
                                            <div class="relative -top-7">
                                                <img src="/assets/img/Shot 0472 2.png" alt="book" class="rounded-xl w-full h-fit object-cover">
                                                <button class="absolute left-3 top-2">
                                                    <img src="/assets/icon/Save.svg">
                                                </button>
                                            </div>
                                            <div class="flex flex-col gap-3 items-start text-start">
                                                <h3 class="text-sm font-bold text-[#0F2846]">
                                                    لورم ایپسوم متن ساختگی
                                                </h3>
                                                <p class="text-[10px] text-gray-400">لورم ایپسوم متن ساختگی با تولید
                                                    سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها
                                                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                                </p>

                                                <div class="flex flex-row w-full justify-between items-center">
                                                    <button class="flex items-center gap-2 text-sm font-bold text-[#946E5F]">
                                                        <span>ادامه مطلب</span>
                                                        <span>
                                                            <img src="/assets/icon/LeftArrowBrown.svg">

                                                        </span>
                                                    </button>

                                                    <div class="flex items-center gap-1">
                                                        <h5 class="text-xl font-bold text-gray-500">100</h5>
                                                        <p class="text-xs text-gray-500">صفحه <br />کتاب</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- ----- pagination ---- -->
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- -------- navigation buttons ------- -->
                            <div class="absolute bottom-1/2 -translate-y-1/2 -left-2 lg:bottom-0 lg:left-1/2 lg:-translate-x-20 z-20">
                                <button class="slideNext-btn">
                                    <img src="/assets/icon/left-arrow.svg">
                                </button>
                            </div>
                            <div class="absolute bottom-1/2 -translate-y-1/2 -right-2 lg:bottom-0 lg:right-1/2 lg:translate-x-20 z-20">
                                <button class="slidePrev-btn">
                                    <img src="/assets/icon/right-arrow.svg">
                                </button>
                            </div>
                            <div class="absolute top-64 -bottom-60 left-0 right-0 border-4 border-secondary-100 -z-20 rounded-lg">
                            </div>
                        </div>
                        <!-- ///////// -->

                        <!-- ------- mobile show all education content button -------- -->
                        <div class="flex justify-center items-center">
                            <a href="/" class="px-3 py-2 shadow-lg lg:hidden text-white text-xs bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded-lg hover:opacity-90">
                                همه محتوا آموزشی
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="h-10 bg-[#7A554F] w-full"></div>
        </section>


    </main>
    <!-- -------- footer ---------- -->
    <footer class="mt-auto">
        <div class="lg:container lg:px-6 flex flex-col justify-center">
            <div class="mt-10 mb-8 flex justify-center items-center">
                <img src="<?php echo $options['opt-accordion-1']['contact-image']['url'] ?>" alt="footer" class="max-w-max max-h-fit object-cover">
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">
                <!-- --------- address ---------- -->
                <div class="col-span-1 flex flex-row lg:flex-col items-center">
                    <div class="basis-1/6 lg:hidden">
                        <div class="h-14 w-full bg-[#946E5F]"></div>
                    </div>
                    <div class="basis-4/6 lg:w-full">
                        <div class="rounded-lg h-28 shadow-lg border border-secondary-100 bg-white py-3 px-2 flex items-center gap-2">
                            <div class="w-full rounded bg-[#FCFAF9] p-3 basis-1/4 flex items-center justify-center">
                                <img src="/assets/icon/Footer-Address.svg">
                            </div>
                            <div class="basis-3/4 flex flex-col gap-3">
                                <h5 class="text-sm text-[#202E40] font-bold"><?php echo $options['opt-accordion-1']['contact-location-txt'] ?></h5>
                                <p class="text-xs text-gray-600 leading-4">
                                    <?php echo $options['opt-accordion-1']['contact-location-desc'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:flex justify-center items-center">
                        <div class="h-10 w-32 bg-[#946E5F]"></div>
                    </div>
                </div>
                <!-- -------- phone ----------- -->
                <div class="col-span-1 flex flex-row lg:flex-col items-center">
                    <div class="basis-1/6 lg:hidden"></div>
                    <div class="basis-4/6 lg:w-full">
                        <div class="rounded-lg h-28 shadow-lg border border-secondary-100 bg-white py-3 px-2 flex items-center gap-2">
                            <div class="w-full rounded bg-[#FCFAF9] p-3 basis-1/4 flex items-center justify-center">
                                <img src="/assets/icon/Footer-Phone.svg">
                            </div>
                            <div class="basis-3/4 flex flex-col gap-3">
                                <h5 class="text-sm text-[#202E40] font-bold">
                                    <?php echo $options['opt-accordion-1']['contact-num-txt'] ?>
                                </h5>
                                <p class="text-xs text-gray-600 self-end">
                                    <?php echo $options['opt-accordion-1']['contact-num-number'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="basis-1/6 lg:flex lg:justify-center lg:items-center">
                        <div class="h-14 w-full bg-[#946E5F] lg:h-10 lg:w-32"></div>
                    </div>
                </div>
                <!-- -------- Email ----------- -->
                <div class="col-span-1 flex flex-row lg:flex-col items-center">
                    <div class="basis-1/6 lg:hidden">
                        <div class="h-14 w-full bg-[#946E5F]"></div>
                    </div>
                    <div class="basis-4/6 lg:w-full">
                        <div class="rounded-lg h-28 shadow-lg border border-secondary-100 bg-white py-3 px-2 flex items-center gap-2">
                            <div class="w-full rounded bg-[#FCFAF9] p-3 basis-1/4 flex items-center justify-center">
                                <img src="/assets/icon/Footer-Email.svg">
                            </div>
                            <div class="basis-3/4 flex flex-col gap-3 justify-between">
                                <h5 class="text-sm text-[#202E40] font-bold">
                                    <?php echo $options['opt-accordion-1']['contact-email-txt'] ?>
                                </h5>
                                <p class="text-xs text-gray-600 self-end">
                                <?php echo $options['opt-accordion-1']['contact-email'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:flex justify-center items-center">
                        <div class="h-10 w-32 bg-[#946E5F]"></div>
                    </div>
                </div>
                <!-- -------- certificate ----------- -->
                <div class="col-span-1 flex flex-row lg:flex-col items-center">
                    <div class="basis-1/6 lg:hidden"></div>
                    <div class="basis-4/6 lg:w-full">
                        <div class="rounded-lg h-28 shadow-lg border border-secondary-100 bg-white py-3 px-2 flex items-center gap-2">
                            <div class="w-full rounded bg-[#FCFAF9] p-3 basis-1/4 flex items-center justify-center">
                                <img src="/assets/icon/Footer-Certificate.svg">
                            </div>
                            <div class="basis-3/4 flex flex-col gap-3 justify-between">
                                <h5 class="text-sm text-[#202E40] font-bold">
                                <?php echo $options['opt-accordion-1']['contact-ctf-txt'] ?>
                                </h5>
                                <div class="self-end">
                                    <img src="/assets/img/Certificates.svg">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="basis-1/6 lg:flex lg:justify-center lg:items-center">
                        <div class="h-14 w-full bg-[#946E5F] lg:h-10 lg:w-32"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- --------- law footer --------- -->
        <div class="mt-8 lg:mt-0 w-full px-8 py-3 bg-[#0F2846]">
            <div class="lg:container lg:px-6 flex flex-col gap-3 justify-center items-center text-center lg:flex-row lg:justify-between">
                <div class="flex items-center gap-1">
                    <span>
                        <img src='/assets/img/Logo-Footer-sm.svg'>
                    </span>
                    <span class="text-xs text-gray-50">
                    <?php echo $options['opt-accordion-1']['footer-right-txt'] ?>
                    </span>
                </div>
                <p class="text-gray-50 text-xs">
                <?php echo $options['opt-accordion-1']['footer-left-txt'] ?>
                </p>
            </div>
        </div>
    </footer>

    <!-- The Modal -->
    <dialog id="searchModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">

            <span class="close">
                <img src="/assets/icon/Close-Square-sm.svg">
            </span>
            <div class="flex justify-center items-center h-80">
                <form action="/search" method="post" class="group grow relative">
                    <img src="/assets/icon/Search-Brown-lg.svg" class="absolute right-1 top-1/2 -translate-y-1/2 pointer-events-none ">

                    <input class="bg-transparent border-b border-b-white focus:outline-none appearance-none w-full text-xl leading-6 text-white placeholder-white placeholder:text-xl py-5 pr-16" type="search" aria-label="search" placeholder="دنبال چی میگردی؟!">
                </form>
            </div>
        </div>
    </dialog>

    <!-- ---- auth modal ----- -->
    <dialog id="authModal" class="auth-modal">
        <!-- Modal content -->
        <div class="auth-modal-content">

            <span class="closeAuth">
                <img src="/assets/icon/Close-Square-black.svg">
            </span>
            <div class="flex flex-col gap-y-3 justify-center items-center">
                <!-- ------- tab buttons ---------->
                <div class="flex items-center justify-center ">
                    <div class="bg-slate-100 rounded-lg px-3 py-2 mb-6 flex gap-2 items-center">
                        <button id="register-tab-header-btn" class="register-tab-btn text-[#946E5F] bg-white text-sm flex gap-2 items-center rounded-lg  px-5 py-3">
                            ثبت نام
                        </button>
                        <button id="login-tab-header-btn" class="login-tab-btn text-[#0F2846] text-sm flex gap-2 items-center px-5 py-3 rounded-lg">
                            ورود
                        </button>
                    </div>
                </div>

                <!-- ------- register content tab ------- -->
                <div id="register-content-tab" class="w-full">
                    <form action="/regsiter" method="post" class="flex flex-col gap-3 w-full">
                        <input type="text" placeholder="نام و نام خانوادگی" name="full_name" class="outline-0 focus:outline-none focus:ring-1 focus:bg-white ring-[#A17B67] text-xs placeholder:text-slate-500 px-2 py-3 bg-[#F2F4F6] text-slate-700 rounded-lg">
                        <input type="email" placeholder="ایمیل" name="email" class="outline-0 focus:outline-none focus:ring-1 focus:bg-white ring-[#A17B67] text-xs placeholder:text-slate-500 px-2 py-3 bg-[#F2F4F6] text-slate-700 rounded-lg">
                        <input type="tel" placeholder="شماره همراه" name="phone" class="outline-0 focus:outline-none focus:ring-1 focus:bg-white ring-[#A17B67] text-xs placeholder:text-slate-500 px-2 py-3 bg-[#F2F4F6] text-slate-700 rounded-lg">
                        <input type="password" placeholder="رمز ورود" name="password" class="outline-0 focus:outline-none focus:ring-1 focus:bg-white ring-[#A17B67] text-xs placeholder:text-slate-500 px-2 py-3 bg-[#F2F4F6] text-slate-700 rounded-lg">
                        <input type="password" placeholder="تکرار رمز ورود" name="reset_password" class="outline-0 focus:outline-none focus:ring-1 focus:bg-white ring-[#A17B67] text-xs placeholder:text-slate-500 px-2 py-3 bg-[#F2F4F6] text-slate-700 rounded-lg">
                        <div class="text-center">
                            <button type="submit" class="text-sm text-white bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded px-6 py-2 shadow-lg hover:opacity-90">
                                ثبت حساب کاربری
                            </button>
                        </div>
                    </form>
                    <div class="h-px w-full bg-gray-200 my-3"></div>
                    <div class="text-center">
                        <p class="text-sm">
                            <span class="text-gray-500">حساب کاربری دارم.</span>
                            <button class="login-tab-btn text-[#946E5F] font-bold">می خواهم وارد شوم!</button>
                        </p>
                    </div>
                </div>

                <!-- ------- Login content tab ------- -->
                <div id="login-content-tab" class="w-full hidden">
                    <form action="/login" method="post" class="flex flex-col gap-3 w-full">
                        <input type="text" placeholder="ایمیل/شماره همراه" name="email" class="outline-0 focus:outline-none focus:ring-1 focus:bg-white ring-[#A17B67] text-xs placeholder:text-slate-500 px-2 py-3 bg-[#F2F4F6] text-slate-700 rounded-lg">
                        <input type="password" placeholder="رمز ورود" name="password" class="outline-0 focus:outline-none focus:ring-1 focus:bg-white ring-[#A17B67] text-xs placeholder:text-slate-500 px-2 py-3 bg-[#F2F4F6] text-slate-700 rounded-lg">
                        <div class="text-center">
                            <div class="text-center mb-4">
                                <p class="text-sm">
                                    <span class="text-gray-500">رمز عبورتان را گم کرده اید؟.</span>
                                    <button type='button' class="forget-password-tab-btn text-[#946E5F] font-bold">
                                        ایجاد رمز جدید
                                    </button>
                                </p>
                            </div>
                            <button type="submit" class="text-sm text-white bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded px-6 py-2 shadow-lg hover:opacity-90">
                                ورود به حساب کاربری
                            </button>
                        </div>
                    </form>
                    <div class="h-px w-full bg-gray-200 my-3"></div>
                    <div class="text-center">
                        <p class="text-sm">
                            <span class="text-gray-500">حساب کاربری ندارم.</span>
                            <button class="register-tab-btn text-[#946E5F] font-bold">
                                ثبت نام
                            </button>
                        </p>
                    </div>
                </div>
                <!-- ------- forget password content tab ------- -->
                <div id="forget-password-content-tab" class="w-full hidden">
                    <div class="flex mb-5 items-center justify-center">
                        <p class="text-sm font-bold text-[#0F2846] border-b border-gray-200 pb-3">ایجاد رمز جدید</p>
                    </div>
                    <p class="text-sm text-gray-600 mb-5">لینک ایجاد رمز جدید به ایمیل یا شماره همراه شما وارد می شود.
                    </p>
                    <form action="/forget_password" method="post" class="flex flex-col gap-3 w-full mb-6">
                        <input type="text" placeholder="ایمیل/شماره همراه" name="email" class="outline-0 focus:outline-none focus:ring-1 focus:bg-white ring-[#A17B67] text-xs placeholder:text-slate-500 px-2 py-3 bg-[#F2F4F6] text-slate-700 rounded-lg">
                        <div class="text-center">
                            <button type="submit" class="text-sm text-white bg-gradient-to-r from-[#A57F6A] to-[#7A554F] rounded px-6 py-2 shadow-lg hover:opacity-90">
                                ارسال لینک
                            </button>
                        </div>
                    </form>
                    <div class="flex items-center justify-center">
                        <button class="login-tab-btn text-[#946E5F] font-bold flex items-center gap-2">
                            <img src="/assets/icon/left-arrow-brown.svg">
                            <span class="text-[#946E5F] text-bold">بازگشت</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </dialog>
</main><!-- #main -->
<?php get_footer(); ?>