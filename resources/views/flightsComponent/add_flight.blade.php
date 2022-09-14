<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Add Flight</h1>
            <form method="POST" action="/flights/add_flight" class="mt-10">
                @csrf
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
                var airlineID=$(this).val();
                var url = "origin/"+airlineID;

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

            });
            $('#city').on('change',function(event) {
                var airline_id =$('#airline').val();
                var city_id =$('#city').val();
                var url = "destination/"+airline_id+"/"+city_id;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: url,
                    success: function(html) {
                        $('#city2').html(html);
                    }
                });
            });
        });
    </script>

</x-layout>
