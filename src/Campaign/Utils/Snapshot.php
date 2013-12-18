<?php

namespace Campaign\Utils;

use Knp\Snappy\Image;

class Snapshot
{
    /**
     * @var string
     */
    private $folder;

    public function __construct($folder = null)
    {
        $this->folder = $folder;
    }

    /**
     * @param string $html
     * @param null   $fileName
     *
     * @return string
     */
    public function render($html, $fileName = null)
    {
        if (null == $fileName) {
            $fileName = uniqid() . '.jpg';
        }

        $snappy = new Image(__DIR__ . '/../../../vendor/h4cc/wkhtmltoimage-amd64/bin/wkhtmltoimage-amd64');

        $snappy->generateFromHtml($html, $this->folder . $fileName);

        return $fileName;
    }
}