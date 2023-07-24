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