<?php
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>['auth']],function (){
    Route::get('/pin-code/create', 'secondAuthController@create')->name('pin.create');
    Route::post('/pin-code', 'secondAuthController@store')->name('pin.store');

   Route::group(['middleware'=>['secondAuth']],function (){

        Route::resource('/verify', 'PostVerifyController');

        Route::resource('/chairman', 'PostChairmanController');

        Route::resource('/financial', 'PostFinancialSeceretaryController');

        Route::resource('/volt', 'PostVoltController');

        Route::resource('/secretary', 'PostSecretaryController');

        Route::resource('/chairmanship','PostVoltForChairmanController');

        Route::get('/destroy', 'destroyController@index')->name('destroy.index');

        Route::post('/secretary/post', 'CreateSecretaryController@index')->name('post.index');

        Route::post('/voteFinance', 'VoltFinancialController@index')->name('voteFinance.index');

        Route::post('/voteOrganiser', 'VoltOrganizerController@index')->name('voteOrganiser.index');

        Route::post('voteMember', 'VoltMemberController@index')->name('voteMember.index');

        Route::resource('/organizer','OrganizerController');

        Route::resource('/member1','MemberController');

        Route::get('/home', 'HomeController@index')->name('home');
   });

   Route::group(['middleware'=>['PostVerification']],function (){
        Route::get('/register', 'RegisterController@showRegistrationForm',['only'=>['create']])->name('register');
        Route::post('/register', 'RegisterController@register',['only'=>['create']])->name('register');

        Route::resource('/chairman', 'PostChairmanController',['only'=>['create']]);
        Route::resource('/secretary', 'PostSecretaryController',['only'=>['create']]);
        Route::resource('/financial', 'PostFinancialSeceretaryController',['only'=>['create']]);
        Route::resource('/organizer','OrganizerController',['only'=>['create']]);
        Route::resource('/member1','MemberController',['only'=>['create']]);

        Route::get('/finalResult', 'FinalDeclearationController@index')->name('final.index');

        Route::get('/finalPdf', 'FinalDeclearationController@pdf')->name('pdf.index');

        Route::get('/votersRegister', 'VoterRegisterController@index')->name('votersRegister.index');

        Route::get('/votersRegisterPDF', 'VoterRegisterController@pdf')->name('votersRegisterPDF.index');

        Route::get('/admin', 'PostExecutiveController@index')->name('executiveIndex.index');

        Route::get('/resultChairman', 'PostExecutiveChairmanController@index')->name('executiveChairman.index');

        Route::get('/resultSecretary', 'PostExecutiveSecretaryController@index')->name('executiveSecretary.index');

        Route::get('/resultFinance', 'PostExecutiveFinanceController@index')->name('executiveFinance.index');

        Route::get('/resultOrganize', 'PostExecutiveOrganizerController@index')->name('executiveOrganizer.index');

        Route::get('/resultMember', 'PostExecutiveMemberController@index')->name('executiveMember.index');
        Route::get('/voters-user', 'PostExecutiveMemberController@users')->name('voters-user.index');
        Route::post('/voters-user', 'PostExecutiveMemberController@userpost')->name('voters-user.store');


   });


});

Auth::routes();

