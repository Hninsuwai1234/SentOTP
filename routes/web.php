<?php


//use Exception;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('smm',function(Request $request){
   try{
          
    $account_sid = getenv("TWILIO_SID");
    $auth_token = getenv("TWILIO_AUTH_TOKEN");
    $twilio_number = getenv("TWILIO_PHONE_NUMBER");

    $client = new Client($account_sid, $auth_token);
    $client->messages->create($request->phoneNumber, [
        'from' => $twilio_number, 
        'body' => $request->message]);

    //dd('SMS Sent Successfully.');
    return back();
   }
   catch (Exception $e) {
    dd("Error: ". $e->getMessage());
}
})->name('sendSms');
