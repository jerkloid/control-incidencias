<?php

namespace App\Http\Controllers;

use App\Models\Incidecias\Incidence;
use App\Models\Incidecias\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class IncidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redNueva()
    {
        return view('Incidencias.nueva');
    }

    public function index()
    {
        $incidences = Incidence::all();
        $solutions = Solution::all();
        //dd($incidences);
        return view('Incidencias.lista', ['incidences' => $incidences, 'solutions' => $solutions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function showSol($id, $i_id)
    {
        $incidences = Incidence::find($i_id);
        $solutions = Solution::find($id);
        //dd($solutions);
        return view('Incidencias.showSolicitud', ['incidences' => $incidences, 'solutions' => $solutions]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200|min:2',
            'content' => 'required',
            //'imgUrl' => 'required|image|max:2048',
        ]);

        $imgUrl = $request->file('imgUrl')->store('public');
        //dd($request->all());
        $emailDetail = 'blanck';
        $incidencia = Incidence::create([
            'title' => $request->title,
            'category' => $request->category,
            'type' => $request->type,
            'priority' => $request->priority,
            'content' => $request->content,
            'imgUrl' => Storage::url($imgUrl),
            'emailDetail' => $emailDetail,


        ]);
        return redirect()->route('listado')->with('success', 'incidencia enviada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incidecias\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function show(Incidence $incidence)
    {
        $incidences = Incidence::find($incidence);
       // dd($incidences);
        return view('Incidencias.show', ['incidences' => $incidences]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incidecias\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidence $incidence)
    {





    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidecias\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidence $incidence)
    {
        $imgUrl = $request->file('imgUrl')->store('public');
        //dd($incidence);
        $emailDetail = 'blanck';
        $incidencia = Solution::create([
            'incidence_id' => $incidence->id,
            'content' => $request->content,
            'imgUrl' => Storage::url($imgUrl),
            'emailDetail' => $emailDetail,


        ]);
        return redirect()->route('listado')->with('success', 'incidencia enviada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidecias\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidence $incidence)
    {
        //
    }
}
