@section('title', 'How it works')
<x-app-layout>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                  <div class="p-standard md:p-6 text-gray-900 bg-rd-500">

                    <h2>English here used righ now</h2>
                    <p class="p-standard font-black text-red-600">Please excuse the fact, that the English used here in this moment is not very good, this application was created in a hurry and the author does not speak English very well.
                        Most of the text used here comes from the DeepL translator, but this will change over time.
                    </p>
                    <h2>{{ __('messages.headline_1') }}</h2>
                    <p>{{ __('messages.trans_1') }}</p>
                    <p>{{ __('messages.trans_2') }}</p>
                    <p>{{ __('messages.trans_3') }}</p>
                    <h2>{{ __('messages.headline_2') }}</h2>
                    <p>{{ __('messages.trans_6') }}/p>
                    <h2>{{ __('messages.headline_3') }}</h2>
                    <p>{{ __('messages.trans_4') }}</p>
                    <p>{{ __('messages.trans_5') }}</p>
                    <p>{{ __('messages.trans_7') }}</p>
                    <h2>{{ __('messages.headline_4') }}</h2>
                    <p>{{ __('messages.trans_8') }}</p>
                    <h2>{{ __('messages.cadence') }}</h2>
                    <p>{!! __('messages.trans_9') !!}</p>
                    <h2>{{ __('messages.headline_5') }}</h2>
                    <p>{!! __('messages.trans_10') !!}</p>
                    <p>{!! __('messages.trans_11') !!}</p>
                    <h2>{{ __('messages.headline_6') }}</h2>
                    <p>{!! __('messages.trans_12') !!}</p>
                    <p>{!! __('messages.trans_13') !!}</p>

                        <div class="mt-10">
                            <h2 class="text-2xl text-orange-500 underline">Age groups</h2>
                            <p class="text-xl mt-3" > Classification into the age group is done according to the year of birth, if someone does not want to indicate their year of birth they will automatically be classified into the OPEN group.</p>

                            <ul class="list-disc text-xl list-inside mt-5">
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
                            </p>
                      </div>c

                        <h2 class="text-2xl text-orange-500 underline mt-10">Mobile App</h2>
                        <p class="text-xl mt-3">

                           There is no mobile app for this platform yet and it is possible to use this platform via a web browser on mobile phones.
 A mobile application, which is not a trivial matter, will be created in the future only when it is clear that there is interest and that it makes sense.
                        </p>


                           <h2 class="text-2xl text-orange-500 underline mt-10">About the documentation</h2>
                        <p class="text-xl mt-3">

                            As the platform evolves, this documentation will evolve based on user feedback.
                        </p>


 <h2 class="text-2xl text-orange-500 underline mt-10">Forum</h2>
 <p class="text-xl mt-3" >The forum is a place where you can ask questions, share your experiences, and discuss the app. The forum is available to everyone, but only registered users can post. The forum is moderated and the administrator reserves the right to delete posts that are not in line with the rules of the forum. The forum is available at <a target="_blank" href="https://forum.kiptumtime.com" class="text-blue-500 underline">forum.kiptumtime.com</a></p>








            </div>
        </div>
    </div>

</x-app-layout>
