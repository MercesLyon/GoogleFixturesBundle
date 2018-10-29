Install
=======

    composer require merceslab/google-fixtures-bundle
    
Configuration
=============

    merces_lab_google_fixtures:
        credentials: '{}' # JSON string

Usage
=====

To export data to a Google Spreadsheet:

```php
<?php

use MercesLab\Component\GoogleFixtures\ExportClient;

class SomeService
{
    public function export(ExportClient $exportClient)
    {
        $exportClient->exportLine(['foo' => 'bar',], ['fileId' => 'myFile']);
    }
}
```

To import data from a Google Spreadsheet:

```php
<?php

use MercesLab\Component\GoogleFixtures\ImportClient;

class SomeService
{
    public function import(ImportClient $exportClient)
    {
        $data = $exportClient->importValues(['fileId' => 'myFile', 'range' => '\'Sheet1\'!A2:E9999']);
    }
}
```

Check the component documentation: https://github.com/MercesLyon/GoogleFixtures
