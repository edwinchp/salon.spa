<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('isOffer', '!=', 'Y')->orderBy('name', 'asc')->get();
        
        return view('service.index', compact('services'));
    }

    public function indexOffer()
    {
        $services = Service::where('isOffer', '!=', 'N')->orderBy('name', 'asc')->get();
        
        return view('offer.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    public function createOffer()
    {
        return view('offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service([
            'name' => $request->get('Nombre'),
            'price' => $request->get('Precio') != null ? $request->get('Precio') : 0,
            'description' => $request->get('Descripcion'),
            'isOffer' => $request->get('offer'),
            'category' => $request->get('Categoria')
        ]);

        $service->save();
        return redirect('/servicios');
        //return $service->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->name = $request->get('Nombre'); 
        $service->price = $request->get('Precio');
        $service->description = $request->get('Descripcion');
        $service->category = $request->get('Categoria');

        $service->save();
        return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect('/servicios');
    }
}
