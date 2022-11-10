<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <center>
        <table border="1" cellpadding="7" cellspacing="0">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Jumlah Data</th>
                </tr>
            </thead>    
            <tbody>
                <?php foreach($data as $d){ ?>
                    <tr>
                        <td><?= $d->kategori ?></td>
                        <td><?= $d->jumlah_data ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </center>
</body>
</html>