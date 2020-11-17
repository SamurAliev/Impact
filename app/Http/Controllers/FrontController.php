<?php

namespace App\Http\Controllers;

use App\Mail\ClientService;
use App\Mail\ClientTariffs;
use App\Models\About;
use App\Models\Contact;
use App\Models\Main;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    function index() {

        $letters = Main::splitLtrs();
        $mainPageInfo = Main::find(1);
        $applicationText = $mainPageInfo->application_text;
        $descriptionTitle = $mainPageInfo->description_title;
        $descriptionContent = $mainPageInfo->description_content;
        $imagePath = $mainPageInfo->getImagePath('image');

        $aboutPageInfo = About::find(1);
        $aboutMainTitle = $aboutPageInfo->main_title;
        $aboutPartnersTitle = $aboutPageInfo->partners_title;
        $aboutImagePath = $aboutPageInfo->getImagePath('image');

        $contactPageInfo = Contact::find(1);
        $contactMainTitle = $contactPageInfo->main_title;
        $contactName = $contactPageInfo->name_input;
        $contactNumber = $contactPageInfo->number_input;
        $contactButton = $contactPageInfo->button_send;

        $services = Service::all();

        $partners = Partner::all();


        return view('pages.index', compact('letters', 'applicationText', 'descriptionTitle',
            'descriptionContent', 'imagePath', 'aboutMainTitle', 'aboutPartnersTitle', 'aboutImagePath', 'contactMainTitle',
            'contactName', 'contactNumber', 'contactButton','services','partners'));
    }

    function show($slug) {
        $services = Service::all();
        $service = Service::where('slug', $slug)->firstOrFail();
        $descriptions = $service->descriptions->all();
        $tariffs = $service->tariffs->all();

        return view('pages.service', compact('service', 'services', 'descriptions', 'tariffs'));
    }

    function sendMailService(Request $request) {

        $this->validate($request, [
            'name'=>'required',
            'number'=>'required'
        ]);


        Mail::to('impact.uz123@gmail.com')->send(new ClientService($request->all()));
        flash('Запрос отправлен')->success();
        return redirect()->route('index');

    }
    function sendMailTariffs(Request $request, $id) {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required'
        ]);
        $slug = Service::find($id)->slug;



        Mail::to('impact.uz123@gmail.com')->send(new ClientTariffs($request->all(), $id));
        flash('Запрос отправлен')->success();
        return redirect()->route('service.show', compact('slug'));
    }
}
