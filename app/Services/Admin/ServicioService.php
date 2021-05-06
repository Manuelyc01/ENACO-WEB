<?php

namespace App\Services\Admin;

use App\Models\{Servicio, Departamento, CateServicio};

class ServicioService
{
    public function listar()
	{
        $element = Servicio::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = Servicio::create($request->only(
            'visible',
            'departamento_id',
            'cate_servicio_id',
            'fechaFin'
        ));

		$element->translateOrNew($locale)->titulo = $request->titulo;
        $element->translateOrNew($newLocale)->titulo = $request->titulo;

        $element->translateOrNew($locale)->des = $request->des;
        $element->translateOrNew($newLocale)->des = $request->des;

        $element->translateOrNew($locale)->url = $request->url;
        $element->translateOrNew($newLocale)->url = $request->url;

        $element->translateOrNew($locale)->pdf = $request->pdf;
        $element->translateOrNew($newLocale)->pdf = $request->pdf;

        $element->translateOrNew($locale)->tipo = $request->tipo;
        $element->translateOrNew($newLocale)->tipo = $request->tipo;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = Servicio::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = Servicio::find($id);	
        $element->fill($request->only(
            'visible',
            'departamento_id',
            'cate_servicio_id',
            'fechaFin'
		), $id);	

		$element->translateOrNew($locale)->titulo = $request->titulo;
        $element->translateOrNew($locale)->des = $request->des;
        $element->translateOrNew($locale)->url = $request->url;
        $element->translateOrNew($locale)->pdf = $request->pdf;
        $element->translateOrNew($locale)->tipo = $request->tipo;
		
		$element->save();
	}

	public function eliminar($id)
	{
		Servicio::destroy($id);
	}

	public function activarVisible($request)
	{
		$element = Servicio::find($request->id);
		//dd($element);
        //if(count($element) > 0){
			if($request->checked == 'true') {
				$element->visible = 1;
			} else if($request->checked == 'false') {
				$element->visible = 0;
			}
			$element->save();
		//}
        return response()->json($element);
    }

    public function ddlDepartamento()
	{
		$departamento = Departamento::All();
        $array = array();
		foreach ($departamento as $o) {
			$o->nombre ? $value = $o->nombre : $value = '-';
			$array[$o->id] = $value;
		}
        return $array;
    }
    
    public function ddlCate()
	{
		$cate = CateServicio::All();
        $array = array();
		foreach ($cate as $o) {
			$o->nombre ? $value = $o->nombre : $value = '-';
			$array[$o->id] = $value;
		}
        return $array;
	}
}