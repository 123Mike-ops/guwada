<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


      //Guest Route

Route::get('/','pagecontroller@index');
Route::get('Guest/Home','GuestController@index');


    //Admin,RestaurantAdmin// BarcafeAdminRoute
Route::group(['middleware' => ['RestaurantAdmin']], function () {
  
   Route::get('RestaurantAdmin/dashboard',[
      'uses'=>'RestaurantAdminController@index',
      'as'=>'restaurantadmin.dashboard'
   ]);

   Route::get('dashboard/FoodCreate',[
      'uses'=>'RestaurantAdminController@create',
       'as'=>'dashboard.foodcreate'
   ]);

   Route::get('dashboard/show/{name}',[
      'uses'=>'RestaurantAdminController@show',
       'as'=>'dashboard.itemshow'
   ]);
   Route::get('dashboard/{name}',[
      'uses'=>'RestaurantAdminController@menushow',
       'as'=>'dashboard.menushow'
   ]);
   Route::get('dashboardM/{name}',[
      'uses'=>'RestaurantAdminController@ShowMessage',
       'as'=>'dashboard.messageshow'
   ]);
   Route::get('dashboardC/{name}',[
      'uses'=>'RestaurantAdminController@customershow',
       'as'=>'dashboard.customershow'
   ]);

   Route::post('FoodCreate/store/{name}',[
      'uses'=>'RestaurantAdminController@store',
       'as'=>'food.store'
   ]);

   Route::get('dashboard/mykitchen/{name}',[
      'uses'=>'RestaurantAdminController@mykitchenshow',
       'as'=>'mykitchen.show'
   ]);
   Route::get('dashboard/{name}/{userid}',[
      'uses'=>'RestaurantAdminController@mybookingshow',
       'as'=>'mybooking.show'
   ]);
   Route::get('dashboardD/{name}/{userid}',[
      'uses'=>'RestaurantAdminController@mydeliveryshow',
       'as'=>'mydelivery.show'
   ]);
   Route::get('dashboard/OrderDetail/{restId}/{foodId}/{created_at}/{userId}',[
      'uses'=>'RestaurantAdminController@OrderDetail',
       'as'=>'Order.Detail'
   ]);

   Route::get('mydelivery/{userId}/{restId}',[
      'uses'=>'RestaurantAdminController@OrderDetailEach',
       'as'=>'Order.DetailEach'
   ]);
   Route::get('mybooking34/{userId}/{restId}',[
      'uses'=>'RestaurantAdminController@BookOrderDetailEach',
       'as'=>'BookOrder.DetailEach'
   ]);
   Route::get('dashboard/BookOrderDetail/{restId}/{food_id}/{userId}/{bookId}',[
      'uses'=>'RestaurantAdminController@BookOrderDetail',
       'as'=>'BookOrder.Detail'
   ]);
   Route::get('BookOrderDetail/{id}',[
      'uses'=>'RestaurantAdminController@OrderStarted',
       'as'=>'UseIngrident'
   ]);
   Route::get('/Order/{typeId}/{userId}/{foodId}/{created_at}',[
      'uses'=>'RestaurantAdminController@CheckCook',
       'as'=>'check.cook'
   ]);
   Route::get('Book/finish/{bookId}/{restId}',[
      'uses'=>'RestaurantAdminController@BookCheckCook',
       'as'=>'Bookcheck.cook'
   ]);

   Route::get('mydelivery/{mydeliveryid}',[
      'uses'=>'RestaurantAdminController@AssignDriver',
       'as'=>'Assign.Driver'
   ]);
   Route::post('AssignDriver/{id}/{mydeliveryid}',[
      'uses'=>'RestaurantAdminController@AssignStore',
       'as'=>'Assign.store'
   ]);
   Route::get('MyKitchen/modify/{name}',[
      'uses'=>'RestaurantAdminController@ModifyItem',
       'as'=>'mykitchen.modifyitem'
   ]);
   Route::post('ModifyItem/{name}/{number}',[
      'uses'=>'RestaurantAdminController@AddType',
       'as'=>'modifyitem.addtype'
   ]);

   //routes for Adding ingrident in each stage 
   Route::post('AddIngridentStage1/{foodid}/{restaurantid}/{typeid}/{number}',[
      'uses'=>'StageController@store',
       'as'=>'AddIngridentStage1.store'
   ]);

            Route::get('DailyReoprt/{status}/{name}/{userid}',[
               'uses'=>'RestaurantAdminController@dailyreport',
               'as'=>'daily.report'
            ]);


            Route::get('WeeklyReoprt/{status}/{name}/{userid}',[
               'uses'=>'RestaurantAdminController@weeklyreport',
               'as'=>'weekly.report'
            ]);

            Route::get('MonthlyReoprt/{status}/{name}/{userid}',[
               'uses'=>'RestaurantAdminController@monthlyreport',
               'as'=>'monthly.report'
            ]);


  



});    




Auth::routes();

Route::group(['middleware' => ['admin']], function () {
   // Route::get('admin-view', 'HomeController@adminView')->name('admin.view');
   
   Route::get('/admin/dashboard',[
            'uses'=> 'AdminController@adminpage',
            'as'=>'admin.dashboard'
            ]);
         
   
   Route::get('AddAdmins',[
            'uses'=>'AdminController@CreateAdmins',
            'as'=>'Add.Admins'
      ]);
   Route::get('AddDriver',[
         'uses'=>'DeliverManController@Create',
         'as'=>'Add.Driver'
       ]);
   Route::post('AddDriver/store',[
      'uses'=>'DeliverManController@store',
      'as'=>'driver.store'
      ]);
   Route::get('AdminHome',[
      'uses'=> 'AdminController@adminpage',
         'as'=>'Admin.Home'
      ]);
   Route::get('AddRestaurant',[
         'uses'=>'RestaurantController@create',
         'as'=>'create.restaurant'
      ]);
   Route::get('dashboard/{id}',[
      'uses'=>'RestaurantController@edit',
      'as'=>'restaurant.edit'
   ]);
   Route::post('EditRestaurant/update/{id}',[
      'uses'=>'RestaurantController@update',
      'as'=>'restaurant.update'
   ]);
   Route::post('/AddRestaurant/store',[

      'uses'=>'RestaurantController@store',

      'as'=>'restaurant.store'
   ]);

   Route::post('/AddAdmins/ConfirmAddAdmin',[

      'uses'=>'AdminController@confirm',
      'as'=>'Add.Admin'
   ]);
   Route::post('/ConfirmAddAdmin',[
      'uses'=>'AdminController@store',
      'as'=>'Admin.store'

   ]);

});


   // Route::get('signup','pagecontroller@signup');









Route::group(['middleware'=>'auth'],function (){ 

            Route::get('send','NotificationController@index');

            Route::get('/notifications', 'CartController@notifications');

            Route::get('mainkitchen/pan/{foodId}/{restId}/{userId}',[

            'uses'=>'RestaurantController@pan',
            'as'=>'mainkitchen.pan']);

            Route::get('Index/pan/{foodId}/{restId}/{userId}',[

               'uses'=>'RestaurantController@Guestpan',
               'as'=>'type.show']);

            //Guest Routes
                        Route::get('GuestCartBook/StoreCart/',[

                           'uses'=>'pagecontroller@Guest',
                           'as'=>'HomeGuest'
                           ]);
                        
                        Route::get('Index/{food_id}/{restId}/{userId}',[

                        'uses'=>'RestaurantController@panGuest',
                        'as'=>'type.showGuest']);
                        Route::get('Guest/pan/{food_id}/{restId}/{typeId}/{userId}',[
                           'uses'=>'FoodController@startcookGuest',
                           'as'=>'panGuest'
                           ]);
                        Route::get('Guest/StartCook/{food_id}/{restId}/{typeId}/{userId}',[
                           'uses'=>'OrderController@storeOrderGuest',
            
                           'as'=>'GuestOrderCook'
                           ]);
                        Route::get('Guest/layout/{userId}',[
                           'uses'=>'CartController@GuestShowCart',
                           'as'=>'GuestShow.Cart'
                              ]);
                        Route::post('Guest/Book/{food_id}/{restId}/{typeId}/{userId}/{restname}',[

                           'uses'=>'CartController@AddGuestCartBook',
                           'as'=>'GuestBook.Cart'

                           ]);
                        Route::get('Guestcart/{id}',[
                           'uses'=>'CartController@destroyGuest',
                           'as'=>'RemoveGuest.Cart'
                              ]);
                        Route::post('Guest/CartConfirm/{totalPrice}/{userId}',[
                           'uses'=>'BookingController@FinalBookStoreReservationGuest',
            
                           'as'=>'Confirm.AllGuest'
                           ]);
                           Route::get('Gest/StartCook/{id}/{userId}',[
                              'uses'=>'FoodController@destroyIngridentGuest',
                              'as'=>'remove.Guestorder'
                                 ]);
                        Route::get('Layout/{userId}',[

                           'uses'=>'RestaurantController@SeeOrders',
                           'as'=>'see.orders']);

                             
            
            Route::get('pan/startcook/{foodId}/{restId}/{typeId}/{userId}',[
               'uses'=>'FoodController@startcook',
               'as'=>'pan.startcook'
               ]);
            Route::get('startcook/{foodId}/{restId}/{typeId}/{userId}/{stageId}/{ingrident}',[
               'uses'=>'FoodController@storeIngrident',
               'as'=>'ingrident.store'
               ]);

            Route::get('startcookR/{foodId}/{restId}/{typeId}/{userId}',[
               'uses'=>'OrderController@storeReservation',

               'as'=>'Reservation'
               ]);
            Route::get('RestaurantApp/{userId}',[
               'uses'=>'UserController@edit',

               'as'=>'Profile.Edit'
               ]);
            Route::post('RestaurantAppS/{userId}',[
               'uses'=>'UserController@StoreProfile',

               'as'=>'profile.store'
               ]);
            Route::post('order/{foodId}/{restId}/{typeId}/{userId}/{restname}',[
               'uses'=>'CartController@AddCart',

               'as'=>'delivery.post'
               ]);
            Route::post('Book/{foodId}/{restId}/{typeId}/{userId}/{restname}',[
               'uses'=>'CartController@AddCartBook',

               'as'=>'book.cart'
               ]);
            Route::post('Cart/{totalPrice}/{userId}',[
               'uses'=>'DeliveriesController@FinalStoreDelivery',

               'as'=>'Confirm.All'
               ]);
            Route::post('BookCart/{totalPrice}/{userId}',[
               'uses'=>'BookingController@FinalBookStoreReservation',

               'as'=>'Confirm.AllBook'
               ]);

            Route::get('confirm',[

               'uses'=>'OrderController@confirm',

               'as'=>'confirm'
            ]
            );
            Route::post('confirm/{Id}/{price}',[
               'uses'=>'DeliveriesController@confirmDelivery',
               'as'=>'confirm.home'
            ]
            );
            Route::post('confirmation/Message/{restId}/{userId}',[
               'uses'=>'MessageController@storeMessage',
               'as'=>'send.message'
            ]
            );
            Route::get('MainKitchen/{restId}/{userId}',[
               'uses'=>'CustomerController@store',
               'as'=>'Add.Customer'
            ]);
            Route::get('startcook/{foodId}/{restId}/{typeId}/{userId}',[
               'uses'=>'OrderController@storeOrder',
               'as'=>'delivery'
               ]);
       
            Route::get('/Chooser/show/{id}',[
               'uses'=>'RestaurantController@show',
               'as'=>'restaurant.show'
                     ]);
            Route::get('/kitchen/show/{id}/{foodId}',[
            'uses'=>'RestaurantController@showKitchen',
            'as'=>'kitchen.show'
               ]);
               

            Route::get('/Chooser/{id}',[
               'uses'=>'RestaurantController@ShowSearchKitchen',
               'as'=>'SearchKitchen.show'
                  ]);
            Route::get('/Subscription/{email}',[
               'uses'=>'RestaurantController@ShowSubscription',
               'as'=>'show.subscription'
                  ]);

            Route::get('app/{userId}',[
               'uses'=>'CartController@showCart',
               'as'=>'show.cart'
                  ]);
                  
            Route::get('app2/{userId}',[
               'uses'=>'CartController@showCartBook',
               'as'=>'show.Bookcart'
                  ]);
            Route::get('cart/{id}',[
               'uses'=>'CartController@destroy',
               'as'=>'remove.cart'
                  ]);
            Route::get('startcook2/{id}/{userId}',[
               'uses'=>'FoodController@destroyIngrident',
               'as'=>'remove.order'
                  ]);
            Route::get('MyrestaurantFoods/{id}',[
               'uses'=>'CartController@RemoveAll',
               'as'=>'RemoveAll.Cart'
                  ]);

            // Route::get('/home', 'HomeController@index')->name('home');
            Route::get('Guest/Index', 'HomeController@GuestIndex')->name('Guest');

            Route::get('/myrestaurants/{restId}/{useremail}/{restname}'
            ,[
               'uses'=>'RestaurantController@myrestaurants',
               'as'=>'myrestaurant.show'
            ]);
            Route::get('/Subscription/{email}/{restId}'
            ,[
               'uses'=>'RestaurantController@unsubscribe',
               'as'=>'unsubscribe.me'
            ]);
             Route::post ('Chooser/search',
            [
               'as'=>'Chooser.search',
               'uses'=>'SearchController@find'

            ]);
            
           

});









