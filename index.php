<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Frontpage</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="assets/main.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>


        <?php include_once("assets/header.php"); ?>

        <main class="index-main">
            <form class="" action="" method="post">
                
                <h1>Student register</h1>
                
                <div class="form-group row">
                    <label for="firstname" class="col-sm-3 col-form-label">First name *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="middlename" class="col-sm-3 col-form-label">Middle name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle name">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="lastname" class="col-sm-3 col-form-label">Last name *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required>
                    </div>
                </div>
                
                   <div class="form-group row">
                    <label for="pet" class="col-sm-3 col-form-label">Pet</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pet" name="pet" placeholder="Pet">
                    </div>
                </div>
                
                   <div class="form-group row">
                    <label for="year" class="col-sm-3 col-form-label">Year *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="year" name="year" placeholder="Year" required>
                    </div>
                </div>
                
                   <div class="form-group row">
                    <label for="species" class="col-sm-3 col-form-label">Species *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="species" name="species" placeholder="Species" required>
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label for="gender" class="col-sm-3 col-form-label">Gender *</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="gender" name="gender">
                            <option selected disabled>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                     </div>
                </div>
                
                <div class="form-group row">
                    <label for="house" class="col-sm-3 col-form-label">House *</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="house" name="house">
                            <option selected disabled>Select house</option>
                            <option>Gryffindor</option>
                            <option>Ravenclaw</option>
                            <option>Slytherin</option>
                            <option>Hufflepuff</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Enter house</button>
                    </div>
                </div>
            </form>

        </main>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>