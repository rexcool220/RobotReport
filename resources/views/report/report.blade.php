<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>aCollapTable | Demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- plugin -->
    <script src="{{ URL::to('js/jquery.aCollapTable.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#demo-1').aCollapTable({
                startCollapsed: true,
                addColumn: false,
                plusButton: '<i class="glyphicon glyphicon-plus"></i> ',
                minusButton: '<i class="glyphicon glyphicon-minus"></i> '
            });
        });
    </script>
</head>
<body>
<table class="collaptable" id="demo-1">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <tr data-id="1" data-parent="">
        <td>1</td>
        <td>Element 1</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
    <tr data-id="2" data-parent="1">
        <td>1.1</td>
        <td>Element 2</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
    <tr data-id="3" data-parent="1">
        <td>1.2</td>
        <td>Element 3</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
    <tr data-id="6" data-parent="3">
        <td>1.2.1</td>
        <td>Element 6</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
    <tr data-id="7" data-parent="3">
        <td>1.2.2</td>
        <td>Element 7</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
    <tr data-id="8" data-parent="3">
        <td>1.2.3</td>
        <td>Element 8</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
    <tr data-id="4" data-parent="">
        <td>2</td>
        <td>Element 4</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
    <tr data-id="5" data-parent="4">
        <td>2.1</td>
        <td>Element 5</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
</table>
</body>
</html>
<body>
<?php dd($suites)?>