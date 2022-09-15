<div x-show="roadmap" x-cloak 
x-transition:enter="transition duration-1000"
x-transition:enter-start="opacity-0 -translate-y-5"
x-transition:enter-end="opacity-100 translate-y-0"
x-transition:leave="transition duration-1000"
x-transition:leave-start="opacity-100 translate-y-0"
x-transition:leave-end="opacity-0 translate-y-full"
class="container h-screen bg-emerald-900 absolute top-30 left-1/2 
-translate-x-1/2 lg:justify-between items-center flex flex-col lg:flex-row px-6 space-x-6">
    <div class="w-2/5 mb-20 hidden lg:block">
        <img class="max-w-full" src="{{asset("images/roadmap_al.png")}}" alt="">
    </div>
    <a href="#" class="p-3 px-10 bg-white text-slate-900
     rounded-full mb-20 text-xl mt-10 lg:mt-0 hover:bg-slate-900 hover:text-white">Read</a>
    <div class="w-3/4 lg:w-2/5 mb-20">
        <img class="max-w-full" src="{{asset("images/roadmap.png")}}" alt="">
    </div>
</div>