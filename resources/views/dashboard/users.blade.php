<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Registration date</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('d.m.Y') }}</td>
            <td>
                <a href="#">Remove</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="/create" role="button">+ Create user</a>
