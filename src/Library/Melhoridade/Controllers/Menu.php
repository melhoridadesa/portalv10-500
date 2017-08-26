<?php

namespace Library\Melhoridade\Controllers;

use Library\Melhoridade\Model\Menu as ModelMenu;

class Menu extends ModelMenu
{
    public function getData()
    {
        return $this->data();
    }
}