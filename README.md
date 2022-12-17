# BUILDA

A website that is used for content management, allowing multiple contributors to create, edit and publish. Content in it, is typically stored in a database and displayed in a presentation layer based on a set of templates like a website.

This application is designed to assist bloggers, individuals and business with little to no experience to build websites.


## Authors

- [@Oddisy](https://www.github.com/Oddisy) Frontend Developer
- [@Davidmilly](https://www.github.com/davidmilly) Frontend Developer
- [@nifemi2005](https://www.github.com/nifemi2005) Frontend Developer
- [@ig-matrix](https://www.github.com/ig-matrix) Frontend
- [@faves1](https://www.github.com/faves1) Backend Developer
- [@Nne85](https://www.github.com/Nne85) Backend Developer
- [@Directormichaels](https://github.com/Directormichaels)Fullstack Developer
- [@Hasoye](https://www.github.com/Hasoye) Product Design 
- [@designedbyzah](https://www.github.com/designedbyzah) Product Design
- [@Adexgolden](https://www.github.com/Adexgolden) Product Design
- [@Save9y2jk](https://www.github.com/Save9y2jk) Product Design
- [@Ayanfeoluwa27](https://www.github.com/Ayanfeoluwa27) Product Design
- [@Tewotolu](https://www.github.com/Tewotolu) Product Design
- [@DapoDapo123](https://www.github.com/DapoDapo123) Product Design
- [@Saliualiu](https://www.github.com/Saliualiu) Product Design
- [@lastmarine1](https://www.github.com/lastmarine1) Product Design

## Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.

Please adhere to this project's `code of conduct`.


## Features

Authenticated:
- Authorized users can to create more pages.
- Authorized users can make as much customization as possible.
- Authorized users can add Social media links.
- Authorized users Change templates and more.
- Authorized users can access the backend of created websites.
Unauthenticated:
- Unauthorized can sign up for an account.
- Unauthorized can access documentation.
- Unauthorized can setup a website by filling some information.
- Unauthorized user can view basic information about the built platform.
- Unauthorized can browse through templates.

## Tech Stack

**Frontend:** Html, Css, Javascript, React Bootstrap

**Backend:** PHP, SQL


## Documentation

[Documentation](https://docs.google.com/document/d/1aKMYtaRfMy-c7f18DOmX_mjUz4JnhUe35yrg9enxZCI/edit)


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Run Locally

Clone the project

```bash
git clone https://github.com/zuri-training/my_cms_TeamLapwing
```
$ git clone 
$ cd my_cms_TeamLapwing
For the other process download the zipped file, and download unzip the project using any unzipping software. Unzip into any directory in your PC and get access to the files



## Link to Data base Schema

[Database schema](https://drawsql.app/teams/teamlapwing/diagrams/database-schema)
## Link to mood board

[Mood Board](https://www.figma.com/file/iKGBXkuYVtosdZCMGT1tfb/MOODBOARD-%26-DESIGN-SKETCH%2F-TEAMLAPWING?node-id=0%3A1&t=I3cmObPcmEOWFdoA-1)


## Link to design sketch

[Design Sketch](https://www.figma.com/file/qnheylpBXbQmQ2vkhQkBjk/DESIGN-SKETCH%2F-TEAMLAPWING?node-id=0%3A1&t=SCH6G0SsfRsh286p-1)









## Project Structure
The directory structure of the project looks like this:
```
├── apps                   <- holds the base code for Builda(my_cms) 
|      |
|      └── console         <- contains all the project artisan commands.
|      └── exceptions      <- Builda(my_cms) exception handling files
|      └── http            <- holds different filters, requests, and controllers.
|      └── models          <- contains the model classes
|      └── providers       <-  contains all of the service providers for Builda(my_cms).
|
├── bootstrap              <- contains all the bootstrapping scripts
|
├── configs                <- Builda(my_cms) configuration file
|
├── database               <- Project database files
|
├── public                 <- starts project and maintains other necessary
|                              files such as JavaScript, CSS, and images of the project.
|
├── resources              <- holds all the Sass files, language (localization) files, and templates.
|
├── routes                 <- contains all the definition files for routing, 
|                              such as console.php, api.php, channels.php, etc.
|
├── storage                <- holds the session files, cache, compiled templates, 
|                             and miscellaneous files generated.
|
├── tests                  <- holds all the test cases.
|
├── .env.example              <- Example of file for storing private environment variables
|
├── .gitignore                <- List of files ignored by git
└── README.md
```

=======
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`

##### You can now access your project at localhost:8000 :)

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`



For the other process download the zipped file, and download unzip the project using any unzipping software. Unzip into any directory in your PC and get access to the files
