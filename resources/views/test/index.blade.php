<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawSarahChart);

        google.charts.setOnLoadCallback(drawAnthonyChart);

        google.charts.setOnLoadCallback(drawRexChart);

        function drawSarahChart() {

            // Create the data table for Sarah's pizza.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Mushrooms', 1],
                ['Onions', 1],
                ['Olives', 2],
                ['Zucchini', 2],
                ['Pepperoni', 1]
            ]);

            // Set options for Sarah's pie chart.
            var options = {title:'How Much Pizza Sarah Ate Last Night',
                width:400,
                height:300};

            // Instantiate and draw the chart for Sarah's pizza.
            var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
            chart.draw(data, options);
        }

        // Callback that draws the pie chart for Anthony's pizza.
        function drawAnthonyChart() {

            // Create the data table for Anthony's pizza.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Mushrooms', 2],
                ['Onions', 2],
                ['Olives', 2],
                ['Zucchini', 0],
                ['Pepperoni', 3]
            ]);

            // Set options for Anthony's pie chart.
            var options = {title:'How Much Pizza Anthony Ate Last Night',
                width:400,
                height:300};

            // Instantiate and draw the chart for Anthony's pizza.
            var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
            chart.draw(data, options);
        }


        google.charts.load('current', {'packages':['table']});
        google.charts.setOnLoadCallback(drawTable);

        function drawTable() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Name');
            data.addColumn('number', 'Salary');
            data.addColumn('boolean', 'Full Time Employee');
            data.addRows([
                ['Mike',  {v: 10000, f: '$10,000'}, true],
                ['Jim',   {v:8000,   f: '$8,000'},  false],
                ['Alice', {v: 12500, f: '$12,500'}, true],
                ['Bob',   {v: 7000,  f: '$7,000'},  true],
                ['Mike',  {v: 10000, f: '$10,000'}, true],
                ['Jim',   {v:8000,   f: '$8,000'},  false],
                ['Alice', {v: 12500, f: '$12,500'}, true],
                ['Bob',   {v: 7000,  f: '$7,000'},  true],
                ['Mike',  {v: 10000, f: '$10,000'}, true],
                ['Jim',   {v:8000,   f: '$8,000'},  false],
                ['Alice', {v: 12500, f: '$12,500'}, true],
                ['Bob',   {v: 7000,  f: '$7,000'},  true],
                ['Mike',  {v: 10000, f: '$10,000'}, true],
                ['Jim',   {v:8000,   f: '$8,000'},  false],
                ['Alice', {v: 12500, f: '$12,500'}, true],
                ['Bob',   {v: 7000,  f: '$7,000'},  true],
                ['Mike',  {v: 10000, f: '$10,000'}, true],
                ['Jim',   {v:8000,   f: '$8,000'},  false],
                ['Alice', {v: 12500, f: '$12,500'}, true],
                ['Bob',   {v: 7000,  f: '$7,000'},  true]
            ]);

            var table = new google.visualization.Table(document.getElementById('table_div'));

            table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
        }
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <h1>Summary Information</h1>
            <table class="table">
                <tbody>
                <tr>
                    <td>Status</td>
                    <td>All tests passed</td>
                </tr>
                <tr>
                    <td>Start Time</td>
                    <td>20170717 11:21:32.291</td>
                </tr>
                <tr>
                    <td>End Time</td>
                    <td>20170717 11:22:11.211</td>
                </tr>
                <tr>
                    <td>Elapsed Time</td>
                    <td>00:00:38.920</td>
                </tr>
                <tr>
                    <td>Log File</td>
                    <td>log.html</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3" id="Sarah_chart_div" style="border: 1px solid #ccc"></div>
        <div class="col-sm-3" id="Anthony_chart_div" style="border: 1px solid #ccc"></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10" id="table_div"></div>
        <div class="col-sm-1"></div>
    </div>
</div>

</body>
</html>
