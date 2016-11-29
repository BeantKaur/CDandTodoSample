<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cd;
use Illuminate\Support\Facades\Redirect;

class CdController extends Controller
{
    public function index(){
        $cds = Cd::all();
        return view('cds.index')->with('cds',$cds);
    }
    public function show($id){
        $cd = Cd::find($id);
        return view('cds.show')->with('cd',$cd);
    }

    public function create(){
        return view('cds.create');
    }

    public function store(Request $request){


        $this->validate($request,
            [
                'titel' => 'required|min:10',
                'interpret' => 'required',
                'jahr' => 'required|integer'
            ]
            );

       // dd($request->all());
       // Cd::create($request->all());



        $cd =  new Cd;
        $cd->titel = $request->titel;
        $cd->interpret =$request->interpret;
        $cd->jahr = $request->jahr;

        $cd->save();


         return Redirect('cds');
    }
    public function edit($id){
        $cd= Cd::find($id);
        return view('cds.edit')->with('cd',$cd);
    }

    public function update(Request $request,$id){
        $this->validate($request,
            [
                'titel' => 'required|min:5',
                'interpret' => 'required',
                'jahr' =>'required|integer'
            ]

        );
        $inputs = $request->all();
        $cd = Cd::find($id);
        $cd->update($inputs);

        return Redirect('cds');
    }
    public function destroy($id){

        Cd::find($id)->delete();
        return Redirect('cds');
    }

}
