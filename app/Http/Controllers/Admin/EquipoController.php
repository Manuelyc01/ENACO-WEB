<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EquipoRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\EquipoService;

class EquipoController extends Controller
{
    private $service;

    public function __construct(EquipoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $element = $this->service->listar();

        if($element)
            return view('admin.equipo-adm.edit', compact('element')); 

        return view('admin.equipo-adm.edit');
    }

    public function create()
    {
        //
    }

    public function store(EquipoRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('equipo-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(EquipoRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('equipo-adm.index');
    }

    public function destroy($id)
    {
        //
    }
}
