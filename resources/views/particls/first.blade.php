@extends('layouts.app')

@section('content')

    <!-- HERO SECTION START -->
    <section class="hero-section d-flex align-items-center" id="intro">
        <div class="intro_text">
            <svg viewBox="0 0 1320 300">
                <text x="50%" y="50%" text-anchor="middle" class="animate-stroke">
                    HI
                </text>
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero-content-box">
                        <span class="hero-sub-title">I am Abhishek</span>
                        <h1 class="hero-title">Web Developer
                        </h1>

                        <div class="hero-image-box d-md-none text-center ">
                            <img src="assets/images/logo.png" alt="">
                        </div>

                        <p class="lead">I break down complex user experinece
                            problems to create integritiy focussed solutions that connect billions of people</p>
                        <div class="button-box d-flex flex-wrap align-items-center">
                            <a href="#" class="btn tj-btn-secondary">Download
                                CV <i class="fa fa-download"></i></a>
                            <ul class="ul-reset social-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-basketball"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="hero-image-box text-center">
                        <img src="assets/images/me.jpg" alt="" width="437px" height="475px">
                    </div>
                </div>
            </div>

            <!-- <div class="funfact-area">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                            <div class="number"><span class="odometer odometer-auto-theme" data-count="2"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span></div></span></div>
                            <div class="text">Years of <br>Experience</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                            <div class="number"><span class="odometer odometer-auto-theme" data-count="10"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</div>
                            <div class="text">Project <br>Completed</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                            <div class="number"><span class="odometer odometer-auto-theme" data-count=""><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-formatting-mark odometer-radix-mark">.</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span>K</div>
                            <div class="text">Happy <br>Clients</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                            <div class="number"><span class="odometer odometer-auto-theme" data-count="2"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span></div></span></div>
                            <div class="text">Years of <br>Experience</div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- HERO SECTION END -->

    <!-- SERVICES SECTION START -->
     <section class="services-section" id="services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">My Quality Services</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">We put your ideas and thus your wishes in the
                            form
                            of a unique web project that inspires you
                            and you customers.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="services-widget position-relative">
                        <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="left-box d-flex flex-wrap align-items-center">
                                <span class="number">01</span>
                                <h3 class="service-title">Branding Design</h3>
                            </div>
                            <div class="right-box">
                                <p>I break down complex user experinece problems to create integritiy focussed
                                    solutions
                                    that connect billions of people</p>
                            </div>
                            <i class="flaticon-up-right-arrow fa-solid fa-arrow-up-right"></i>
                            <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                        </div>
                        <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <div class="left-box d-flex flex-wrap align-items-center">
                                <span class="number">02</span>
                                <h3 class="service-title">Web Design</h3>
                            </div>
                            <div class="right-box">
                                <p>I break down complex user experinece problems to create integritiy focussed
                                    solutions
                                    that connect billions of people</p>
                            </div>
                            <i class="flaticon-up-right-arrow fa-solid fa-arrow-up-right"></i>
                            <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                        </div>
                        <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            <div class="left-box d-flex flex-wrap align-items-center">
                                <span class="number">03</span>
                                <h3 class="service-title">UI/UX Design</h3>
                            </div>
                            <div class="right-box">
                                <p>I break down complex user experinece problems to create integritiy focussed
                                    solutions
                                    that connect billions of people</p>
                            </div>
                            <i class="flaticon-up-right-arrow fa-solid fa-arrow-up-right"></i>
                            <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                        </div>
                        <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <div class="left-box d-flex flex-wrap align-items-center">
                                <span class="number">04</span>
                                <h3 class="service-title">Graphics Design</h3>
                            </div>
                            <div class="right-box">
                                <p>I break down complex user experinece problems to create integritiy focussed
                                    solutions
                                    that connect billions of people</p>
                            </div>
                            <i class="flaticon-up-right-arrow fa-solid fa-arrow-up-right"></i>
                            <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                        </div>
                        <div class="active-bg wow fadeInUp" data-wow-delay=".5s" style="top: 0px; height: 108.8px; visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION END -->

    <!-- start: Service Popup -->
    <div id="service-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src="./assets/img/services/modal-img.jpg" alt="">
        </div>

        <div class="popup_modal_content">
            <div class="service_details">
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="service_details_content">
                            <div class="service_info">
                                <h6 class="subtitle">SERVICES</h6>
                                <h2 class="title">UI/UX Design</h2>
                                <div class="desc">
                                    <p>Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst
                                        car
                                        boot a load of old tosh is cracking goal blow off telling brown.</p>

                                    <p>Brolly show off show off pick your nose and blow off well A bit of how’s your
                                        father tomfoolery blimey, me old mucker starkers Queen’s English dropped a
                                        clanger bite your arm spiffing good time burke Why chancer. Hotpot bum bag
                                        cracking goal young delinquent naff bugger cup of chars bender loo it’s all
                                        gone
                                        to pot the nancy cheeky.</p>

                                    <p>At public school cras bog some dodgy chav Richard Why argy bargy vagabon
                                        William
                                        bender matie boy, off his nut chancer Jeffrey up the kyver say mufty you mug
                                        ummm telling pear shaped Oxford owt to do with me do one so said are you
                                        taking
                                        his.</p>
                                </div>

                                <h3 class="title">Services Process</h3>
                                <div class="desc">
                                    <p>Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst
                                        car
                                        boot a load of old tosh is cracking goal blow off telling brown.</p>
                                </div>
                                <ul>
                                    <li>Reinvent Your Business to Better</li>
                                    <li>Pioneering the Internet's First</li>
                                    <li>Pioneering the Design World's First</li>
                                    <li>Pioneering the Design World's First</li>
                                    <li>Pioneering the Design World's First</li>
                                    <li>Pioneering the Design World's First</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="tj_main_sidebar">
                            <div class="sidebar_widget services_list">
                                <div class="widget_title">
                                    <h3 class="title">All Services</h3>
                                </div>
                                <ul>
                                    <li class="active">
                                        <button>
                                            <i class="flaticon-design"></i>
                                            Branding Design
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <i class="flaticon-3d-movie"></i>
                                            3D Animation
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <i class="flaticon-ux-design"></i>
                                            UI/UX Design
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <i class="flaticon-web-design"></i>
                                            Web Design
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <i class="flaticon-ui-design"></i>
                                            App Design
                                        </button>
                                    </li>
                                </ul>
                            </div>

                            <div class="sidebar_widget contact_form">
                                <div class="widget_title">
                                    <h3 class="title">Get in Touch</h3>
                                </div>

                                <form action="index.html">
                                    <div class="form_group">
                                        <input type="text" name="name" id="name" placeholder="Name" autocomplete="off">
                                    </div>
                                    <div class="form_group">
                                        <input type="email" name="semail" id="semail" placeholder="Email" autocomplete="off">
                                    </div>
                                    <div class="form_group">
                                        <textarea name="smessage" id="smessage" placeholder="Your message" autocomplete="off"></textarea>
                                    </div>
                                    <div class="form_btn">
                                        <button class="btn tj-btn-primary" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Service Popup -->

    <!-- PORTFOLIO SECTION START -->
    <section class="portfolio-section" id="works-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">My Recent Works</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">We put your ideas and thus your wishes in the
                            form of a unique web project that inspires
                            you
                            and you customers.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="button-group filter-button-group">
                            <button data-filter="*" class="active">All</button>
                            <button data-filter=".uxui" class=".portfolio-filter .button-group">UX/UI</button>
                            <button data-filter=".branding" class=".portfolio-filter .button-group">Branding</button>
                            <button data-filter=".mobile-app" class=".portfolio-filter .button-group">Apps</button>
                            <div class="active-bg .portfolio-filter .button-group" style="left: 8px; width: 69.8375px;"></div>
                        </div>
                    </div>

                    <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s" style="position: relative; height: 1169.46px; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="portfolio-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <div class="portfolio-item branding" style="position: absolute; left: 0%; top: 50px;">
                            <div class="image-box">
                                <img src="assets/images/portfolio/2 (1).jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="portfolio-title">Deloitte</h3>
                                <p>Project was about precision and information.</p>
                                <i class="flaticon-up-right-arrow fa-solid fa-arrow-up-right"></i>
                                <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                            </div>
                        </div>
                        <div class="portfolio-item uxui" style="position: absolute; left: 51.9994%; top: 50px;">
                            <div class="image-box">
                                <img src="assets/images/portfolio/1.jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="portfolio-title">New Age</h3>
                                <p>Project was about precision and information.</p>
                                <i class="flaticon-up-right-arrow fa-solid fa-arrow-up-right"></i>
                                <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                            </div>
                        </div>
                        <div class="portfolio-item mobile-app" style="position: absolute; left: 0%; top: 608.788px;">
                            <div class="image-box">
                                <img src="assets/images/portfolio/2 (1).jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="portfolio-title">Sebastian</h3>
                                <p>Project was about precision and information.</p>
                                <i class="flaticon-up-right-arrow fa-solid fa-arrow-up-right"></i>
                                <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                            </div>
                        </div>
                        <div class="portfolio-item branding" style="position: absolute; left: 51.9994%; top: 608.788px;">
                            <div class="image-box">
                                <img src="assets/images/portfolio/1.jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h3 class="portfolio-title">Mochnix</h3>
                                <p>Project was about precision and information.</p>
                                <i class="flaticon-up-right-arrow fa-solid fa-arrow-up-right"></i>
                                <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO SECTION END -->

    <!-- start: Portfolio Popup -->
    <div id="portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide">
        <div class="popup_modal_img">
            <img src="./assets/img/portfolio/modal-img.jpg" alt="">
        </div>

        <div class="popup_modal_content">
            <div class="portfolio_info">
                <div class="portfolio_info_text">
                    <h2 class="title">DStudio</h2>
                    <div class="desc">
                        <p>They are was greater open above shelter lets itself under appear sixth open gathering
                            made
                            upon can't own above midst gathering gathered he one us saying can't divide.</p>
                    </div>
                    <a href="#" class="btn tj-btn-primary">live preview <i class="fal fa-arrow-right"></i></a>
                </div>
                <div class="portfolio_info_items">
                    <div class="info_item">
                        <div class="key">Category</div>
                        <div class="value">Web Design</div>
                    </div>
                    <div class="info_item">
                        <div class="key">Client</div>
                        <div class="value">Artboard Studio</div>
                    </div>
                    <div class="info_item">
                        <div class="key">Start Date</div>
                        <div class="value">August 20, 2023</div>
                    </div>
                    <div class="info_item">
                        <div class="key">Designer</div>
                        <div class="value"><a href="#">ThemeJunction</a></div>
                    </div>
                </div>
            </div>

            <div class="portfolio_gallery owl-carousel owl-loaded owl-drag">




            <div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0s ease 0s;"><div class="owl-item"><div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-1.jpg" alt="">
                </div></div><div class="owl-item"><div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-2.jpg" alt="">
                </div></div><div class="owl-item"><div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-3.jpg" alt="">
                </div></div><div class="owl-item"><div class="gallery_item">
                    <img src="./assets/img/portfolio-gallery/p-gallery-4.jpg" alt="">
                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>

            <div class="portfolio_description">
                <h2 class="title">Project Description</h2>
                <div class="desc">
                    <p>The goal is there are many variations of passages of Lorem Ipsum available, but the majority
                        have
                        suffered alteration in some form, by injected humour, or randomised words which don't look
                        even
                        slightly believable.</p>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered
                        alteration in some form, by injected humour, or randomised words which don't look even
                        slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                        isn't
                        anything embarrassing hidden in the middle of text.</p>
                </div>
            </div>

            <div class="portfolio_story_approach">
                <div class="portfolio_story">
                    <div class="story_title">
                        <h4 class="title">The story</h4>
                    </div>
                    <div class="story_content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                            be
                            sure there isn't anything embarrassing hidden in the middle of text. There are many
                            variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration
                            in some form, by injected humour, or randomised words which don't look even slightly
                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
                <div class="portfolio_approach">
                    <div class="approach_title">
                        <h4 class="title">OUR APPROACH</h4>
                    </div>
                    <div class="approach_content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                            be
                            sure there isn't anything embarrassing hidden in the middle of text. There are many
                            variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration
                            in some form, by injected humour, or randomised words which don't look even slightly
                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>

            <div class="portfolio_navigation">
                <div class="navigation_item prev-project">
                    <a href="#" class="project">
                        <i class="fal fa-arrow-left"></i>
                        <div class="nav_project">
                            <div class="label">Previous Project</div>
                            <h3 class="title">Sebastian</h3>
                        </div>
                    </a>
                </div>

                <div class="navigation_item next-project">
                    <a href="#" class="project">
                        <div class="nav_project">
                            <div class="label">Next Project</div>
                            <h3 class="title">Qwillo</h3>
                        </div>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Portfolio Popup -->

    <!-- RESUME SECTION START -->
    <section class="resume-section" id="resume-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <h2 class="section-title"><i class="flaticon-recommendation"></i> My Experience</h2>
                    </div>

                    <div class="resume-widget">
                        <div class="resume-item wow fadeInLeft" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <div class="time">
                                2022 - Present
                            </div>
                            <h3 class="resume-title">Lead Developer</h3>
                            <div class="institute">
                                Blockdots, London
                            </div>
                        </div>
                        <div class="resume-item wow fadeInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                            <div class="time">
                                2021 - 2022
                            </div>
                            <h3 class="resume-title">Full Stack Web Developer</h3>
                            <div class="institute">
                                Parsons, The New School
                            </div>
                        </div>
                        <div class="resume-item wow fadeInLeft" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <div class="time">
                                2020 - 2021
                            </div>
                            <h3 class="resume-title">UI Designer</h3>
                            <div class="institute">
                                House of Life, Leeds
                            </div>
                        </div>
                        <div class="resume-item wow fadeInLeft" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                            <div class="time">
                                2018 - 2020
                            </div>
                            <h3 class="resume-title">Junior Graphics Designer</h3>
                            <div class="institute">
                                Theme Junction, Bursa
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="section-header wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <h2 class="section-title"><i class="flaticon-graduation-cap"></i> My Education</h2>
                    </div>

                    <div class="resume-widget">
                        <div class="resume-item wow fadeInRight" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                            <div class="time">
                                2020 - 2023
                            </div>
                            <h3 class="resume-title">Programming course</h3>
                            <div class="institute">
                                Harverd University
                            </div>
                        </div>
                        <div class="resume-item wow fadeInRight" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
                            <div class="time">
                                2016 - 2020
                            </div>
                            <h3 class="resume-title">Graphic design course</h3>
                            <div class="institute">
                                University of Denmark
                            </div>
                        </div>
                        <div class="resume-item wow fadeInRight" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                            <div class="time">
                                2012 - 2015
                            </div>
                            <h3 class="resume-title">Web design course</h3>
                            <div class="institute">
                                University of California
                            </div>
                        </div>
                        <div class="resume-item wow fadeInRight" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInRight;">
                            <div class="time">
                                2010 - 2011
                            </div>
                            <h3 class="resume-title">Design &amp; Technology</h3>
                            <div class="institute">
                                Parsons, The New School
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RESUME SECTION END -->
    <!-- SKILLS SECTION START -->
    <section class="skills-section" id="skills-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">My Skills</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">We put your ideas and thus your wishes in the
                            form of a unique web project that inspires
                            you
                            and you customers.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">
                        <div class="skill-item wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="skill-inner">
                                <div class="icon-box">
                                    <img src="assets/img/icons/figma.svg" alt="">
                                </div>
                                <div class="number">92%</div>
                            </div>
                            <p>Figma</p>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <div class="skill-inner">
                                <div class="icon-box">
                                    <img src="assets/img/icons/sketch.svg" alt="">
                                </div>
                                <div class="number">80%</div>
                            </div>
                            <p>Sketch</p>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="skill-inner">
                                <div class="icon-box">
                                    <img src="assets/img/icons/xd.svg" alt="">
                                </div>
                                <div class="number">85%</div>
                            </div>
                            <p>XD</p>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <div class="skill-inner">
                                <div class="icon-box">
                                    <img src="assets/img/icons/wp.svg" alt="">
                                </div>
                                <div class="number">99%</div>
                            </div>
                            <p>WordPess</p>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            <div class="skill-inner">
                                <div class="icon-box">
                                    <img src="assets/img/icons/react.svg" alt="">
                                </div>
                                <div class="number">89%</div>
                            </div>
                            <p>React</p>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <div class="skill-inner">
                                <div class="icon-box">
                                    <img src="assets/img/icons/js.svg" alt="">
                                </div>
                                <div class="number">93%</div>
                            </div>
                            <p>JavaScript</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SKILLS SECTION END -->

    <!-- TESTIMONIAL SECTION START -->
    <section class="testimonial-section" id="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-header">
                        <h2 class="section-title wow fadeInLeft" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">My Client's Stories</h2>
                        <p class=" wow fadeInLeft" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">Empowering people in new a digital journey
                            with my super services</p>
                    </div>
                </div>

                <div class="col-lg-7 col-xl-6 offset-xl-1">
                    <div class="testimonials-widget wow fadeInRight" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                        <div class="owl-carousel testimonial-carousel owl-loaded owl-drag">






                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-999px, 0px, 0px); transition: all 0s ease 0s; width: 3996px;"><div class="owl-item cloned" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/2.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/img/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_514)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_514" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_515)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_515" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Tim Bailey</h4>
                                <span class="designation">SEO Specialist, Theme Junction</span>
                            </div></div><div class="owl-item cloned" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/1.jpg" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/1.png" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_512)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_512" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_513)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_513" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Brandon Fraser</h4>
                                <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div></div><div class="owl-item cloned" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/2.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_514)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_514" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_515)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_515" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Tim Bailey</h4>
                                <span class="designation">SEO Specialist, Theme Junction</span>
                            </div></div><div class="owl-item active" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/1.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_588)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_588" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_589)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_589" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Brandon Fraser</h4>
                                <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div></div><div class="owl-item active" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/2.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_511)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_511" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_510)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_510" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Tim Bailey</h4>
                                <span class="designation">SEO Specialist, Theme Junction</span>
                            </div></div><div class="owl-item" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/1.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_512)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_512" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_513)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_513" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Brandon Fraser</h4>
                                <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div></div><div class="owl-item" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/2.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_514)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_514" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_515)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_515" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Tim Bailey</h4>
                                <span class="designation">SEO Specialist, Theme Junction</span>
                            </div></div><div class="owl-item" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/1.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_512)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_512" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_513)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_513" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Brandon Fraser</h4>
                                <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div></div><div class="owl-item" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/2.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_514)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_514" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_515)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_515" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Tim Bailey</h4>
                                <span class="designation">SEO Specialist, Theme Junction</span>
                            </div></div><div class="owl-item cloned" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/1.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_588)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_588" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_589)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_589" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Brandon Fraser</h4>
                                <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div></div><div class="owl-item cloned" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/2.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_511)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_511" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_510)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_510" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Tim Bailey</h4>
                                <span class="designation">SEO Specialist, Theme Junction</span>
                            </div></div><div class="owl-item cloned" style="width: 303px; margin-right: 30px;"><div class="testimonial-item">
                                <div class="top-area d-flex flex-wrap justify-content-between">
                                    <div class="logo-box">
                                        <img src="assets/images/testimonials/1.png" alt="">
                                    </div>
                                    <div class="image-box">
                                        <img src="assets/images/testimonials/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_512)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_512" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z" fill="url(#paint0_linear_263_513)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_263_513" x1="-0.0363755" y1="-0.0729998" x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="var(--tj-theme-primary)"></stop>
                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="quote">“Taylor is a professional Designer he really helps my business by
                                    providing value to my business. </p>
                                <h4 class="name">Brandon Fraser</h4>
                                <span class="designation">Senior Software Dev, Cosmic Sport</span>
                            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION END -->

    <!-- BLOG SECTION STAR -->
    <section class="blog-section" id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">Recent Blogs</h2>
                        <p class=" wow fadeInUp" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">We put your ideas and thus your wishes in the
                            form of a unique web project that inspires
                            you
                            and you customers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                        <div class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/1.jpg" alt="">
                            </a>
                            <a href="#" class="category">Tutorial</a>
                        </div>

                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="ul-reset">
                                    <li><i class="fa-light fa-calendar-days"></i> Oct 01, 2022</li>
                                    <li><i class="fa-light fa-comments"></i> <a href="#">Comment (0)</a></li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">top 10 ui ux designers</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                        <div class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/2.jpg" alt="">
                            </a>
                            <a href="#" class="category">TIPS</a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="ul-reset">
                                    <li><i class="fa-light fa-calendar-days"></i> Nov 01, 2022</li>
                                    <li><i class="fa-light fa-comments"></i> <a href="#">Comment (0)</a></li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">App Development Guides</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">
                        <div class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/3.jpg" alt="">
                            </a>
                            <a href="#" class="category">FREEBIES</a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="ul-reset">
                                    <li><i class="fa-light fa-calendar-days"></i> Dec 01, 2022</li>
                                    <li><i class="fa-light fa-comments"></i> <a href="#">Comment (0)</a></li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">learn graphic design free</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION END -->

    <!-- CONTACT SECTION START -->
    <section class="contact-section" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 order-2 order-md-1">
                    <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                        <div class="section-header">
                            <h2 class="section-title">Let’s work together!</h2>
                            <p>I design and code beautifully simple things and i love what i do. Just simple like
                                that!
                            </p>
                        </div>

                        <div class="tj-contact-form">
                            <form id="contact-form" novalidate="novalidate">
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form_group">
                                            <input type="text" name="conName" id="conName" placeholder="First name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form_group">
                                            <input type="text" name="conLName" id="conLName" placeholder="Last name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form_group">
                                            <input type="email" name="conEmail" id="conEmail" placeholder="Email address" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form_group">
                                            <input type="tel" name="conPhone" id="conPhone" placeholder="Phone number" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form_group">
                                            <select name="conService" id="conService" class="tj-nice-select" style="display: none;">
                                                <option value="" selected="" disabled="">Choose Service</option>
                                                <option value="braning">Branding Design</option>
                                                <option value="web">Web Design</option>
                                                <option value="uxui">UI/UX Design</option>
                                                <option value="app">App Design</option>
                                            </select><div class="nice-select tj-nice-select" tabindex="0"><span class="current">Choose Service</span><ul class="list"><li data-value="" class="option selected disabled">Choose Service</li><li data-value="braning" class="option">Branding Design</li><li data-value="web" class="option">Web Design</li><li data-value="uxui" class="option">UI/UX Design</li><li data-value="app" class="option">App Design</li></ul></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form_group">
                                            <textarea name="conMessage" id="conMessage" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form_btn">
                                            <button type="submit" class="btn tj-btn-primary">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1 col-md-5  d-flex flex-wrap align-items-center  order-1 order-md-2">
                    <div class="contact-info-list">
                        <ul class="ul-reset">
                            <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                <div class="icon-box">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="text-box">
                                    <p>Phone</p>
                                    <a href="tel:0123456789">+01 123 654 8096</a>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                <div class="icon-box">
                                    <i class="flaticon-mail-inbox-app"></i>
                                </div>
                                <div class="text-box">
                                    <p>Email</p>
                                    <a href="mailto:mail@mail.com">gerolddesign@mail.com</a>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                <div class="icon-box">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="text-box">
                                    <p>Address</p>
                                    <a href="#">Warne Park Street Pine, <br>FL 33157, New York</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION END -->

    <!-- BEGIN: Contact Form Success Modal Message -->
    <div class="modal contact_modal" id="message_sent" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title"><strong>Message Sent Successfully</strong></span>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <p>Thank you for contacting us. We will get back to you shortly.<br>Have a great day!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Contact Form Success Modal Message -->
@endsection
