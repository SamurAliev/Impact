<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Partner;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function edit() {
        $info = About::find(1);
        $partners = Partner::all();
        return view('admin.pages.about', compact('info', 'partners'));
    }

    function update(Request $request) {
        $this->validate($request, [
            'main_title'=>'required',
            'partners_title'=>'required',
            'image' => 'nullable|image'
        ]);

        $info = About::find(1);
        $info->edit($request->all());
        flash('Страница успешно отредактирована! :)')->success();

        return redirect()->route('about.edit');
    }
}
