# Laravel + Vue.js UUID generation

## Features
- Laravel 10
- Vue.js 3
- REST API
- Async requests

## Requirements
- PHP 8.1+
- MySQL 5.7+
- NPM 14+

## Installation
- `git clone https://github.com/BrunoCry/laravel-uuid.dev.git your-folder`
- `composer install`
- Create a `.env` file and copy the contents of the .env.example file. Set the variables for connection to database.
- `php artisan key:generate`
- `npm install`

## Usage
# Development
```bash
# Start Laravel locally
php artisan serve

# Start npm watcher
npm run dev
```

The project will be launched at `http://localhost:8000`

## API
| Route                     | Usage                                            | Response           |
| ------------------------- | ------------------------------------------------ | ------------------ |
| `/api/uuid/list`          | Return list of all created UUID's with unique ID | {models: {""}}     |
| `/api/uuid/generate`      | Generate new UUID                                | {id: "", uuid: ""} |
| `/api/uuid/retrieve/{id}` | Get existing UUID by unique ID                   | {id: "", uuid: ""} |

## Front-End
Front-End has provided by Vue.js. There are 3 pages:
- `/` - page with list of all UUID`s
- `/generate` - page to generate new UUID
- `/retrieve` - page to retrieve existing UUID