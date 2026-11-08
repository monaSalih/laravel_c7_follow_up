<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>
    <!-- Hello,{{ $name }}! -->
     @foreach ($fruits as $fruit)
    <p>This is fruit: {{ $fruit}}</p>
@endforeach
@foreach ($fruits as $fruit)
    <p>This is fruit: {{ $fruit}}</p>
@endforeach
   </p>
</body>
</html>