<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NivelesRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\NivelesService;

class NivelesController extends Controller
{
    private $service;

    public function __construct(NivelesService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.niveles-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.niveles-adm.edit');
    }

    public function store(NivelesRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('niveles-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.niveles-adm.edit', compact('element'));
    }

    public function update(NivelesRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('niveles-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('niveles-adm.index');
    }
}
