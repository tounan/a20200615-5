(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-user-login"],{4551:function(e,t,a){a("c975"),a("a9e3"),a("4d63"),a("ac1f"),a("25f0"),a("5319"),a("1276"),e.exports={error:"",check:function(e,t){e=JSON.stringify(e);for(var a=JSON.parse(e),i=0;i<t.length;i++){if(!t[i].checkType)return!0;if(!t[i].name)return!0;if(!t[i].errorMsg)return!0;if(!a[t[i].name]||""==a[t[i].name])return this.error=t[i].errorMsg,!1;switch("string"==typeof a[t[i].name]&&(a[t[i].name]=a[t[i].name].replace(/\s/g,"")),t[i].checkType){case"string":var r=new RegExp("^.{"+t[i].checkRule+"}$");if(!r.test(a[t[i].name]))return this.error=t[i].errorMsg,!1;break;case"int":var n=t[i].checkRule.split(",");t.length<2?(n[0]=Number(n[0])-1,n[1]=""):(n[0]=Number(n[0])-1,n[1]=Number(n[1])-1);r=new RegExp("^(-[1-9]|[1-9])[0-9]{"+n[0]+","+n[1]+"}$");if(!r.test(a[t[i].name]))return this.error=t[i].errorMsg,!1;break;case"between":if(!this.isNumber(a[t[i].name]))return this.error=t[i].errorMsg,!1;var o=t[i].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),a[t[i].name]>o[1]||a[t[i].name]<o[0])return this.error=t[i].errorMsg,!1;break;case"betweenD":r=/^-?\d+$/;if(!r.test(a[t[i].name]))return this.error=t[i].errorMsg,!1;o=t[i].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),a[t[i].name]>o[1]||a[t[i].name]<o[0])return this.error=t[i].errorMsg,!1;break;case"betweenF":r=/^-?[0-9][0-9]?.+[0-9]+$/;if(!r.test(a[t[i].name]))return this.error=t[i].errorMsg,!1;o=t[i].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),a[t[i].name]>o[1]||a[t[i].name]<o[0])return this.error=t[i].errorMsg,!1;break;case"same":if(a[t[i].name]!=t[i].checkRule)return this.error=t[i].errorMsg,!1;break;case"notsame":if(a[t[i].name]==t[i].checkRule)return this.error=t[i].errorMsg,!1;break;case"email":r=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;if(!r.test(a[t[i].name]))return this.error=t[i].errorMsg,!1;break;case"phoneno":r=/^1[0-9]{10,10}$/;if(!r.test(a[t[i].name]))return this.error=t[i].errorMsg,!1;break;case"zipcode":r=/^[0-9]{6}$/;if(!r.test(a[t[i].name]))return this.error=t[i].errorMsg,!1;break;case"reg":r=new RegExp(t[i].checkRule);if(!r.test(a[t[i].name]))return this.error=t[i].errorMsg,!1;break;case"in":if(-1==t[i].checkRule.indexOf(a[t[i].name]))return this.error=t[i].errorMsg,!1;break;case"notnull":if(null==a[t[i].name]||a[t[i].name].length<1)return this.error=t[i].errorMsg,!1;break;case"samewith":if(a[t[i].name]!=a[t[i].checkRule])return this.error=t[i].errorMsg,!1;break;case"numbers":r=new RegExp("^[0-9]{"+t[i].checkRule+"}$");if(!r.test(a[t[i].name]))return this.error=t[i].errorMsg,!1;break}}return!0},isNumber:function(e){return e=Number(e),NaN!=e}}},"525c":function(e,t,a){var i=a("f8dd");"string"===typeof i&&(i=[[e.i,i,""]]),i.locals&&(e.exports=i.locals);var r=a("4f06").default;r("5b865c33",i,!0,{sourceMap:!1,shadowMode:!1})},5513:function(e,t,a){"use strict";var i={gracePage:a("9a35").default},r=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("gracePage",{attrs:{customHeader:!1}},[a("v-uni-view",{staticClass:"grace-body",attrs:{slot:"gBody"},slot:"gBody"},[a("v-uni-view",{staticClass:"marginTop"},[a("v-uni-image",{staticClass:"logo",attrs:{src:"http://static.hcoder.net/graceui/logo201908.png",mode:"widthFix"}})],1),a("v-uni-form",{staticClass:"grace-form",staticStyle:{"margin-top":"80rpx"},on:{submit:function(t){arguments[0]=t=e.$handleEvent(t),e.loginNow.apply(void 0,arguments)}}},[a("v-uni-view",{staticClass:"grace-form-item grace-border-b"},[a("v-uni-view",{staticClass:"grace-pnper"},[a("v-uni-picker",{staticStyle:{"text-align":"left"},attrs:{value:e.pnpre,range:e.pnpres,name:"pn_pre"},on:{change:function(t){arguments[0]=t=e.$handleEvent(t),e.changePre.apply(void 0,arguments)}}},[a("v-uni-text",{staticClass:"grace-text"},[e._v("+"+e._s(e.pnpres[e.pnpre]))]),a("v-uni-text",{staticClass:"grace-text grace-icons icon-arrow-down",staticStyle:{"margin-left":"10rpx"}})],1)],1),a("v-uni-view",{staticClass:"grace-form-body"},[a("v-uni-input",{staticClass:"grace-form-input",attrs:{type:"number",name:"pn",placeholder:"请输入手机号码"},model:{value:e.phoneno,callback:function(t){e.phoneno=t},expression:"phoneno"}})],1)],1),a("v-uni-view",{staticClass:"grace-form-item"},[a("v-uni-text",{staticClass:"grace-form-label"},[e._v("短信验证码")]),a("v-uni-view",{staticClass:"grace-form-body"},[a("v-uni-input",{staticClass:"grace-form-input",attrs:{type:"number",name:"yzm",placeholder:"请输入验证码"}})],1),a("v-uni-view",{staticClass:"login-sendmsg-btn grace-bg-blue grace-border-radius",on:{click:function(t){arguments[0]=t=e.$handleEvent(t),e.getVCode.apply(void 0,arguments)}}},[e._v(e._s(e.vcodeBtnName))])],1),a("v-uni-view",{staticClass:"grace-margin-top"},[a("v-uni-button",{staticClass:"grace-button grace-border-radius grace-gtbg-blue",attrs:{"form-type":"submit",type:"primary"}},[e._v("登录"),a("v-uni-text",{staticClass:"grace-icons icon-arrow-right"})],1)],1)],1),a("v-uni-view",{staticStyle:{position:"fixed",left:"25rpx",bottom:"100rpx",width:"700rpx"}},[a("v-uni-view",{staticClass:"grace-line-title grace-margin-top"},[a("v-uni-view",{staticClass:"grace-line-title-line"}),a("v-uni-text",{staticClass:"grace-line-title-text"},[e._v("第三方登录")]),a("v-uni-view",{staticClass:"grace-line-title-line"})],1),a("v-uni-view",{staticClass:"grace-margin-top grace-nowrap grace-flex-center"},[a("v-uni-text",{staticClass:"grace-login-three-items grace-icons icon-weixin grace-blue",on:{click:function(t){arguments[0]=t=e.$handleEvent(t),e.loginWithWx.apply(void 0,arguments)}}}),a("v-uni-text",{staticClass:"grace-login-three-items grace-icons icon-qq grace-blue"}),a("v-uni-text",{staticClass:"grace-login-three-items grace-icons icon-weibo grace-blue"})],1)],1)],1)],1)},n=[];a.d(t,"b",(function(){return r})),a.d(t,"c",(function(){return n})),a.d(t,"a",(function(){return i}))},"5bb6":function(e,t,a){"use strict";var i,r=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("v-uni-view",{staticClass:"grace-sbody"},[e.customHeader?a("v-uni-view",[a("v-uni-view",{staticClass:"grace-page-header",style:{"z-index":e.headerIndex,background:e.headerBG,borderBottomWidth:e.borderWidth,borderBottomColor:e.borderColor}},[a("v-uni-view",{staticClass:"grace-page-status-bar",style:{height:e.statusBarHeight+"px",background:e.statusBarBG}}),a("v-uni-view",{staticClass:"grace-page-header-nav",attrs:{id:"gracePageHeader"}},[a("v-uni-view",{staticClass:"grace-header-main"},[e._t("gHeader")],2),e.bounding?a("v-uni-view",{style:{width:e.BoundingWidth,flexShrink:"0"}}):e._e()],1)],1),a("v-uni-view",{style:{width:"100%",height:e.headerHeight+e.statusBarHeight+"px"}})],1):e._e(),a("v-uni-view",{staticClass:"grace-page-body"},[e._t("gBody")],2),e.isSwitchPage?e._e():a("v-uni-view",{style:{width:"100%",height:e.iphoneXButtomHeight+"px"}}),a("v-uni-view",{staticClass:"grace-page-footer",style:{"z-index":e.footerIndex,background:e.footerBg,bottom:e.footerBottom}},[e._t("gFooter"),e.isSwitchPage?e._e():a("v-uni-view",{style:{width:"100%",height:e.iphoneXButtomHeight+"px"}})],2),a("v-uni-view",{staticClass:"gui-page-rb-area",style:{right:e.rbRight+"rpx",bottom:e.rbBottom+"rpx",width:e.rbWidth+"rpx",zIndex:e.rbIndex}},[e._t("gRTArea")],2),e.isLoading?a("v-uni-view",{staticClass:"grace-page-loading",style:{background:e.loadingBG},on:{touchmove:function(t){t.stopPropagation(),arguments[0]=t=e.$handleEvent(t)},click:function(t){t.stopPropagation(),arguments[0]=t=e.$handleEvent(t)}}},[a("v-uni-view",{staticClass:"grace-page-loading-point"},[a("v-uni-view",{staticClass:"grace-page-loading-points animate1",style:{background:e.loadingPointBg}}),a("v-uni-view",{staticClass:"grace-page-loading-points animate2",style:{background:e.loadingPointBg}}),a("v-uni-view",{staticClass:"grace-page-loading-points animate3",style:{background:e.loadingPointBg}})],1)],1):e._e()],1)},n=[];a.d(t,"b",(function(){return r})),a.d(t,"c",(function(){return n})),a.d(t,"a",(function(){return i}))},"6d3b":function(e,t,a){var i=a("ddb0c");"string"===typeof i&&(i=[[e.i,i,""]]),i.locals&&(e.exports=i.locals);var r=a("4f06").default;r("546a00ed",i,!0,{sourceMap:!1,shadowMode:!1})},"6eed":function(e,t,a){"use strict";a.r(t);var i=a("9574"),r=a.n(i);for(var n in i)"default"!==n&&function(e){a.d(t,e,(function(){return i[e]}))}(n);t["default"]=r.a},"7e1c":function(e,t,a){"use strict";a("c975"),a("a9e3"),a("ac1f"),a("5319"),Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i={props:{customHeader:{type:Boolean,default:!0},headerHeight:{type:Number,default:44},headerIndex:{type:Number,default:98},headerBG:{type:String,default:"none"},statusBarBG:{type:String,default:"none"},footerIndex:{type:Number,default:98},footerBottom:{type:String,default:"0rpx"},footerBg:{type:String,default:""},isSwitchPage:{type:Boolean,default:!1},rbWidth:{type:Number,default:100},rbBottom:{type:Number,default:100},rbRight:{type:Number,default:20},rbIndex:{type:Number,default:1},borderWidth:{type:String,default:"0"},borderColor:{type:String,default:"#D1D1D1"},loadingBG:{type:String,default:"rgba(255,255,255, 0.1)"},isLoading:{type:Boolean,default:!1},loadingPointBg:{type:String,default:"#fc2067"},bounding:{type:Boolean,default:!0}},data:function(){return{statusBarHeight:44,iphoneXButtomHeight:0,BoundingWidth:"0px"}},created:function(){try{var e=uni.getSystemInfoSync();if(e.model=e.model.replace(" ",""),e.model=e.model.toLowerCase(),-1==e.model.indexOf("iphonex")&&-1==e.model.indexOf("iphone11")||(this.iphoneXButtomHeight=uni.upx2px(50)),!this.customHeader)return;this.statusBarHeight=e.statusBarHeight}catch(t){return null}},methods:{getHeaderHeight:function(){return this.headerHeight+this.statusBarHeight}}};t.default=i},"81a1":function(e,t,a){"use strict";var i=a("525c"),r=a.n(i);r.a},9574:function(e,t,a){"use strict";(function(e){var i=a("ee27");Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=i(a("9a35")),n=a("4551"),o={data:function(){return{pnpre:0,pnpres:["86","01","11","26","520"],vcodeBtnName:"获取验证码",countNum:120,countDownTimer:null,phoneno:""}},methods:{loginWithWx:function(){uni.showToast({title:"请完善登录功能",icon:"none"})},changePre:function(e){this.pnpre=e.detail.value},loginNow:function(t){var a=[{name:"pn",checkType:"phoneno",errorMsg:"请填写正确的手机号"},{name:"yzm",checkType:"string",checkRule:"4,6",errorMsg:"请正确填写短信验证码"}],i=t.detail.value,r=n.check(i,a);r?(uni.showToast({title:"请观察控制台",icon:"none"}),e("log",t," at pages/user/login.vue:82")):uni.showToast({title:n.error,icon:"none"})},getVCode:function(){var e=/^[1][0-9]{10}$/;if(!e.test(this.phoneno))return uni.showToast({title:"请正确填写手机号码",icon:"none"}),!1;"获取验证码"!=this.vcodeBtnName&&"重新发送"!=this.vcodeBtnName||(this.vcodeBtnName="发送中...",uni.showToast({title:"短信已发送，请注意查收",icon:"none"}),this.countNum=120,this.countDownTimer=setInterval(function(){this.countDown()}.bind(this),1e3))},countDown:function(){if(this.countNum<1)return clearInterval(this.countDownTimer),void(this.vcodeBtnName="重新发送");this.countNum--,this.vcodeBtnName=this.countNum+"秒重发"},reg:function(){wx.showToast({title:"注册页面类似登录，请自行完善 (:",icon:"none"})}},components:{gracePage:r.default}};t.default=o}).call(this,a("0de9")["log"])},"9a35":function(e,t,a){"use strict";a.r(t);var i=a("5bb6"),r=a("ba3f");for(var n in r)"default"!==n&&function(e){a.d(t,e,(function(){return r[e]}))}(n);a("81a1");var o,s=a("f0c5"),c=Object(s["a"])(r["default"],i["b"],i["c"],!1,null,"1b3bb086",null,!1,i["a"],o);t["default"]=c.exports},ba3f:function(e,t,a){"use strict";a.r(t);var i=a("7e1c"),r=a.n(i);for(var n in i)"default"!==n&&function(e){a.d(t,e,(function(){return i[e]}))}(n);t["default"]=r.a},bd32:function(e,t,a){"use strict";var i=a("6d3b"),r=a.n(i);r.a},ddb0c:function(e,t,a){var i=a("24fb");t=i(!1),t.push([e.i,".marginTop[data-v-31a9e3d3]{margin-top:%?100?%}.logo[data-v-31a9e3d3]{width:%?250?%;height:%?68?%}.login-sendmsg-btn[data-v-31a9e3d3]{height:%?60?%;width:%?200?%;-webkit-flex-shrink:0;flex-shrink:0;margin-left:%?30?%;text-align:center;background-color:#3688ff;line-height:%?60?%;font-size:%?26?%}.grace-pnper[data-v-31a9e3d3]{width:%?168?%;-webkit-flex-shrink:0;flex-shrink:0}.grace-form-label[data-v-31a9e3d3]{width:%?168?%}.grace-form-input[data-v-31a9e3d3]{text-align:left}.grace-form-item[data-v-31a9e3d3]{padding:%?10?% 0}.grace-login-three-items[data-v-31a9e3d3]{display:block;width:%?88?%;height:%?88?%;line-height:%?88?%;font-size:%?60?%;color:#3688ff;text-align:center;margin:%?10?%}",""]),e.exports=t},ee2e:function(e,t,a){"use strict";a.r(t);var i=a("5513"),r=a("6eed");for(var n in r)"default"!==n&&function(e){a.d(t,e,(function(){return r[e]}))}(n);a("bd32");var o,s=a("f0c5"),c=Object(s["a"])(r["default"],i["b"],i["c"],!1,null,"31a9e3d3",null,!1,i["a"],o);t["default"]=c.exports},f8dd:function(e,t,a){var i=a("24fb");t=i(!1),t.push([e.i,"\nuni-page-body[data-v-1b3bb086]{width:100%;min-height:100%;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;flex-direction:column;-webkit-box-flex:1;-webkit-flex:1;flex:1}\n.grace-sbody[data-v-1b3bb086]{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;flex-direction:column;width:100%;min-height:100%;-webkit-box-flex:1;-webkit-flex:1;flex:1}\n.grace-page-header[data-v-1b3bb086]{width:100%;position:fixed;left:0;top:0;z-index:99;border-bottom:0 solid #fff}.grace-page-status-bar[data-v-1b3bb086]{width:100%;height:0}.grace-page-header-nav[data-v-1b3bb086]{width:100%;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;flex-direction:row;-webkit-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-align:center;-webkit-align-items:center;align-items:center}.grace-header-main[data-v-1b3bb086]{width:%?300?%;-webkit-box-flex:1;-webkit-flex:auto;flex:auto;overflow:hidden;min-height:44px}.grace-page-body[data-v-1b3bb086]{width:100%;-webkit-box-flex:1;-webkit-flex:1;flex:1;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;flex-direction:column}.grace-page-footer[data-v-1b3bb086]{width:100%;position:fixed;left:0;bottom:0;z-index:99}.gui-page-rb-area[data-v-1b3bb086]{width:%?100?%;position:fixed;right:%?20?%;bottom:%?100?%;z-index:1}.grace-page-loading[data-v-1b3bb086]{width:100%;height:100%;background:hsla(0,0%,100%,.1);position:fixed;z-index:9999;left:0;top:0;bottom:0;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-webkit-justify-content:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;align-items:center}.grace-page-loading-point[data-v-1b3bb086]{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;flex-direction:row;-webkit-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:center;-webkit-justify-content:center;justify-content:center}.grace-page-loading-points[data-v-1b3bb086]{width:%?20?%;height:%?20?%;background-color:#fc2067;-webkit-border-radius:%?50?%;border-radius:%?50?%;margin:%?10?%;opacity:.5}@-webkit-keyframes pageLoading1-data-v-1b3bb086{0%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}40%{opacity:1;-webkit-transform:scale(1.5);transform:scale(1.5)}60%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}}@keyframes pageLoading1-data-v-1b3bb086{0%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}40%{opacity:1;-webkit-transform:scale(1.5);transform:scale(1.5)}60%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes pageLoading2-data-v-1b3bb086{20%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}60%{opacity:1;-webkit-transform:scale(1.5);transform:scale(1.5)}80%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}}@keyframes pageLoading2-data-v-1b3bb086{20%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}60%{opacity:1;-webkit-transform:scale(1.5);transform:scale(1.5)}80%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes pageLoading3-data-v-1b3bb086{40%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}80%{opacity:1;-webkit-transform:scale(1.5);transform:scale(1.5)}100%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}}@keyframes pageLoading3-data-v-1b3bb086{40%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}80%{opacity:1;-webkit-transform:scale(1.5);transform:scale(1.5)}100%{opacity:.5;-webkit-transform:scale(1);transform:scale(1)}}.animate1[data-v-1b3bb086]{-webkit-animation:pageLoading1-data-v-1b3bb086 1.2s infinite linear;animation:pageLoading1-data-v-1b3bb086 1.2s infinite linear}.animate2[data-v-1b3bb086]{-webkit-animation:pageLoading2-data-v-1b3bb086 1.2s infinite linear;animation:pageLoading2-data-v-1b3bb086 1.2s infinite linear}.animate3[data-v-1b3bb086]{-webkit-animation:pageLoading3-data-v-1b3bb086 1.2s infinite linear;animation:pageLoading3-data-v-1b3bb086 1.2s infinite linear}",""]),e.exports=t}}]);