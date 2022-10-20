# php-jwt-example

It uses [firebase/php-jwt](https://github.com/firebase/php-jwt).

HS256: You have to Base64 url decode your client secret in order to validate.
RS256: You have create private key, public key from https://github.com/vanquan223/Generate-JWT-Keys.git 
## Usage Instructions

1. `$ composer install`
2. Run: `$ php HS256.php` or `$ php RS256.php`

See <HS256.php> and <RS256.php> for code examples.

## License

This project is licensed under the MIT license. See the [LICENSE](LICENSE) file for more info.
