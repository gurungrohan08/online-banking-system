<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            font-weight: bold;
        }
        p{
            font-size: 20px;
        }
    </style>
</head>

<body>
    <x-navbar />
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="border: 2px solid black; margin-bottom: 2rem;">
                <hr>
                <h5>Fund Transfer:</h5>
                <hr>
                <p>{{$msg}}</p>
                <hr>
               <form>
                <div class="mb-3">
                    <label for="ra" class="form-label">Receiver Account Number</label>
                    <input type="text" class="form-control" id="ra" name="racno">
                </div>
                <div class="mb-3">
                    <label for="ammount" class="form-label">Enter Ammount</label>
                    <input type="text" class="form-control" id="ammount" name="ammount">
                </div>
                <center>
                <button type="submit" class="btn btn-danger" name="submit" value="submit">Transfer</button>
                </center><br>
               </form>
            </div>
        </div>
    </div>
</body>

</html>