Use the PHP file as required

you can independently use any of these calls as you see fit
```php

$path = dirname(__FILE__) . '/../';
$path = realpath($path);

include $path .'/src/MyFolderInfo.php';
use Sunnysideup\FolderInfo\MyFolderInfo;

echo '<h1>Count of Files '.$path.'</h1>';
echo MyFolderInfo::countOfFilesRaw($path);
echo ' OR ';
echo MyFolderInfo::countOfFilesHuman($path);

echo '<h1>Size of Files '.$path.'</h1>';
echo MyFolderInfo::sizeOfFilesRaw($path);
echo ' OR ';
echo MyFolderInfo::sizeOfFilesHuman($path);

echo '<h1>Last Updated '.$path.'</h1>';
echo MyFolderInfo::lastUpdatedRaw($path);
echo ' OR ';
echo MyFolderInfo::lastUpdatedHuman($path);

echo '<h1>Raw Data '.$path.'</h1>';
$data = Sunnysideup\FolderInfo\MyFolderInfo::run($path);
print_r($data);


```
