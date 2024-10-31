<?php
/*
    Plugin Name: SEO friendly and HTML valid subheadings
    Plugin URI: http://mark-kirby.co.uk/2009/seo-friendly-and-html-valid-subheadings-a-wordpress-plugin/
    Description: For optimal SEO on archive/tag/category pages turns any H2 into H3, H3 into H4, H4 into H5, H5 into H6 and H6 into P.headingSix.
    Author: Ribot
    Version: 1.0
    Author URI: http://ribot.co.uk/

/*  Copyright 2008  RIBOT  (email : antony@ribot.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function heading_replacement_filter_headings($content) {
	
	//start at the last heading, otherwise each replacement will overwrite the previous
	
	$headings[0][0]['find'] = "<H6>";
    $headings[0][0]['replace'] = "<P class='headingSix'>";
    $headings[0][1]['find'] = "</H6>";
    $headings[0][1]['replace'] = "</P>";

    $headings[1][0]['find'] = "<H5>";
    $headings[1][0]['replace'] = "<H6>";
    $headings[1][1]['find'] = "</H5>";
    $headings[1][1]['replace'] = "</H6>";

    $headings[2][0]['find'] = "<H4>";
    $headings[2][0]['replace'] = "<H5>";
    $headings[2][1]['find'] = "</H4>";
    $headings[2][1]['replace'] = "</H5>";

    $headings[3][0]['find'] = "<H3>";
    $headings[3][0]['replace'] = "<H4>";
    $headings[3][1]['find'] = "</H3>";
    $headings[3][1]['replace'] = "</H4>";

    $headings[4][0]['find'] = "<H2>";
    $headings[4][0]['replace'] = "<H3>";
    $headings[4][1]['find'] = "</H2>";
    $headings[4][1]['replace'] = "</H3>";

 	for ($i=0; $i < count($headings); $i++) {
 		$content=str_ireplace($headings[$i][0]['find'],$headings[$i][0]['replace'],$content);
 		$content=str_ireplace($headings[$i][1]['find'],$headings[$i][1]['replace'],$content);
 	}
	
	return $content;
}
?>
