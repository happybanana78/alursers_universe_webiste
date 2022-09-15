<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset("favicon.png")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Alursers Universe</title>
</head>
<body class="overflow-hidden" x-data="{roadmap: false, collection: false, faq: false}">
  <nav class="relative container mx-auto bg-slate-900 
  px-10 py-1 items-center md:flex justify-between">
    <div>
      <a href=""><img class="w-44" src="{{asset("images/logo.png")}}" alt=""></a>
    </div>
    <div class="text-white space-x-6 text-2xl hidden md:flex">
      <a x-on:click="roadmap = !roadmap, collection = false, faq = false" 
      class="hover:text-neutral-500" href="#">Roadmap</a>
      <a x-on:click="collection = !collection, roadmap = false, faq = false" 
      class="hover:text-neutral-500" href="#">Collection</a>
      <a x-on:click="faq = !faq, roadmap = false, collection = false" 
      class="hover:text-neutral-500" href="#">FAQ</a>
    </div>
    <div>
      <a class="p-3 px-5 bg-white text-slate-900 rounded-full 
      hover:text-white hover:bg-neutral-500 text-2xl hidden md:block" href="">Join Now!</a>
    </div>
  </nav>
  @yield('content')
  <script src="{{asset("js/bloobs_slider.js")}}"></script>
</body>
</html>