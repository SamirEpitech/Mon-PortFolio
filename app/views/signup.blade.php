<h1>Formulaire Fake inscription bordel!!!</h1>

{{Form::open(array('action' => 'UsersController@signup'))}}
{{Form::email('email')}}<br>
{{Form::text('pseudo')}}<br>
{{Form::password('password')}}<br>
{{Form::submit('Connecter')}}
@if(Session::has('erreurMessage'))
    <div class="alert alert-danger">{{ Session::get('erreurMessage') }}</div>
@endif
{{Form::close()}}