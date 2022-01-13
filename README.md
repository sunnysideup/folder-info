Use the PHP file as required

you can independently use any of these calls as you see fit 
```php

$path = dirname(__FILE__);

echo '<h1>Count of Files</h1>';
echo Sunnysideup\FolderInfo\MyFolderInfo::CountOfFilesRaw($path);
echo ' OR ';
echo Sunnysideup\FolderInfo\MyFolderInfo::CountOfFilesHuman($path);

echo '<h1>Size of Files</h1>';
echo Sunnysideup\FolderInfo\MyFolderInfo::SizeOfFilesRaw($path);
echo ' OR ';
echo Sunnysideup\FolderInfo\MyFolderInfo::SizeOfFilesHuman($path);

echo '<h1>Last Updated</h1>';
echo Sunnysideup\FolderInfo\MyFolderInfo::LastUpdatedRaw($path);
echo ' OR ';
echo Sunnysideup\FolderInfo\MyFolderInfo::LastUpdatedHuman($path);

echo '<h1>Raw Data</h1>';
$data = Sunnysideup\FolderInfo\MyFolderInfo::Run($path);
print_r($data);
```

