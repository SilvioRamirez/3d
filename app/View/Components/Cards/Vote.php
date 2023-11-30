<?php

namespace App\View\Components\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Vote extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $municipio = '',

        public string $votantes = '',
        public string $epe = '',
        public string $epm = '',
        public string $epp = '',
        public string $jovenComunidad = '',
        public string $jovenUbch = '',

        public string $votantesRegistrados = '',
        public string $porcentajeRep = '',
        public string $votantesEstructura = '',
        public string $date = '',

        public string $votantesEpe = '',
        public string $votantesEpm = '',
        public string $votantesEpp = '',
        public string $votantesComunidad = '',
        public string $votantesUbch = '',

    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.vote');
    }
}
