<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ReinoRequest;
use App\Models\Reino;

class ReinoController extends Controller
{
    protected $bag = [
      'view' => 'reino',
      'route' => 'reino'
    ];

    public function index(Request $request)
    {
        $reinos = Reino::index($request->all())->qtdPag($request->quantidade);
        return view($this->bag['view'] . '.index', compact('reinos'));
    }

    public function create()
    {
        return view($this->bag['view'] . '.create');
    }

    public function store(ReinoRequest $request)
    {
        try {
            DB::beginTransaction();
            $reino = Reino::create($request->validated());
            DB::commit();
            return redirect()->route($this->bag['route'] . '.show', ['reino' => $reino->getKey()]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function show(Reino $reino, Request $request)
    {
        return view($this->bag['view'] . '.show', compact('reino'));
    }

    public function edit(Reino $reino)
    {
        return view($this->bag['view'] . '.edit', compact('reino'));
    }

    public function update(Reino $reino, ReinoRequest $request)
    {
        try {
            DB::beginTransaction();
            $reino->update($request->validated());
            DB::commit();
            return redirect()->route($this->bag['route'] . '.show', ['reino' => $reino->getKey()]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function destroy(Reino $reino)
    {
        try {
            $reino->delete();
            return redirect()->route($this->bag['route'] . '.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Erro ao Apagar o Registro']);
        }
    }
}
