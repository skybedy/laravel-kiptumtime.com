@inject('carbon', 'Carbon\Carbon')


<x-app-layout>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 }lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="overflow-auto">
                        <table id="result_table" class="hidden md:table table-auto border-collapse w-full mt-5">
                            <tr class="text-center">
                                <td></td>
                                <td class="bg-gray-600 text-white border border-gray-900 font-black" colspan="2">Mile</td>
                                <td class="bg-gray-600 text-white border border-gray-900 font-black" colspan="2">Km</td>
                            </tr>

                        @foreach ($results as $result)
                            @if (count($result->results) > 0)
                                <tr class="text-center">
                                    <th class="border-none">Date</th>
                                    <th class="border-none px-2">Pace</th>
                                    <th class="border-none px-2">Distance</th>
                                    <th class="border-none px-2">Pace</th>
                                    <th class="border-none px-2">Distance</th>
                                </tr>

                                @foreach ($result->results as $result)
                                    <tr class="text-center odd:bg-gray-100 even:bg-white">
                                        <td class="border">{{ $result['finish_time_date'] }}</td>
                                        <td class="border">{{ $result['pace_mile'] }}</td>
                                        <td class="border">{{ $result['finish_distance_mile'] }}</td>
                                        <td class="border">{{ $result['pace_km'] }}</td>
                                        <td class="border">{{ $result['finish_distance_km'] }}</td>
                                        <td class="border py-1">
                                            <a class="text-white bg-red-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm px-3 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ route('result.delete',['resultId' => $result['id']]) }}">Delete result</a>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif


                        @endforeach

                        </table>




            </div>
        </div>
    </div>
</x-app-layout>




