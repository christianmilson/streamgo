## Stream Go

To setup:
- git clone repo
- composer install
- configure ur env file
- run php artisan migrate --seed


## Messages API

- No authentication required

Method | route | params | description 
--- | --- | --- | ---
GET | /api/messages | N/A | Returns all messages
--- | --- | --- | ---
POST | /api/messages | author_id: INTEGER, message: STRING | Creates a new message
--- | --- | --- | ---
PATCH | /api/messages/:id | message: STRING | Updates an existing message
--- | --- | --- | ---
DELETE | /api/messages/:id | N/A | Deletes an existing message
