<?php
/**
 * This file is part of NoiseLabs-SmartyPlugins
 *
 * NoiseLabs-SmartyPlugins is free software; you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * NoiseLabs-SmartyPlugins is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with NoiseLabs-SmartyPlugins; if not, see
 * <http://www.gnu.org/licenses/>.
 *
 * Copyright (C) 2012 Vítor Brandão
 *
 * @category    NoiseLabs
 * @package     SmartyPlugins
 * @author      Vítor Brandão <noisebleed@noiselabs.org>
 * @copyright   (C) 2012 Vítor Brandão <noisebleed@noiselabs.org>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL-3
 * @link        http://www.noiselabs.org
 * @since       0.1.0
 */

namespace NoiseLabs\SmartyPlugins\Package;

interface PackageInterface
{
    /**
    * Returns a list of  to add to the existing list.
    *
    * @return array An array of 
    *
    * @since  0.1.0
    * @author Vítor Brandão <noisebleed@noiselabs.org>
    */
    function get();

    /**
     * Returns a list of Filters to add to the existing list.
     *
     * @return array An array of Filters
     *
     * @since  0.1.0
     * @author Vítor Brandão <noisebleed@noiselabs.org>
     */
    function getFilters();

    /**
     * Returns a list of Globals to add to the existing list.
     *
     * @return array An array of Globals
     *
     * @since  0.1.0
     * @author Vítor Brandão <noisebleed@noiselabs.org>
     */
    function getGlobals();

    /**
     * Returns the name of the package.
     *
     * @return string The package name
     */
    function getName();
}