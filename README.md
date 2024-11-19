## City Specials Backend

## Features

-   Create, view, and manage posts about special places in the city.
-   Add interactions (like, dislike, poop) to posts.
-   Fetch posts and their associated interactions.
-   Remove interactions from posts.

### Installation

1. Download the project
2. Open the project in your IDE
3. Install the dependencies
4. Run the project
5. Access the project on localhost:8000

## 1. Clone the project

```bash
git clone https://github.com/john-doherty/city-specials-backend.git
```

## 2. Install the dependencies

```bash
composer install
```

## 3.Configure the environment:

    Copy the .env.example file to .env.
    Update the .env file with your database credentials and other required configurations.

## 4. Run database migrations:

    ```bash
    php artisan migrate
    ```

## 5. Run the project:

    ```bash
    php artisan serve
    ```

## 6. Access the project on localhost:8000

    Open your browser and navigate to http://localhost:8000

### API Endpoints

The following endpoints are available for interacting with the backend:

TTP Method Endpoint Description Request Body/Query Parameters
GET /posts Retrieve all posts along with their interactions. N/A
POST /posts Create a new post. See Post Creation.
GET /posts/{id} Retrieve a specific post by ID with interactions. id (URL parameter)
GET /post-interactions Retrieve all interactions grouped by post and type. N/A
POST /post-interactions Add an interaction to a post. See Interaction Creation.
DELETE /post-interactions Remove an interaction from a post. See Interaction Removal.
