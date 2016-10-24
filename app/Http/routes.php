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
    $vista = view('layout/headeralumno').view('as-llenar-alumno').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/alumno/solicitar', function () {
    $vista = view('layout/headeralumno').view('as-solicita-alumno').view('layout/footer');
    return $vista;
});

Route::get('/asesorias/docente', function () {
    //return view('welcome');
    echo "Index del Docente";
});

Route::get('/asesorias/docente/consultar', function () {
    //return view('welcome');
    echo "Consultar solicitudes de asesorias de los Alumnos";
});

Route::get('/asesorias/docente/asignar', function () {
    //return view('welcome');
    echo "Asignar asesorias a los alumnos";
});

Route::get('/asesorias/docente/reporte', function () {
    //return view('welcome');
    echo "Generar el reporte mensual de asesorias del docente";
});

Route::get('/asesorias/coordinador', function () {
    //return view('welcome');
    echo "Index del Coordinador de Carrera";
});

Route::get('/asesorias/coordinador/asesoria-alumno', function () {
    //return view('welcome');
    echo "Consultar asesorias de los alumnos";
});

Route::get('/asesorias/coordinador/reporte-docente', function () {
    //return view('welcome');
    echo "Consultar reportes de asesorias de los docentes";
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