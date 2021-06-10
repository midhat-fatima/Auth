<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    {!! Form::open(array('url' => route('user.update', ['user' => $user->id]), 'method' => 'put')) !!}		
			{!! Form::text('name',  $user->name) !!}
			{!! Form::text('email',  $user->email) !!}
			{!! Form::text('password',  $user->password) !!}
			{!! Form::submit('Edit') !!}
	{!! Form::close() !!}

</x-app-layout>