<?php

namespace App\Http\Controllers;

use App\Category;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $links = session('links');
        $currentLink = request()->path(); // Getting current URI like 'category/books/'
        array_unshift($links, $currentLink); // Putting it in the beginning of links array
        session(['links' => $links]); // Saving links array to the session
        return view('service.index', compact('services'));
    }

    public function indexOffer()
    {
        $services = Service::where('isOffer', '!=', 'N')->orderBy('name', 'asc')->get();
        $links = session('links');
        $currentLink = request()->path(); // Getting current URI like 'category/books/'
        array_unshift($links, $currentLink); // Putting it in the beginning of links array
        session(['links' => $links]); // Saving links array to the session

        return view('offer.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::getCategoriesList();
        //echo $categories;
        //return dd($categories);
        return view('service.create', compact('categories'));
    }

    public function createOffer()
    {
        $categories = Category::getCategoriesList();
        return view('offer.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Category::getCategoriesList();
        $index = $request->get('Categoria');
        $service = new Service([
            'name' => $request->get('Nombre'),
            'price' => $request->get('Precio') != null ? $request->get('Precio') : 0,
            'description' => $request->get('Descripcion'),
            'isOffer' => $request->get('offer'),
            'category' => $categories[$index]
        ]);

        $service->save();

        return redirect(session('links')[0]); // Will redirect 2 links back

        //return $service->id;
        //return dd($categories[$index]);
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
        $categories = Category::getCategoriesList();
        $service = Service::findOrFail($id);
        return view('service.edit', compact('service', 'categories'));
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
        $categories = Category::getCategoriesList();
        $index = $request->get('Categoria');
        $service = Service::findOrFail($id);
        $service->name = $request->get('Nombre');
        $service->price = $request->get('Precio');
        $service->description = $request->get('Descripcion');
        $service->category = $categories[$index];

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
