<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistem Staff</title>
</head>

<body>
    <div class="container">
        <h1>Senarai Staff</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($staffs as $key => $staff)
                            <tr>
                                <td>{{ $staffs->firstItem() + $key }}</td>
                                <td>{{ $staff->name }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/staffs/{{ $staff->id }}/edit" class="btn mx-2 btn-warning">Edit</a>
                                        <a href="/staffs/{{ $staff->id }}" class="btn mx-2 btn-info">View</a>
                                        <form action="/staffs/{{ $staff->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn mx-2 btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No Staff</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $staffs->links() }}
            </div>
        </div>
    </div>
</body>

</html>
