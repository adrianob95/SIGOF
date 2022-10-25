<?php

namespace App\Http\Controllers;

use App\Models\Oficio;
use Illuminate\Http\Request;

class OficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('oficios-index', ['oficios'=> Oficio::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('novo', ['oficios' => Oficio::all(), 'numeracao' => (Oficio::latest()->first() == null ? 1 : Oficio::latest()->first()->numeracao + 1)]);
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
     
       $oficio=  Oficio::create($request->all());
       return redirect()->route('pdf', ['oficio'=> $oficio])->with('success', 'Oficio criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oficio  $oficio
     * @return \Illuminate\Http\Response
     */
    public function show(Oficio $oficio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oficio  $oficio
     * @return \Illuminate\Http\Response
     */
    public function edit(Oficio $oficio)
    {
        return view('oficio-edit', ['oficio' => $oficio, 'oficios' => Oficio::all()]);
  
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oficio  $oficio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oficio $oficio)
    {
        $oficio->update($request->all());
        return
        redirect()->route('oficio.index')->with('success', 'Oficio atualizado com sucesso!');;
    }
    

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Oficio  $oficio
     * @return \Illuminate\Http\Response
     */


    public function destroy(Oficio $oficio)
    {    
        $oficio->delete();
        return redirect()->route('oficio.index')->with('success', 'Oficio excluido com sucesso!');;
    }
}
