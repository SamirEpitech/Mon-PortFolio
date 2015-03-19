<h1>Formulaire Fake inscription bordel!!!</h1>

{{Form::open(array('action' => 'UsersController@signup'))}}
{{Form::email('email')}}<br>
{{Form::text('pseudo')}}<br>
{{Form::password('password')}}<br>
{{Form::submit('Connecter')}}
@if(Session::has('erreurMessage'))
    <div class="alert alert-danger">{{ Session::get('erreurMmessage') }}</div>
@endif
{{Form::close()}}