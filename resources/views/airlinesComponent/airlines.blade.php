<x-layout>
    <div class="p-20 overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Airline
                </th>
                <th scope="col" class="py-3 px-6">
                    Description
                </th>
                <th scope="col" class="py-3 px-6">
                    Total Flights
                </th>
                <th scope="col" class="py-3 px-6">

                </th>
                <th scope="col" class="py-3 px-6">

                </th>
            </tr>
            </thead>
            @foreach($airlines as $airline)
                <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        {{$airline->id}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        {{$airline->name}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        {{$airline->description}}
                    </td>
                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                        --
                    </td>
                    <td class="py-4 px-6">
                        <a href="airlines/{{$airline->id}}/edit_airline">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        </a>
                    </td>
                    <td class="py-4 px-6">

                        <form action="/airlines/{{$airline->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="dltBtn" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </td>
                </tbody>
            @endforeach
        </table>
        <a href="/airlines/add_airline">
            <button class="mt-6 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Add Airline
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

    {{$airlines->links()}}


</x-layout>
