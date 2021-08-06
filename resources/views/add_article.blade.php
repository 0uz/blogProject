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
                    <input type="text" id="fname" style="width: 50%" class="rounded-lg mb-4" name="fname" placeholder="e.g Laravel Routing"><br>
                    <label for="lname">Description:</label><br>
                    <input type="text" class="w-3/4 rounded-lg" id="lname" name="lname" placeholder="e.g Routing types"><br><br>
                    <input type="submit" class="m-5" value="Submit" >
                </form>
            </div>
        </div>
    </div>


</x-app-layout>
