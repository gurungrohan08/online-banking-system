<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <h5>Pin Change :</h5>
                <hr>
                <p>
                    {{$msg}}
                </p>
                <hr>
                <form>
                    <div class="mb-3">
                        <strong>
                            <label for="pin" class="form-label">Enter Old Pin</label>
                        </strong>
                        <input type="text" class="form-control" id="op" name="op">
                    </div>
                    <div class="mb-3">
                        <strong>
                            <label for="np" class="form-label">Enter New Pin</label>
                        </strong>
                        <input type="text" class="form-control" id="np" name="np">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-success" name="submit" value="submit">Update Pin</button>
                    </center><br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>