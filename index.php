<?php


// Klasemen
$data = file_get_contents('https://world-cup-json-2022.fly.dev/teams');
$grup = json_decode($data, true);

$grup = $grup["groups"];


// Jadwal
$tanding = file_get_contents('https://world-cup-json-2022.fly.dev/matches');
$jadwal = json_decode($tanding, true);


// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, 'https://world-cup-json-2022.fly.dev/matches');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($curl);
// curl_close($curl);


// $result = json_decode($result, true);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <title>HappyMPO | Piala Dunia Qatar 2022</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="happympo" width="200">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input type="text" class="form-control" placeholder="Cari pertandingan" id="search-input">
          <div class="input-group-append">
            <button class="btn btn-dark" type="button" id="search-button">Search</button>
          </div>
        </form>
      </div>
    </div>
  </nav>


  <hr>
  <div class="container">
    <div class="row" id="countries">
      <div class="col-md-4">

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Klasemen Piala Dunia 2022</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php foreach ($grup as $grup) : ?>
        <div class="col-md-6 ">
          <h5>Grup : <?= $grup["letter"]; ?></h5>
          <table class="table table-dark table-sm mb-3">

            <tr>
              <th>No.</th>
              <th>Team</th>
              <th>MP</th>
              <th>W</th>
              <th>D</th>
              <th>L</th>
              <th>GF</th>
              <th>GA</th>
              <th>GD</th>
              <th>Pts</th>

            </tr>
            <tr>

              <td>1</td>
              <td> <img src="https://countryflagsapi.com/png/<?= $grup["teams"][0]["name"]; ?>" alt="flag" width="25%">
                <?= $grup["teams"][0]["name"] ?>
              </td>
              <td><?= $grup["teams"][0]["games_played"] ?></td>
              <td><?= $grup["teams"][0]["wins"] ?></td>
              <td><?= $grup["teams"][0]["draws"] ?></td>
              <td><?= $grup["teams"][0]["losses"] ?></td>
              <td><?= $grup["teams"][0]["goals_for"] ?></td>
              <td><?= $grup["teams"][0]["goals_against"] ?></td>
              <td><?= $grup["teams"][0]["goal_differential"] ?></td>
              <td><?= $grup["teams"][0]["group_points"] ?></td>

            </tr>

            <tr>
              <td>2</td>
              <td> <img src="https://countryflagsapi.com/png/<?= $grup["teams"][1]["name"]; ?>" alt="flag" width="25%">
                <?= $grup["teams"][1]["name"] ?>
              </td>
              <td><?= $grup["teams"][1]["games_played"] ?></td>
              <td><?= $grup["teams"][1]["wins"] ?></td>
              <td><?= $grup["teams"][1]["draws"] ?></td>
              <td><?= $grup["teams"][1]["losses"] ?></td>
              <td><?= $grup["teams"][1]["goals_for"] ?></td>
              <td><?= $grup["teams"][1]["goals_against"] ?></td>
              <td><?= $grup["teams"][1]["goal_differential"] ?></td>
              <td><?= $grup["teams"][1]["group_points"] ?></td>


            </tr>
            <tr>
              <td>3</td>
              <td> <img src="https://gacorterus.vip/flag/<?= $grup["teams"][2]["country"]; ?>.png" alt="flag" width="25%">
                <?= $grup["teams"][2]["name"] ?>
              </td>
              <td><?= $grup["teams"][2]["games_played"] ?></td>
              <td><?= $grup["teams"][2]["wins"] ?></td>
              <td><?= $grup["teams"][2]["draws"] ?></td>
              <td><?= $grup["teams"][2]["losses"] ?></td>
              <td><?= $grup["teams"][2]["goals_for"] ?></td>
              <td><?= $grup["teams"][2]["goals_against"] ?></td>
              <td><?= $grup["teams"][2]["goal_differential"] ?></td>
              <td><?= $grup["teams"][2]["group_points"] ?></td>


            </tr>
            <tr>
              <td>4</td>
              <td> <img src="https://countryflagsapi.com/png/<?= $grup["teams"][3]["name"]; ?>" alt="flag" width="25%">
                <?= $grup["teams"][3]["name"] ?>
              </td>
              <td><?= $grup["teams"][3]["games_played"] ?></td>
              <td><?= $grup["teams"][3]["wins"] ?></td>
              <td><?= $grup["teams"][3]["draws"] ?></td>
              <td><?= $grup["teams"][3]["losses"] ?></td>
              <td><?= $grup["teams"][3]["goals_for"] ?></td>
              <td><?= $grup["teams"][3]["goals_against"] ?></td>
              <td><?= $grup["teams"][3]["goal_differential"] ?></td>
              <td><?= $grup["teams"][3]["group_points"] ?></td>

            </tr>

          </table>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="container">
    <section id="#jadwal">
      <h1>Jadwal Piala Dunia 2022</h1>
      <div class="row">
        <?php foreach ($jadwal as $jadwal) : ?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php $time = $jadwal["datetime"]; ?>
                <?= date('Y-M-d h:i:s', strtotime($time)); ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= $jadwal["location"]; ?></h6>
              <h6 class="card-subtitle mb-2 text-muted"><?= $jadwal["venue"]; ?></h6>
              <div class="row">
                <div class="col-6">
                  <img src="https://gacorterus.vip/flag/<?= $jadwal["home_team"]["country"]; ?>.png" alt="" class="card-img-top">
                  <p class="text-center country"><?= $jadwal["home_team"]["name"]; ?></p>
                  <h1 class="text-center score">0</h1>
                </div>
                <div class="col-6">
                  <img src="https://gacorterus.vip/flag/<?= $jadwal["home_team"]["country"]; ?>.png" alt="" class="card-img-top">
                  <p class="text-center country"><?= $jadwal["home_team"]["name"]; ?></p>
                  <h1 class="text-center score">0</h1>
                </div>
              </div>
              <div class="button">
                <button class="btn">View</button>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  </div>


























  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="script.js"></script>
</body>

</html>