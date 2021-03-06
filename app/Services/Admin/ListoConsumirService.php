<?php

namespace App\Services\Admin;

use App\Models\ListoConsumir;

class ListoConsumirService
{
    public function listar()
	{
        $element = ListoConsumir::first();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = ListoConsumir::create($request->only(			
            'imagenFondoListado',
            'imagenCaladaListado'
		));

		$element->translateOrNew($locale)->tituloListado = $request->tituloListado;
		$element->translateOrNew($newLocale)->tituloListado = $request->tituloListado;

        $element->translateOrNew($locale)->desListado = $request->desListado;
        $element->translateOrNew($newLocale)->desListado = $request->desListado;
  
        
		$element->save();
    }
    
    public function editar($id)
    {
        //
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = ListoConsumir::find($id);
		$element->fill($request->only(			
            'imagenFondoListado',
            'imagenCaladaListado'
		), $id);

		$element->translateOrNew($locale)->tituloListado = $request->tituloListado;
        $element->translateOrNew($locale)->desListado = $request->desListado;

		$element->save();
	}

	public function eliminar($id)
	{
		//
	}
}