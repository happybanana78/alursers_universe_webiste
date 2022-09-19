<div x-show="search" x-cloak 
x-transition:enter="transition duration-1000"
x-transition:enter-start="opacity-0 -translate-y-5"
x-transition:enter-end="opacity-100 translate-y-0"
x-transition:leave="transition duration-1000"
x-transition:leave-start="opacity-100 translate-y-0"
x-transition:leave-end="opacity-0 translate-y-full"
class="container h-screen bg-emerald-900 absolute top-30 left-1/2 z-30
-translate-x-1/2 lg:justify-between items-center flex flex-col lg:flex-row px-6 space-x-6">
    <form action="/search" method="POST">
        @csrf
        <input type="text" name="nft_name">
        <button class="text-3xl" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <br>
    @if (isset($data))

                <b class="text-xl text-white">{{$data}}</b><p>---</p>


    @endif
</div>