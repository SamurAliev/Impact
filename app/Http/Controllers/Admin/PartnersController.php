<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'=>'required|image'
        ]);
        Partner::add($request->all());

        flash('Тариф успешно добавлен')->success();
        return redirect()->route('about.edit');


    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        flash('Логотип удален')->success();

        return redirect()->route('about.edit');
    }
}
