<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="w-full max-w-xs">
                        <form class="p-6 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('categories.update', $category)}}">
                            @method('PUT')
                            @csrf
                            <!-- this generate the token for this form prevent form submission from else where, error 419 occur if csrf never stated -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    Username
                                </label>
                                <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="name" type="text" value="{{ $category -> name }}">
                            </div>
                            <div class="mb-6">

                            </div>
                            <div class="flex items-center justify-between">
                                <div class="mb-4">
                                <button type="submit" class="border rounded bg-blue hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                   Update
                                </button>




                                </div>

                                <!-- forms from tailwind-->






                                </div>
                            </div>
                        </form>
                        <p class="text-center text-gray-500 text-xs">
                            &copy;2020 Acme Corp. All rights reserved.
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
