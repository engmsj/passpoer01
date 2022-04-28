@extends('layouts.travel')
@section('content')
    <!-- strad page -->
    <div class="page">
        <!-- strad header -->
        <header>
            <img src="{{asset('assets/img/2068012a7ee7bd4f29eac106d00663c8.jpg')}}" class="borders" alt="">
            <div style="width: 30%;">
                <div class="alert">
                    <h3>warning</h3>
                    <i class="fas fa-exclamation-triangle"></i>
                    <h4>The passenger can't pass.</h4>
                    <a href="{{route('reason')}}">Click here for the reason</a>
                </div>
                <div class="content1">
                    <div class="image">
                      
                    </div>
                    <div class="info">
                        <h5>Name: <span>khalid Ibrahim Omar Al-Qahtani</span></h5>
                        <hr>
                    </div>
                    <!-- ---------------- -->
                    <div class="info">
                        <h5>ID: <span>1099876543</span></h5>
                        <hr>
                    </div>
                    <!-- --------------- -->
                    <div class="info">
                        <h5>Passport ID: <span>1099876543</span></h5>
                        <hr>
                    </div>
                    <!-- -------------------- -->
                    <div class="info">
                        <h5>Travel To: <span>America</span></h5>
                        <hr>
                    </div>
                    <!-- -------------- -->
                    <div class="info">
                        <h5>Date of Expiry: <span>15/5/2025</span></h5>
                        <hr>
                    </div>
                    <!-- ----------------- -->
                    <!-- <div class="info">
                        <h5>Travel status: <span>_</span></h5>
                        <hr>
                    </div> -->
                    <!-- ------------- -->
                    <div class="info">
                        <h5> <a href="{{route('kalaed')}}">Travel History: <i class="fas fa-arrow-circle-right" style="color: green;"></i></a> </h5>
                        <hr >
                    </div>
                    <div class="infos">
                        <button><a href="#">Approve</a></button>
                        <button id="but"><a href="#">Disapprove & report</a></button>
                    </div>
                    <div class="infos none">
                        <textarea placeholder="Please write the reason for disapprove... "></textarea>
                        <button> <a href="#">Send</a> </button>
                    </div>
                </div>
            </div>
           
            <img src="{{asset('assets/img/367100.png')}}" alt="">
        </header>
     
        <!-- end header -->
    </div>
@endsection