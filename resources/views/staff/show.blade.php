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

                <h1>Staff {{ $staff->name }}</h1>
            </div>
            <div class="col-2">
                <a href="/staffs" class="btn btn-outline-primary float-end">Staff List</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>{{ $staff->name }}</h4>
                <p><strong>{{ $staff->email }}</strong></p>
                <p>{{ $staff->phone }}</p>
                <p>{{ $staff->address }}</p>
            </div>
        </div>
    </div>
</body>

</html>
