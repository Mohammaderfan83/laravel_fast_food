> <div dir="rtl" align="right">
> 
> # 🍔 پروژه فروشگاهی فست فود با Laravel
> 
> این پروژه یک سیستم فروشگاهی برای یک فست‌فود است که با استفاده از
> فریم‌ورک Laravel پیاده‌سازی شده است. کاربران می‌توانند منو غذاها را
> مشاهده کنند، آن‌ها را به سبد خرید اضافه کنند، سفارش ثبت کنند و وضعیت
> ارسال را پیگیری نمایند.
> 
> ---
> 
> ## 🚀 ویژگی‌ها
> 
> - مشاهده لیست محصولات
> - دسته‌بندی غذاها (پیتزا، برگر، نوشیدنی و ...)
> - جستجوی محصول
> - افزودن به سبد خرید
> - ثبت سفارش
> - پیگیری وضعیت سفارش
> - احراز هویت کاربران
> - صفحه تماس با ما
> - پنل مدیریت محصولات و سفارش‌ها
> 
> ---
> 
> ## 🛠️ تکنولوژی‌های استفاده شده
> 
> - Laravel 11
> - PHP 8
> - MySQL
> - Bootstrap / Tailwind /blade
> - alpine js ,jQuery
> - API برای پرداخت  و ارسال پیامک
> 
> ---
> 
> ## 🧰 پیش‌نیازها
> 
> برای اجرای این پروژه به ابزارهای زیر نیاز دارید:
> 
> - PHP >= 8.1
> - Composer
> - MySQL
> - Node.js و NPM (برای assetها در صورت استفاده از Laravel Mix یا Vite)
> 
> ---
> 
> ## ⚙️ نصب و اجرا
> 
> ```bash git clone https://github.com/username/fastfood-laravel.git cd
> fastfood-laravel
> 
> composer install cp .env.example .env php artisan key:generate
> 
> # تنظیمات دیتابیس را در فایل .env وارد کنید
> 
> php artisan migrate --seed
> 
> npm install && npm run dev   # اگر از Mix یا Vite استفاده شده php
> artisan serve
