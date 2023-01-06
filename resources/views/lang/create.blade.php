<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Language Create</title>
</head>

<body>


    @if (session('success'))
        <h1>Operation Success!</h1>
        <p>{{ session('success') }}</p>
    @elseif(session('error'))
        <h1>Operation Failed!</h1>
        <p>{{ session('error') }}</p>
    @endif


    <form action="{{ route('lang.store') }}" method="POST">
        @csrf

        <br />
        <br />
        <label for="name">Language Name</label>
        <input type="text" name="name" id="name">
        <br />
        <br />
        <label for="code">Language Code</label>
        <input type="text" name="code" id="code">
        <br />
        <br />
        <input type="submit" value="Submit">
    </form>


</body>

</html>
