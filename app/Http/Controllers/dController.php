<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
class dController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function store(Request $request)
{

    return redirect()->route('d.welcome');
}

    public function delete($id){
        return redirect()->back();
    }

    public function edit($id){
        return view("update");
    }
    public function updateData(Request $request){
            return redirect(route("d.welcome"));
    }
    // Menandai task sebagai done
    public function complete($id)
    {
    return redirect()->route('d.welcome');
    }

// Menampilkan history
    public function history()
    {
    return view('history');
    }


    


}    
