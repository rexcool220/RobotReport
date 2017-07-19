<?php

$rating_data = array(
    array('Employee', 'Rating'),
    array('Suresh',25),
    array('Amit',56),
    array('Rahul',37),
    array('Lucky',71),
    array('Pooja',11),
    array('Manoj',49)
);

$encoded_data = json_encode($rating_data);
?>

<html>
<head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(
                <?php  echo $encoded_data; ?>
            );
            var options = {
                title: "Employee Ratings"
            };
            var chart = new google.visualization.PieChart(document.getElementById("employee_piechart"));
            chart.draw(data, options);
        }
    </script>

</head>
<body>
<div id="employee_piechart" style="width: 450px; height: 250px;"></div>
</body>
</html>