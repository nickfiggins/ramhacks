<DOCTYPE! html>
<head>
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

  <div class="container">
    <h2>Available Vehicles</h2>
    <button class='btn btn-primary' data-toggle="modal" data-target="#addVehicleModal">Add Vehicle</button>
    <table class="table table-hover">
      <thead>
        <tr>
          <td>Make</td>
          <td>Model</td>
          <td>Year</td>
          <td>Color</td>
          <td>Milage</td>
          <td>Status</td>
          <td>Price</td>
          <td>URL</td>
        </tr>
      </thead>
      <tbody>
        <?php include 'available_cars.php' ?>
      </tbody>
    </table>
  </div>

  <!-- modal -->
  <div class="modal fade" id="addVehicleModal" tabindex="-1" role="dialog" aria-labelledby="addVehicleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="addVehicleModalLabel">Add Vehicle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="submit_vehicle.php" method="GET">
            <div class="form-group row">
              <label for="make" class="col-sm-2 col-form-label">Make</label>
              <div class="col-sm-10">
                <input type="text" name = "make" class="form-control" id="make">
              </div>
            </div>
            <div class="form-group row">
              <label for="model" class="col-sm-2 col-form-label">Model</label>
              <div class="col-sm-10">
                <input type="text" name = "model" class="form-control" id="model">
              </div>
            </div>
            <div class="form-group row">
              <label for="year" class="col-sm-2 col-form-label">Year</label>
              <div class="col-sm-10">
                <input type="text" name = "year" class="form-control" id="year">
              </div>
            </div>
            <div class="form-group row">
              <label for="color" class="col-sm-2 col-form-label">Color</label>
              <div class="col-sm-10">
                <input type="text" name = "color" class="form-control" id="color">
              </div>
            </div>
            <div class="form-group row">
              <label for="mileage" class="col-sm-2 col-form-label">Mileage</label>
              <div class="col-sm-10">
                <input type="number" name = "mileage" class="form-control" id="mileage">
              </div>
            </div>
            <div class="form-group row">
              <label for="status" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <select class="form-control" name = "status">
                  <option readonly>Please select one:</option>
                  <option>available</option>
                  <option>unavailable</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="price" class="col-sm-2 col-form-label">Price</label>
              <div class="col-sm-10">
                <input type="number" name = "price" class="form-control" id="price">
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
