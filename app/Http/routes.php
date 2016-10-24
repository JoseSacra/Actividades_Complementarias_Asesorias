<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asesorias', function () {
    //return view('welcome');
    //echo "Area de Asesorias Academicas";
    $vista = view('layout/headerasesoria').view('aslogin').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/alumno', function () {
    $vista = view('layout/headeralumno').view('as-alumno').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/alumno/llenar', function () {
    $vista = view('layout/headeralumno').view('as-llena-alumno').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/alumno/solicitar', function () {
    $vista = view('layout/headeralumno').view('as-solicita-alumno').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/docente', function () {
    $vista = view('layout/headerdocente').view('as-docente').view('layout/footer');
    return $vista;
    //echo "Index del Docente";
});

Route::get('/asesorias/docente/consultar', function () {
    $vista = view('layout/headerdocente').view('as-consultar-docente').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/docente/asignar', function () {
    $vista = view('layout/headerdocente').view('as-asignar-docente').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/docente/reporte', function () {
    $vista = view('layout/headerdocente').view('as-reporte-docente').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/coordinador', function () {
    $vista = view('layout/headercoordinador').view('as-coordinador').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/coordinador/alumno', function () {
    $vista = view('layout/headercoordinador').view('as-alumno-coordinador').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/coordinador/docente', function () {
    $vista = view('layout/headercoordinador').view('as-docente-coordinador').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/coordinador/administrar', function () {
    $vista = view('layout/headercoordinador').view('as-administrar-coordinador').view('layout/footer');
    return $vista;
});

Route::get('/act-comp', function () {
    //return view('welcome');
    $vista = view('layout/headerasesoria').view('aclogin').view('layout/footer');
    return $vista;
//    echo "Area de Actividades Complementarias";
});

Route::get('/act-comp/alumno', function () {
    //return view('welcome');
    echo "Seccion de actividades complementarias para el alumno";
});

Route::get('/act-comp/docente', function () {
    //return view('welcome');
    echo "Seccion de actividades complementarias para el docente";
});

Route::get('/act-comp/coordinador', function () {
    //return view('welcome');
    echo "Seccion de actividades complementarias para el coordinador de la carrera";
});

Route::get('/act-comp/tutorias', function () {
    //return view('welcome');
    echo "Seccion de actividades complementarias para el encargado de tutorias";
});

Route::get('/act-comp/innovacion', function () {
    //return view('welcome');
    echo "Seccion de actividades complementarias para el encargado de Innovacion Tecnologica";
});