<div>
    <h1>Hello I am test Variable Page</h1>
    <h3>{{ $name}}</h3>
    <div>{{ rand() }}</div>
</div>
<div>
@if($name == 'GuruJi')

    <h3>this is Guru Ji </h3>

@elseif($name == 'bless')

    <h3>guru ji blessing</h3>

@else

<h3>bless you</h3>

@endif
</div>

<div>
    @for($i=0 ;$i<10 ;$i++)
    {{ $i }}
    @endfor
</div>
<div>
    @foreach($users as $user)
    <h3>{{ $user }}</h3>
    @endforeach
</div>
