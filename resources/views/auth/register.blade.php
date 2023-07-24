@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
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

    </div>
@endsection
