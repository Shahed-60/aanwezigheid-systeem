<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Homepage</title>
</head>

<body>
    <h3>Studenten Aanwezigheid</h3>

    <form method="POST" action="{{ route('aanwezigheid.store') }}">
        @csrf
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Aanwezig</th>
                    <th>Afwezig</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aanwezigheids as $aanwezigheid)
                    <tr>
                        <td>{{ $aanwezigheid->name }}</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status[{{ $aanwezigheid->id }}]"
                                    id="aanwezig" />

                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status[{{ $aanwezigheid->id }}]"
                                    id="afwezig" />
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Opslaan-knop -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </div>
    </form>
</body>

</html>

</body>

</html>
