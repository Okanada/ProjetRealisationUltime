@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Show Post</h1>
@stop





@section('content')
   <div class="col-8">
       <div class="box">
           <div class="box-header">
               <h1>{{$post->titre}}</h1>
           </div>
           <div class="box-body">
               <p>{{$post->contenu}}</p>
           </div>
       </div>
   </div>
   <div class="col-4">
       <div class="box">
           <div class="box-body">
               <a href="{{route('post.edit',['post'=>$post->id])}}" class="btn btn-warning">edit</a>
               <a href="" class="btn btn-danger">delete</a>
           </div>
       </div>
   </div>
@stop