<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Register | Belajar Membuat Web Laravel Statis</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
        @csrf
        <label>First name:</label><br>
        <input type="text" name="nama_dpn"><br><br>

        <label>Last name:</label><br>
        <input type="text" name="nama_bkg"><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="man">Man<br>
        <input type="radio" name="gender" value="woman">Woman<br>
        <input type="radio" name="gender" value="other">Other<br><br>

        <label>Nationality:</label><br>
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Thailand">Thailand</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox">Bahasa Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Arabic<br>
        <input type="checkbox">Japanese<br>
        <br>

        <label>Bio:</label><br>
        <textarea name="short_bio" id="" cols="30" rows="5"></textarea><br><br>
        <input type="submit" value="Sign Up!">
    </form>
</body>

</html>
