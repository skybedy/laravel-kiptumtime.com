@section('title', 'Sign In')

<x-app-layout>
    <div class="grow py-10">
        <div class="lg:border border-white rounded-md lg:max-w-[60rem] xl:max-w-6xl 2xl:max-w-7xl px-3 sm:px-10 lg:py-5 mx-auto">

            <x-h2 style="style-1">All proceeds go to charity</x-h2>
            <x-p style="style-1">


             Kelvin was Kenyan and we think it would be right if any funds raised through this platform went back to Kenya and based on this fact we decided that any funds raised will be donated to charity.<br>
To this end, we have partnered with a young Kenyan non-profit <a class="underline" href="https://www.blessedcitron.com">Blessed Citron</a> and it is to them that we have decided to donate any funds
            </x-p>

            <x-h2 style="style-1" class="clear-both">About Blessed Citron</x-h2>
            <x-p style="style-1">
                <img class="w-1/4 h-auto float-left mt-1 me-8 border border-gray-800 rounded" src="{{ asset('images/blessed-citron-logo.jpeg') }}" />
               Blessed Citron is a NGO based in Kenya, dedicated to reducing inequalities by addressing the unique challenges faced by vulnerable communities and individuals in Kenya. The organization currently has programs in gender-based violence, AI for impact, sports, and education. <br>
The organization intends to set up an arts and music centre. This centre will be more than just a space for creativity—it will be a lifeline for vulnerable communities.<br>
Imagine a place where children from disadvantaged backgrounds can escape the harsh realities of their daily lives, finding hope and inspiration through art, music, and self-expression. For many, this centre will be their first chance to discover and nurture their talents, giving them the opportunity to dream big and build a brighter future.<br><br>

Why this centre Matters:
<ul class="border-l border-r border-white px-2 sm:px-4 md:px-5 pt-2 list-disc text-white text-base sm:text-lg md:text-xl lg:text-2xl">
    <li class="mx-5">Inspiration and Opportunity: This centre will provide free access to music, art, and creative expression, offering a safe and nurturing environment for children who need it most.</li>
    <li class="mx-5">Building Confidence: Through artistic expression, children will develop skills, confidence, and resilience that can help them overcome life's challenges.</li>
    <li class="mx-5">Creating Community: The centre will be a place of belonging, giving children from vulnerable communities a sense of pride, purpose, and hope for the future.</li>
</ul>
<div class="text-white text-3xl text-center mt-8"> Your participation today will make a difference.</div>
 </x-p>






            <div class="bg-white mt-5 p-5 rounded-md">
                <a class="block bg-gradient-to-b from-gray-800 to-gray-900 hover:bg-gradient-to-b hover:from-gray-700 hover:to-gray-800 text-4xl text-center p-10 text-white font-black rounded-md shadow-lg" href="{{ route('registration.checkout') }}">SIGN IN TO RACE AND PAY $10 </a>
            </div>

        </div>
    </div>
</x-app-layout>
