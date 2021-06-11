<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    {!! Form::open(array('url' => route('user.update', ['user' => $user->id]), 'method' => 'put')) !!}	

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif	

			{!! Form::text('name', $user->name) !!}
			{!! Form::text('email', $user->email) !!}
			{!! Form::password('password') !!}
			{!! Form::submit('Edit') !!}
	{!! Form::close() !!}

</x-app-layout>