# File Manager
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/6e342eff10f24db5b89be5fe203e424d)](https://www.codacy.com/app/laravel-enso/FileManager?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=laravel-enso/FileManager&amp;utm_campaign=Badge_Grade)
[![StyleCI](https://styleci.io/repos/85492361/shield?branch=master)](https://styleci.io/repos/85492361)
[![Total Downloads](https://poser.pugx.org/laravel-enso/filemanager/downloads)](https://packagist.org/packages/laravel-enso/filemanager)
[![Latest Stable Version](https://poser.pugx.org/laravel-enso/filemanager/version)](https://packagist.org/packages/laravel-enso/filemanager)

File manager dependency for [Laravel Enso](https://github.com/laravel-enso/Enso).

### Details
- can upload one or multiple files
- includes a VueJS component that handles the selection of files and POSTs them to the route you need
- the FileUploader object manages the upload of the files 
- the FileManager object manages the actual file operations and can be configured with a file storage location, a temporary storage as well as a (laravel) disk and 

### Publishes

- `php artisan vendor:publish --tag=filemanager-component` - the VueJS component
- `php artisan vendor:publish --tag=enso-update` - a common alias for when wanting to update the VueJS component, 
once a newer version is released

### Note

This package is included in [Laravel Enso Core](https://github.com/laravel-enso/Core).

### Contributions

are welcome