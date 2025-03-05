<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Summary</title>
</head>

<body>
    <x-navbar />
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-3" style="border: 2px solid black;">

                <form id="filterForm" method="GET" action="/accountsummary">
                    <div class="row mt-3">
                        <div class="col">
                            <select name="number" class="form-control" onchange="submitForm()">
                                <option>--select--</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="20">30</option>
                                <option value="20">40</option>
                                <option value="20">50</option>
                                <option value="20">60</option>
                                <option value="20">70</option>
                                <option value="20">80</option>
                                <option value="20">90</option>
                                <option value="20">100</option>
                                <!-- Other options -->
                            </select>
                        </div>
                        <div class="col">
                            <select name="month" class="form-control" onchange="submitForm()">
                                <option value="">--select month--</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>

                        </div>
                    </div>
                </form>

                <br>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Sr.No</th>
                        <th>Account Number</th>
                        <th>Ammount</th>
                        <th>Date</th>
                        <th>Description</th>
                    </tr>
                    @foreach($msg as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item["acno"]}}</td>
                        <td>{{$item["ammount"]}}</td>
                        <td>{{$item["date"]}}</td>
                        <td>{{$item["des"]}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script>
        function submitForm() {
            document.getElementById('filterForm').submit();
        }
    </script>
</body>

</html>