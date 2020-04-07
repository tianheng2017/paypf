  function IsPC(){  
        var userAgentInfo = navigator.userAgent;  
        var Agents = ["Android", "iPhone",  
                    "SymbianOS", "Windows Phone",  
                    "iPad", "iPod"];  
        var flag = true;  
        for (var v = 0; v < Agents.length; v++) {  
            if (userAgentInfo.indexOf(Agents[v]) > 0) {  
                flag = false;  
                break;  
            }  
        }  
        return flag;  
    } 
   function isiOS(){
        var u = navigator.userAgent;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        if(isiOS){
            return true;
        }else{
            return false;
        }
   }
   
    function isWeiXin(){
      var ua = window.navigator.userAgent.toLowerCase();
      if(ua.match(/MicroMessenger/i) == 'micromessenger'){
        return true;
      }else{
        return false;
      }
    }
    var os = function() {
       var ua = navigator.userAgent,
                isQB = /(?:MQQBrowser|QQ)/.test(ua),
                isWindowsPhone = /(?:Windows Phone)/.test(ua),
                isSymbian = /(?:SymbianOS)/.test(ua) || isWindowsPhone,
                isAndroid = /(?:Android)/.test(ua),
                isFireFox = /(?:Firefox)/.test(ua),
                isChrome = /(?:Chrome|CriOS)/.test(ua),
                isIpad = /(?:iPad|PlayBook)/.test(ua),
                isTablet = /(?:iPad|PlayBook)/.test(ua)||(isFireFox && /(?:Tablet)/.test(ua)),
                isSafari = /(?:Safari)/.test(ua),
                isPhone = /(?:iPhone)/.test(ua) && !isTablet,
                isOpen= /(?:Opera Mini)/.test(ua),
                isUC = /(?:UCWEB|UCBrowser)/.test(ua),
                isIE=/(?:compatible)/.test(ua)&&/(?:MSIE)/.test(ua)&&!isOpen,
                isPc = !isPhone && !isAndroid && !isSymbian;
        return {
                isQB : isQB,
                isWindowsPhone : isWindowsPhone,
                isSymbian : isSymbian,
                isAndroid : isAndroid,
                isFireFox : isFireFox,
                isChrome : isChrome,
                isIpad : isIpad,
                isTablet : isTablet,
                isSafari : isSafari,
                isPhone : isPhone,
                isOpen: isOpen,
                isUC : isUC,
                isIE:isIE,
                isPc : isPc,
                notSafari:isQB||isFireFox||isChrome||isOpen||isUC||isIE
        };
    };
     (function (doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function () {
                      var clientWidth = docEl.clientWidth;
                      var clientHeight= docEl.clientHeight;
                      if (!clientWidth) return;
                      if(clientHeight<400){
                          docEl.style.fontSize = 100 * (520/ 1334) + 'px';
                      }else if(clientWidth/clientHeight>=375/667){
                          docEl.style.fontSize = 100 * (clientHeight / 1320) + 'px';
                      }else{
                          docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
                      } 
                };

            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);
        