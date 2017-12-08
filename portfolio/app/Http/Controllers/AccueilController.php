<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\EmailContact;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\EmailRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\Contact;
use Session;

class AccueilController extends Controller{

   public function index(){
      	return view('accueil');
   }
    public function quisuisje(){
      	return view('quisuisje');
   }
    public function formation(){
      	return view('formation');
   }    
   public function competence(){
      	return view('competence');
   }
    public function projet(){
      	return view('projet');
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
      return view('accueil');
   }
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
        $email = EmailContact::orderBy('created_at','desc')->paginate(10);
        return view('mail',compact('email'));
      }else{
        return view('accueil');
     }
   }
   public function deconnection(){
      if (Session('name')){
        session()->forget('name');
        return view('accueil');
      }
   }
   public function delete(){
      if (Session('name')){
        $files2 = EmailContact::where("id", "=" , $_GET['id'])->delete();
        return redirect('mail');
      }
   }
}
