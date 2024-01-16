@extends('layouts.app')

@section('content')
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
                        <h1>Login</h1>
                        <a href="index.html">Home<i class="fa fa-angle-double-right"></i></a>Login
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- registration-form-area-start -->
    {{-- <div class="registration-form-area pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="flex justify-center">
                    <div class="w-4/12 rounded-lg bg-white p-6">
                        @if (session('status'))
                            <div class="mb-6 rounded-lg bg-red-500 p-4 text-center text-white">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form
                            action="{{ route('login') }}"
                            method="post"
                        >
                            @csrf

                            <div class="mb-4">
                                <label
                                    for="email"
                                    class="sr-only"
                                >Email</label>
                                <input
                                    type="text"
                                    name="email"
                                    id="email"
                                    placeholder="Your email"
                                    class="@error('email') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                    value="{{ old('email') }}"
                                >

                                @error('email')
                                    <div class="mt-2 text-sm text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label
                                    for="password"
                                    class="sr-only"
                                >Password</label>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="Choose a password"
                                    class="@error('password') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                >
                                @error('password')
                                    <div class="mt-2 text-sm text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <button
                                    type="submit"
                                    class="w-full rounded bg-blue-500 px-4 py-3 font-medium text-white"
                                >Login</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <div class="registration-form-area pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div
                        class="registration-inner wow fadeInUp"
                        data-wow-delay=".4s"
                    >
                        <h5><i class="fa-solid fa-arrow-right-to-bracket"></i>Login Now</h5>
                        <form
                            action="{{ route('login') }}"
                            method="post"
                        >
                            @csrf
                            {{-- userName --}}
                            {{-- <label for="username">Your User Name<span>**</span></label>
                            <input
                                id="username"
                                type="text"
                                placeholder="User Name"
                                required=""
                            > --}}
                            {{-- Email --}}
                            <label for="login">Your Email<span>*OR*</span> User Name </label>
                            <input
                                type="text"
                                name="login"
                                id="login"
                                placeholder="Your email"
                                class="@error('login') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                value="{{ old('login') }}"
                            >
                            @error('login')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            {{-- password --}}
                            <label for="yourpassword">Your Password<span>**</span></label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Your Password"
                                class="@error('password') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                            >
                            @error('password')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            {{-- rememberme --}}
                            <div class="radio-btn">
                                <input
                                    type="checkbox"
                                    id="login-remember"
                                >
                                <label
                                    for="yourpassword"
                                    class="radio-btn"
                                >Remember Me</label>
                                <a
                                    class="forget-password"
                                    href=""
                                >Forgotten password?</a>
                            </div>
                            {{-- submit --}}
                            <input
                                class="wow fadeInUp"
                                data-wow-delay=".7s"
                                type="submit"
                                value="Login"
                            >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- registration-form-area-end -->
@endsection
