<?php
function sms_status($status = 0,$return_array = 0) {
	$array = array(
			'0'=>'���ͳɹ�',
			'1'=>'�ֻ�����Ƿ�',
			'2'=>'�û������ں������б�',
			'3'=>'�����û������������',
			'4'=>'��Ʒ���벻����',
			'5'=>'IP�Ƿ�',
			'6 '=>'Դ�������',
			'7'=>'�������ش���',
			'8'=>'��Ϣ���ȳ���60',
			'9'=>'���Ͷ������ݲ���Ϊ��',
			'10'=>'�û���������ͣ��ҵ��',
			'11'=>'wap���ӵ�ַ�������Ƿ�',
			'-1'=>'���շ��Ͷ��������������� 3 ��',
			'-2'=>'�ֻ��������',
			'-11'=>'�ʺ���֤ʧ��',
			'-10'=>'SNDA�ӿ�û�з��ؽ��',
		);
	return $return_array ? $array : $array[$status];
}

function checkmobile($mobilephone) {
		$mobilephone = trim($mobilephone);
		if(preg_match("/^13[0-9]{1}[0-9]{8}$|15[01236789]{1}[0-9]{8}$|18[01236789]{1}[0-9]{8}$/",$mobilephone)){  
 			return  $mobilephone;
		} else {    
			return false;
		}
		
}