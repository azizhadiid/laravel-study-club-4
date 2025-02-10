<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1</title>
</head>

<body>
    <h1>Hello Study Club 4 </h1>

    <ul>
        @foreach ($data as $item)
        <li>{{{ $item }}}</li>
        @endforeach
    </ul>
</body>

</html>
