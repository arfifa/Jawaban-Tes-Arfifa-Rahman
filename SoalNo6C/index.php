<?php 
//menyambungkan kefunctions
include 'functions.php';

//sql untuk read seluruh data tb_user
$karyawan = query(" SELECT `name`.`id` AS id, `name`.`id_work` AS id_work, `name`.`id_salary` AS id_salary, `name`.`name` AS name, `work`.`name` AS work, `salary` 
                FROM `name` JOIN `work` ON `name`.`id_work` = `work`.`id`
                JOIN `salary`ON `name`.`id_salary` = `salary`.`id`; ");

$work = query("SELECT * FROM work");
$salary = query("SELECT * FROM salary");

if (isset($_POST["addData"])) {
    $cek = $_POST["id"];
    if ($cek == "kosong") {
        if (tambahKaryawan($_POST) > 0) {
            echo "
            <script>
            document.location.href = 'index.php';
            </script>
            ";
        }
    } else {
        if (editKaryawan($_POST) > 0) {
            echo "
            <script>
            document.location.href = 'index.php';
            </script>
            ";
        }
    }
}

if (isset($_GET["hapusKaryawan"])) {
    $hapusKaryawan = $_GET['hapusKaryawan'];
    $id = $_GET['id'];

    if ($hapusKaryawan == 1) {
        if (hapusKaryawan($id) > 0) {
            echo "
            <script>
            document.location.href = 'index.php';
            </script>
            ";
        }
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

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
        <div class="text-right">
            <button href="" class="btn btn-warning mb-3 tombolTambahData" data-toggle="modal" data-target="#addKaryawan">Add Data</button>
        </div>
            <table class="table table-hover" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>Name</th>
                        <th>Work</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php foreach ($karyawan as $data) : ?>
                    <tr>
                        <td><?= $data["name"] ?></td>
                        <td><?= $data["work"] ?></td>
                        <td><?= "Rp " . number_format($data["salary"]) ?></td>
                        <td><a href="index.php?hapusKaryawan=1&id=<?= $data["id"] ?>" onclick="return confirm('Hapus data?')"><i class="fas fa-trash-alt fa-2x mr-3" style="color: red"></i></a>
                        <a href="" data-toggle="modal" data-target="#addKaryawan" class="modalUbah"  data-id="<?= $data["id"] ?>" data-name="<?= $data["name"] ?>" data-work="<?= $data["work"] ?>" data-idWork="<?= $data["id_work"] ?>" data-salary="<?= $data["salary"] ?>" data-idSalary="<?= $data["id_salary"] ?>" ><i class="far fa-edit fa-2x" style="color: green"></i></a></td>
                    </tr> 
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Mulai content modal  -->
    <div class="modal fade" id="addKaryawan" tabindex="-1" role="dialog" aria-labelledby="addKaryawan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="title">ADD DATA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" value="kosong">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name..">
            </div>
            <div class="form-group">
                <select class="form-control" name="work" required>
                    <option id="work">Work...</option>
                    <?php foreach ($work as $data) : ?>
                        <option value="<?= $data["id"] ?>"><?= $data["name"] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="salary" required>
                    <option id="salary">salary...</option>
                    <?php foreach ($salary as $data) : ?>
                        <option value="<?= $data["id"] ?>"><?= $data["salary"] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <button type="submit" name="addData" class="btn btn-warning">Add Data</button>
        </div>
            </form>
        </div>
    </div>
</body>

    <!-- java script and etc -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>