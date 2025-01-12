<?php
// Define the file path, ensuring the correct directory separator
$file = __DIR__ . "../assets/FORMULIR PENDAFTARAN ANGGOTA BIASA (untuk PPTKIS FIX).doc";

// Check if the file exists
if (file_exists($file)) {
    // Set headers to initiate file download
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // Read the file and output its contents
    readfile($file);
    exit;
} else {
    // If the file is not found, display an error message
    echo "File not found!";
}
