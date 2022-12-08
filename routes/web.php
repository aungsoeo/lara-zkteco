<?php

use Illuminate\Support\Facades\Route;
 use Rats\Zkteco\Lib\ZKTeco;
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
        $zk = new ZKTeco('192.168.12.45');
        // $zkconnect = $zk->connect();   
        // $zken = $zk->enableDevice();  
        // $zkv=    $zk->version();  
        // $v = $zk->testVoice();
        // $serial = $zk->serialNumber();
        //  $devname =  $zk->deviceName(); 
        // $time =  $zk->getTime(); 
        // $user =  $zk->getUser(); 
        //  $rmuser = $zk->removeUser(2); 
        // $att = $zk->getAttendance(); 
        // dd($att);
        // $clear = $zk->clearAttendance(); 
        //  $zk->restart();
        // dd($serial,$devname);
        if ($zk->connect()){
                $attendance = $zk->getAttendance();
                dd($attendance);
                // return view('zkteco::app',compact('attendance'));
        }
});


// Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');
