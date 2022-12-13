<?php

require_once 'conn.php';
require_once 'students.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>BSIT 3 | PSUB Students</title>
    <style>
        a {
            text-decoration: none;
        }
        a:hover#fb-link {
            color: #00008b;
        }
    </style>
</head>
<body>
<div class="container">
    <div>
        <div class="d-flex justify-content-center">
            <h1 class="mt-5 mb-4 text-center fw-bold">BSIT 3A</h1>
        </div>
        <div class="row">
            <div class="col-6 border rounded shadow-lg p-5">
                <table class="table table-hover table-responsive">
                    <thead>
                    <th class="text-start pb-3">Student</th>
                    <th class="text-center pb-3">Gender</th>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM section se INNER JOIN student st ON se.student_code = st.code WHERE se.year_id = 3 AND se.name = 'A' ORDER BY st.full_name";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td class='text-start'>" . $row['full_name'] . "</td>";
                            if ($row['sex'] == 0) {
                                echo '<td class="text-center" style="color: #d63384;">Female</td>';
                            } elseif ($row['sex'] == 1) {
                                echo '<td class="text-center" style="color: #0d6efd;">Male</td>';
                            }
                            echo "<tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6 border rounded shadow-lg p-5">
                <table class="table table-hover table-responsive">
                    <thead>
                        <th class="text-center pb-3">Facebook</th>
                    </thead>
                    <tbody>
                    <?php foreach ($BSIT_3A as $student => $student_link) { ?>
                        <tr>
                            <?php if ($student_link['fb_link'] == '')  { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" class="nav-link text-secondary disabled">Link Not Found</a></td>
                            <?php } else if ($student_link['fb_link'] == $student) { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" class="nav-link text-secondary disabled"><?= $student ?></a></td>
                            <?php } else { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" id="fb-link"><?= $student?></a></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        <div class="d-flex justify-content-center">
            <h1 class="mt-5 mb-4 text-center fw-bold">BSIT 3B</h1>
        </div>
        <div class="row">
            <div class="col-6 border rounded shadow-lg p-5">
                <table class="table table-hover table-responsive">
                    <thead>
                    <th class="text-start pb-3">Student</th>
                    <th class="text-center pb-3">Gender</th>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM section se INNER JOIN student st ON se.student_code = st.code WHERE se.year_id = 3 AND se.name = 'B' ORDER BY st.full_name";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td class='text-start'>" . $row['full_name'] . "</td>";
                            if ($row['sex'] == 0) {
                                echo '<td class="text-center" style="color: #d63384;">Female</td>';
                            } elseif ($row['sex'] == 1) {
                                echo '<td class="text-center" style="color: #0d6efd;">Male</td>';
                            }
                            echo "<tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6 border rounded shadow-lg p-5">
                <table class="table table-hover table-responsive">
                    <thead>
                        <th class="text-center pb-3">Facebook</th>
                    </thead>
                    <tbody>
                    <?php foreach ($BSIT_3B as $student => $student_link) { ?>
                        <tr>
                            <?php if ($student_link['fb_link'] == '')  { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" class="nav-link text-secondary disabled">Link Not Found</a></td>
                            <?php } else if ($student_link['fb_link'] == $student) { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" class="nav-link text-secondary disabled"><?= $student ?></a></td>
                            <?php } else { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" id="fb-link"><?= $student?></a></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        <div class="d-flex justify-content-center">
            <h1 class="mt-5 mb-4 text-center fw-bold">BSIT 3C</h1>
        </div>
        <div class="row">
            <div class="col-6 border rounded shadow-lg p-5">
                <table class="table table-hover table-responsive">
                    <thead>
                    <th class="text-start pb-3">Student</th>
                    <th class="text-center pb-3">Gender</th>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM section se INNER JOIN student st ON se.student_code = st.code WHERE se.year_id = 3 AND se.name = 'C' ORDER BY st.full_name";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td class='text-start'>" . $row['full_name'] . "</td>";
                            if ($row['sex'] == 0) {
                                echo '<td class="text-center" style="color: #d63384;">Female</td>';
                            } elseif ($row['sex'] == 1) {
                                echo '<td class="text-center" style="color: #0d6efd;">Male</td>';
                            }
                            echo "<tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6 border rounded shadow-lg p-5">
                <table class="table table-hover table-responsive">
                    <thead>
                        <th class="text-center pb-3">Facebook</th>
                    </thead>
                    <tbody>
                    <?php foreach ($BSIT_3C as $student => $student_link) { ?>
                        <tr>
                            <?php if ($student_link['fb_link'] == '')  { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" class="nav-link text-secondary disabled">Link Not Found</a></td>
                            <?php } else if ($student_link['fb_link'] == $student) { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" class="nav-link text-secondary disabled"><?= $student ?></a></td>
                            <?php } else { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" id="fb-link"><?= $student?></a></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        <div class="d-flex justify-content-center">
            <h1 class="mt-5 mb-4 text-center fw-bold">BSIT 3D</h1>
        </div>
        <div class="row">
            <div class="col-6 border rounded shadow-lg p-5">
                <table class="table table-hover table-responsive">
                    <thead>
                    <th class="text-start pb-3">Student</th>
                    <th class="text-center pb-3">Gender</th>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM section se INNER JOIN student st ON se.student_code = st.code WHERE se.year_id = 3 AND se.name = 'D' ORDER BY st.full_name";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td class='text-start'>" . $row['full_name'] . "</td>";
                            if ($row['sex'] == 0) {
                                echo '<td class="text-center" style="color: #d63384;">Female</td>';
                            } elseif ($row['sex'] == 1) {
                                echo '<td class="text-center" style="color: #0d6efd;">Male</td>';
                            }
                            echo "<tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6 border rounded shadow-lg p-5">
                <table class="table table-hover table-responsive">
                    <thead>
                        <th class="text-center pb-3">Facebook</th>
                    </thead>
                    <tbody>
                    <?php foreach ($BSIT_3D as $student => $student_link) { ?>
                        <tr>
                            <?php if ($student_link['fb_link'] == '')  { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" class="nav-link text-secondary disabled">Link Not Found</a></td>
                            <?php } else if ($student_link['fb_link'] == $student) { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" class="nav-link text-secondary disabled"><?= $student ?></a></td>
                            <?php } else { ?>
                                <td class="text-center"><a href="<?= $student_link['fb_link']?>" id="fb-link"><?= $student?></a></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-5"></div>
    </div>
</div>
</body>
</html>

