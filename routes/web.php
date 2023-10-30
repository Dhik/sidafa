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

Route::get('/', [App\Http\Controllers\Public\publicController::class, 'index'])->name('index');
Route::get('/analysis/1', [App\Http\Controllers\Public\publicController::class, 'analysis'])->name('index');
Route::get('/lingkungan/1', [App\Http\Controllers\Public\publicController::class, 'lingkungan'])->name('index');
Route::get('/hukum/1', [App\Http\Controllers\Public\publicController::class, 'hukum'])->name('index');
Route::get('/cctv/{id}', [App\Http\Controllers\Public\publicController::class, 'cctv'])->name('index');
Route::get('/cctv2', [App\Http\Controllers\Public\publicController::class, 'cctv2'])->name('index');
Route::get('/perumahan', [App\Http\Controllers\Public\publicController::class, 'perumahan'])->name('index');
Route::get('/politik', [App\Http\Controllers\Public\publicController::class, 'politik'])->name('index');
Route::get('/politik2', [App\Http\Controllers\Public\publicController::class, 'politik2'])->name('index');
Route::get('/kepegawaian', [App\Http\Controllers\Public\publicController::class, 'kepegawaian'])->name('index');
Route::get('/pekerjaan', [App\Http\Controllers\Public\publicController::class, 'pekerjaan'])->name('index');
Route::get('/kematian', [App\Http\Controllers\Public\publicController::class, 'kematian'])->name('index');
Route::get('/transportasi', [App\Http\Controllers\Public\publicController::class, 'transportasi'])->name('index');
Route::get('/taman', [App\Http\Controllers\Public\publicController::class, 'taman'])->name('index');
Route::get('/politik', [App\Http\Controllers\Public\publicController::class, 'politik'])->name('index');
Route::get('/lkpp', [App\Http\Controllers\Public\publicController::class, 'lkpp'])->name('index');
Route::get('/lkpphukum', [App\Http\Controllers\Public\publicController::class, 'lkpphukum'])->name('index');
Route::get('/perhutaniyoutube', [App\Http\Controllers\Public\publicController::class, 'perhutaniyoutube'])->name('index');
Route::get('/perhutaniproduct', [App\Http\Controllers\Public\publicController::class, 'perhutaniproduct'])->name('index');
Route::get('/lkppsentiment', [App\Http\Controllers\Public\publicController::class, 'lkppsentiment'])->name('index');
Route::get('/penjualankayu', [App\Http\Controllers\Public\publicController::class, 'penjualankayu'])->name('index');
Route::get('/manggrove', [App\Http\Controllers\Public\publicController::class, 'manggrove'])->name('index');
Route::get('/putusan_mahkamah_agung', [App\Http\Controllers\Public\publicController::class, 'putusanma'])->name('index');
Route::get('/sentiment_analysis_mahkamah_agung', [App\Http\Controllers\Public\publicController::class, 'sentimentma'])->name('index');
Route::get('/putusan_mahkamah_konstitusi', [App\Http\Controllers\Public\publicController::class, 'putusanmk'])->name('index');
Route::get('/sentiment_analysis_lkpp_ri', [App\Http\Controllers\Public\publicController::class, 'sentimentlkpp'])->name('index');
Route::get('/analisis_youtube_bappenas', [App\Http\Controllers\Public\publicController::class, 'youtubebappenas'])->name('index');
Route::get('/sentiment_analysis_bkn', [App\Http\Controllers\Public\publicController::class, 'sentimentbkn'])->name('index');
Route::get('/produksi_aluminium_di_dunia', [App\Http\Controllers\Public\publicController::class, 'prodalum'])->name('index');
Route::get('/h_plus_t_analysis', [App\Http\Controllers\Public\publicController::class, 'h_t'])->name('index');
Route::get('/analisis_penumpang_airlines', [App\Http\Controllers\Public\publicController::class, 'survey_airlines'])->name('index');

Route::get('getCourse/{id}', function ($id) {
    $course = App\Models\sub_menu::where('id_menu', $id)->get();
    return response()->json($course);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Users
Route::get('/users', [App\Http\Controllers\usersmanagementController::class, 'index'])->name('master.usersmanagement.users.index');
Route::get('/register', [App\Http\Controllers\usersmanagementController::class, 'register'])->name('master.usersmanagement.users.register');
Route::post('/create_users', [App\Http\Controllers\usersmanagementController::class, 'create_users'])->name('master.usersmanagement.users.create_users');
Route::get('/destroy_users/{id}', [App\Http\Controllers\usersmanagementController::class, 'destroy_users'])->name('master.usersmanagement.users.destroy_users');
Route::get('/edit_users/{id}', [App\Http\Controllers\usersmanagementController::class, 'edit_users'])->name('master.usersmanagement.users.edit_users');
Route::post('/update_users/{id}', [App\Http\Controllers\usersmanagementController::class, 'update_users'])->name('master.usersmanagement.users.update_users');
Route::get('/roles/add', [App\Http\Controllers\usersmanagementController::class, 'add'])->name('master.usersmanagement.roles.add');
Route::get('/roles/edit/{id}', [App\Http\Controllers\usersmanagementController::class, 'edit'])->name('master.usersmanagement.roles.edit');
Route::post('/roles/create', [App\Http\Controllers\usersmanagementController::class, 'create'])->name('master.usersmanagement.roles.create');
Route::post('/roles/update/{id}', [App\Http\Controllers\usersmanagementController::class, 'update'])->name('master.usersmanagement.roles.update');
Route::get('/roles/destroy/{id}', [App\Http\Controllers\usersmanagementController::class, 'destroy'])->name('master.usersmanagement.roles.destroy');

//Register
Route::post('/register_new', [App\Http\Controllers\registerController::class, 'register_new'])->name('master.usersmanagement.users.create_register');

//Menu
Route::get('/menu', [App\Http\Controllers\masterController::class, 'index'])->name('master.menu.index');
Route::get('/add_menu', [App\Http\Controllers\masterController::class, 'add_menu'])->name('master.menu.add_menu');
Route::post('/menu/create', [App\Http\Controllers\masterController::class, 'create'])->name('master.menu.create');
Route::get('/edit_menu/{id}', [App\Http\Controllers\masterController::class, 'edit_menu'])->name('master.menu.create');
Route::post('/update_menu/{id}', [App\Http\Controllers\masterController::class, 'update_menu'])->name('master.menu.create');

//sub_Menu
Route::get('/add_sub', [App\Http\Controllers\masterController::class, 'add_sub'])->name('master.menu.add_menu');
Route::post('/sub/create', [App\Http\Controllers\masterController::class, 'create_sub'])->name('master.menu.create');
Route::get('/edit_sub/{id}', [App\Http\Controllers\masterController::class, 'edit_sub'])->name('master.menu.create');
Route::post('/update_sub/{id}', [App\Http\Controllers\masterController::class, 'update_sub'])->name('master.menu.create');

//embed
Route::get('/embed', [App\Http\Controllers\embedController::class, 'index'])->name('master.menu.add_menu');
Route::get('/add_embed', [App\Http\Controllers\embedController::class, 'add_embed'])->name('master.menu.add_menu');
Route::post('/create_embed', [App\Http\Controllers\embedController::class, 'create_embed'])->name('master.menu.create');
Route::get('/edit_embed/{id}', [App\Http\Controllers\embedController::class, 'edit_embed'])->name('master.menu.create');
Route::post('/update_embed/{id}', [App\Http\Controllers\embedController::class, 'update_embed'])->name('master.menu.create');
Route::get('/embed/destroy/{id}', [App\Http\Controllers\embedController::class, 'destroy'])->name('master.usersmanagement.roles.destroy');

//cctv
Route::get('/api/bantul', [App\Http\Controllers\cctv_bantulController::class, 'index'])->name('cctv');
Route::get('/api/kominfosleman', [App\Http\Controllers\cctv_kominfoslemanController::class, 'index'])->name('cctv');
Route::get('/api/kota', [App\Http\Controllers\cctv_kotaController::class, 'index'])->name('cctv');
Route::get('/api/kp', [App\Http\Controllers\cctv_kpController::class, 'index'])->name('cctv');
Route::get('/api/mallioboro', [App\Http\Controllers\cctv_mallioboroController::class, 'index'])->name('cctv');
Route::get('/api/public', [App\Http\Controllers\cctv_publicController::class, 'index'])->name('cctv');
Route::get('/api/sleman', [App\Http\Controllers\cctv_slemanController::class, 'index'])->name('cctv');
Route::get('/api/sungai', [App\Http\Controllers\cctv_sungaiController::class, 'index'])->name('cctv');
