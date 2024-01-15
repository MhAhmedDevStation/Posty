@extends('layouts.app')

@section('content')
    {{-- <div class="flex justify-center">
        <div class="w-4/12 rounded-lg bg-white p-6">

            <form
                action="{{ route('register') }}"
                method="post"
            >
                @csrf
                <div class="mb-4">
                    <label
                        for="name"
                        class="sr-only"
                    >Name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Your name"
                        class="@error('name') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                        value="{{ old('name') }}"
                    >
                    @error('name')
                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label
                        for="username"
                        class="sr-only"
                    >Username</label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        placeholder="Username"
                        class="@error('username') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                        value="{{ old('username') }}"
                    >
                    @error('username')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

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

                <div class="mb-4">
                    <label
                        for="password_cofnfirmation"
                        class="sr-only"
                    >Password again</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="Repeat your password"
                        class="@error('password_cofnfirmation') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                    >
                    @error('password_cofnfirmation')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button
                        type="submit"
                        class="w-full rounded bg-blue-500 px-4 py-3 font-medium text-white"
                    >Register</button>
                </div>
            </form>
        </div>

    </div>  --}}
    <!-- breadcrumb-area-start -->
    <div
        class="breadcrumb-area pt-150 pb-150 theme-overlay"
        style="background-image:url({{ asset('images/breadcrumb/breadcrumb17.jpg') }})"
    >
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div
                        class="breadcrumb-content wow fadeInUp"
                        data-wow-delay=".3s"
                    >
                        <h1>Registration</h1>
                        <a href="">Home<i class="fa fa-angle-double-right"></i></a>Registration
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- registration-form-area-start -->
    <div class="registration-form-area pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div
                        class="registration-inner wow fadeInUp"
                        data-wow-delay=".4s"
                    >
                        <h5><i class="fa-solid fa-user-pen"></i>Registration Form</h5>

                        <form
                            action="{{ route('register') }}"
                            method="post"
                        >
                            @csrf

                            <label for="firstname">Your first Name<span>**</span></label>
                            <input
                                type="text"
                                name="firstname"
                                id="firstname"
                                placeholder="first name"
                                class="@error('firstname') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                value="{{ old('firstname') }}"
                                required=""
                            >
                            @error('firstname')
                                <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                            @enderror
                            <label for="lastname">Your Last Name<span>**</span></label>
                            <input
                                type="text"
                                name="lastname"
                                id="lastname"
                                placeholder="last name"
                                class="@error('lastname') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                value="{{ old('lastname') }}"
                                required=""
                            >
                            @error('lastname')
                                <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                            @enderror
                            <label for="username">Your User Name<span>**</span></label>
                            <input
                                type="text"
                                name="username"
                                id="username"
                                placeholder="user name"
                                class="@error('username') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                value="{{ old('username') }}"
                                required=""
                            >
                            @error('username')
                                <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                            @enderror
                            <label for="email">Your Email<span>**</span></label>
                            <input
                                type="text"
                                name="email"
                                id="email"
                                placeholder="your email"
                                class="@error('email') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                value="{{ old('email') }}"
                                required=""
                            >
                            @error('email')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="password">Your Password<span>**</span></label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Choose a password"
                                class="@error('password') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                required=""
                            >
                            @error('password')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="password_cofnfirmation">Retype Password<span>**</span></label>
                            <input
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                placeholder="Repeat your password"
                                class="@error('password_cofnfirmation') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                required=""
                            >
                            @error('password_confirmation')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input
                                class="wow fadeInUp"
                                data-wow-delay=".6s"
                                type="submit"
                                value="Sing Up"
                            >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- registration-form-area-end -->
@endsection
