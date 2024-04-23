@foreach ($users as $user)
    <h1>{{$user['name']}}</h1>
    <p>{{$user['age']}}</p>
    @if ($user['age'] < 18)
        <p>User can't drive</p>
    @endif
    <hr>
@endforeach

@copyright {{date('Y')}}
