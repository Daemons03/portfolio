<?php

namespace App\Http\Controllers;
 //request bdd
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\ProjetRequest;
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


class AccueilController extends Controller{

   public function index(){
    $projet = Project::orderBy('date_creation','desc')->paginate(1);
    return view('accueil',compact('projet'));
   }
    public function quisuisje(){
        $personal = Personal::get();
      	$experience = Experience::orderBy('id','desc')->get();
        $formation = formation::orderBy('id','desc')->get();
        $skill = Skills::get();
        return view('apropos',compact('experience', 'personal', 'formation', 'skill'));
   }
    public function projet(){
      $projet = Project::orderBy('date_creation','desc')->paginate(1);
      $nombre = Project::count();
    return view('projet',compact('projet', 'nombre'));
   }
    public function contact(){
      	return view('contact');
   }

    public function envoimail(EmailRequest $request){
       	$email = new EmailContact();
       	$email->name = $request->name;
       	$email->mail = $request->email;
       	$email->subjet = $request->sujet;
      	$email->content = $request->message;
      	$email->save();
      	$mail_to = 'm.dagniere@aformac-vichy.fr';
      Mail::to($mail_to)
      ->send(new Contact($request->except('_token')));
      return redirect('contact')->with('envoimail', 'Le mail est bien envoyé');
   }



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
