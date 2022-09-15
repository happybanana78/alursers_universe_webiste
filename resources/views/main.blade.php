@extends('layout')

@section('content')

@include('partials._roadmap_slide')
@include('partials._collection_slide')
@include('partials._faq_slide')

<section id="hero">
    <div class="flex flex-col md:flex-row container mx-auto h-screen
    section-bg md:justify-between items-center px-20 border-x-2 border-slate-900 pt-20 md:pt-0">
        <div class="text-center">
            <h1 class="text-white text-5xl">Welcome To The Alursers Universe</h1>
        </div>
        <div class="mt-10 md:mt-0">
            @foreach ($files as $file)
                <img class='bloobs-img w-96 rounded-full border-4' src='{{$file}}'>
            @endforeach
        </div>
    </div>
</section>

@endsection