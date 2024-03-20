@if (session('status'))
      <div class="bg-teal-100 text-teal-600 font-black py-2 text-center border-y border-teal-400 mt-2 shadow-lg">
            {{ session('status') }}
      </div>
@endif