<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>

<body>
    <h3>Studenten aanwezigheid</h3>

    <div>
        <table border="1">
            <tr>
                <th>Student</th>
                <th>Aanwezig</th>

            </tr>
            @foreach ($aanwezigheids as $aanwezigheid)
                <tr>
                    <td>{{ $aanwezigheid->student->naam }}</td>
                    <td>{{ $aanwezigheid->aanwezig }}</td>
                    {{-- <td>
                        <a href="{{ route('aanwezigheid.edit', $aanwezigheid->id) }}">Bewerken</a>
                    </td> --}}
                </tr>
            @endforeach

        </table>
    </div>
</body>

</html>
