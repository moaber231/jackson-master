<?php
$file_url = "KONSTANTINOS_GKOGKOS_Resume.pdf"; // Path to your file in the same directory

// Set headers for file download
header("Content-Disposition: attachment; filename=" . basename($file_url));
header("Content-Type: application/pdf");
header("Content-Length: " . filesize($file_url));
header("Pragma: public");
header("Cache-Control: must-revalidate");

// Read and output the file
readfile($file_url);
exit;
?>
