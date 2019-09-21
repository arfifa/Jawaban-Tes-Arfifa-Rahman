<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Arkademy Bootcamp</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logoArkademy.png" width="100" height="30" class="d-inline-block align-top" alt="">
            Arkademy Bootcamp
        </a>
    </nav>

    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-hover" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Work</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bintang</td>
                        <td>Backend Dev</td>
                        <td><?= "Rp " . number_format(12000000) ?></td>
                    </tr> 
                    <tr>
                        <td>Tasya</td>
                        <td>Backend Dev</td>
                        <td><?= "Rp " . number_format(12000000) ?></td>
                    </tr> 
                    <tr>
                        <td>Poetra</td>
                        <td>Backend Dev</td>
                        <td><?= "Rp " . number_format(12000000) ?></td>
                    </tr>
                    <tr>
                        <td>Joko</td>
                        <td>Frontend Dev</td>
                        <td><?= "Rp " . number_format(10000000) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    

    <!-- link javascript -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>