<x-app-layout>
    <x-slot name="header">
        Anasayfa
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="p-6">
                    @csrf
                    <label for="fname">Article name:</label><br>
                    <input type="text" id="fname" class="rounded-lg mb-4 w-7/12" name="fname" placeholder="e.g Laravel Routing"><br>
                    <label for="lname">Description:</label><br>
                    <textarea placeholder="e.g Routing types" class="rounded-lg w-7/12 h-48 mb-4"></textarea><br>
                    <input type="submit" class="px-8 py-2 rounded-xl bg-gray-700 text-white" value="Submit" >
                </form>
            </div>
        </div>
    </div>


</x-app-layout>
