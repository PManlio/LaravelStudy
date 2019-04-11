@extends('layout')

@section('title')
  about
@endsection


@section('content')

  <div>
    ricorda:  yield indica il contenuto dove verrà caricata la nuova section<br>
    extends va richiamato nella pagina successiva<br>
    e il codice va scritto all'interno di una section.<br>
    prima e dopo yield non vanno inseriti commenti html.<br>
    endsection e stop funzionano allo stesso modo
  </div>

@endsection
