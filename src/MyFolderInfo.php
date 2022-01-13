<?php

namespace Sunnysideup\FolderInfo;


class MyFolderInfo {

    protected static $data = [];

    public static function lastUpdatedRaw (string $path) : int
    {
        $data = self::run($path);

        return $data['lastUpdated'] ?? 0;
    }

    public static function lastUpdatedHuman ($path) : string
    {
        $data = self::run($path);

        return date('Y-m-d H:i', self::LastUpdatedRaw($path));
    }

    public static function sizeOfFilesRaw ($path) : int
    {
        $data = self::run($path);

        return $data['size'] ?? -1;
    }

    public static function sizeOfFilesHuman (string $path) : string
    {
        $data = self::run($path);

        return self::HumanFileSize(self::SizeOfFilesRaw($path));
    }

    public static function countOfFilesRaw (string $path) : int
    {
        $data = self::run($path);

        return $data['count'] ?? -1;
    }

    public static function countOfFilesHuman (string $path) : string
    {
        $data = self::run($path);

        return number_format(self::CountOfFilesRaw($path));
    }

    public static function run (string $path) : array
    {
        $path = realpath($path);
        if(! isset(self::$data[$path])) {
            self::$data[$path] = [
                'size' => 0,
                'count' => 0,
                'lastUpdated' => filemtime($path)
            ];
            if(is_file($path)) {
                self::$data[$path]['size'] = filesize($path);
                self::$data[$path]['count'] = 1;
            } else {
                foreach (glob(rtrim($path, '/').'/*', GLOB_NOSORT) as $each) {
                    $innerData = self::run($each);
                    self::$data[$path]['size'] += $innerData['size'];
                    self::$data[$path]['count'] += $innerData['count'];
                }
            }
        }
        return self::$data[$path];
    }

    public static function humanFileSize($bytes, $decimals = 2) : string
    {
        $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
    }
}
