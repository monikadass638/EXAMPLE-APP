<div>
<h1>User List</h1>
<table border="2">
    
@foreach($name as $user)
<tr>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>{{$user->password}}</td>
<td>{{$user->created_at}}</td>
</tr>
@endforeach
    
</div>
