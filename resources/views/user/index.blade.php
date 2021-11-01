<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User</title>
</head>
<body>

        <table border = "1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Dob</th>
                    <th>Phone</th>
                    <th>Experience</th>
                    <th>Resume</th>
                    <th>View</th>
                    <th>Select</th>
                    <th>Reject</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    {{-- <td>{{ $item->id }}</td> --}}
                    <td>{{ $item->uname }}</td>
                    <td>{{ $item->adr }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->dob }}</td>                           
                    <td>{{ $item->phno }}</td>
                    <td>{{ $item->exp }}</td>
                    <td>{{ $item->resume }}</td>
                    <td>
                       
                        <a href="{{url('/view',$item->id)}}">View</a></td>
                    <td>
                        {{-- @if($item->flag ==0) --}}
                        <a href="select/{{$item->id}}" class="btn btn-primary btn-sm">Select</a> 
                    </td>
                    <td>
                        <a href="reject/{{$item->id}}" class="btn btn-danger btn-sm">Reject</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>