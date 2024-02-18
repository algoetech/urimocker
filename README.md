# Tairocruiz URIMocker

Tairocruiz URIMocker is a PHP package that allows you to mock URLs in your Laravel applications. It leverages the `php-vcr` library to record and replay HTTP interactions, making it easy to test your code that interacts with external APIs.

## Installation

You can install the Tairocruiz URIMocker package via Composer. Run the following command in your Laravel project's root directory:

```bash
composer require tairocruiz/urimocker
```

## Usage

### 1. Initialize URIMocker

First, you need to initialize URIMocker in your Laravel application. You can do this in your service provider or any other appropriate location. Here's an example of how to initialize URIMocker:

```php
use Tairocruiz\URIMocker\URIMocker;

URIMocker::configure()->enableLibraryHooks(['curl']);
URIMocker::configure()->setCassettePath(__DIR__ . '/fixtures');
URIMocker::turnOn();
```

### 2. Mock URLs

Once URIMocker is initialized, you can mock URLs in your tests or application code. Use the `mockUrl` method to specify the URL you want to mock and the response it should return:

```php
URIMocker::mockUrl('http://example.com/api', 'Mocked response for the API');
```

### 3. Make HTTP Requests

Now you can make HTTP requests to the mocked URLs in your application code. URIMocker will intercept these requests and return the mocked responses:

```php
$response = file_get_contents('http://example.com/api');
```

### 4. Eject Cassettes

After each test or test suite, it's a good practice to eject the cassette to stop URIMocker from recording further interactions:

```php
URIMocker::eject();
```

## Contributing

Contributions are welcome! If you have any ideas, suggestions, or bug reports, please open an issue or submit a pull request on GitHub.

## License

The Tairocruiz URIMocker package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
```
