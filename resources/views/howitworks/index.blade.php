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
                        <h2 class="text-2xl text-orange-500 underline mt-10">Method of calculating time and distance</h2>
                        <p class="text-xl mt-3">

                           As already mentioned, the app calculates everything within 2:00:35, however, it should be noted that probably no watch records the position every second, but at intervals that vary. Therefore, if, for example
the record of your run does not contain a time marker at 2:00:35, it will stop at the first possible time after it, say 2:00:38, subtract 3 seconds and subtract the distance covered in those 3 seconds by calculating the average speed up to that time.

We all know this, we run for an hour, then take a 15 minute break, then run for an hour again, but Strava calculates our pace and distance for the two hours. The fact that it actually took 2:15 is indicated by the
Elapsed Time.

That's not the case here, the result is the total time from the start of the run to the end of the run, if we take a break during the run, that counts towards the result. Therefore, you can not be surprised that if you take a break, Strava
shows you a different result than our app. Watch out for this.
                        </p>



                        <h2 class="text-2xl text-orange-500 underline mt-10">Trickies of the Strava</h2>
                        <p class="text-xl mt-3">

                            Strava is a great helper, but it has its own laws and these need to be taken into account.
As is probably obvious, the method of distance between two GPS points is not entirely accurate. Several principles are used for this purpose, such as the Haversine or Vincenty formula, for example. Strava, or Garmin but accurate ways
calculation of distance are hidden, so we can never get indentically the same results on this platform, but that's okay, because the important thing is that the calculation of all results for which the Haversine formula is used on this platform is done in the same way for all
                        </p>




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
