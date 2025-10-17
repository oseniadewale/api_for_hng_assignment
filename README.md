# Backend Wizards — Stage 0 Task (PHP Implementation)

## Description
A simple RESTful API that returns my profile information along with a random cat fact fetched dynamically from the Cat Facts API.

## Endpoint
**GET /me**
Returns JSON in this format:
```json
{
  "status": "success",
  "user": {
    "email": "oseni246femi@gmail.com",
    "name": "Oseni Adewale Oluwafemi",
    "stack": "PHP/Laravel"
  },
  "timestamp": "2025-10-16T12:34:56.789Z",
  "fact": "Cats sleep for 70% of their lives."
}
```

## Run Locally
```bash
php -S localhost:8000
```
Then visit:
```
http://localhost:8000/me
```

## Dependencies
- PHP 8.x+
- cURL enabled

## Deployment
Can be deployed on:
- Railway.app
- PXXL App
- 000WebHost
- InfinityFree
- Heroku (PHP buildpack)

## Author
**Name:** Oseni Adewale Oluwafemi  
**Email:** oseni246femi@gmail.com  
**Stack:** PHP/Laravel
