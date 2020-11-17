<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function edit() {
        $info = Contact::find(1);
        return view('admin.pages.contact', compact('info'));
    }

    function update(Request $request) {
        $this->validate($request, [
            'main_title', 'name_input', 'number_input' =>'required'
        ]);

        $info = Contact::find(1);
        $info->edit($request->all());
        flash('Страница успешно отредактирована! :)')->success();

        return redirect()->route('contact.edit');
    }
}
