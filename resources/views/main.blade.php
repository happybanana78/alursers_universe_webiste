@extends('layout')

<?php use App\libraries\Slider as Slider; ?>

@section('content')
@include('partials._login')
@include('partials._signup')
    <!--
    <div class="slide position-absolute bg-success align-items-center d-flex">
      <img class="roadmap-al" src="{{asset("images/roadmap_al.png")}}" alt="">
      <img class="roadmap w-50" src="{{asset("images/roadmap.png")}}" alt="">
    </div>
  -->
    <div class="slide position-absolute bg-success d-none">
      <div class="container text-center align-items-center mt-5">
        <form action="/search" class="d-flex px-5">
          <input type="search" class="form-control" name="name" required>
          <button class="btn btn-success btn-lg btn-outline-dark">Search</button>
        </form>
      </div>
    </div>
    <div class="container justify-content-lg-between align-items-center d-lg-flex mt-lg-4">
        <b class="fs-1 welcome-text text-light w-100 d-none d-lg-block">Welcome To The Alurser Universe!</b>
        <div class="bloobs">
        <?php
            $slider = new Slider();
            $slider->setPath("images/bloobs/*");
            $fileList = $slider->getFiles();
            foreach ($fileList as $file) {
                echo "<img class='bloobs-img border border-3 border-white rounded-circle w-100' src='" . $file . "'>";
            }
        ?>
        </div>
    </div>
@endsection