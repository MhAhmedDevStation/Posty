@extends('layouts.app')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- breadcrumb-area-start -->
    <div
        class="breadcrumb-area pt-150 pb-150 theme-overlay"
        style="background-image:url({{ asset('images/breadcrumb/breadcrumb18.jpg') }})"
    >
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div
                        class="breadcrumb-content wow fadeInUp"
                        data-wow-delay=".3s"
                    >
                        <h1>Contact</h1>
                        <a href="index.html">Home<i class="fa fa-angle-double-right"></i></a>Contact
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- contact-area-start -->
    <div class="contact-area pt-110 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-30">

                    <div
                        class="contact-form wow fadeInLeft"
                        data-wow-delay=".5s"
                    >
                        <h4>Send a Message</h4>
                        <form
                            action="{{ route('contact') }}"
                            method="post"
                        >
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-xl-6">
                                    <input
                                        type="text"
                                        name="first_name"
                                        id="first_name"
                                        placeholder="First Name"
                                        required=""
                                    >
                                </div>
                                <div class="col-xl-6">
                                    <input
                                        type="text"
                                        name="last_name"
                                        id="last_name"
                                        placeholder="Last Name"
                                        required=""
                                    >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        placeholder="Your Email"
                                        required=""
                                    >
                                </div>
                                <div class="col-xl-6">
                                    <input
                                        type="tel"
                                        name="phone_number"
                                        id="phone_number"
                                        placeholder="Phone Number"
                                        required=""
                                    >
                                </div>
                            </div>
                            <textarea
                                name="message"
                                id="message"
                                cols="30"
                                rows="5"
                                placeholder="Write Your Message"
                                required=""
                            ></textarea>
                            <input
                                class="t-btn"
                                type="submit"
                                value="Send Message"
                            >
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="contact-form-color-box wow fadeInRight"
                        data-wow-delay=".7s"
                    >
                        <h4>Get in Touch</h4>
                        <p class="contact-address"><i class="fa fa-map-marker"></i>355 William S Canning Blvd<br> River MA
                            6950, USA</p>
                        <p class="contact-address"><i class="fa fa-envelope"></i><a
                                href="mailto:examplewebiste.com">examplewebiste.com</a>
                            <br><a href="mailto:helpinfowebiste.com">helpinfowebiste.com</a>
                        </p>
                        <p class="contact-address"><i class="fa fa-phone"></i><a href="#">exampleinfowebiste.com</a>
                            <br><a href="tell:infowebiste.com">tell:+88 12345 85960</a>
                        </p>
                        <p class="contact-address"><i class="fa fa-globe"></i><a href="#">admin@site.com</a>
                            <br><a href="tell:infowebiste.com">tell:980 350 53101</a>
                        </p>
                        <div class="contact-address-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (auth()->check())
            <script>
                $(document).ready(function() {
                    // User is authenticated, populate the fields
                    $('#first_name').val("{{ auth()->user()->firstname }}");
                    $('#last_name').val("{{ auth()->user()->lastname }}");
                    $('#email').val("{{ auth()->user()->email ? auth()->user()->email : '' }}");
                    $('#phone_number').val("{{ auth()->user()->phonenumber ? auth()->user()->phonenumber : '' }}");
                    console.log("{{ auth()->user()->username }}");
                });
            </script>
        @else
            <script>
                $(document).ready(function() {
                    // User is not authenticated, do something else or leave it empty
                });
            </script>
        @endif
    </div>

    <!-- contact-area-end -->
@endsection
