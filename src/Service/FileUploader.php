<?php
// src/Service/FileUploader.php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Service\FileConverter;

class FileUploader
{
    private $targetDirectory;
    private $slugger;
    private $publicDirectory;
    private $fileConverter;

    public function __construct($targetDirectory, $publicDirectory, SluggerInterface $slugger, FileConverter $fileConverter)
    {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger;
        $this->publicDirectory = $publicDirectory;
        $this->fileConverter = $fileConverter;
    }

    public function upload(?UploadedFile $file, string $path=null)
    {
        if ($file === null) {
            return;
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $extension = $file->guessExtension();

        // Convert to PDF if it's a supported format
        if (in_array($extension, ['doc', 'docx', 'jpg', 'jpeg', 'png'])) {
            try {
                $pdfPath = $this->fileConverter->convertToPdf($file);
                $fileName = $safeFilename . '-' . uniqid() . '.pdf';
                rename($pdfPath, $this->getTargetDirectory() . $path . '/' . $fileName);
                return $fileName;
            } catch (\Exception $e) {
                // If conversion fails, fall back to original file
                error_log("File conversion failed: " . $e->getMessage());
            }
        }

        // If not converted to PDF or conversion failed, handle original file
        $fileName = $safeFilename . '-' . uniqid() . '.' . $extension;
        try {
            $file->move($this->getTargetDirectory() . $path, $fileName);
        } catch (FileException $e) {
            error_log("File upload failed: " . $e->getMessage());
            throw $e;
        }

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}