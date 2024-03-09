@if ($errors->any() || session('error'))
    <div class="bg-red-200 text-red-600 font-black py-2 text-center border-y border-red-400 mt-2 shadow-lg">
        <ul>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            @else
                <li>{!! session('error') !!}</li>
            @endif
        </ul>
    </div>
@endif