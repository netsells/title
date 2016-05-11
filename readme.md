# Title Class
## How to install
There are four simple steps to install Title into Laravel 4:

1. Add `"netsells/title": "*"` to the `require` attribute of your `composer.json` *(requires you run `php composer.phar update` from the command line)*
2. Add `Netsells\Title\TitleServiceProvider` to the list of service providers in `app/config/app.php`
3. Add `'Title' => 'Netsells\Title\Facades\Laravel\Title'` to the list of class aliases in `app/config/app.php` *(optional)*

## How to use title.php
`Title::site_name('Demo Site')` will set the site name.

`Title::segment('Segment 1', 'Segment 2')` will set segments.

`Title::make()` will make and return the full title 

## Examples
### Example 1
Useful for setting all of the segments in one go.

    Title::site_name("Demo Site");
    Title::segment("Segment 1", "Segment 2");

`Title::make()` returns "Segment 1 - Segment 2 | Demo Site"

### Example 2
Useful for setting segments like "Editing Craig - Users" where "Users" can be set in the `__construct()` to prevent repeating code.

    Title::site_name("Demo Site");
    Title::segment("Segment 1");
    Title::segment("Segment 2");

`Title::make()` returns "Segment 2 - Segment 1 | Demo Site"

## Advanced
If you want to change the layout of the generated title, you can do so with the `Title::layout("%s [%n]")` method, where `%s` is the segments and `%n` is the sitename.

