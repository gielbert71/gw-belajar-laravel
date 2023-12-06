/**
 * Highstock JS v11.2.0 (2023-10-30)
 *
 * Indicator series type for Highcharts Stock
 *
 * (c) 2010-2021 Kacper Madej
 *
 * License: www.highcharts.com/license
 */!function(t){"object"==typeof module&&module.exports?(t.default=t,module.exports=t):"function"==typeof define&&define.amd?define("highcharts/indicators/wma",["highcharts","highcharts/modules/stock"],function(e){return t(e),t.Highcharts=e,t}):t("undefined"!=typeof Highcharts?Highcharts:void 0)}(function(t){"use strict";var e=t?t._modules:{};function n(t,e,n,o){t.hasOwnProperty(e)||(t[e]=o.apply(null,n),"function"==typeof CustomEvent&&window.dispatchEvent(new CustomEvent("HighchartsModuleLoaded",{detail:{path:e,module:t[e]}})))}n(e,"Stock/Indicators/WMA/WMAIndicator.js",[e["Core/Series/SeriesRegistry.js"],e["Core/Utilities.js"]],function(t,e){var n,o=this&&this.__extends||(n=function(t,e){return(n=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n])})(t,e)},function(t,e){if("function"!=typeof e&&null!==e)throw TypeError("Class extends value "+String(e)+" is not a constructor or null");function o(){this.constructor=t}n(t,e),t.prototype=null===e?Object.create(e):(o.prototype=e.prototype,new o)}),r=t.seriesTypes.sma,i=e.isArray,s=e.merge;function u(t,e,n,o,r){var i=e[o],s=r<0?n[o]:n[o][r];t.push([i,s])}function a(t,e,n,o){var r=t.length,i=t.reduce(function(t,e,n){return[null,t[1]+e[1]*(n+1)]})[1]/((r+1)/2*r),s=e[o-1];return t.shift(),[s,i]}var c=function(t){function e(){var e=null!==t&&t.apply(this,arguments)||this;return e.data=void 0,e.options=void 0,e.points=void 0,e}return o(e,t),e.prototype.getValues=function(t,e){var n,o,r=e.period,s=t.xData,c=t.yData,p=c?c.length:0,f=s[0],h=[],d=[],l=[],y=1,v=-1,m=c[0];if(!(s.length<r)){i(c[0])&&(v=e.index,m=c[0][v]);for(var g=[[f,m]];y!==r;)u(g,s,c,y,v),y++;for(n=y;n<p;n++)o=a(g,s,c,n),h.push(o),d.push(o[0]),l.push(o[1]),u(g,s,c,n,v);return o=a(g,s,c,n),h.push(o),d.push(o[0]),l.push(o[1]),{values:h,xData:d,yData:l}}},e.defaultOptions=s(r.defaultOptions,{params:{index:3,period:9}}),e}(r);return t.registerSeriesType("wma",c),c}),n(e,"masters/indicators/wma.src.js",[],function(){})});//# sourceMappingURL=wma.js.map