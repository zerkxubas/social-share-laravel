# Share Social Links In Laravel

This package is simple and effective for generating social share links without any complications in laravel projects.

## Installation


```bash
composer require zerkxubas/social-share-laravel
```

## Publishing The Configurations
```
php artisan vendor:publish --tag=socialshare
```

## .env Settings [ For Messenger ]
inside the **.env** file use these below config values for fb app setup.

```
FACEBOOK_APP_ID=your-facebook-app-id
```
**NOTE:** if you are not using for platform **messenger** then no need to change your .env file.


## Generating the url.

```php
use Zerkxubas\SocialShareLaravel\SocialShare;

SocialShare::generate($platform,$url);

// OR,

SocialShare::generate($platform,$url,$og_title,$og_description);
```

Thats it!😍

**Note:** This returns a single url for a platform. Kindly read the currently supported social platforms below.



## Supported Social Platforms

Here are some of the currently supported platforms and more will be added in future.

- Facebook
    ```facebook```
- Messenger
    ```messenger```
- Twitter
    ```twitter```
- Linkedin
    ```linkedin```
- WhatsApp
    ```whatsapp```
- Reddit
    ```reddit```

## Example
```php
use Zerkxubas\SocialShareLaravel\SocialShare;

// Basic usage
$facebookUrl = SocialShare::generate('facebook', 'https://localhost/blog/social-share-laravel');

// Or
$facebookUrl = SocialShare::generate('facebook', route('blog.posts',$id));

// With Open Graph (og) title and description
$twitterUrl = SocialShare::generate('twitter', 'https://example.com', 'Example Title', 'Example Description');

```
**Note:** Just try it. It really saves time.


## License

- Open Source, free to use & distribute.

## Author

[@zerkxubas](https://www.github.com/zerkxubas)