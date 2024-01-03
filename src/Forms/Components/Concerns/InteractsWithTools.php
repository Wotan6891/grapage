<?php

namespace Ekremogul\FilamentGrapesjs\Forms\Components\Concerns;

trait InteractsWithTools
{
    public function getTools(): array
    {
        return $this->evaluate($this->tools);
    }
}
