<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout.layout');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    
    Route::get('/login', ['as'=> 'login', 'uses' => 'admin\AdminController@index']);
    Route::post('/login', ['uses'=> 'admin\AdminController@login']);
    Route::get('/logout', ['as' =>'logout', 'uses' => 'admin\AdminController@logout']);
});
Route::middleware('multiauth:admin')->group(function(){

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('/dashboard', ['as' =>'dash', 'uses' => 'admin\AdminController@dash']);
    Route::get('/service/list', ['as' =>'service.list', 'uses'=>'admin\ServicesController@datatable']);
    Route::get('/country/list', ['as' =>'country.list', 'uses'=>'admin\CountryController@datatable']);
    Route::get('/continent/list', ['as' =>'continent.list', 'uses'=>'admin\ContinentController@datatable']);
    Route::get('/city/list', ['as' =>'city.list', 'uses'=>'admin\CityController@datatable']);
    Route::get('/certificate/list', ['as' =>'certificate.list', 'uses'=>'admin\CertificateController@datatable']);
    Route::get('/representative/list', ['as' =>'representative.list', 'uses'=>'admin\RepresentativeController@datatable']);
    Route::get('/airline/list', ['as' =>'airline.list', 'uses'=>'admin\AirlineController@datatable']);
    Route::get('/airport/list', ['as' =>'airport.list', 'uses'=>'admin\AirportController@datatable']);
    Route::get('/trackntrace/list', ['as' =>'trackntrace.list', 'uses'=>'admin\TrackntraceController@datatable']);
    Route::get('/tool/list', ['as' =>'tool.list', 'uses'=>'admin\ToolController@datatable']);
    Route::get('/news-category/list', ['as' =>'news-category.list', 'uses'=>'admin\NewsCategoryController@datatable']);
    Route::get('/membership_type/list', ['as' =>'membership_type.list', 'uses'=>'admin\MembershiptypeController@datatable']);
    Route::get('/member/list', ['as' =>'member.list', 'uses'=>'admin\MemberController@datatable']);
    Route::get('/news/list', ['as' =>'news.list', 'uses'=>'admin\NewsController@datatable']);
    Route::get('/company/list', ['as' =>'company.list', 'uses'=>'admin\CompanyController@datatable']);
    
    
    
    Route::resource('services', 'admin\ServicesController');
    Route::resource('country', 'admin\CountryController');
    Route::resource('continent', 'admin\ContinentController');
    Route::resource('city', 'admin\CityController');
    Route::resource('certificate', 'admin\CertificateController');
    Route::resource('representative', 'admin\RepresentativeController');
    Route::resource('airline', 'admin\AirlineController');
    Route::resource('airport', 'admin\AirportController');
    Route::resource('trackntrace', 'admin\TrackntraceController');
    Route::resource('tool', 'admin\ToolController');
    Route::resource('news-category', 'admin\NewsCategoryController');
    Route::resource('membership_type', 'admin\MembershiptypeController');
    Route::resource('member', 'admin\MemberController');
    Route::resource('news', 'admin\NewsController');
    Route::resource('company', 'admin\CompanyController');
    Route::get('/company/service/{id}', ['as' => 'company_service.services', 'uses' => 'admin\CompanyServicesController@serviceSyncView']);
    Route::get('/company/service/create/{id}', ['as' => 'company_service.add', 'uses' => 'admin\CompanyServicesController@add']);
    Route::get('/company_service/list', ['as' =>'company_service.list', 'uses'=>'admin\CompanyServicesController@datatable']);
    Route::post('/company/service/create/{id}', ['as' => 'company_service.add', 'uses' => 'admin\CompanyServicesController@serviceSync']);
    Route::get('/company/service/edit/{id}', ['as' => 'company_service.edit', 'uses' => 'admin\CompanyServicesController@add']);
    Route::post('/company/service/edit/{id}', ['uses' => 'admin\CompanyServicesController@serviceSync']);
    //Route::resource('company_service', 'admin\CompanyServicesController');
    //Route::resource('company_director', 'admin\CompanyDirectorController');

    Route::get('/company/director/{id}', ['as'=>'company.director', 'uses' =>'admin\CompanyDirectorController@index']);
    Route::get('/company/director/create/{id}', ['as'=>'company.create.director', 'uses' =>'admin\CompanyDirectorController@create']);
    Route::post('/company/director/create/{id}', ['uses' =>'admin\CompanyDirectorController@store']);
    Route::get('/company_director/list/{id}', ['as' =>'company_director.list', 'uses'=>'admin\CompanyDirectorController@datatable']);
    Route::get('/company/director/edit/{id}', ['uses' =>'admin\CompanyDirectorController@edit']);
    Route::post('/company/director/edit/{id}', ['uses' =>'admin\CompanyDirectorController@update']);
    Route::get('/company/directors/list', ['as'=>'company.directors.list', 'uses'=>'admin\CompanyDirectorController@show']);
    Route::get('/company_director/list', ['as' =>'company.director_list', 'uses'=>'admin\CompanyDirectorController@datatable1']);

    //Route::resource('company_representative', 'admin\CompanyRepresentativeController');
    Route::get('/company/representative/{id}', ['as'=>'company.representative', 'uses' =>'admin\CompanyRepresentativeController@index']);
    Route::get('/company/representative/create/{id}', ['as'=>'company.create.representative', 'uses' =>'admin\CompanyRepresentativeController@create']);
    Route::post('/company/representative/create/{id}', ['uses' =>'admin\CompanyRepresentativeController@store']);
    Route::get('/company_representative/list/{id}', ['as' =>'company_representative.list', 'uses'=>'admin\CompanyRepresentativeController@datatable']);
    Route::get('/company/representative/edit/{id}', ['uses' =>'admin\CompanyRepresentativeController@edit']);
    Route::post('/company/representative/edit/{id}', ['uses' =>'admin\CompanyRepresentativeController@update']);
    Route::get('/company/representatives/list/', ['as' =>'company.representatives.list', 'uses'=>'admin\CompanyRepresentativeController@show']);
    Route::get('/company_representatives/list/', ['as' =>'company_representatives.list', 'uses'=>'admin\CompanyRepresentativeController@list']);

    //Route::resource('company_trade_refrence', 'admin\TradeReferencesController');
    Route::get('/company/trade_refrence/{id}', ['as'=>'company.trade_refrence', 'uses' =>'admin\TradeReferencesController@index']);
    Route::get('/company/trade_refrence/create/{id}', ['as'=>'company.create.trade_refrence', 'uses' =>'admin\TradeReferencesController@create']);
    Route::post('/company/trade_refrence/create/{id}', ['uses' =>'admin\TradeReferencesController@store']);
    Route::get('/company_trade_refrence/list/{id}', ['as' =>'company_trade_refrence.list', 'uses'=>'admin\TradeReferencesController@datatable']);
    Route::get('/company/trade_refrence/edit/{id}', ['uses' =>'admin\TradeReferencesController@edit']);
    Route::post('/company/trade_refrence/edit/{id}', ['uses' =>'admin\TradeReferencesController@update']);
    Route::get('/company/trade-refrence/list/', ['as' =>'company.trade-refrence.list', 'uses'=>'admin\TradeReferencesController@show']);
    Route::get('/company_trade_refrence/list/', ['as' =>'company_trade_refrences.list', 'uses'=>'admin\TradeReferencesController@list']);

    //Route::resource('company_certificate', 'admin\CompanyCertificateController');
    Route::get('/company/certificate/{id}', ['as' => 'company_certificate.certificates', 'uses' => 'admin\CompanyCertificateController@index']);
    Route::get('/company/certificate/create/{id}', ['as' => 'company.create.certificate', 'uses' => 'admin\CompanyCertificateController@add']);
    Route::get('/company_certificate/list', ['as' =>'company_certificate.list', 'uses'=>'admin\CompanyCertificateController@datatable']);
    Route::post('/company/certificate/create/{id}', ['as' => 'company_certificate.add', 'uses' => 'admin\CompanyCertificateController@certificateSync']);
    Route::get('/company/certificate/edit/{id}', ['as' => 'company_certificate.edit', 'uses' => 'admin\CompanyCertificateController@edit']);
    Route::post('/company/certificate/edit/{id}', ['uses' => 'admin\CompanyCertificateController@add']);
    Route::get('/company_certificate/list/{id}', ['as' =>'company_certificate.list', 'uses'=>'admin\CompanyCertificateController@datatable']);

    //Route::resource('company_reviews', 'admin\ReviewController');
    Route::get('/company/reviews/{id}', ['as'=>'company.reviews', 'uses' =>'admin\ReviewController@index']);
    Route::get('/company/reviews/create/{id}', ['as'=>'company.create.reviews', 'uses' =>'admin\ReviewController@create']);
    Route::post('/company/reviews/create/{id}', ['uses' =>'admin\ReviewController@store']);
    Route::get('/company_reviews/list/{id}', ['as' =>'company_reviews.list', 'uses'=>'admin\ReviewController@datatable']);
    Route::get('/company/reviews/edit/{id}', ['uses' =>'admin\ReviewController@edit']);
    Route::post('/company/reviews/edit/{id}', ['uses' =>'admin\ReviewController@update']);
    Route::get('/company/review/list', ['as' =>'company.review.list', 'uses'=>'admin\ReviewController@show']);
    Route::get('/company_review/list', ['as' =>'company_review.list', 'uses'=>'admin\ReviewController@list']);

    //Route::resource('company_branches', 'admin\CompanyBranchesController');
    Route::get('/company/branches/{id}', ['as'=>'company.branches', 'uses' =>'admin\CompanyBranchesController@index']);
    Route::get('/company/branches/create/{id}', ['as'=>'company.create.branches', 'uses' =>'admin\CompanyBranchesController@create']);
    Route::post('/company/branches/create/{id}', ['uses' =>'admin\CompanyBranchesController@store']);
    Route::get('/company_branches/list/{id}', ['as' =>'company_branches.list', 'uses'=>'admin\CompanyBranchesController@datatable']);
    Route::get('/company/branches/edit/{id}', ['uses' =>'admin\CompanyBranchesController@edit']);
    Route::post('/company/branches/edit/{id}', ['uses' =>'admin\CompanyBranchesController@update']);
    Route::get('/company_branches/list/', ['as' =>'company.branches.list', 'uses'=>'admin\CompanyBranchesController@show']);
    Route::get('/company/branch/list/', ['as' =>'company.branch.list', 'uses'=>'admin\CompanyBranchesController@list']);

    //Route::resource('company_documents', 'admin\CompanyDocumentController');
    Route::get('/company/documents/{id}', ['as'=>'company.documents', 'uses' =>'admin\CompanyDocumentController@index']);
    Route::get('/company/documents/create/{id}', ['as'=>'company.create.documents', 'uses' =>'admin\CompanyDocumentController@create']);
    Route::post('/company/documents/create/{id}', ['uses' =>'admin\CompanyDocumentController@store']);
    Route::get('/company_documents/list/{id}', ['as' =>'company_documents.list', 'uses'=>'admin\CompanyDocumentController@datatable']);
    Route::get('/company/documents/edit/{id}', ['uses' =>'admin\CompanyDocumentController@edit']);
    Route::post('/company/documents/edit/{id}', ['uses' =>'admin\CompanyDocumentController@update']);
    Route::get('/company_documents/list', ['as' =>'company_document.list', 'uses'=>'admin\CompanyDocumentController@show']);
    Route::get('/company/document/list', ['as' =>'company.document.list', 'uses'=>'admin\CompanyDocumentController@list']);

    //Route::get('company/detail', ['as'=>'company.id', 'uses'=>'admin\CompanyController@show']);
});
});

















Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
    
    Route::get('/login', ['as'=> 'login', 'uses' => 'user\UserController@index']);
    Route::post('/login', ['uses'=> 'user\UserController@login']);
    Route::get('/logout', ['as' =>'logout', 'uses' => 'user\UserController@logout']);
    Route::get('/dashboard', ['as' =>'dash', 'uses' => 'user\UserController@dash']);
});


