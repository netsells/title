# Netsells Title

## Install

Pull this package in through Composer.

    {
        "require": {
        "netsells/title": "~0.5"
    }



Add the following to your `config/app.php`

    'providers' => [
        '...',
        'Radiula\Title\TitleServiceProvider'
    ];

    'aliases' => [
        '...',
        'Title' => 'Radiula\Title\Facades\Title',
    ];


## Usage
#### Set the site title

    Title::siteName('Acme Site');

#### Set one or more segments

    Title::segment('Foo', 'Bar');
     
#### Make the title

    Title::make();

#### Overriding the layout

    Title::layout('%s - %s');

#### Getting all segments

    Title::segments();

#### Overriding all segments

    Title::setSegments(['Foo', 'Bar']);

#### Return Last Segment

    Title::last();   

Running the `siteName` and `segment` methods with the above properties (and the default layout), would cause `make` to output the following

    Foo | Bar | Acme Site
