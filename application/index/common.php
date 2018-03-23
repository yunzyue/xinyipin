<?php 

/**
 *	前端统一返回信息
 * @param  [type] $code 标识值
 * @param  [type] $data 返回值
 * @param  [type] $msg  提示信息
 * @return [type]       返回数组格式
 */


function msg($code,$data,$msg)
{

	return compact('code','data','msg');
}


function p($data){
	// 定义样式
	$str='<pre style="display: block;padding: 9.5px;margin: 44px 0 0 0;font-size: 13px;line-height: 1.42857;color: #333;word-break: break-all;word-wrap: break-word;background-color: #F5F5F5;border: 1px solid #CCC;border-radius: 4px;">';
	// 如果是boolean或者null直接显示文字；否则print
	if (is_bool($data)) {
		$show_data=$data ? 'true' : 'false';
	}elseif (is_null($data)) {
		$show_data='null';
	}else{
		$show_data=print_r($data,true);
	}
	$str.=$show_data;
	$str.='</pre>';
	echo $str;
}