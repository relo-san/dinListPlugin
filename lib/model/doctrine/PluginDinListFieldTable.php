<?php

/*
 * This file is part of the dinListPlugin package.
 * (c) DineCat, 2010 http://dinecat.com/
 * 
 * For the full copyright and license information, please view the LICENSE file,
 * that was distributed with this package, or see http://www.dinecat.com/din/license.html
 */

/**
 * Plugin class for performing query and update operations for DinListField model table
 * 
 * @package     dinListPlugin
 * @subpackage  lib.model.doctrine
 * @author      Nicolay N. Zyk <relo.san@gmail.com>
 */
class PluginDinListFieldTable extends dinDoctrineTable
{

    /**
     * Returns an instance of PluginDinListFieldTable
     * 
     * @return  PluginDinListFieldTable
     */
    public static function getInstance()
    {

        return Doctrine_Core::getTable( 'PluginDinListField' );

    } // PluginDinListFieldTable::getInstance()

} // PluginDinListFieldTable

//EOF