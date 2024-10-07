@inject('carbon', 'Carbon\Carbon')
@section('title', 'Homepage')
<x-app-layout>
    <div class="text-white text-center text-xs sm:text-sm lg:text-xs xl:text-base font-black border-y border-white  py-2 -mt-48 md:-mt-24 xl:-mt-16">
        The Kiptumtime platform is a running challenge based on Kelvin's world record time 2:00:35 and in this challenge you can try to cover as much distance as possible within this time.

    </div>

    <x-info />
    <div class="text-[6.3rem] sm:text-[11.5rem] md:text-[13.8rem] lg:text-[18rem] xl:text-[21rem] 2xl:text-[26rem] text-center text-white font-black leading-none">2:00:35</div>
</x-app-layout>
