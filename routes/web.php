<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiemController;
use App\Http\Controllers\ImportController;

Route::group(['middleware' => 'web'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', function () {
            return view('Home.index');
        })->name('user.index');
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [AdminController::class, 'login']);
        Route::get('/register', [AdminController::class, 'showRegistrationForm'])->name('admin.showRegisterForm');
        Route::post('/register', [AdminController::class, 'register']);
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/daotao', [AdminController::class, 'showDaotaoList'])->name('admin.daotao.index');
        Route::get('/daotao/create', [AdminController::class, 'createDaotaoForm'])->name('admin.daotao.create');
        Route::post('/daotao/create', [AdminController::class, 'createDaotao']);
        Route::get('/daotao/edit/{MaDaoTao}', [AdminController::class, 'editDaotaoForm'])->name('admin.daotao.edit');
        Route::post('/daotao/edit/{MaDaoTao}', [AdminController::class, 'editDaotao']);
        Route::get('/daotao/delete/{MaDaoTao}', [AdminController::class, 'deleteDaotao'])->name('admin.daotao.delete');
        Route::get('/monhoc', [AdminController::class, 'showMonHocList'])->name('admin.monhoc.index');
        Route::get('/monhoc/create', [AdminController::class, 'createMonHocForm'])->name('admin.monhoc.create');
        Route::post('/monhoc/create', [AdminController::class, 'createMonHoc']);
        Route::get('/monhoc/edit/{MaMonHoc}', [AdminController::class, 'editMonHocForm'])->name('admin.monhoc.edit');
        Route::put('/monhoc/edit/{MaMonHoc}', [AdminController::class, 'editMonHoc'])->name('admin.monhoc.update');
        Route::post('/monhoc/edit/{MaMonHoc}', [AdminController::class, 'editMonHoc']);
        Route::get('/monhoc/delete/{MaMonHoc}', [AdminController::class, 'deleteMonHoc'])->name('admin.monhoc.delete');
    });

    Route::get('/', function () {
        return view('Home.index');
    });

    Route::get('/diems/create', function () {
        return view('create');
    })->name('diem.create');
    Route::post('/diems/create', [ImportController::class, 'import']);
    
    Route::middleware('auth.teacher')->group(function () {
        Route::group(['prefix' => 'teacher'], function () {
            Route::get('/score/create', [DiemController::class, 'createForm'])->name('diem.create.form');
            Route::post('/score/create', [DiemController::class, 'create'])->name('diem.create');
            Route::get('/score/index', [DiemController::class, 'index'])->name('diem.index');
        });
    });
});
