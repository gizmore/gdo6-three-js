<?php
namespace GDO\ThreeJS;

use GDO\Core\GDO_Module;
use GDO\Javascript\Module_Javascript;

/**
 * ThreeJS bindings for gdo6.
 * @author gizmore
 * @since 6.10.4
 */
final class Module_ThreeJS extends GDO_Module
{
    public $module_priority = 45;
    
    public function onIncludeScript()
    {
        $min = Module_Javascript::instance()->jsMinAppend();
        $this->addBowerJS("three/build/three{$min}.js");
    }

}
