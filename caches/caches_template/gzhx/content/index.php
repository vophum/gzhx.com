<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
	
        
    <div class="main">
        <div class="moddle1">
            <div class="D_about">
                <h2 class="title" id="D_about_t">
                    <img src="<?php echo SKIN_PATH;?>images/aboutus.gif">
                    <a href="Aboutus.aspx" class="more"></a>
                </h2>
                <center>
               <img width="180" height="123" alt="" src="<?php echo SKIN_PATH;?>images/llll.png" />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ������������ó���޹�˾������2004�꣬��һ��רҵ���������ȶ�п�����豸���ȶ�п&ldquo;����&rdquo;�����豸���ȶ�пԭ���ϡ��Ƴ̻�ѧҩƷ���ȶ�п�����������滮��ƵĹ�˾�������۵��ȶ�п�豸�������ڹ�����ͬ��ҵ��������ɫ���������˾����̨�����йɷ����޹�˾ʮ����Ĺ���ó�׼�רҵ���̷����飬ּ��Ϊ����...
                </center>
            </div>
            <div class="D_down">
                <h2 class="title" id="H2_1">
                    <img src="<?php echo SKIN_PATH;?>images/donwn.gif">
                    <a href="Down.aspx" class="more"></a>
                </h2>
                <ul class="down_txt">
				
				
				   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f4a03a9cf1b45ea7590033315e09aaa&action=lists&catid=6&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">�༭</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'5',));}?>


                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                  
                            <li><span><?php echo date('Y-m-d',$r[inputtime]);?></span><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],40);?></a></li>
							
							
							                <?php $n++;}unset($n); ?>

                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

							
                        
              
                </ul>
            </div>
        </div>
        <div class="moddle2">
            <div class="D_prod">
                <h2 class="title" id="H2_2">
                    <img src="<?php echo SKIN_PATH;?>images/prod.gif">
                    <a href="Prod.aspx" class="more"></a>
                </h2>
                
<div class="rollBox rollBoxx">
                        <div class="Cont Contx" id="ISL_Conf3">
                            <div class="ScrCont">
                                <div id="Lisf5">
                                
                                    
									
									
									          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5c196fb4483427c55262a481196df88d&action=position&posid=12&thumb=1&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">�༭</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','order'=>'listorder DESC','limit'=>'6',));}?>


             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									
									  <ul class="pic">
                                        <li class="pic_img">
										
										<a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],110,0);?>" title="<?php echo $r['title'];?>"  width="139" height="99"/></a>

                                        </li>
                                    </ul>
                                  
								  
								                  <?php $n++;}unset($n); ?>

            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								  

			
				                 
                                </div>
                                <div id="Lisf6">
                                </div>
                            </div>
                        </div>  
                    </div>

            </div>
			
			 <script type="text/javascript" src="<?php echo SKIN_PATH;?>js/gundong2.js"></script>
			 
            <div class="D_contactus">
                <h2 class="title" id="H2_3">
                    <img src="<?php echo SKIN_PATH;?>images/conta.gif">
                </h2>
                <center>
              ��˾���ƣ�������������ó���޹�˾<br />
��ϵ��ַ�������п���������·138��<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�Ÿ������������0401��<br />
��ϵ�绰��0411-87562882<br />
��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;�棺0411-85912744<br />
��վ��ַ��http://www.yongsun.com.cn
                </center>
            </div>
        </div>
    </div>

        <div class="clear"></div>
		
<?php include template("content","footer"); ?>