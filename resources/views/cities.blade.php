<x-layout>
<div class="p-20 overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">
                ID
            </th>
            <th scope="col" class="py-3 px-6">
                City
            </th>
            <th scope="col" class="py-3 px-6">
                Outgoing Flights
            </th>
            <th scope="col" class="py-3 px-6">
                Incoming Flights
            </th>
            <th scope="col" class="py-3 px-6">

            </th>
            <th scope="col" class="py-3 px-6">

            </th>
        </tr>
        </thead>
        @foreach($cities as $city)
        <tbody>
        <tr id = "{{$city->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                {{$city->id}}
            </td>
            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                {{$city->name}}
            </td>
            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                {{$city->outgoing_flights()}}
            </td>
            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                {{$city->incoming_flights()}}
            </td>
            <td class="py-4 px-6">
                <a href="cities/{{$city->id}}/edit_city">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                </a>
            </td>
            <td class="py-4 px-6">

                <form action="/cities/{{$city->id}}" city_id="{{$city->id}}" id="deleteForm">
                    @csrf
                    <button type="submit" id="dltBtn" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </td>
        </tbody>
        @endforeach
    </table>

    {{ $cities->links() }}


    <a href="cities/add_city">
        <button  class="mt-6 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            Add City
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
        document.querySelectorAll('FORM').forEach(function(event){
            event.addEventListener('submit',function(event){
                event.preventDefault();
                var url = event.target.getAttribute("action");
                var id = event.target.getAttribute("city_id");

                fetch(url ,{
                    method: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                    .then(() => {
                        document.getElementById(id).remove();
                    })
            })
        })






    </script>

</x-layout>
