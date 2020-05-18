!function(e){function s(o){if(l[o])return l[o].exports;var t=l[o]={i:o,l:!1,exports:{}};return e[o].call(t.exports,t,t.exports,s),t.l=!0,t.exports}var l={};s.m=e,s.c=l,s.d=function(e,l,o){s.o(e,l)||Object.defineProperty(e,l,{configurable:!1,enumerable:!0,get:o})},s.n=function(e){var l=e&&e.__esModule?function(){return e.default}:function(){return e};return s.d(l,"a",l),l},s.o=function(e,s){return Object.prototype.hasOwnProperty.call(e,s)},s.p="",s(s.s=0)}([function(e,s,l){"use strict";Object.defineProperty(s,"__esModule",{value:!0});l(1)},function(e,s,l){"use strict";var o=l(2),t=(l.n(o),l(3)),n=(l.n(t),l(4)),__=wp.i18n.__;(0,wp.blocks.registerBlockType)("wpls/logoshowcase",{title:__("Logo Slider","wp-logo-showcase-responsive-slider-slider"),description:__("Display logo in a slider view with various layouts.","wp-logo-showcase-responsive-slider-slider"),icon:"images-alt2",category:"wpos_guten_block",keywords:[__("wpos"),__("wpls logo slider","wp-logo-showcase-responsive-slider-slider"),__("logoshowcase")],supports:{html:!1,multiple:!0},getEditWrapperProps:function(e){var s=e.align;if(["wide","full"].includes(s))return{"data-align":s,"data-block-type":"wpls-logo-slider"}},edit:n.a,save:function(){return null}})},function(e,s){},function(e,s){},function(e,s,l){"use strict";function o(e,s){if(!(e instanceof s))throw new TypeError("Cannot call a class as a function")}function t(e,s){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!s||"object"!==typeof s&&"function"!==typeof s?e:s}function n(e,s){if("function"!==typeof s&&null!==s)throw new TypeError("Super expression must either be null or a function, not "+typeof s);e.prototype=Object.create(s&&s.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),s&&(Object.setPrototypeOf?Object.setPrototypeOf(e,s):e.__proto__=s)}var r=function(){function e(e,s){for(var l=0;l<s.length;l++){var o=s[l];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(s,l,o){return l&&e(s.prototype,l),o&&e(s,o),s}}(),i=wp.element,a=i.Component,p=i.Fragment,d=wp.components,c=d.PanelBody,w=d.Disabled,m=d.TextControl,u=d.ToggleControl,h=d.RangeControl,g=d.SelectControl,__=wp.i18n.__,v=(wp.data.select,wp.editor),f=v.InspectorControls,E=v.BlockControls,b=v.BlockAlignmentToolbar,y=function(e){function s(){o(this,s);var e=t(this,(s.__proto__||Object.getPrototypeOf(s)).apply(this,arguments));return e.state={isLoading:!1},e}return n(s,e),r(s,[{key:"ObjToString",value:function(e){var s=wp.blocks.getBlockAttributes("wpls/logoshowcase"),l=["content_tail"],o="";for(var t in e)e.hasOwnProperty(t)&&"undefined"!==typeof e[t]&&e[t]!==s[t]&&(""!=jQuery.trim(e[t])||jQuery.inArray(t,l)>=0)&&(o+=t+'="'+e[t]+'" ');return o}},{key:"GetBooleanDropdown",value:function(){return[{value:"true",label:__("True","wp-logo-showcase-responsive-slider-slider")},{value:"false",label:__("False","wp-logo-showcase-responsive-slider-slider")}]}},{key:"GetDesigns",value:function(){return[{value:"design-1",label:__("Design 1","wp-logo-showcase-responsive-slider-slider")}]}},{key:"GetAnimationEffect",value:function(){return[{value:"",label:__("Select Animation Effect","wp-logo-showcase-responsive-slider-slider")}]}},{key:"GetLinkTarget",value:function(){return[{value:"self",label:__("Same Window","wp-logo-showcase-responsive-slider-slider")},{value:"blank",label:__("New Window","wp-logo-showcase-responsive-slider-slider")}]}},{key:"GetPostOrderby",value:function(){return[{value:"date",label:__("Post Date","wp-logo-showcase-responsive-slider-slider")},{value:"modified",label:__("Post Modified Date","wp-logo-showcase-responsive-slider-slider")},{value:"title",label:__("Post Title","wp-logo-showcase-responsive-slider-slider")},{value:"name",label:__("Post Slug","wp-logo-showcase-responsive-slider-slider")},{value:"ID",label:__("Post ID","wp-logo-showcase-responsive-slider-slider")},{value:"rand",label:__("Random","wp-logo-showcase-responsive-slider-slider")}]}},{key:"GetPostOrder",value:function(){return[{value:"desc",label:__("Descending","wp-logo-showcase-responsive-slider-slider")},{value:"asc",label:__("Ascending","wp-logo-showcase-responsive-slider-slider")}]}},{key:"GetLazyloadDropdown",value:function(){return[{value:"",label:__("Select Lazyload","wp-logo-showcase-responsive-slider-slider")},{value:"ondemand",label:__("Ondemand","wp-logo-showcase-responsive-slider-slider")},{value:"progressive",label:__("Progressive","wp-logo-showcase-responsive-slider-slider")}]}},{key:"componentDidMount",value:function(){}},{key:"componentDidUpdate",value:function(e){var s=wp.data.select("core/editor").getEditorSettings(),l=s.alignWide;e.attributes;l||this.props.setAttributes({align:void 0})}},{key:"render",value:function(){var e=this.props,s=e.attributes,l=e.setAttributes,o=s.limit,t=s.design,n=s.cat_id,r=s.cat_name,i=s.slides_column,a=s.slides_scroll,d=s.dots,v=s.arrows,y=s.autoplay,_=s.autoplay_interval,k=s.speed,C=s.center_mode,P=s.loop,B=s.lazyload,D=s.link_target,S=s.show_title,O=s.image_size,G=s.orderby,W=s.order,N=s.hide_border,x=s.max_height,L=s.align,T=(s.className,this.state.isLoading,wp.element.createElement(f,null,wp.element.createElement(c,{title:__("General Parameters","wp-logo-showcase-responsive-slider-slider")},wp.element.createElement(m,{label:__("Logo Showcase Heading","wp-logo-showcase-responsive-slider-slider"),value:r,onChange:function(e){return l({cat_name:e})},help:__("Enter Logo Heading.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(g,{label:__("Design","wp-logo-showcase-responsive-slider-slider"),value:t,options:this.GetDesigns(),onChange:function(e){return l({design:e})}}),wp.element.createElement(u,{label:__("Show Title","wp-logo-showcase-responsive-slider-slider"),checked:!!S,onChange:function(){return l({show_title:!S})}}),wp.element.createElement(w,null,wp.element.createElement(u,{label:__("Show Tooltip","wp-logo-showcase-responsive-slider-slider"),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Choose option to enable/disable tooltip on logo. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(w,null,wp.element.createElement(h,{label:__("Content Words Limit","wp-logo-showcase-responsive-slider-slider"),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Enter content word limit. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(w,null,wp.element.createElement(m,{label:__("Content Tail","wp-logo-showcase-responsive-slider-slider"),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Display dots after the post content as continue reading. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(w,null,wp.element.createElement(g,{label:__("Link","wp-logo-showcase-responsive-slider-slider"),options:this.GetBooleanDropdown()})),wp.element.createElement(g,{label:__("Link Behaviour","wp-logo-showcase-responsive-slider-slider"),value:D,options:this.GetLinkTarget(),onChange:function(e){return l({link_target:e})}}),wp.element.createElement(w,null,wp.element.createElement(g,{label:__("Animation Effect","wp-logo-showcase-responsive-slider-slider"),options:this.GetAnimationEffect(),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Choose to manage diffrent type of animation effect of logos list. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(m,{label:__("Media Size","wp-logo-showcase-responsive-slider-slider"),value:O,onChange:function(e){return l({image_size:e})},help:__("Choose WordPress registered image size. e.g original, large, medium, thumbnail.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(g,{label:__("Hide Border","wp-logo-showcase-responsive-slider-slider"),value:N,options:this.GetBooleanDropdown(),onChange:function(e){return l({hide_border:e})},help:__("Choose option to hide logo border.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(h,{label:__("Max Height","wp-logo-showcase-responsive-slider-slider"),value:x,onChange:function(e){return l({max_height:e})},min:1,help:__('Enter image maximum height 80px with 100% maximum width for better output. By default value is "250".',"wp-logo-showcase-responsive-slider-slider")})),wp.element.createElement(c,{title:__("Slider Parameters","wp-logo-showcase-responsive-slider-slider"),initialOpen:!1},wp.element.createElement(h,{label:__("Slides Column","wp-logo-showcase-responsive-slider-slider"),value:i,onChange:function(e){return l({slides_column:e})},min:1,help:__("Enter number for slide to show at a time.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(w,null,wp.element.createElement(h,{label:__("Slides Rows","wp-logo-showcase-responsive-slider-slider"),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Enter number of rows for slider. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(h,{label:__("Slides Scroll","wp-logo-showcase-responsive-slider-slider"),value:a,onChange:function(e){return l({slides_scroll:e})},min:1,help:__("Enter number of slide to scroll at a time.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(g,{label:__("Dots","wp-logo-showcase-responsive-slider-slider"),value:d,options:this.GetBooleanDropdown(),onChange:function(e){return l({dots:e})},help:__("Show pagination dots.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(g,{label:__("Arrows","wp-logo-showcase-responsive-slider-slider"),value:v,options:this.GetBooleanDropdown(),onChange:function(e){return l({arrows:e})},help:__("Show prev - next arrows.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(g,{label:__("Autoplay","wp-logo-showcase-responsive-slider-slider"),value:y,options:this.GetBooleanDropdown(),onChange:function(e){return l({autoplay:e})}}),"true"==y&&wp.element.createElement(h,{label:__("Autoplay Interval","wp-logo-showcase-responsive-slider-slider"),value:_,onChange:function(e){return l({autoplay_interval:e})},min:1,help:__("Enter autoplay interval speed. 1000 is equal to 1 sec.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(h,{label:__("Speed","wp-logo-showcase-responsive-slider-slider"),value:k,onChange:function(e){return l({speed:e})},min:1,help:__("Enter slide speed. 1000 is equal to 1 sec.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(g,{label:__("Center Mode","wp-logo-showcase-responsive-slider-slider"),value:C,options:this.GetBooleanDropdown(),onChange:function(e){return l({center_mode:e})},help:__("Enable slider center mode effect.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(g,{label:__("Infinite Loop","wp-logo-showcase-responsive-slider-slider"),value:P,options:this.GetBooleanDropdown(),onChange:function(e){return l({loop:e})},help:__("Enable infinite loop for continuous sliding.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(w,null,wp.element.createElement(g,{label:__("Ticker Mode","wp-logo-showcase-responsive-slider-slider"),options:this.GetBooleanDropdown(),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",{title:__("Note: When you enable ticker mode Autoplay, Slides Scroll and Autoplay Interval will set to default.","wp-logo-showcase-responsive-slider-slider")},__("Enable ticker mode for slider. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(w,null,wp.element.createElement(g,{label:__("Pause On Hover","wp-logo-showcase-responsive-slider-slider"),options:this.GetBooleanDropdown(),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Pause slider autoplay on hover. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(w,null,wp.element.createElement(g,{label:__("Pause On Focus","wp-logo-showcase-responsive-slider-slider"),options:this.GetBooleanDropdown(),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Pause slider autoplay when slider element is focused. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(g,{label:__("Slider Lazyload","wp-logo-showcase-responsive-slider-slider"),value:B,options:this.GetLazyloadDropdown(),onChange:function(e){return l({lazyload:e})},help:__("Select option to use lazy loading in slider.","wp-logo-showcase-responsive-slider-slider")})),wp.element.createElement(c,{title:__("Query Parameters","wp-logo-showcase-responsive-slider-slider"),initialOpen:!1},wp.element.createElement(h,{label:__("Limit","wp-logo-showcase-responsive-slider-slider"),value:o,onChange:function(e){return l({limit:e})},min:-1,help:__("Enter number of logos to be displayed. Enter -1 to display all.","wp-logo-showcase-responsive-slider-slider")}),wp.element.createElement(g,{label:__("Order By","wp-logo-showcase-responsive-slider-slider"),value:G,options:this.GetPostOrderby(),onChange:function(e){return l({orderby:e})}}),wp.element.createElement(g,{label:__("Order","wp-logo-showcase-responsive-slider-slider"),value:W,options:this.GetPostOrder(),onChange:function(e){return l({order:e})}}),wp.element.createElement(m,{label:__("Display Specific Category","wp-logo-showcase-responsive-slider-slider"),value:n,onChange:function(e){return l({cat_id:e})},help:wp.element.createElement("span",{title:__("You can pass multiple ids with comma seperated. You can find id at relevant category listing page.","wp-logo-showcase-responsive-slider-slider")},__("Enter category id to display categories wise.","wp-logo-showcase-responsive-slider-slider")," [?]")}),wp.element.createElement(w,null,wp.element.createElement(g,{label:__("Display Child Category","wp-logo-showcase-responsive-slider-slider"),options:this.GetBooleanDropdown(),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("If you are using parent category then whether to display child category or not. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(w,null,wp.element.createElement(m,{label:__("Exclude Category","wp-logo-showcase-responsive-slider-slider"),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Exclude post category. Works only if `Category` field is empty. You can pass multiple ids with comma seperated. You can find id at relevant category listing page. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(w,null,wp.element.createElement(m,{label:__("Display Specific Posts","wp-logo-showcase-responsive-slider-slider"),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Enter id of the post which you want to display. You can pass multiple ids with comma seperated. You can find id at relevant post listing page. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(w,null,wp.element.createElement(m,{label:__("Exclude Post","wp-logo-showcase-responsive-slider-slider"),help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Enter id of the post which you do not want to display. You can pass multiple ids with comma seperated. You can find id at relevant post listing page. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})),wp.element.createElement(w,null,wp.element.createElement(h,{label:__("Query Offset","wp-logo-showcase-responsive-slider-slider"),min:0,help:wp.element.createElement("div",{className:"wpos-hidden-opts-desc"},wp.element.createElement("span",null,__("Exclude number of posts from starting. e.g if you pass 5 then it will skip first five post. Note: This will not work with limit=-1. Upgarade to ","wp-logo-showcase-responsive-slider-slider"),wp.element.createElement("a",{href:Wplsf_Block.pro_link,target:"_blank"},__("Premium version ","wp-logo-showcase-responsive-slider-slider")),__("to get this option.","wp-logo-showcase-responsive-slider-slider")))})))));return wp.element.createElement(p,null,T,wp.element.createElement(E,null,wp.element.createElement(b,{value:L,onChange:function(e){return l({align:e})},controls:["wide","full"]})),wp.element.createElement("div",{className:this.props.className},this.renderOutput()))}},{key:"renderOutput",value:function(){var e=this.props.attributes,s=this.ObjToString(e);s=s.trim();var l=s?"[logoshowcase "+s+"]":"[logoshowcase]";return wp.element.createElement("div",{class:"wpos-guten-shrt"},wp.element.createElement("div",{class:"wpos-guten-shrt-title"},wp.element.createElement("span",null,__("WP Logo Showcase Responsive Slider","wp-logo-showcase-responsive-slider-slider"))),l,wp.element.createElement("div",{class:"wpos-guten-shrt-footer"},wp.element.createElement("span",null),__("Do you want to check demo of this plugin.","wp-logo-showcase-responsive-slider-slider")," ",wp.element.createElement("a",{href:Wplsf_Block.free_demo_link,target:"_blank"},__("Click here","wp-logo-showcase-responsive-slider-slider"))),wp.element.createElement("div",{class:"wpos-guten-shrt-footer"},__("Do you also want to check premium version demo of this plugin.","wp-logo-showcase-responsive-slider-slider")," ",wp.element.createElement("a",{href:Wplsf_Block.pro_demo_link,target:"_blank"},__("Click here","wp-logo-showcase-responsive-slider-slider"))))}}]),s}(a);s.a=y}]);