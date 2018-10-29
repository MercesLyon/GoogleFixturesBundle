Install
=======

    composer require merceslab/google-fixtures-bundle
    
Configuration
=============

    merces_lab_google_fixtures:
        google_credentials: '{}' # JSON string

Usage
=====

Examples are in Controllers because it's easier to show services injection.

To export data to a Google Spreadsheet:

```php
<?php

use MercesLab\Component\GoogleFixtures\ExportClient;

class SomeController
{
    public function exportAction(ExportClient $exportClient)
    {
        $exportClient->exportLine(['foo' => 'bar',], ['fileId' => 'myFile']);
    }
}
```

To import data from a Google Spreadsheet:

```php
<?php

use MercesLab\Component\GoogleFixtures\ImportClient;

class SomeController
{
    public function exportAction(ImportClient $exportClient)
    {
        $data = $exportClient->importValues(['fileId' => 'myFile', 'range' => '\'Sheet1\'!A2:E9999']);
    }
}
```

Check the component documentation: https://github.com/MercesLyon/GoogleFixtures
