<?php
//src/Controller/FileDownloadController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser;

class FileDownloadController extends AbstractController
{
    // Route: 'route funtion name/file name variable', 'name for route use'
    #[Route('/download/{filename}', name: 'app_download_file')]

    public function downloadFile(string $filename): BinaryFileResponse
    {
        // Construct the full absolute path to the file
        // Ensure this path is secured and does not allow directory traversal
        $projectFolder = $this->getParameter('kernel.project_dir');

        $filePath = $this->getParameter('kernel.project_dir') . '/var/downloadable/' . $filename;

        // Check if the file exists (optional but recommended)
        if (!file_exists($filePath)) {
            throw $this->createNotFoundException('The file does not exist');
        }

        $response = new BinaryFileResponse($filePath);

        // Set the content disposition to force download
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename // The name the user will see when downloading
        );

        return $response;
    }
}
