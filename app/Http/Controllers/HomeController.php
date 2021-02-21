<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\Actualite;
use App\Models\Collection;
use App\Models\Verset;
use App\Models\Message;
use Image as InterventionImage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $actualites = Actualite::select()->orderBy('id','desc')->get();
        $collection = Collection::all();
        $verset = Verset::all();
        $msg = Message::all();
        return view('admin.home',compact('actualites','collection','verset','msg'));
    }

    public function ajouter_verset()
    {
        return view('admin.Add.add_verset');
    }

    public function message()
    {
        $messages = Message::select()->orderBy('id','desc')->get();
        return view('admin.message',compact('messages'));
    }

    public function ajouter_appart()
    {
        return view('admin.Add.add_appart');
    }

    public function ajouter_collection()
    {
        return view('admin.Add.add_collection');
    }

    public function ajouter_realisation()
    {
        return view('admin.Add.add_realisation');
    }

    public function ajouter_actu()
    {
        return view('admin.Add.add_actu');
    }

    public function ajouter_location()
    {
        return view('admin.Add.add_location');
    }

    public function update_actu($id)
    {
        $single = Actualite::find($id);
        return view('admin.Update.update_actu',compact('single'));
    }

    public function update_apparts($id)
    {
        $single = Appart::find($id);
        return view('admin.Update.update_apparts',compact('single'));
    }

    public function update_const($id)
    {
        $single = Construction::find($id);
        return view('admin.Update.update_construction',compact('single'));
    }

    public function update_lot($id)
    {
        $single = Lot::find($id);
        return view('admin.Update.update_lot',compact('single'));
    }

    public function updated_verset($id)
    {
        $single = Verset::find($id);
        return view('admin.Update.update_verset',compact('single'));
    }

    public function update_collections($id)
    {
        $single = Collection::find($id);
        return view('admin.Update.update_collections',compact('single'));
    }

    public function view_msg($id)
    {
        $single = Message::find($id);
        return view('admin.Update.view_msg',compact('single'));
    }

    public function update_real($id)
    {
        $single = Realisation::find($id);
        return view('admin.Update.update_realisation',compact('single'));
    }

    public function add_versets(Request $request)
    {
       $verset = Verset::create([
        'reference' => $request->reference,
        'date_ajout' => $request->date_ajout,
        'description' => $request->description,]);
        
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_actu(Request $request, $id)
    {
        $updated = Actualite::find($id);
        if(request()->hasFile('image')){
            $img = request()->file('image');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            dd($photo);
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(571, 360)->save($target);
        }else{
                $photo = $updated->image;
            }
            $updated->update([
                'titre' => $request->titre,
                'image' => $photo,
                'description' => $request->description,
            ]);
            
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_actu($id)
    {
        $actualite = Actualite::find($id);
        $actualite->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_apparts($id)
    {
        $appart = Appart::find($id);
        $appart->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_collection($id)
    {
        $collection = Collection::find($id);
        $collection->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

     public function delete_msg($id)
    {
        $message = Message::find($id);
        $message->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_lot($id)
    {
        $lot = Lot::find($id);
        $lot->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_const($id)
    {
        $construction = Construction::find($id);
        $construction->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function delete_verset($id)
    {
        $verset = Verset::find($id);
        $verset->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }


    public function verset()
    {
        $verset = Verset::select()->orderBy('id','desc')->get();
        return view('admin.verset',compact('verset'));
    }

    public function lot()
    {
        $lot = Lot::select()->orderBy('id','desc')->get();
        return view('admin.lot',compact('lot'));
    }

    public function collection()
    {
        $collection = Collection::select()->orderBy('id','desc')->get();
        return view('admin.collection',compact('collection'));
    }

    public function appart()
    {
        $appart = Appart::select()->orderBy('id','desc')->get();
        return view('admin.appart',compact('appart'));
    }

     public function real()
    {
        $realisation = Realisation::select()->orderBy('id','desc')->get();
        return view('admin.real',compact('realisation'));
    }

    public function add_locations(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(1200, 800)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $terrain = Location::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_location(Request $request, $id)
    {
        $updated = Location::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(1200, 800)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_actu(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('image')){
            $img = request()->file('image');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(571, 360)->save($target);

            $actualite = Actualite::create([
            'titre' => $request->titre,
            'image' => $photo,
            'description' => $request->description,]);
        } 

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_collection(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('image')){
            $img = request()->file('image');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(285, 353)->save($target);

            $collection = Collection::create([
            'titre' => $request->titre,
            'image' => $photo,
            'lien' => $request->lien,
            'description' => $request->description,]);
        } 

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updateds_versets(Request $request, $id)
    {
        $updated = Verset::find($id);

        $updated->update([
            'reference' => $request->reference,
            'date_ajout' => $request->date_ajout,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_const(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(372, 253)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $construction = Construction::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_constr(Request $request, $id)
    {
        $updated = Construction::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(372, 253)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_realisation(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(557, 237)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(557, 237)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $realisation = Realisation::create([
            'titre' => $request->titre,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

     public function updated_real(Request $request, $id)
    {
        $updated = Realisation::find($id);

        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(557, 237)->save($target);
        }
        else{

            $photo = $updated->photo;
        }

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photos') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(557, 237)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photos;
        }

        $updated->update([
            'titre' => $request->titre,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }


    public function add_apparts(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('photo')){
            $img = request()->file('photo');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(1200, 800)->save($target);
        } 

        if(request()->hasFile('photos')){

            $n2=0;
            $AutresPhotos = array();
            foreach(request()->file('photos') as $img){

                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'admin/media/' .$AutrePhoto;

                InterventionImage::make($source)->fit(372, 253)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }

            $AutresPhotos = json_encode($AutresPhotos);
        }else{
            $AutresPhotos = null;
        }
        $appart = Appart::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'lieu' => $request->lieu,
            'date_ajout' => $request->date_ajout,
            'photo' => $photo,
            'photos' => $AutresPhotos,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function updated_collections(Request $request, $id)
    {
        $updated = Collection::find($id);
        if(request()->hasFile('image')){
            $img = request()->file('image');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            dd($photo);
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(285, 353)->save($target);
        }else{
                $photo = $updated->image;
            }
            $updated->update([
                'titre' => $request->titre,
                'image' => $photo,
                'lien' => $request->lien,
                'description' => $request->description,
            ]);
            
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }
}
