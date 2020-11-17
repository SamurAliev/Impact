<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Tariff;
use Illuminate\Http\Request;

class TariffsController extends Controller
{
    public function edit($id) {
        $tariff = Tariff::find($id);
        return view('admin.tariffs.edit', compact('tariff'));
    }

    public function update(Request $request,$id) {
        $tariff = Tariff::find($id);
        $service = $tariff->service->id;
        $this->validate($request, [
            'title'=>'required',
            'content'=>'required',
            'price'=>'required',
        ]);

        $tariff->edit($request);
        flash('Тариф обновлен')->success();

        return redirect()->route('services.edit', compact('service'));
    }

    public function create(Request $request) {
        $serviceId = $request->session()->get('id');
        return view('admin.tariffs.create', compact('serviceId'));

    }

    public function show($id) {
    }

    function store(Request $request) {
        $serviceId = $request->session()->get('id');
        $this->validate($request, [
           'title'=>'required',
           'content'=>'required',
           'price'=>'required'
        ]);
        Tariff::add($request->all(), $serviceId);
        $service = Service::find($serviceId);

        flash('Тариф успешно добавлен')->success();


        return redirect()->route('services.edit', compact('service'));
    }

    public function destroy($id)
    {

        $tariff = Tariff::find($id);
        $service = Service::find($tariff->service_id);

        $tariff->delete();
        flash('Тариф удален')->success();

        return redirect()->route('services.edit', compact('service'));
    }
}
