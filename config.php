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

$pages = array();

// This IS the order in which the pages will appear
$pages[] = './pages/welcome.html';
$pages[] = './pages/talks.html';
$pages[] = './pages/traffic.html';
$pages[] = './pages/lunch.html';
$pages[] = './pages/questions.html';
$pages[] = './pages/dents.html';
$pages[] = './pages/flickr.html';

define('DEFAULT_TIMEOUT', 15000); // in milliseconds
