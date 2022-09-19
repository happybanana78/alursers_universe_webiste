@extends('layout')

@section('content')

@include('partials._roadmap_slide')
@include('partials._collection_slide')
@include('partials._faq_slide')
@include('partials._search_slide')

@php
    use App\libraries\Slider;
    $slider = new Slider();
    $slider->setPath("images/bloobs/*");
    $files = $slider->getFiles();
@endphp

<section id="hero">
    <div class="flex flex-col md:flex-row container mx-auto h-screen md:-mt-20 md:space-x-6 z-20
    section-bg md:justify-between items-center px-20 border-x-2 border-slate-900 pt-20 md:pt-0">
        <div class="text-center z-20">
            <h1 class="text-white text-5xl">Welcome To The Alursers Universe</h1>
        </div>
        <div class="mt-10 md:mt-0 z-20">
            @foreach ($files as $file)
                <img class='bloobs-img w-96 rounded-full border-4' src='{{$file}}'>
            @endforeach
        </div>
    </div>
</section>

@endsection