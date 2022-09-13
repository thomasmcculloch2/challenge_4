<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Add Flight</h1>
            <form method="POST" action="/flights/add_flight" class="mt-10">
                @csrf
{{--                <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="w-full  mb-6 text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">--}}
{{--                    Airline--}}
{{--                    <svg class="ml-2 w-4 h-4"  aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>--}}
{{--                <!-- Dropdown menu -->--}}
{{--                <div id="dropdown" class="overflow-auto max-h-60 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">--}}
{{--                    @foreach ($airlines as $airline)--}}
{{--                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">--}}
{{--                        <li>--}}
{{--                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$airline->name}}</a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}



{{--                <button id="dropdown1Default" data-dropdown-toggle="dropdown1" class="w-full  mb-6 text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">--}}
{{--                    Origin City--}}
{{--                    <svg class="ml-2 w-4 h-4"  aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>--}}
{{--                <!-- Dropdown menu -->--}}
{{--                <div id="dropdown1" class="overflow-auto max-h-60 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">--}}
{{--                    @foreach ($cities as $city)--}}
{{--                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown1Default">--}}
{{--                            <li>--}}
{{--                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$city->name}}</a>--}}
{{--                            </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                </div>--}}

{{--                <button id="dropdown2Default" data-dropdown-toggle="dropdown2" class="w-full  mb-6 text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">--}}
{{--                    Destination City--}}
{{--                    <svg class="ml-2 w-4 h-4"  aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>--}}
{{--                <!-- Dropdown menu -->--}}
{{--                <div id="dropdown2" class="overflow-auto max-h-60 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">--}}
{{--                    @foreach ($cities as $city)--}}
{{--                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown2Default">--}}
{{--                            <li>--}}
{{--                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$city->name}}</a>--}}
{{--                            </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                </div>--}}



{{--                <div date-rangepicker="" class="flex items-center">--}}
{{--                    <div class="relative">--}}
{{--                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">--}}
{{--                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>--}}
{{--                        </div>--}}
{{--                        <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date start">--}}
{{--                    </div>--}}
{{--                    <span class="mx-4 text-gray-500">to</span>--}}
{{--                    <div class="relative">--}}
{{--                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">--}}
{{--                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>--}}
{{--                        </div>--}}
{{--                        <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date end">--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="flex justify-center mt-12 mb-6">--}}
{{--                    <button type="submit" class= "bg-blue-400 w-full w-52 text-white rounded py-2 px-4 hover:bg-blue-500">--}}
{{--                        Submit--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}

            <div class="panel-body ">
                <div class="form-group mb-6" >
                    <select name="airline" id="airline" class="js-select-example" style="width: 100%">
                        <option value = ""> Select Airline</option>
                        @foreach ($airlines as $airline)
                                <option value="{{$airline->id}}">{{$airline->id}}-{{$airline->name}}</option>
                        @endforeach
                    </select>
                    @error('airline')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                    <div class="form-group mb-6">
                        <select name="origin_city" id="city" class="js-select-example-2" style="width: 100%">
                            <option value = ""> Select origin city</option>
                        </select>
                        @error('origin_city')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="form-group mb-6">
                        <select name="destination_city" id="city2" class="js-select-example-3" style="width: 100%">
                            <option value = ""> Select destination city</option>
                        </select>
                        @error('destination_city')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
            </div>

                <div date-rangepicker="" class="flex items-center">
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date start">
                    </div>
                    @error('start')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <span class="mx-4 text-gray-500">to</span>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date end">
                    </div>
                    @error('end')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex justify-center mt-12 mb-6">
                    <button type="submit" class= "bg-blue-400 w-full w-52 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>


        </main>
    </section>

    <script>
        $(document).ready(function() {
            $('.js-select-example').select2();
            $('.js-select-example-2').select2();
            $('.js-select-example-3').select2();

            $('#airline').on('change',function(event){
                var airlineID=$(this).val().charAt(0);
                var url = "add_origin/"+airlineID;
                var url2 = "add_destination/"+airlineID;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                if (airlineID) {
                    $.ajax({
                       type: 'POST',
                        url: url,
                        success: function(html) {
                            $('#city').html(html);
                        }
                    });
                }
                $.ajax({
                    type: 'POST',
                    url: url2,
                    success: function(html) {
                        $('#city2').html(html);
                    }
                });

            });

            // $('#origin_city').on('change',function (event){
            //     var cityID=$(this).val().charAt(0);
            //     $('#city2').hide();
            // });
        });
    </script>

</x-layout>
