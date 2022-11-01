<?php
// added to allow AJAX calls from different host names
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');

// array of product information
$stock = [
    [
        "id" => "1",
        "Symbol" => "BABA",
        "Name" => "Alibaba Group Holding Limited",
        "Last Price" => "60.72",
        "Change" => "-11.46",
        "%Change" => "-15.88%"
    
    ],
    [
        "id" => "2",
        "Symbol" => "PDD",
        "Name" => "Pinduoduo Inc.",
        "Last Price" => "41.91",
        "Change" => "-17.06",
        "% Change" => "-28.93%"
        
    ],
    [
        "id" => "3",
        "Symbol" => "BIDU",
        "Name" => "Baidu, Inc.",
        "Last Price" => "76.48",
        "Change" => "-14.75",
        "% Change" => "-16.17%"
        
    ],
    [
        "id" => "4",
        "Symbol" => "TCDA",
        "Name" => "Tricida, Inc.",
        "Last Price" => "0.6150",
        "Change" => "-10.2650",
        "% Change" => "-94.35%"
    
    ],
    [
        "id" => "5",
        "Symbol" => "MOTS",
        "Name" => "Motus GI Holdings, Inc.",
        "Last Price" => "2.2499",
        "Change" => "+0.6499",
        "% Change" => "+40.62%"
    ]
];

// build the result depending on whether or not an id to a product is provided
$result = '';
if ($_GET['id']) {
    $id = $_GET['id'];
    foreach ($stock as $item) {
        if ($id === $item['id']) {
            $result = $item['Name'];
            break;
        }
    }
} else {
    $result = 'Please provide an id.';
}

echo $result;

?>