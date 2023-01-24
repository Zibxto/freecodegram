@extends('layouts.app')

@section('content')
<div class="container mt-4" style="width:50%;">
    <div class="row">
        <div class="col-3">
        <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/ikqra03zdnggljdu5vv0" class="rounded-circle" style="max-width: 100%; max-height:100%">
        </div>

        <div class="col-9 pl-5">
         <div><h1>{{$user->username}}</h1></div>

         <div class="d-flex">
            <div class="pr-5"><strong>153</strong> posts</div>
            <div class="pr-5"><strong>23k</strong> followers</div>
            <div class="pr-5"><strong>212</strong> following</div>
         </div>

         <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
        <div>{{ $user->profile->description}}</div>
        <div><a href="#">{{$user->profile->url}}</a></div>

        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="{{URL::asset('/image/Rohman.jpg')}}" alt="" class="w-100">
        </div>
         <div class="col-4">
            <img src="{{URL::asset('/image/Rohman.jpg')}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="{{URL::asset('/image/Rohman.jpg')}}" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
