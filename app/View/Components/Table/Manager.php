<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;


class Manager extends Component
{
    public $ListData;
    public $columns;
    public $actions;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columns,$data,$actions)
    {
        //
        $this->columns = $columns;
        $this->ListData = $data;
        $this->actions = $actions;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.manager');
    }
}
