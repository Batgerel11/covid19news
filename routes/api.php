<?php
//style={{ border: "1px solid black" }}
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(
    );

});
// error_log('Some message here.');
// $response = Http::get('https://api.covid19api.com/total/dayone/country/south-africa/status/confirmed');
// $user = session()->get('энд апи ирнэ');
// return response()->json(['user'=>$user]);
// use GuzzleHttp\Client;
// class MyController extends Controller {

//     public function show_user()
//     {
//         $client = new Client();
//         $res = $client->request('GET', '/getuser', [
//             'form_params' => [
//                 'KEY' => 'VALUE',
//             ]
//         ]);

//         $result= $res->getBody();
//         dd($result);

// }
// $response = Http::post('http://example.com/users', [
//     'name' => 'Steve',
//     'role' => 'Network Administrator',
// ]);