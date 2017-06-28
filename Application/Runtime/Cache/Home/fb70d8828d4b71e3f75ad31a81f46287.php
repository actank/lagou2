<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
    
    <head>
        <script id="allmobilize" charset="utf-8" src="/Public/HomeStyle/js/allmobilize.min.js">
        </script>
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="alternate" media="handheld" />
        <!-- end 云适配 -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            内容运营-立方网-拉勾网-最专业的互联网招聘平台
        </title>
        <meta property="qc:admins" content="23635710066417756375" />
        <meta content="内容运营 武汉 本科 3-5年 全职 运营 大家都来了 你还在等什么！！ 立方网 北京立方网信息技术有限公司 立方网努力尝试把许多人对互联网的需求从现有的娱乐、资讯和交流平台进一步引导到文化与生活伴侣的方面. 拉勾网-最专业的互联网招聘平台"
        name="description">
        <meta content="内容运营 武汉 本科 3-5年 全职 运营 大家都来了 你还在等什么！！ 立方网 北京立方网信息技术有限公司 立方网努力尝试把许多人对互联网的需求从现有的娱乐、资讯和交流平台进一步引导到文化与生活伴侣的方面. 拉勾网-最专业的互联网招聘平台"
        name="keywords">
        <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
        <!-- <div class="web_root" style="display:none">h</div> -->
        <script type="text/javascript">
            var ctx = "h";
            console.log(1);
        </script>
        <link rel="Shortcut Icon" href="h/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style.css"
        />
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/external.min.css"
        />
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/popup.css"
        />
        <script src="/Public/HomeStyle/js/jquery.1.10.1.min.js" type="text/javascript">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.lib.min.js">
        </script>
        <script src="/Public/HomeStyle/js/ajaxfileupload.js" type="text/javascript">
        </script>
        <script src="/Public/HomeStyle/js/jquery-hbzx.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            var youdao_conv_id = 271546;
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/conv.js">
        </script>
    </head>
    
    <body>
        <div id="body">
            <div id="header">
    <div class="wrapper">
        <a href="<?php echo U('Home/Index/index');?>" class="logo">
            <img src="/Public/HomeStyle/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
        </a>
        <?php if (!$_COOKIE['state']) :?>
        <!-- 未登录头部 -->
        <ul class="reset" id="navheader">
            <li <?php if(index == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(index == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(index == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
            <li <?php if(index == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
        </ul>
        <ul class="loginTop">
            <li><a href="<?php echo U('User/login');?>" rel="nofollow">登录</a></li> 
            <li>|</li>
            <li><a href="<?php echo U('User/register');?>" rel="nofollow">注册</a></li>
        </ul>
        <?php endif ;?>

        <?php if ($_COOKIE['state'] == 1) :?>
        <!-- 个人用户头部 -->
         <ul class="reset" id="navheader">
            <li <?php if(index == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(index == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(index == 'resume'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Resume/index');?>" rel="nofollow">我的简历</a></li>
        </ul>
        <dl class="collapsible_menu">
            <dt>
                <span><?php echo $_SESSION['user']['username']?>&nbsp;</span>
                <span class="red dn" id="noticeDot-0"></span>
                <i></i>
            </dt>
            <dd><a href="<?php echo U('CollectionJob/index');?>">我收藏的职位</a></dd>
            <dd class="btm"><a href="###">我的订阅</a></dd>
            <dd><a href="<?php echo U('Home/CompanyJob/create');?>">我要招人</a></dd>
            <dd><a href="###">帐号设置</a></dd>
            <dd class="logout"><a rel="nofollow" href="<?php echo U('User/logout');?>">退出</a></dd>
        </dl>
        <?php endif ;?>
        <?php if ($_COOKIE['state'] == 2) :?>
        <!-- 公司用户头部 -->
         <ul class="reset" id="navheader">
            <li <?php if(index == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li <?php if(index == 'company'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/Index/companylist');?>" >公司</a></li>
            <li <?php if(index == 'handle'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/ResumeHandle/unhandle');?>" rel="nofollow">简历管理</a></li>
            <li <?php if(index == 'job'): ?>class="current"<?php endif; ?>><a href="<?php echo U('Home/CompanyJob/create');?>" rel="nofollow">发布职位</a></li>
        </ul>
        <dl class="collapsible_menu">
            <dt>
                <span><?php echo $_SESSION['user']['username']?>&nbsp;</span>
                <span class="red dn" id="noticeDot-0"></span>
                <i></i>
            </dt>
            <dd><a rel="nofollow" href="<?php echo U('Home/CompanyJob/positions');?>">我发布的职位</a></dd>
            <dd><a href="<?php echo U('Home/ResumeHandle/unhandle');?>">我收到的简历</a></dd>
            <dd class="btm"><a href="<?php echo U('Home/Company/index');?>">我公司的主页</a></dd>
            <dd><a href="<?php echo U('Home/Resume/index');?>">我要找工作</a></dd>
            <dd><a href="<?php echo U('Home/Company/updatePwd');?>">帐号设置</a></dd>
            <dd class="logout"><a rel="nofollow" href="<?php echo U('User/logout');?>">退出</a></dd>
        </dl>
        <?php endif ;?>
    </div>
</div>
            <!-- end #header -->
            <div id="container">
                <div class="clearfix">
                    <div class="content_l">
                        <dl class="job_detail">
                            <dt>
                                <h1 title="内容运营">
                                    <em>
                                    </em>
                                    <div>
                                    </div>
                                    <?php echo ($arr["name"]); ?>
                                </h1>
                                <a class="jd_collection <?php echo ($showCol); ?>" href="<?php echo U('JobShow/collection',array('job_id'=>$arr['id'],'uid'=>$_SESSION['user']['id']));?>">
                                </a>
                            </dt>
                            
                            <dd class="job_request">
                                    <span class="red"><?php echo ($arr["salary_low"]); ?>k-<?php echo ($arr["salary_high"]); ?>k</span>
                                    <span><?php echo ($arr["city"]); ?></span> 
                                    <span><?php echo ($arr["work_year"]); ?></span>
                                    <span><?php echo ($arr["edu"]); ?></span> 
                                    <span><?php echo ($arr["nature"]); ?></span><br />
                                        职位诱惑 : <?php echo ($arr["welfare"]); ?>
                                    <div>发布时间:<?php echo (date('Y年m月d日',$arr["modify_time"])); ?></div>
                            </dd>
                            <!--</foreach>-->
                           
                            <dd class="job_bt">
                                <h3 class="description">
                                    职位描述
                                </h3>
                                <p>
                                <?php echo ($arr["desc"]); ?>
                                </p>
                            </dd>
                            <div class="saoma saoma_btm">
                                <div class="dropdown_menu">
                                    <div class="drop_l">
                                        <img src="/Public/HomeStyle/images/job_qr_btm.png" width="131" height="131"
                                        />
                                    </div>
                                    <div class="drop_r">
                                        <div class="drop_title">
                                        </div>
                                        <p>
                                            想知道HR在看简历嘛？
                                            <br />
                                            想在微信中收到面试通知？
                                            <br />
                                            <span>
                                                << 扫一扫，给你解决</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <dd>
                                <a href="<?php echo ($cl['address']); ?>" class="btn fr <?php echo ($cl['cls']); ?>">
                                    <?php echo ($cl['value']); ?>
                                </a>
                            </dd>
                        </dl>
                        <div id="weibolist">
                        </div>
                    </div>
                    <div class="content_r">
                        <dl class="job_company">
                            <dt>
                                <a href="<?php echo U('Index/showCompany',array('id'=>$ayy['id']));?>" target="_blank">
                                    <img class="b2" src="<?php echo ($ayy["logo"]); ?>"width="80" height="80" alt="北京立方网信息技术有限公司" />
                                    <div>
                                        <h2 class="fl">
                                            <?php echo ($ayy["name"]); ?>
                                            <img src="/Public/HomeStyle/images/valid.png" width="15" height="19" alt="拉勾认证企业"
                                            />
                                            <span class="dn">
                                                拉勾认证企业
                                            </span>
                                        </h2>
                                    </div>
                                </a>
                            </dt>
                            <dd>
                                <ul class="c_feature reset">
                                    <li>
                                        <span>
                                            领域
                                        </span>
                                        <?php echo ($ayy['trade']); ?>
                                    </li>
                                    <li>
                                        <span>
                                            规模
                                        </span>
                                        <?php echo C('company_scale')[$ayy['scale']];?>
                                    </li>
                                    <li>
                                        <span>
                                            主页
                                        </span>
                                        <a href="<?php echo ($ayy["web"]); ?>" target="_blank" title="" rel="nofollow">
                                            <?php echo ($ayy["web"]); ?>
                                        </a>
                                    </li>
                                </ul>
                                <h4>
                                    发展阶段
                                </h4>
                                <ul class="c_feature reset">
                                    <li>
                                        <span>
                                            目前阶段
                                        </span>
                                        <?php echo C('company_stage')[$ayy['stage']];?>
                                    </li>
                                </ul>
                                <h4>
                                    工作地址
                                </h4>
                                <div>
                                    <?php echo ($arr["address"]); ?>
                                </div>
                            </dd>
                        </dl>
                        <a href="h/subject/s_zhouyou.html?utm_source=BD__lagou&utm_medium=&utm_campaign=zhouyou"
                        target="_blank" class="eventAd">
                            <img src="/Public/HomeStyle/images/zhouyou.jpg" width="280" height="135"
                            />
                        </a>
                    </div>
                </div>
                <input type="hidden" value="" name="userid" id="userid" />
                <input type="hidden" value="" name="type" id="resend_type" />
                <input type="hidden" value="140204" id="jobid" />
                <input type="hidden" value="683" id="companyid" />
                <input type="hidden" value="" id="positionLng" />
                <input type="hidden" value="" id="positionLat" />
                <div id="tipOverlay">
                </div>
                <!-------------------------------------弹窗lightbox ----------------------------------------->
                <div style="display:none;">
                    <!-- 设置默认投递简历 -->
                    <div id="setResume" class="popup" style="height:280px;">
                        <table width="100%">
                            <tr>
                                <td class="f18 c5">
                                    请选择你要投出去的简历：
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form id="resumeSetForm" class="resumeSetForm">
                                        <label class="radio">
                                            <input type="radio" name="resumeName" class="resume1" value="1" />
                                            在线简历：
                                            <span class="red">
                                                在线简历还不完善，请完善后选择投递
                                            </span>
                                        </label>
                                        <div class="setBtns">
                                            <a href="jianli.html" target="_blank">
                                                修改
                                            </a>
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <label class="radio">
                                            <input type="radio" name="resumeName" class="resume0" value="0" />
                                            附件简历：
                                            <span class="uploadedResume red">
                                                暂无附件简历
                                            </span>
                                        </label>
                                        <div class="setBtns">
                                            <a href="h/nearBy/downloadResume" class="downloadResume dn">
                                                下载
                                            </a>
                                            <span class="dn">
                                                |
                                            </span>
                                            <a target="_blank" title="上传附件简历" class="reUpload">
                                                上传附件简历
                                            </a>
                                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" name="newResume" id="reUploadResume1"
                                            type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','reUploadResume1')"
                                            />
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <span class="error" style="display:none;">
                                            只支持word、pdf、ppt、txt、wps格式文件，请重新上传
                                        </span>
                                        <label class="bgPink">
                                            默认使用此简历直接投递，下次不再提示
                                        </label>
                                        <span class="setTip error">
                                        </span>
                                        <input type="submit" class="btn_profile_save btn_s" value="保存设置" />
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#setResume-->
                    <!-- 投递简历时 - 设置默认投递简历 -->
                    <div id="setResumeApply" class="popup" style="height:280px;">
                        <table width="100%">
                            <tr>
                                <td class="f18 c5">
                                    请选择你要投出去的简历：
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form id="resumeSendForm" class="resumeSetForm">
                                        <label class="radio">
                                            <input type="radio" name="resumeName" class="resume1" value="1" />
                                            在线简历：
                                            <span class="red">
                                                在线简历还不完善，请完善后选择投递
                                            </span>
                                        </label>
                                        <div class="setBtns">
                                            <a href="jianli.html" target="_blank">
                                                修改
                                            </a>
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <label class="radio">
                                            <input type="radio" name="resumeName" class="resume0" value="0" />
                                            附件简历：
                                            <span class="uploadedResume red">
                                                暂无附件简历
                                            </span>
                                        </label>
                                        <div class="setBtns">
                                            <a href="h/nearBy/downloadResume" class="downloadResume dn">
                                                下载
                                            </a>
                                            <span class="dn">
                                                |
                                            </span>
                                            <a target="_blank" title="上传附件简历" class="reUpload">
                                                上传附件简历
                                            </a>
                                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" name="newResume" id="reUploadResume2"
                                            type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','reUploadResume2')"
                                            />
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <span class="error" style="display:none;">
                                            只支持word、pdf、ppt、txt、wps格式文件，请重新上传
                                        </span>
                                        <label class="bgPink">
                                            <input type="checkbox" checked="checked" />
                                            默认使用此简历直接投递，下次不再提示
                                        </label>
                                        <span class="setTip error">
                                        </span>
                                        <input type="submit" class="btn_profile_save btn_s" value="确认投递简历" />
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#setResumeApply-->
                    <!-- 上传简历 -->
                    <div id="uploadFile" class="popup">
                        <table width="100%">
                            <tr>
                                <td align="center">
                                    <form>
                                        <a href="javascript:void(0);" class="btn_addPic">
                                            <span>
                                                选择上传文件
                                            </span>
                                            <input tabindex="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3"
                                            name="newResume" id="resumeUpload" class="filePrew" type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload')"
                                            />
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    支持word、pdf、ppt、txt、wps格式文件
                                    <br />
                                    文件大小需小于10M
                                </td>
                            </tr>
                            <tr>
                                <td align="left" style="color:#dd4a38; padding-top:10px;">
                                    注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <img src="/Public/HomeStyle/images/loading.gif" width="55" height="16"
                                    id="loadingImg" style="visibility: hidden;" alt="loading" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#uploadFile-->
                    <!-- 简历上传成功 -->
                    <div id="uploadFileSuccess" class="popup">
                        <h4>
                            简历上传成功！
                        </h4>
                        <table width="100%">
                            <tr>
                                <td align="center">
                                    <p>
                                        你可以将简历投给你中意的公司了。
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <a href="javascript:top.location.reload();" class="btn_s">
                                        确&nbsp;定
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#uploadFileSuccess-->
                    <!-- 登录框 -->
                    <!--/#loginPop-->
                    <!-- 投简历成功前填写基本信息 -->
                    <div id="infoBeforeDeliverResume" class="popup" style="height:300px; overflow:visible;">
                        <div class="f18">
                            为方便所投递企业HR查阅，请确认个人信息
                        </div>
                        <form id="basicInfoForm" method="post">
                            <table width="100%">
                                <tr>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="text" name="name" placeholder="姓名" />
                                    </td>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="hidden" name="degree" value="" id="degree" />
                                        <input type="button" class="profile_select_190 profile_select_normal"
                                        id="select_degree" value="最高学历" />
                                        <div id="box_degree" class="boxUpDown boxUpDown_190 dn">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="hidden" name="workyear" value="" id="workyear" />
                                        <input type="button" class="profile_select_190 profile_select_normal"
                                        id="select_workyear" value="工作年限" />
                                        <div id="box_workyear" class="boxUpDown boxUpDown_190 dn">
                                        </div>
                                    </td>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="hidden" name="expectCity" value="" id="expectCity" />
                                        <input type="button" class="profile_select_190 profile_select_normal"
                                        id="select_expectCity" value="期望工作城市" />
                                        <div id="box_expectCity" class="boxUpDown boxUpDown_596 dn">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="text" name="tel" placeholder="联系电话" />
                                    </td>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="text" name="email" placeholder="邮箱地址" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td colspan="3">
                                        <input type="hidden" name="type" value="" />
                                        <input type="submit" class="btn" value="确认并投递" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <!--/#infoBeforeDeliverResume-->
                    <!-- 上传附件简历操作说明-重新上传 -->
                    <div id="fileResumeUpload" class="popup">
                        <table width="100%">
                            <tr>
                                <td>
                                    <div class="f18 mb10">
                                        请上传标准格式的word简历
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="f16">
                                        操作说明：
                                        <br />
                                        打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <a class="inline btn" href="#uploadFile" title="上传附件简历">
                                        重新上传
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#fileResumeUpload-->
                    <!-- 上传附件简历操作说明-重新上传 -->
                    <div id="fileResumeUploadSize" class="popup">
                        <table width="100%">
                            <tr>
                                <td>
                                    <div class="f18 mb10">
                                        上传文件大小超出限制
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="f16">
                                        提示：
                                        <br />
                                        单个附件不能超过10M，请重新选择附件简历！
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <a class="inline btn" href="#uploadFile" title="上传附件简历">
                                        重新上传
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#deliverResumeConfirm-->
                    <!-- 投简历成功前二次确认 -->
                    <div id="deliverResumeConfirm" class="popup">
                        <table width="100%">
                            <tr>
                                <td class="msg">
                                    <div class="f18">
                                        你的简历中：
                                    </div>
                                    <div class="f16 count">
                                        <span class="f18 confirm_field">
                                            学历、工作年限、期望工作城市
                                        </span>
                                        与该职位要求不匹配，确认要投递吗？
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="hidden" name="type" value="" />
                                    <a href="javascript:sendResume(,140204,true,true);" class="btn">
                                        确认投递
                                    </a>
                                    <a href="javascript:;" class="btn_s">
                                        放弃投递
                                    </a>
                                    <a href="javascript:;" class="f20 edit_field">
                                        修改信息
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#deliverResumeConfirm-->
                    <!-- 投简历成功 -->
                    <div id="deliverResumesSuccess" class="popup" style="width:440px;padding-bottom:10px;">
                        <table width="100%">
                            <tr class="drawGGJ">
                                <td align="center">
                                    <p class="font_16 count">
                                    </p>
                                    <p class="font_16 share dn">
                                        邀请好友成功注册拉勾，可提升每日投递量 &nbsp;&nbsp;
                                        <a href="h/share/invite.html" target="_blank">
                                            邀请好友>>
                                        </a>
                                    </p>
                                </td>
                            </tr>
                            <tr class="drawQD">
                                <td align="center">
                                    <a href="javascript:top.location.reload();" class="btn_s">
                                        确&nbsp;定
                                    </a>
                                </td>
                            </tr>
                            <tr class="weixinQR dn">
                                <td>
                                    <div class="weixin">
                                        <div class="qr">
                                            <img src="" width="120" height="120" />
                                            <div>
                                                [仅限本人使用]
                                            </div>
                                        </div>
                                        <div class="qr_text">
                                            想知道HR是否看过你的简历？
                                            <br />
                                            想在微信中收到面试通知？
                                            <br />
                                            <span>
                                                << 微信扫一扫，一并解决</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#deliverResumesSuccess-->
                    <!-- 投递时，一个简历都没有弹窗 -->
                    <div id="sendNoResume" class="popup">
                        <table width="100%">
                            <tr>
                                <td class="f18 c5" align="center">
                                    你还没有可以投递的简历呢
                                </td>
                            </tr>
                            <tr>
                                <td class="c5" align="center">
                                    请上传附件简历或填写在线简历后再投递吧~
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <form>
                                        <a href="javascript:void(0);" class="btn_addPic">
                                            <span>
                                                选择上传文件
                                            </span>
                                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume"
                                            id="resumeUpload2" class="filePrew" type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload2')"
                                            />
                                        </a>
                                    </form>
                                    <a class="btn" href="jianli.html" target="_blank">
                                        完善在线简历
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#sendNoResume-->
                    <!-- 没有简历请上传 -->
                    <div id="deliverResumesNo" class="popup">
                        <table width="100%">
                            <tr>
                                <td align="center">
                                    <p class="font_16">
                                        你在拉勾还没有简历，请先上传一份
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <form>
                                        <a href="javascript:void(0);" class="btn_addPic">
                                            <span>
                                                选择上传文件
                                            </span>
                                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume"
                                            id="resumeUpload1" class="filePrew" type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload1')"
                                            />
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    支持word、pdf、ppt、txt、wps格式文件，大小不超过10M
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#deliverResumesNo-->
                    <!-- 激活邮箱 登录邮箱未验证时， 点击上传附件简历、申请职位、订阅职位、发布职位出现该弹窗 -->
                    <div id="activePop" class="popup" style="height:240px;">
                        <h4>
                            登录邮箱未验证
                        </h4>
                        <p>
                            请验证你的登录邮箱以使用拉勾网的所有功能！
                        </p>
                        <p>
                            我们已将验证邮件发送至：
                            <a>
                            </a>
                            ，请点击邮件内的链接完成验证。
                        </p>
                        <p>
                            <a href="javascript:void(0)" id="resend">
                                重新发送验证邮件
                            </a>
                            |
                            <a href="register.html" target="_blank">
                                换个邮箱？
                            </a>
                        </p>
                    </div>
                    <!--/#activePop-->
                    <!-- 激活邮箱 验证邮件发送成功弹窗 -->
                    <div id="resend_success" class="popup">
                        <p>
                            我们已将激活邮件发送至：
                            <a>
                            </a>
                            ，请点击邮件内的链接完成验证。
                        </p>
                    </div>
                    <!--/#resend_success-->
                    <!--地图弹窗-->
                    <div id="baiduMap" class="popup">
                        <div id="allmap">
                        </div>
                    </div>
                    <!--/#baiduMap-->
                </div>
                

        </div>
        <!-- end #body -->
        <div id="footer">
            <div class="wrapper">
                <a href="h/about.html" target="_blank" rel="nofollow">
                    联系我们
                </a>
                <a href="h/af/zhaopin.html" target="_blank">
                    互联网公司导航
                </a>
                <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">
                    拉勾微博
                </a>
                <a class="footer_qr" href="javascript:void(0)" rel="nofollow">
                    拉勾微信
                    <i>
                    </i>
                </a>
                <div class="copyright">
                    &copy;2013-2014 Lagou
                    <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">
                        京ICP备14023790号-2
                    </a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/Public/HomeStyle/js/core.min.js">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/popup.min.js">
        </script>
        <!-- -->
    </body>

</html>