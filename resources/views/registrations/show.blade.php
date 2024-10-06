@section('title', 'Sign In')

<x-app-layout>
    <div class="grow py-10">
        <div class="lg:border border-white rounded-md lg:max-w-[60rem] xl:max-w-6xl 2xl:max-w-7xl px-3 sm:px-10 lg:py-5 mx-auto">

            <x-h2 style="style-1">Everything for a charity</x-h2>
            <x-p style="style-1">
                Kelvin was Kenyan and we thought it would be right if any funds raised through this platform went back to Kenya.
                To this end, we have partnered with a young Kenyan non-profit,  <a class="underline" href="https://www.blessedcitron.com">Blessed Citron</a>, and it is to them that we have decided to donate any funds.
            </x-p>

            <x-h2 style="style-1" class="clear-both">About Blessed Citron</x-h2>
            <x-p style="style-1">
                <img class="w-1/5 h-auto float-left mt-1 me-4 border border-gray-800 rounded" src="{{ asset('images/blessed-citron-logo.jpeg') }}" />
                Blessed Citron's programs are built on Sustainable Development Goal 10 (SDG 10): "Reduced Inequality." By addressing the unique challenges faced by vulnerable communities and individuals in Kenya, the organization hopes to contribute to the global effort to reduce inequality by promoting inclusivity, empowerment, and support for those marginalized or discriminated against. Through targeted initiatives, Blessed Citron aims to create a more equitable and just society, fostering community development and empowerment in line with the principles of SDG 10<br>
                “Blessed” symbolizes a commitment to uplifting communities. The choice of "Citron" is to evoke notions of freshness and vitality, fostering a dedication to bringing positive change.

Together, "Blessed Citron" conveys a message of empowerment, hope, and the potential for positive transformation in the lives of vulnerable communities.
<div class="clear-both"></div>

            </x-p>


            <x-h2 style="style-1">Video</x-h2>

            <div class="bg-white mt-5 p-5 rounded-md">
                <a class="block bg-gradient-to-b from-gray-800 to-gray-900 hover:bg-gradient-to-b hover:from-gray-700 hover:to-gray-800 text-4xl text-center p-10 text-white font-black rounded-md shadow-lg" href="{{ route('registration.checkout') }}">SIGN IN TO RACE AND PAY $10 </a>
            </div>

        </div>
    </div>
</x-app-layout>
