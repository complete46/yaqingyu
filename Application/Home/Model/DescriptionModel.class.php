<?php
namespace Home\Model;
use Think\Model;

class DescriptionModel extends Model {
	protected $_validate = array(
		array('description', 'require', '描述不得为空！'),
		array('title', 'require', '标题不得为空！'),				
		array('description', 'length_description', '描述超出字数限制', 0, 'function'),
		array('title', 'length_title', '标题超出字数限制', 0, 'function')
	);
	protected $_auto = array(
			
	);
}
	