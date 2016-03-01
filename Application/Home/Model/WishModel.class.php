<?php
namespace Home\Model;
use Think\Model;
use Home\Model\User;
class WishModel extends Model {
	protected $_validate = array(
	);
	protected $_auto = array(
		array('wish_date', 'time', 1, 'function'),
			
	);
}
	