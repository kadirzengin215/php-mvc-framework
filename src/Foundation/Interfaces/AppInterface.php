<?php

declare(strict_types=1);

namespace Core\Foundation\Interfaces;

/**
 * AppInterface interface
 *
 * @author Kadir Zengin <kadirzengin215@gmail.com>
 */
interface AppInterface
{
    /**
     * App constructor
     */
    public function __construct(string $basePath);

    /**
     * Run the application
     */
    public function run(): void;

    /**
     * Get the base path of the application.
     */
    public function getBasePath(): string;

    /**
     * Sets the base path for the application.
     *
     * @param  string  $path  The base path to set
     */
    public function setBasePath(string $path): AppInterface;
}
