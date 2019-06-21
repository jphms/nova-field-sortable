<?php

namespace Naxon\NovaFieldSortable;

use Laravel\Nova\Fields\Field;

class Sortable extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-field-sortable';
    
    public $showOnCreation = false;
    
    public $showOnUpdate = false;
}
