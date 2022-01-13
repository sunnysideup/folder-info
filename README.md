Use the PHP file as required

you can independently use any of these calls as you see fit 
```php

$path = dirname(__FILE__);

echo '<h1>Count of Files</h1>';
echo Sunnysideup\FolderInfo\MyFolderInfo::countOfFilesRaw($path);
echo ' OR ';
echo Sunnysideup\FolderInfo\MyFolderInfo::countOfFilesHuman($path);

echo '<h1>Size of Files</h1>';
echo Sunnysideup\FolderInfo\MyFolderInfo::sizeOfFilesRaw($path);
echo ' OR ';
echo Sunnysideup\FolderInfo\MyFolderInfo::sizeOfFilesHuman($path);

echo '<h1>Last Updated</h1>';
echo Sunnysideup\FolderInfo\MyFolderInfo::lastUpdatedRaw($path);
echo ' OR ';
echo Sunnysideup\FolderInfo\MyFolderInfo::lastUpdatedHuman($path);

echo '<h1>Raw Data</h1>';
$data = Sunnysideup\FolderInfo\MyFolderInfo::run($path);
print_r($data);
```

