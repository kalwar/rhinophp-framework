# RhinoPHP-Framework

RhinoPHP-Framework is a super lite & fast micro PHP framework.

## Installation

In order to download the RhinoPHP-Framework, you must have docker installed. Make sure you have docker installed.

1.  Clone the project using git
2.  Copy .env.example into .env (No need to change anything for local development)
3.  Navigate to the project root directory
4.  Run `docker-compose up -d`
5.  Install dependencies
    `docker-compose exec app composer install`
6.  Run migrations
    `docker-compose exec app php migrations.php`
7.  Open in your browser http://localhost:8080

# Use for reference

Use solely for reference material only
