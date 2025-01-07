<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toevoegen Student</title>
</head>
<style>

</style>
<body>
    <h1>Studenten Toevoegen</h1>
   <form action="{{route('student.toevoegen')}}" method="">
    <input type="hidden" id="id" name="id" required><br>

   <label for="Name">Naam:</label>
   <input type="text" id="name" name="name" placeholder="Naam Student"><br>

   <label for="lastname">Achternaam:</label>
   <input type="text" id="lastname" name="lastname" placeholder="Achternaam met Tussenvoegsel"><br>

   <label for="birthdate">Geboortedatum:</label>
   <input type="text" id="birthdate" name="birthdate" placeholder="Geboortedatum"><br>

        <input type="submit" value="Opslaan">
   </form>
</body>
</html>
