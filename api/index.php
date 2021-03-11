
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <title>Hello, world!</title>
</head>
<body>

<?php

//header('content-type: application/json');
//echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
//echo "test";
?>
<h1>datatables + php</h1>



<table id="example" class="display" width="100%"></table>


<?php
$information = array(
    array("Salesman" => "Harris 1","Title"=>"Consulting JavaScript Architect","Office"=>"Home","Salary"=>"500000.00"),
    array("Salesman" => "Harris 2","Title"=>"Consulting JavaScript Architect","Office"=>"Home","Salary"=>"500000.00"),
    array("Salesman" => "Harris 3","Title"=>"Consulting JavaScript Architect","Office"=>"Home","Salary"=>"500000.00"),
    array("Salesman" => "Harris 4","Title"=>"Consulting JavaScript Architect","Office"=>"Home","Salary"=>"500000.00"),
    array("Salesman" => "Harris 5","Title"=>"Consulting JavaScript Architect","Office"=>"Home","Salary"=>"500000.00")
);
?>
    <?/*
    foreach ($arResult["ITEMS"] as $arItem):?>
        <?
        $information[] = array(
            "Salesman" => $arItem['ID'],
            "Title"=>$arItem['NAME'],
        );
    endforeach;
*/?>
<script>
    var information = <?php echo json_encode($information) ?>;
    $(document).ready(function () {
        $('#example').dataTable({
            data: information,
            columns: [
                { data: 'Salesman', title: 'Salesman' },
                { data: 'Title', title: 'Title' },
            ]
        });
    });
</script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>