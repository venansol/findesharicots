@extends('template')

@section('bobo')
    <p>you mapuel</p>
    @endsection

@section('contenu')
    <form action="{{ url('users') }}" method="POST">
        {{ csrf_field() }}
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Envoyer !">
    </form>
@endsection