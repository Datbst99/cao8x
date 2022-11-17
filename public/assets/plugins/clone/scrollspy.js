/**
 * Extend jquery with a scrollspy plugin.
 * This watches the window scroll and fires events when elements are scrolled into viewport.
 *
 * throttle() and getTime() taken from Underscore.js
 * https://github.com/jashkenas/underscore
 *
 * @author Copyright 2013 John Smart
 * @license https://raw.github.com/thesmart/jquery-scrollspy/master/LICENSE
 * @see https://github.com/thesmart
 * @version 0.1.2
 */
!function(t){var n=t(window),e=[],o=[],r=!1,l=0,i={top:0,right:0,bottom:0,left:0};function c(){++l;var r=n.scrollTop(),c=n.scrollLeft(),u=c+n.width(),f=r+n.height(),a=function(n,o,r,l){var i=t();return t.each(e,(function(t,e){var c=e.offset().top,u=e.offset().left,f=u+e.width(),a=c+e.height();!(u>o||f<l||c>r||a<n)&&i.push(e)})),i}(r+i.top,u+i.right,f+i.bottom,c+i.left);t.each(a,(function(t,n){"number"!=typeof n.data("scrollSpy:ticks")&&n.triggerHandler("scrollSpy:enter"),n.data("scrollSpy:ticks",l)})),t.each(o,(function(t,n){var e=n.data("scrollSpy:ticks");"number"==typeof e&&e!==l&&(n.triggerHandler("scrollSpy:exit"),n.data("scrollSpy:ticks",null))})),o=a}function u(){n.trigger("scrollSpy:winSize")}
/**
	 * Get time in ms
   * @license https://raw.github.com/jashkenas/underscore/master/LICENSE
	 * @type {function}
	 * @return {number}
	 */var f=Date.now||function(){return(new Date).getTime()};
/**
	 * Returns a function, that, when invoked, will only be triggered at most once
	 * during a given window of time. Normally, the throttled function will run
	 * as much as it can, without ever going more than once per `wait` duration;
	 * but if you'd like to disable the execution on the leading edge, pass
	 * `{leading: false}`. To disable execution on the trailing edge, ditto.
	 * @license https://raw.github.com/jashkenas/underscore/master/LICENSE
	 * @param {function} func
	 * @param {number} wait
	 * @param {Object=} options
	 * @returns {Function}
	 */function a(t,n,e){var o,r,l,i=null,c=0;e||(e={});var u=function(){c=!1===e.leading?0:f(),i=null,l=t.apply(o,r),o=r=null};return function(){var a=f();c||!1!==e.leading||(c=a);var s=n-(a-c);return o=this,r=arguments,s<=0?(clearTimeout(i),i=null,c=a,l=t.apply(o,r),o=r=null):i||!1===e.trailing||(i=setTimeout(u,s)),l}}t.scrollSpy=function(o,l){(o=t(o)).each((function(n,o){e.push(t(o))})),l=l||{throttle:100},i.top=l.offsetTop||0,i.right=l.offsetRight||0,i.bottom=l.offsetBottom||0,i.left=l.offsetLeft||0;var u=a(c,l.throttle||100),f=function(){t(document).ready(u)};return r||(n.on("scroll",f),n.on("resize",f),r=!0),setTimeout(f,0),o},t.winSizeSpy=function(e){return t.winSizeSpy=function(){return n},e=e||{throttle:100},n.on("resize",a(u,e.throttle||100))},t.fn.scrollSpy=function(n){return t.scrollSpy(t(this),n)}}(jQuery);