<?php

namespace App\Tests\Command;

use App\Command\ImportCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Finder\Finder;

class ImportCommandTest extends KernelTestCase
{
    /**
     * @var ImportCommand
     */
    private $importCommand;

    protected function setUp(): void
    {
        $container = static::getContainer();
        $this->importCommand = $container->get('App\Command\ImportCommand');
    }

    public function testGetExternalResources()
    {
        foreach ($this->importCommand->externalResources as $externalResource) {
            switch ($externalResource['type']) {
                case 'articulos':
                case 'catalog':
                    $response = $this->importCommand->getFromAPI($externalResource['src']);
                    $this->assertSame(200, $response->getStatusCode());
                    break;
                case 'productos':
                    $finder = new Finder();
                    $files = $finder->in($externalResource['src']);
                    $this->assertIsIterable($files);
                    foreach ($files as $file) {
                        $this->assertIsString($file->getContents());
                    }
                    break;
            };

        }
    }
}
