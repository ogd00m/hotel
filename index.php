<?php
//https://www.youtube.com/watch?v=GDVWdYZLM7w
require_once 'config/connect.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    th, td {
        padding: 10px;
    }
    th {
        background: #606060;
    }
    td {
      background: #b5b5b5;
    }
</style>
<body>
<!--Header-->
<!--<nav class="navbar navbar-dark-lg bg-primary">-->
<!--    <div class="container-fluid">-->
<!--        <a class="navbar-brand" href="/hotel">Космос</a>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link active" aria-current="page" href="#">Home</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Link</a>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                        Dropdown-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                        <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                        <li><hr class="dropdown-divider"></li>-->
<!--                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link disabled">Disabled</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <form class="d-flex" role="search">-->
<!--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<table>
    <tr>
        <th>ID</th>
        <th>Номер комнаты</th>
    </tr>
    <pre>
        <?php
            $rooms = mysqli_query($connect, "SELECT * FROM `rooms`");
            $rooms = mysqli_fetch_all($rooms);
            foreach ($rooms as $room) {
                ?>
        <tr>
            <td><?= $room[0] ?></td>
            <td><?= $room[1] ?></td>
        </tr>

        <?php

            }
            ?>
    </pre>

    </table>
<div class="d-flex justify-content-center">
    <form action="vendor/add_guest.php" method="post">
        <p>Имя</p>
        <input type="text" name="name">
        <p>Фамилия</p>
        <input type="text" name="surname">
        <p>Дата рождения</p>
        <input type="date" name="birthday">
        <p>Номер комнаты</p>
        <select name="room_number" id="room_number">
            <option value="javascript">JavaScript</option>
            <?php
            foreach($room_number as $r)
            {
                ?>
                <option value="<?php echo $r['Group'];?>"><?php echo $r['animalGroup'];?></option>
                <?php
            }
            ?>
        </select>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>


</body>
</html>