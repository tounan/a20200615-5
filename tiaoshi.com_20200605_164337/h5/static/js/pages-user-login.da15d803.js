(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-user-login"],{"1eb0":function(e,t,a){"use strict";var n={gracePage:a("9a35").default,graceFlex:a("ee17").default},i=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("gracePage",{attrs:{customHeader:!1}},[a("v-uni-view",{staticClass:"grace-body",attrs:{slot:"gBody"},slot:"gBody"},[a("v-uni-view",{staticClass:"marginTop grace-flex-center"},[a("v-uni-image",{staticClass:"logo",attrs:{src:e.$store.state.config.site_url+"/"+e.$store.state.config.site_waplogo,mode:"widthFix"}})],1),a("v-uni-form",{staticClass:"grace-form",staticStyle:{"margin-top":"80rpx"},on:{submit:function(t){arguments[0]=t=e.$handleEvent(t),e.login.apply(void 0,arguments)}}},[a("v-uni-view",{staticClass:"grace-form-item grace-border-b"},[a("v-uni-text",{staticClass:"grace-form-label"},[e._v("账号")]),a("v-uni-view",{staticClass:"grace-form-body"},[a("v-uni-input",{staticClass:"grace-form-input",attrs:{type:"number",name:"user_name",placeholder:"请输入您的登录账号"},model:{value:e.phoneno,callback:function(t){e.phoneno=t},expression:"phoneno"}})],1)],1),a("v-uni-view",{staticClass:"grace-form-item"},[a("v-uni-text",{staticClass:"grace-form-label"},[e._v("密码")]),a("v-uni-view",{staticClass:"grace-form-body"},[a("v-uni-input",{staticClass:"grace-form-input",attrs:{type:"number",name:"user_pwd",placeholder:"请输入您的登录密码"}})],1)],1),a("v-uni-view",{staticClass:"grace-margin-top"},[a("v-uni-button",{staticClass:"primary-bg grace-button grace-border-radius ",attrs:{"form-type":"submit",type:"primary"}},[e._v("登录"),a("v-uni-text",{staticClass:"grace-icons icon-arrow-right"})],1)],1),a("graceFlex",{attrs:{classes:["row","space-between"]}},[a("v-uni-view",{staticClass:"demo2 ",on:{click:function(t){arguments[0]=t=e.$handleEvent(t),e.to("/pages/user/reg")}}},[e._v("注册")]),a("v-uni-view",{staticClass:"demo2  grace-no-scale",on:{click:function(t){arguments[0]=t=e.$handleEvent(t),e.to("/pages/user/wjmm")}}},[e._v("忘记密码")])],1)],1)],1)],1)},o=[];a.d(t,"b",(function(){return i})),a.d(t,"c",(function(){return o})),a.d(t,"a",(function(){return n}))},5853:function(e,t,a){var n=a("24fb");t=n(!1),t.push([e.i,".marginTop[data-v-1c13cfae]{margin-top:%?100?%}.logo[data-v-1c13cfae]{width:%?95?%;height:%?95?%}.login-sendmsg-btn[data-v-1c13cfae]{height:%?60?%;width:%?200?%;-webkit-flex-shrink:0;flex-shrink:0;margin-left:%?30?%;text-align:center;background-color:#3688ff;line-height:%?60?%;font-size:%?26?%}.grace-pnper[data-v-1c13cfae]{width:%?168?%;-webkit-flex-shrink:0;flex-shrink:0}.grace-form-label[data-v-1c13cfae]{width:%?168?%}.grace-form-input[data-v-1c13cfae]{text-align:left}.grace-form-item[data-v-1c13cfae]{padding:%?10?% 0}.grace-login-three-items[data-v-1c13cfae]{display:block;width:%?88?%;height:%?88?%;line-height:%?88?%;font-size:%?60?%;color:#3688ff;text-align:center;margin:%?10?%}",""]),e.exports=t},"6eed":function(e,t,a){"use strict";a.r(t);var n=a("9574"),i=a.n(n);for(var o in n)"default"!==o&&function(e){a.d(t,e,(function(){return n[e]}))}(o);t["default"]=i.a},9574:function(e,t,a){"use strict";var n=a("ee27");Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i=n(a("9a35")),o=(a("4551"),{data:function(){return{pnpre:0,pnpres:["86","01","11","26","520"],vcodeBtnName:"获取验证码",countNum:120,countDownTimer:null,phoneno:""}},methods:{login:function(e){var t=this;console.log(e),""==e.detail.value["user_name"]&&uni.showToast({title:"请输入用户！",icon:"none"}),""==e.detail.value["user_pwd"]&&uni.showToast({title:"请输入密码！",icon:"none"}),uni.request({url:"http://163.44.167.135:7788/api.php/user/login",method:"post",data:e.detail.value,success:function(e){console.log(e),1==e.data.code?t.to({typw:"type"}):uni.showToast({title:e.data.msg,icon:"none"})},fail:function(){},complete:function(){}})}},components:{gracePage:i.default}});t.default=o},c426:function(e,t,a){var n=a("5853");"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var i=a("4f06").default;i("0a075576",n,!0,{sourceMap:!1,shadowMode:!1})},c827:function(e,t,a){"use strict";var n=a("c426"),i=a.n(n);i.a},ee2e:function(e,t,a){"use strict";a.r(t);var n=a("1eb0"),i=a("6eed");for(var o in i)"default"!==o&&function(e){a.d(t,e,(function(){return i[e]}))}(o);a("c827");var r,c=a("f0c5"),s=Object(c["a"])(i["default"],n["b"],n["c"],!1,null,"1c13cfae",null,!1,n["a"],r);t["default"]=s.exports}}]);