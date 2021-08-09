<x-app-layout>
    <x-slot name="header">
        Anasayfa
    </x-slot>
    <div class="bg-white rounded overflow-hidden shadow-lg sm:rounded-lg mb-4">
        <form class="p-6" method="post" action="{{route('article.store')}}" id="articleForm"
              enctype="multipart/form-data">
            @csrf
            <label for="fname">Article title:</label><br>
            <input type="text" id="fname"
                   class="rounded-lg mb-4 w-7/12 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent"
                   name="title" placeholder="e.g Laravel Routing" value="{{old('title')}}"><br>
            <label for="lname">Description:</label><br>
            <textarea name="desc" placeholder="e.g Routing types"
                      class="rounded-lg w-7/12 h-48 mb-4 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent"
                      value="{{old('desc')}}"></textarea><br>

            <input autocomplete="on" placeholder="Choose a category" list="suggestions"
                   class="h-10 px-3 mb-6 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
            <datalist id="suggestions">
                <option>Red</option>
                <option>Blue</option>
                <option>Yellow</option>
                <option>Black</option>
                <option>Orange</option>
                <option>Purple</option>
                <option>Gray</option>
                <option>White</option>
            </datalist>
            </input><br>

            <div class="grid grid-flow-col auto-cols-max gap-2 w-7/12 bg-red-700 ">
                <div>
                    <label for="fname">Article title:</label><br>
                    <input type="text" id="fname"
                           class="rounded-lg mb-4 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent"
                           name="title" placeholder="e.g Laravel" value="{{old('title')}}">
                </div>

                <div class="place-self-center bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#photography</div>

            </div>


            <div class="flex w-full items-center bg-grey-lighter pb-6">
                <label
                    class="flex flex-row items-center px-1 py-2 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border focus:border-gray-700 cursor-pointer hover:bg-gray-700 hover:text-white">
                    <div class="ml-2">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                        </svg>
                    </div>
                    <span class="text-base leading-normal mx-2">Select article photo</span>
                    <input type='file' class="hidden"/>
                </label>
            </div>


            <input type="submit" class="px-8 py-2 rounded-lg bg-gray-700 text-white" value="Submit">
        </form>
    </div>

</x-app-layout>
