<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Mail</title>
</head>
<body>
    @if($status=='selected')
    {{-- <h4>{{$name}}</h4>
    <h1>{{$email}}</h1>
    <p>{{$status}}</p> --}}
    <h4>We are happy to inform that your resume was outstanding and we have selected you for the internship</h4>
    @else
    {{-- <h1>{{$name}}</h1>
    <h1>{{$email}}</h1>
    <p>{{$status}}</p> --}}
    <h4>we are sorry that you are not selected for the internship.Stay connected to us to know various internship opportunities</h4>
    @endif
   
</body>
</html>