@extends('layout.app')
@section('title','Home')

@section('content')

<div class="container-fluid parallax mb-0">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 topdiv text-center">
            <h1 class="text-white">Software Engineer</h1>
            <h2 class="text-white">Full stack developer</h2>
            <button class="btn btn-primary">Learn More</button>
        </div>
    </div>

</div>
<!-- Service section start -->
<div class="container mt-5 text-center">
    <h2>My Services</h2><br><br>
    <div class="row ">
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
<!-- Service section end -->


<!-- Project section start -->
<div class="container mt-5 text-center">
    <h2>Recent Project</h2><br><br>
    <div class="row ">
    <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">  Project Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Learn More</button>
                    
                </div>
            </div>
        </div>
    
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Learn More</button>
                    
                </div>
            </div>
        </div>
    
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Learn More</button>
                    
                </div>
            </div>
        </div>
    
        
    </div>

</div>
<!-- Project section end -->


<!-- Contact section start -->
<div class="container mb-5 mt-5 text-center">
<h2>Contact with me</h2<br><br>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29186.92013258742!2d90.360778338187!3d23.876671852776663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c58803049f00c7!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1625302424377!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
<!-- Contact section end -->





@endsection