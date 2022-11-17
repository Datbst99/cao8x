!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports&&"function"==typeof require?require("jquery"):jQuery)}((function(e){"use strict";function t(n,o){var s=function(){},i=this,a={ajaxSettings:{},autoSelectFirst:!1,appendTo:document.body,serviceUrl:null,lookup:null,onSelect:null,width:"auto",minChars:1,maxHeight:300,deferRequestBy:0,params:{},formatResult:t.formatResult,delimiter:null,zIndex:9999,type:"GET",noCache:!1,onSearchStart:s,onSearchComplete:s,onSearchError:s,preserveInput:!1,containerClass:"autocomplete-suggestions",tabDisabled:!1,dataType:"text",currentRequest:null,triggerSelectOnValidInput:!0,preventBadQueries:!0,lookupFilter:function(e,t,n){return-1!==e.value.toLowerCase().indexOf(n)},paramName:"query",transformResult:function(t){return"string"==typeof t?e.parseJSON(t):t},showNoSuggestionNotice:!1,noSuggestionNotice:"No results",orientation:"bottom",forceFixPosition:!1};i.element=n,i.el=e(n),i.suggestions=[],i.badQueries=[],i.selectedIndex=-1,i.currentValue=i.element.value,i.intervalId=0,i.cachedResponse={},i.onChangeInterval=null,i.onChange=null,i.isLocal=!1,i.suggestionsContainer=null,i.noSuggestionsContainer=null,i.options=e.extend({},a,o),i.classes={selected:"autocomplete-selected",suggestion:"autocomplete-suggestion"},i.hint=null,i.hintValue="",i.selection=null,i.initialize(),i.setOptions(o)}var n={escapeRegExChars:function(e){return e.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g,"\\$&")},createNode:function(e){var t=document.createElement("div");return t.className=e,t.style.position="absolute",t.style.display="none",t}},o=27,s=9,i=13,a=38,r=39,l=40;t.utils=n,e.Autocomplete=t,t.formatResult=function(e,t){var o="("+n.escapeRegExChars(t)+")";return e.value.replace(new RegExp(o,"gi"),"<strong>$1</strong>").replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/&lt;(\/?strong)&gt;/g,"<$1>")},t.prototype={killerFn:null,initialize:function(){var n,o=this,s="."+o.classes.suggestion,i=o.classes.selected,a=o.options;o.element.setAttribute("autocomplete","off"),o.killerFn=function(t){0===e(t.target).closest("."+o.options.containerClass).length&&(o.killSuggestions(),o.disableKillerFn())},o.noSuggestionsContainer=e('<div class="autocomplete-no-suggestion"></div>').html(this.options.noSuggestionNotice).get(0),o.suggestionsContainer=t.utils.createNode(a.containerClass),(n=e(o.suggestionsContainer)).appendTo(a.appendTo),"auto"!==a.width&&n.width(a.width),n.on("mouseover.autocomplete",s,(function(){o.activate(e(this).data("index"))})),n.on("mouseout.autocomplete",(function(){o.selectedIndex=-1,n.children("."+i).removeClass(i)})),n.on("click.autocomplete",s,(function(){o.select(e(this).data("index"))})),o.fixPositionCapture=function(){o.visible&&o.fixPosition()},e(window).on("resize.autocomplete",o.fixPositionCapture),o.el.on("keydown.autocomplete",(function(e){o.onKeyPress(e)})),o.el.on("keyup.autocomplete",(function(e){o.onKeyUp(e)})),o.el.on("blur.autocomplete",(function(){o.onBlur()})),o.el.on("focus.autocomplete",(function(){o.onFocus()})),o.el.on("change.autocomplete",(function(e){o.onKeyUp(e)})),o.el.on("input.autocomplete",(function(e){o.onKeyUp(e)}))},onFocus:function(){var e=this;e.fixPosition(),0===e.options.minChars&&0===e.el.val().length&&e.onValueChange()},onBlur:function(){this.enableKillerFn()},abortAjax:function(){var e=this;e.currentRequest&&(e.currentRequest.abort(),e.currentRequest=null)},setOptions:function(t){var n=this,o=n.options;e.extend(o,t),n.isLocal=e.isArray(o.lookup),n.isLocal&&(o.lookup=n.verifySuggestionsFormat(o.lookup)),o.orientation=n.validateOrientation(o.orientation,"bottom"),e(n.suggestionsContainer).css({"max-height":o.maxHeight+"px",width:o.width+"px","z-index":o.zIndex})},clearCache:function(){this.cachedResponse={},this.badQueries=[]},clear:function(){this.clearCache(),this.currentValue="",this.suggestions=[]},disable:function(){var e=this;e.disabled=!0,clearInterval(e.onChangeInterval),e.abortAjax()},enable:function(){this.disabled=!1},fixPosition:function(){var t=this,n=e(t.suggestionsContainer),o=n.parent().get(0);if(o===document.body||t.options.forceFixPosition){var s=t.options.orientation,i=n.outerHeight(),a=t.el.outerHeight(),r=t.el.offset(),l={top:r.top,left:r.left};if("auto"===s){var u=e(window).height(),c=e(window).scrollTop(),g=-c+r.top-i,d=c+u-(r.top+a+i);s=Math.max(g,d)===g?"top":"bottom"}if(l.top+="top"===s?-i:a,o!==document.body){var p,h=n.css("opacity");t.visible||n.css("opacity",0).show(),p=n.offsetParent().offset(),l.top-=p.top,l.left-=p.left,t.visible||n.css("opacity",h).hide()}"auto"===t.options.width&&(l.width=t.el.outerWidth()-2+"px"),n.css(l)}},enableKillerFn:function(){e(document).on("click.autocomplete",this.killerFn)},disableKillerFn:function(){e(document).off("click.autocomplete",this.killerFn)},killSuggestions:function(){var e=this;e.stopKillSuggestions(),e.intervalId=window.setInterval((function(){e.visible&&(e.el.val(e.currentValue),e.hide()),e.stopKillSuggestions()}),50)},stopKillSuggestions:function(){window.clearInterval(this.intervalId)},isCursorAtEnd:function(){var e,t=this.el.val().length,n=this.element.selectionStart;return"number"==typeof n?n===t:!document.selection||((e=document.selection.createRange()).moveStart("character",-t),t===e.text.length)},onKeyPress:function(e){var t=this;if(t.disabled||t.visible||e.which!==l||!t.currentValue){if(!t.disabled&&t.visible){switch(e.which){case o:t.el.val(t.currentValue),t.hide();break;case r:if(t.hint&&t.options.onHint&&t.isCursorAtEnd()){t.selectHint();break}return;case s:if(t.hint&&t.options.onHint)return void t.selectHint();if(-1===t.selectedIndex)return void t.hide();if(t.select(t.selectedIndex),!1===t.options.tabDisabled)return;break;case i:if(-1===t.selectedIndex)return void t.hide();t.select(t.selectedIndex);break;case a:t.moveUp();break;case l:t.moveDown();break;default:return}e.stopImmediatePropagation(),e.preventDefault()}}else t.suggest()},onKeyUp:function(e){var t=this;if(!t.disabled){switch(e.which){case a:case l:return}clearInterval(t.onChangeInterval),t.currentValue!==t.el.val()&&(t.findBestHint(),t.options.deferRequestBy>0?t.onChangeInterval=setInterval((function(){t.onValueChange()}),t.options.deferRequestBy):t.onValueChange())}},onValueChange:function(){var t=this,n=t.options,o=t.el.val(),s=t.getQuery(o);return t.selection&&t.currentValue!==s&&(t.selection=null,(n.onInvalidateSelection||e.noop).call(t.element)),clearInterval(t.onChangeInterval),t.currentValue=o,t.selectedIndex=-1,n.triggerSelectOnValidInput&&t.isExactMatch(s)?void t.select(0):void(s.length<n.minChars?t.hide():t.getSuggestions(s))},isExactMatch:function(e){var t=this.suggestions;return 1===t.length&&t[0].value.toLowerCase()===e.toLowerCase()},getQuery:function(t){var n,o=this.options.delimiter;return o?(n=t.split(o),e.trim(n[n.length-1])):t},getSuggestionsLocal:function(t){var n,o=this.options,s=t.toLowerCase(),i=o.lookupFilter,a=parseInt(o.lookupLimit,10);return n={suggestions:e.grep(o.lookup,(function(e){return i(e,t,s)}))},a&&n.suggestions.length>a&&(n.suggestions=n.suggestions.slice(0,a)),n},getSuggestions:function(t){var n,o,s,i,a=this,r=a.options,l=r.serviceUrl;if(r.params[r.paramName]=t,o=r.ignoreParams?null:r.params,!1!==r.onSearchStart.call(a.element,r.params)){if(e.isFunction(r.lookup))return void r.lookup(t,(function(e){a.suggestions=e.suggestions,a.suggest(),r.onSearchComplete.call(a.element,t,e.suggestions)}));a.isLocal?n=a.getSuggestionsLocal(t):(e.isFunction(l)&&(l=l.call(a.element,t)),s=l+"?"+e.param(o||{}),n=a.cachedResponse[s]),n&&e.isArray(n.suggestions)?(a.suggestions=n.suggestions,a.suggest(),r.onSearchComplete.call(a.element,t,n.suggestions)):a.isBadQuery(t)?r.onSearchComplete.call(a.element,t,[]):(a.abortAjax(),i={url:l,data:o,type:r.type,dataType:r.dataType},e.extend(i,r.ajaxSettings),a.currentRequest=e.ajax(i).done((function(e){var n;a.currentRequest=null,n=r.transformResult(e,t),a.processResponse(n,t,s),r.onSearchComplete.call(a.element,t,n.suggestions)})).fail((function(e,n,o){r.onSearchError.call(a.element,t,e,n,o)})))}},isBadQuery:function(e){if(!this.options.preventBadQueries)return!1;for(var t=this.badQueries,n=t.length;n--;)if(0===e.indexOf(t[n]))return!0;return!1},hide:function(){var t=this,n=e(t.suggestionsContainer);e.isFunction(t.options.onHide)&&t.visible&&t.options.onHide.call(t.element,n),t.visible=!1,t.selectedIndex=-1,clearInterval(t.onChangeInterval),e(t.suggestionsContainer).hide(),t.signalHint(null)},suggest:function(){if(0!==this.suggestions.length){var t,n=this,o=n.options,s=o.groupBy,i=o.formatResult,a=n.getQuery(n.currentValue),r=n.classes.suggestion,l=n.classes.selected,u=e(n.suggestionsContainer),c=e(n.noSuggestionsContainer),g=o.beforeRender,d="",p=function(e,n){var o=e.data[s];return t===o?"":'<div class="autocomplete-group"><strong>'+(t=o)+"</strong></div>"};return o.triggerSelectOnValidInput&&n.isExactMatch(a)?void n.select(0):(e.each(n.suggestions,(function(e,t){s&&(d+=p(t,0)),d+='<div class="'+r+'" data-index="'+e+'">'+i(t,a)+"</div>"})),this.adjustContainerWidth(),c.detach(),u.html(d),e.isFunction(g)&&g.call(n.element,u),n.fixPosition(),u.show(),o.autoSelectFirst&&(n.selectedIndex=0,u.scrollTop(0),u.children("."+r).first().addClass(l)),n.visible=!0,void n.findBestHint())}this.options.showNoSuggestionNotice?this.noSuggestions():this.hide()},noSuggestions:function(){var t=this,n=e(t.suggestionsContainer),o=e(t.noSuggestionsContainer);this.adjustContainerWidth(),o.detach(),n.empty(),n.append(o),t.fixPosition(),n.show(),t.visible=!0},adjustContainerWidth:function(){var t,n=this,o=n.options,s=e(n.suggestionsContainer);"auto"===o.width&&(t=n.el.outerWidth()-2,s.width(t>0?t:300))},findBestHint:function(){var t=this,n=t.el.val().toLowerCase(),o=null;n&&(e.each(t.suggestions,(function(e,t){var s=0===t.value.toLowerCase().indexOf(n);return s&&(o=t),!s})),t.signalHint(o))},signalHint:function(t){var n="",o=this;t&&(n=o.currentValue+t.value.substr(o.currentValue.length)),o.hintValue!==n&&(o.hintValue=n,o.hint=t,(this.options.onHint||e.noop)(n))},verifySuggestionsFormat:function(t){return t.length&&"string"==typeof t[0]?e.map(t,(function(e){return{value:e,data:null}})):t},validateOrientation:function(t,n){return t=e.trim(t||"").toLowerCase(),-1===e.inArray(t,["auto","bottom","top"])&&(t=n),t},processResponse:function(e,t,n){var o=this,s=o.options;e.suggestions=o.verifySuggestionsFormat(e.suggestions),s.noCache||(o.cachedResponse[n]=e,s.preventBadQueries&&0===e.suggestions.length&&o.badQueries.push(t)),t===o.getQuery(o.currentValue)&&(o.suggestions=e.suggestions,o.suggest())},activate:function(t){var n,o=this,s=o.classes.selected,i=e(o.suggestionsContainer),a=i.find("."+o.classes.suggestion);return i.find("."+s).removeClass(s),o.selectedIndex=t,-1!==o.selectedIndex&&a.length>o.selectedIndex?(n=a.get(o.selectedIndex),e(n).addClass(s),n):null},selectHint:function(){var t=this,n=e.inArray(t.hint,t.suggestions);t.select(n)},select:function(e){this.hide(),this.onSelect(e)},moveUp:function(){var t=this;if(-1!==t.selectedIndex)return 0===t.selectedIndex?(e(t.suggestionsContainer).children().first().removeClass(t.classes.selected),t.selectedIndex=-1,t.el.val(t.currentValue),void t.findBestHint()):void t.adjustScroll(t.selectedIndex-1)},moveDown:function(){var e=this;e.selectedIndex!==e.suggestions.length-1&&e.adjustScroll(e.selectedIndex+1)},adjustScroll:function(t){var n=this,o=n.activate(t);if(o){var s,i,a,r=e(o).outerHeight();s=o.offsetTop,a=(i=e(n.suggestionsContainer).scrollTop())+n.options.maxHeight-r,i>s?e(n.suggestionsContainer).scrollTop(s):s>a&&e(n.suggestionsContainer).scrollTop(s-n.options.maxHeight+r),n.options.preserveInput||n.el.val(n.getValue(n.suggestions[t].value)),n.signalHint(null)}},onSelect:function(t){var n=this,o=n.options.onSelect,s=n.suggestions[t];n.currentValue=n.getValue(s.value),n.currentValue===n.el.val()||n.options.preserveInput||n.el.val(n.currentValue),n.signalHint(null),n.suggestions=[],n.selection=s,e.isFunction(o)&&o.call(n.element,s)},getValue:function(e){var t,n,o=this.options.delimiter;return o?1===(n=(t=this.currentValue).split(o)).length?e:t.substr(0,t.length-n[n.length-1].length)+e:e},dispose:function(){var t=this;t.el.off(".autocomplete").removeData("autocomplete"),t.disableKillerFn(),e(window).off("resize.autocomplete",t.fixPositionCapture),e(t.suggestionsContainer).remove()}},e.fn.autocomplete=e.fn.devbridgeAutocomplete=function(n,o){var s="autocomplete";return 0===arguments.length?this.first().data(s):this.each((function(){var i=e(this),a=i.data(s);"string"==typeof n?a&&"function"==typeof a[n]&&a[n](o):(a&&a.dispose&&a.dispose(),a=new t(this,n),i.data(s,a))}))}})),jQuery(document).ready((function(e){"use strict";e(".searchform").each((function(){var t=e(this).find(".live-search-results"),n=e(this).find(".search_categories"),o=flatsomeVars.ajaxurl+"?action=flatsome_ajax_search_products";if(n.length&&""!==n.val()&&(o+="&product_cat="+n.val()),e(this).find(".search-field").devbridgeAutocomplete({minChars:3,appendTo:t,triggerSelectOnValidInput:!1,serviceUrl:o,onSearchStart:function(){e(".submit-button").removeClass("loading"),e(".submit-button").addClass("loading")},onSelect:function(e){-1!=e.id&&(window.location.href=e.url)},onSearchComplete:function(){e(".submit-button").removeClass("loading")},beforeRender:function(t){e(t).removeAttr("style")},formatResult:function(t,n){var o="("+e.Autocomplete.utils.escapeRegExChars(n)+")",s="";return t.img&&(s+='<img class="search-image" src="'+t.img+'">'),s+='<div class="search-name">'+t.value.replace(new RegExp(o,"gi"),"<strong>$1</strong>")+"</div>",t.price&&(s+='<span class="search-price">'+t.price+"<span>"),s}}),n.length){var s=e(this).find(".search-field").devbridgeAutocomplete();n.on("change",(function(e){""!=n.val()?s.setOptions({serviceUrl:flatsomeVars.ajaxurl+"?action=flatsome_ajax_search_products&product_cat="+n.val()}):s.setOptions({serviceUrl:flatsomeVars.ajaxurl+"?action=flatsome_ajax_search_products"}),s.hide(),s.onValueChange()}))}}))}));