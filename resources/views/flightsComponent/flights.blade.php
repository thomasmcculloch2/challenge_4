<x-layout>
    <div class="p-20 overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <h1 class="font-medium leading-tight text-3xl mt-0 mb-6 ml-4">FLIGHTS</h1>
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Airline
                </th>
                <th scope="col" class="py-3 px-6">
                    Origin City
                </th>
                <th scope="col" class="py-3 px-6">
                    Destination City
                </th>
                <th scope="col" class="py-3 px-6">
                    Takeoff date
                </th>
                <th scope="col" class="py-3 px-6">
                    Arrival date
                </th>
                <th scope="col" class="py-3 px-6">

                </th>
                <th scope="col" class="py-3 px-6">

                </th>
            </tr>
            </thead>
            @foreach($flights as $flight)
                <tbody>
                <tr id="{{$flight->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        {{$flight->id}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        {{$flight->airline->name}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        {{$flight->origin->name}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        {{$flight->destination->name}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        {{$flight->takeoff_time}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        {{$flight->arrival_time}}
                    </td>
                    <td class="py-4 px-6">
                        <a href="#">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        </a>
                    </td>
                    <td class="py-4 px-6">

                        <form class="deleteForm" air_id="{{$flight->id}}" action="/flights/{{$flight->id}}">
                            <button  type="submit"  id="dltBtn" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            @endforeach

        </table>
        {{$flights->links()}}
        <a href="/flights/add_flight">
            <button class="mt-6 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Add Flight
            </button>
        </a>
    </div>
    @if (session()->has('success'))
        <div x-data ="{show:true}"
             x-init="setTimeout(()=> show = false,4000)"
             x-show="show"
             class ="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
        >
            <p>{{session('success')}}</p>
        </div>
    @endif



    <script>

        $( ".deleteForm" ).submit(function(event) {
            event.preventDefault();
            var url = event.target.getAttribute("action");
            var id = event.target.getAttribute("air_id");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: url,
                success: function() {
                    $ (`#${id}`).remove();
                }
            });

        });
    </script>

</x-layout>
