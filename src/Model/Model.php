<?php

namespace Augwa\QuickBooks\Model;

use Minime\Annotations;

/**
 * Class Model
 * @package Augwa\QuickBooks\Accounting\Model\Base
 */
abstract class Model
{

    /**
     * ModificationMetaData constructor.
     *
     * @param array $data
     */
    public function __construct(
        array $data = []
    )
    {
        // TODO: allow configuration of cache method
        $reader = new Annotations\Reader(
            new Annotations\Parser,
            new Annotations\Cache\FileCache(
                $this->getAnnotationCachePath()
            )
        );

        foreach ($data as $key => $value) {
            $setMethod = 'set' . $key;
            if (method_exists($this, $setMethod)) {
                $getMethod = 'get' . $key;
                $type = $reader->getMethodAnnotations($this, $getMethod)
                    ->get('return')
                ;
                switch ($type) {
                    case '\DateTime':
                        $this->$setMethod(new \DateTime($data[$key]));
                        break;
                    default:
                        $this->$setMethod($data[$key]);
                        break;
                }
            }
        }
    }

    /**
     * @return string
     */
    private function getAnnotationCachePath()
    {
        $rootPath = substr(
            __DIR__,
            0,
            strpos(
                __DIR__,
                DIRECTORY_SEPARATOR .
                'src' .
                DIRECTORY_SEPARATOR
            )
        );

        $path =
            $rootPath .
            DIRECTORY_SEPARATOR .
            '.cache' .
            DIRECTORY_SEPARATOR .
            'annotations' .
            DIRECTORY_SEPARATOR;

        if (false === is_dir($path)) {
            mkdir($path, 0755, true);
        }

        return $path;
    }

}