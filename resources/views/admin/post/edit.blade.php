@extends('adminlte::page')
@section('title', 'Admin edit')
@section('content_header')
    <h1> Éditer un Post</h1>
@stop
@section('content')
<form method="post" action="{{route('post.update',['post'=>$post->id])}}">
@csrf
@method('PUT')
     <div class="form-group">
      <label for="">titre</label>
         @if($errors->has('titre'))
         <div class="text-danger">Titre obligatoire</div>
         @endif
      <input type="text" name="titre" id="titre" 
      class="form-control" placeholder="mon nouveau titre" aria-describedby="helpId" value="{{old('titre',$post->titre)}}">
    </div>
    <div class="form-group">
        <label for="">contenu</label>
           @if($errors->has('contenu'))
              <div class="text-danger">Texte obligatoire</div>
           @endif
        <textarea class="form-control" name="contenu" id="contenu"rows="6" placeholder="mon nouveau contenu" >{{old('contenu',$post->contenu)}} </textarea>
    </div>
    <button type="submit">modif</button>
</form>
@stop


{{-- // ajouter la validate dans le controller --}}
{{-- // ajouter l'affichage de l'erreur dans le blade --}}
{{-- // Ajouter la classe border-danger  --}}
{{-- // Ajouter le old pour récupérer la dernière valeur envoyer --}}


 