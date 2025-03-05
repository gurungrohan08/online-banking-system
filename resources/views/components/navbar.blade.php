<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    nav {
      text-align: center;
      margin-bottom: 20px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
    }
  </style>
</head>

<body>
  <div class="row">
    <div class="col-md-2" style="background-color: #040720;">
      <img src="image/bank.jpg" width="100%" height="100%" alt="">
    </div>
    <div class="col-md-8" style="background-color: #040720; color: whitesmoke ;">
      <center>
        <h2>Online Banking System</h2>

        <h4>Bank At Your Doorstep</h4>
      </center>
    </div>
    <div class="col-md-2" style="background-color: #040720;"></div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">SBI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/createaccount">Create Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/deposit">Deposit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/withdrawl">Withdrawl</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pinchange">Pinchange</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/fundtransfer">Fundtransfer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/balanceenquiry">Balance Enquiry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/accountsummary">Account Summary</a>
          </li>
          @if(session('myses'))
          <li class="nav-item">
            <div class="nav-link">
              <i class="fa-regular fa-user fa-xl" style="color: #fcfcfc;"></i>
              <b style="color: white;">{{session("myses")["name"]}}</b>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-danger" href="/logout">Logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link btn btn-success" href="/login">Login</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>