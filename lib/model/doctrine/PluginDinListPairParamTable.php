<?php

/*
 * This file is part of the dinListPlugin package.
 * (c) DineCat, 2010 http://dinecat.com/
 * 
 * For the full copyright and license information, please view the LICENSE file,
 * that was distributed with this package, or see http://www.dinecat.com/din/license.html
 */

/**
 * Plugin class for performing query and update operations for DinListPairParam model table
 * 
 * @package     dinListPlugin
 * @subpackage  lib.model.doctrine
 * @author      Nicolay N. Zyk <relo.san@gmail.com>
 */
class PluginDinListPairParamTable extends dinDoctrineTable
{

    /**
     * Returns an instance of PluginDinListPairParamTable
     * 
     * @return  PluginDinListPairParamTable
     */
    public static function getInstance()
    {

        return Doctrine_Core::getTable( 'PluginDinListPairParam' );

    } // PluginDinListPairParamTable::getInstance()

} // PluginDinListPairParamTable

//EOF