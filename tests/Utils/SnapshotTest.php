<?php

namespace Campaign\Tests\Utils;

use Campaign\Utils\Snapshot;

class SnapshotTest extends \PHPUnit_Framework_TestCase
{
    public function test_render_image()
    {
        $binaryPath = '/usr/local/bin/wkhtmltoimage';

        if (!file_exists($binaryPath)) {
            $this->markTestSkipped(
                'The wkhtmltoimage binary is not available.'
            );
        }

        $html = '<p style="color: orange;">bar</p>';

        $snappy = new Snapshot('/tmp/', $binaryPath);

        $file = $snappy->render($html);

        $this->assertFileExists('/tmp/' . $file);
    }
}
