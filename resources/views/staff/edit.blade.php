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
    <div class="container mt-5">
        <div class="row">
            <div class="col-10">

                <h1>Edit Staff {{ $staff->name }}</h1>
            </div>
            <div class="col-2">
                <a href="/staffs" class="btn btn-outline-primary float-end">Staff List</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="/staffs/{{ $staff->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" value="{{ $staff->name }}" type="text" name="name"
                            placeholder="Staff's Name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" value="{{ $staff->email }}" type="text" name="email"
                            placeholder="Staff's Email">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" cols="30" rows="10">{{ $staff->address }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" value="{{ $staff->phone }}" type="text" name="phone"
                            placeholder="Staff's Phone Number">
                    </div>

                    <button class="btn btn-success float-end" vtype="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
