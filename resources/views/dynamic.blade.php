@extends('Layout.baseview')
@section('title','Login')
@section('style')
<style>
 .navbar-brand img {
  width: 60px;
}
#logoo{
    border-radius: 50px;
}
.navbar-nav {
  align-items: center;
}
.navbar .navbar-nav .nav-link {
  
  font-size: 1.1em;
  padding: 0.5em 1em;
}
@media screen and (min-width: 768px) {
  .navbar-brand img {
    width: 80px;
  }
  .navbar-brand {
    margin-right: 0;
    padding: 0 1em;
  }
}
</style>
@endsection
@section('content')
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <div class="navbar-nav mx-auto text-black">
                        
                        <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                         <a href="{{url('/')}}" class="navbar-brand d-none d-md-block" >
                            <img src="{{asset('assets/images/logo.png')}}"  alt="Brand Logo" id='logoo'>
                        </a>
                        {{-- @foreach($data as $page)
                        <a href="{{url('page/'.$page->slug)}}" class="nav-item nav-link text-black">{{$page->name}}</a>                       
                       
                        @endforeach --}}
                        <a href="{{url('page/about-us')}}" class="nav-item nav-link active">About Us</a>
                        <a href="{{url('page/contact-us')}}" class="nav-item nav-link active">Contact Us</a>
                        <a href="{{url('/login')}}" class="nav-item nav-link active justify-content-end">Login/Signup</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="m-5">
        {!! isset($data->html)?$data->html : 'Page Not Found' !!}
    </main>
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container m-5">
                        <img src="assets/images/logo.png" height="30px" class="bg-white">
                        <div>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nulla maxime, at culpa ipsa aliquam exercitationem deserunt odit incidunt a neque voluptas suscipit maiores quae dolor dolore tenetur corrupti dolorem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container m-5">
                        <p class="text-white fs-5">Quick Links</p>
                        <ul class="remove-bullets remove-text-decoration">
                            <li><a  href="#" class="remove-text-decoration text-white">About Us</a></li>
                            <li><a href="#" class="remove-text-decoration text-white">Contact Us</a></li>C
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-white text-center">
                    <p>All rights reserved &copy 2025, <a href="1stop.ai">Nahid</a></p>
                </div>
            </div>
        </div>
    </footer>
@endsection
@section('customjs')
<script>
</script>
@endsection