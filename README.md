# Job Listing Platform  

This project is a job listing platform where employers can create job postings, and they are listed for potential candidates. It is built using **Laravel Blade** following **Jeffrey Way's Laravel 30 Days Course**.  

## Features  

- Employers can create job postings.  
- Jobs are displayed in a structured listing.  
- Email notifications are sent upon job creation.  
- Uses **Laravel Mail** with Mailtrap for testing.  
- Implements **queues** to handle mail processing asynchronously.  

## Tech Stack  

- **Backend:** Laravel  
- **Frontend:** Laravel Blade - Tailwind CSS
- **Database:** MySQL (or any preferred database)  
- **Mailing:** Laravel Mail with Mailtrap  

## Installation  

### 1. Clone the repository  
```sh
git clone <repo-url>
cd job-listing-platform
```
### 2. Install dependencies
```sh
composer install
npm install
```
### 3. Configure environment variables

Copy .env.example to .env
Set up database credentials
Configure Mailtrap for email testing

### 4. Run migrations
```sh
php artisan migrate --seed
```
### 5. Serve the project
```sh
php artisan serve
```