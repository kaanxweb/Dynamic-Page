<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Detail Create</title>
</head>

<body>


    @if (session('success'))
        <h1>Operation Success!</h1>
        <p>{{ session('success') }}</p>
    @elseif(session('error'))
        <h1>Operation Failed!</h1>
        <p>{{ session('error') }}</p>
    @endif


    <form action="{{ route('pageDetail.store') }}" method="POST">
        @csrf

        <label for="page_id">Page</label>
        <select name="page_id" id="page_id">
            @foreach ($pages as $page)
                <option value="{{ $page->id }}">{{ $page->access_name }}</option>
            @endforeach
        </select>
        <br />
        <br />
        <label for="title">Page Name</label>
        <input type="text" name="page_name" id="title">
        <br />
        <br />
        <label for="page">Page Title</label>
        <input type="text" name="page_title" id="page">
        <br />
        <br />
        <label for="lang">Page Language</label>
        <select name="lang" id="lang">
            @foreach ($langs as $lang)
                <option value="{{ $lang->code }}">{{ $lang->name }}</option>
            @endforeach
        </select>
        <br />
        <br />
        <input type="submit" value="Submit"/>
    </form>


</body>

</html>
