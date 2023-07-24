<!-- creating migration Table -->
-> php artisan migrate
<!-- creation a migration custom file -->
 php artisan make:migration add_username_to_table
<!-- to show validation errors  -->
 @error('name')
    div.text-red-500
        $message
    /div
 @enderror

<!-- keeping form trace -->
 value="{{old('name')}}


 <!-- if else  -->

@if (auth()->user())
				<li>
					<a href=""
						class="p-3">ahmed</a>
				</li>

				<li>
					<a href=""
						class="p-3">Logout</a>
				</li>
			@else
				<li>
					<a href=""
						class="p-3">Login</a>
				</li>
				<li>
					<a href="{{ route('register') }}"
						class="p-3">Register</a>
				</li>
@endif

<!-- other way for auth -->
@auth
