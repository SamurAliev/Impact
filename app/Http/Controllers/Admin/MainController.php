<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function edit() {
        $info = Main::find(1);
        return view('admin.pages.main', compact('info'));
    }
    function update(Request $request) {
        $this->validate($request, [
            'main_title'=>'required',
            'application_text'=>'required',
            'description_title'=>'required',
            'description_content'=>'required',
            'image' => 'nullable|image'
        ]);

        $info = Main::find(1);
        $info->edit($request->all());
        flash('Страница успешно отредактирована')->success();

        return redirect()->route('main.form');
    }
}
