@extends('adminlte::page')
@section('title', 'Admin edit')
@section('content_header')
    <h1>Création d'un post</h1>
@stop
@section('content')
<form method="post" action="{{route('post.store')}}">
@csrf
     <div class="form-group">
      <label for="">titre</label>
         @if($errors->has('titre'))
         <div class="text-danger">Titre obligatoire</div>
         @endif
      <input type="text" name="titre" id="titre" 
      class="form-control" placeholder="mon nouveau titre" aria-describedby="helpId" value="{{old('titre')}}">
    </div>
    <div class="form-group">
        <label for="">contenu</label>
           @if($errors->has('contenu'))
              <div class="text-danger">Texte obligatoire</div>
           @endif
        <textarea class="form-control" name="contenu" id="contenu"rows="6" placeholder="mon nouveau contenu" >{{old('contenu')}} </textarea>
    </div>
    <button type="submit">Créer</button>
</form>
@stop





 