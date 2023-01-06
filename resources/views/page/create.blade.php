<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Create</title>
</head>

<body>


    @if (session('success'))
        <h1>Operation Success!</h1>
        <p>{{ session('success') }}</p>
    @elseif(session('error'))
        <h1>Operation Failed!</h1>
        <p>{{ session('error') }}</p>
    @endif


    <form action="{{ route('page.store') }}" method="POST">
        @csrf
        <label for="access_name">Page Access Name</label>
        <input type="text" name="access_name" id="access_name">
        <br />
        <br />
        <input type="submit" value="Submit">
    </form>


</body>

</html>
