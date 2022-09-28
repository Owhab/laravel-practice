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
```
Route::get("/demo",[DemoController::class, 'Index']);
``` 
In this route, The ```Index``` refers the ```Index``` function in the controller
- From ```Index``` function of ```DemoController.php``` need to view the ```demo.php``` view; 

## Using named routes
To use first need to add a name to the route. Route naming example: 
```
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome-page');
```
When linking the route we need to use the route name that is defined in the ```web.php``` file like this..
```
    <a href= "{{route('welcome-page')}}">Welcome</a>
```
## Creating Controller 
run this command to the terminal
````
php artisan make:controller DemoController
````

### Using controller 
First need to import the controller in ```web.php``` file like this 
````
use App\Http\Controllers\DemoController;

````
Then need to use the controller like this with the method name.  
````
Route::get("/projects", [ProjectController::class, 'index']);

````
