<!doctype html>


<?php
    date_default_timezone_set('Europe/Zagreb');

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
		$lane = $_POST['lane'];
		$role = $_POST['role'];
        $description = $_POST['description'];
        $difficulty = $_POST['difficulty'];
        $recommend = $_POST['recommend'];


        $result = '';

        $result .= "<champion>\n";

        $result .= '<name>' . $name . "</name>\n";
		
		$result .= '<lane>' . $lane . "</lane>\n";
		
		$result .= '<role>' . $role . "</role>\n";

        $result .= '<description>' . $description . "</description>\n";

        $result .= '<difficulty>' . $difficulty . "</difficulty>\n";

        $result .= '<recommend>' . $recommend . "</recommend>\n";

        $result .= '</champion>';

        $filename = 'champion' . date('Y_m_d_h_i_s') . '.xml';
        file_put_contents($filename, $result);
        die('UspjeĹˇno generiran XML!');


    }
?>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>LOL</title>
  </head>
  <body >
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Riot Games</a>
	  <span	 class="rounded border border-primary"><a class=" text-center navbar-brand"  href="https://eune.leagueoflegends.com/en-pl/">League of Legends</a></span>
  </nav>
  
  
	<div  class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1 class="mb-5  text-center">League of Legends</h1>
                <form action="projekt.php" method="POST">
				<hr/>
                    <div class="form-group row">
						<label for="name" class="col-sm-5 col-form-label">Name of the champion</label>
							<div class="col-sm-6">
							<input type="text" name="name"  class="form-control" id="name">
							</div>
					</div>

                    <div class="mb-4 mt-4 form-group row">
						<label for="lane" class="col-sm-5 col-form-label">Which lane</label>
							<div class="col-sm-6">
							<select id="lane" name="lane" class="form-control">
							<option selected>Lane</option>
							<option>Top</option>
							<option>Mid</option>
							<option>Jungle</option>
							<option>Bot</option>
							<option>Support</option>
							</select>
							</div>
					</div>
                    <div class="form-group row">
						<label for="role" class="col-sm-5 col-form-label">Which role</label>
							<div class="col-sm-6">
							<select id="role" name="role" class="form-control">
							<option selected>Role</option>
							<option>Marksman</option>
							<option>Assassin</option>
							<option>Fighter</option>
							<option>Tank</option>
							<option>Mage</option>
							<option>Support</option>
							</select>
							</div>
					</div>
                    <div class="mt-4 form-group row">
						<label for="description" class="col-sm-5 col-form-label">Short description of your champion</label>
							<div class="col-sm-6">
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
							</div>
					</div>

                    <div class="form-group">
						<label for="difficulty">Difficulty of playing</label>
						<input type="range" class="form-control-range" name="difficulty" min="1" max="100" step="1" id="formControlRange">
					</div>

                    <label for="recommend">Would you recommend that champion?</label>
                    <select class="custom-select" name="recommend" id="recommend">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>

                    <button type="submit" name="submit" class="btn mt-4 float-right btn-dark">Save as XML</button>
                </form>

            </div>
        </div>
       
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
