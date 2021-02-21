<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Collection;
use App\Models\Actualite;
use App\Models\Message;
use App\Models\Verset;

class websiteController extends Controller
{

    public function index()
    {
        $collection = Collection::take(4)->get();
        $actu = Actualite::take(2)->get();
        $verset = Verset::take(4)->get();
        return view('front.index',compact('collection','actu','verset'));
    }

    public function presentation()
    {
        return view('front.presentation');
    }

    public function contacts()
    {
        return view('front.contact');
    }

    public function orphelinat()
    {
        return view('front.orphelinat');
    }

    public function enseignement()
    {
        return view('front.enseignement');
    }

    public function single_collection($id)
    {
        $single = Collection::find($id);
        $others = Actualite::take(4)->get();
        return view('front.single_collection',compact('single','others'));
    }

    public function single_actu($id)
    {
        $single = Actualite::find($id);
        $others = Collection::take(4)->get();
        return view('front.single_actualite',compact('single','others'));
    }

    public function collections()
    {
        $collection = Collection::select()->orderBy('id','desc')->paginate(8);
        return view('front.collections',compact('collection'));
    }

    public function actualites()
    {
        $actualite = Actualite::select()->orderBy('id','desc')->paginate(8);
        return view('front.actualite',compact('actualite'));
    }

   /* public function singleTerrains($id)
    {
      $single = Terrain::find($id);
      $other = Construction::take(3)->get();
      return view('front.single_terrain',compact('single','other'));
    }*/

    public function send_msg(Request $request)
    {
    
    Message::create([
        'nom' => htmlspecialchars($request->nom),
        'email' => htmlspecialchars($request->email),
        'objet' => htmlspecialchars($request->objet),
        'message' => htmlspecialchars($request->message),
    ]);

    session()->flash('message', 'Oppération éffectuée avec succès.');
    return redirect()->back();

    }
   	

}
