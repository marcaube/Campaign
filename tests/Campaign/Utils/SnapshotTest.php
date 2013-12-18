<?php

use Campaign\Utils\Snapshot;

class SnapshotTest extends \PHPUnit_Framework_TestCase
{
    public function test_render_image()
    {
        $html = '<p style="color: orange;">bar</p>';

        $snappy = new Snapshot();

        $file = $snappy->render($html);

        $this->assertFileExists($file);
    }
}