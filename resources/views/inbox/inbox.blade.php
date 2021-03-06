<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inbox') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                <a style="background-color:green; color:white; padding:10px; text-decoration:none; border-radius:10px; position:absolute; top:150px; right:430px;"href="{{route('inbox.create')}} ">Add New inbox</a>
                
                @if(count($message))
                    @foreach ($message as $list)
                        <ul>
                            <li>Id : {{$list->id}}<li>
                            <li>Send To : {{$list->sendTo}}<li>
                            <li>Sender : {{$list->sender}}<li>
                            <li>Subject : {{$list->subject}}<li>
                            <li>Message : {{$list->message}}<li>
                                {!! Form::open(array('url'=> route('inbox.destroy', ['inbox'=> $list->id]), 'method' => 'delete')) !!}
                                    {!! Form::submit('Delete',array('style' => 'padding:5px; background-color:red; color:white; border-radius:10px;')) !!}
                                    {!! Form::close() !!}</li>
                            <br><hr><br>
                        </ul>
                    @endforeach
                    @else
                    <h5> Data Not Found</h5>
                @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>