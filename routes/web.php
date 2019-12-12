<?php
// route cho phần trang chủ
Route::get('/', 'FrontendController@index')->name('home-page');


// route cho phần giới thiệu
Route::view('ve-vlady', 'about.vlady')->name('about-vlady');

Route::view('ve-nhunglady', 'about.nhunglady')->name('about-nhunglady');


// route liên hệ
Route::view('lien-he', 'contact.create')->name('contact-us');

Route::post('lien-he', 'ContactFormController@store');     /*contact form route*/


// route cho phần classes
Route::get('khoa-hoc-truc-tiep', 'CoursesController@showCourses')->name('classes');


Route::get('khoa-hoc-truc-tiep/{slug}/{id}', 'CoursesController@showCourse')->name('course');

Route::post('khoa-hoc-truc-tiep/{slug}/{id}', 'RegisterFormController@store'); /* register form route */


// route cho phần event
Route::get('su-kien', 'EventsController@showEvents')->name('events');


Route::get('su-kien/{slug}/{id}', 'EventsController@showEvent')->name('event');

Route::post('su-kien/{slug}/{id}', 'EventFormController@store');    /*register form route*/


Route::get('su-kien/ha-noi', 'EventsController@showHanoi')->name('hanoievents');

Route::get('su-kien/hcm', 'EventsController@showHcm')->name('hcmevents');


Route::redirect('/login', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Courses
    Route::delete('courses/destroy', 'CoursesController@massDestroy')->name('courses.massDestroy');
    Route::post('courses/media', 'CoursesController@storeMedia')->name('courses.storeMedia');
    Route::resource('courses', 'CoursesController');

    // Events
    Route::delete('events/destroy', 'EventController@massDestroy')->name('events.massDestroy');
    Route::post('events/media', 'EventController@storeMedia')->name('events.storeMedia');
    Route::resource('events', 'EventController');

    // Clients
    Route::delete('clients/destroy', 'ClientsController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
