# Services

This directory contains the application's business logic services.

## Purpose

Services handle complex business logic, keeping controllers thin and maintaining separation of concerns. They should be:
- Single responsibility focused
- Easily testable
- Dependency injected

## Key Services

- Payment processing services
- User management services
- Exam management services

## Usage

Services should be injected into controllers or other services using Symfony's dependency injection:

```php
class ExamController
{
    public function __construct(
        private ExamService $examService
    ) {}

    public function show(Exam $exam): Response
    {
        $result = $this->examService->processExam($exam);
        // ...
    }
}
```
