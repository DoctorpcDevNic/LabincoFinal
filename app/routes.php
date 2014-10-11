<?php

Route::get('/', function()
{
	return View::make('inicio');
});

/*Unidades*/

Route::get('unidades/eden', function()
{
	return View::make('sucursales.eden');
});

Route::get('unidades/LindaVista', function(){
	
	return View::make('sucursales.lindaVista');
});

Route::get('unidades/Veracruz', function(){
	
	return View::make('sucursales.veracruz');
});

Route::get('unidades/LosRobles', function(){
	
	return View::make('sucursales.robles');
});

Route::get('unidades/Altamira', function(){
	
	return View::make('sucursales.altamira');
});

Route::get('Nosotros/Personal', function(){
	
	return View::make('personal.personal');
});


/* FAQS */
Route::get('/faq', function(){
	
	return View::make('preguntas.faq');
});

Route::get('/indicaciones', function(){
	
	return View::make('preguntas.indicaciones');
});



Route::get('servicios/Generales', function(){
	
	return View::make('servicios.general');
});

Route::get('noticias', function()
{
	return View::make('noticias');
});


/*Servicios*/

Route::get('servicios/BioClinicaQuimica', function(){
	$bioquimica = DB::table('dptbioanalisis')->paginate(15);	
	return View::make('servicios.dptbioquimica', array( "bioquimica" => $bioquimica));
});

Route::get('servicios/Coagulacion', function(){
	$Coagulacion = DB::table('dptcoagulacion') -> paginate(15);
	return View::make('servicios.dptcoagulacion', array( "Coagulacion" => $Coagulacion));
});

Route::get('servicios/Coprologia', function(){
	$Coprologia = DB::table('dptcoprologia') -> paginate(15);
	return View::make('servicios.dptcoprologia', array( "Coprologia" => $Coprologia));
});

Route::get('servicios/Hematologia', function(){
	$Hematologia = DB::table('dpthematologia') -> paginate(15);
	return View::make('servicios.dpthematologia', array( "Hematologia" => $Hematologia));
});

Route::get('servicios/Inmunologia', function(){	
	$Inmunologia=DB::table('dptinmunologia') -> paginate(15);
	return View::make('servicios.dptinmunologia', array( "Inmunologia" => $Inmunologia));
});

Route::get('servicios/Microbiologia', function(){
	$Microbiologia=DB::table('dptmicrobiologia')->paginate(15);
	return View::make('servicios.dptmicrobiologia', array( "Microbiologia" => $Microbiologia));
});

Route::get('servicios/Uroanalisis', function(){
	$Uroanalisis=DB::table('dpturoanalisis')->paginate(15);
	return View::make('servicios.dpturoanalisis', array( "Uroanalisis" => $Uroanalisis));
});

Route::get('servicios/Internacional', function(){	
	$Internacional = DB::table('dptinternacional') -> paginate(15);
	return View::make('servicios.dptinternacional', array( "Internacional" => $Internacional));
});
Route::get('servicios/Patologia', function(){
	$Patologia=DB::table('dptpatologia') -> paginate(15);
	return View::make('servicios.dptpatologia', array( "Patologia" => $Patologia));
});

Route::get('servicios/CatalagoPruebas', function(){
	$tips = Tip::all();
	$noticias = Noticia::all();
	foreach ($noticias as $key => $value) {
		if($value->enable == 1){
			$noticia = Noticia::find($value->id);
		}
	}

	$imagenes = DB::table('imagennoticias')->where('noticia_id', '=', $noticia->id)->get();
	$promociones = DB::table('promociones')->where('enable', '=', 1)->get();
	return View::make('servicios.catalogo', array( 'noticia' => $noticia, 'imagenes' => $imagenes, 'promociones' => $promociones));
});


/* ADMINISTRADOR */

Route::get('login', array('uses' => 'UsuariosController@viewLogin'));//muestra la interface de login
Route::post('usuarios/validar', array('uses'=> 'UsuariosController@validateLogin'));// se inicia seccion con username, pass
Route::post('administrador/enviar/msj', array('uses' => 'MensajesController@store')); //guarda el msj que se mando

Route::group(array('before' => 'auth'), function()
{



Route::post('administrador/doctorpc/usuarios/login', array('uses' => 'UsuariosController@register'));		//registra al usuario con sus datos
Route::get('administrador/doctorpc/usuarios/registrar', array('uses' => 'UsuariosController@viewRegister'));// muestra la interface de registro
Route::get('usuarios/logout', array('uses'=> 'UsuariosController@getLogout'));		//cerrar seccion



Route::get('administrador', function()
{
	return View::make('administrador');
});



/* NOTICIAS */


Route::get('administrador/noticias', array('uses' => 'NoticiasController@index'));
Route::post('administrador/noticias/create', array('uses' => 'NoticiasController@add'));
Route::get('administrador/noticias/{id?}', array('uses' => 'NoticiasController@show'));
Route::get('administrador/noticias/edit/{id?}', array('uses' => 'NoticiasController@edit'));
Route::post('administrador/noticias/edit/{id?}', array('uses' => 'NoticiasController@update'));
Route::delete('administrador/noticias/delete/{id?}', array('uses' => 'NoticiasController@destroy'));
Route::post('administrador/noticias/upload/{id?}', array('uses' => 'NoticiasController@upload'));




/* TIPS*/


Route::get('administrador/tips', array('uses' => 'TipsController@index'));
Route::get('administrador/tips/crear', function(){
	return View::make('tips.create');
});
Route::post('administrador/tips/create', array('uses' => 'TipsController@add'));
Route::get('administrador/tips/{id?}', array('uses' => 'TipsController@show'));
Route::get('administrador/tips/edit/{id?}', array('uses' => 'TipsController@edit'));
Route::post('administrador/tips/edit/{id?}', array('uses' => 'TipsController@update'));
Route::delete('administrador/tips/delete/{id?}', array('uses' => 'TipsController@destroy'));


/* PROMOCIONES */

Route::get('administrador/promociones', array('uses' => 'PromocionesController@index'));
Route::post('administrador/promociones/create', array('uses' => 'PromocionesController@add'));
Route::get('administrador/promociones/{id?}', array('uses' => 'PromocionesController@show'));
Route::get('administrador/promociones/edit/{id?}', array('uses' => 'PromocionesController@edit'));
Route::post('administrador/promociones/edit/{id?}', array('uses' => 'PromocionesController@update'));
Route::delete('administrador/promociones/delete/{id?}', array('uses' => 'PromocionesController@destroy'));



/* MENSAJES*/

Route::get('administrador/mensajes', function(){
	$mensajes = DB::table('mensajes') -> paginate(9);
	return View::make('mensajes.index')->with('mensajes', $mensajes);
});

//Route::get('administrador/mensajes', array('uses' => 'MensajesController@index'));

Route::get('administrador/mensajes/{id?}', array('uses' => 'MensajesController@show'));
Route::delete('administrador/mensajes/delete/{id?}', array('uses' => 'MensajesController@destroy'));
Route::post('administrador/mensajes/send/{id?}', array('uses' => 'MensajesController@sendEmail'));


});


