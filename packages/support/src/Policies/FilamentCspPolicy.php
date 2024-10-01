<?php

namespace Filament\Support\Policies;

use Spatie\Csp\Policies\Basic;
use Spatie\Csp\Directive;

class FilamentCspPolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        $this
            ->addDirective(Directive::SCRIPT, ['self', 'unsafe-inline', 'unsafe-eval'])
            ->addDirective(Directive::STYLE, ['self', 'unsafe-inline'])
            ->addDirective(Directive::IMG, ['self', 'data:'])
            ->addDirective(Directive::FONT, 'self')
            ->addNonceForDirective(Directive::SCRIPT)
            ->addNonceForDirective(Directive::STYLE);
    }
}
