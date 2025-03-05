<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdrawl</title>
    <style>
        p{
            color: red;
        }
    </style>
</head>

<body>
    <x-navbar />
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5" style="border: 2px solid black;">
                <hr>
                <h5>Withdrawl:</h5>
                <hr>
                <p>
                {{$msg}}
                </p>
                <hr>
               <form>
               <div class="mb-3">
                <div class="mb-3">
                    <strong>
                    <label for="ammount" class="form-label">Enter Ammount</label>
                    </strong>
                    <input type="text" class="form-control" id="ammount" name="ammount">
                </div>
                <center>
                <button type="submit" class="btn btn-danger" name="submit" value="submit">Withdrawl</button>
                </center><br>
               </form>
            </div>
        </div>
    </div>
</body>

</html>