Wordpress Development Stack
===========================

Installation
------------

### Clone this repo:
```bash
git clone https://github.com/Bogardo/Wordpress-Stack.git .
```

### Delete the `.git` file.
```bash
rm -rf .git
```

### Download latest version of WordPress
This will download the latest version of WordPress to `public/app`
```bash
php wpcli core download --locale=nl_NL
```

### Configure wp-cli.yml file 
Fill in the `title`, `url` and `admin_*` fields
```yaml
path: public/app/
core install:
  title: <site title>
  url: <site url (including http://)>
  admin_user: <admin username>
  admin_email: <admin email>
  admin_password: <admin password>

```

### Create development environment configuration file
This will create a new file at `config/environments/development.php`
```bash
php wpconf create development
```
Update `config/environments/development.php` to include database settings and enable debugging.

### Run installer
This will install WordPress
```bash
php wpcli core install
```

(optional) copy the contents of `public/app/wp-content` to your `public/content` directory.
```bash
cp -R public/app/wp-content/* public/content/
```