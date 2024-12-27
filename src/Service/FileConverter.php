<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class FileConverter
{
    private $tempDirectory;

    public function __construct(string $tempDirectory)
    {
        $this->tempDirectory = $tempDirectory;
    }

    public function convertToPdf(UploadedFile $file): ?string
    {
        $extension = strtolower($file->getClientOriginalExtension());
        $tempPath = $this->tempDirectory . '/' . uniqid();
        $originalFilename = $file->getClientOriginalName();
        
        // Move the uploaded file to temp directory
        $file->move($this->tempDirectory, $originalFilename);
        $inputFile = $this->tempDirectory . '/' . $originalFilename;
        $outputFile = $tempPath . '.pdf';

        try {
            switch ($extension) {
                case 'doc':
                case 'docx':
                    return $this->convertWordToPdf($inputFile, $outputFile);
                case 'jpg':
                case 'jpeg':
                case 'png':
                    return $this->convertImageToPdf($inputFile, $outputFile);
                case 'pdf':
                    // If it's already a PDF, just return the path
                    return $inputFile;
                default:
                    throw new \Exception("Unsupported file type: {$extension}");
            }
        } finally {
            // Cleanup the original file if it's not a PDF
            if ($extension !== 'pdf' && file_exists($inputFile)) {
                unlink($inputFile);
            }
        }
    }

    private function convertWordToPdf(string $input, string $output): string
    {
        // Using unoconv for Word to PDF conversion (more reliable on Ubuntu)
        $process = new Process([
            'unoconv',
            '-f',
            'pdf',
            '-o',
            $output,
            $input
        ]);

        $process->setTimeout(60); // Give it more time for large documents
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return $output;
    }

    private function convertImageToPdf(string $input, string $output): string
    {
        // Using convert from ImageMagick
        $process = new Process([
            'convert',
            $input,
            $output
        ]);

        $process->setTimeout(30);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return $output;
    }
}
