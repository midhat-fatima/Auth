<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    {!! Form::open(array('url' => route('categories.update', ['category' => $categories->id]), 'method' => 'put')) !!}	

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif	

        {!! Form::label('name', 'categories :') !!}	   <br>   <br>
		{!! Form::text('name', $categories->name) !!}   <br>   <br>
        {!! Form::submit('Edit') !!}

	{!! Form::close() !!}

</x-app-layout>