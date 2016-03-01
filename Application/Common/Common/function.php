<?php

function filled_out($form_vars) {
	// test that each variable has a value
	foreach ($form_vars as $key => $value) {
		if ((!isset($key)) || ($value == '')) {
			return false;
		}
	}
	return true;
}

function valid_email($address) {
	if (preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $address))
		return true;
	else
		return false;
}

function valid_username($name){
	if(preg_match("/^[\u4E00-\u9FA5\uf900-\ufa2d]{2,8}$/",$name))
		return true;
	else
		return false;
}

function valid_psw($psw){
	if(preg_match("/^[a-zA-Z0-9]{6,18}$/",$psw))
		return true;
	else
		return false;
}

function valid_amount($amount){
	if(preg_match("/^[1-9][0-9]{0,4}$/",$amount))
		return true;
	else
		return false;
}

function valid_number($n){
	if(preg_match("/^[0-9]{0,4}$/",$n))
		return true;
	else
		return false;
}

function valid_idcard($id){
	if(preg_match("/^\d{15}(\d{2}[A-Za-z0-9])?$/",$id))
		return true;
	else
		return false;
}

function valid_passport($id){
	if(preg_match("/^1[45][0-9]{7}|G[0-9]{8}|P[0-9]{7}|S[0-9]{7,8}|D[0-9]$/",$id))
		return true;
	else
		return false;
}

function valid_major($major){
	if(preg_match("/^[\u4E00-\u9FA5\uf900-\ufa2d\sa-zA-Z]{2,50}$/",$major))
		return true;
	else
		return false;
}


