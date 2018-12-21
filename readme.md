
## Installation
To install, clone the repository to your preferred location on your machine:

```
$ git clone git@github.com:Jolaolu/CompanyManager.git CompanyManager
```

Next, `cd` to the directory of the CompanyManager  project.

```
$ cd yulo
```

Make a copy of the `.env.example` file and name it `.env`

```
$ cp .env.example .env
```

Generate a new application key using `artisan`

```
$ php artisan key:generate
```

Next, install the dependencies for the project using the following command:

```
$ composer install

```

Serve the project using `artisan`

```
$ php artisan serve
```

Then check it on http://localhost:8000

## Contributing

To contribute to the project, clone the repository and change to the `dev` branch:

```
$ git clone git@github.com:Jolaolu/CompanyManager.git CompanyManager
$ cd CompanyManager
$ git checkout dev
```

Next, create a new branch off the `dev` branch. The branch name must be descriptive of the contribution you are trying to make e.g `fix-some-feature`, `add-upload-feature`.

When you are in your branch, make your changes, with each change committed logically. When you are done, commit and merge your branch with the dev branch and push.
