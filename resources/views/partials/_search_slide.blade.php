<div x-data="{rarity: false}" x-show="search" x-cloak 
x-transition:enter="transition duration-1000"
x-transition:enter-start="opacity-0 -translate-y-5"
x-transition:enter-end="opacity-100 translate-y-0"
x-transition:leave="transition duration-1000"
x-transition:leave-start="opacity-100 translate-y-0"
x-transition:leave-end="opacity-0 translate-y-full"
class="container h-screen bg-emerald-900 absolute top-30 left-1/2 z-30
-translate-x-1/2 items-center px-6">
    <div class="absolute left-10 top-10 cursor-pointer" x-on:click="search = false">
        <img src="{{asset("images/close.png")}}" alt="" width="40px" height="40px">
    </div>
    <div class="p-6 container mx-auto text-center space-y-20 mb-20 mt-40">
        <b class="text-light text-4xl">Wanna Know How Rare You NFT Is?</b>
        <form wire:submit.prevent="search" action="/" method="POST" class="flex justify-center">
            @csrf
            <input type="text" name="nftName" placeholder="Bloob #N" 
            class="w-1/2 p-2 text-2xl" wire:model="nftName" autocomplete="off">
            <button class="text-4xl ml-3 bg-slate-900 text-white px-6 p-2
            hover:bg-slate-800" 
            type="submit" x-on:click="rarity = true"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <div x-show="rarity" x-cloak class="container text-center mx-auto p-6">
        @php
            if ($nftData == 0) {
                echo "<div class='lds-dual-ring'></div>";
            } else {
                echo "<b class='text-3xl text-white'>" . $nftData . "</b>";
            }
        @endphp
    </div>
</div>