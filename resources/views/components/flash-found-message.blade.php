@if (session()->has("found"))
    <div x-data="{foundPop: true}" x-show="foundPop"
    x-transition:leave="transition duration-1000"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-full"
    x-init="setTimeout(() => foundPop = false, 3000)"
    class="z-30 text-center text-white p-5 text-2xl absolute bg-red-700
    container top-0 -translate-x-1/2 w-1/2 md:w-1/3 left-1/2">{{session("found")}}</div>
@endif