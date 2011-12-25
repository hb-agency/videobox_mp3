-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_videobox`
-- 

CREATE TABLE `tl_videobox` (
  `singleSRC` varchar(255) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_videobox_settings`
-- 

CREATE TABLE `tl_videobox_settings` (
  `videomp3_template` varchar(64) NOT NULL default '',
  `videomp3_size` varchar(64) NOT NULL default '',
) ENGINE=MyISAM  CHARSET=utf8;
