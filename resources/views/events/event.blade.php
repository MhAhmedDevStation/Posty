@extends('layouts.app')

@section('content')
    <!-- Include Bootstrap and jQuery scripts -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}

    {{-- <form
            action="{{ route('logout') }}"
            method="post"
            class="inline"
        >
            @csrf --}}

    <!-- breadcrumb-area-start -->
    <div
        class="breadcrumb-area pt-150 pb-150 theme-overlay"
        style="background-image: url({{ asset('images/breadcrumb/breadcrumb2.jpg') }})"
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
                    @auth
                        <div class="col-xl-12">
                            <button
                                type="button"
                                class="btn t-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                {{-- data-bs-whatever="@getbootstrap" --}}
                            >Create Event</button>

                        </div>
                    @endauth
                </div>

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
                            id="event{{ $event->id }}"
                            data-wow-delay=".3s"
                        >
                            <div class="event-img event-img-3">
                                <img
                                    src="{{ env('APP_STORAGE') }}{{ optional(json_decode($event->image))->path }}"
                                    alt="{{ $event->title }}"
                                >
                                {{-- C:\xampp\htdocs\posty\storage\app\images\NVYwjhgw7yFpvUib7utrRPTw0W8qwXDHMlyJ2gTB.jpg --}}
                            </div>
                            <div class="event-content-2 event-content-3">
                                <h2><a href="#">{{ $event->title }}</a></h2>
                                <ul>

                                    <li><i class="fa-solid fa-person"></i><a>By: {{ optional($event->user)->firstname }}
                                            {{ optional($event->user)->lastname }}</a>
                                    <li><i class="fa-solid fa-map-location"></i><a href="#">{{ $event->location }}</a>
                                    </li>
                                    <li><i class="far fa-calendar-alt"></i>{{ $event->start_date->format('F j, Y') }}</li>
                                </ul>
                                <p>{{ $event->description }}</p>
                                <div class="event-3-btn">
                                    @auth
                                        @if (auth()->check() && auth()->user()->id === $event->user_id)
                                            <form
                                                action="{{ route('events.destroy', $event) }}"
                                                method="post"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    type="submit"
                                                    class="d-btn"
                                                >Delete</button>
                                            </form>

                                            <button
                                                data-event-data='@json($event)'
                                                type="button"
                                                class="d-btn update-event-btn"
                                                data-bs-toggle="modal"
                                                data-bs-target="#updateEventModal"
                                                onclick="showModalUpdate({{ json_encode($event) }})"
                                            >Update</button>
                                        @else
                                            <form
                                                {{-- action="{{ route('other.action', $event) }}" --}}
                                                method="post"
                                            >
                                                @csrf
                                                <button
                                                    type="submit"
                                                    class="t-btn"
                                                >BOOOK NOW</button>
                                            </form>
                                        @endif
                                    @endauth
                                    @guest
                                        <form action="{{ route('login') }}">
                                            @csrf
                                            <button
                                                type="submit"
                                                class="t-btn"
                                            >Login to register</button>
                                        </form>
                                    @endguest
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

    <!-- upcoming-event-3-area-end-->
    <!-- modal-create -->

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
    <!-- modal-update -->

    <div
        class="modal fade"
        id="updateEventModal"
        tabindex="-1"
        aria-labelledby="updateEventModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Update Form</h5>
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
                                    id="updateEventForm"
                                >
                                    @csrf
                                    @method('PUT')
                                    <label for="title">Title<span>**</span></label>
                                    <input
                                        type="text"
                                        name="title"
                                        id="updatetitle"
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
                                        id="updatedescription"
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
                                        id="updatenb_seats"
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
                                        id="updateimage"
                                        class="@error('image') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        accept="image/*"
                                        required=""
                                    >
                                    <label for="filenameDisplay"> <span id="filenameDisplay"></span></label>

                                    @error('image')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror

                                    <label for="location">Location<span>**</span></label>
                                    <input
                                        type="text"
                                        name="location"
                                        id="updatelocation"
                                        placeholder="Location"
                                        class="@error('location') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        value="{{ old('location') }}"
                                    >
                                    @error('location')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror

                                    <label for="start_date">Start Date<span>**</span></label>
                                    <input
                                        type="datetime-local"
                                        name="start_date"
                                        id="updatestart_date"
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
                                        id="updateend_date"
                                        class="@error('end_date') border-red-500 @enderror w-full rounded-lg border-2 bg-gray-100 p-4"
                                        value="{{ old('end_date') }}"
                                        required=""
                                    >
                                    @error('end_date')
                                        <div class="mt-2 text-sm text-red-500"> {{ $message }}</div>
                                    @enderror
                                    <button
                                        type="button"
                                        class="d-btn"
                                        onclick="updateEvent()"
                                    >Update</button>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript for Update Event Modal -->
    @php
        $isAuthenticated = auth()->check();
        $userId = $isAuthenticated ? auth()->user()->id : null;
    @endphp

    <script>
        var isAuthenticated = @json($isAuthenticated);
        var userId = @json($userId);
    </script>
    <script>
        // Function to show the update modal
        function showModalUpdate(eventData) {
            // Update this line accordingly
            // Populate the modal with event data
            populateUpdateModal(eventData);

            // Show the modal
            $('#updateEventModal').modal('show');
            $('#updateEventModal').data('event-id', eventData.id);
        }

        // Function to populate the update modal with event data
        function populateUpdateModal(eventData) {
            console.log('Event Data:', eventData);
            var imageObject = eventData.image ? JSON.parse(eventData.image) : null;
            var imageName = imageObject ? imageObject.name : '';
            // Assuming your modal form fields have IDs, update them accordingly
            $('#updatetitle').val(eventData.title);
            $('#updatedescription').val(eventData.description);
            $('#updatenb_seats').val(eventData.nb_seats);
            $('#updatelocation').val(eventData.location);
            $('#updatestart_date').val(formatDateTimeLocal(eventData.start_date));
            $('#updateend_date').val(formatDateTimeLocal(eventData.end_date));
            $('#filenameDisplay').text(imageName);

        }

        function formatDateTimeLocal(dateString) {
            const date = new Date(dateString);
            const formattedDate = date.toISOString().slice(0, 16); // Format: YYYY-MM-DDTHH:mm
            return formattedDate;
        }

        function updateEvent() {
            var eventId = $('#updateEventModal').data('event-id');
            var eventData = $('#updateEventModal').data('event-data');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData($('#updateEventForm')[0]);
            formData.append('_method', 'PUT');
            $.ajax({
                url: '/events/' + eventId,
                method: 'POST', // Use POST method to handle FormData
                data: formData,
                processData: false, // Important: prevent jQuery from processing the data
                contentType: false, // Important: prevent jQuery from setting contentType
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    // Handle success
                    $('#updateEventModal').modal('hide');
                    console.log('response event:', response.message);
                    const appStorage = "{{ env('APP_STORAGE') }}";
                    var event = response.message
                    var imageObject = event.image ? JSON.parse(event.image) : null;
                    var imagePath = imageObject && imageObject.path ? appStorage + imageObject.path : '';
                    var myElement = document.getElementById('event' + response.message.id);
                    console.log('myElement :', myElement)
                    myElement.innerHTML = `
                    <div class="event-img event-img-3">
                        <img src="${imagePath}" alt="${event.title}">                               
                            </div>
                            <div class="event-content-2 event-content-3">
                                <h2><a href="#">${event.title}</a></h2>
                                <ul>
                                    <li><i class="fa-solid fa-person"></i><a>By: ${event.user.firstname} ${event.user.lastname}</a></li>                                       
                                    <li><i class="fa-solid fa-map-location"></i><a href="#">${event.location}</a></li>                                    
                                    <li><i class="far fa-calendar-alt"></i>${new Date(event.start_date).toLocaleDateString()}</li>
                                </ul>
                                <p>${event.description}</p>
                                <div class="event-3-btn">
                                ${isAuthenticated ? userId === event.user_id ? 
                                    `<form action="{{ route('events.destroy', $event) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="d-btn">Delete</button>
                                        </form>
                                                <button
                                                    data-event-data='${JSON.stringify(event)}'
                                                    type="button"
                                                    class="d-btn update-event-btn"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#updateEventModal"
                                                    onclick="showModalUpdate(${JSON.stringify(event)})">Update
                                                </button>`
                                    :`<form method="post">
                                            @csrf
                                            <button type="submit" class="t-btn">BOOOK NOW</button>
                                        </form>`
                                    :`<form action="{{ route('login') }}">
                                            @csrf
                                             <button type="submit" class="t-btn">Login to register</button>
                                            </form>`}
                                    <a
                                        href="#"
                                        class="event-3-t-btn"
                                    ><i class="fa-solid fa-ticket-simple"></i> ${event.nb_seats} Seat Available</a>
                                </div>
                            </div>
                    `
                },
                error: function(error) {
                    console.error('Error updating event:', error);
                }
            });

            // return false; // Prevent form submission
        }
    </script>
@endsection
