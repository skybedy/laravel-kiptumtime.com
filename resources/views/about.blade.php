@inject('carbon', 'Carbon\Carbon')
@section('title', 'Homepage')
<x-app-layout>
    <div class="grow py-10">
        <div class="lg:border border-white rounded-md lg:max-w-[60rem] xl:max-w-6xl 2xl:max-w-7xl px-3 sm:px-10 lg:py-5 mx-auto">
            <x-h2 style="style-1">About authors</x-h2>
            <x-p style="style-1">
                Behind this project is the company <a target="_blank" class="underline" href="https://timechip.cz">timechip.cz</a> from the Czech Republic dealing with chip sport timing races from running, through cycling to motocross and software development.<br>
                Back in the Covid days we started developing a platform for virtual races where runners could race on different courses and compare their results. This platform just on <a target="_blank" class="underline" href="https://virtual-run.cz">virtual-run.cz</a> and was just about to be completed (it's snot fully functional at the moment) whenKelvin Kiptum passed away.<br>
                After establishing the <a class="underline" target="_blank" href="https://www.strava.com/clubs/1217562">Kelvin Kiptum Fan Club on STRAVA</a>, we decided to use the core of the virtual-run.cz platform, use it for the foundation of the kiptumtime.com platform and dedicate it to the running community worldwide for free.<br>
                    As already said, these are not races in the traditional format, where they run a specific distance, but it is a competition with a similar principle to a time trial, where the result is the distance that the competitors run in one hour. The difference between the clock and kiptumtime.com is that there is not a time unit of 1 hour, but a time of 2:00:35, which is the value of Kelvin's world record from Chicago marathon 2023. <br>
                    The platform is available for free at the moment, on the other hand there are no prizes for ranking in the race.
                    If it turns out that the project is viable, but that it would be appropriate to give some prizes for placing, we cannot rule out that in the future registration to the race would be conditional on some starting fee.
            </x-p>
            <x-h2 style="style-1">Contacts</x-h2>
            <ul class="border-l border-r border-white px-2 sm:px-4 md:px-5 pt-2 list-disc list-inside  text-white text-base sm:text-lg md:text-xl lg:text-2xl">
                <li>EMAIL: <a target="_blank" class="underline" href="mailto:virtual.run.cz@gmail.com">virtual.run.cz@gmail.com</a></li>
                <li>STRAVA: <a target="_blank" class="underline" href="https://strava.com/athletes/skybedy">strava.com/athletes/skybedy </a></li>
                <li>FB: <a target="_blank" class="underline" href="https://facebook.com/skybedy">facebook.com/skybedy</a></li>
                <li>SIGNAL: <a target="_blank" class="underline" href="https://signal.me/#eu/nZ0CWaI2PvrJYVRqQ0dkq85gvXjmKnBZ54RqGe2MIjweEPUtbMFJ2LFFLLha4v+j">signal.me</a></li>
            </ul>
        </div>
    </div>
</x-app-layout>
