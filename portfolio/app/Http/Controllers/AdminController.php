<?php

namespace App\Http\Controllers;
 //request bdd
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\ProjetRequest;
use App\Http\Requests\ModifRequest;
use App\Users;
use App\EmailContact;
use App\Experience;
use App\Personal;
use App\Formation;
use App\Skills;
use App\Project;
//envoi mail
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\Contact;
//variable session
use Session;


class AdminController extends Controller{

//BACK-OFFICE
    public function connection(){
      	return view('connection');
   }
    public function goconnection(UsersRequest $request){
		$mail = Users::where('email', '=', $request->email)->get();
		$name = $mail[0]->name;
			if ($mail[0]->password == $request->password){
				Session::put('name', $name);
				return redirect('home');
			}else{
				return view('accueil');
			}
    }
    public function home(){
	    if (Session('name')){
        $email = EmailContact::orderBy('created_at','desc')->paginate(2);
	    	return view('home',compact('email'));
	    }else{
	    	return view('accueil');
	   }
   }
   public function mail(){
      if (Session('name')){
        $email = EmailContact::orderBy('created_at','desc')->paginate(5);
        $nombre = EmailContact::count();
        return view('mail',compact('email', 'nombre'));
      }else{
        return view('accueil');
     }
   }
  public function newprojet(){
      if (Session('name')){       
       return view('newprojet');
      }else{
        return view('accueil');
     }
   }
public function goprojet(ProjetRequest $request){
      if (Session('name')){ 
      $projet = new Project();
      $projet->title = $request->title;
      $projet->date_creation = $request->datecrea;
      $projet->date_fin_creation = $request->datefincrea;
      $projet->description = $request->description;
      $projet->image = $request->image->getClientOriginalName();
      $projet->save();
      $destinationPath = '/images/';
      $request->image->move(public_path().$destinationPath, $projet->image);
      return redirect('projet');
      }else{
        return view('accueil');
     }
   }
  public function modifinfo(){
      if (Session('name')){  
      $skill = Skills::get();    
       return view('modifinfo', compact('skill'));
      }else{
        return view('accueil');
     }
   }
     public function gomodifinfo(ModifRequest $request){
      if (Session('name')){  
           dd($request);
       return view('modifinfo');
      }else{
        return view('accueil');
     }
   }

   public function deconnection(){
      if (Session('name')){
        session()->forget('name');
        return redirect('/');
      }
   }
   public function delete(){
      if (Session('name')){
        $files2 = EmailContact::where("id", "=" , $_GET['id'])->delete();
        return redirect('mail')->with('resultat', 'Le mail est bien supprimé');
      }
   }
}