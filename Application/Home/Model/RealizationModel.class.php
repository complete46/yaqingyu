<?php
namespace Home\Model;
use Think\Model;
use Home\Model\User;
class RealizationModel extends Model {
	protected $_validate = array(
	);
	protected $_auto = array(
		array('rl_date', 'time', 1, 'function'),		
	);
}
	