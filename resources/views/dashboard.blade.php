<x-app-layout>

    <x-slot name="header">
        Anasayfa
    </x-slot>

    @foreach($articles as $article)
        <div class="pb-4">
            <div class="max-w-full w-full lg:max-w-full shadow-lg rounded-lg">
                {{--TODO add article photo--}}
                {{--            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/img/card-left.jpg')" title="Woman holding a mug">--}}
                {{--            </div>--}}
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="text-gray-900 font-bold text-xl mb-2">{{$article->title}}</div>
                        <p class="text-gray-700 text-base">{{$article->desc}}</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="{{$article->user->profile_photo_url}}"
                             alt="{{ $article->user->name }}"/>
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none">{{$article->user->name}}</p>
                            <p class="text-gray-600">{{$article->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach


</x-app-layout>
