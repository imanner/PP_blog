<?php
/************************************************************
** @Description: file
** @Author: george
** @Date:   2018-04-11 13:36:30
** @Last Modified by:   george
** @Last Modified time: 2018-04-11 13:36:50
*************************************************************/
class Article_tag_model extends MY_Model
{
	protected $_table;
	/**
	 * [__construct 初始化方法]
	 */
	public function __construct()
	{
		parent::__construct();
		$this->_table = 'pp_article_tag';
	}
}