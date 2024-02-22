<?php

namespace App\Http\Controllers;

use App\Models\Neighbor;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Http\Requests\NeighborRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;




class NeighborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $neighbors = Neighbor::all();
        // return view("vendor.jetstream.components.welcome", compact('neighbors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NeighborRequest $request)
    {

        //$registro20 = Neighbor::where("type");

        $total_registros_participantes = Neighbor::where("type","form")->count();


        if($total_registros_participantes < 20){

            $date = Carbon::now();
            Neighbor::create([
                "name" => $request->name,
                "lastname_p" => $request->lastname_p,
                "lastname_m" => $request->lastname_m,
                "document" => $request->document,
                "territory" => $request->territory,
                "type_organization" => $request->organization,
                "type" => "form",
                "creation_date" => $date->toDateString()
            ]);

            return redirect()->route('welcome.neighbors')->with('success', 'Registro exitoso.');
        }
        else {

            return redirect()->route('welcome.neighbors')->with('error', 'Las inscripciones cerraron. Muchas gracias por su participación!');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Neighbor  $neighbor
     * @return \Illuminate\Http\Response
     */
    public function show(Neighbor $neighbor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Neighbor  $neighbor
     * @return \Illuminate\Http\Response
     */
    public function edit(Neighbor $neighbor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Neighbor  $neighbor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Neighbor $neighbor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Neighbor  $neighbor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Neighbor $neighbor)
    {
        //
    }

    public function dashboard() {

        $neighbors = Neighbor::all();
        return view('dashboard', compact('neighbors'));
    }

    public function welcome() {

        $dataOrganizations = Organization::all();
        return view('welcome', compact('dataOrganizations'));

    }
}
