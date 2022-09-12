# This is Laravel Practicing Project


## Creating Route
Here is the demo code to create a route in laravel in `web.php` in routes folder.
```
Route::get('/test', function () {
    return view('test');
});
```

## Loading view pages from controller
- First need to create a controller by using this command ```php artisan make:controller DemoController```
- Then need to call it from router ```web.php``` file like this 
```Route::get("/demo",[DemoController::class, 'Index']);
``` In this route, The ```Index``` refers the ```Index``` function in the controller
- From ```Index``` function of ```DemoController.php``` need to view the ```demo.php``` view; 