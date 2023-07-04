<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\NewslatterController;
use App\Http\Controllers\PacksController;
use App\Http\Controllers\QuienessomosController;
use App\Http\Controllers\ComprobanteReserva;
use App\Http\Controllers\MicroController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TransbnankController;
use App\Http\Controllers\HifuController;
use App\Http\Controllers\AcidoHialuronicoController;
use App\Http\Controllers\MicropigmentacionController;
use App\Http\Controllers\BotoxController;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [IndexController::class, "index"]);
//vista contactanos
Route::get('/contactanos', [ContactoController::class, "contactanos"]);
// envio del email
Route::get('/quienessomos', [QuienessomosController::class, "quienessomos"]);
// Packs
Route::get('/packs/{titulo_pack}',[PacksController::class, 'packs']);

// manus
Route::get("/hifu",[HifuController::class, "hifu"]);


// * las nuevas opciones del nav
Route::get("/toxina-butulinica", [BotoxController::class,"toxina_butulinica"]);
Route::get("/plasma-rico-plaquetas", [BotoxController::class,"plasma_rico_plaquetas"]);
Route::get("/rejuvenecimiento-facial", [BotoxController::class,"rejuvenecimiento_facial"]);
Route::get("/acido-hialuronicos", [BotoxController::class,"acido_hialuronicos"]);
Route::get("/bioestimulacion", [BotoxController::class,"bioestimulacion"]);
Route::get("/tratamientos-corporales", [BotoxController::class,"tratamientos_corporales"]);
Route::get("/hiperhidrosis", [BotoxController::class,"hiperhidrosis"]);
Route::get("/limpieza-facial", [BotoxController::class,"limpieza_facial"]);


// SELECCIONAR especialidad fecha
Route::post('/get-horario-espacialidad', [IndexController::class, "get_horario_espacialidad"])->name('get-horario-espacialidad');
// SELECCIONAR PRECIO
Route::post('/get-precio-especialidad', [IndexController::class, "get_precio_especialidad"]);

// consulta especialista
Route::post('/data_especialista', [IndexController::class, "data_especialista"]);
// select con fecha
Route::post('/data_fecha_especialista', [IndexController::class, "data_fecha_especialista"]);
// envio de datos por email
Route::post('/contactanos-send-email', [ContactoController::class, "contactanos_send_email"]);
// insertgar newslatter
Route::post('/insert-new-newslatter', [NewslatterController::class, "insert_new_newslatter"]);
// internet service provider
Route::post('/fechas_inhabiles',[IndexController::class, "fechas_inhabiles"]);
// enviar comprobante transbank de la reserva
Route::get("/comprobante_reserva",[ComprobanteReserva::class, "envio_comprobante_reserva"]);
// Shop
// Route::get("/shop",[ShopController::class, "shop"]);
// servisio
Route::get("/servicios/{id_servicio}",[ServiciosController::class, "servicios"]);
Route::get("/solicitar_pack/{id_servicio}",[ServiciosController::class, "solicitar_pack"]);


// demo micro crea los servisio
Route::get("/micro",[MicroController::class, "micro"]);



Route::get('/demodemo', [IndexController::class, "demodemo"]);




//api

Route::post("/iniciar_compra", [TransbnankController::class,"iniciar_compra"]);
Route::get("/confirmar_pago", [TransbnankController::class,"confirmar_pago"]);
// Route::match(['get', 'post'], 'confirmar_pago', [TransbnankController::class,"confirmar_pago"]);



Route::get("/pago_correcto", [TransbnankController::class,"pago_correcto"]);
Route::get("/pago_rechazado", [TransbnankController::class,"pago_rechazado"]);

Route::get("/pago_aceptado_demo", [TransbnankController::class,"pago_aceptado_demo"]);
// *
Route::get("/asido_hialuronico", [AcidoHialuronicoController::class,"asido_hialuronico"]);
Route::get("/micropigmentacion", [MicropigmentacionController::class,"micropigmentacion"]);
