<?php

declare(strict_types=1);

namespace Core\Foundation;

use Core\Foundation\Interfaces\AppInterface;

/**
 * App class
 *
 * @author Kadir Zengin <kadirzengin215@gmail.com>
 */
class App implements AppInterface
{
    /**
     * The base path of the application.
     */
    protected string $basePath = __DIR__;

    public function __construct(string $basePath)
    {
        $this->setBasePath($basePath);
    }

    /**
     * {@inheritDoc}
     */
    public function run(): void
    {
        // TODO: Implement run() method.
    }

    /**
     * {@inheritDoc}
     */
    public function getBasePath(): string
    {
        return $this->basePath;
    }

    /**
     * {@inheritDoc}
     */
    public function setBasePath(string $path): AppInterface
    {
        $this->basePath = rtrim(str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $path), DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR;

        return $this;
    }
}
