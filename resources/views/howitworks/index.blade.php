@section('title', 'How it works')
<x-app-layout>
    <div class="bg-red-600 sm:py-10">
        <div class="lg:border border-white rounded-md lg:max-w-[60rem] xl:max-w-6xl 2xl:max-w-7xl mx-auto px-3 sm:px-10 lg:py-5">
            <x-h2 style="style-1">{{ __('messages.headline_1') }}</x-h2>
            <x-p style="style-1">{{ __('messages.trans_1') }}<br>{!! __('messages.trans_2') !!}</x-p>
            <x-h2 style="style-1">{{ __('messages.headline_8') }}</x-h2>
            <x-p style="style-1">{{ __('messages.trans_3') }}</x-p>
            <x-h2 style="style-1">{{ __('messages.headline_2') }}</x-h2>
            <x-p style="style-1">{{ __('messages.trans_6') }}</x-p>
            <x-h2 style="style-1">{{ __('messages.headline_3') }}</x-h2>
            <x-p style="style-1">{{ __('messages.trans_4') }}</x-p>
            <x-p style="style-1">{{ __('messages.trans_5') }}</x-p>
            <x-p style="style-1">{{ __('messages.trans_7') }}</x-p>
            <x-h2 style="style-1">{{ __('messages.headline_4') }}</x-h2>
            <x-p style="style-1">{{ __('messages.trans_8') }}</x-p>
            <x-h2 style="style-1">{{ __('messages.cadence') }}</x-h2>
            <x-p style="style-1">{!! __('messages.trans_9') !!}</x-p>
            <x-h2 style="style-1">{{ __('messages.headline_5') }}</x-h2>
            <x-p style="style-1">{!! __('messages.trans_10') !!}</x-p>
            <x-p style="style-1">{!! __('messages.trans_11') !!}</x-p>
            <x-h2 style="style-1">{{ __('messages.headline_6') }}</x-h2>
            <x-p style="style-1">{!! __('messages.trans_12') !!}</x-p>
            <x-p style="style-1">{!! __('messages.trans_13') !!}</x-p>
            <x-h2 style="style-1">{{ __('messages.headline_7') }}</x-h2>
            <x-p style="style-1">{!! __('messages.trans_14') !!}</x-p>
            <ul class="border-l border-r border-white px-2 sm:px-4 md:px-5 pt-2 list-disc list-inside  text-white text-base sm:text-lg md:text-xl lg:text-2xl">
                <li>18-22 (U23)</li>
                <li>24-29 (OPEN)</li>
                <li>30-34</li>
                <li>35-39</li>
                <li>40-44</li>
                <li>45-49</li>
                <li>50-54</li>
                <li>55-59</li>
                <li>60-64</li>
                <li>65-69</li>
                <li>70-74</li>
                <li>75-79</li>
                <li>80+</li>
            </ul>
            <x-h2 style="style-1">Mobile App</x-h2>
            <x-p style="style-1">There is no mobile app for this platform yet and it is possible to use this platform via a web browser on mobile phones.
 A mobile application, which is not a trivial matter, will be created in the future only when it is clear that there is interest and that it makes sense.
            </x-p>


            <x-h2 style="style-1">About the documentation</x-h2>
            <x-p style="style-1">

                As the platform evolves, this documentation will evolve based on user feedback.
            </x-p>


                        <x-h2 style="style-1">Forum</x-h2>
 <x-p style="style-1">The forum is a place where you can ask questions, share your experiences, and discuss the app. The forum is available to everyone, but only registered users can post. The forum is moderated and the administrator reserves the right to delete posts that are not in line with the rules of the forum. The forum is available at <a target="_blank" href="https://forum.kiptumtime.com" class="text-blue-500 underline">forum.kiptumtime.com</a></x-p>









        </div>
    </div>

</x-app-layout>
