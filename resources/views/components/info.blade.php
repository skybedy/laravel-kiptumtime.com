@if (session('info'))
  <div class="bg-teal-100 text-teal-600 font-black py-2 text-center border-y border-teal-400 mt-2 shadow-lg">
        @if(session('info') == 'no_strava_authorization')
            If you want to upload results, you need to enable Strava, which you can do <a class="underline" href="{{ route('authorize_strava') }}">HERE</a>
        @else
            {{ session('info') }}
        @endif
  
    </div>
@endif