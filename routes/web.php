<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;

route::get('/', [PortofolioController::class, 'home']);
route::get('/about', [PortofolioController::class, 'about']);
route::get('/skill', [PortofolioController::class, 'skill']);
route::get('/portofolio', [PortofolioController::class, 'portofolio']);
route::get('/school', [PortofolioController::class, 'school']);
route::get('/services', [PortofolioController::class, 'services']);
route::get('/contact', [PortofolioController::class, 'contact']);
route::get('/sertifikat', [PortofolioController::class, 'sertifikat']);
