(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-tabBar-index2"],{"49de":function(t,e,a){var i=a("24fb"),n=a("1de5"),r=a("723a"),s=a("4da3");e=i(!1);var c=n(r),o=n(s);e.push([t.i,".body[data-v-76dd9f2c]{padding:0 %?30?%;width:%?570?%}.grace-tags-larges[data-v-76dd9f2c]{display:inline-block;padding:5px 10px;height:20px;\n\t/* line-height: 20px; */font-size:14px;background:#a5a7b2;color:#fff}.board[data-v-76dd9f2c]{position:relative;z-index:9999;width:%?630?%;height:%?800?%;margin:0 auto;background-color:#fff;-webkit-border-radius:15px;border-radius:15px;background-position:top;background-repeat:no-repeat;background-size:contain;background-image:url("+c+")}.join-vip[data-v-76dd9f2c]{position:fixed;z-index:1;bottom:80px;right:10px;width:60px;height:60px;background-image:url("+o+");background-position:50%;background-repeat:no-repeat;background-size:cover;-webkit-filter:drop-shadow(0 0 3px rgba(0,0,0,.5));filter:drop-shadow(0 0 3px rgba(0,0,0,.5))}.border-left[data-v-76dd9f2c]{border-left:6px solid #fc2067;padding-left:10px;margin-bottom:15px}.grace-button[data-v-76dd9f2c]{line-height:40px;height:40px}",""]),t.exports=e},a0ef:function(t,e,a){"use strict";var i={gracePage:a("9a35").default,graceNavBar:a("789e").default,graceSearch:a("4cbb").default,vodlist:a("7c53").default,ads:a("601a").default,graceShade:a("0d83").default},n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("gracePage",{attrs:{headerHeight:t.headerHeight,loadingBG:"rgba(255,255,255,1)",isLoading:t.pageLoading,headerBG:"#FFFFFF"}},[a("v-uni-view",{attrs:{slot:"gRTArea"},slot:"gRTArea"},[a("v-uni-view",{staticClass:"join-vip"})],1),a("v-uni-view",{staticClass:"grace-body margin-top-sm",attrs:{slot:"gHeader"},slot:"gHeader"},[a("v-uni-view",{staticClass:"grace-nowrap"},[a("graceNavBar",{staticStyle:{width:"92%"},attrs:{items:t.vodnav,lineHeight:"80rpx",currentIndex:t.navIndex,size:110,activeLineBg:t.theme.primary,activeColor:t.theme.primary,textAlign:"center",activeLineWidth:"100%",color:t.theme.info,margin:15},on:{change:function(e){arguments[0]=e=t.$handleEvent(e),t.navChange.apply(void 0,arguments)}}}),a("v-uni-view",{on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.todaohang.apply(void 0,arguments)}}},[a("v-uni-text",{staticClass:"grace-grids-icon grace-icons icon-menu primary"})],1)],1),a("v-uni-view",{staticClass:"margin-tb-sm"},[a("v-uni-view",{staticClass:"grace-nowrap"},[a("graceSearch",{attrs:{disabled:!0,background:t.theme.bgcolor},on:{tapme:function(e){arguments[0]=e=t.$handleEvent(e),t.tapme.apply(void 0,arguments)}}}),a("v-uni-view",{staticClass:"grace-tags-larges grace-tbr-large  margin-left-sm primary-border primary grace-bg-white width-5",staticStyle:{}},[a("v-uni-view",{staticClass:"grace-nowrap",on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.totype.apply(void 0,arguments)}}},[t._v("筛选"),a("v-uni-text",{staticClass:" grace-icons icon-arrow-down",staticStyle:{"padding-top":"2.5px","padding-left":"5px"}})],1)],1)],1)],1)],1),a("v-uni-view",{staticClass:"grace-body",attrs:{slot:"gBody",id:"gBody"},slot:"gBody"},[a("v-uni-swiper",{style:{height:t.mainHeight+"px"},attrs:{current:t.navIndex},on:{change:function(e){arguments[0]=e=t.$handleEvent(e),t.swiperChange.apply(void 0,arguments)}}},t._l(t.vodnav.length,(function(e,i){return a("v-uni-swiper-item",{key:i},[a("v-uni-scroll-view",{style:{height:t.mainHeight+"px"},attrs:{"scroll-y":"true"}},[0==t.navIndex?a("v-uni-view",[a("v-uni-swiper",{staticClass:"grace-swiper",staticStyle:{height:"276rpx"},attrs:{autoplay:"true","indicator-dots":!0,"indicator-color":"rgba(255, 255, 255, 1)","indicator-active-color":"#3688FF",interval:"3000"}},[a("v-uni-swiper-item",{staticClass:"grace-swiper-item"},[a("v-uni-navigator",{staticClass:"grace-img-in",attrs:{url:""}},[a("v-uni-image",{staticClass:"swiper-image width-1",attrs:{mode:"widthFix",src:"https://graceui.oss-cn-beijing.aliyuncs.com/swiperimgs/1.png"}})],1)],1),a("v-uni-swiper-item",{staticClass:"grace-swiper-item"},[a("v-uni-navigator",{staticClass:"grace-img-in",attrs:{url:""}},[a("v-uni-image",{staticClass:"swiper-image width-1",attrs:{mode:"widthFix",src:"https://graceui.oss-cn-beijing.aliyuncs.com/swiperimgs/2.png"}})],1)],1),a("v-uni-swiper-item",{staticClass:"grace-swiper-item"},[a("v-uni-navigator",{staticClass:"grace-img-in",attrs:{url:""}},[a("v-uni-image",{staticClass:"swiper-image width-1",attrs:{mode:"widthFix",src:"https://graceui.oss-cn-beijing.aliyuncs.com/swiperimgs/3.png"}})],1)],1)],1),a("v-uni-view",{staticClass:"grace-title grace-margin-top"},[a("v-uni-text",{staticClass:"grace-title-text grace-black border-left"},[t._v("热门")])],1),a("vodlist",{attrs:{list:t.vodhits}}),a("v-uni-view",{staticClass:"grace-space-between",staticStyle:{height:"42px"}},[a("v-uni-view",{staticClass:"width-1",staticStyle:{"margin-right":"20rpx"}},[a("v-uni-button",{staticClass:"grace-tbr-large grace-button",attrs:{type:"primary",plain:"true"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.totype.apply(void 0,arguments)}}},[t._v("查看更多视频")])],1),a("v-uni-view",{staticClass:"width-1"},[a("v-uni-button",{staticClass:"grace-tbr-large grace-button",attrs:{type:"primary",plain:"true"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.getvodhits("rnd")}}},[t._v("换一批")])],1)],1),a("v-uni-view",{staticClass:"grace-title grace-margin-top"},[a("v-uni-text",{staticClass:"grace-title-text grace-black border-left"},[t._v("最新")])],1),a("vodlist",{attrs:{list:t.vodtime}}),a("v-uni-view",{staticClass:"grace-space-between",staticStyle:{height:"42px"}},[a("v-uni-view",{staticClass:"width-1",staticStyle:{"margin-right":"20rpx"}},[a("v-uni-button",{staticClass:"grace-tbr-large grace-button",attrs:{type:"primary",plain:"true"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.totype.apply(void 0,arguments)}}},[t._v("查看更多视频")])],1),a("v-uni-view",{staticClass:"width-1"},[a("v-uni-button",{staticClass:"grace-tbr-large grace-button",attrs:{type:"primary",plain:"true"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.getvodtime("rnd")}}},[t._v("换一批")])],1)],1),t._l(t.vodnavid,(function(e,i){return a("v-uni-view",{key:i},[a("v-uni-view",{staticClass:"grace-title grace-margin-top"},[a("v-uni-text",{staticClass:"grace-title-text grace-black border-left"},[t._v(t._s(t.vodnav[i+1]))])],1),a("vodlist",{attrs:{list:t.vodlist[e]}}),a("v-uni-view",{staticClass:"grace-space-between",staticStyle:{height:"42px"}},[a("v-uni-view",{staticClass:"width-1",staticStyle:{"margin-right":"20rpx"}},[a("v-uni-button",{staticClass:"grace-tbr-large grace-button",attrs:{type:"primary",plain:"true"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.totype.apply(void 0,arguments)}}},[t._v("查看更多视频")])],1),a("v-uni-view",{staticClass:"width-1"},[a("v-uni-button",{staticClass:"grace-tbr-large grace-button",attrs:{type:"primary",plain:"true"},on:{click:function(a){arguments[0]=a=t.$handleEvent(a),t.upvodlist(e)}}},[t._v("换一批")])],1)],1)],1)}))],2):a("v-uni-view",[a("ads"),a("vodlist",{staticClass:"grace-margin-top",attrs:{list:t.list[t.vodnavid[t.navIndex-1]]}})],1)],1)],1)})),1),a("graceShade",{attrs:{show:t.show},on:{closeShade:function(e){arguments[0]=e=t.$handleEvent(e),t.closeShade.apply(void 0,arguments)}}},[a("v-uni-view",{ref:"page",staticClass:" grace-relative board "},[a("v-uni-view",{staticClass:"body"},[a("v-uni-view",{staticClass:"grace-nowrap grace-flex-vcenter "},[a("v-uni-text",{staticClass:"grace-h3 grace-flex1 grace-text-center margin-tb-xl grace-white"},[t._v(t._s(t.article.title))])],1),a("v-uni-view",{staticClass:"grace-nowrap grace-margin-top",staticStyle:{height:"500rpx"}},[a("v-uni-rich-text",{attrs:{type:"text",nodes:t.article.contents}})],1),a("v-uni-view",{staticClass:"grace-space-between"},[a("v-uni-view",{staticClass:"width-1",staticStyle:{"margin-right":"20rpx"}},[a("v-uni-button",{staticClass:"grace-button grace-bg-gray ",attrs:{type:"primary"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.closeShade.apply(void 0,arguments)}}},[t._v("关闭")])],1),a("v-uni-view",{staticClass:"width-1"},[a("v-uni-button",{staticClass:"grace-button primary-bg",attrs:{type:"primary"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.open.apply(void 0,arguments)}}},[t._v("立即前往")])],1)],1)],1)],1)],1)],1)],1)},r=[];a.d(e,"b",(function(){return n})),a.d(e,"c",(function(){return r})),a.d(e,"a",(function(){return i}))},ae98:function(t,e,a){"use strict";a.r(e);var i=a("b3e5"),n=a.n(i);for(var r in i)"default"!==r&&function(t){a.d(e,t,(function(){return i[t]}))}(r);e["default"]=n.a},b3e5:function(t,e,a){"use strict";var i=a("ee27");a("99af"),a("ac1f"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0,a("96cf");var n=i(a("c964")),r=6,s=36,c={data:function(){return{vodtime:[],vodhits:[],vodlist:[],headerHeight:110,vodnav:["推荐"],vodslide:[],types:[{type_name:"精选"}],navIndex:0,show:!1,article:{title:"官網地址",contents:'<p><span style="font-weight: 400;">原有jav101已经更名为<span style="color: #ff99cc;">啪哩啪哩</span>，原有的<span style="color: #ff99cc;">会员资格以及服务内容不变</span>，请各位继续支持！</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">永久页也调整为<a href="https://pali.cc">pali.cc</a>，之后由新域名进入唷~</span></p>'},mainHeight:570,pageLoading:!0,list:[],vodnavid:[],start:[0,0,0,0,0,0]}},onLoad:function(){this.getnav(),this.getvodhits(),this.getvodtime()},onReady:function(){var t=this;this.vodlist=this.vodlist,setTimeout((function(){uni.createSelectorQuery().select("#gBody").fields({size:!0},(function(e){t.mainHeight=e.height})).exec()}),1e3),setTimeout((function(){t.pageLoading=!1}),1500)},methods:{getnav:function(){var t=this;return(0,n.default)(regeneratorRuntime.mark((function e(){var a,i,n,r,c,o;return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,uni.request({url:"http://163.44.167.135:7788/api.php",data:{maccms:"type",order:"asc",by:"sort",parent:s}});case 2:for(c in a=e.sent,i=a[1].data.list,n=t.vodnav,r=[],i)n.push(i[c].type_name),r.push(i[c].type_id),o=i[c].type_id,t.upvodlist(o),t.upvodlists(o);t.vodnav=n,t.$store.commit("setState",{vodnav:n}),t.vodnavid=r,t.$store.commit("setState",{vodnavid:r});case 11:case"end":return e.stop()}}),e)})))()},addvodlists:function(t){var e=this;return(0,n.default)(regeneratorRuntime.mark((function a(){var i;return regeneratorRuntime.wrap((function(a){while(1)switch(a.prev=a.next){case 0:return e,a.next=3,uni.request({url:"http://163.44.167.135:7788/api.php",data:{maccms:"vod",num:r,type:t,order:"desc",by:"time"}});case 3:i=a.sent,e.list.concat(i[1].data.list);case 5:case"end":return a.stop()}}),a)})))()},upvodlists:function(t){var e=this;return(0,n.default)(regeneratorRuntime.mark((function a(){var i;return regeneratorRuntime.wrap((function(a){while(1)switch(a.prev=a.next){case 0:return e,a.next=3,uni.request({url:"http://163.44.167.135:7788/api.php",data:{maccms:"vod",num:r,type:t,order:"desc",by:"time"}});case 3:i=a.sent,e.list[t]=i[1].data.list,e.list=e.list;case 6:case"end":return a.stop()}}),a)})))()},getvodhits:function(){var t=arguments,e=this;return(0,n.default)(regeneratorRuntime.mark((function a(){var i,n;return regeneratorRuntime.wrap((function(a){while(1)switch(a.prev=a.next){case 0:return i=t.length>0&&void 0!==t[0]?t[0]:"hits_month",a.next=3,uni.request({url:"http://163.44.167.135:7788/api.php",data:{maccms:"vod",num:r,type:s,order:"desc",by:i}});case 3:n=a.sent,e.vodhits=n[1].data.list;case 5:case"end":return a.stop()}}),a)})))()},getvodtime:function(){var t=arguments,e=this;return(0,n.default)(regeneratorRuntime.mark((function a(){var i,n;return regeneratorRuntime.wrap((function(a){while(1)switch(a.prev=a.next){case 0:return i=t.length>0&&void 0!==t[0]?t[0]:"time",a.next=3,uni.request({url:"http://163.44.167.135:7788/api.php",data:{maccms:"vod",num:r,type:s,order:"desc",by:i}});case 3:n=a.sent,e.vodtime=n[1].data.list;case 5:case"end":return a.stop()}}),a)})))()},getvodlist:function(){var t=this.vodnavid;for(var e in t)this.upvodlist(t[e]),this.upvodlists(t[e])},upvodlist:function(t){var e=this;return(0,n.default)(regeneratorRuntime.mark((function a(){var i;return regeneratorRuntime.wrap((function(a){while(1)switch(a.prev=a.next){case 0:return e,a.next=3,uni.request({url:"http://163.44.167.135:7788/api.php",data:{maccms:"vod",num:r,type:t,order:"desc",by:"rnd"}});case 3:i=a.sent,e.vodlist[t]=i[1].data.list,e.vodlist=e.vodlist;case 6:case"end":return a.stop()}}),a)})))()},navChange:function(t){this.navIndex=t},swiperChange:function(t){var e=t.detail.current;this.navIndex=e},showShade:function(){this.show=!0},closeShade:function(){this.show=!1},tapme:function(){this.to("/pages/vod/search")},open:function(){},todaohang:function(){this.to("/pages/vod/daohang")},totype:function(){this.to("/pages/vod/type")},gettype:function(){var t=this;return(0,n.default)(regeneratorRuntime.mark((function e(){var a,i,n,r,s;return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:if(a=t,i=uni.getStorageSync("navItems"),!i){e.next=6;break}a.setData({navItems:i}),e.next=11;break;case 6:return e.next=8,uni.request({url:"http://163.44.167.135:7788/api.php",data:{maccms:"type",order:"asc",by:"sort",parent:"1"}});case 8:for(s in n=e.sent,r=n[1].data.list,r)a.navItems.push(r[s].type_name),uni.setStorageSync("navItems",a.navItems),a.setData({navItems:a.navItems}),a.navIndexs.push(r[s].type_id),uni.setStorageSync("navIndexs",a.navIndexs),a.setData({navIndexs:a.navIndexs});case 11:case"end":return e.stop()}}),e)})))()}}};e.default=c},d4ba:function(t,e,a){var i=a("49de");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var n=a("4f06").default;n("5391d3b8",i,!0,{sourceMap:!1,shadowMode:!1})},d82c:function(t,e,a){"use strict";var i=a("d4ba"),n=a.n(i);n.a},f759:function(t,e,a){"use strict";a.r(e);var i=a("a0ef"),n=a("ae98");for(var r in n)"default"!==r&&function(t){a.d(e,t,(function(){return n[t]}))}(r);a("d82c");var s,c=a("f0c5"),o=Object(c["a"])(n["default"],i["b"],i["c"],!1,null,"76dd9f2c",null,!1,i["a"],s);e["default"]=o.exports}}]);