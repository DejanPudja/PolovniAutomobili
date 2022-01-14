<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automobili = Cars::orderBy('id','desc')->paginate(3);
        return view('Pages.index')->with("automobili", $automobili);
    
    }
  
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages.novi_oglas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'marka'=>'required',
            'model'=>'required',
            'naziv'=>'required',
            'godiste'=>'required',
            'kilometraza'=>'required',
            'gorivo'=>'required',
            'kubikaza'=>'required',
            'snaga_motora'=>'required',
            'menjac'=>'required',
            'broj_vrata'=>'required',
            'klima'=>'required',
            'registrovan'=>'required',
            'broj_sasije'=>'required',
            'cena'=>'required',
            'opis'=>'required'
        ]);
        $cars = new Cars;
        $cars->marka =  $request->input('marka');
        $cars->model =  $request->input('model');
        $cars->naziv =  $request->input('naziv');
        $cars->godiste =$request->input('godiste');
        $cars->kilometraza =  $request->input('kilometraza');
        $cars->gorivo =  $request->input('gorivo');
        $cars->kubikaza =  $request->input('kubikaza');
        $cars->snaga_motora =  $request->input('snaga_motora');
        $cars->menjac =  $request->input('menjac');
        $cars->broj_vrata =  $request->input('broj_vrata');
        $cars->klima =  $request->input('klima');
        $cars->registrovan =  $request->input('registrovan');
        $cars->opis =  $request->input('opis');
         if($cars->marka =  $request->input('marka') == "Audi"){
            $cars->slika1 =  "images/Audi.jpg";
         }elseif($cars->marka =  $request->input('marka') == "BMW"){
            $cars->slika1 =  "images/bmw.jpg";
         }else{
            $cars->slika1 =  "images/no-image.png";
         }
         $cars->broj_sasije =  $request->input('broj_sasije');
         $cars->cena =  $request->input('cena');
         $cars->user_id = auth()->user()->id;

            // $image = $request->file('slika1');
            // $destinationPath = 'image/';
            // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            // $input['slika1'] = "$profileImage";
        // $datum = date('Y_m_d_H_i_s');
        // //$slike_naziv = $datum."_".$request->input('slika1')->getClientOriginalName();
        // $putanja_slike = $request->input('slika1')->storeAs('images','slika','public');
        // $cars->slika1 = $putanja_slike;
        $cars->save();
        
        // return redirect()->route('Pages.kategorija_vozila.blade.php');
        return redirect('/Automobili')->with('Uspesno','Uspesno kreiran oglas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $automobil = Cars::find($id);
        return view("Pages.automobil")->with('automobil', $automobil);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $automobil = Cars::find($id);
        return view("Pages.azuriranje_oglasa")->with('automobil', $automobil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'marka'=>'required',
            'model'=>'required',
            'naziv'=>'required',
            'godiste'=>'required',
            'kilometraza'=>'required',
            'gorivo'=>'required',
            'kubikaza'=>'required',
            'snaga_motora'=>'required',
            'menjac'=>'required',
            'broj_vrata'=>'required',
            'klima'=>'required',
            'registrovan'=>'required',
            'broj_sasije'=>'required',
            'cena'=>'required',
            'opis'=>'required'
        ]);
        $cars = Cars::find($id);
        $cars->marka =  $request->input('marka');
        $cars->model =  $request->input('model');
        $cars->naziv =  $request->input('naziv');
        $cars->godiste =$request->input('godiste');
        $cars->kilometraza =  $request->input('kilometraza');
        $cars->gorivo =  $request->input('gorivo');
        $cars->kubikaza =  $request->input('kubikaza');
        $cars->snaga_motora =  $request->input('snaga_motora');
        $cars->menjac =  $request->input('menjac');
        $cars->broj_vrata =  $request->input('broj_vrata');
        $cars->klima =  $request->input('klima');
        $cars->registrovan =  $request->input('registrovan');        
        $cars->broj_sasije =  $request->input('broj_sasije');
        $cars->cena =  $request->input('cena');
        $cars->save();

        return redirect('/Automobili')->with('Uspesno','Uspesno azuriran oglas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $automobil=Cars::find($id);
        $automobil->delete();
        return redirect("/Automobili")->with('automobil', $automobil);
        
    }
}
