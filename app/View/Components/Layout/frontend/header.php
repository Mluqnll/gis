<?php

namespace App\View\Components\Layout\frontend;

use App\Models\Tempat;
use App\Models\Tentang;
use App\Models\Wilayah;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data['list_wilayah'] = Wilayah::all();
        $data['list_tempat'] = Tempat::all();
        $data['list_tentang'] = Tentang::all();
        // dd ($data);
        return view('components.layout.frontend.header',$data);
    }
}
