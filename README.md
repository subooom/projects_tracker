# Projects Manager

This is an soon to be open-sourced projects tracker, manager application, which helps you add projects and then define tasks, time frames, ERD, wire frames, get notified for each task, and if it's completed or not, the user will then modify the task completion details, or add extension period for the specific task.

## Getting Started


### Prerequisites

What things you need to install the software and how to install them.

```
1. PHP 7.2.5
2. MySQL hello
3. Composer
```

### Installing

Clone the repository.

```
git clone https://github.com/subooom/projects_tracker.git
```

Install dependencies

```
composer install
```

 Make a `.env` file from the `.env.example` and generate application key.

```
php artisan key:generate
```

Migrate all tables.

```
php artisan migrate
```

## Deployment


To deploy the the server, do the following.

```
php artisan serve
```

After that the application will be hosted on [https://localhost:8000](https://localhost:8000)


## Built With

* [Laravel](https://laravel.com/docs/7.x) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.


## Authors

* **Sushma Chaudhary** - *Initial work* - [ProjectsTracker](https://github.com/subooom/projects_tracker)
* **Subham Kharel** - *Initial work* - [ProjectsTracker](https://github.com/subooom/projects_tracker)

See also the list of [contributors](https://github.com/subooom/projects_tracker/contributors) who participated in this project.

## Acknowledgments

* Thanks to all the developers behind Laravel for making this project possible.
* The inspiration behind this project is the experiences with Tech companies and individuals alike who are having a hard time managing or committing to a project.
