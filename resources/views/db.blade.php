<div>
    <table border="02">
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>Password</td>
            <td>Created_at</td>
        </tr>
        @foreach ( $data as  $da)
        <tr>
            <td>{{ $da ->name}}</td>
            <td>{{ $da ->email}}</td>
            <td>{{ $da ->password}}</td>
            <td>{{$da ->created_at}}</td>
        </tr>
        
        @endforeach
    </table>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
