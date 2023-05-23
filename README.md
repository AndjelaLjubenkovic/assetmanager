# Dokumentacija za Laravel aplikaciju - Asset Manager

Ova dokumentacija opisuje Laravel aplikaciju za upravljanje sredstvima (Asset Manager). Aplikacija omogućava praćenje i upravljanje opremom, kao što su računari, miševi, tastature i zaposleni koji koriste tu opremu.

**Instalacija
Klonirajte Git repozitorijum na lokalnu mašinu:
```
git clone https://github.com/vaš-repozitorijum/asset-manager.git
```
Pozicionirajte se u direktorijum projekta:
```
cd asset-manager
```
Instalirajte PHP zavisnosti pomoću Composer-a:
```
composer install
```
Kreirajte kopiju .env datoteke:
```
cp .env.example .env
```
Generišite ključ aplikacije:
```
php artisan key:generate
```
Konfigurišite bazu podataka u .env datoteci. Primer konfiguracije:
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=assetmanager
DB_USERNAME=root
DB_PASSWORD=
```
Izvršite migracije kako biste kreirali potrebne tabele:
```
php artisan migrate
```
Pokrenite razvojni server:
```
php artisan serve
```
Aplikacija će biti dostupna na http://localhost:8000.

## Struktura baze podataka
Aplikacija koristi MySQL bazu podataka, a sledeći su tabelarni prikazi strukture baze:

Tabela employees
|Kolona | Tip podatka |Napomena |
|-------|-------------|---------|
|employee_id|	bigint(20) UNSIGNED|	Primarni ključ|
|first_name	|varchar(255)|	Ime zaposlenog|
|last_name	|varchar(255)|	Prezime zaposlenog|
|created_at	|timestamp|	Datum kreiranja|
|updated_at	|timestamp|	Datum ažuriranja|

Tabela equipments
|Kolona | Tip podatka |Napomena |
|-------|-------------|---------|
|equipment_id|	bigint(20) UNSIGNED|	Primarni ključ|
|date	|date|	Datum|
|pc_id|	bigint(20) UNSIGNED	|ID računara|
|mouse_id|	bigint(20) UNSIGNED	|ID miša|
|keyboard_id	|bigint(20) UNSIGNED	|ID tastature|
|employee_id|	bigint(20) UNSIGNED	|ID zaposlenog|
|created_at|	timestamp|	Datum kreiranja|
|updated_at|	timestamp|	Datum ažuriranja|

Tabela keyboards
|Kolona | Tip podatka |Napomena |
|-------|-------------|---------|
|keyboard_id|	bigint(20) UNSIGNED	|Primarni ključ|
|name	|varchar(255)	|Naziv tastature|

Tabela mouses
|Kolona | Tip podatka |Napomena |
|-------|-------------|---------|
|mouse_id|	bigint(20) UNSIGNED	|Primarni ključ|
|name	|varchar(255)	|Naziv miša|

Tabela pcs
|Kolona | Tip podatka |Napomena |
|-------|-------------|---------|
|pc_id|	bigint(20) UNSIGNED	|Primarni ključ|
|name	|varchar(255)	|Naziv PC-a|



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
