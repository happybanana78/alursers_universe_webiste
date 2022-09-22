<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset("favicon.png")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/particles.css")}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Alursers Universe</title>
    @livewireStyles
</head>
<body class="overflow-hidden" 
x-data="{roadmap: false, collection: false, faq: false, search: false}">
  <nav class="relative container mx-auto bg-slate-900 
  px-10 py-1 items-center flex justify-between z-30">
    <div>
      <a href="/"><img class="w-44 z-30" src="{{asset("images/logo.png")}}" alt=""></a>
    </div>
    <div class="text-white space-x-6 text-2xl hidden md:flex z-30">
      <a x-on:click="roadmap = !roadmap, collection = false, faq = false, search = false" 
      class="hover:text-neutral-500 cursor-pointer">Roadmap</a>
      <a x-on:click="collection = !collection, roadmap = false, faq = false, search = false" 
      class="hover:text-neutral-500 cursor-pointer">Collection</a>
      <a x-on:click="faq = !faq, roadmap = false, collection = false, search = false" 
      class="hover:text-neutral-500 cursor-pointer">FAQ</a>
      <a x-on:click="search = !search, roadmap = false, collection = false, faq = false" 
      class="hover:text-neutral-500 cursor-pointer"><i class="fa-solid fa-magnifying-glass"></i></a>
    </div>
    <div class="z-30">
      <button class="p-3 px-5 bg-white text-slate-900 rounded-full hover:scale-125 ease-in duration-300
       text-xl hidden md:block">Join Now!</button>
    </div>
    <div id="menu_btn" class="md:hidden menu -mr-10 z-30">
      <span class="menu-top"></span>
      <span class="menu-middle"></span>
      <span class="menu-bottom"></span>
    </div>
    <div class="md:hidden">
      <div id="menu" class="absolute flex-col items-center mt-12 text-white space-y-4
      text-2xl left-0 right-0 bg-slate-900 py-8 z-30 hidden">
        <a x-on:click="roadmap = !roadmap, collection = false, faq = false, search = false" 
        class="hover:text-neutral-500 cursor-pointer">Roadmap</a>
        <a x-on:click="collection = !collection, roadmap = false, faq = false, search = false" 
        class="hover:text-neutral-500 cursor-pointer">Collection</a>
        <a x-on:click="faq = !faq, roadmap = false, collection = false, search = false" 
        class="hover:text-neutral-500 cursor-pointer">FAQ</a>
        <a x-on:click="search = !search, roadmap = false, collection = false, faq = false" 
        class="hover:text-neutral-500 cursor-pointer"><i class="fa-solid fa-magnifying-glass"></i></a>
      </div>
    </div>
  </nav>
  <div class="h-screen z-10 absolute top-0 w-full" 
  x-on:click="roadmap = false, collection = false, faq = false, search = false"></div>
  <x-flash-found-message />
  @livewire('home-page')
  <footer>
    <section id="footer">
      <div class="absolute container left-1/2 text-center space-x-5 p-5 bottom-0
      -translate-x-1/2 text-3xl text-white z-20">
        <a class="" href=""><i class="fa-brands fa-twitter hover:scale-125 ease-in duration-300"></i></a>
        <a class="" href=""><i class="fa-brands fa-telegram hover:scale-125 ease-in duration-300"></i></a>
        <a class="" href=""><i class="fa-brands fa-discord hover:scale-125 ease-in duration-300"></i></a>
      </div>
    </section>
  </footer>
  <div class="h-screen z-0 absolute top-0 w-full">
    @include('partials._particles')
  </div>
  @livewireScripts
  <script src="https://kit.fontawesome.com/dce035b76e.js" crossorigin="anonymous"></script>
  <script src="{{asset("js/bloobs_slider.js")}}"></script>
  <script src="{{asset("js/menu.js")}}"></script>
</body>
</html>