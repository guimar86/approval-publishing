<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Approval Publishing

This Laravel application allows users to create and manage content with an approval workflow.

## Features

- Create new content with title and body
- List content items in a responsive Bootstrap card grid
- Card header displays the content title
- Card body shows the first 100 characters of the content body
- Validation and error handling for content creation

## Usage

1. **Create Content**
    - Navigate to `/content/create`
    - Fill in the title and body fields
    - Submit the form to add new content

2. **View Content Grid**
    - Visit the content listing page (e.g., `/content`)
    - Content items are displayed as Bootstrap cards in a grid layout

## Example Blade for Content Grid

```blade
<div class="row row-cols-1 row-cols-md-3 g-4">
	@foreach($contents as $content)
		<div class="col">
			<div class="card h-100">
				<div class="card-header">
					{{ $content->title }}
				</div>
				<div class="card-body">
					<p class="card-text">
						{{ Str::limit($content->body, 100) }}
					</p>
				</div>
			</div>
		</div>
	@endforeach
</div>
```

## Requirements

- PHP
- Laravel
- Bootstrap (included via CDN or npm)

## Getting Started

1. Clone the repository
2. Install dependencies: `composer install`
3. Set up your `.env` file
4. Run migrations: `php artisan migrate`
5. Start the server: `php artisan serve`

## License

MIT
