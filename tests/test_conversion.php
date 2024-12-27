<?php

// Test if ImageMagick is installed
echo "Testing ImageMagick installation...\n";
exec('convert -version', $output, $returnVar);
if ($returnVar === 0) {
    echo "ImageMagick is installed successfully!\n";
    echo implode("\n", $output) . "\n";
} else {
    echo "ImageMagick is not installed or not in PATH\n";
}

echo "\nTesting LibreOffice installation...\n";
exec('soffice --version', $output2, $returnVar2);
if ($returnVar2 === 0) {
    echo "LibreOffice is installed successfully!\n";
    echo implode("\n", $output2) . "\n";
} else {
    echo "LibreOffice is not installed or not in PATH\n";
}
