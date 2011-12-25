<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Yanick Witschi 2010 
 * @author     Yanick Witschi <yanick.witschi@certo-net.ch> 
 * @package    videobox 
 * @license    LGPL 
 * @filesource
 */


/**
 * Table tl_videobox_settings
 */
$GLOBALS['TL_DCA']['tl_videobox_settings']['palettes']['default'] .= '{videomp3_legend},videomp3_template,videomp3_size;';


// Fields
$GLOBALS['TL_DCA']['tl_videobox_settings']['fields']['videomp3_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_videobox_settings']['videomp3_template'],
	'default'             	  => 'videobox_videomp3',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => $this->getTemplateGroup('videobox_'),
	'eval'					  => array('tl_class'=>'w50')
);
		
		
$GLOBALS['TL_DCA']['tl_videobox_settings']['fields']['videomp3_size'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_videobox_settings']['videomp3_size'],
	'default'			  	  => array(200,20),
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
);

?>