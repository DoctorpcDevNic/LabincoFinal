<?php

class TipsController extends BaseController {
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tips = Tip::all();
        return View::make('tips.viewall')->with('tips', $tips);		
	}

	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function add()
	{
		if(Input::get()){
			if($this->validateForm(Input::all()) === true){
				$file = 'no_img.png';
				$tip = new Tip();
				$tip->titulo = Input::get('titulo');
				$tip->descripcion = Input::get('descripcion');	

				if(Input::hasFile('imagen')) {
			       	Input::file('imagen')->move('img/upload', Input::file("imagen")->getClientOriginalName());
			      	$file = Input::file('imagen')->getClientOriginalName();
		     	}

		     	$tip->imagen = $file;

				if($tip->save()){
					Session::flash('message', 'Tip Registrada Con Exito');
					return Redirect::back();
				}				
			}else{
				return Redirect::back()->withErrors($this->validateForm(Input::all()))->withInput();
			}
		}else{
			return View::make('tips.create');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tip = Tip::find($id);
        return View::make('tips.show')->with('tip', $tip);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$tip = Tip::find($id);
	    return View::make('tips.edit')->with('tip', $tip);
    	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tip = Tip::find($id);
		if(Input::get()){
			if($this->validateForm(Input::all()) === true){
				$tip->titulo = Input::get('titulo');
				$tip->descripcion = Input::get('descripcion');
				$tip->imagen = Input::get('imagen');

				if($tip->save()){
					Session::flash('message', 'Tip modificada correctamente');
					return Redirect::to('/administrador/tips');
				}else{
					return Redirect::to('/administrador/tips')->withErrors($this->validateForm(Input::all()))->withInput();	
				}
			}
		}else{
			return View::make('tips.create');
		}
	}

	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tip = Tip::find($id);
		$tip->delete();

		Session::flash('message', 'Tip Eliminada');
		return Redirect::to('/administrador/tips');
	}

	private function validateForm($inputs = array()){
		$rules = array(
			'titulo' => 'required',
			'descripcion' => 'required'
			);
		$message = array(
			'required' => 'el campo :attribute es obligatorio'
			);

		$validation = Validator::make($inputs, $rules, $message);

		if($validation->fails()){
			return $validation;
		}else{
			return true;
		}
	}

}