<x-app-layout>
    <x-alert />
    <x-info />

    <div class="py-6 px-5 md:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="lg:p-6 text-gray-900 bg-rd-500">
                    <div class="lg:mt-10">
                        <div class="text-[0.7rem] sm:text-lg md:text-xl xl:text-2xl text-green-700 font-black">Insert the link from Strava following the instructions below:</div>
                            <form class="border  border-blue-400 rounded-md p-2 sm:p-4 bg-slate-50" action="{{ route('event.upload.store.url',$eventId) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="flex space-x-1">
                                    <input type="text" name="strava_url" class="w-2/3 sm:w-full border border-gray-400 rounded-md py-[9px]">

                                    <button type="submit" class="flex items-center justify-center bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-1 rounded-md w-1/3 sm:w-1/5 text-xs sm:text-lg">
                                        Upload link
                                    </button>
                                </div>
                            </form>

                                <div class="mt-10">
                                    <h3 class="text-gray-800 underline text-xl sm:text-2xl">Examples of possible links</h3>

                                    <div class="text-sm sm:text-xl text-orange-700 font-black mt-5 sm:mt-10">1) https://www.strava.com/activities/12345678</div>
                                    <p class="mt-2">This is the link that you copy from the browser address bar (Chrome,Firefox,Edge, etc.), regardless of whether you are on a desktop/laptop or mobile/tablet and the page that has the run you want to upload to the VirtualRun results <br>
The number after the last slash "123456789" will of course be replaced by your activity number in real life. </p>
                                    <div class="mt-2"><img class="img-fluid border" src="/strava-url-browser-example.png" /></div>
                                    <hr class="mt-10">
                                    <div class="text-orange-700 text-sm sm:text-xl font-black mt-10">2) https://strava.app.link/abc123</div>
                                    <p class="mt-2">Unlike the first way, where the link is copied from the browser's address bar, here it is copied from the mobile application via sharing to the clipboard, which then creates a link in the form shown above.<br>
Due to the fact that the development of applications not only from Strava is fast, the method of sharing to clipboard may vary depending on the version of the application, operating system, etc.<br> Here is a 2-step example for Android, for iOS it may differ in some details.<br>
Of course, also here the characters after the last slash "abc123" will be replaced by your activity characters in real life.</p>
                                    </p>
                                    <div class="mt-2"><img class="img-fluid border" src="/strava-url-app-example.png" /></div>
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




