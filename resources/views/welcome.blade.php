@extends('layouts.main')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')
    <div class="isiprofile">

        <div class="profile1">
            <div class="poto">
                <img src="{{ asset('adit.jpg') }}" alt="">
            </div>
            <div class="nama">
                <h1>Aditya Chandi Nugroho</h1>
            </div>
            <div class="isi">
                <h6>Hello, my name is adit and i'm 21 years old. I am study at bina nusantara.
                    <br>
                    My hobby is watching tv and sleep.
                    And my favorite course is Linear Regression.
                </h6>
            </div>
        </div>

        <div class="profile2">
            <div class="poto">
                <img src="{{ asset('keti.jpg') }}" alt="">
            </div>
            <div class="nama">
                <h1>Catherine Benedicta</h1>
            </div>
            <div class="isi">
                <h6>Hello, my name is kiti and i'm 20 years old. I am study at bina nusantara.
                    <br>
                    My hobby is watching tv and swimming.
                    And my favorite course is Machine Learning.</h6>
            </div>
        </div>

        <div class="profile3">
            <div class="poto">
                <img src="{{ asset('ica.jpg') }}" alt="">
            </div>
            <div class="nama">
                <h1>Annisa Haycal</h1>
            </div>
            <div class="isi">
                <h6>Hello, my name is ijah and i'm 22 years old. I am study at bina nusantara.
                    <br>
                    My hobby is watching tv and take a shower.
                    And my favorite course is Web Programming and Chinesse Literature.</h6>
            </div>
        </div>
    </div>
@endsection

