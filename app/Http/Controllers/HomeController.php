<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $latesttwolivres =  Livre::skip(0)
                ->take(2)
                ->get();

                
        $latestforlivres =  Livre::skip(2)
                ->take(4)
                ->get();

        return view('index',compact(['latesttwolivres','latestforlivres']));
    }


    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
  
}