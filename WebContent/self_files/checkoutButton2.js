function getInnerCheckoutButtonScriptFile(){function t(){var t=document.getElementsByTagName("script");if(null==t)return null;for(var r in t)try{var n=e.exec(t[r].src);if(null!=n)return n[1]}catch(c){}return null}var e=/^(https?:\/\/[^\/]*checkout\.naver\.com\/[^?]*)checkoutButton2.js/,r=t();r?document.write('<script type="text/javascript" src="'+r+"innerCheckoutButton.js?site_preference=normal&"+Math.round(+new Date/36e5)+'" charset="UTF-8"></script>'):alert("HOST 명을 찾을 수 없어 네이버 페이 버튼을 초기화 할 수 없습니다.")}getInnerCheckoutButtonScriptFile();