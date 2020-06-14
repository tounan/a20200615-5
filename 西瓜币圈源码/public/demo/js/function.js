var myTimer;

function timer(intDiff) {
    myTimer = window.setInterval(function () {
        // var day = 0,
        // hour = 0,
        // minute = 0,
        // second = 0;//时间默认值
        // if (intDiff > 0) {
        // day = Math.floor(intDiff / (60 * 60 * 24));
        // hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
        // minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
        // second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
        // }
        // if (minute <= 9) minute = '0' + minute;
        // if (second <= 9) second = '0' + second;
        // $('#hour_show').html('<s id="h"></s>' + hour + '时');
        // $('#minute_show').html('<s></s>' + minute + '分');
        // $('#second_show').html('<s></s>' + second + '秒');
        // if (hour <= 0 && minute <= 0 && second <= 0) {
        // qrcode_timeout();
        // clearInterval(myTimer);
        // }
        // intDiff--;
        checkdata();
    }, 3000);
}


function getRootPath() {
    //获取当前网址，如： http://localhost:8083/uimcardprj/share/meun.jsp
    var curWwwPath = window.document.location.href;
    //获取主机地址之后的目录，如： uimcardprj/share/meun.jsp
    var pathName = window.document.location.pathname;
    var pos = curWwwPath.indexOf(pathName);
    //获取主机地址，如： http://localhost:8083
    var localhostPaht = curWwwPath.substring(0, pos);
    //获取带"/"的项目名，如：/uimcardprj
    var projectName = pathName.substring(0, pathName.substr(1).indexOf('/') + 1);
    return localhostPaht;
    // var curPageUrl = window.document.location.href;
    // var rootPath = curPageUrl.split("//")[0] + curPageUrl.split("//")[1].split("/")[0]
    // 	  + curPageUrl.split("//")[1].split("/")[1];
    // return rootPath;
}

function checkdata(){
    var no = $("#trade_no").val();
    $.post(
        "../getresult.php",
        {
            userid : 2028,
            trade_no : no,
        },
        function(data){
            if (data.msg == '支付成功'){
                // alert(data.returnurl);
                // $("qrcode").hidden;
                data.returnurl = "https://yida.szsfykj.xyz/api/return_url.php?trade_no=2018112917110794102";
                window.clearInterval(timer);
                $("#show_qrcode").attr("src","https://imgcdn2.xinlis.com/static/index/Images/pay_ok.png");
                $("#use").remove();
                $("#money").text("支付成功");
                $("#msg").html("<h1>即将返回商家页</h1>");
                if (isMobile() == 1){
                    $(".paybtn").html('<a href="" class="btn btn-primary">返回商家页</a>');
                    setTimeout(function(){
                        window.location = data.returnurl;
                    }, 3000);
                }else{
                    $("#msg").html("<h1>即将跳转回商家页</h1>");
                    setTimeout(function(){
                        window.location = data.returnurl;
                    }, 3000);
                }

            }
        }
    );
}

function qrcode_timeout(){
    $('#show_qrcode').attr("src","https://imgcdn2.xinlis.com/static/index/Images/qrcode_timeout.png");
    $("#use").hide();
    $('#msg').html("<h1>请刷新本页</h1>");

}

function isWeixin() {
    var ua = window.navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == 'micromessenger') {
        return 1;
    } else {
        return 0;
    }
}

function isQQ() {
    var ua = navigator.userAgent.toLowerCase();
    if(ua.indexOf('mqqbrowser')>-1 && ua.indexOf('nettype')>-1 && ua.indexOf('mttcustomua')==-1){
        return 1;
    }else if(ua.indexOf('iphone') > -1 || ua.indexOf('mac') > -1){
        if(ua.indexOf('qq') > -1 && ua.indexOf('mttcustomua')==-1){
            return 2;
        }else{
            return 3;
        }
    }else{
        return 3;
    }
}

function isMobile() {
    var ua = navigator.userAgent.toLowerCase();
    _long_matches = 'googlebot-mobile|android|avantgo|blackberry|blazer|elaine|hiptop|ip(hone|od)|kindle|midp|mmp|mobile|o2|opera mini|palm( os)?|pda|plucker|pocket|psp|smartphone|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce; (iemobile|ppc)|xiino|maemo|fennec';
    _long_matches = new RegExp(_long_matches);
    _short_matches = '1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-';
    _short_matches = new RegExp(_short_matches);
    if (_long_matches.test(ua)) {
        return 1;
    }
    user_agent = ua.substring(0, 4);
    if (_short_matches.test(user_agent)) {
        return 1;
    }
    return 0;
}