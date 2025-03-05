<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <style>
        p{
            color: green;
        }
    </style>
</head>

<body>
    <x-navbar />
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="border: 2px solid blue;">
                <hr> <h5>Deposit :</h5> <hr>
                <p>{{$msg}}</p><hr>
                <form action="">
                    <strong>Enter Ammount</strong>
                    <input type="text" name="ammount" class="form-control" id="">
                    <input type="submit" value="Deposit" name="submit" class="btn btn-primary mt-3 mb-3">

                </form>
            </div>
        </div>
    </div>
</body>

</html>