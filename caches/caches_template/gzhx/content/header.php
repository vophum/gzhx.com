<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />

<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">

<link href="<?php echo SKIN_PATH;?>CSS/reset.css" rel="stylesheet" type="text/css" />

<link href="<?php echo SKIN_PATH;?>CSS/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<div>

</div>

   <div class="header_bg">
    <div class="header">
        <h1></h1>
        <div class="top_r">
            <ul class="top_box">
                <li><a href="">English</a></li>
                <li><a href="../../index.aspx">中文版　|</a></li>
                <li><img src="<?php echo SKIN_PATH;?>images/home.gif"><a href="javascript:void(0)" onclick="return setHomepage();">设为首页</a></li>
                <li><img src="<?php echo SKIN_PATH;?>images/sho.gif"><a href="javascript:void(0)" onclick="AddFavorite(window.location,document.title)">加为收藏</a></li>
              
            </ul>
            <ul class="nav">
			
			
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0abeb9912004474879e777dd9e6b6af6&action=category&catid=0&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
  
			<li><a href="<?php echo siteurl($siteid);?>">首页</a></li>
			
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

			<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
			
			<?php $n++;}unset($n); ?>

        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			

				
            </ul>
        </div>
    </div>
    </div>
    <div class="banner_bg">
        <div class="banner">
          
<SCRIPT type=text/javascript>
        <!--
        var focus_width=961//图片宽        
		var focus_height=345//图片高        
		var text_height=0//设置显示文字标题高度,最佳为20（如果不显示标题值设为0即可）        
		var swf_height = focus_height+text_height
        //var pics=""
        //var links=""
        //var texts=""
	var pics='<?php echo SKIN_PATH;?>images/bigger20120820112221.jpg|<?php echo SKIN_PATH;?>images/bigger20120810100220.jpg|<?php echo SKIN_PATH;?>images/bigger20120803095757.jpg'
	var links='#|#|#'
	var texts='||'

        document.write('<object ID="focus_flash" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
        document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="<?php echo SKIN_PATH;?>flash/adplay.swf"><param name="quality" value="high"><param name="bgcolor" value="#fff">');
        document.write('<param name="menu" value="false"><param name=wmode value="transparent">');
        document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
        document.write('<embed ID="focus_flash" src="<?php echo SKIN_PATH;?>flash/adplay.swf" wmode="transparent" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#fff" quality="high" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');document.write('</object>'); 
        //-->
</SCRIPT>
        </div>
    </div>
	