<x-app-layout>
    <x-slot name="header">
        Add Article
    </x-slot>

    <script>
        var tagID = 0;
        var tags = [];
        function addTag() {
            var tagText = document.getElementById('tagText');
            var tagName = "#" +document.getElementById('tagText').value;
            if (tagName.length > 1 && tagID < 5 && tags.indexOf(tagName) === -1) {
                document.getElementById('tagsDiv').innerHTML += "<span class='cursor-pointer inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 my-1 mr-1' id=" + tagID + " onclick='removeTag(" + tagID + ")'>" +tagName + "</span>"
                tagText.style.borderColor = 'rgba(55,65,81)';
                tags.push(tagName);
                tagID++;
            }else if(tags.indexOf(tagName) !== -1){
                tagText.style.borderColor = 'red';
                tagText.value = "";
                tagText.placeholder = "You can't add same tag";
            }else if (tagID > 4){
                tagText.style.borderColor = 'red';
                tagText.value = "";
                tagText.placeholder = "You can only add 5 tags";
            }else if (tagName.length < 2){
                tagText.style.borderColor = 'red';
                tagText.placeholder = "Enter valid tag name";

            }
        }

        function removeTag(id) {
            var span = document.getElementById(id);
            document.getElementById('tagsDiv').removeChild(span);
            var index = tags.indexOf(span.innerHTML);
            if (index > -1) {
                tags.splice(index, 1);
            }
            tagID--;
            console.log(tagID);
        }

        function passTags(){
            document.getElementById("tagsData").value = JSON.stringify(tags);

        }
    </script>

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
            <div>
                <label for="fname">Select category:</label>
                <input autocomplete="on" placeholder="e.g Technology" list="suggestions"
                       class="block h-10 px-3 mb-6 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
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
                </input>
            </div>
            <div class="block w-7/12">
                <div class="mr-2">
                    <label>Add tag:</label>
                    <div class="">
                        <input type="text" id="tagText"
                               class="inline-block rounded-lg mb-4 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent"
                               name="title" placeholder="e.g Laravel" value="{{old('title')}}">

                        <input onclick="addTag()" type="button" class="px-4 py-2 rounded-lg bg-gray-700 text-white"
                               value="+">
                    </div>
                </div>
                <div class="mb-4" id="tagsDiv">
                </div>
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

            <input type="text" name="tags" id="tagsData" class="hidden" >


            <input type="submit" onclick="passTags()" class="px-8 py-2 rounded-lg bg-gray-700 text-white" value="Submit">
        </form>
    </div>

</x-app-layout>
