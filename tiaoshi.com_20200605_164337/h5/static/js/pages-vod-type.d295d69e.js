(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-vod-type"],{"1a6c":function(t,a,e){"use strict";e.r(a);var i=e("c131"),s=e("ab7d");for(var n in s)"default"!==n&&function(t){e.d(a,t,(function(){return s[t]}))}(n);e("5aac");var r,c=e("f0c5"),o=Object(c["a"])(s["default"],i["b"],i["c"],!1,null,"46daf610",null,!1,i["a"],r);a["default"]=o.exports},"2eaf":function(t,a,e){"use strict";e.r(a);var i=e("5d7d"),s=e("4e25");for(var n in s)"default"!==n&&function(t){e.d(a,t,(function(){return s[t]}))}(n);e("45f0");var r,c=e("f0c5"),o=Object(c["a"])(s["default"],i["b"],i["c"],!1,null,"057a57ea",null,!1,i["a"],r);a["default"]=o.exports},"45f0":function(t,a,e){"use strict";var i=e("d4d4"),s=e.n(i);s.a},"4e25":function(t,a,e){"use strict";e.r(a);var i=e("4e68"),s=e.n(i);for(var n in i)"default"!==n&&function(t){e.d(a,t,(function(){return i[t]}))}(n);a["default"]=s.a},"4e68":function(t,a,e){"use strict";e("a434"),Object.defineProperty(a,"__esModule",{value:!0}),a.default=void 0;var i={props:{itemWidth:{type:String,default:"200rpx"},type:{type:String,default:""},selectedColor:{type:String,default:"#fc2067"},fontSize:{type:String,default:"26rpx"},items:{type:Array,default:function(){return[]}},datas:{type:Array,default:function(){return[]}},bgColor:{type:String,default:"#F6F7F8"},height:{type:String,default:"68rpx"},borderRadius:{type:String,default:"10rpx"},fontColor:{type:String,default:"#323232"},fontActiveColor:{type:String,default:"#FFFFFF"}},created:function(){this.tagsData=null==this.items?[]:this.items,this.initChange()},data:function(){return{tagsData:[]}},watch:{items:function(t){this.tagsData=t,this.initChange()}},methods:{initChange:function(){if("radio"==this.type){for(var t=-1,a="",e=0;e<this.tagsData.length;e++)this.tagsData[e].checked&&(t=e,a=this.tagsData[e].value);this.$emit("change",a,this.datas,t)}else{var i=[],s=[];for(e=0;e<this.tagsData.length;e++)this.tagsData[e].checked&&(i.push(this.tagsData[e].value),s.push(e));this.$emit("change",i,this.datas,s)}},graceSelectChange:function(t){if("radio"==this.type){for(var a=0;a<this.tagsData.length;a++)this.tagsData[a].checked=!1,this.tagsData.splice(a,1,this.tagsData[a]);this.tagsData[t].checked=!0,this.tagsData.splice(t,1,this.tagsData[t]),this.$emit("change",this.tagsData[t].value,this.datas,t)}else{this.tagsData[t].checked?this.tagsData[t].checked=!1:this.tagsData[t].checked=!0;var e=[],i=[];for(a=0;a<this.tagsData.length;a++)this.tagsData[a].checked&&(e.push(this.tagsData[a].value),i.push(a));this.$emit("change",e,this.datas,i)}},setItems:function(t){this.tagsData=t,this.initChange()},clearSelected:function(){for(var t=[],a=0;a<this.tagsData.length;a++)this.tagsData[a].checked=!1,t.push(this.tagsData[a]);this.tagsData=t,"radio"==this.type?this.$emit("change","",this.datas,-1):this.$emit("change",[],this.datas,[])},selectAll:function(){if("radio"!=this.type){for(var t=[],a=[],e=[],i=0;i<this.tagsData.length;i++)this.tagsData[i].checked=!0,t.push(this.tagsData[i]),a.push(this.tagsData[i].value),e.push(i);this.tagsData=t,this.$emit("change",a,this.datas,e)}}}};a.default=i},"5aac":function(t,a,e){"use strict";var i=e("c726"),s=e.n(i);s.a},"5d7d":function(t,a,e){"use strict";var i,s=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("v-uni-view",{staticClass:"grace-select-tags"},t._l(t.tagsData,(function(a,i){return e("v-uni-view",{key:i,staticClass:"grace-select-tag",style:{width:t.itemWidth,background:a.checked?t.selectedColor+" !important":t.bgColor,fontSize:t.fontSize,height:t.height,lineHeight:t.height,borderRadius:t.borderRadius,color:a.checked?t.fontActiveColor:t.fontColor},on:{click:function(a){a.stopPropagation(),arguments[0]=a=t.$handleEvent(a),t.graceSelectChange(i)}}},[t._v(t._s(a.name))])})),1)},n=[];e.d(a,"b",(function(){return s})),e.d(a,"c",(function(){return n})),e.d(a,"a",(function(){return i}))},7158:function(t,a,e){"use strict";Object.defineProperty(a,"__esModule",{value:!0}),a.default=void 0;var i={data:function(){return{list:[],demo2Val:0,demo2:[{name:"php",value:"0",checked:!0},{name:".net",value:"1",checked:!1},{name:"java",value:"2",checked:!1},{name:"nodeJs",value:"3",checked:!1},{name:"其他",value:"4",checked:!1},{name:"人气最高",value:"0",checked:!0},{name:"片量最高",value:"1",checked:!1}]}},onLoad:function(){this.get()},methods:{get:function(){var t=this;uni.request({url:"http://163.44.167.135:7788/api.php",data:{maccms:"vod",num:"5",order:"desc",by:"time"},success:function(a){t.list=a.data.list},fail:function(){},complete:function(){}})},change1:function(){}}};a.default=i},ab7d:function(t,a,e){"use strict";e.r(a);var i=e("7158"),s=e.n(i);for(var n in i)"default"!==n&&function(t){e.d(a,t,(function(){return i[t]}))}(n);a["default"]=s.a},c131:function(t,a,e){"use strict";var i={gracePage:e("9a35").default,graceSelectTags:e("2eaf").default,vodlist:e("7c53").default},s=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("gracePage",[e("v-uni-view",{staticClass:"grace-body",attrs:{slot:"gBody",id:"gBody"},slot:"gBody"},[e("v-uni-scroll-view",{staticClass:"grace-scroll-y",attrs:{"scroll-y":!0,"scroll-top":"30"}},[e("v-uni-scroll-view",{staticClass:"grace-scroll-x",attrs:{"show-scrollbar":!1,"scroll-x":!0}},[e("graceSelectTags",{attrs:{items:t.demo2,type:"radio"},on:{change:function(a){arguments[0]=a=t.$handleEvent(a),t.change1.apply(void 0,arguments)}}})],1),e("v-uni-scroll-view",{staticClass:"grace-scroll-x",attrs:{"show-scrollbar":!1,"scroll-x":!0}},[e("graceSelectTags",{attrs:{items:t.demo2,type:"radio"},on:{change:function(a){arguments[0]=a=t.$handleEvent(a),t.change1.apply(void 0,arguments)}}})],1),e("v-uni-scroll-view",{staticClass:"grace-scroll-x",attrs:{"show-scrollbar":!1,"scroll-x":!0}},[e("graceSelectTags",{attrs:{items:t.demo2,type:"radio"},on:{change:function(a){arguments[0]=a=t.$handleEvent(a),t.change1.apply(void 0,arguments)}}})],1),e("vodlist",{attrs:{list:t.list}})],1)],1)],1)},n=[];e.d(a,"b",(function(){return s})),e.d(a,"c",(function(){return n})),e.d(a,"a",(function(){return i}))},c726:function(t,a,e){var i=e("d0a6");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var s=e("4f06").default;s("31a75410",i,!0,{sourceMap:!1,shadowMode:!1})},d0a6:function(t,a,e){var i=e("24fb");a=i(!1),a.push([t.i,".grace-scroll-y[data-v-46daf610]{height:%?1500?%}.grace-select-tags[data-v-46daf610]{width:1000px}",""]),t.exports=a},d4d4:function(t,a,e){var i=e("e566");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var s=e("4f06").default;s("79dc6e7e",i,!0,{sourceMap:!1,shadowMode:!1})},e566:function(t,a,e){var i=e("24fb");a=i(!1),a.push([t.i,".grace-select-tags[data-v-057a57ea]{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;flex-direction:row;-webkit-flex-wrap:wrap;flex-wrap:wrap}.grace-select-tag[data-v-057a57ea]{height:%?68?%;line-height:%?68?%;overflow:hidden;-webkit-box-sizing:border-box;box-sizing:border-box;padding-left:%?15?%;padding-right:%?15?%;text-align:center;margin:%?10?%;font-size:%?24?%;-webkit-border-radius:%?8?%;border-radius:%?8?%}",""]),t.exports=a}}]);