<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){
        $serviceWebsite = Service::where('title', 'Website')->get();
        $serviceAndroid = Service::where('title', 'Android')->get();
        $serviceUIUX = Service::where('title', 'UI / UX')->get();
        return view('mascitra.index', ['serviceWebsite' => $serviceWebsite, 'serviceAndroid' => $serviceAndroid, 'serviceUIUX' => $serviceUIUX]);
    }

    public function service(){
        $serviceWebsite = Service::where('id', '1')->get();
        $serviceAndroid = Service::where('id', '2')->get();
        $serviceUIUX = Service::where('id', '4')->get();
        return view('mascitra.service', ['serviceWebsite' => $serviceWebsite, 'serviceAndroid' => $serviceAndroid, 'serviceUIUX' => $serviceUIUX]);
    }

    public function serviceshow($id){
        $data = Service::find($id);
        return view('mascitra.serviceshow', ['data' => $data]);
    }

    public function order(Request $request){
        
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'budget' => 'required',
            'company' => 'required',
            'survey' => 'required',
            'message' => 'required'
        ]);
        if($validatedData->fails()){
            return response()->json(['errors' => $validatedData->errors()]);
        } else {
            $data = [
                'name'=> $request->name,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'budget'=> $request->budget,
                'has'=> json_encode($request->has),
                'company'=> $request->company,
                'survey'=> $request->survey,
                'message'=> $request->message,
            ];
        }

        Message::create($data);
        return response()->json(['success' => 'Succesfully']);
    }
}
