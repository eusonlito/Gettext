Gettext
=====

This script works as simple interface to load and print gettext translations

Usage
--------
    <?php
    include (__DIR__.'/libs/ANS/Gettext/Gettext.php');
    include (__DIR__.'/libs/ANS/Gettext/functions.php');

    $Gettext = new \ANS\Gettext\Gettext;

    $Gettext->setPath(__DIR__.'/languages/');

    # if yours languages files are into folders (languages/en/gettext.mo, languages/es/gettext.mo)
    $Gettext->init();

    # else if yours languages files are files (languages/en.mo, languages/es.mo)
    $Gettext->init(true);

    $Gettext->setLanguage('en');

    # now you can execute gettext print functions
    # return string
    echo __('Hi! This text (translated or not)');

    # prints directly
    __e('Another text :)');

    # Added language cookie store
    # https://github.com/eusonlito/Cookie
    include (__DIR__.'/libs/ANS/Cookie/Cookie.php');

    $Cookie = new \ANS\Cookie\Cookie;

    $Cookie->setSettings(array(
        'name' => 'language'
    ));

    $Gettext = new \ANS\Gettext\Gettext;

    $Gettext->setPath(__DIR__.'/languages/');
    $Gettext->setCookie($Cookie, 'language');
    $Gettext->setDefaultLanguage('en');

    # if yours languages files are into folders (languages/en/gettext.mo, languages/es/gettext.mo)
    $Gettext->init();

    # else if yours languages files are files (languages/en.mo, languages/es.mo)
    $Gettext->init(true);

    # update language
    if (isset($_GET['language'])) {
        $Gettext->setLanguage($_GET['language'], true);
    }
