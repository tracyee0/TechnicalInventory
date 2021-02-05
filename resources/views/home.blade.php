@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5">
        <img class="rounded-circle" style="width:150px" class ="rounded mh-100px" src ="{{ asset('images/download.jpg') }}" alt="logo">  
        </div>
        <div class="col-md-9 p-5">
        <h3> Technical Inventory </h3> 
        <div class= "d-flex">
    <div class="pr-5"> <strong> 14 </strong>posts</div>
    <div class="pr-5"> <strong> 10 </strong>followers</div>
    <div class="pr-5"> <strong> 30 </strong>following</div> </div>
    <div class= "pt-4"><strong> techinventory.newscentral.ng</strong> </div>
    <div> This is an inventory system for technical consumables </div>
    <div><a href="www.techinventory.newscentral.ng">www.sm.newscentral.ng</a></div>
    </div>
    </div>
         <div class="row pt-4">
           <div class="col-md-4"><img style="width:250px" class =" mh-200px pr-2" src ="{{ asset('images/covid.jpg') }}" alt="covid" > </div>
           <div class="col-md-4"><img style="width:250px" class =" mh-200px pr-2" src ="{{ asset('images/img1.jpg') }}" alt="img" > </div>
           <div class="col-md-4"><img style="width:250px" class =" mh-200px pr-2" src ="{{ asset('images/download.jpg') }}" alt="download" > </div>
            
         </div>
    </div>
</div>
@endsection
