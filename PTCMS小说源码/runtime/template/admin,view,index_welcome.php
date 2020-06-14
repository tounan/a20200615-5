<?php defined('PT_ROOT') || exit('Permission denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8" />
    <title>管理中心 - <?php echo PRONAME;?></title>
    <link rel = "stylesheet" href = "<?php echo PT_DIR;?>/application/admin/view/css/admin.css" />
    <meta name = "viewport" content = "width=device-width" />
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
</head>
<body>
<div class = "pt-main-wrap">
    <div class = "pt-path"><span class = "pt-path-icon icon-home"></span>您好 <font color = "orangered"><b><?php echo $username;?></b></font>，您是<font color = "orangered"><b><?php echo $groupname;?></b></font>，欢迎进入<?php echo PRONAME;?> 控制台！</div>
    <div class = "pt-wrap">
        <?php if(is_array($tips)): foreach($tips as $key =>$loop):?>
        <div class = "alert alert-<?php echo $loop['type'];?> alert-dismissable ">
            <p><?php echo $loop['content'];?></p>
        </div>
        <?php endforeach; endif;?>
        <div class = "pt-col">
            <div class = "pt-col-item pt-col-4">
                <div class = "pt-widget">
                    <div class = "pt-wcon-infobox">
                        <div class = "iconbox f-tac"><i class = "icon icon-tags"> </i></div>
                        <div class = "infobox f-tac">
                            <a href = "<?php echo U("novelsearch.site.index",array());?>">
                                <strong><?php echo $sitenum;?></strong>
                                <span>更新源站</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "pt-col-item pt-col-4">
                <div class = "pt-widget">
                    <div class = "pt-wcon-infobox">
                        <div class = "iconbox f-tac"><i class = "icon icon-book"> </i></div>
                        <div class = "infobox f-tac">
                            <a href = "<?php echo U("user.manage.index",array());?>">
                                <strong><?php echo $usernum;?></strong>
                                <span>总用户数</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "pt-col-item pt-col-4">
                <div class = "pt-widget">
                    <div class = "pt-wcon-infobox">
                        <div class = "iconbox f-tac"><i class = "icon icon-stats"> </i></div>
                        <div class = "infobox f-tac">
                            <a href = "<?php echo U("ad.manage.index",array());?>">
                                <strong><?php echo $adnum;?></strong>
                                <span>网站广告</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "pt-col-item pt-col-4 pt-col-item-last">
                <div class = "pt-widget">
                    <div class = "pt-wcon-infobox">
                        <div class = "iconbox f-tac"><i class = "icon icon-link"> </i></div>
                        <div class = "infobox f-tac">
                            <a href = "<?php echo U("friendlink.manage.index",array());?>">
                                <strong><?php echo $friendlinknum;?></strong>
                                <span>友情链接</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "f-clear"></div>
        <div class = "pt-col">
            <div class = "pt-col-item pt-col-2">
                <div class = "pt-widget">
                    <div class = "pt-widget-title">
                        <span><i class = "icon icon-globe"></i></span>
                        <h5>程序介绍</h5>
                    </div>
                    <div class = "pt-widget-content pt-wcon-text" style = "height:190px;overflow: auto;overflow-x: hidden;">
                        <p><?php echo PRONAME;?>，定位于中小型站长，基于“同源”技术，可以对同一本小说在不同站点进行匹配，也可以进行章节在不同站点的匹配，进行换源阅读，获取更好的阅读体验。</p>
                        <p><?php echo PRONAME;?>基于PT二次开发，继承PT产品一惯依赖的智能化、傻瓜化、草根化的技术特点，30秒安装，3分钟建站，在极短的时间内即可以完成建站，同时复制程序重新安装即可以进行批量快速建站，更内置签到程序，签到后当天即可以可以无广告阅读。</p>
                        <p>在程序开发的过程中，非常感谢开发组同学的提供协助，还有非常多的内测人员为我们提出个宝贵的意见，再次一并感谢。</p>
                    </div>
                </div>
            </div>
            <div class = "pt-col-item pt-col-2 pt-col-item-last">
                <div class = "pt-widget">
                    <div class = "pt-widget-title">
                        <span><i class = "icon icon-tasks"></i></span>
                        <h5>最新新闻</h5>
                    </div>
                    <div class = "pt-widget-content pt-wcon-list pt-time-list" style = "height:190px;overflow: hidden">
                                 <div style="width:100%;height:800px;margin:-275px 0px 0px -350px;">
              <iFrame src="http://www.yunziyuan,com.cn" width="1260" height="900" scrolling="no" scrolling="no" hspace="-100" vspace="-350">
             </iFrame>
         </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class = "f-clear"></div>
        <div class = "pt-list" style = "margin:20px">
            <h4 class = "pt-msg-title"> 服务器信息</h4>
            <table class = "pt-list-table" style = "margin:20px 0;">
                <tbody style = "border-top: 1px #ccc solid;">
                <tr>
                    <td width = "15%" class = "f-tar"><b>当前程序名称:</b></td>
                    <td width = "35%" class = "f-tal"><?php echo PRONAME;?></td>
                    <td width = "15%" class = "f-tar"><b>当前程序更新时间:</b></td>
                    <td width = "35%" class = "f-tal" id = "nowtime"><?php echo PROTIME;?></td>
                </tr>
                <tr>
                    <td class = "f-tar"><b>当前程序版本:</b></td>
                    <td class = "f-tal"><?php echo PROVERSION;?></td>
                    <td class = "f-tar"><b>最新程序版本:</b></td>
                    <td class = "f-tal"><a href="ttps://www.chinaxing.cn" title="ttph.taobao.com">点击获取</a></td>
                </tr>
                <tr>
                    <td class = "f-tar"><b>服务器操作系通</b></td>
                    <td class = "f-tal"><?php echo PHP_OS;?></td>
                    <td class = "f-tar"><b>服务器解译引擎</b></td>
                    <td class = "f-tal"><?php echo $_SERVER["SERVER_SOFTWARE"]?></td>
                </tr>
                <tr>
                    <td class = "f-tar"><b>服务器PHP版本</b></td>
                    <td class = "f-tal"><?php echo PHP_VERSION?></td>
                    <td class = "f-tar"><b>服务器GD库版本</b></td>
                    <td class = "f-tal"><?php $GD_Info=gd_info();echo $GD_Info["GD Version"]?></td>
                </tr>
                <tr>
                    <td class = "f-tar"><b>服务器磁盘空间</b></td>
                    <td class = "f-tal"><?php echo round((@disk_free_space(".")/(1024*1024)),2)?>M</td>
                    <td class = "f-tar"><b>服务器附件上传</b></td>
                    <td class = "f-tal"><?php echo get_cfg_var("upload_max_filesize")?></td>
                </tr>
                <tr>
                    <td class = "f-tar"><b>当前程序路径:</b></td>
                    <td class = "f-tal"><?php echo PT_ROOT?></td>
                    <td class = "f-tar"><b>服务器日期时间</b></td>
                    <td class = "f-tal"><?php echo date("Y-m-d H:i:s")?></td>
                </tr>
                <tr>
                    <td class = "f-tar"><b>客服QQ</b></td>
                    <td class = "f-tal"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=591810797&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:260855897:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></td>
                    <td class = "f-tar"><b>使用curl远程采集:</b></td>
                    <td class = "f-tal"><?php if (function_exists("curl_init")){echo '<span style="color:green">&radic; 支持</span>';}else{echo '<span style = "color:red">&times; 不支持</span>';}?> curl</td>
                </tr>
                <tr>
                    <td class = "f-tar"><b>使用URL远程采集:</b></td>
                    <td class = "f-tal"><?php if (ini_get("allow_url_fopen")){echo '<span style="color:green">&radic; 支持</span>';}else{echo '<span style = "color:red">&times; 不支持</span>';}?> allow_url_fopen</td>
                    <td class = "f-tar"><b>使用GET远程采集:</b></td>
                    <td class = "f-tal"><?php if (function_exists('file_get_contents')){echo '<span style="color:green">&radic; 支持</span>';}else{echo '<span style = "color:red">&times; 不支持</span>';}?> file_get_contents</td>
                </tr>
                </tbody>
            </table>
            <h4 class = "pt-msg-title">版权信息</h4>
            <div class = "pt-msg-box">
                <p class = "tips">一旦您使用本程序，即代表您同意了下面的条款:</p>
                <div class = "quote">
                    <p><b>一、</b><?php echo PRONAME;?><a href = "http://www.yunziyuan,com.cn" target = "_blank">5G云资源源</a>开发组二次开发，严禁进行非法倒卖、传播、出售本程序等行为；</p>
                    <p><b>二、</b>不得使用本程序进行违反我国现行法律法规的任何行为，如传播病毒木马、恶意软件、淫秽色情、等;</p>
                    <p><b>三、</b>严禁使用本程序进行刷流量、刷联盟等行为，如经发现，我们有权在不告知用户的情况下追回程序使用权;</p>
                    <p><b>四、</b>本程序仅仅是一个建站程序，如果使用者用于非法用途或者侵犯版权，与本程序无关;</p>
                    <p><b>五、</b>如因用户违反程序使用条例，本站有权终止对该用户的技术支持、更新升级、数据采集等服务并保留追究其相应的法律责任;</p>
                    <p><b>六、</b>特殊说明（针对本程序）：</p>
                    <p>　　1、<?php echo PRONAME;?>为小说搜索程序，严禁使用本程序做任何违反我国现行法律法规的任何行为;</p>
                    <p>　　2、<?php echo PRONAME;?>提供基本的采集功能，可以将其他站点的内容进行采集，用户对此功能进行使用需付完全责任;</p>
                    <p>　　3、<?php echo PRONAME;?>仅为一个程序，如何使用完全为用户的个人行为，本公司对此不承担任何责任;</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class = "pt-pop f-dn" id = "showbox">
    <div class = "pt-set-content">
        <div class = "pt-set-info" style = "font-size:14px;line-height:30px;">
            <p style = "color:red;font-weight: bold">程序已经发布新版本，请点击下面链接下载更新！</p>
            <p class = "newurl"></p>
        </div>
    </div>
</div>
<script type = "text/javascript" src = "<?php echo PT_DIR;?>/public/script/jquery.min.js"></script>
<script type = "text/javascript" src = "<?php echo PT_DIR;?>/public/plugin/layer/layer.js"></script>
<script type = "text/javascript" src = "<?php echo PT_DIR;?>/application/admin/view/script/admin.js"></script>
<script>
    $(document).ready(function () {
        $.getJSON("http://ptcms.sinaapp.com/manageapi/ptnovelsteal/update.php?site=<?php echo $_SERVER['HTTP_HOST'];?>&jsoncallback=?", function (data) {
            $('#newrelease').text(data.release + '(' + data.version + ')');
            var news = '<ul>';
            $.each(data.news, function (k, v) {
                news += '<li><span>' + v.time + '</span><a href="' + v.url + '" target="_blank">' + v.title + '</a></li>'
            });
            news += '</ul>';
            $("#news").html(news);
            if (data.release > $('#nowtime').html()) {
                $('.newurl').html('<a href="' + data.newurl + '">' + data.newurl + '</a>')
                $.admin.tool.tipbox('#showbox', '更新提醒');
            }
        });
    });
</script>
<div style = "display: none">
    <script language = "javascript" type = "text/javascript" src = "<?php echo PT_DIR;?>/application/admin/view/script/tongji.js"></script>
</div>
</body>
</html>