<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('login/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

//creators of SKILLPARK (sushant,divesh,nitika)


Auth::routes(['register' => false, 'reset' => false]);

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', 'MessagesController@index')->name('home');

/*
* This is the main app route [Skillpark Messenger]
*/
Route::get('/messages', 'MessagesController@index')->name(config('chatify.path'));

/**
 *  Fetch info for specific id [user/group]
 */
Route::post('/idInfo', 'MessagesController@idFetchData');

/**
 * Send message route
 */
Route::post('/sendMessage', 'MessagesController@send')->name('send.message');

/**
 * Fetch messages 
 */
Route::post('/fetchMessages', 'MessagesController@fetch')->name('fetch.messages');

/**
 * Download attachments route to create a downloadable links
 */
Route::get('/download/{fileName}', 'MessagesController@download')->name(config('chatify.attachments.route'));

/**
 * Authintication for pusher private channels
 */
Route::post('/chat/auth', 'MessagesController@pusherAuth')->name('pusher.auth');

/**
 * Make messages as seen
 */
Route::post('/makeSeen', 'MessagesController@seen')->name('messages.seen');

/**
 * Get contacts
 */
Route::post('/getContacts', 'MessagesController@getContacts')->name('contacts.get');

/**
 * Update contact item data
 */
Route::post('/updateContacts', 'MessagesController@updateContactItem')->name('contacts.update');


/**
 * Star in favorite list
 */
Route::post('/star', 'MessagesController@favorite')->name('star');

/**
 * get favorites list
 */
Route::post('/favorites', 'MessagesController@getFavorites')->name('favorites');

/**
 * Search in messenger
 */
Route::post('/search', 'MessagesController@search')->name('search');

/**
 * Get shared photos
 */
Route::post('/shared', 'MessagesController@sharedPhotos')->name('shared');

/**
 * Delete Conversation
 */
Route::post('/deleteConversation', 'MessagesController@deleteConversation')->name('conversation.delete');

/**
 * Delete Conversation
 */
Route::post('/updateSettings', 'MessagesController@updateSettings')->name('avatar.update');

/**
 * Set active status
 */
Route::post('/setActiveStatus', 'MessagesController@setActiveStatus')->name('activeStatus.set');

/*
* [Group] view by id
*/
Route::get('/group/{id}', 'MessagesController@index')->name('group');

/*
* user view by id.
* Note : If you added routes after the [User] which is the below one,
* it will considered as user id.
*
* e.g. - The commented routes below :
*/
Route::get('/{id}', 'MessagesController@index')->name('user');
