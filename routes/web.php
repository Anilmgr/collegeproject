<?php

//if login success for normal users...
Route::get('/dashboard','DashboardController@index');

//this helps to have common routes(those who need authetication) binds 
//problem is on using it, default login and custom admin login may conflict
//instead i used Session for my login, and default login is handle by it's own code...
//I am not using this , because it assumes the laravel default auth
Route::group(['middleware' => ['auth']],function(){
		
});

//login form for admin...
Route::match(['get','post'],'/admin','AdminController@login');

//if login success for admin...
Route::get('admin/dashboard', 'AdminController@dashboard');

Route::Auth();
//view the list of users...
Route::get('/admin/view','AdminController@view');

//view the list of admins...
Route::get('/admin/view2','AdminController@view_admins');

//simple logout functionality...
Route::get('/logout', 'AdminController@logout');

//to delete the users...
Route::get('/admin/delete/{id}','AdminController@delete');

//form to add users...
Route::match(['get','post'],'/admin/add_user','AdminController@register_users');

//to update users...
Route::get('/admin/{id}/edit','AdminController@edit');    

Route::patch('/admin/update/{id}',[
    'uses' =>'AdminController@update',
    'as'   => 'admin.update'
]);


//view the list of submenus...
Route::get('/submenu/view','SubmenuController@index');

//form to create submenu...
Route::get('/submenu/create','SubmenuController@create');

//to update menus...
Route::get('/menu/{id}/edit','MenuController@edit');

//view the list of menus...
Route::get('/menu/view','MenuController@index');

//to toogle active to inactive and vice-versa in button pressed
Route::get('/admin/toogle/{id}','AdminController@toogle_status');
Route::get('/menu/toogle/{id}','MenuController@toogle_status');
Route::get('/submenu/toogle/{id}','SubmenuController@toogle_status');

Route::patch('/menu/update/{id}',[
    'uses' => 'MenuController@update',
    'as'  => 'menu.update'
]);
    
//to delete the menus...
Route::get('/menu/delete/{id}','MenuController@destroy');
Route::get('/submenu/delete/{id}','SubmenuController@destroy');

//for menus...
Route::resource('menus','MenuController');

Route::post('/menus/store',[
        'uses'=>'MenuController@store',
        'as'=>'menu.store'
    ]);

Route::post('/submenus/store',[
        'uses'=>'SubmenuController@store',
        'as'=>'submenu.store'
    ]);

//to update submenus...
Route::get('/submenu/{id}/edit','SubmenuController@edit');

Route::patch('/submenu/update/{id}',[
    'uses' => 'SubmenuController@update',
    'as'  => 'submenu.update'
]);

//table of contents 

//form to create tabel_content
Route::get('/tablecontent/create','tableofcontentcontroller@create');

// TO STORE IN DATABASES 
Route::post('/tablecontent/store',[
        'uses'=>'tableofcontentcontroller@store',
        'as'=>'tablecontents.store'
    ]);
//to view tablecontent
Route::get('/tablecontent/view','tableofcontentcontroller@index');

//to update table content
Route::get('/tablecontent/{id}/edit','tableofcontentcontroller@edit');

Route::patch('/tablecontent/update/{id}',[
    'uses'=>'tableofcontentcontroller@update',
    'as'=>'tablecontents.update'
]);

//to delete the row of tablecontent
Route::get('tablecontent/delete/{id}','tableofcontentcontroller@destroy');

//to change status 
Route::get('/content/toogle/{id}','tableofcontentcontroller@toogle');

//tochange featured status
Route::get('/content/feature/{id}','tableofcontentcontroller@feature');

//view tabeofcontent
Route::get('/content/view/{id}','tableofcontentcontroller@view');

//Teachers Profile  part:
// Route::resource('teachers','TeacherController');
// Route::get('view/teachers_list','TeacherController@index');
// we have to add shwo($id) to add encypted id on slugs with route below:
//Route::get('teacher/dashboard/{id}','TeacherController@show');

//To show the profile of teacher:
Route::get('dashboard/1/profile','TeacherController@show_profile');

//To add the deatails of the teacher:
Route::get('dashboard/1/add_profile','TeacherController@create');
Route::post('teacher/add_profile','TeacherController@store');


//page controller
Route::get('/{{ $menu->slug }}/{{ $submenu->slug }}','PageController@index');

//homepage
Route::get('/homepage/featuredposts','HomeController@featuredposts');
Route::get('/homepage/services','HomeController@services');
Route::get('/homepage/counter','HomeController@counter');
Route::get('/homepage/courses','HomeController@courses');

//simple postscontrollers...
Route::get('/','PageController@page');
Route::get('/{slug}','PageController@page');
Route::get('/{slug}/{subslug}','PageController@page');
