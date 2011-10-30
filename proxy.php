<?php
/**
 * Copyright (C) 2011 Patrik Willard
 *                                                                   
 * This program is free software; you can redistribute it and/or     
 * modify it under the terms of the GNU General Public License       
 * as published by the Free Software Foundation; either version 3    
 * of the License, or any later version.                             
 *                                                                   
 *                                                                   
 * This program is distributed in the hope that it will be useful,   
 * but WITHOUT ANY WARRANTY; without even the implied warranty of    
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the     
 * GNU General Public License for more details.                      
 *                                                                   
 * You should have received a copy of the GNU General Public License 
 * along with this program; if not, write to the Free Software       
 * Foundation, Inc., 51 Franklin Street, Boston,            
 * MA  02110-1301, USA.
 */

session_start();
require_once('./config.php');

$foundPages = glob("./pages/*.html");
$slides = array();

foreach ($pages as $page)
{
    if ( in_array($page, $foundPages) )
    {
        $slides[] = $page;
    }
}

if ( !isset($_SESSION['pageIndex'])
     || !is_int($_SESSION['pageIndex']) 
     || !isset($_SESSION['pageCount'])
     || !is_int($_SESSION['pageCount']) )
{
    $_SESSION['pageIndex'] = 0;
    $_SESSION['pageCount'] = count($slides);
}

if ( count($slides) !== $_SESSION['pageCount'] )
{
    $_SESSION['pageCount'] = count($slides);
}

if ( $_SESSION['pageIndex'] >= $_SESSION['pageCount'] )
{
    $_SESSION['pageIndex'] = 0;
}

setcookie('pageNumber', $_SESSION['pageIndex'] + 1, 0);
setcookie('pageCount', $_SESSION['pageCount'], 0);
setcookie('pageDefaultTimeout', DEFAULT_TIMEOUT);


$pagePath = $slides[$_SESSION['pageIndex']];
$_SESSION['pageIndex']++;

echo file_get_contents($pagePath);
exit(0);
