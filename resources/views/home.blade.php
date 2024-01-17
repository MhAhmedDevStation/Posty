@extends('layouts.app')

@section('content')
<div class="single-hero-area" style="background-image:url({{ 'images/hero/hero1.jpg' }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="hero-content">
                    <h4 class="wow fadeInLeft" data-wow-delay=".5s">Learn from the comfort of your own home.</h4>
                    <h1 class="wow fadeInLeft" data-wow-delay=".6s">Get 5000+ free choose the right education</h1>
                    <p class="wow fadeInLeft" data-wow-delay=".7s">Improve your skill! We provide high-quality online courses and are constantly upgrading our
                        knowledge.</p>
                    <div class="hero-btn mt-30">
                        <a href="" class="t-btn wow fadeInUp mr-15" data-wow-delay="1s">Know More</a>
                        <a href="" class="t-btn wow fadeInUp" data-wow-delay="1.3s">View All Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-features">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="single-hero-features wow fadeInUp" data-wow-delay=".8s">
                        <div class="single-features-icon">
                            <img src="{{ asset('images/hero/hero-features/hero-f1.svg') }}" alt="">
                        </div>
                        <div class="single-features-text">
                            <h3>Courses Material</h3>
                            <p>Find in Your Cours Access</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="single-hero-features wow fadeInUp" data-wow-delay=".9s">
                        <div class="single-features-icon">
                            <img src="{{ asset('images/hero/hero-features/hero-f2.svg') }}" alt="">
                        </div>
                        <div class="single-features-text">
                            <h3>Expert teacher</h3>
                            <p>who are experts in the field</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="single-hero-features wow fadeInUp" data-wow-delay="1s">
                        <div class="single-features-icon">
                            <img src="{{ asset('images/hero/hero-features/hero-f3.svg') }}" alt="">
                        </div>
                        <div class="single-features-text">
                            <h3>online courses</h3>
                            <p>build the future you want</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero-area-end -->
<!-- about-us-start -->
<div class="about-us pt-110 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title mb-40 text-center">
                    <span>Find inspiration</span>
                    <h2>Future and imagine what it could be like, then your ideas to life and futures your plan</h2>
                </div>
            </div>
        </div>
        <div class="row about-color">
            <div class="col-xl-4 col-lg-4">
                <div class="single-about-us mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-icon mb-20">
                        <span></span>
                        <i class="fa-solid fa-person-chalkboard"></i>
                    </div>
                    <div class="about-text">
                        <h3>Technology Build</h3>
                        <p>While the lovely valley team work we are here to assist you</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single-about-us mb-30 wow fadeInUp" data-wow-delay=".5s">
                    <div class="about-icon mb-20">
                        <span></span>
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="about-text">
                        <h3>Learning us</h3>
                        <p>we have built the University while the lovely valley team</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single-about-us mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <div class="about-icon mb-20">
                        <span></span>
                        <i class="fa-solid fa-masks-theater"></i>
                    </div>
                    <div class="about-text">
                        <h3>Succeed new world.</h3>
                        <p>It is an opportunity to engage in conversations share.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-us-end -->
<!-- job-part-start -->
<div class="job-part pt-110 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="section-title wow fadeInUp mb-40 text-left" data-wow-delay=".4s">
                    <h2>With educational technology, everything is personal.</h2>
                    <p>opening up a world of possibilities for collaboration and feedback. Many teachers use
                        educational technology through mobile devices, like iPads or tablets to play games and
                        present content. Some schools use handheld devices as a part of an evaluation process</p>
                </div>
                <div class="single-job wow fadeInLeft" data-wow-delay=".5s">
                    <ul>
                        <li>
                            <div class="job-icon">
                                <i class="fa-solid fa-laptop-file"></i>
                            </div>
                            <h3>social media and mobile</h3>
                            <p>Nunc indolle dolor, nibh suscipit augue ut scelerisque. mauris? </p>
                        </li>
                        <li>
                            <div class="job-icon">
                                <i class="fa-solid fa-school-flag"></i>
                            </div>
                            <h3>world around us through</h3>
                            <p>Nunc indolle dolor, nibh suscipit augue ut scelerisque. Quisque egestas mauris? </p>
                        </li>
                        <li>
                            <div class="job-icon">
                                <i class="fa-solid fa-school-circle-check"></i>
                            </div>
                            <h3>It's now possible to learn </h3>
                            <p>Vestibulum ac diam sit amet quam vehicula elementum sed Praesent</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="drem-job d-none d-sm-block wow fadeInRight" data-wow-delay=".7s">
                    <img src="{{ asset('images/technology/tech1.jpg') }}" alt="">
                    <div class="dr-sm-img">
                        <img src="{{ asset('images/technology/tech2.jpg') }}" alt="">
                    </div>
                    <div class="job-ct-1 job-item">
                        <div class="job-ct-icon">
                            <i class="fa-solid fa-person-chalkboard"></i>
                        </div>
                        <div class="job-ct-text">
                            <h4>10K+</h4>
                            <p>Focus on making </p>
                        </div>
                    </div>
                    <div class="job-ct-2 job-item">
                        <div class="job-ct-icon">
                            <i class="fa-solid fa-book-open-reader"></i>
                        </div>
                        <div class="job-ct-text">
                            <h4>20K+</h4>
                            <p>Active Candidate</p>
                        </div>
                    </div>
                    <div class="job-ct-3 job-item">
                        <div class="job-ct-icon">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <div class="job-ct-text">
                            <h4>40K+</h4>
                            <p>Remote Candidate</p>
                            <a href="#" class="t-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job-part-end -->
<!-- course-part-start -->
<div class="course-part pt-110 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title mb-40 text-center">
                    <span>Awesome features</span>
                    <h2>Sometimes the best way to envision <br> the future is to invent it.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-course mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="course-img">
                        <img src="{{ asset('images/course/course1.jpg') }}" alt="">
                    </div>
                    <div class="course-text">
                        <span class="course-price">$10</span>
                        <h3 class="course-title"><a href="#">Graphic Master Class for Beginners</a></h3>
                        <div class="course-review">
                            <span class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="review-count">(5 Review)</span>
                        </div>
                        <div class="course-footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-clock"></i>04h</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-course mb-30 wow fadeInUp" data-wow-delay=".5s">
                    <div class="course-img">
                        <img src="{{ asset('images/course/course2.jpg') }}" alt="">
                    </div>
                    <div class="course-text">
                        <span class="course-price">$20</span>
                        <h3 class="course-title"><a href="#">Python Master Class for Beginners</a></h3>
                        <div class="course-review">
                            <span class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="review-count">(5 Review)</span>
                        </div>
                        <div class="course-footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-clock"></i>05h</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-course mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <div class="course-img">
                        <img src="{{ asset('images/course/course3.jpg') }}" alt="">
                    </div>
                    <div class="course-text">
                        <span class="course-price">Free</span>
                        <h3 class="course-title"><a href="#">The Complete React Course 2022</a></h3>
                        <div class="course-review">
                            <span class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                            <span class="review-count">(1 Review)</span>
                        </div>
                        <div class="course-footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-clock"></i>06h</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-course mb-30 wow fadeInUp" data-wow-delay=".9s">
                    <div class="course-img">
                        <img src="{{ asset('images/course/course4.jpg') }}" alt="">
                    </div>
                    <div class="course-text">
                        <span class="course-price">$30</span>
                        <h3 class="course-title"><a href="#">Business: Build Your Perfect Diet & Meal
                                Plan</a></h3>
                        <div class="course-review">
                            <span class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="review-count">(5 Review)</span>
                        </div>
                        <div class="course-footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-clock"></i>07h</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-course mb-30 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="course-img">
                        <img src="{{ asset('images/course/course5.jpg') }}" alt="">
                    </div>
                    <div class="course-text">
                        <span class="course-price">$30</span>
                        <h3 class="course-title"><a href="#">WordPress Master Class for Beginners</a></h3>
                        <div class="course-review">
                            <span class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="review-count">(5 Review)</span>
                        </div>
                        <div class="course-footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-clock"></i>04h</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-course mb-30 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="course-img">
                        <img src="{{ asset('images/course/course6.jpg') }}" alt="">
                    </div>
                    <div class="course-text">
                        <span class="course-price">Free</span>
                        <h3 class="course-title"><a href="#">The Complete JavaScript Course 2022</a></h3>
                        <div class="course-review">
                            <span class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                            <span class="review-count">(1 Review)</span>
                        </div>
                        <div class="course-footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-clock"></i>05h</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="course-btn wow fadeInUp mt-20 text-center" data-wow-delay="1.5s">
                        <a href="#" class="t-btn">view all courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- course-part-end -->
<!-- features-video-area-start -->
<div class="features-video pt-110 pb-110" style="background-image:url ( {{ asset('images/video/video-1.jpg') }})">
    <div class="video-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7 col-md-10">
                <div class="section-title mb-40 text-left">
                    <h2 class="text-white">Place To Find Your Dream</h2>
                    <p class="text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                </div>
                <div class="single-video-box">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <h3>Graduate Certificate Program.</h3>
                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by
                        the</p>
                </div>
                <div class="single-video-box">
                    <i class="fa-solid fa-laptop-code"></i>
                    <h3>while earning one </h3>
                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by
                        the</p>
                </div>
                <div class="single-video-box">
                    <i class="fa-solid fa-user-graduate"></i>
                    <h3>Certificate is a way</h3>
                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by
                        the</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-10">
                <div class="features-video-box text-center">
                    <a href="https://www.youtube.com/watch?v=t5akgsQsOSk" class="features-video-icon"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- features-video-area-end -->
<!-- instructor-part-start -->
<div class="instructor-part pt-110 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title mb-40 text-center">
                    <span>Instructor</span>
                    <h2>Our Expert Instructors</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-instructor mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-instructor-img">
                        <img src="{{ asset('images/instructor/member1.jpg') }}" alt="">
                        <div class="single-instructor-content">
                            <h5>David Fincher</h5>
                            <span>Senior Professor</span>
                            <div class="single-instructor-info">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-instructor mb-30 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-instructor-img">
                        <img src="{{ asset('images/instructor/member2.jpg') }}" alt="">
                        <div class="single-instructor-content">
                            <h5>Sarrison Brandon</h5>
                            <span>mathematics Teacher</span>
                            <div class="single-instructor-info">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-instructor mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <div class="single-instructor-img">
                        <img src="{{ asset('images/instructor/member3.jpg') }}" alt="">
                        <div class="single-instructor-content">
                            <h5>Warrison Kevin</h5>
                            <span>Pro Chancellor</span>
                            <div class="single-instructor-info">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-instructor mb-30 wow fadeInUp" data-wow-delay=".9s">
                    <div class="single-instructor-img">
                        <img src="{{ asset('images/instructor/member4.jpg') }}" alt="">
                        <div class="single-instructor-content">
                            <h5>Harrison Samuel</h5>
                            <span>Head Professor</span>
                            <div class="single-instructor-info">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- instructor-part-end -->
<!-- lates-article-area-start -->
<div class="lates-article pt-110 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title mb-40 text-center">
                    <span>Our Latest News Articles.</span>
                    <h2>We provide many types of courses </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-article mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="article-img">
                        <a href="#"><img src="{{ asset('images/course/course8.jpg') }}" alt=""></a>
                    </div>
                    <div class="article-content">
                        <a href="#" class="article-btn"><i class="fas fa-tag"></i>Chance</a>
                        <div class="article-meta">
                            <ul>
                                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                <li><i class="far fa-calendar-alt"></i>OCTOBER 25, 2022</li>
                            </ul>
                        </div>
                        <h4><a href="#">Master Web Design in Adobe XD</a></h4>
                        <p>Our Approach to SEO is unique around what we know work as we know.</p>
                        <a href="#" class="t-btn">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-article mb-30 wow fadeInUp" data-wow-delay=".5s">
                    <div class="article-img">
                        <a href="#"><img src="{{ asset('images/course/course9.jpg') }}" alt=""></a>
                    </div>
                    <div class="article-content">
                        <a href="#" class="article-btn"><i class="fas fa-tag"></i>learning</a>
                        <div class="article-meta">
                            <ul>
                                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                <li><i class="far fa-calendar-alt"></i>OCTOBER 27, 2022</li>
                            </ul>
                        </div>
                        <h4><a href="#">Master Complete Web Design</a></h4>
                        <p>Our Approach to SEO is unique around what we know work as we know.</p>
                        <a href="#" class="t-btn">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-article mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <div class="article-img">
                        <a href="#"><img src="{{ asset('images/course/course10.jpg') }}" alt=""></a>
                    </div>
                    <div class="article-content">
                        <a href="#" class="article-btn"><i class="fas fa-tag"></i>Succeed</a>
                        <div class="article-meta">
                            <ul>
                                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                <li><i class="far fa-calendar-alt"></i>OCTOBER 30, 2022</li>
                            </ul>
                        </div>
                        <h4><a href="#">How to Write Great Web Content</a></h4>
                        <p>Our Approach to SEO is unique around what we know work as we know.</p>
                        <a href="#" class="t-btn">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- lates-article-area-end -->
<!-- our-site-area-start -->
<div class="site-wrap">
    <div class="our-site pt-110 pb-110">
        <div class="section-absolute-bg" style="background-image:url({{ asset('images/institute/institute1.jpg') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="boxed-content wow fadeInLeft" data-wow-delay=".3s">
                        <h2>Welcome to our Institute</h2>
                        <p>This should be used to tell a story and let your users know a little more about your
                            product or service. How can you benefit them? Dramatically supply transpa deliverables
                            before & you.</p>
                        <a href="#" class="t-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-site absolute-bg-left pt-110 pb-110">
        <div class="section-absolute-bg" style="background-image:url({{ asset('images/institute/institute2.jpg') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6 col-md-6 offset-md-6">
                    <div class="boxed-content wow fadeInRight" data-wow-delay=".6s">
                        <h2>The Best Tutors in Town</h2>
                        <p>This should be used to tell a story and let your users know a little more about your
                            product or service. How can you benefit them? Dramatically supply transpa deliverables
                            before & you.</p>
                        <a href="#" class="t-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our-site-area-end -->
<!-- upcoming-event-area-start-->
<div class="upcoming-event pt-110 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="event-box mb-30 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="event-content">
                        <div class="date-event d-none d-sm-block">
                            <h3>12</h3>
                            <span>october</span>
                        </div>
                        <div class="text-event">
                            <span><i class="fa fa-map-marker"></i>Limonda, 16/A, New York, USA</span>
                            <h3>How to Write Great Web Content</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="event-btn d-none d-lg-block">
                        <a href="#" class="t-btn">Join Event</a>
                    </div>
                </div>
                <div class="event-box mb-30 wow fadeInRight" data-wow-delay=".5s">
                    <div class="event-content">
                        <div class="date-event d-none d-sm-block">
                            <h3>15</h3>
                            <span>october</span>
                        </div>
                        <div class="text-event">
                            <span><i class="fa fa-map-marker"></i>Limonda, 16/A, New York, USA</span>
                            <h3>How to Write Graphic Content</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="event-btn d-none d-lg-block">
                        <a href="#" class="t-btn">Join Event</a>
                    </div>
                </div>
                <div class="event-box mb-30 wow fadeInLeft" data-wow-delay=".7s">
                    <div class="event-content">
                        <div class="date-event d-none d-sm-block">
                            <h3>18</h3>
                            <span>october</span>
                        </div>
                        <div class="text-event">
                            <span><i class="fa fa-map-marker"></i>Limonda, 16/A, New York, USA</span>
                            <h3>Master Web Design in Adobe XD</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="event-btn d-none d-lg-block">
                        <a href="#" class="t-btn">Join Event</a>
                    </div>
                </div>
                <div class="event-box mb-30 wow fadeInRight" data-wow-delay=".9s">
                    <div class="event-content">
                        <div class="date-event d-none d-sm-block">
                            <h3>28</h3>
                            <span>october</span>
                        </div>
                        <div class="text-event">
                            <span><i class="fa fa-map-marker"></i>Limonda, 16/A, New York, USA</span>
                            <h3>Master Complete Web Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="event-btn d-none d-lg-block">
                        <a href="#" class="t-btn">Join Event</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- upcoming-event-area-end-->
<!-- solution-area-start -->
<div class="solution-area pt-100 bg-white pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="solution-innner wow fadeInLeft" data-wow-delay=".5s">
                    <h1>Delighted Students </h1>
                    <div class="solution-active">
                        <div class="single-solution">
                            <div class="solution-quote">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <p>Technology is transforming how we work, learn, and play. Learn more about how
                                technology can help you in your career and join our community of people who are
                                making an impact with technology.</p>
                            <div class="solution-info">
                                <h3>Camilo Mac</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <div class="single-solution">
                            <div class="solution-quote">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <p>Technology is transforming how we work, learn, and play. Learn more about how
                                technology can help you in your career and join our community of people who are
                                making an impact with technology.</p>
                            <div class="solution-info">
                                <h3>Jiraiya Banks</h3>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                        <div class="single-solution">
                            <div class="solution-quote">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <p>Technology is transforming how we work, learn, and play. Learn more about how
                                technology can help you in your career and join our community of people who are
                                making an impact with technology.</p>
                            <div class="solution-info">
                                <h3>Wylder Elio</h3>
                                <p>React Developer</p>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/solution/solution.png') }}" alt="" class="solution-img">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="solution-text wow fadeInRight" data-wow-delay=".7s">
                    <h2>Learn more about the latest tech, and the best software to help you accomplish more.</h2>
                    <p>Technology. It’s changing the way we live, work, and play. From sharing our lives on the go
                        to helping business thrive in the digital age, it’s all part of being smart with technology.
                        Learn more about how we can help you get started today!</p>
                    <ul>
                        <li><i class="far fa-check-circle"></i>Senectus et netus et malesuada.</li>
                        <li><i class="far fa-check-circle"></i>Fames ac turpis egestas. </li>
                        <li><i class="far fa-check-circle"></i>Duis ligula odio, tristique eget.</li>
                        <li><i class="far fa-check-circle"></i>Convallis a, blandit sollicitudin. </li>
                        <li><i class="far fa-check-circle"></i>In hac habitasse dictumst.</li>
                    </ul>
                    <a href="#" class="t-btn">Happy us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- solution-area-end -->
<!-- brand-area-start-->
<div class="brand-area gray-bg pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="brand-active">
                    <div class="single-brand">
                        <a href="#"><img src="{{ asset('images/brand/brand-icon-01.png') }}" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{ asset('images/brand/brand-icon-02.png') }}" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{ asset('images/brand/brand-icon-03.png') }}" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{ asset('images/brand/brand-icon-04.png') }}" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{ asset('images/brand/brand-icon-05.png') }}" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{ asset('images/brand/brand-icon-06.png') }}" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{ asset('images/brand/brand-icon-07.png') }}" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{ asset('images/brand/brand-icon-06.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area-end-->
@endsection