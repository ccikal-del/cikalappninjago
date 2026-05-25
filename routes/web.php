<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


// =======================
// HALAMAN AWAL
// =======================

Route::get('/', function () {
    return view('welcomepage');
});


// =======================
// LOGIN PAGE
// =======================

Route::get('/login', function () {
    return view('login');
})->name('login');


// =======================
// PROSES LOGIN
// =======================

Route::post('/login-process', function (Request $request) {

    $credentials = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        // CEK ROLE
        if (Auth::user()->role == 'master') {
            return redirect('/master');
        }

        return redirect('/dashboard');
    }

    return back()->with('error', 'Email atau Password salah');

})->name('login.process');


// =======================
// LOGOUT
// =======================

Route::get('/logout', function () {

    Auth::logout();

    return redirect('/login');

})->name('logout');


// =======================
// DASHBOARD NINJA
// =======================

Route::middleware(['role:ninja'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/mission', function () {
        return view('misi');
    })->name('misi');

});


// =======================
// DASHBOARD MASTER
// =======================

Route::middleware(['role:master'])->group(function () {

    // DASHBOARD MASTER
    Route::get('/master', function () {
        return view('master.dashboard');
    })->name('master');

    // MONITOR NINJA
    Route::get('/master/ninja', function () {
        return view('master.ninja');
    });

    // LIHAT DASHBOARD NINJA
    Route::get('/master-view-ninja', function () {
        return view('dashboard');
    });

});