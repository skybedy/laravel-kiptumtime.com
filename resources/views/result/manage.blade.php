@inject('carbon', 'Carbon\Carbon')
@section('title', 'Results management')
<x-app-layout>

    <div class="grow py-10">
        <div class="lg:border border-white rounded-md lg:max-w-[60rem] xl:max-w-6xl 2xl:max-w-7xl px-3 sm:px-10 lg:py-5 mx-auto">


            @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                        <table id="result_table" class="table table-auto border border-white border-collapse  w-full mt-5 text-[0.6rem] md:text-base text-white">

                            @foreach ($results as $result)
                                @if (count($result->results) > 0)
                                    <tr class="text-center bg-gray-900">
                                        <th class="py-2">Date</th>
                                        <th class="px-2">Pace/Mi</th>
                                        <th class="px-2">Dist/Mi</th>
                                        <th class="px-2">Pace/Km</th>
                                        <th class="px-2">Dist/km</th>
                                        <th class="px-2"></th>
                                    </tr>

                                    @foreach ($result->results as $result)
                                        <tr class="text-center odd:bg-red-800 even:bg-red-700 border border-white">
                                            <td class="py-2">{{ $result['finish_time_date'] }}</td>
                                            <td>{{ $result['pace_mile'] }}</td>
                                            <td>{{ $result['finish_distance_mile'] }}</td>
                                            <td>{{ $result['pace_km'] }}</td>
                                            <td>{{ $result['finish_distance_km'] }}</td>
                                            <td class="py-1">
                                                <a class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:ring-blue-300 font-medium rounded  text-[0.6rem] md:text-sm px-3 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ route('result.delete',['resultId' => $result['id']]) }}">Delete result</a>
                                            </td>
                                        </tr>

                                    @endforeach

                                @else
                                    <tr class="text-center odd:bg-red-800 even:bg-red-700 border border-white">
                                        <td class="py-2">No result yet</td>
                                    </tr>
                                @endif

                            @endforeach

                        </table>




        </div>
    </div>
</x-app-layout>




