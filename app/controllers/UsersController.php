<?php

class UsersController extends BaseController {

    public function login(){
        if(Request::isMethod("POST")){
            $pseudo = Input::get('pseudo');
            $password = Input::get('password');
                if(Auth::attempt(array('pseudo' => $pseudo, 'password' => $password))){
                    return View::make("layout");
                }else {
                    $message = "blabla";
                    Session::flash('erreurMessageCompte', $message);
                    return View::make('login');
                }
        }
        
        if(!Auth::check()){
            return View::make('login');
        }else{
            $message = "Vous êtes déjà connecter !";
            Session::flash('erreurMessage', $message);
            return View::make('layout');
        }
    }
    public function signup(){

        if(Request::isMethod("POST")){
            if(!empty('email') && !empty('pseudo') && !empty('password')){
                $email = Input::get('email');
                $pseudo = Input::get('pseudo');
                $pasword_non_hashe = Input::get('password');
                $password = Hash::make($pasword_non_hashe);

                $data = new User();
                $data->email = $email;
                $data->pseudo = $pseudo;
                $data->password = $password;

                $data->save();

                return Redirect::to('signup');
            }else{
                $var = "Vous avez oublier un champs!";
                Session::put('erreurMessage', $var);
            }
        }
        return View::make('signup');
        /*if(Auth::check()){
            return View::make('signup');
        }else{
            Session::flash('erreurMessage', "Vous devez être connecter !");
            return View::make('layout');
        }*/
    }
}