<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>
<body>
    <x-navbar/>
    <div class="container-fluid">
    <center>
        <hr>
        <h2>Create Account Page</h2>
        <hr>
    </center>
    
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mb-5" style="border: 2px solid blue;">
            <hr>
            {{$msg}}
            <hr>
            <br>
            <form>
                    <div class="row">
                        <div class="col">
                            <h5>Enter Pin</h5>
                            <input type="text" name="pin" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <h5>Enter Name</h5>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col">
                            <h5>Enter Father's Name</h5>
                            <input type="text" class="form-control" name="fname">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <h5>Enter Email</h5>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="col">
                            <h5>Enter Phone</h5>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <h5>Gender</h5>
                            <input type="text" class="form-control" name="gender">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <h5> Country</h5>
                            <input type="text" class="form-control" name="country">
                        </div>
                        <div class="col">
                            <h5>State</h5>
                            <input type="text" class="form-control" name="state">
                        </div>
                        <div class="col">
                            <h5>City</h5>
                            <input type="text" class="form-control" name="city">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <h5> Ammount</h5>
                            <input type="text" class="form-control" name="ammount">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <center>
                                <input type="submit" value="Create Account" name="submit" class="btn btn-success btn-lg mb-3">
                            </center>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    </div>
</body>
</html>