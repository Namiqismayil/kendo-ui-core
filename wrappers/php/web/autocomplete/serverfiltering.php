<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['CONTENT_TYPE'] == 'application/json') {

    require_once '../../lib/DataSourceResult.php';

    $result = new DataSourceResult('sqlite:../../northwind.db');

    header('Content-Type: application/json');

    echo json_encode($result->read('SELECT ProductName from Products'));

    exit;
}

?>
<?php require_once '../../include/header.php' ?>

<?php require_once '../../lib/Kendo/Autoload.php' ?>
<?php
    $transport = new \Kendo\Data\DataSourceTransport();

    $read = new \Kendo\Data\DataSourceTransportRead();

    $read->url('serverfiltering.php')
         ->contentType('application/json')
         ->type('POST');

    $transport->read($read);

    $schema  = new \Kendo\Data\DataSourceSchema();
    $schema->data('data')
           ->total('total');

    $dataSource = new \Kendo\Data\DataSource();

    $dataSource->transport($transport)
               ->schema($schema)
               ->serverFiltering(false);

    $autoComplete = new \Kendo\UI\AutoComplete('products');

    $autoComplete->dataSource($dataSource)
                 ->dataTextField('ProductName')
                 ->ignoreCase(false);

    echo $autoComplete->render();
?>
    <div>
        <label for="products">Choose product:</label>
    </div>
    <style scoped="scoped">
        .k-autocomplete
        {
            width: 250px;
        }
    </style>
<?php require_once '../../include/footer.php' ?>
