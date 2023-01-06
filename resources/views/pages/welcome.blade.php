<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<style>
    body {
        text-align: center
    }

    table {
        margin: 0 auto;
    }

    td {
        padding: 10px;
        text-align: center
    }

    th:nth-child(1+2) {
        border-left: 1px solid black;
    }

    table,
    tr,
    td {
        border: 1px solid black;
    }
</style>


<body class="antialiased">

    <h1>{{ __('messages.home') }}</h1>

    <h2>Active lang: {{ App::getLocale() }}</h2>

    <h2>Change lang:</h2>
    <form action="{{route('lang.change')}}" method="GET">
        <select name="lang" id="lang">
            <option value="">Select Lang</option>
            @foreach ($langs as $lang)
                <option value="{{ $lang->code }}">{{ $lang->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Change lang" />
    </form>
    <br/>
    <hr />
    <h2>Page Data List</h2>
    <table>
        <thead>
            <tr>
                <th>Access Name</th>
                <th>Page Name</th>
                <th>Page Title</th>
                <th>Page Slug</th>
                <th>Page Language</th>
            </tr>
        </thead>

        @foreach ($pages as $page)
            @foreach ($page->pageDetails as $pageDetail)
                <tr>
                    <td>{{ $page->access_name }}</td>
                    <td>{{ $pageDetail->name }}</td>
                    <td>{{ $pageDetail->title }}</td>
                    <td>{{ $pageDetail->slug }}</td>
                    <td>{{ $pageDetail->lang }}</td>
                </tr>
            @endforeach
        @endforeach

        <tbody>
            <tr>
                <th>Access Name</th>
                <th>Page Name</th>
                <th>Page Title</th>
                <th>Page Slug</th>
                <th>Page Language</th>
            </tr>
        </tbody>

    </table>
    <br/>
    <hr />
    <a href="{{route('page.create', app()->getLocale())}}" style="font-size: 2rem; text-decoration:none; color:blue">Create Page</a>
    <br/>
    <a href="#" style="color:black; text-decoration:none;">(What's Create Page?)</a>
    <br/>
    <hr />
    <a href="{{route('pageDetail.create', app()->getLocale())}}" style="font-size: 2rem; text-decoration:none; color:blue">Create Page Detail</a>
    <br/>   
    <a href="#" style="color:black; text-decoration:none;">(What's Create Page Detail?)</a>
    <hr />


</body>

</html>
