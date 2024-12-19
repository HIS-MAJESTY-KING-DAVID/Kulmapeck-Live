# Kulmapeck

A Symfony-based web application for educational platform management.

## Requirements

- PHP 7.4 or higher
- Composer
- MySQL/MariaDB
- Node.js and npm (for asset management)
- Symfony CLI (optional, for development)

## Installation

1. Clone the repository:
   ```bash
   git clone [repository-url]
   cd kulmapeck
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Configure your environment:
   - Copy `.env.example` to `.env`
   - Update database and other configuration settings in `.env`

4. Set up the database:
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

5. Start the development server:
   ```bash
   symfony server:start
   # or using PHP's built-in server
   php -S localhost:8000 -t public/
   ```

## Project Structure

- `config/` - Application configuration
- `src/` - Application source code
- `templates/` - Twig templates
- `public/` - Public assets and front controller
- `migrations/` - Database migrations
- `translations/` - Translation files

## Docker Support

The project includes Docker configuration for development. To use Docker:

```bash
docker-compose up -d
```

## Testing

Run tests using PHPUnit:

```bash
php bin/phpunit
```

## Contributing

1. Create a new branch for your feature
2. Make your changes
3. Submit a pull request

## License

[Your License Information]