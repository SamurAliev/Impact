<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Description;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));

    }


    public function create()
    {
        return view('admin.services.create');

    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'title_description' => 'required',
            'image' => 'nullable|image',
            'inner_image' => 'nullable|image',
            'content' => 'required',
            'inner_title' => 'required'
        ]);

        Service::add($request);
        flash('Услуга успешно добавлена')->success();


        return redirect()->route('services.index');

    }

    public function show () {

    }



    public function edit(Service $service)
    {
        $tariffs = $service->tariffs;
        return view('Admin.services.edit', compact('service', 'tariffs'));
    }


    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'title'=>'required',
            'title_description'=>'required',
            'image'=>'nullable|image',
            'inner_image'=>'nullable|image',
            'content' => 'required',
            'inner_title' => 'required'
        ]);

        $service->edit($request, $service);
        flash('Услуга обновлена')->success();

        return redirect()->route('services.index');
    }


    public function destroy($service)
    {
        Service::find($service)->delete();
        return redirect()->route('services.index');
    }
}
