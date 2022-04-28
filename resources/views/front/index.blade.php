@extends('layouts.travel')
@section('content')

    <!-- strad page -->
    <div class="page">
        <!-- strad header -->
        <header>
            <img src="{{asset('assets/img/2068012a7ee7bd4f29eac106d00663c8.jpg')}}" class="borders" alt="">
            <div class="content">
                <div class="image">
                   
                </div>
                <div class="info">
                    <h5>Name: <span>Reem Saad Salem Aldossary</span></h5>
                    <hr>
                </div>
                <!-- ---------------- -->
                <div class="info">
                    <h5>ID: <span>1091234567</span></h5>
                    <hr>
                </div>
                <!-- --------------- -->
                <div class="info">
                    <h5>Passport ID: <span>1091234567</span></h5>
                    <hr>
                </div>
                <!-- -------------------- -->
                <div class="info">
                    <h5>Travel To: <span>Qatar</span></h5>
                    <hr>
                </div>
                <!-- -------------- -->
                <div class="info">
                    <h5>Date of Expiry: <span> 23/1/2023</span></h5>
                    <hr>
                </div>
                <!-- ----------------- -->
                <!-- <div class="info">
                    <h5>Travel status: <span>Airport</span></h5>
                    <hr>
                </div> -->
                <!-- ------------- -->
                <div class="info">
                    <h5> <a href="{{route('travel')}}">Travel History: <i class="fas fa-arrow-circle-right" style="color: green;"></i></a> </h5>
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
            <img src="{{asset('assets/img/367100.png')}}" alt="">
        </header>
       
        <!-- end header -->
    </div>
@endsection