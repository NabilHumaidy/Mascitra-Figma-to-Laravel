<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard(){
        $user = User::where('level', 'User')->count();
        $admin = User::where('level', 'Admin')->count();
        $order = Message::count();
        $who = Auth::user()->nama;
        return view('dashboard.dashboard',
            ["user" => $user,
            "admin" => $admin,
            "who" => $who,
            "order" => $order]
        );
    }
    
    public function admin(){
        $who = Auth::user()->nama;
        return view('dashboard.admin', ["who" => $who]);
    }

    public function adminapi(){
        $data = User::where('level', 'Admin')->orderBy('created_at', 'desc');
        return DataTables::of($data)->editColumn('created_at', function ($data) {
            return $data->created_at->format('d F Y H:i:s');
        })->make(true);
    }

    public function user(){
        $who = Auth::user()->nama;
        return view('dashboard.user', ["who" => $who]);
    }

    public function userapi(){
        $data = User::where('level', 'User')->orderBy('created_at', 'desc');
        return DataTables::of($data)->editColumn('created_at', function ($data) {
            return $data->created_at->format('d F Y H:i:s');
        })->make(true);
    }

    public function order(){
        $data = Message::orderBy('created_at', 'desc');
        $who = Auth::user()->nama;
        return view('dashboard.order', ["data" => $data, "who" => $who]);
    }

    public function orderapi(){
        $data = Message::orderBy('created_at', 'desc');
        return DataTables::of($data)->addColumn('aksi', function($data){
            return view("dashboard.showbtn")->with('data', $data);
        })->editColumn('created_at', function ($data) {
            return $data->created_at->format('d F Y H:i:s');
        })->make(true);
    }

    public function ordershow($id){
        $data = Message::where('id', $id)->first();
        $who = Auth::user()->nama;
        return view('dashboard.ordershow', ["data" => $data, "who" => $who]);
    }

    public function service(){
        $data = Service::orderBy('created_at', 'desc');
        $who = Auth::user()->nama;
        return view('dashboard.service', ["data" => $data, "who" => $who]);
    }

    public function serviceapi(){
        $data = Service::orderBy('created_at', 'desc');
        return DataTables::of($data)->addColumn('aksi', function($data){
            return view("dashboard.servicebtn")->with('data', $data);
        })->editColumn('created_at', function ($user) {
            return $user->created_at->format('d F Y H:i:s');
        })->editColumn('description', function ($data) {
            return Str::limit($data->description, 100);
        })->make(true);
    }

    public function addservice(Request $request){
        $validatedData = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        if($validatedData->fails()){
            return response()->json(['errors' => $validatedData->errors()]);
        } else {
            if($request->file('gambar')){
                $file = $request->file('gambar');
                // Membuat nama file unik dengan menambahkan bagian waktu dan string acak
                $filename = date('YmdHi') . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension(); 
                $file->move(public_path('image'), $filename);
    
                $data = [
                    'title' => $request->title,
                    'description' => $request->description,
                    'gambar' => $filename // Menggunakan $filename sebagai nama file gambar yang disimpan
                ];
    
                Service::create($data);
                return response()->json(['success' => 'Successfully']);
            } else {
                return response()->json(['success' => 'Error']);
            }
        }
    }

    public function editservice($id){
        $result = Service::where('id', $id)->first();
        return response()->json(['result'=> $result]);
    }

    public function updateservice(Request $request, $id){
        $validatedData = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ]);
        if($validatedData->fails()){
            return response()->json(['errors' => $validatedData->errors()]);
        } else {
            $data = [
            'title'=> $request->title,
            'description'=> $request->description
        ];
        Service::where('id', $id)->update($data);
        return response()->json(['success' => 'Successfully updated Service data!']);
        }
    }

    public function deleteservice($id){
        $result = Service::where('id', $id)->first();
        return response()->json(['result'=> $result]);
    }

    public function destroyservice($id){
        Service::where('id', $id)->delete();
        return response()->json(['success' => 'Successfully deleted Service data!']);
    }

}
