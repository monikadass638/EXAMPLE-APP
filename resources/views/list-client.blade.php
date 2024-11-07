<div>
    <h1>Client List</h1>
    <table border="2">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Created_at</td>
            <td>operations</td>
        </tr>
        @foreach ($data as $client)
        <tr>
            <td>{{ $client->name}}</td>
            <td>{{ $client->email}}</td>
            <td>{{ $client->phone}}</td>
            <td>{{ $client->created_at}}</td>
            <td><a href="{{'/delete/'.$client->id}}">Delete</a></td>
        </tr>
            
        @endforeach
    </table>
</div>
