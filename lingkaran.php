<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lingkaran</title>
</head>
<body>

<a href="index.php">Home</a>
    <h1>lingkaran</h1>
    <form action="lingkarancopy.php" method="post">
        <table>
            <tr>
                <td> Jari-jari</td>
                <td>:</td>
                <td> <input type="number" name="jari" required><br></td>
            </tr>

             <tr>
                <td>pilih</td>
                <td>:</td>
                <td><input type="radio" name="pilih" value="luas" required>
                <label for="html">Luas</label> <br>
                <input type="radio" name="pilih" value="keliling" required>
                <label for="html">keliling</label> <br>
                <input type="radio" name="pilih" value="semua" required>
                <label for="html">semua</label> <br>
                </td>
                <td>

                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>  
    </form>
</body>
</html>