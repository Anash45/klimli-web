<?php
// Specify the path to the JSON file
$jsonFilePath = './assets/KlimliTaxLibrary.json';

// Check if the file exists
if (file_exists($jsonFilePath)) {
    // Read the contents of the JSON file
    $jsonData = file_get_contents($jsonFilePath);

    // Decode the JSON data into a PHP array
    $decodedData = json_decode($jsonData, true);

    // Check if the decoding was successful
    if ($decodedData === null) {
        echo "Error decoding JSON data.";
    } else {
        // Modify the IDs
        $newId = 1;
        foreach ($decodedData as &$item) {
            $item['id'] = $newId++;
        }

        // Encode the modified data back to JSON format
        $encodedJson = json_encode($decodedData, JSON_PRETTY_PRINT);

        // Output the updated JSON data
        header('Content-Type: application/json');
        echo $encodedJson;
    }
} else {
    echo "File not found.";
}
?>
