<?php include('server.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inschrijf</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css"
          integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css"
          integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css"
          integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css"
          integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <form name="save" method="post" action="index.php">
        <div class="text-center">
            <input name="title" type="text" class="form-control" id="title" aria-describedby="title"
                   placeholder="Title">
        </div>

        <h3 class="evenement">Evenementen</h3>

        <div class="row">
            <div class="col-md-8">
                <div class="main-event">
                    <div class="evenementen">
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-2">
                                <div class="btn btn-danger minEvent">
                                    <i class="fas fa-minus"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="evenement" name="evenement"
                                       placeholder="Evenement">
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                           value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Extra mensen</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                           value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Vervoer</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                           value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Vegetarich</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                           value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Edities</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                           value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Accomodatie</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                           value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Annuleringsverzekering</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                           value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">E-Bike</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6>Extra</h6>
                                <input type="text" class="form-control" id="Prijs" aria-describedby="prijs"
                                       placeholder="Prijs">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="btn btn-primary addEvent">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button name="save" class="btn btn-success saveBtn">Save</button>
        </div>
    </form>
</div>

<!-- Bootstrap core JavaScript -->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>