<?php

declare(strict_types=1);

namespace Cycle\Annotated\Tests\Fixtures\Fixtures16;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;

class ExecutiveProxy extends Employee
{
    /** @Column(type="string") */
    #[Column(type: 'string', name: 'proxy')]
    public ?string $proxyFieldWithAnnotation = null;

    protected int $proxyField;
}
