<?php
return array(
//��վ·��
'web_path' => '/gzhx.com/',
//Session����
'session_storage' => 'mysql',
'session_ttl' => 1800,
'session_savepath' => CACHE_PATH.'sessions/',
'session_n' => 0,
//Cookie����
'cookie_domain' => '', //Cookie ������
'cookie_path' => '', //Cookie ����·��
'cookie_pre' => 'LioSs_', //Cookie ǰ׺��ͬһ�����°�װ����ϵͳʱ�����޸�Cookieǰ׺
'cookie_ttl' => 0, //Cookie �������ڣ�0 ��ʾ�����������
//ģ���������
'tpl_root' => 'templates/', //ģ�屣������·��
'tpl_name' => 'gzhx', //��ǰģ�巽��Ŀ¼
'tpl_css' => 'default', //��ǰ��ʽĿ¼
'tpl_referesh' => 1,
'tpl_edit'=>1,//�Ƿ��������߱༭ģ��

//�����������
'upload_path' => PHPCMS_PATH.'uploadfile/',
'upload_url' => 'http://localhost/gzhx.com/uploadfile/', //����·��
'attachment_stat' => '1',//�Ƿ��¼����ʹ��״̬ 0 ͳ�� 1 ͳ�ƣ� ע��: �����ܻ���ط���������

'js_path' => 'http://localhost/gzhx.com/statics/js/', //CDN JS
'css_path' => 'http://localhost/gzhx.com/statics/css/', //CDN CSS
'img_path' => 'http://localhost/gzhx.com/statics/images/', //CDN img
'app_path' => 'http://localhost/gzhx.com/',//��̬�������õ�ַ

'charset' => 'gbk', //��վ�ַ���
'timezone' => 'Etc/GMT-8', //��վʱ����ֻ��php 5.1���ϰ汾��Ч����Etc/GMT-8 ʵ�ʱ�ʾ���� GMT+8
'debug' => 1, //�Ƿ���ʾ������Ϣ
'admin_log' => 0, //�Ƿ��¼��̨������־
'errorlog' => 1, //1�����������־�� cache/error_log.php | 0����ҳ��ֱ����ʾ
'gzip' => 1, //�Ƿ�Gzipѹ�������
'auth_key' => 'nuTy24CT9kxY60L85g0p', //��Կ
'lang' => 'zh-cn',  //��վ���԰�
'lock_ex' => '1',  //д�뻺��ʱ�Ƿ����ļ��������������ʹ��nfs����رգ�

'admin_founders' => '1', //��վ��ʼ��ID�����ID���ŷָ�
'execution_sql' => 0, //EXECUTION_SQL

'phpsso' => '1',	//�Ƿ�ʹ��phpsso
'phpsso_appid' => '1',	//Ӧ��id	
'phpsso_api_url' => 'http://localhost/gzhx.com/phpsso_server',	//�ӿڵ�ַ
'phpsso_auth_key' => 'MTIFSvTG5msgrOuRw8APBdHwKH5GpQqN', //������Կ
'phpsso_version' => '1', //phpsso�汾

'html_root' => '/html',//���ɾ�̬�ļ�·��
'safe_card'=>'1',//�Ƿ����ÿ��

'connect_enable' => '1',	//�Ƿ����ⲿͨ��֤
'sina_akey' => '',	//sina AKEY
'sina_skey' => '',	//sina SKEY

'snda_akey' => '',	//ʢ��ͨ��֤ akey
'snda_skey' => '',	//ʢ��ͨ��֤ skey

'qq_akey' => '',	//qq skey
'qq_skey' => '',	//qq skey

'qq_appkey' => '',	//QQ�����¼ appkey
'qq_appid' => '',	//QQ�����¼ appid
'qq_callback' => '',	//QQ�����¼ callback

'plugin_debug' => '0',
'admin_url' => '',	//������ʺ�̨������
);
?>