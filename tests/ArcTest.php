<?php

declare(strict_types=1);

arch('globals')
    ->expect(['var_dump', 'dd', 'dump'])
    ->not->toBeUsed();
