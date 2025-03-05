<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance Enquiry</title>
    <style>
        strong{
            font-size: 40px;
        }
    </style>
</head>
<body>
    <x-navbar/>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="border: 4px solid blue;">
                <hr><h5>Balance Enquiry :</h5><hr>
                <strong>{{$msg}}</strong>
            </div>
        </div>
    </div>
</body>
</html>