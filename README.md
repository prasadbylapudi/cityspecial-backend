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

# The following endpoints are available for interacting with the backend:


| HTTP Method | Endpoint             | Description                                         | Request Body/Query Parameters                      |
| ----------- | -------------------- | --------------------------------------------------- | -------------------------------------------------- |
| GET         | `/posts`             | Retrieve all posts along with their interactions.   | N/A                                                |
| POST        | `/posts`             | Create a new post.                                  | See [Post Creation](#post-creation).               |
| GET         | `/posts/{id}`        | Retrieve a specific post by ID with interactions.   | `id` (URL parameter)                               |
| GET         | `/post-interactions` | Retrieve all interactions grouped by post and type. | N/A                                                |
| POST        | `/post-interactions` | Add an interaction to a post.                       | See [Interaction Creation](#interaction-creation). |
| DELETE      | `/post-interactions` | Remove an interaction from a post.                  | See [Interaction Removal](#interaction-removal).   |



###  Retrieve All Posts : /posts

```json
{
    "id": 1,
    "title": "Best Coffee Spot",
    "description": "This place serves the best coffee in the city!",
    "category": "Food & Drink",
    "image_url": "https://example.com/image1.jpg",
    "location": "Downtown",
    "username": "JohnDoe",
    "email": "johndoe@example.com",
    "likes": ["user1@example.com", "user2@example.com"],
    "dislikes": ["user3@example.com"],
    "poops": [],
    "created_at": "2024-11-01T10:00:00.000Z",
    "updated_at": "2024-11-01T10:00:00.000Z"
}
```

### Post Request : /posts

Request 
```json
{
    "title": "Best Coffee Spot",
    "username": "JohnDoe",
    "email": "johndoe@example.com",
    "description": "This place serves the best coffee in the city!",
    "category": "Food & Drink",
    "image_url": "https://example.com/image1.jpg",
    "location": "Downtown"
}
```

response

```json
{
    "message": "Post created successfully!",
    "post": {
        "id": 1,
        "title": "Best Coffee Spot",
        "description": "This place serves the best coffee in the city!",
        "category": "Food & Drink",
        "image_url": "https://example.com/image1.jpg",
        "location": "Downtown",
        "username": "JohnDoe",
        "email": "johndoe@example.com",
        "likes": [],
        "dislikes": [],
        "poops": [],
        "created_at": "2024-11-01T10:00:00.000Z",
        "updated_at": "2024-11-01T10:00:00.000Z"
    }
}

```


### Error Responses

The following error responses may occur for the `/posts` POST request:

| **Status Code** | **Message**           | **Reason**                     |
|------------------|-----------------------|---------------------------------|
| `400`           | Validation error      | Missing or invalid fields.     |
| `500`           | Internal server error | Unexpected error occurred.     |



### Fetch All Interactions

**Endpoint**: `/post-interactions`  
**Method**: `GET`  

**Description**: Retrieve all interactions grouped by post and type.


```json
{
  "message": "All interactions fetched successfully!",
  "interactions": {
    "1": {
      "like": [
        {
          "post_id": 1,
          "user_identifier": "user1@example.com",
          "type": "like"
        }
      ],
      "dislike": [
        {
          "post_id": 1,
          "user_identifier": "user2@example.com",
          "type": "dislike"
        }
      ]
    },
    "2": {
      "poop": [
        {
          "post_id": 2,
          "user_identifier": "user3@example.com",
          "type": "poop"
        }
      ]
    }
  }
}



```










