<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="ribetno.js"></script>
    <style>
      .container {
        padding: 5% 25%;
      }
      .card {
        margin: 0 auto;
        margin-bottom: 10px;
        background-color: rgb(80, 80, 80);
        color: whitesmoke;
      }
      .card-header {
        background-color: rgb(53, 53, 53);
        color: white;
      }
      .card-body {
        flex: 1 1 auto;
        padding: 0;
      }
      .kongteks {
        margin: 1rem;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card" style="width: 30rem">
        <div class="card-body">
          <h5 class="card-header text-center">JavaScript Form Validation</h5>
          <form action="https://youtu.be/c1s3Iekns9k" id="validasi">
            <div class="mb-3 mt-3 kongteks">
              <label for="name" class="form-label">Full Name:</label>
              <input type="text" class="form-control" id="name" placeholder="ex: Anugra Salaza" name="fname" />
            </div>
            <div class="mb-3 mt-3 kongteks">
              <label for="username" class="form-label">Username:</label>
              <input type="text" class="form-control" id="username" placeholder="ex: only 6-8" name="uname" />
            </div>
            <div class="mb-3 mt-3 kongteks">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" />
            </div>
            <div class="mb-3 mt-3 kongteks">
              <label name="state" for="state" class="form-label">State:</label>
              <select class="form-select" id="sel1" name="sellist1">
                <option value="">Please choose..</option>
                <option value="1">1. Indonesia</option>
                <option value="2">2. Malaysia</option>
                <option value="3">3. Singapore</option>
                <option value="4">4. Philipine</option>
                <option value="5">5. Vietnam</option>
              </select>
            </div>
            <div class="mb-3 mt-3 kongteks">
              <label for="address" class="form-label">Address:</label>
              <input type="text" class="form-control" id="address" placeholder="ex : Jl. Mahakam 01, Lumajang" name="address" />
            </div>
            <div class="mb-3 mt-3 kongteks">
              <label for="zip" class="form-label">Zip Code:</label>
              <input type="zip" class="form-control" id="zip" placeholder="ex : 673181" name="zip" />
            </div>
            <button type="submit" class="btn btn-primary form-control">Check Form</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
