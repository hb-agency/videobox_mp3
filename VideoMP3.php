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
 * Class YouTube 
 *
 * @copyright  Yanick Witschi 2010 
 * @author     Yanick Witschi <yanick.witschi@certo-net.ch> 
 * @package    Controller
 */
class VideoMP3 extends Frontend
{
	/**
	 * MP3 URL
	 * @var string
	 */
	public $strVideomp3URL = '';
	
	/**
	 * Youtube URL
	 * @var string
	 */
	public $strTemplate = '';
	
	/**
	 * Data array
	 * @var array
	 */
	public $arrData = array();
	
	/**
	 * Parse the array data and prepare for the Youtube video
	 * @param array
	 * @return array
	 */
	public function parseVideo($arrDBData)
	{
		$this->import('String');
		
		// set template
		$this->strTemplate = (strlen($arrDBData['videomp3_template'])) ? $arrDBData['videomp3_template'] : 'videobox_videomp3';
		
		$this->arrData['id'] = 'video_' . $arrDBData['videoid'] . '_' . md5(uniqid(mt_rand(), true));
		$this->arrData['timestamp'] = $arrDBData['tstamp'];
		$this->arrData['video_title'] = $arrDBData['videotitle'];
		$this->arrData['archive_title'] = $arrDBData['title'];
		
		// size
		if(!strlen($arrDBData['videomp3_size']))
		{
			$arrSize = array(200,20);
		}
		else
		{
			$arrSize = deserialize($arrDBData['videomp3_size']);
		}
		
		$this->arrData['width'] = $arrSize[0];
		$this->arrData['height'] = $arrSize[1];
		
		if(!$arrDBData['singleSRC'] && !$arrDBData['url'])
		{
			return '';
		}
		
		$this->strVideomp3URL = ($arrDBData['url'] ? $arrDBData['url'] : $arrDBData['singleSRC']);
		
		$this->arrData['videomp3link'] = $this->strVideomp3URL;

		// usability
		$this->arrData['noscript'] = $this->String->decodeEntities(sprintf($GLOBALS['TL_LANG']['VideoBox']['videomp3_noscript'], $arrDBData['videotitle']));
		$this->arrData['noflash'] = $this->String->decodeEntities(sprintf($GLOBALS['TL_LANG']['VideoBox']['videomp3_noflash'], $arrDBData['videotitle']));

		// Template
		$objTemplate = new FrontendTemplate($this->strTemplate);
		$objTemplate->setData($this->arrData);
		return $objTemplate->parse();
	}
}

?>