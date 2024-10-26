<div>
    <h1>Person List</h1>
    <table border="1">
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @foreach($data as $per)
        <tr>
            <td>{{ $per->name}}</td>
            <td>{{ $per->email}}</td>
            <td>{{ $per->city }}</td>
        </tr>
    @endforeach
    </table>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>
