# Basic CRUD CodeIgniter 4

## Motivations
### Indonesia
> Halo semuanya pengguna ***Github***,saya IcalUwU ingin membagikan hasil ***Codingan*** saya
> dari awal pembuatan sampai akhir, kalian boleh menggunakan template CRUD ini untuk tugas,
> pekerjaan, bahan penelitian dan lain-lain secara ***open-source***, jadinya gunakan saja
> asal itu berguna dan bermanfaat,dan saya tidak mengizinkan jika digunakan untuk tindakan
> kejahatan.
>> Penulis icaluwu

### English
> ***Hello all Github users, I want to share my coding results from the beginning to the end,***
> ***you can use this CRUD template for tasks, jobs, research materials and so on open-source,***
> ***it's just to use as it is useful and useful, and I don't allow it to be used for criminal acts.***
>> ***Author icaluwu***

## Requirements
> - XAMPP as localhost
> - VS Code/ Sublime Text as Text Editor
> - Chrome/Edge as Browser
> - PHP +8.2
> - Composer (If you want to code it manually)

## Tree

app
 ┣ Config
 ┃ ┣ Boot
 ┃ ┃ ┣ development.php
 ┃ ┃ ┣ production.php
 ┃ ┃ ┗ testing.php
 ┃ ┣ App.php
 ┃ ┣ Autoload.php
 ┃ ┣ Cache.php
 ┃ ┣ Constants.php
 ┃ ┣ ContentSecurityPolicy.php
 ┃ ┣ Cookie.php
 ┃ ┣ Cors.php
 ┃ ┣ CURLRequest.php
 ┃ ┣ Database.php
 ┃ ┣ DocTypes.php
 ┃ ┣ Email.php
 ┃ ┣ Encryption.php
 ┃ ┣ Events.php
 ┃ ┣ Exceptions.php
 ┃ ┣ Feature.php
 ┃ ┣ Filters.php
 ┃ ┣ ForeignCharacters.php
 ┃ ┣ Format.php
 ┃ ┣ Generators.php
 ┃ ┣ Honeypot.php
 ┃ ┣ Images.php
 ┃ ┣ Kint.php
 ┃ ┣ Logger.php
 ┃ ┣ Migrations.php
 ┃ ┣ Mimes.php
 ┃ ┣ Modules.php
 ┃ ┣ Optimize.php
 ┃ ┣ Pager.php
 ┃ ┣ Paths.php
 ┃ ┣ Publisher.php
 ┃ ┣ Routes.php
 ┃ ┣ Routing.php
 ┃ ┣ Security.php
 ┃ ┣ Services.php
 ┃ ┣ Session.php
 ┃ ┣ Toolbar.php
 ┃ ┣ UserAgents.php
 ┃ ┣ Validation.php
 ┃ ┗ View.php
 ┣ Controllers
 ┃ ┣ BaseController.php
 ┃ ┣ Home.php
 ┃ ┗ Item.php
 ┣ Database
 ┃ ┣ Migrations
 ┃ ┃ ┗ .gitkeep
 ┃ ┗ Seeds
 ┃ ┃ ┗ .gitkeep
 ┣ Filters
 ┃ ┗ .gitkeep
 ┣ Helpers
 ┃ ┗ .gitkeep
 ┣ Language
 ┃ ┣ en
 ┃ ┃ ┗ Validation.php
 ┃ ┗ .gitkeep
 ┣ Libraries
 ┃ ┗ .gitkeep
 ┣ Models
 ┃ ┣ .gitkeep
 ┃ ┗ ItemModel.php
 ┣ ThirdParty
 ┃ ┗ .gitkeep
 ┣ Views
 ┃ ┣ errors
 ┃ ┃ ┣ cli
 ┃ ┃ ┃ ┣ error_404.php
 ┃ ┃ ┃ ┣ error_exception.php
 ┃ ┃ ┃ ┗ production.php
 ┃ ┃ ┗ html
 ┃ ┃ ┃ ┣ debug.css
 ┃ ┃ ┃ ┣ debug.js
 ┃ ┃ ┃ ┣ error_404.php
 ┃ ┃ ┃ ┣ error_exception.php
 ┃ ┃ ┃ ┗ production.php
 ┃ ┣ add_view.php
 ┃ ┣ edit_view.php
 ┃ ┣ footer_view.php
 ┃ ┣ header_view.php
 ┃ ┣ item_view.php
 ┃ ┗ welcome_message.php
 ┣ .htaccess
 ┣ Common.php
 ┗ index.html
