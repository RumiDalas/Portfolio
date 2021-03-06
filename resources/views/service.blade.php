@extends('layout.app')
@section('title','Service')

@section('content')

<div class="container-fluid bg-dark">
    <div class="row p-3">
        <div class="col-md-12 text-center">
            <h4 class="text-white">My Service</h4>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
    
    </div>

</div>

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-md-6">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Your Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Your Phone</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Your Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Your Message</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                
            </div>

            <div class="d-grid mt-2 col-12 ">
                <button class="btn btn-primary" type="button">Button</button>
                
            </div>
            
        </form>
        
        </div>
        <div class="col-md-6">
            <h5>Address</h5>
            <p>Uttara, Dhaka, Bangladesh</p>
            <p>+88023284385</p>
            <p>name@gmail.com</p>
        </div>
    
    </div>

</div>




@endsection
