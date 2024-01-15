@extends('layouts.app')

@section('content')
    {{-- <form
            action="{{ route('logout') }}"
            method="post"
            class="inline"
        >
            @csrf --}}

    <!-- breadcrumb-area-start -->
    <div
        class="breadcrumb-area pt-150 pb-150 theme-overlay"
        style="background-image:url({{ asset('images/breadcrumb/breadcrumb2.jpg') }})"
    >
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div
                        class="breadcrumb-content wow fadeInUp"
                        data-wow-delay=".3s"
                    >
                        <h1>Events</h1>
                        <a href="/">Home<i class="fa fa-angle-double-right"></i></a>Event
                    </div>
                </div>
                @auth
                    <div class="col-xl-12">
                        <button
                            type="button"
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                            data-bs-whatever="@getbootstrap"
                        >Create Event</button>

                    </div>
                @endauth

            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- upcoming-event-3-area-start-->
    <div class="upcoming-event-2 pt-110 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    @foreach ($events as $event)
                        <script>
                            console.log(@json($event));
                        </script>
                        <div
                            class="single-event single-event-3 mb-30 wow fadeInUp"
                            data-wow-delay=".3s"
                        >
                            <div class="event-img event-img-3">
                                <img src="{{ env('APP_STORAGE') }}{{ optional(json_decode($event->image))->path }}" alt="{{ $event->title }}">
                                {{-- C:\xampp\htdocs\posty\storage\app\images\NVYwjhgw7yFpvUib7utrRPTw0W8qwXDHMlyJ2gTB.jpg --}}
                            </div>
                            <div class="event-content-2 event-content-3">
                                <h2><a href="#">{{ $event->title }}</a></h2>
                                <ul>
                                    
                                    <li><i class="fa-solid fa-person"></i><a>By: {{ optional($event->user)->firstname }} {{ optional($event->user)->lastname }}</a>
                                    <li><i class="fa-solid fa-map-location"></i><a href="#">{{ $event->location }}</a>
                                    </li>
                                    <li><i class="far fa-calendar-alt"></i>{{ $event->start_date->format('F j, Y') }}</li>
                                </ul>
                                <p>{{ $event->description }}</p>
                                <div class="event-3-btn">
                                    <a
                                        href="#"
                                        class="t-btn"
                                    >Book Now</a>
                                    <a
                                        href="#"
                                        class="event-3-t-btn"
                                    ><i class="fa-solid fa-ticket-simple"></i> {{ $event->nb_seats }} Seat Available</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Event Form</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div
                    class="modal-body"
                    style="padding: 0px"
                >

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="registration-inner">

                                <form
                                    action="{{ route('events') }}"
                                    method="post"
                                    enctype="multipart/form-data"
                                >
                                    @csrf

                                    <label for="title">Title<span>**</span></label>
                                    <input
                                        type="text"
                                        name="title"
                                        id="title"
                                        placeholder="title"
                                        class="@error('title') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        required=""
                                    >
                                    @error('title')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror
                                    <label for="description">Description<span>**</span></label>
                                    <input
                                        type="text"
                                        name="description"
                                        id="description"
                                        placeholder="description"
                                        class="@error('description') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        value="{{ old('description') }}"
                                        required=""
                                    >
                                    @error('description')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror
                                    <label for="nb_seats">Number of Seats<span>**</span></label>
                                    <input
                                        type="number"
                                        name="nb_seats"
                                        id="nb_seats"
                                        placeholder="Number of seats"
                                        class="@error('nb_seats') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        value="{{ old('nb_seats') }}"
                                        required=""
                                    >
                                    @error('nb_seats')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror

                                    <label for="image">Image <span>**</span></label>
                                    <input
                                        type="file"
                                        name="image"
                                        id="image"
                                        class="@error('image') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        accept="image/*"
                                        required=""
                                    >
                                    @error('image')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror

                                    <label for="location">Location<span>**</span></label>
                                    <input
                                        type="text"
                                        name="location"
                                        id="location"
                                        placeholder="Location"
                                        class="@error('location') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        value="{{ old('location') }}"
                                        required=""
                                    >
                                    @error('location')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror

                                    <label for="start_date">Start Date<span>**</span></label>
                                    <input
                                        type="datetime-local"
                                        name="start_date"
                                        id="start_date"
                                        class="@error('start_date') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        value="{{ old('start_date') }}"
                                        required=""
                                    >
                                    @error('start_date')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror

                                    <label for="end_date">End Date<span>**</span></label>
                                    <input
                                        type="datetime-local"
                                        name="end_date"
                                        id="end_date"
                                        class="@error('end_date') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        value="{{ old('end_date') }}"
                                        required=""
                                    >
                                    @error('end_date')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror
                                    <input
                                        type="submit"
                                        value="Create"
                                    >
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- upcoming-event-3-area-end-->
@endsection
