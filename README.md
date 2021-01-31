# Voyager Migration Generator

This package listens for database schema changes done through Laravel Voyager and generates migrations for them.

Based on [Generate Migrations Voyager Hook](https://github.com/mohammed-io/generate-migrations-hook) by @mohammed-io

Original author's comment:

> I like using Laravel Voyager, it really handles all the headache of creating the CRUD UI of the application,
> because I use Voyager for most of my small projects, there's one thing bothers me when it comes to using it, **database**!
>
> Because it updates the database in place, so there's no migration created, this is an issue if you made change and want to deploy it to your remote host, that's why I tried to make this little hook to handle the automatic creation of migrations.

Since this version is no longer a hook, it's installed as any other package:

```bash
composer require izarmx/voyager-migration-generator --dev
```

The reasoning behind not using it as a hook is that [larapack.io](larapack.io) don't seem to allow creating new hooks with the new composer's package name convention: `<vendor>/<package-name>`, thus, some hooks are no longer compatible with Composer v2.0.
And personally, I'm not sure what's the advantage to having to manage hooks with multiple commands like `install` and `enable/disable`.

## Todo

[ ] Write tests

## Limitations

- No `down()` migration, only `up()`
- The file and class names are not very detailed.
- It generates a migration even if no actual changes happened to the table.
- You can't change the vendor (means if mysql should stay mysql) because there's vendor specific data types.
