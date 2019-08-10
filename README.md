# TYPO3 CMS Project Bootstrap

Get going quickly with TYPO3 CMS.

## Prerequisites

* PHP 7
* composer (<https://getcomposer.org/download/>)
* ISPConfig web folder structure

## Quickstart

* `cd /var/www/[website]/private`
* `su [user, e.g. webX]`
* `composer create-project gilbertsoft/typo3-bootstrap typo3 dev-[project]`
* `cd typo3`

**Setup:**

To start an interactive installation, you can do so by executing the following
command and then follow the wizard:

```bash
php[used PHP version, e.g. 7.2] vendor/bin/typo3cms install:setup
```

**Setup unattended (optional):**

If you're a more advanced user, you might want to leverage the unattended installation.
To do this, you need to execute the following command and substite the arguments
with your own environment configuration.

```bash
php[used PHP version, e.g. 7.2] vendor/bin/typo3cms install:setup \
    --non-interactive \
    --database-user-name=typo3 \
    --database-user-password=typo3 \
    --database-host-name=127.0.0.1 \
    --database-port=3306 \
    --database-name=typo3 \
    --use-existing-database \
    --admin-user-name=admin \
    --admin-password=password \
    --site-setup-type=site
```

## Updates

### 2019-06-29

* change Backend Layouts from `Clean` to `Default`
* run `Upgrade Wizard` in `Install tool`
* clear all caches in `Install tool`
* run Aimeos Update script

## License

GPL-3.0 or later
