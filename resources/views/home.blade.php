@extends('layouts.app')

@section('content')

<!-- ========== ========== fixed - left side body start ========== ========== -->
<div class="fixed-left-side-body">
    <div class="profile">
        <div class="profile-image center-align">
            <img src="{{ asset('import/assets/images/akshay2.png') }}" alt="Image">
        </div>
        <!-- /.profile-image -->

        <div class="profile-name center-align">
            <h1 class="user-name">Noto Sp</h1>
            <p>
                <span class="photoshop-color">UI/UX Designer</span> in Dewas
            </p>
        </div>
        <!-- /.profile-name -->

        <ul class="social-btn">
            <li>
                <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-behance" aria-hidden="true"></i>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
            </li>
        </ul>

        <div class="discription clearfix">
            <h2 class="title mb-30">{{ $setting->about_title }}</h2>
            <p style="text-align: justify;">
                If you are interested in my CV, please contact me via the details provided below.
            </p>
        </div>
        <!-- /.discription -->
        <div class="cv-btn">
            <a href="#!" class="custom-btn waves-effect waves-light">
                <i class="fa fa-download" aria-hidden="true"></i> download cv
            </a>
        </div>
    </div>
    <!-- /.profile -->
</div>
<!-- /.fixed-left-side-body -->
<!-- ========== ========== fixed - left side body end ========== ========== -->

<!-- ========== ========== right side body start ========== ========== -->
<div class="right-side-body">

    <!-- ==================== main-slider-section start ==================== -->
    <section id="main-slider-section" class="main-slider-section mb-30 clearfix">

        <div class="main-slider owl-carousel owl-theme">
            <div class="item">
                <div class="row">

                    <div class="col l6 m6">
                        <div class="item-child-left left-align">
                            <h2 class="hi">hello.</h2>
                            <p class="name">My name is Noto</p>
                            <small class="position mb-30">& I am absolutely design addicted</small>

                            <a href="#!" class="custom-btn waves-effect waves-light">
                                <i class="fa fa-picture-o" aria-hidden="true"></i> view protfolio
                            </a>
                        </div>
                        <!-- /.item-child-left -->
                    </div>
                    <!-- coll6 -->

                    <div class="col l6 m6">
                        <div class="item-child-right right-align">
                            <img src="{{ asset('import/assets/images/akshay1.png') }}" alt="Image">
                            <a href="#" class="chat waves-effect waves-light">
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- /.item-child-right -->
                    </div>
                    <!-- coll6 -->

                </div>
                <!-- row -->
            </div>
            <!-- /.item -->
            <div class="item">
                <div class="row">

                    <div class="col l6 m6">
                        <div class="item-child-left left-align">
                            <h2 class="hi">hello.</h2>
                            <p class="name">My name is Noto</p>
                            <small class="position mb-30">& I am absolutely design addicted</small>

                            <a href="#!" class="custom-btn waves-effect waves-light">
                                <i class="fa fa-picture-o" aria-hidden="true"></i> view protfolio
                            </a>
                        </div>
                        <!-- /.item-child-left -->
                    </div>
                    <!-- coll6 -->

                    <div class="col l6 m6">
                        <div class="item-child-right right-align">
                            <img src="{{ asset('import/assets/images/akshay1.png') }}" alt="Image">
                            <a href="#" class="chat waves-effect waves-light">
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- /.item-child-right -->
                    </div>
                    <!-- coll6 -->

                </div>
                <!-- row -->
            </div>
            <!-- /.item -->
            <div class="item">
                <div class="row">

                    <div class="col l6 m6">
                        <div class="item-child-left left-align">
                            <h2 class="hi">hello.</h2>
                            <p class="name">My name is Noto</p>
                            <small class="position mb-30">& I am absolutely design addicted</small>

                            <a href="#!" class="custom-btn waves-effect waves-light">
                                <i class="fa fa-picture-o" aria-hidden="true"></i> view protfolio
                            </a>
                        </div>
                        <!-- /.item-child-left -->
                    </div>
                    <!-- coll6 -->

                    <div class="col l6 m6">
                        <div class="item-child-right right-align">
                            <img src="{{ asset('import/assets/images/akshay1.png') }}" alt="Image">
                            <a href="#" class="chat waves-effect waves-light">
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- /.item-child-right -->
                    </div>
                    <!-- coll6 -->

                </div>
                <!-- row -->
            </div>
            <!-- /.item -->
        </div>
        <!-- /.main-slider -->

    </section>
    <!-- /.main-slider-section -->
    <!-- ==================== main-slider-section end ==================== -->

    <!-- ==================== aboutme-section start ==================== -->
    <div data-scroll='1' class="aboutme-section sec-p100-bg-bs mb-30 clearfix" id="about">
        <div class="Section-title">
            <h2>
                <i class="fa fa-user-o" aria-hidden="true"></i>
                about me
            </h2>
            <span>about me</span>
            <p>
                {{ $setting->about_description }}
            </p>
        </div>
        <!-- /.Section-title -->

        <div class="personal-details-area">
            <div class="row">
                <div class="col l6 m12 s12">
                    <div class="personal-details-left">
                        <ul class="service-list ul-li">
                            <li class="logodesign">
                                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                <span class="service-name">logo design</span>
                                <a href="#" class="more"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </li>
                            <li class="website">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="service-name">website</span>
                                <a href="#" class="more"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </li>
                            <li class="softwares">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <span class="service-name">softwares</span>
                                <a href="#" class="more"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </li>
                            <li class="applications">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <span class="service-name">applications</span>
                                <a href="#" class="more"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                        <!-- /.service-list -->
                    </div>
                    <!-- /.personal-details-left -->
                </div>
                <!-- colm6 -->

                <div class="col l6 m12 s12">
                    <div class="personal-details-right">
                        <h2 class="title">personal details</h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="td-w25">Full Name</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">{{ $user?->name }}</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Birth Day</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65"> {{ $user?->birth_day }}</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Degree</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">{{ $user?->degree }}</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Address</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">{{ $user?->address }}</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Phone</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">{{ $user?->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Email</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">{{ $user?->email }}</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Experience</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">{{ $user?->experience }} Years</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.personal-details-right -->
                </div>
                <!-- colm6 -->
            </div>
            <!-- row -->
        </div>
        <!-- /.personal-details-area -->
    </div>
    <!-- /.aboutme-section -->
    <!-- ==================== aboutme-section end ==================== -->

    <!-- ==================== my-skill-section start ==================== -->
    <div data-scroll='2' class="my-skill-section sec-p100-bg-bs mb-30 clearfix" id="skill">
        <div class="Section-title">
            <h2>
                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                My Skills
            </h2>
            <span>My Skills</span>
            <p>
                description skill
            </p>
        </div>
        <!-- /.Section-title -->

        <div class="professional-skills-area">
            <ul class="tabs skills-tab ul-li">
                <li class="tab tag-item tag-icon">
                    <i class="fa fa-tags" aria-hidden="true"></i>
                </li>
                <li class="tab tag-item"><a href="#">#graphicdesign</a></li>
                <li class="tab tag-item"><a href="#" class="active">#photography</a></li>
                <li class="tab tag-item"><a href="#">#technology</a></li>
                <li class="tab tag-item"><a href="#">#design</a></li>
                <li class="tab tag-item"><a href="#">#webdevelopment</a></li>
                <li class="tab tag-item"><a href="#">#application</a></li>
            </ul>
            <div id="graphicdesign">
                <h2 class="title">professional skills</h2>

                <div class="skill_progress">

                    <div class="row">
                        <div class="col l6 m6 s12">
                            <div class="single_experties">
                                <div class="skilled-tittle">Photoshop</div>
                                <div class="progress">
                                    <div class="progress-bar photoshop-bg wow Rx-width-90 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <span class="photoshop-color">90%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /single_experties -->

                            <div class="single_experties">
                                <div class="skilled-tittle">Jquery</div>
                                <div class="progress">
                                    <div class="progress-bar jquery-bg wow Rx-width-60 animated" role="progressbar" data-wow-duration="1s" data-wow-delay=".15s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <span class="jquery-color">60%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /single_experties -->

                            <div class="single_experties m-0">
                                <div class="skilled-tittle">PHP</div>
                                <div class="progress">
                                    <div class="progress-bar php-bg wow Rx-width-75 animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".25s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <span class="php-color">75%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /single_experties -->
                        </div>
                        <!-- colm6 -->

                        <div class="col l6 m6 s12">
                            <div class="single_experties">
                                <div class="skilled-tittle">HTML5</div>
                                <div class="progress">
                                    <div class="progress-bar html5-bg wow Rx-width-45 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <span class="html5-color">45%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /single_experties -->

                            <div class="single_experties">
                                <div class="skilled-tittle">Css3</div>
                                <div class="progress">
                                    <div class="progress-bar css3-bg wow Rx-width-65 animated" role="progressbar" data-wow-duration="1s" data-wow-delay=".15s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <span class="css3-color">65%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /single_experties -->

                            <div class="single_experties m-0">
                                <div class="skilled-tittle">Marketing</div>
                                <div class="progress">
                                    <div class="progress-bar marketing-bg wow Rx-width-80 animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".25s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <span class="marketing-color">80%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /single_experties -->
                        </div>
                        <!-- colm6 -->
                    </div>
                    <!-- row -->

                </div>
                <!-- /.skill_progress -->
            </div>

        </div>
        <!-- /.professional-skills-area -->

        <div class="languages-skills">
            <div class="row">

                <div class="col l6 m12 s12">
                    <div class="lang-skill-left">
                        <h2 class="title mb-30">languages skills</h2>

                        <p class="mb-30">
                            Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit.
                        </p>

                        <a href="#" class="common-color">https://www.youtube.com</a>
                    </div>
                    <!-- /.lang-skill-left -->
                </div>
                <!-- colm6 -->
                <div class="col l6 m12 s12">
                    <div class="lang-skill-right">
                        <div class="skill-piechart">
                            <div class="first circle">
                                <strong>HINDI</strong>
                            </div>
                        </div>
                        <!-- /pie-chart -->

                        <div class="skill-piechart">
                            <div class="second circle">
                                <strong>ENGLISH</strong>
                            </div>
                        </div>
                        <!-- /pie-chart -->
                        <div class="skill-piechart">
                            <div class="third circle">
                                <strong>DUTCH</strong>
                            </div>
                        </div>
                        <!-- /pie-chart -->
                    </div>
                </div>
                <!-- colm6 -->

            </div>
            <!-- row -->
        </div>
        <!-- /.languages-skills -->

    </div>
    <!-- /.my-skill-section -->
    <!-- ==================== my-skill-section end ==================== -->

    <!-- ==================== education-section start ==================== -->
    <div data-scroll='3' class="education-section sec-p100-bg-bs mb-30 clearfix" id="education">
        <div class="Section-title">
            <h2>
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                education
            </h2>
            <!-- <p>
                keterangan
            </p> -->
        </div>
        <!-- /.Section-title -->

        <ul class="accordion collapsible" data-collapsible="accordion">
            @foreach ($educations as $education)
            <li>
                <div class="accordion-header collapsible-header active">
                    <span class="icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                    <p>
                        <strong>{{ $education->title }}</strong> - {{ $education->association }} , {{ $education->from }} - {{ $education->to }}
                    </p>
                </div>
                <div class="accordion-body collapsible-body">
                    <span>
                        {{ $education->description }}
                    </span>
                </div>
            </li>
            @endforeach
        </ul>

    </div>
    <!-- /.education-section -->
    <!-- ==================== education-section end ==================== -->

    <!-- ==================== my-portfolio-section start ==================== -->
    <div data-scroll='4' class="my-portfolio-section sec-p100-bg-bs mb-30 clearfix" id="portfolio">

        <div class="Section-title">
            <h2>
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                My Portfolio
            </h2>
            <span>My Portfolio</span>
            <p>
                Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
            </p>
        </div>
        <!-- /.Section-title -->

        <div class="portfolio-area">

            <div id="filters" class="button-group">
                <button class="button waves-effect default is-checked" data-filter="*">all</button>
                <button class="button waves-effect default" data-filter=".metal">logos</button>
                <button class="button waves-effect default" data-filter=".transition">websites</button>
                <button class="button waves-effect default" data-filter=".alkali, .alkaline-earth">apps</button>
                <button class="button waves-effect default" data-filter=":not(.transition)">softwars</button>

            </div>

            <div class="grid">
                <div class="element-item transition metal" data-category="transition">
                    <div class="ei-child">
                        <img src="{{ asset('import/assets/images/portfolio/img-1.jpg') }}" alt="Image">
                        <a href="#" class="more">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="element-item metalloid" data-category="metalloid">
                    <div class="ei-child">
                        <img src="{{ asset('import/assets/images/portfolio/img-2.jpg') }}" alt="Image">
                        <a href="#" class="more">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="element-item post-transition metal" data-category="post-transition">
                    <div class="ei-child">
                        <img src="{{ asset('import/assets/images/portfolio/img-3.jpg') }}" alt="Image">
                        <a href="#" class="more">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="element-item post-transition metal" data-category="post-transition">
                    <div class="ei-child">
                        <img src="{{ asset('import/assets/images/portfolio/img-4.jpg') }}" alt="Image">
                        <a href="#" class="more">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="element-item transition metal" data-category="transition">
                    <div class="ei-child">
                        <img src="{{ asset('import/assets/images/portfolio/img-5.jpg') }}" alt="Image">
                        <a href="#" class="more">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="element-item alkali metal" data-category="alkali">
                    <div class="ei-child">
                        <img src="{{ asset('import/assets/images/portfolio/img-6.jpg') }}" alt="Image">
                        <a href="#" class="more">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.grid -->

            <a href="#!" class="custom-btn waves-effect waves-light">
                <i class="fa fa-refresh" aria-hidden="true"></i> load more
            </a>
        </div>
        <!-- /.portfolio-area -->

    </div>
    <!-- /.my-portfolio-section -->
    <!-- ==================== my-portfolio-section end ==================== -->

    <!-- ==================== testomonials-section start ==================== -->
    <div data-scroll='5' class="testomonials-section sec-p100-bg-bs mb-30 clearfix" id="testimonial">

        <div class="Section-title">
            <h2>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                testomonials
            </h2>
            <span>testomonials</span>
            <p>
                Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
            </p>
        </div>
        <!-- /.Section-title -->
        <div class="hello_testi_slider_wrapper">
            <div id="testomonial-carousel" class="owl-carousel owl-theme">
                <div class="item">

                    <div class="testomonial-img">
                        <img src="{{ asset('import/assets/images/testomonial/testomonial-img1.jpg') }}" alt="Image">
                    </div>
                    <!-- /.testomonial-img -->

                    <div class="testomonial-contant">
                        <h2>
                            Collis Ta'eed <span>(CEO at ABC)</span>
                        </h2>
                        <p>
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                        </p>
                        <a href="#" class="common-color">https:example.com</a>
                    </div>

                    <!-- /.testomonial-contant -->
                </div>
                <!-- /.item -->

                <div class="item">
                    <div class="testomonial-img">
                        <img src="{{ asset('import/assets/images/testomonial/testomonial-img2.jpg') }}" alt="Image">
                    </div>
                    <!-- /.testomonial-img -->

                    <div class="testomonial-contant">
                        <h2>
                            Collis Ta'eed <span>(CEO at ABC)</span>
                        </h2>
                        <p>
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                        </p>
                        <a href="#" class="common-color">https:example.com</a>
                    </div>
                    <!-- /.testomonial-contant -->
                </div>
                <!-- /.item -->
            </div>
        </div>
        <!-- /#testomonial-carousel -->

        <!-- <ul class="brand-list ul-li">
            <li>
                <a href="#!">
                    <img src="{{ asset('import/assets/images/brand/brand1.png') }}" alt="Brand Image">
                </a>
            </li>
        </ul> -->
    </div>
    <!-- /.testomonials-section -->
    <!-- ==================== testomonials-section end ==================== -->

    <!-- ==================== experience-section start ==================== -->
    <div data-scroll='6' class="experience-section sec-p100-bg-bs mb-30 clearfix" id="exprience">

        <div class="Section-title">
            <h2>
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Work Experience
            </h2>
            <span>Work Experience</span>
            <p>
                Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
            </p>
        </div>
        <!-- /.Section-title -->

        <div class="row">
            <div class="col l8 m12 s12">
                <div class="experience-left">
                    <div class="experience-left-item-area">
                        <div class="border-left">

                            <div class="experience-item exp1">
                                <h2 class="title">Web Designer at Microsoft Inc.</h2>
                                <ul class="post-mate ul-li">
                                    <li class="photoshop-color">Jun 2016 - <span class="current photoshop-bg">Current</span></li>
                                </ul>
                                <!-- /.post-mate -->
                                <p>
                                    Working as Web Developer at MicroSoft. Leading the support administration and quality controlling of products submited by the global freelance authors.
                                </p>
                                <a href="#" class="photoshop-color">https:example.com</a>
                            </div>
                            <!-- /.experience-item -->

                            <div class="experience-item exp2">
                                <h2 class="title">Web Designer at Microsoft Inc.</h2>
                                <ul class="post-mate ul-li">
                                    <li class="jquery-color">Jun 2015 - july 2016</li>
                                </ul>
                                <!-- /.post-mate -->
                                <p>
                                    Working as Web Developer at MicroSoft. Leading the support administration and quality controlling of products submited by the global freelance authors.
                                </p>
                                <a href="#" class="jquery-color">https:example.com</a>
                            </div>
                            <!-- /.experience-item -->

                            <div class="experience-item exp3">
                                <h2 class="title">Web Designer at Microsoft Inc.</h2>
                                <ul class="post-mate ul-li">
                                    <li class="php-color">April 2014 - November 2015</li>
                                </ul>
                                <!-- /.post-mate -->
                                <p>
                                    Working as Web Developer at MicroSoft. Leading the support administration and quality controlling of products submited by the global freelance authors.
                                </p>
                                <a href="#" class="php-color">https:example.com</a>
                            </div>
                            <!-- /.experience-item -->

                            <div class="experience-item exp1">
                                <h2 class="title">Web Designer at Microsoft Inc.</h2>
                                <ul class="post-mate ul-li">
                                    <li class="photoshop-color">Jun 2016 - <span class="current photoshop-bg">Current</span></li>
                                </ul>
                                <!-- /.post-mate -->
                                <p>
                                    Working as Web Developer at MicroSoft. Leading the support administration and quality controlling of products submited by the global freelance authors.
                                </p>
                                <a href="#" class="photoshop-color">https:example.com</a>
                            </div>
                            <!-- /.experience-item -->

                            <div class="experience-item exp2">
                                <h2 class="title">Web Designer at Microsoft Inc.</h2>
                                <ul class="post-mate ul-li">
                                    <li class="jquery-color">Jun 2015 - july 2016</li>
                                </ul>
                                <!-- /.post-mate -->
                                <p>
                                    Working as Web Developer at MicroSoft. Leading the support administration and quality controlling of products submited by the global freelance authors.
                                </p>
                                <a href="#" class="jquery-color">https:example.com</a>
                            </div>
                            <!-- /.experience-item -->

                            <div class="experience-item exp3">
                                <h2 class="title">Web Designer at Microsoft Inc.</h2>
                                <ul class="post-mate ul-li">
                                    <li class="php-color">April 2014 - November 2015</li>
                                </ul>
                                <!-- /.post-mate -->
                                <p>
                                    Working as Web Developer at MicroSoft. Leading the support administration and quality controlling of products submited by the global freelance authors.
                                </p>
                                <a href="#" class="php-color">https:example.com</a>
                            </div>
                            <!-- /.experience-item -->

                        </div>
                        <!-- border-left -->
                    </div>
                    <!-- /.experience-left-item-area -->

                </div>
                <!-- /.experience-left -->
            </div>
            <!-- colm8 -->

            <div class="col l4 m12 s12">
                <div class="experience-right">

                    <div class="achivement">
                        <h2 class="title">
                            <span class="thumb achived-color">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                            </span>
                            <!-- /.thumb -->
                            03 Adward Wins
                        </h2>
                    </div>
                    <!-- /.achivement -->

                    <div class="achivement">
                        <h2 class="title">
                            <span class="thumb">
                                01
                            </span>
                            <!-- /.thumb -->
                            Css Awwwards
                        </h2>
                        <p>
                            Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum.
                        </p>
                    </div>
                    <!-- /.achivement -->

                    <div class="achivement">
                        <h2 class="title">
                            <span class="thumb">
                                02
                            </span>
                            <!-- /.thumb -->
                            The Web Awards
                        </h2>
                        <p>
                            Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum.
                        </p>
                    </div>
                    <!-- /.achivement -->

                    <div class="achivement">
                        <h2 class="title">
                            <span class="thumb">
                                03
                            </span>
                            <!-- /.thumb -->
                            Logo Design
                        </h2>
                        <p>
                            Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum.
                        </p>
                    </div>
                    <!-- /.achivement -->

                </div>
                <!-- /.experience-right -->
            </div>
            <!-- col m4 -->
        </div>
        <!-- row -->

    </div>
    <!-- /.experience-section -->
    <!-- ==================== experience-section end ==================== -->

    <!-- ==================== latest-news-section start ==================== -->
    <div data-scroll='7' class="latest-news-section sec-p100-bg-bs mb-30 clearfix" id="blog">

        <div class="Section-title">
            <h2>
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                Latest News
            </h2>
            <span>Latest News</span>
            <p>
                Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
            </p>
        </div>
        <!-- /.Section-title -->

        <div class="news-item clearfix">
            <div class="news-image b4-1 left">
                <img src="{{ asset('import/assets/images/news/news1.jpg') }}" alt="Image">
            </div>
            <!-- /.news-image -->
            <div class="news-contant right left-align">
                <h2 class="title">Creative Deisng News</h2>
                <ul class="post-mate2">
                    <li class="pm-r25">By <a href="#">Noto</a></li>
                    <li class="pm-r25">11 march 2017</li>
                    <li class="pm-r25">4 comment</li>
                </ul>
                <p>
                    Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh.
                </p>
                <a href="#!" class="custom-btn waves-effect waves-light">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i> Read More
                </a>
            </div>
            <!-- /.news-contant -->
        </div>
        <!-- /.news-item -->

        <ul class="pagination clearfix">
            <li class="left-arrow waves-effect left">
                <a href="#!"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            </li>

            <li class="waves-effect"><a href="#!">01</a></li>
            <li class="active"><a href="#!">02</a></li>
            <li class="right-arrow waves-effect right">
                <a href="#!"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </li>
        </ul>

    </div>
    <!-- /.latest-news-section -->
    <!-- ==================== latest-news-section end ==================== -->

    <!-- ==================== contact-me-section start ==================== -->
    <div data-scroll='8' class="contact-me-section sec-p100-bg-bs mb-30 clearfix" id="contact">

        <div class="Section-title">
            <h2>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                contact me
            </h2>
            <span>contact me</span>
            <p>
                Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
            </p>
        </div>
        <!-- /.Section-title -->

        <div class="row">
            <div class="col l6 m12 s12">
                <div class="contact-left">

                    <div class="cont-item phone">
                        <h2 class="title mb-30">phone</h2>
                        <div class="cont-numbers">
                            <p>
                                <span>Mob.</span>+0 123456789
                            </p>
                            <p>
                                <span>Landline</span>+0 123456789
                            </p>
                            <p>
                                <span>Skype</span>webstrot
                            </p>
                        </div>
                        <!-- /.cont-numbers -->
                    </div>
                    <!-- /.cont-item -->

                    <div class="cont-item email">
                        <h2 class="title mb-30">email</h2>
                        <div class="cont-numbers">
                            <p>support@example.com</p>
                            <p>support@example.com</p>
                        </div>
                        <!-- /.cont-numbers -->
                    </div>
                    <!-- /.cont-item -->

                    <div class="cont-item address">
                        <h2 class="title mb-30">address</h2>
                        <div class="cont-numbers">
                            <p>Street 110-B Kalani Bag, Dewas, M.P. INDIA</p>
                            <p><a href="#" class="photoshop-color">https:example.com</a></p>
                        </div>
                        <!-- /.cont-numbers -->
                    </div>
                    <!-- /.cont-item -->

                </div>
                <!-- /.contact-left -->
            </div>
            <!-- colm6 -->

            <div class="col l6  s12">
                <div class="contact-right clearfix">

                    <form action="#">

                        <h2 class="title mb-30">here me</h2>

                        <div class="input-field">
                            <input type="text" name="full_name" class="require">
                            <label>First Name</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="email" class="require" data-valid="email" data-error="Email should be valid.">
                            <label>Email</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="subject" class="require">
                            <label>Subject</label>
                        </div>

                        <div class="input-field">

                            <textarea rows="7" name="message" class="materialize-textarea"></textarea>
                            <label>Message</label>
                            <div class="response"></div>
                        </div>

                        <button type="button" class="submitForm custom-btn waves-effect"><i class="fa fa-envelope-o" aria-hidden="true"></i>Send</button>
                    </form>

                </div>
                <!-- /.contact-right -->
            </div>
            <!-- colm6 -->
        </div>
        <!-- row -->

    </div>
    <!-- /.contact-me-section -->
    <!-- ==================== contact-me-section end ==================== -->

    <!-- ==================== footer-section start ==================== -->
    <footer id="footer-section" class="footer-section clearfix">
        <p <a href="#" class="photoshop-color">My Porto</a> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>

        <div class='backtotop'>
            <a href="#" class='scroll'>
                <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
            </a>
        </div>
        <!-- backtotop -->
    </footer>
    <!-- /.footer-section -->
    <!-- ==================== footer-section end ==================== -->
</div>
<!-- ========== ========== right side body end ========== ========== -->

<script>
    let classNumber = 1;
    document.querySelectorAll('.accordion-header').forEach((element) => {
        element.classList.add(`acco-clr${classNumber}`);
        classNumber++;
    });
</script>

@endsection