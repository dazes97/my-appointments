<?php

namespace App\Http\Controllers;

use App\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $specialties = Specialty::all();
        return view('specialties.index', compact('specialties'));
    }
    public function create()
    {
        return view('specialties.create');
    }
    private function performValidation(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
        ];
        $messages =[
            'name.required' => 'Es necesario ingresar un nombre de especialidad',
            'name.min' => 'El nombre debe tener 3 caracteres como minimo',
        ];
        $this->validate($request,$rules,$messages);
    }
    public function store(Request $request)
    {
        $this->performValidation($request);
        $specialty = Specialty::create($request->only('name','description'));
        $notification = "La nueva especialidad se ha registrado correctamente";
        return redirect(url('/specialties'))->with(compact('notification'));
    }
    public function edit(Specialty $specialty)
    {
        return view('specialties.edit', compact('specialty'));
    }
    public function update(Request $request, Specialty $specialty)
    {
        $this->performValidation($request);
        $specialty->update($request->only('name','description'));
        $notification = "La especialidad se ha actualizado correctamente";
        return redirect(url('/specialties'))->with(compact('notification'));
    }
    public function destroy(Specialty $specialty)
    {
        $specialty->delete();
        $notification = "La especialidad \"".$specialty->name."\" se ha eliminado correctamente";
        return redirect(url('/specialties'))->with(compact('notification'));
    }
}
