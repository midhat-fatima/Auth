<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page') }}
        </h2>
    </x-slot>

    <ul>
        <li>Id : {{$item->id}}<li>
        <li>Title : {{$item->title}}<li>
        <li>Content : {{$item->content}}<li>    <br><hr><br>
    </ul>

</x-app-layout>