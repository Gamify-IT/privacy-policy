# Privacy Policy

This repo stores the privacy policy text for Gamify-IT in german and english.

To place yor address in the image mount the `config.json` into `/var/www/html/config.json`.

The `config.json` shoul look like this:

```JSON
{
  "address": "[UNDEFINED]",
  "email": "[UNDEFINED]",
  "phone": "[UNDEFINED]"
}
```

## Development

### Run with Docker for Development

To build and run with docker use:

```
docker-compose up --build
```
now you can access it at `[http://localhost](http://localhost)`
