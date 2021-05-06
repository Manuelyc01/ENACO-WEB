<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GestionNivel1Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\GestionNivel1Service;

class GestionNivel1Controller extends Controller
{
    private $service;

    public function __construct(GestionNivel1Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.gestion-nivel1-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.gestion-nivel1-adm.edit');
    }

    public function store(GestionNivel1Request $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('gestion-nivel1-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.gestion-nivel1-adm.edit', compact('element'));
    }

    public function update(GestionNivel1Request $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('gestion-nivel1-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('gestion-nivel1-adm.index');
    }
}
