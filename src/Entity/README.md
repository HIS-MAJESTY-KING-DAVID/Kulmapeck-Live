# Entities

This directory contains the application's Doctrine entities that represent the data model.

## Key Entities

- `User.php` - User account information
- `Exam.php` - Exam/test related data
- `Subscription.php` - Subscription and payment information

## Entity Relationships

Entities use Doctrine annotations/attributes to define relationships and database mappings. Example:

```php
#[ORM\Entity(repositoryClass: ExamRepository::class)]
class Exam
{
    #[ORM\ManyToOne(targetEntity: User::class)]
    private User $creator;

    // Other properties and methods
}
```

## Validation

Entities use Symfony's validation constraints to ensure data integrity. Make sure to add appropriate validation rules when modifying entities.
