# Controllers

This directory contains the application's controllers that handle HTTP requests and define the application's routing logic.

## Structure

- `Front/` - Frontend controllers for web interface
- `Api/` - API controllers for REST endpoints
- `Admin/` - Administrative interface controllers

## Key Controllers

- `ExamController.php` - Handles exam-related operations
- `PayerAbonnementController.php` - Manages subscription payments

## Usage

Controllers follow Symfony's best practices and use annotations for routing. Example:

```php
#[Route('/exam', name: 'exam_')]
class ExamController extends AbstractController
{
    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Exam $exam): Response
    {
        // Controller logic
    }
}
```
