
var _Hsvrname="fm.http.or.kr";var  _Hskinpath=_HConfig.server+"/v6/skin/temp/default/ver_03/img";var _HstrAutoMsg=("").replace(/\+/gi,' ');_HChat["ss"]="";var HSkinprop=new (function(){
var o=this;
this.skinpath=_Hskinpath;
/*_SKIN_BOF_*/
this.showtab="chat";
this.showtabABS="sms";
this.showBtn="CBtn";
/*_SKIN_EOF_*/
this.p=
/*_PROP_BOF_*/
{"chat":{"notice":"y","profile":"y","pos":"cc","left":"0","top":"0","width":"368px","height":"459px"},"list":{"dsp":"y","move":"y","scroll":"y","pos":"cc","left":"545","top":"190","width":"190px","height":"130px","assignedObjID":""},"sms":{"dsp":"y"},"memo":{"dsp":"y"},"agreeBox":{"dsp":"y","move":"y","scroll":"y","pos":"cc","left":"0","top":"0","width":"300px","height":"50px"},"listMini":{"dsp":"y","move":"n","scroll":"y","pos":"lt","left":"0","top":"80px","width":"25px","height":"97px","assignedObjID":""},"Btn":{"dsp":"n","move":"y","scroll":"y","pos":"rt","left":"0","top":"0","width":"200px","height":"300px","assignedObjID":""}}
/*_PROP_EOF_*/
;})();var HSkin=
/*Rds*/
{"name":"default","item":{"list":{"size":{"width":"145px","height":""},"orderby":["list","sms","memo"],"showItem":{"list":"y","sms":"y","memo":"y"},"html":"%3CDIV%20id%3DHskinBox%20class%3DHskinBox%3E%0D%0A%3CDIV%20id%3DHskinBox_titleOuter%20class%3DHskinBox_titleOuter%3E%0D%0A%3CDIV%20id%3DHskinBox_title%20class%3DHskinBox_title%3E%0D%0A%3CH3%20style%3D%22width%3A95px%3Bheight%3A22px%3BBORDER-BOTTOM%3A%20gray%200px%20dashed%3B%20BORDER-LEFT%3A%20gray%200px%20dashed%3B%20BORDER-TOP%3A%20gray%200px%20dashed%3B%20BORDER-RIGHT%3A%20gray%200px%20dashed%22%20editable%3D%22true%22%3E%EC%8B%A4%EC%8B%9C%EA%B0%84%20%EC%83%81%EB%8B%B4%3C%2FH3%3E%0D%0A%3CDIV%20id%3DHskinBox_title_r%20class%3DHskinBox_title_r%3E%0D%0A%3CDIV%20id%3DHskinBox_close%20class%3DHskinBox_close%20onclick%3D_HwkMinimize%28%29%3E%3C%2FDIV%3E%3C%2FDIV%3E%3C%2FDIV%3E%3C%2FDIV%3E%0D%0A%3CDIV%20id%3DHskinBox_contBoxOuter%20class%3DHskinBox_contBoxOuter%3E%0D%0A%3CDIV%20id%3DHskinBox_contBox%20class%3DHskinBox_contBox%3E%0D%0A%3CDIV%20id%3DHskinBox_content%20class%3DHskinBox_content%3E%0D%0A%3CDIV%20id%3DtabMenuWrapper%20class%3DtabMenuWrapper%3E%0D%0A%3CDIV%20id%3DmenuTab_CHAT%20class%3D%22TabMenuItem%20activeMenu%22%20onclick%3D%22HshowSkinBox%28%27chat%27%29%22%3E%0D%0A%3CDIV%3E%0D%0A%3CP%3E%3CSPAN%3E%3CA%20style%3D%22BORDER-BOTTOM%3A%20gray%200px%20dashed%3B%20BORDER-LEFT%3A%20gray%200px%20dashed%3B%20BORDER-TOP%3A%20gray%200px%20dashed%3B%20BORDER-RIGHT%3A%20gray%200px%20dashed%22%20editable%3D%22true%22%3E%EC%B1%84%ED%8C%85%3C%2FA%3E%3C%2FSPAN%3E%3C%2FP%3E%3C%2FDIV%3E%3C%2FDIV%3E%0D%0A%3CDIV%20id%3DHskinBox_chat%3E%3CIMG%20src%3D%22"+_HConfig.server+"%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fsample_01.gif%22%3E%3C%2FIMG%3E%3C%2FDIV%3E%0D%0A%3CDIV%20id%3DmenuTab_SMS%20class%3DTabMenuItem%20onclick%3D%22HshowSkinBox%28%27sms%27%29%22%3E%0D%0A%3CDIV%3E%0D%0A%3CP%3E%3CSPAN%3E%3CA%20style%3D%22BORDER-BOTTOM%3A%20gray%200px%20dashed%3B%20BORDER-LEFT%3A%20gray%200px%20dashed%3B%20BORDER-TOP%3A%20gray%200px%20dashed%3B%20BORDER-RIGHT%3A%20gray%200px%20dashed%22%20editable%3D%22true%22%3ESMS%EB%AC%B8%EC%9E%90%3C%2FA%3E%3C%2FSPAN%3E%3C%2FP%3E%3C%2FDIV%3E%3C%2FDIV%3E%0D%0A%3CDIV%20style%3D%22DISPLAY%3A%20none%22%20id%3DHskinBox_sms%20class%3DHskinBox_sms%3E%0D%0A%3CP%20id%3DHskinBox_sms_comment%3E%EC%9A%B4%EC%98%81%EC%9E%90%EC%97%90%EA%B2%8C%20SMS%3C%2FP%3E%0D%0A%3CP%20id%3DHskinBox_sms_textarea%3E%3CTEXTAREA%20id%3DHsmsContent%20onkeydown%3D%22_HChkByteR(this%2C'HskinBox_sms_byte')%3B%22%20onkeyup%3D%22_HChkByteR(this%2C'HskinBox_sms_byte')%3B%22%3E%3C%2FTEXTAREA%3E%3C%2FP%3E%0D%0A%3CP%20id%3DHskinBox_sms_byte%3E0%2F"+(_HConfig.RbtnType == "F" ? "200" : "60")+"%20Bytes%3C%2FP%3E%0D%0A%3CP%20id%3D%22HskinBox_sms_from%22%3E%3Cspan%20id%3D%22HskinBox_sms_agree_title%22%3E%EA%B0%9C%EC%9D%B8%EC%A0%95%EB%B3%B4%EC%B7%A8%EA%B8%89%3C%2Fspan%3E%3Clabel%20for%3D%22HskinBox_sms_agree_check%22%3E%EB%8F%99%EC%9D%98%3C%2Flabel%3E%3Cinput%20type%3D%22checkbox%22%20id%3D%22HskinBox_sms_agree_check%22%20onfocus%3D%22this.blur()%3B%22%20%20%2F%3E%3C%2FP%3E%0D%0A%3CP%20id%3DHskinBox_sms_number%3E%3Cinput%20id%3D%22HsmsNum1%22%20class%3D%22hsmsnum%22%20value%3D%22010%22%2F%3E%20%3Cinput%20id%3D%22HsmsNum2%22%20class%3D%22hsmsnum%22%2F%3E%20%3Cinput%20id%3D%22HsmsNum3%22%20class%3D%22hsmsnum%22%2F%3E%3C%2FP%3E%0D%0A%3CP%20id%3DHskinBox_sms_btnsend%3E%3CIMG%20src%3D%22"+_HConfig.server+"%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fbtn_tbsend.gif%22%3E%3C%2FIMG%3E%3C%2FP%3E%3C%2FDIV%3E%0D%0A%3CDIV%20id%3DmenuTab_MEMO%20class%3DTabMenuItem%20onclick%3D%22HshowSkinBox%28%27memo%27%29%22%3E%0D%0A%3CDIV%3E%0D%0A%3CP%3E%3CSPAN%3E%3CA%20style%3D%22BORDER-BOTTOM%3A%20gray%200px%20dashed%3B%20BORDER-LEFT%3A%20gray%200px%20dashed%3B%20BORDER-TOP%3A%20gray%200px%20dashed%3B%20BORDER-RIGHT%3A%20gray%200px%20dashed%22%20editable%3D%22true%22%3E%EB%A9%94%EB%AA%A8%EB%82%A8%EA%B8%B0%EA%B8%B0%3C%2FA%3E%3C%2FSPAN%3E%3C%2FP%3E%3C%2FDIV%3E%3C%2FDIV%3E%0D%0A%3CDIV%20style%3D%22DISPLAY%3A%20none%22%20id%3DHskinBox_memo%20class%3DHskinBox_memo%3E%0D%0A%3CP%20id%3DHskinBox_memo_comment%3E%EC%9A%B4%EC%98%81%EC%9E%90%EC%97%90%EA%B2%8C%20%EB%A9%94%EB%AA%A8%20%EC%9E%91%EC%84%B1%3C%2FP%3E%0D%0A%3CP%20id%3DHskinBox_memo_textarea%3E%3CTEXTAREA%20id%3D%22HmemoContent%22%20onkeydown%3D%22_HChkByteR(this%2C'HskinBox_memo_byte'%2C200)%3B%22%20onkeyup%3D%22_HChkByteR(this%2C'HskinBox_memo_byte'%2C200)%3B%22%3E%3C%2FTEXTAREA%3E%3C%2FP%3E%3CP%20id%3D%22HskinBox_memo_byte%22%3E0%2F200%20Bytes%3C%2FP%3E%0D%0A%3CP%20id%3DHskinBox_memo_btnsend%3E%3CIMG%20src%3D%22"+_HConfig.server+"%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fbtn_tbsend.gif%22%3E%3C%2FIMG%3E%3C%2FP%3E%3C%2FDIV%3E%3C%2FDIV%3E%3C%2FDIV%3E%3C%2FDIV%3E%3C%2FDIV%3E%0D%0A%3CDIV%20id%3DHskinBox_bottOuter%20class%3DHskinBox_bottOuter%3E%0D%0A%3CDIV%20id%3DHskinBox_bott%20class%3DHskinBox_bott%3E%0D%0A%3CDIV%20id%3DHskinBox_bott_right%20class%3DHskinBox_bott_right%3E%3C%2FDIV%3E%3C%2FDIV%3E%3C%2FDIV%3E%3C%2FDIV%3E"},
"chat":{"size":{"width":"368px","height":""},"html":"%3Cdiv%20id%3D%22chat_win_box%22%3E%0A%09%3Cdiv%20class%3D%22header%22%20id%3D%22_HChatHeader%22%20style%3D%22height%3A27px%3B%22%3E%0A%09%09%3Cdiv%20class%3D%22title%22%20id%3D%22_HChatLayerTitle%22%3E%EC%8B%A4%EC%8B%9C%EA%B0%84%20%EC%83%81%EB%8B%B4%3C%2Fdiv%3E%0A%09%09%3Cdiv%20class%3D%22chat_notice%22%20id%3D%22_HChatStarMsg%22%20style%3D%22display%3Anone%3B%22%3E%3C%2Fdiv%3E%0A%09%3C%2Fdiv%3E%0A%09%3Cdiv%20class%3D%22tabbg%22%3E%0A%09%09%3Cdiv%20class%3D%22HChatbox%22%20id%3D%22_HChatbox%22%20style%3D%22height%3A256px%3Bwidth%3A100%25%3B%22%3E%3Cdiv%20style%3D%22clear%3Aboth%3B%20width%3A10px%3B%20height%3A5px%3B%20font-size%3A1px%3B%22%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%0A%09%3C%2Fdiv%3E%0A%09%3Cdiv%20class%3D%22btn_bg%22%3E%0A%09%09%3Cdiv%20class%3D%22HtypingTT%22%20id%3D%22_HtypingTT%22%20style%3D%22width%3A100%25%3B%22%3E%3C%2Fdiv%3E%0A%09%09%3Cdiv%20class%3D%22effect%22%3E%3Ctable%20width%3D%22100%25%22%20border%3D%220%22%20cellspacing%3D%220%22%20cellpadding%3D%220%22%3E%0A%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%3Ctd%20width%3D%2226%22%20align%3D%22center%22%3E%3Cimg%20src%3D%22%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fliaotian_18.gif%22%20alt%3D%22%EC%9D%B4%EB%AA%A8%ED%8B%B0%EC%BD%98%22%20border%3D%220%22%20align%3D%22middle%22%20onclick%3D%22showEmoticon()%3B%22%20%2F%3E%3C%2Ftd%3E%0A%09%09%09%09%09%3Ctd%20width%3D%2224%22%20align%3D%22center%22%3E%3Cimg%20src%3D%22%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fliaotian_20.gif%22%20alt%3D%22%EA%B8%80%EA%BC%B4%20%EC%84%A4%EC%A0%95%22%20border%3D%220%22%20align%3D%22middle%22%20onclick%3D%22showFontStyle()%3B%22%20%20%2F%3E%3C%2Ftd%3E%0A%09%09%09%09%09%3Ctd%20width%3D%2220%22%20align%3D%22center%22%3E%26nbsp%3B%3C%2Ftd%3E%0A%09%09%09%09%09%3Ctd%20width%3D%2230%22%20align%3D%22center%22%3E%26nbsp%3B%3C%2Ftd%3E%0A%09%09%09%09%09%3Ctd%20align%3D%22center%22%3E%26nbsp%3B%3C%2Ftd%3E%0A%09%09%09%09%09%3Ctd%20width%3D%2218%22%20align%3D%22center%22%3E%3Cimg%20src%3D%22%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fliaotian_23.gif%22%20width%3D%2218%22%20height%3D%2218%22%20onclick%3D%22saveChatMessage()%3B%22%20%2F%3E%3C%2Ftd%3E%0A%09%09%09%09%09%3Ctd%20width%3D%2270%22%20align%3D%22left%22%20onclick%3D%22saveChatMessage()%3B%22%3E%EB%8C%80%ED%99%94%EC%A0%80%EC%9E%A5%3C%2Ftd%3E%0A%09%09%09%09%3C%2Ftr%3E%0A%09%09%09%3C%2Ftable%3E%0A%09%09%09%3Cdiv%20id%3D%22emoticonLayer%22%20style%3D%22position%3Arelative%3B%20left%3A0px%3B%20top%3A0px%3B%20display%3Anone%3B%20width%3A100%25%3B%20height%3A0px%3B%22%3E%0A%09%09%09%09%3Cdiv%20id%3D%22emoticonView%22%20style%3D%22position%3Aabsolute%3B%20left%3A%200px%3B%20top%3A%20-225px%3B%22%3E%3C%2Fdiv%3E%0A%09%09%09%3C%2Fdiv%3E%0A%09%09%09%3Cdiv%20id%3D%22fontLayer%22%20style%3D%22position%3Arelative%3B%20left%3A0px%3B%20top%3A5px%3B%20display%3Anone%3B%20width%3A100%25%3B%20height%3A0px%3B%22%3E%0A%09%09%09%09%3Cdiv%20style%3D%22position%3Aabsolute%3B%20width%3A100%25%3B%20left%3A%20-1px%3B%20top%3A%200px%3B%20padding%3A5px%3B%20background-color%3A%23e3f4ff%3Btext-align%3Aleft%3B%22%3E%0A%09%09%09%09%09%3Cform%20name%3D%22fontStyle%22%3E%0A%09%09%09%09%09%3Cselect%20name%3D%22fontName%22%20onchange%3D%22applyFontStyle()%3B%22%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22%EA%B5%B4%EB%A6%BC%22%3E%EA%B5%B4%EB%A6%BC%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22%EB%8F%8B%EC%9B%80%22%3E%EB%8F%8B%EC%9B%80%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22%EB%B0%94%ED%83%95%22%3E%EB%B0%94%ED%83%95%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22%EA%B6%81%EC%84%9C%22%3E%EA%B6%81%EC%84%9C%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22Verdana%22%20selected%3EVerdana%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22Arial%22%3EArial%3C%2Foption%3E%09%09%0A%09%09%09%09%09%3C%2Fselect%3E%0A%09%09%09%09%09%3Cselect%20name%3D%22fontSize%22%20onchange%3D%22applyFontStyle()%3B%22%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%228%22%3E8%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%229%22%3E9%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%2210%22%3E10%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%2211%22%3E11%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%2212%22%20selected%3E12%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%2214%22%3E14%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%2216%22%3E16%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%2218%22%3E18%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%2220%22%3E20%3C%2Foption%3E%0A%09%09%09%09%09%3C%2Fselect%3E%0A%09%09%09%09%09%3Cselect%20name%3D%22fontColor%22%20onchange%3D%22applyFontStyle()%3B%22%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22red%22%20style%3D%22background-color%3Ared%22%3E%EB%B9%A8%EA%B0%95%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22blue%22%20style%3D%22background-color%3Ablue%3Bcolor%3A%23ffffff%3B%22%3E%ED%8C%8C%EB%9E%91%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22black%22%20selected%3D%22selected%22%20style%3D%22background-color%3Ablack%3Bcolor%3A%23ffffff%3B%22%3E%EA%B2%80%EC%A0%95%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22orange%22%20style%3D%22background-color%3Aorange%22%3E%EC%A3%BC%ED%99%A9%3C%2Foption%3E%0A%09%09%09%09%09%09%3Coption%20value%3D%22green%22%20style%3D%22background-color%3Agreen%22%3E%EC%B4%88%EB%A1%9D%3C%2Foption%3E%0A%09%09%09%09%09%3C%2Fselect%3E%0A%09%09%09%09%09%3C%2Fform%3E%0A%09%09%09%09%3C%2Fdiv%3E%0A%09%09%09%3C%2Fdiv%3E%0A%09%09%09%3Cform%20name%3D%22chatMessageForm%22%20method%3D%22post%22%20action%3D%22%2FHTTP_MSN%2FMessenger%2FsaveChatMessage.php%22%3E%0A%09%09%09%3Cinput%20type%3D%22hidden%22%20name%3D%22content%22%20value%3D%22%22%20%2F%3E%0A%09%09%09%3C%2Fform%3E%0A%09%09%3C%2Fdiv%3E%0A%09%09%3Cdiv%20id%3D%22_HCInputBox%22%20class%3D%22enter_box%22%3E%0A%09%09%09%3Cdiv%20name%3D%22_HCInPut%22%20id%3D%22_HCInPut%22%20class%3D%22HCInPut%22%20style%3D%22padding%3A0px%3B%22%20%20onkeyup%3D%22_HcheckEvtKcode(event%2Cthis)%22%20%20onpaste%3D%22_HCInPutPaste(event%2Cthis)%22%20ondrop%3D%22_HCInPutDrop(event%2Cthis)%22%20onFocus%3D%22inputOnFocus()%3B%22%3E%3C%2Fdiv%3E%0A%09%09%3C%2Fdiv%3E%0A%09%09%3Cdiv%20class%3D%22btn%22%3E%0A%09%09%09%3Ctable%20width%3D%22100%25%22%20height%3D%22100%25%22%20cellpadding%3D%220%22%20cellspacing%3D%220%22%20border%3D%220%22%3E%0A%09%09%09%09%3Ctr%3E%09%0A%09%09%09%09%09%3Ctd%20align%3D%22right%22%20style%3D%22padding%3A%204px%2010px%3B%200%200%3B%22%3E%3Cinput%20type%3D%22image%22%20src%3D%22%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fliaotian_30.gif%22%20width%3D%2264%22%20height%3D%2224%22%20onclick%3D%22H_pushNenter(document.getElementById('_HCInPut'))%22%20ACCESSKEY%3D%22s%22%20%2F%3E%3Cimg%20src%3D%22%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fliaotian_31.jpg%22%20width%3D%2225%22%20height%3D%2224%22%20onclick%3D%22showInputType(1)%3B%22%20%2F%3E%26nbsp%3B%3Cinput%20type%3D%22image%22%20src%3D%22%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fliaotian_29.gif%22%20width%3D%2273%22%20height%3D%2224%22%20onclick%3D%22document.getElementById('_HCInPut').innerHTML%3D''%3Bdocument.getElementById('_HCInPut').focus()%3B%22%20ACCESSKEY%3D%22c%22%20%2F%3E%3C%2Ftd%3E%0A%09%09%09%09%3C%2Ftr%3E%0A%09%09%09%3C%2Ftable%3E%0A%09%09%09%3Cdiv%20id%3D%22inputTypeLayer1%22%20style%3D%22display%3Anone%3B%20position%3Arelative%3B%20right%3A%200px%3B%20top%3A%20-89px%3B%20width%3A100%25%3B%20height%3A60px%3B%22%3E%0A%09%09%09%09%3Cdiv%20style%3D%22%20position%3Aabsolute%3B%20right%3A%2012px%3B%20top%3A%200px%3B%20width%3A98px%3B%20height%3A52px%3B%20border%3A1px%20solid%20%239ec2eb%3B%20background-color%3Awhite%3B%20text-align%3Aleft%3B%22%3E%0A%09%09%09%09%09%3Ctable%20width%3D%22100%25%22%20height%3D%22100%25%22%20cellpadding%3D%223%22%20cellspacing%3D%224%22%3E%0A%09%09%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%09%09%3Ctd%20id%3D%22inputType12%22%20style%3D%22cursor%3Ahand%3B%22%20onMouseOver%3D%22this.style.backgroundColor%3D'e3f4ff'%3B%22%20onMouseOut%3D%22this.style.backgroundColor%3D'white'%3B%22%20onclick%3D%22chgInputType(1%2C%202)%3B%22%3E%E2%88%9A%20Enter%3C%2Ftd%3E%0A%09%09%09%09%09%09%3C%2Ftr%3E%0A%09%09%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%09%09%3Ctd%20id%3D%22inputType11%22%20style%3D%22cursor%3Ahand%3B%22%20onMouseOver%3D%22this.style.backgroundColor%3D'e3f4ff'%3B%22%20onMouseOut%3D%22this.style.backgroundColor%3D'white'%3B%22%20onclick%3D%22chgInputType(1%2C%201)%3B%22%3ECtrl%2BEnter%3C%2Ftd%3E%0A%09%09%09%09%09%09%3C%2Ftr%3E%0A%09%09%09%09%09%3C%2Ftable%3E%0A%09%09%09%09%3C%2Fdiv%3E%0A%09%09%09%3C%2Fdiv%3E%0A%09%09%3C%2Fdiv%3E%0A%09%3C%2Fdiv%3E%0A%3C%2Fdiv%3E%0A%0A%3Cdiv%20id%3D%22swfouter%22%20style%3D%22position%3Aabsolute%3B%22%3E%3C%2Fdiv%3E"},
"agreeBox":{"size":{"width":"300px","height":""},"html":"%3Cdiv%20id%3D%22HagreeBox%22%20class%3D%22HagreeBox%22%3E%0D%0A%09%3Ctable%20border%3D%220%22%20cellspacing%3D%220%22%20cellpadding%3D%220%22%20width%3D%22100%25%22%3E%0D%0A%09%09%3Ctr%3E%0D%0A%09%09%09%3Ctd%20id%3D%22HagreeBox_top_l%22%3E%3C%2Ftd%3E%0D%0A%09%09%09%3Ctd%20id%3D%22HagreeBox_top%22%3E%3C%2Ftd%3E%0D%0A%09%09%09%3Ctd%20id%3D%22HagreeBox_top_r%22%3E%3C%2Ftd%3E%0D%0A%09%09%3C%2Ftr%3E%0D%0A%09%09%3Ctr%3E%0D%0A%09%09%09%3Ctd%20id%3D%22HagreeBox_middle_l%22%3E%3C%2Ftd%3E%0D%0A%09%09%09%3Ctd%20valign%3D%22top%22%3E%0D%0A%09%09%09%09%3Ctable%20id%3D%22HagreeBox_body%22%20border%3D%220%22%20cellspacing%3D%220%22%20cellpadding%3D%220%22%3E%0D%0A%09%09%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%09%09%3Ctd%20valign%3D%22top%22%20id%3D%22HagreeBox_body_img%22%3E%3Cimg%20src%3D%22"+_HConfig.server+"%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fno_photo.gif%22%20alt%3D%22%22%20width%3D%2255%22%20height%3D%2255%22%2F%3E%3C%2Ftd%3E%0D%0A%09%09%09%09%09%09%3Ctd%20valign%3D%22top%22%3E%0D%0A%09%09%09%09%09%09%09%3Ctable%20id%3D%22HagreeBox_contents%22%20border%3D%220%22%20cellspacing%3D%220%22%20cellpadding%3D%220%22%3E%0D%0A%09%09%09%09%09%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%09%09%09%09%09%3Ctd%3E%0D%0A%09%09%09%09%09%09%09%09%09%3Ctable%20width%3D%22100%25%22%20border%3D%220%22%20cellspacing%3D%220%22%20cellpadding%3D%220%22%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%09%3Ctd%20id%3D%22HagreeBox_title%22%3E%EC%9A%B4%EC%98%81%EC%9E%90%20%EC%83%81%EB%8B%B4%20%EC%9A%94%EC%B2%AD%3C%2Ftd%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%09%3Ctd%20id%3D%22HagreeBox_button%22%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%09%09%3Cimg%20src%3D%22"+_HConfig.server+"%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fbtn_agree.gif%22%20onClick%3D%22_HOpenChatWin('%7Brep__Id%7D'%2C''%2C'agree')%22%20class%3D%22HagreeBox_agree_ok%22%20id%3D%22HagreeBox_agree_ok%22%20alt%3D%22%22%2F%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%09%09%3Cimg%20src%3D%22"+_HConfig.server+"%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fbtn_cancle.gif%22%20onClick%3D%22_HCloseAgreeWin()%22%20class%3D%22HagreeBox_agree_cancle%22%20id%3D%22HagreeBox_agree_cancle%22%20alt%3D%22%22%2F%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%09%3C%2Ftd%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%3C%2Ftr%3E%0D%0A%09%09%09%09%09%09%09%09%09%3C%2Ftable%3E%0D%0A%09%09%09%09%09%09%09%09%09%3C%2Ftd%3E%0D%0A%09%09%09%09%09%09%09%09%3C%2Ftr%3E%0D%0A%09%09%09%09%09%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%09%09%09%09%09%3Ctd%20valign%3D%22top%22%20id%3D%22HagreeBox_msg%22%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%3Cdiv%20id%3D%22HagreeBox_body_msg%22%20class%3D%22HagreeBox_body_msg%22%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%09%3Cdiv%20id%3D%22HChatAgreeMsgBox%22%20class%3D%22HChatAgreeMsgBox%22%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%09%09%3Cspan%20id%3D%22HagreeBox_msg_id%22%3Eadmin%3C%2Fspan%3E%20%3Cbr%2F%3E%EB%8B%98%EA%BB%98%EC%84%9C%20%EB%8C%80%ED%99%94%EB%A5%BC%20%EC%9A%94%EC%B2%AD%ED%95%98%EC%85%A8%EC%8A%B5%EB%8B%88%EB%8B%A4.%3C%2Fspan%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%09%3C%2Fdiv%3E%0D%0A%09%09%09%09%09%09%09%09%09%09%3C%2Fdiv%3E%0D%0A%09%09%09%09%09%09%09%09%09%3C%2Ftd%3E%0D%0A%09%09%09%09%09%09%09%09%3C%2Ftr%3E%0D%0A%09%09%09%09%09%09%09%3C%2Ftable%3E%0D%0A%09%09%09%09%09%09%3C%2Ftd%3E%0D%0A%09%09%09%09%09%3C%2Ftr%3E%0D%0A%09%09%09%09%3C%2Ftable%3E%0D%0A%09%09%09%3C%2Ftd%3E%0D%0A%09%09%09%3Ctd%20id%3D%22HagreeBox_middle_r%22%3E%3C%2Ftd%3E%0D%0A%09%09%3C%2Ftr%3E%0D%0A%09%09%3Ctr%3E%0D%0A%09%09%09%3Ctd%20id%3D%22HagreeBox_bottom_l%22%3E%3C%2Ftd%3E%0D%0A%09%09%09%3Ctd%20id%3D%22HagreeBox_bottom%22%3E%3C%2Ftd%3E%0D%0A%09%09%09%3Ctd%20id%3D%22HagreeBox_bottom_r%22%3E%3C%2Ftd%3E%0D%0A%09%09%3C%2Ftr%3E%0D%0A%09%3C%2Ftable%3E%0D%0A%3C%2Fdiv%3E"},"listMini":{"size":{"width":"25px","height":""},"html":"%3CIMG%20onclick%3D_HwkMaxmize%28%29%20src%3D%22"+_HConfig.server+"%2Fv6%2Fskin%2Ftemp%2Fdefault%2Fver_03%2Fimg%2Fminimize.jpg%22%20editable%3D%22true%22%20edtdf%3D%22123456%22%3E%3C%2FIMG%3E"},"CBtn":{"html":"%3Cimg%20%20editable%3D%22true%22%20src%3D%22%7B%7BskinPath%7D%7D%2Fminimize.jpg%22%20ondblclick%3D%22%7B%7BfirstChatSubmit%7D%7D%22%3E%3C%2Fimg%3E"},"TBtn":{"html":"%3Cimg%20%20editable%3D%22true%22%20src%3D%22%7B%7BskinPath%7D%7D%2Fminimize.jpg%22%20onclick%3D%22%7B%7BMaxmize%7D%7D%22%3E%3C%2Fimg%3E"},"memo":{"phone":"%3CP%20id%3D%22HskinBox_memo_from%22%3E%3Cspan%20id%3D%22HskinBox_memo_agree_title%22%3E%EA%B0%9C%EC%9D%B8%EC%A0%95%EB%B3%B4%EC%B7%A8%EA%B8%89%3C%2Fspan%3E%3Clabel%20for%3D%22HskinBox_memo_agree_check%22%3E%EB%8F%99%EC%9D%98%3C%2Flabel%3E%3Cinput%20type%3D%22checkbox%22%20id%3D%22HskinBox_memo_agree_check%22%20onfocus%3D%22this.blur()%3B%22%20%2F%3E%3C%2FP%3E%0A%3Cp%20id%3D%22HskinBox_memo_number%22%3E%0A%09%3Cinput%20id%3D%22HmemoNum1%22%20class%3D%22hmemonum%22%20value%3D%22010%22%2F%3E%0A%09%3Cinput%20id%3D%22HmemoNum2%22%20class%3D%22hmemonum%22%2F%3E%0A%09%3Cinput%20id%3D%22HmemoNum3%22%20class%3D%22hmemonum%22%2F%3E%0A%3C%2Fp%3E"}}}
/*Rde*/
;var _HskincssText=".HskinBox * {BORDER-BOTTOM: 0px; POSITION: static; TEXT-ALIGN: left; BORDER-LEFT: 0px; PADDING-BOTTOM: 0px; LINE-HEIGHT: 20px; BACKGROUND-COLOR: transparent; FONT-STYLE: normal; MARGIN: 0px; PADDING-LEFT: 0px; BORDER-SPACING: 0; PADDING-RIGHT: 0px; BORDER-COLLAPSE: collapse; FONT-FAMILY: Verdana,Gulim,Arial; COLOR: black; FONT-SIZE: 100%; VERTICAL-ALIGN: middle; BORDER-TOP: 0px; CURSOR: pointer; FONT-WEIGHT: normal; BORDER-RIGHT: 0px; TEXT-DECORATION: none; PADDING-TOP: 0px}.HskinBox div{clear:none;}.HskinBox {BACKGROUND-COLOR: transparent; WIDTH: 100%}#HskinBox_titleOuter {WIDTH: 100%; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/top_l.gif) no-repeat; HEIGHT: 32px}#HskinBox_title {BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/top_c.gif) repeat-x -20px 0px; HEIGHT: 32px; MARGIN-LEFT: 8px; FONT-SIZE: 12px; MARGIN-RIGHT: 8px}#HskinBox_title H3 {MARGIN-TOP: 6px; FONT-FAMILY: tahoma; FLOAT: left; LETTER-SPACING: -0.05em; COLOR: #fff; MARGIN-LEFT: 10px; FONT-SIZE: 11px; FONT-WEIGHT: bold}#HskinBox_title_r {POSITION: relative; WIDTH: 28px; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/top_r.gif) no-repeat right top; FLOAT: right; HEIGHT: 32px; MARGIN-RIGHT: -8px}#HskinBox_close {POSITION: relative; WIDTH: 14px; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/btn_close.gif) no-repeat; HEIGHT: 14px; TOP: 11px; CURSOR: pointer; LEFT: 5px}.HskinBox_contBoxOuter {WIDTH: 100%; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/mid_l.gif) white repeat-y left 50%}.HskinBox_contBox {WIDTH: 100%; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/mid_r.gif) repeat-y right 50%}.HskinBox_content {POSITION: relative; padding-top:5px; MARGIN: 0px 10px; BACKGROUND: #ffffff; CLEAR: both; OVERFLOW: hidden;}.tabMenuWrapper {MARGIN: 0px; WIDTH: 100%; CLEAR: both}.tabMenuWrapper .TabMenuItem {MARGIN: 0px 0px 5px; WIDTH: 100%; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/tb_c.gif) repeat-x; HEIGHT: 22px; CLEAR: left}.tabMenuWrapper .TabMenuItem DIV {BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/tb_l.gif) no-repeat}.tabMenuWrapper .TabMenuItem P {MARGIN: 0px; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/tb_r.gif) no-repeat right top}.tabMenuWrapper .TabMenuItem SPAN {MARGIN: 0px 5px; DISPLAY: block; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/ic_out.gif) no-repeat right 50%}.tabMenuWrapper .TabMenuItem A {PADDING-LEFT: 18px; DISPLAY: block; FONT-FAMILY: tahoma; LETTER-SPACING: -0.05em; HEIGHT: 20px; COLOR: #505aa2; FONT-SIZE: 11px; FONT-WEIGHT: bold; PADDING-TOP: 2px}#menuTab_CHAT A {BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/ic_ch.gif) no-repeat 0px 50%}#menuTab_SMS A {BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/ic_sms.gif) no-repeat 0px 50%}#menuTab_MEMO A {BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/ic_memo.gif) no-repeat 0px 50%}.activeChat #menuTab_CHAT SPAN {BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/ic_over.gif) no-repeat right 50%}.activeSMS #menuTab_SMS SPAN {BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/ic_over.gif) no-repeat right 50%}.activeMEMO #menuTab_MEMO SPAN {BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/ic_over.gif) no-repeat right 50%}.HskinBox_bottOuter {WIDTH: 100%; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/bot_l.gif) no-repeat; HEIGHT: 10px}.HskinBox_bott {BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/bot_c.gif) repeat-x -20px 0px; HEIGHT: 10px; MARGIN-LEFT: 8px; FONT-SIZE: 12px; MARGIN-RIGHT: 8px}.HskinBox_bott_right {POSITION: relative; WIDTH: 28px; BACKGROUND: url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/bot_r.gif) no-repeat right top; FLOAT: right; HEIGHT: 10px; MARGIN-RIGHT: -8px}.Hskin_admList {BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Verdana,Gulim,Arial; FONT-SIZE: 9pt; BORDER-TOP: 0px; BORDER-RIGHT: 0px; PADDING-TOP: 0px}.Hskin_admList DIV {padding:0 8px;}.HALLvl1 P {COLOR: #00aeae; FONT-WEIGHT: bold}.HALLvl2 P {COLOR: #676767; FONT-WEIGHT: bold}.HALLvl3 P {COLOR: #676767; FONT-WEIGHT: bold}P.HALItem_p {PADDING-LEFT: 21px; MARGIN-BOTTOM:2px; BACKGROUND-REPEAT: no-repeat; BACKGROUND-POSITION: left center; COLOR: black; FONT-WEIGHT: normal}P.HALLvl1Title {BACKGROUND-IMAGE: url("+_HConfig.server+"/v6/skin/img/arrow_biglDown.gif); BACKGROUND-REPEAT: no-repeat; BACKGROUND-POSITION: right center}.HALLvl2 {BACKGROUND-IMAGE: url("+_HConfig.server+"/v6/skin/img/arrow_smallDown.gif); BACKGROUND-REPEAT: no-repeat; BACKGROUND-POSITION: left 8px}.HALLvl3 {BACKGROUND-IMAGE: url("+_HConfig.server+"/v6/skin/img/arrow_smallDown.gif); BACKGROUND-REPEAT: no-repeat; BACKGROUND-POSITION: left 8px}/*sms*/.HskinBox_sms {border:0;width:100%;text-align:center;font-family:Verdana,Gulim,Arial;font-size:9pt;}.HskinBox_sms * {border:0;padding:0;margin:0;font-family:Verdana,Gulim,Arial;font-size:9pt;cursor:pointer;font-style:normal;font-weight:normal;color:black;font-size:100%;line-height:20px;text-align:left;vertical-align:middle;text-decoration:none;border-spacing:0;border-collapse:collapse;background-color:transparent;clear:both;position:static;display:;}.HskinBox_sms textarea{border:1px solid gray;width:100%;cursor:text;height:66px; overflow-y:auto;}.HskinBox_sms .hsmsnum{border:1px solid gray; width:28%; cursor:text; line-height:14px;}#HskinBox_sms_agree_title{color:#0683FF;margin-right:3px;}#HskinBox_sms_comment{height:18px; overflow:hidden;}#HskinBox_sms_byte{text-align:right; font-size:11px; color:#666666;}#HskinBox_sms_from{text-align:center;}#HskinBox_sms_btnsend{margin:5px 0 10px; text-align:center;}#HskinBox_sms_number{text-align:center;}/*memo*/.HskinBox_memo {border:0;width:100%;font-family:Verdana,Gulim,Arial;font-size:9pt;}.HskinBox_memo * {border:0;padding:0;margin:0;font-family:Verdana,Gulim,Arial;font-size:9pt;cursor:pointer;font-style:normal;font-weight:normal;color:black;font-size:100%;line-height:20px;text-align:left;vertical-align:middle;text-decoration:none;border-spacing:0;border-collapse:collapse;background-color:transparent;clear:both;position:static;display:;}.HskinBox_memo textarea{border:1px solid gray;width:100%;cursor:text;height:66px; overflow-y:auto;}.HskinBox_memo .hmemonum{border:1px solid gray; width:28%; cursor:text; line-height:14px;}#HskinBox_memo_agree_title{color:#0683FF;margin-right:3px;}#HskinBox_memo_comment{height:18px; overflow:hidden;}#HskinBox_memo_byte{text-align:right; font-size:11px; color:#666666;}#HskinBox_memo_from{text-align:center;}#HskinBox_memo_number{text-align:center;}#HskinBox_memo_btnsend{text-align:center; margin-top:10px;}/*agreeBox*/#HagreeBox *{font-family:Verdana,Gulim,Arial; font-size:9pt; cursor:pointer; color:black;}#HagreeBox {width:100%}#HagreeBox img,#HagreeBox table {border:0}#HagreeBox_top_l{background:url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/top_l3.gif) no-repeat;	width:8px;	height:8px;}#HagreeBox_top_r{background:url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/top_r3.gif) no-repeat;	width:8px;	height:8px;}#HagreeBox_top{	background:url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/top_c3.gif) repeat-x;	height:8px;}#HagreeBox_middle_l{background:url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/mid_l.gif) repeat-y left;	width:8px;}#HagreeBox_middle_r{background:url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/mid_r.gif) repeat-y right;	width:8px;}#HagreeBox_body{height:60px; width:100%; margin:0;background:#fff;}#HagreeBox_body_img{margin-right:5px; background:url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/bg_photo.gif) no-repeat; padding:2px; width:59px; height:59px;}#HagreeBox_contents{width:100%;}#HagreeBox_title{font-weight:bold;}#HagreeBox_button{text-align:right;}#HagreeBox_msg{padding-top:3px;}#HagreeBox_msg_id{color:#f0004e; font-weight:bold;}#HagreeBox_bottom_l{background:url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/bot_l.gif) no-repeat;	width:8px;	height:10px;}#HagreeBox_bottom_r{background:url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/bot_r.gif) no-repeat;	width:8px;	height:10px;}#HagreeBox_bottom{background:url("+_HConfig.server+"/v6/skin/temp/default/ver_03/img/bot_c.gif) repeat-x; height:10px;}#LOGA_TMP_CSS_TEXT {BACKGROUND-IMAGE: url(http://blogimgs.naver.com/nblog/skins/background/0205_thumb.gif)}#motherboard {FONT-SIZE: 9pt;}";var _HadmListJs={"title":"","agreeTitle":"","agreeMessage":"","Hide":"N","List":"Scroll","Height":"","part":[],"members":[{"name":"%EB%AC%B8%EA%B3%A0%EB%A6%AC%EB%8B%B7%EC%BB%B4","id":"1","on":"N","pic":"default.gif","width":"55","height":"55"},{"name":"%EB%AC%B8%EA%B3%A0%EB%A6%AC%EB%8B%B7%EC%BB%B4","id":"2","on":"N","pic":"default.gif","width":"55","height":"55"},{"name":"%EB%AC%B8%EA%B3%A0%EB%A6%AC%EB%8B%B7%EC%BB%B4","id":"3","on":"N","pic":"default.gif","width":"55","height":"55"},{"name":"%EB%AC%B8%EA%B3%A0%EB%A6%AC%EB%8B%B7%EC%BB%B4","id":"4","on":"N","pic":"default.gif","width":"55","height":"55"},{"name":"%EB%AC%B8%EA%B3%A0%EB%A6%AC%EB%8B%B7%EC%BB%B4","id":"5","on":"N","pic":"default.gif","width":"55","height":"55"},{"name":"%EB%AC%B8%EA%B3%A0%EB%A6%AC%EB%8B%B7%EC%BB%B4","id":"6","on":"N","pic":"default.gif","width":"55","height":"55"},{"name":"%EB%AC%B8%EA%B3%A0%EB%A6%AC%EB%8B%B7%EC%BB%B4","id":"7","on":"N","pic":"default.gif","width":"55","height":"55"},{"name":"%ED%99%8D%ED%83%9C%EC%A4%91","id":"8","on":"N","pic":"default.gif","width":"55","height":"55"},{"name":"%EB%AC%B8%EA%B3%A0%EB%A6%AC%EB%8B%B7%EC%BB%B4","id":"9","on":"N","pic":"default.gif","width":"55","height":"55"}]};var tpl_words={
"{{Minimize}}":"_HwkMinimize()",
"{{skinBox_chat}}":"HshowSkinBox('chat')",
"{{skinBox_sms}}":"HshowSkinBox('sms')",
"{{skinBox_memo}}":"HshowSkinBox('memo')",
"{{skinPath}}":_Hskinpath,
"{{closeAgreeWin}}":"_HCloseAgreeWin()",
"{{openChatWin}}":"_HOpenChatWin('{rep__Id}','','agree')",
"{{firstChatSubmit}}":"H_FirstChatSubmit()"
};function _HFnadmList(){
	this.list=_HadmListJs;
	this.svr=_Hsvrname;
	this.skinPath=location.protocol+"//"+this.svr+"/v6/skin/img/";
	this.icon={on:this.skinPath+"icon01.gif",off:this.skinPath+"icon03.gif"};
	this.smsAlt=decodeURIComponent("%EC%9A%B4%EC%98%81%EC%9E%90%EC%97%90%EA%B2%8C%20SMS%EB%AC%B8%EC%9E%90%20%EB%B3%B4%EB%82%B4%EA%B8%B0");
	this.memoAlt=decodeURIComponent("%EC%9A%B4%EC%98%81%EC%9E%90%EC%97%90%EA%B2%8C%20%EB%A9%94%EB%AA%A8%20%EB%82%A8%EA%B8%B0%EA%B8%B0");
	this.chatAlt=decodeURIComponent("%EC%9A%B4%EC%98%81%EC%9E%90%EC%99%80%20%EC%B1%84%ED%8C%85%2F%EC%83%81%EB%8B%B4%ED%95%98%EA%B8%B0");
	this.chatAbsAlt=decodeURIComponent("%ED%95%B4%EB%8B%B9%20%EC%83%81%EB%8B%B4%EC%9E%90%EB%8A%94%20%EC%83%81%EB%8B%B4%EC%9D%84%20%ED%95%A0%20%EC%88%98%20%EC%97%86%EC%8A%B5%EB%8B%88%EB%8B%A4.%0A%0A%EC%83%81%EB%8B%B4%EC%9E%90%EC%97%90%EA%B2%8C%20SMS%EB%AC%B8%EC%9E%90%EB%A5%BC%20%EB%B3%B4%EB%82%B4%EC%8B%9C%EA%B2%A0%EC%8A%B5%EB%8B%88%EA%B9%8C%3F");
	this.getSpaceString=function(cnt){
		var space="&nbsp;&nbsp;&nbsp;&nbsp;";
		var arr=[];
		for(var i=0;i<cnt;i++){arr.push(space);}
		return arr.join("");
	};
	this.getNodeHTML=function(obj,arr){
		var lvl_class="";
		var P=this;
		for(var i=0;i<obj.length;i++){
			if(typeof obj[i]["level"]!="undefined"){
				lvl_class="HALLvl"+obj[i]["level"];
				var ALcnt=0;
				if(obj[i]["info"].length>0){for(var k=0;k<obj[i]["info"].length;k++){if(typeof obj[i]["info"][k]["name"]!="undefined"){ALcnt++;}}}
				var strALcnt=(ALcnt==0)?"":"("+ALcnt+")";
				arr.push("<div class=\""+lvl_class+"\"><p onclick=\"_HALonoff(this)\">"+decodeURIComponent(obj[i]["dept"])+strALcnt+"</p>");
				if(obj[i]["info"].length>0){if(obj[i]["info"].length>0){arr=P.getNodeHTML(obj[i]["info"],arr);}}
				arr.push("</div>");
			} else {
				if(obj[i]["on"]=="N"){
					arr.push("<p id=\"HALItem_p_"+obj[i]["id"]+"\" class=\"HALItem_p\" onclick=\"_HSMSConfirm('"+obj[i]["id"]+"')\" ");
					arr.push("style=\"background-image:url('"+P.icon.off+"')\">"+decodeURIComponent(obj[i]["name"])+"</p>");
				}else{
					arr.push("<p id=\"HALItem_p_"+obj[i]["id"]+"\" class=\"HALItem_p\" onclick=\"_HOpenChatWin('"+obj[i]["id"]+"', 'y', 'click')\" ");
					arr.push("style=\"background-image:url('"+P.icon.on+"')\">"+decodeURIComponent(obj[i]["name"])+"</p>");
				}
			}
		}
		return arr;
	};
	this.getHTML=function(){
		var P=this;
		var arr=["<div class=\"Hskin_admList\">"];
		var ps="";
		var list=this.list;
		var deptNm="";
		var lvl_class="";
		
		for(var i=0;i<list["part"].length;i++){
			if(typeof list["part"][i]["level"]!="undefined"){
				lvl_class="HALLvl"+list["part"][i]["level"];
				arr.push("<div class=\""+lvl_class+"\"><p class=\"HALLvl1Title\" onclick=\"_HALonoff(this);\">"+decodeURIComponent(list["part"][i]["dept"].replace(/\+/g," "))+"</p>");				
				if(list["part"][i]["info"].length>0){arr=P.getNodeHTML(list["part"][i]["info"],arr);}
				arr.push("</div>");
			}
		}
		if(list["members"].length>0){
			arr=P.getNodeHTML(list["members"],arr);
		}
		arr.push("</div>");
		return arr.join("");
	}
}

function _HALonoff(obj){
	var pnt=obj.parentNode;
	var state = pnt.getAttribute("state");
	var p = pnt.getElementsByTagName("p");
	if(!state){
		pnt.setAttribute("state","open");
		state = pnt.getAttribute("state");
	}
	var dsp = (state == "open" ? "none" : "");
	for(var i=0; i<p.length; i++){
		if(p[i].id != obj.id){
			p[i].style.display = dsp;
		}
	}
	pnt.setAttribute("state",(state == "open" ? "close" : "open"));
}

//send sms when administrator absence
function _HSMSConfirm(Id){
	if(confirm(_HadmList.chatAbsAlt)){
		var a=document.getElementById("menuTab_SMS");
		if(a){a.click();}
	}
}


function createTag(obj) {
	var arr=[]
		arr.push("<"+obj.tag+" ");
		for(var prt in obj){
			if(prt=="html"||prt=="tag"||prt=="child"||prt=="editable"){continue;}
			arr.push(" "+prt+"="+"\""+obj[prt]+"\"");
		}
		if(obj.tag=="img"||obj.tag=="input"){arr.push(" />");}else{arr.push(">");}
		if(typeof obj["child"]!="undefined"){
			if(obj["child"].length>0){				
				arr.push(HrecuObj(obj["child"]));
			}
		}
		if(typeof obj["html"]!="undefined"){arr.push(obj["html"]);}
		if(obj.tag=="img"||obj.tag=="input"){}else{arr.push("</"+obj["tag"]+">");}

		return arr.join("");
}

function HrecuObj(obj){
	var arg = arguments;
	var arr=[];
	if(arg[1] === true)  {
		arr.push(createTag(obj));
	} else {
		for(var i=0;i<obj.length;i++){
			arr.push(createTag(obj[i]));
		}
	}
	return arr.join("");
}

function HcvtJson2Html(obj,item){
	var A=decodeURIComponent(obj["item"][item].html);
	A=A.replace(/\{/,"\{").replace(/\}/,"\}");
	for(var o in tpl_words){
		var reg=new RegExp(o,"g");
		A=A.replace(reg,tpl_words[o]);
	}
	return A;
}
function HcvtText2Html(obj,item){
	var A=item;
	A=A.replace(/\{/,"\{").replace(/\}/,"\}");
	for(var o in tpl_words){
		var reg=new RegExp(o,"g");
		A=A.replace(reg,tpl_words[o]);
	}
	return A;
}
/*
function HcvtJson2Html(json,item){
	var t=json.item[item];
	var doc=t["layout"]["doc"];
	var html=HrecuObj(doc, true);
	return html;
}*/function _HgetLoadImg(_id,_src){if (_HObject.ele(_id)){return _HObject.ele(_id);}else{var img = document.createElement("img");img.id=_id;img.src=_src;return img;}}

function _HcheckTExtaRea(e,o){if(!e)e=window.event;if(e.keyCode==13){H_FirstChatSubmit();}}
function _HIsEmpty(str){var chkstr = str + "";var is_Space = true;if ((chkstr =="")||(chkstr == null)) {return true;}for (var j=0; is_Space && (j<chkstr.length); j++){if(chkstr.substring(j,j+1)!="")is_Space=false;}return is_Space;}
function _HIsEnterkey(str){var s=[];for(var i=0;i<str.length;i++){if (str.charCodeAt(i)=='13'){s.push("");}else{s.push(str.charAt(i));}}return s.join("");}
function _HChatValueCheck(str){	str=_Htrim(str);str=_HIsEnterkey(str);	return (_HIsEmpty(str)) ? false : true;}
/*check word ban*/
function _HchkXstring(str){var XstringCheck= true;str=_Htrim(str);str=_HIsEnterkey(str);var regexp=/\S+/g;while((word=regexp.exec(str))!=null){var strP=unescape(_HConfig.strXstring);var regexp1=new RegExp(strP,'gi');var array=regexp1.exec(word[0]);if(! _HIsEmpty(array[0])){XstringCheck = false;}}return XstringCheck;}
function _HCloseSMS(){if (_HScript.getCookie("HSMSview"+_HConfig.cdkey)==null){_HScript.setCookie("HSMSview"+_HConfig.cdkey,'N');}HdspSkin();}
function _HCloseMEMO(){if (_HScript.getCookie("HMEMOview"+_HConfig.cdkey)==null){_HScript.setCookie("HMEMOview"+_HConfig.cdkey,'N');}HdspSkin();}

function _HInit_ReayImg(){
	var ImgUrl = _HConfig.server+"/HTTP_MSN/SkinImgs/"+_HConfig.chatSkin+"/img/";
	if(typeof _HConfig.gsikTalk == "undefined") _HConfig.gsikTalk = "N";
	this.CalImg = _HConfig.callImg;
	this.RdyImg = _HConfig.readyImg;
	this.RdyHid = _HConfig.btnHidden;
	this.BtnType = _HConfig.btnType();
	this.strCalID = "_HimgCall";
	this.strRdyID = "_HimgReady";
	this.LoadCalImg = _HgetLoadImg(this.strCalID,this.CalImg);
	this.LoadRdyImg = _HgetLoadImg(this.strRdyID,this.RdyImg);
	this.CurImg = (_HConfig.chatEnable==false) ? this.LoadRdyImg : this.LoadCalImg;
	this.WhatImg = (_HConfig.chatEnable==false) ? this.RdyImg : this.CalImg;
	this.WhatID = (_HConfig.chatEnable==false) ? this.strRdyID : this.strCalID;
	this.WhatEvtMos = " ";
	this.WhatEvtMos2 = " ";
	this.WhatEvtClick = "";
	this.WhatCaption = (_HConfig.chatEnable==false) ? _HConfig.msg.outofTime:_HConfig.msg.wait;
	this.WhatRdyCaption = (_HConfig.chatEnable==false) ? _HConfig.msg.outofTime:_HConfig.msg.proposeChat;
	this.WhatCallTitle = (_HConfig.chatEnable==false) ? "" : _HConfig.msg.enableChat.replace(/\\n/gi,"\n");
	this.strImg = "<img src=\""+this.WhatImg+"\" id='"+this.WhatID+"' ondblclick=\"_HOpenChatWin('', '', 'click');\" onclick=\""+this.WhatEvtClick+"\"";	
	this.strImg += " style=\"cursor:pointer;border:0;\" align=absmiddle title=\""+this.WhatCallTitle+"\" "+this.WhatEvtMos+" />";
	this.strGsik = "<img src=\""+this.CalImg+"\" id='"+this.WhatID+"' ";
	if(typeof _HConfig.gsikTalkHand == "undefined"){
		this.strGsik += " align=absmiddle title=\""+this.WhatCallTitle+"\" "+this.WhatEvtMos+" />";
	}else if(_HConfig.gsikTalkHand == ""){
		this.strGsik += " align=absmiddle title=\""+this.WhatCallTitle+"\" "+this.WhatEvtMos+" />";
	}else{
		this.strGsik += " style=\"cursor:pointer;border:0;\" ondblclick=\"_HOpenGsiktalkWin('"+_HConfig.gsikTalkHand.split("-").join("")+"');\" align=absmiddle title=\""+this.WhatCallTitle+"\" "+this.WhatEvtMos+" />";
	}
	//Textbox
			var strText = [];
	var strTextCL=[];strText.push("<table style=\"table-layout:auto;padding:0;margin:0\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"_HCTxtArea\">");
strText.push("<tr><td id=\"_HCTxtArea_title\" style=\"font-size:0pt;\"><img id=\"_HTxtboxTitle\" src=\"");
strText.push(ImgUrl);
strText.push("TextTopImg.gif\" ");
strText.push(this.WhatEvtMos2);
strText.push(" /></td></tr>");
strText.push("<tr><td align=\"center\" style=\"background-color:#f4d8e7;border-left:1px solid #c0a3b1;border-right:1px solid #c0a3b1;\">");
strText.push("<textarea id=\"__Chat_Msg\" style=\"color:black;width:128px;height:50px;font-family:Dotum;font-size:12px;border:1px solid #D6D3D6;background-color:#FFFFF7;ime-mode:active;\"></textarea></td></tr>");
strText.push("<tr><td style=\"background-color:#f4d8e7;border-left:1px solid #c0a3b1;border-right:1px solid #c0a3b1;text-align:center;height:22px;\">");
strText.push("<img src=\"");
strText.push(ImgUrl);
strText.push("BtnTextSubmit.gif\" id=\"__H_btn_submit\" onclick=\"H_FirstChatSubmit();\" style=\"cursor:pointer;\" /></td></tr>");
strText.push("<tr><td style=\"font-size:0pt;\"><img src=\"");
strText.push(ImgUrl);
strText.push("TextBottmImg.gif\" /></td></tr></table>");

if(_HConfig.useChatLayer == "Y"){
strTextCL.push("<table id=\"_HChatLayerTable\" class=\"HChatLayerTable\" width=\"100%\" border=\"0\"	cellspacing=\"0\"	cellpadding=\"0\">");
strTextCL.push("	<tr>");
strTextCL.push("		<td	height=\"34\">");
strTextCL.push("			<table class=\"HChatLayerTop\" width=\"100%\" border=\"0\" cellpadding=\"0\"cellspacing=\"0\">");
strTextCL.push("				<tr>");
strTextCL.push("					<td	width=\"3\"><img	src=\""+ImgUrl+"/topL.gif\" /></td>");
strTextCL.push("					<td	id=\"_HChatLayerTopM\"	class=\"HChatLayerTopM\">");
strTextCL.push("						<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">");
strTextCL.push("							<tr>");
strTextCL.push("								<td id=\"_HChatLayerTitle\" class=\"HChatLayerTitle\">"+_HConfig.chatTitle+"</td>");
strTextCL.push("								<td id=\"_HChatLayerClose\" width=\"21\"><img	src=\""+ImgUrl+"/layerChat_close.gif\" /></td>");
strTextCL.push("							</tr>");
strTextCL.push("						</table>");
strTextCL.push("					</td>");
strTextCL.push("					<td	width=\"3\"><img src=\""+ImgUrl+"/topR.gif\" /></td>");
strTextCL.push("				</tr>");
strTextCL.push("			</table>");
strTextCL.push("		</td>");
strTextCL.push("	</tr>");
strTextCL.push("	<tr>");
strTextCL.push("		<td	id=\"_HChatLayerNotice\" class=\"HChatLayerBorderLR\"	style=\"background-color:"+_HConfig.chatNoticeBGColor+";color:"+_HConfig.chatNoticeColor+";\">");
strTextCL.push("			<!-- notice here -->");
strTextCL.push("		</div>");
strTextCL.push("		</td>");
strTextCL.push("	</tr>");
strTextCL.push("	<tr>");
strTextCL.push("		<td	id=\"_HChatLayerMsgM\"	class=\"HChatLayerBorderLR\">");
strTextCL.push("			<div id=\"_HChatLayerMsg\" class=\"HChatLayerMsg\"></div>");
strTextCL.push("		</td>");
strTextCL.push("	</tr>");
strTextCL.push("	<tr>");
strTextCL.push("		<td	id=\"_HChatLayerInput\" class=\"HChatLayerBorderLR\">");
strTextCL.push("			<table class=\"HChatLayerInputT\" border=\"0\" cellpadding=\"0\"	cellspacing=\"0\"	>");
strTextCL.push("				<tr>");
strTextCL.push("					<td width=\"10\"></td>");
strTextCL.push("					<td><input type=\"text\" style=\"ime-mode:auto;font-family:Dotum;font-size:9pt;color:black;width:99%;height:18px;padding:0;margin:0;border:1px solid gray;\" name=\"_HCInPut\" id=\"_HCInPut\" value=\"\" onkeydown=\"_HLayerChat.chkEvtKcode(event,this)\" ></td>");
strTextCL.push("					<td width=\"10\"></td>");
strTextCL.push("					<td	width=\"58\"><img src=\""+ImgUrl+"/btn_send.gif\" onclick=\"_HLayerChat.msgSubmit()\" /></td>");
strTextCL.push("				</tr>");
strTextCL.push("				<tr><td></td><td><span id=\"_HtypingTT\" style=\"color:gray;font-size:8pt;\"></span></td><td></td></tr>");
strTextCL.push("			</table>");
strTextCL.push("		</td>");
strTextCL.push("	</tr>");
strTextCL.push("	<tr>");
strTextCL.push("		<td>");
strTextCL.push("			<table id=\"_HChatLayerBottom\" class=\"HChatLayerBottom\" width=\"100%\"	height=\"6\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
strTextCL.push("				<tr>");
strTextCL.push("					<td	width=\"3\"><img src=\""+ImgUrl+"/botL.gif\" /></td>");
strTextCL.push("					<td	id=\"_HChatLayerBottomM\"	class=\"HChatLayerBottomM\"><img src=\""+ImgUrl+"/bot_img.gif\" /></td>");
strTextCL.push("					<td	width=\"3\"><img src=\""+ImgUrl+"/botR.gif\" /></td>");
strTextCL.push("				</tr>");
strTextCL.push("			</table>");
strTextCL.push("		</td>");
strTextCL.push("	</tr>");
strTextCL.push("</table>");
}		this.strTxt =  strText.join("");
		strText = null;
		//SMS
	
	if(typeof _HChatDesign=="object" && typeof _HChatDesign.useSMSDesign == "string" && _HChatDesign.useSMSDesign != "N"){
		this.strSMS = "<iframe id='_HifrmSMS' style='display:none;'></iframe>"+_HChatDesign.smsHTML();
	}else{
		var strText1 = [];
		var imgPath = _HConfig.server+"/HTTP_MSN/img";
		strText1.push("<table style=\"table-layout:auto;width:145px;padding:0;margin:0\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" id=\"_HSMSTxTArea\"><tr><td>");
		strText1.push("<div id='_HSMStitleField' style=\"width:109px;height:12px;overflow:hidden;background-color:transparent;position:absolute;top:6px;left:4px;border:0;padding:0;margin:0;font-family:Dotum;font-size:9pt;color:black;\" "+this.WhatEvtMos +">"+_HConfig.strSMStitle+"</div>");
		strText1.push("<iframe id='_HifrmSMS' style='display:none;'></iframe>");
		strText1.push("<table style=\"table-layout:auto;width:145px;padding:0;margin:0;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
		strText1.push("<tr><td style=\"width:109px;\" id=\"_HCTxtArea_title\">");
		strText1.push("<img id=\"_HSmsTxtTitle\" src=\""+imgPath+"/sms_title.gif\" style=\"width:118px;height:22px;\" "+this.WhatEvtMos +" /></td>");
		strText1.push("<td style=\"widht:36px;\"><img src='"+imgPath+"/b_btn.gif' style=\"width:27px;height:22px;cursor:pointer\" onclick=\"_HCloseSMS();\" /></td>");
		strText1.push("</tr></table></td></tr><tr><td><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout:auto;background-color:white;width:145px;padding:0;margin:0;border:0;\">");
		strText1.push("<tr><td style=\"width:4px;\"><img id='_HSMSb_left' src='"+imgPath+"/b_left.gif' style=\"width:4px;height:110px;\" /></td>");
		strText1.push("<td style=\"width:137px;text-align:center;vertical-align:top;\"><table style=\"table-layout:auto;width:137px;padding:0;margin:0;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr>");
		strText1.push("<td style=\"height:1px;font-size:1px;\"><img src='"+imgPath+"/b_center.gif' style=\"width:137px;height:1px;\" /></td></tr>");
		strText1.push("<tr><td style=\"background-color:white;\"><textarea id=\"HsmsContent\" ")
		strText1.push("style=\"color:black;background-color:white;padding:0;margin:0;font-family:Dotum;font-size:8.9pt;color:#8E8E8E;border:1px solid #CCCCCC;width:135px;height:64px;ime-mode:active;\"");
		strText1.push(" onkeydown=\"_HsmskyeChk(this);\" onkeyup=\"_HsmskyeChk(this);\" onfocus=\"_HClearTextM(this,'"+_HConfig.strSMSmemo+"')\">"+_HConfig.strSMSmemo+"</textarea></td>");
		strText1.push("</tr><tr><td style=\"background-color:white;font-family:Dotum;font-size:8.9pt;text-align:left;padding:2px 0;\"><span style=\"border:0;text-align:left;display:none;\"><img src=\""+imgPath+"/b_btn03.gif\" onclick=\"_HviewHSMSnumberField();\" style=\"width:16px;cursor:pointer;\" align=\"absmiddle\" /></span>");
		strText1.push("<span style=\"padding-left:8px;border:0;text-align:left;color:gray;font-family:Dotum;font-size:8.9pt;color:#1C6FC1;\" onclick=\"_HwinOpen('/HTTP_MSN/admin/personal_Info.php', 717, 600);\">"+unescape("%uAC1C%uC778%uC815%uBCF4%uCDE8%uAE09")+"</span><label for=\"HskinBox_sms_agree_check\" style=\"padding-left:8px;border:0;text-align:left;color:gray;font-family:Dotum;font-size:8.9pt; margin-left:2px;\">"+unescape("%uB3D9%uC758")+"</label><input type=\"checkbox\" id=\"HskinBox_sms_agree_check\" style=\"vertical-align:middle;border:none; padding:0px;\" onfocus=\"this.blur();\" /></td></tr>");
		strText1.push("<tr id=\"HSMSnumberField\" style=\"display:;\"><td style=\"font-family:Dotum;font-size:8.9pt;text-align:center;height:15px;\"><input type=\"text\" id=\"HsmsNum1\" style=\"margin:0px;color:black;width:25px; height:15px;font-family:Dotum;font-size:8.9pt;border:1px solid #CCCCCC;\" maxlength=\"4\">");
		strText1.push("<img src='"+imgPath+"/line.gif' style=\"width:8px;height:13px;\" align=\"absmiddle\" />");
		strText1.push("<input type=\"text\" id=\"HsmsNum2\" style=\"margin:0px;width:23px; height:15px;font-family:Dotum;font-size:8.9pt;border:1px solid #CCCCCC;\" maxlength=\"4\">");
		strText1.push("<img src=\""+imgPath+"/line.gif\" style=\"width:8px;height:13px;\" align=\"absmiddle\" />");
		strText1.push("<input type=\"text\" id=\"HsmsNum3\" style=\"margin:0px;width:23px; height:15px;font-family:Dotum;font-size:8.9pt;border:1px solid #CCCCCC;\" maxlength=\"4\"> <img src=\""+imgPath+"/b_btn02.gif\" onclick=\"_HsmsSend();\" style=\"width:28px;height:16px;cursor:pointer;\" align=\"absmiddle\" /></td></tr>");
		strText1.push("</table></td><td style=\"width:4px;\"><img id=\"_HSMSb_right\" src=\""+imgPath+"/b_right.gif\" style=\"width:4px;height:110px;\" /></td></tr></table></td></tr><tr>");
		strText1.push("<td><img src=\""+imgPath+"/b_bottom.gif\" style=\"width:145px;height:7px;\" /></td></tr>");
		strText1.push("<tr><td style=\"text-align:right;padding-right:5px;\"><span id=\"_HRealByte\" style='font-family:Dotum;font-size:9pt;'></span></td></tr></table>");
		this.strSMS = strText1.join("");
		strText1 = null;
	}

	//MEMO
	if(typeof _HChatDesign=="object" && typeof _HChatDesign.useMemoDesign == "string" && _HChatDesign.useMemoDesign != "N"){
		this.strMEMO = _HChatDesign.memoHTML();
	}else{
		var strText2 = [];
		var imgPath = _HConfig.server+"/HTTP_MSN/img";
		strText2.push("<table style=\"table-layout:auto;width:145px;padding:0;margin:0;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" id=\"_HMEMOTxTArea\"><tr><td>");
		strText2.push("<div id='_HSMStitleField' style=\"width:109px;height:12px;overflow:hidden;background-color:transparent;position:absolute;top:6px;left:4px;border:0;padding:0;margin:0;font-family:Dotum;font-size:9pt;color:black;\" "+this.WhatEvtMos +">"+_HConfig.strMEMOtitle+"</div>");
		strText2.push("<table style=\"table-layout:auto;width:145px;padding:0;margin:0;\" width='145px' border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
		strText2.push("<tr><td width='109px' id=\"_HCTxtArea_title\"><img id=\"_HTxtMomoTitle\" src='"+imgPath+"/memo_title.gif' width='118' height='22' "+this.WhatEvtMos +" /></td>");
		strText2.push("<td width='36'><img src='"+imgPath+"/b_btn.gif' width='27px' height='22px' onclick='_HCloseMEMO();' style='cursor:pointer;' /></td>");
		strText2.push("</tr></table></td></tr><tr><td><table style=\"145px;padding:0;margin:0;border:0;table-layout:auto;background-color:white;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
		strText2.push("<tr><td width='4' style=\"background:url("+imgPath+"/b_left2.gif) left top;\"></td>");
		strText2.push("<td width='137' align='center' valign='top'><table style=\"table-layout:auto;padding:0;margin:0;width:137px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
		strText2.push("<tr><td><img src='"+imgPath+"/b_center.gif' width='137' height='1' /></td></tr><tr><td style='background-color:white;'><textarea id='HmemoContent' ")
		strText2.push("style='color:black;background-color:white;padding:0;margin:0;font-family:Dotum;font-size:8.9pt;color:#8E8E8E;border:1px solid #CCCCCC;width:135px;height:72px;ime-mode: active;'");
		strText2.push(" onkeydown=\"_HChkByteR(this,'_HRealByte',200);\" onkeyup=\"_HChkByteR(this,'_HRealByte',200);\"");
		strText2.push("' onfocus=\"_HClearTextM(this,'"+_HConfig.strMEMOmemo+"')\">"+_HConfig.strMEMOmemo+"</textarea></td></tr>");
		if(_HConfig.memoPhoneShow == "Y"){
			strText2.push("<tr><td style=\"background-color:white;padding-top:3px;font-family:Dotum;font-size:8.9pt;text-align:left;\"><span style=\"border:0;text-align:left;visibility:hidden;\"><img src=\""+imgPath+"/b_btn03.gif\" onclick=\"_HviewHSMSnumberField();\" style=\"width:16px;cursor:pointer;\" align=\"absmiddle\" /></span>");
			strText2.push("<span style=\"border:0;text-align:left;color:gray;font-family:Dotum;font-size:8.9pt;\">"+unescape("%uC5F0%uB77D%uCC98%uB97C%20%uB0A8%uACA8%uC8FC%uC138%uC694")+"</span></td></tr>");
			strText2.push("<tr><td align='right' style='font-family:Dotum;font-size:8.9pt;height:15px;padding-bottom:2px;text-align:center;'>");
			strText2.push("<input value=\"010\" id=\"HmemoNum1\" style=\"cursor:text; border:1px solid #CCCCCC;color:black;font-family:Dotum;font-size:8.9pt;height:15px;width:25px;\">");
			strText2.push("<img align=\"absmiddle\" style=\"width:8px;height:13px;\" src=\""+imgPath+"/line.gif\"/>");
			strText2.push("<input id=\"HmemoNum2\" style=\"cursor:text; border:1px solid #CCCCCC;color:black;font-family:Dotum;font-size:8.9pt;height:15px;width:25px;\">");
			strText2.push("<img align=\"absmiddle\" style=\"width:8px;height:13px;\" src=\""+imgPath+"/line.gif\">");
			strText2.push("<input id=\"HmemoNum3\" style=\"cursor:text; border:1px solid #CCCCCC;color:black;font-family:Dotum;font-size:8.9pt;height:15px;width:25px;margin-right:5px;\">");
		}else{
			strText2.push("<tr><td align='right' style='background-color:white;text-align:center;'>");
		}
		strText2.push("<img src='"+imgPath+"/b_btn02.gif' width='28' height='16' onclick=\"_HmemoSend();\" style='cursor:pointer;' align='absmiddle' />");
		strText2.push("<span id=\"_HRealByte\" style='font-family:Dotum;font-size:9pt;position:absolute;height:19px;width:18px;text-align:right;left:150px;'></span>");
		strText2.push("</td></tr></table></td><td width='4' style=\"background:url("+imgPath+"/b_right2.gif) left top;\"></td></tr></table></td></tr><tr>");
		strText2.push("<td><img src='"+imgPath+"/b_bottom.gif' width='145' height='7' /></td></tr></table>");
		this.strMEMO = strText2.join("");
		strText2 = null;
	}
}

function H_FirstChatSubmit(){
	var MsgInfo = new _HInit_ReayImg();	
	if (_HConfig.chatEnable==false){/*absence*/
		alert(MsgInfo.WhatCaption);
		return;
	}else if(_HConfig.CbtnType=="B"){/*textbox*/
		var _ChatValue = _HObject.ele("__Chat_Msg").value;
		var _isAvailChatValue = _HChatValueCheck(_ChatValue);
		var _isAvailChatXstring = _HchkXstring(_ChatValue);
		if (!_isAvailChatXstring){
			alert(_HConfig.msg.banMsg);
			_HObject.ele("__Chat_Msg").focus();
			return false;
		}

		if (_HbyteCheck(_ChatValue)>200){
			alert(_HConfig.msg.byte200);
			_HObject.ele("__Chat_Msg").focus();
			return;
		}
				_HOpenChatWin('', 'y', 'textbox');
	}	
}

/*----------------------------------------------------------------------------------------------------------------
window size and position
----------------------------------------------------------------------------------------------------------------*/
function _HxWindown(){	
	this.scrollx=function(){return typeof window.pageXOffset != 'undefined' ? window.pageXOffset :_HDOMBody.scrollLeft;};
	this.scrolly=function(){return typeof window.pageYOffset != 'undefined' ?  window.pageYOffset : _HDOMBody.scrollTop;};
	this.screenx=function(){return _HDOMBody.clientWidth-5;};
	this.screeny=function(){return  _HDOMBody.clientHeight-17;};
	var F=this;
	this.width=function(){return F.scrollx()+F.screenx();};
	this.height=function(){return F.scrolly()+F.screeny();};
}
var _HxWin = new _HxWindown();

/*----------------------------------------------------------------------------------------------------------------
current position
----------------------------------------------------------------------------------------------------------------*/
function _HgetCurrentPos(_Node){
	var left=0,top =0;
	while(_Node.offsetParent){left += _Node.offsetLeft;top  += _Node.offsetTop;_Node=_Node.offsetParent;}
	left+=_Node.offsetLeft;
	top+=_Node.offsetTop;
	return {x:left, y:top};
}

/*----------------------------------------------------------------------------------------------------------------
set current position
----------------------------------------------------------------------------------------------------------------*/
function _HsetCurrentPos(_Node){
	var xy=_HgetCurrentPos(_Node);
	var scnX=xy.x-_HxWin.scrollx();
	var scnY=xy.y-_HxWin.scrolly();	
	_HScript.setCookie("xpos_"+_Node.id+_HConfig.cdkey,scnX);
	_HScript.setCookie("ypos_"+_Node.id+_HConfig.cdkey,scnY);
	if (document.getElementById("_H_NoticeArea")){_HScript.setCookie( "evtdsp"+_HConfig.cdkey,document.getElementById("_H_NoticeArea").style.display);}
}

/*----------------------------------------------------------------------------------------------------------------
get size contained object in _HChat.body
----------------------------------------------------------------------------------------------------------------*/
function _HcontanedObjSize(){
	this.IRImg = new _HInit_ReayImg();
	if (_HConfig.chatEnable==true){
		if (_HConfig.CbtnType=="A"){/*character*/
			this._HTmpWwidth = this.IRImg.CurImg.offsetWidth;
			this._HTmpWheight =this.IRImg.CurImg.offsetHeight;
		}else{/*textbox*/
			if(document.getElementById("_HCTxtArea")){
				this._HTmpWwidth  = document.getElementById("_HCTxtArea").offsetWidth;
				this._HTmpWheight  = document.getElementById("_HCTxtArea").offsetHeight;
			}else{
				this._HTmpWwidth  = 0;
				this._HTmpWheight  = 0;
			}
		}
	}else{
		if(_HConfig.btnHidden=="Y"){
			this._HTmpWwidth=0;
			this._HTmpWheight=0;
		}else{
			if (_HConfig.RbtnType=="A" || _HConfig.RbtnType=="E" || _HConfig.gsikTalk=="Y"){/*absence*/
				this._HTmpWwidth = this.IRImg.CurImg.offsetWidth;
				this._HTmpWheight =this.IRImg.CurImg.offsetHeight;
			}else if (_HConfig.RbtnType=="B" || _HConfig.RbtnType=="F"){/*SMS , gsiktalk SMS*/
				if(document.getElementById("_HSMSTxTArea")){
					this._HTmpWwidth  = document.getElementById("_HSMSTxTArea").offsetWidth;
					this._HTmpWheight  = document.getElementById("_HSMSTxTArea").offsetHeight;
				}else{
					this._HTmpWwidth  = 0;
					this._HTmpWheight  = 0;
				}
			}else if (_HConfig.RbtnType=="C"){/*MEMO*/
				if(document.getElementById("_HMEMOTxTArea")){
					this._HTmpWwidth  = document.getElementById("_HMEMOTxTArea").offsetWidth;
					this._HTmpWheight  = document.getElementById("_HMEMOTxTArea").offsetHeight;
				}else{
					this._HTmpWwidth  = 0; 
					this._HTmpWheight  = 0;
				}
			}else{
				this._HTmpWwidth  = _HChat.body.offsetWidth;
				this._HTmpWheight  = _HChat.body.offsetHeight;
			}
		}
	}
}

/*----------------------------------------------------------------------------------------------------------------
default position
----------------------------------------------------------------------------------------------------------------*/
function _HInit_xyPos(){
	var arrImg = new _HcontanedObjSize();	
	var addx = parseInt(_HConfig.chPos_addX);
	var addy = parseInt(_HConfig.chPos_addY);
	/*size initializing not yet*/
	this.TmpWidth = parseInt(arrImg._HTmpWwidth);
	this.TmpHeight = parseInt(arrImg._HTmpWheight);
	if (_HConfig.chPos=="A"){/*left top*/
		this.x=addx;
		this.y=addy;
	}else if (_HConfig.chPos=="B"){/*right top*/
		this.x=_HxWin.screenx() - this.TmpWidth + addx;
		this.y=addy;
	}else if (_HConfig.chPos=="C"){/*left bottom*/
		this.x=addx;
		this.y=_HxWin.screeny() - this.TmpHeight + addy;
	}else if (_HConfig.chPos=="D"){/*right bottom*/
		this.x=_HxWin.screenx() - this.TmpWidth + addx;
		this.y=_HxWin.screeny() - this.TmpHeight + addy;
	}else if (_HConfig.chPos=="E"){/*center*/
		this.x=parseInt(_HxWin.screenx()/2) - parseInt(this.TmpWidth/2) + addx;
		this.y=parseInt(_HxWin.screeny()/2) - parseInt(this.TmpHeight/2) + addy;
	}else{/*right bottom*/
		this.x=_HxWin.screenx() - this.TmpWidth + addx;
		this.y=_HxWin.screeny() - this.TmpHeight + addy;
	};
}

function _HrePosition(){
	var xp=new _HInit_xyPos();
	if(xp.x<_HxWin.screenx()||xp.y<_HxWin.screeny()){var SP=new _HSetPosition();SP.setPos();}	
}


/*----------------------------------------------------------------------------------------------------------------
initialize configuratoins
----------------------------------------------------------------------------------------------------------------*/
function _HInitChatEnv(obj){
	this.Dpos = new _HInit_xyPos();
	this.ChatMode = _HScript.getCookie("ChatMode"+_HConfig.cdkey)||"R";
	this.isChatBoxExit = _HScript.getCookie("isChatBoxExit"+_HConfig.cdkey)||false;	
	this.Xpos=parseInt(_HScript.getCookie("xpos_"+obj.id+_HConfig.cdkey)||this.Dpos.x);
	this.Ypos=parseInt(_HScript.getCookie("ypos_"+obj.id+_HConfig.cdkey)||this.Dpos.y);
}

/*----------------------------------------------------------------------------------------------------------------
Setting positions
----------------------------------------------------------------------------------------------------------------*/
function _HSetPosition(){
	var ChatEnv = new _HInitChatEnv(_HChat.body);
	var x=ChatEnv.Xpos;
	var y=ChatEnv.Ypos;
	if(x<0){x=0;}
	if(y<0){y=0;}
	/*chatWindow or character Object*/
	var w=parseInt(ChatEnv.Dpos.TmpWidth);
	var h=parseInt(ChatEnv.Dpos.TmpHeight);
	var sumx=w+x,sumy=h+y,Minx=x,Miny=y;			
	if (sumx>_HxWin.screenx()){Minx = _HxWin.screenx()-w;}
	if (sumy>_HxWin.screeny()){Miny = _HxWin.screeny()-h;}
	var sMinx=Minx+_HxWin.scrollx();
	var sMiny=Miny+_HxWin.scrolly();
	this.setPos = function(){/*new positoin*/			
		if(_HisIE){
			_HChat.body.style.pixelLeft = sMinx;
			_HChat.body.style.pixelTop = sMiny;
		}else{
			_HChat.body.style.left = sMinx+"px";
			_HChat.body.style.top = sMiny+"px";
		}
		_HScript.setCookie( "xpos_"+_HChat.body.id+_HConfig.cdkey, Minx );
		_HScript.setCookie( "ypos_"+_HChat.body.id+_HConfig.cdkey, Miny );
	};
}

var HSkinAgree = "";


function _HCreateAgreeBox() {
	if(typeof HSkinprop.p.agreeBox.agboxtype=="undefined"){
		HSkinAgree=HcvtJson2Html(HSkin,"agreeBox");
	}else{
		if(HSkinprop.p.agreeBox.agboxtype=="A"){
			HSkinAgree=HcvtJson2Html(HSkin,"agreeBox");
		}else{
			HSkinAgree=HcvtText2Html(HSkin,"<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" id=\"agboxtypeTbl\" style=\"width:218px;height:208px;background-image:url("+_HConfig.server+"/v6/skin/img/pre_agtype2.gif);background-repeat:no-repeat;cursor:pointer;\"><tr><td onclick=\"_HOpenChatWin('{rep__Id}','','agree')\" id=\"HagreeBox_title\" style=\"height:30px;padding-right:10px;text-align:right;\"><img src=\""+_HConfig.server+"/v6/skin/img/layerChat_close.gif\" onclick=\"_HCloseAgreeWin()\" /></td></tr><tr><td style=\"padding:10px;font-size:9pt;\" onclick=\"_HOpenChatWin('{rep__Id}','','agree')\"><div style=\"height:128px;\" class=\"HChatAgreeMsgBox\" id=\"HChatAgreeMsgBox\"></td></tr><tr><td style=\"height:50px;\" onclick=\"_HOpenChatWin('{rep__Id}','','agree')\"></td></tr></table>");
		}
	}
	_HChat.Agbody=_HChat.createAgBody();
	HsetBodyStyle(_HChat.Agbody,HSkinprop.p.agreeBox);

	if(HSkinprop.p.agreeBox.scroll=="y"){
		var _HConfig_chPosAgY=parseInt((_HDOMBody.clientHeight / 2 - _HChat.Agbody.offsetHeight / 2));
		HfixLayerAgBody= new HfixingLayer(_HChat.Agbody,parseInt(_HConfig_chPosAgY,10));
		if (_HisIE){_HEvent.add(window, "scroll", HfixLayerAgBody.stLayer);}else{_HEvent.add(window, "scroll", HfixLayerAgBody.stLayerMos);}
	}
	if(HSkinprop.p.agreeBox.move=="y"){HMove(_HChat.Agbody,"HagreeBox_title")}
}

function _HresetChatLayerSize(obj){
	if(!obj || !_HChat.body) return;
	if(_HChat.body.style.width != "0px") return;
	var display = _HChat.body.style.display || "";
	var visibility = _HChat.body.style.visibility || "";
	_HChat.body.style.visibility = "hidden";
	_HChat.body.style.display = "";
	_HChat.body.style.width = "100%";
	_HChat.body.style.height = "100%";
	_HChat.body.style.width = obj.offsetWidth + "px";
	_HChat.body.style.height = obj.offsetHeight + "px";
	_HChat.body.style.display = display;
	_HChat.body.style.visibility = visibility;
}

function HdspSkin(){
	if(!_HChat.body){_HChat.body=_HChat.createBody();}	
	this.IRImg = new _HInit_ReayImg();	
	if(this.IRImg.RdyHid=="Y"){
		_HClearCB();
		if (_HConfig.chatEnable==true){
			_HCreateAgreeBox();
		}
	}else{			
		if (_HConfig.chatEnable==true){
			if (_HConfig.CbtnType=="A"){_HClearCB();_HScript.Inner(_HChat.body,this.IRImg.strImg);_HChat.body.style.visibility="hidden";}
			else if(_HConfig.CbtnType=="B"){_HClearCB();_HScript.Inner(_HChat.body,this.IRImg.strTxt);}
			_HCreateAgreeBox();
		}else if (_HConfig.chatEnable==false && _HConfig.gsikTalk=="N"){
			if (_HConfig.RbtnType=="A"){_HClearCB();}
			else if(_HConfig.RbtnType=="B" || _HConfig.RbtnType=="F"){_HClearCB();if (_HScript.getCookie("HSMSview"+_HConfig.cdkey) != "N"){_HScript.Inner(_HChat.body,this.IRImg.strSMS);}}
			else if(_HConfig.RbtnType=="C"){_HClearCB();if (_HScript.getCookie("HMEMOview"+_HConfig.cdkey) != "N"){_HScript.Insert(_HChat.body,this.IRImg.strMEMO);}}
			else if(_HConfig.RbtnType=="E"){_HClearCB();_HScript.Insert(_HChat.body,this.IRImg.strGsik); setTimeout(function(){_HresetChatLayerSize(document.getElementById(this.IRImg.WhatID));}, 50);}
		}else{
			_HClearCB();_HScript.Insert(_HChat.body,this.IRImg.strGsik);
			setTimeout(function(){_HresetChatLayerSize(document.getElementById(this.IRImg.WhatID));}, 50);
		}
	}

	
	if(document.getElementById("_HimgCall")&&!document.getElementById("_HimgCall").onmousedown){document.getElementById("_HimgCall").onmousedown=function(ev){_HDragObject=_HChat.body;_HMouseOffset=_HgetMouseOffset(this,ev);return false;}}
	if(document.getElementById("_HimgReady")&&!document.getElementById("_HimgReady").onmousedown){document.getElementById("_HimgReady").onmousedown=function(ev){_HDragObject=_HChat.body;_HMouseOffset=_HgetMouseOffset(this,ev);return false;}}
	if(document.getElementById("_HTxtboxTitle")&&!document.getElementById("_HTxtboxTitle").onmousedown){document.getElementById("_HTxtboxTitle").onmousedown=function(ev){_HDragObject=_HChat.body;_HMouseOffset=_HgetMouseOffset(this,ev);return false;}}
	if(document.getElementById("_HSMStitleField")&&!document.getElementById("_HSMStitleField").onmousedown){document.getElementById("_HSMStitleField").onmousedown=function(ev){_HDragObject=_HChat.body;_HMouseOffset=_HgetMouseOffset(this,ev);return false;}}
	if(document.getElementById("_HSmsTxtTitle")&&!document.getElementById("_HSmsTxtTitle").onmousedown){document.getElementById("_HSmsTxtTitle").onmousedown=function(ev){_HDragObject=_HChat.body;_HMouseOffset=_HgetMouseOffset(this,ev);return false;}}
	if(document.getElementById("_HSMStitleField")&&!document.getElementById("_HSMStitleField").onmousedown){document.getElementById("_HSMStitleField").onmousedown=function(ev){_HDragObject=_HChat.body;_HMouseOffset=_HgetMouseOffset(this,ev);return false;}}
	if(document.getElementById("_HTxtMomoTitle")&&!document.getElementById("_HTxtMomoTitle").onmousedown){document.getElementById("_HTxtMomoTitle").onmousedown=function(ev){_HDragObject=_HChat.body;_HMouseOffset=_HgetMouseOffset(this,ev);return false;}}
	var SP=new _HSetPosition();
	SP.setPos();

	

	//var s_ypos=parseInt(_HChat.ck.get("ypos"),10)||parseInt(HSkinprop.p.list.top,10);
	//var s_xpos=parseInt(_HChat.ck.get("xpos"),10)||parseInt(HSkinprop.p.list.left,10);

	var ChatEnv = new _HInitChatEnv(_HChat.body);
	var x=ChatEnv.Xpos;
	var y=ChatEnv.Ypos;
	if(x<0){x=0;}
	if(y<0){y=0;}
	HfixLayerCharacterBody= new HfixingLayer(_HChat.body,y);
	if (_HisIE){_HEvent.add(window, "scroll", HfixLayerCharacterBody.stLayer);}else{_HEvent.add(window, "scroll", HfixLayerCharacterBody.stLayerMos);}
	if (_HisIE){_HEvent.add(window, "focus", HfixLayerCharacterBody.focus);}else{_HEvent.add(window, "focus", HfixLayerCharacterBody.focus);}
	if (_HisIE){_HEvent.add(window, "blur", HfixLayerCharacterBody.blur);}else{_HEvent.add(window, "blur", HfixLayerCharacterBody.blur);}
	setTimeout(_HrePosition,1000);
}

function _HOnMouseUp(){_HDragObject=null;if(typeof _HChat.body != "undefined")_HsetCurrentPos(_HChat.body);}

//check SMS
var _HsmsTmp = '';
function _HsmskyeChk(objTxt){
	var _sMax = (_HConfig.RbtnType=="F" ? 200 : 60);
	var _sLen = _HsmsBytChk(objTxt.value);
	document.getElementById("_HRealByte").innerHTML=(_sLen)+'/'+_sMax;	
	if(_sLen > _sMax){
		alert(unescape('SMS%20%uBB38%uC790%uB294%20%uCD5C%uB300%2060byte%20%uAE4C%uC9C0%20%uC785%uB825%20%uAC00%uB2A5%uD569%uB2C8%uB2E4.'));
		objTxt.value = _HsmsTmp;
		document.getElementById("_HRealByte").innerHTML=_HsmsBytChk(objTxt.value)+'/'+_sMax;	
	}else{	
		_HsmsTmp = objTxt.value;
	}
}
function _HsmsBytChk(expression){
	var VLength=0;
	var temp = expression;
	var EscTemp;
	if(temp!="" & temp !=null)
	{
		for(var i=0;i<temp.length;i++){
			if (temp.charAt(i)!=escape(temp.charAt(i))){
				EscTemp=escape(temp.charAt(i));
				if(EscTemp.length>=6)
					VLength+=2;
				else
					VLength+=1;
			}
			else
			VLength+=1;
	   }
	}
	return VLength;
}

function _HsetInitPorc() {
	_HbrgAPI.ready=true;
	if(_HConfig.btnHidden == "N" && _HConfig.chatEnable==true){
		_HChat.body.style.visibility="visible";
	}
}


var initCss = [];
initCss.push("#H_HTTP_MSN_chat_layer *{padding:0; margin:0; border:0; color:#000; line-height:120%; font-family:Dotum, Gulim, Verdana, sans-serif; font-size:12px; font-weight:normal; font-style:normal;}");
initCss.push("#H_HTTP_MSN_chat_layer img{border:0px; margin:0px; display:inline; vertical-align:top;}");
initCss.push("#H_HTTP_MSN_chat_layer ul{list-style-type:none;}");
initCss.push("#H_HTTP_MSN_chat_layer li{list-style-type:none;}");
initCss.push("#H_HTTP_MSN_chat_layer a{text-decoration:none;}");
HaddStyleText(initCss.join(""));
initCss = null;var _HisIE=_HMy.isIE();
var _HDOMBody=_HScript.body();
var _HobjBridge=null
var _HobjCwin;
var _HmoveScrollFlag = true;  //comment 03


  _HChat.createBody=function (){
        return (_HObject.ele('H_HTTP_MSN_chat_layer') || _HObject.append({
            'tag': 'div',
            'id': 'H_HTTP_MSN_chat_layer',
            'style': {
                'top':'0',
                'left':'0',
                'border': '0',
                'cursor': 'pointer',
                'position': 'absolute',
                'zIndex': '99999999',
                'overflow': 'visible',
                'backgroundColor': 'transparent'
            }
        }))
    }
  _HChat.createAgBody=function (){
        return (_HObject.ele('HAgBody') || _HObject.append({
            'tag': 'div',
            'id': 'HAgBody',
            'style': {
                'top': '0',
                'left': '0',
                'height': '0',
                'width': '0',
                'border': '0',
                'cursor': 'pointer',
                'position': 'absolute',
                'zIndex': '999999999',
                'overflow': 'visible',
                'backgroundColor': 'transparent'
				//,'display':'none'
            }
        }))
   }
  _HChat.createMiniBody=function (){
        return (_HObject.ele('HAdmMinimize') || _HObject.append({
            'tag': 'div',
            'id': 'HAdmMinimize',
            'style': {
                'top': '150',
                'left': '0',
                'height': '0',
                'width': '0',
                'border': '0',
                'cursor': 'pointer',
                'position': 'absolute',
                'zIndex': '99999999',
                'overflow': 'visible',
                'backgroundColor': 'transparent',
                'display': 'none'
            }
        }))
    }
  _HChat.createBtnBody=function (){
        return (_HObject.ele('HbtnBody') || _HObject.append({
            'tag': 'div',
            'id': 'HbtnBody',
            'style': {
                'top':'0',
                'left': '0',
                'height': '0',
                'width': '0',
				'border':'0',
                'cursor': 'pointer',
                'position': 'absolute',
                'zIndex': '99999999',
                'overflow': 'visible',
                'backgroundColor': 'transparent'
            }
        }))
    }


function HssckFunc(){
	var p=this;
	this.ss=_HChat["ss"];
	this.s={"xpos":"","ypos":"","skinview":"","cpop":"","cpopcnt":""};/*xpos|ypos|skinview|cpop|cpopcnt*/
	this.init=function(){
		var a=p.ss.split("|");if(a.length<5){return;}
		p.s["xpos"]=a[0]||"";
		p.s["ypos"]=a[1]||"";
		p.s["skinview"]=a[2]||"";
		p.s["cpop"]=a[3]||"";
		p.s["cpopcnt"]=a[4]||"";
	};
	this.get=function(key){
		return p.s[key];
	};
	this.set=function(key,val){
		p.s[key]=val;
		var u=_HConfig.server + "/v6/csss.php?r="+_HScript.rnd()+"&cdkey="+_HConfig.cdkey+"&tmpUss="+_HCusParam["tmpUss"]+"&cs_k="+key+"&cs_v="+val+"&cs_m=s";
		_HObject.rImgInclude(u,function(){if(this.parentNode){this.parentNode.removeChild(this);}});
	};
	this.init();
}
_HChat.ck=new HssckFunc();


_HChat.getSwfContain=function (){
    return _HObject.ele('__H_Swf_Contain') || _HObject.append({
        'tag': 'span',
        'id': '__H_Swf_Contain',
        'style': {
            'backgroundColor': 'transparent',
            'border': '0',
            'width': '1px',
            'height': '1px',
            'padding': '0',
            'position': 'absolute',
            'top': '0',
            'left': '0'
        }
    });
};


function _H_OnMsg(V){
    if (typeof V=="undefined" || V=="" || V=="null" || V=="undefined" || V==null || !V){
        return "";
    } else {
        V=V.replace(/\%2B/gi, "+");
        var emoExpr=/\/:([0-9]){3,3}:\//gi;
        r=V.match(emoExpr);
        if (r != null){
            var emoNo;
            var emoTag;
            for (i=0; i < r.length; i++){
                emoNo=Number(r[i].substring(2, 5));
                emoTag="<img src=\"images/emoticon/" + emoNo + ".gif\" name=emoticon align=absMiddle unselectable=\"on\">";
                V=V.replace(r[i], emoTag);
            }
        }
        return V;
    }
}

function _HPrintln(s){
    if (s.indexOf("|enc_tran|") != -1){
        s=s.replace(/\|enc_tran\|/g, "").replace(/\&lt;/g, "<").replace(/\&gt;/g, ">").replace(/\&quot;/g, "'").replace(/\&amp;/g, "&");
    }
    s=s.replace(/\[\[tTme\]\]/gi, "");
    H_OnEnter_b(s);
}

function _HTLcheckOpenWin(Id, on){}

function _HisObjCwin(){try{return (_HobjCwin && _HobjCwin.document && _HobjCwin.document.location) ? true : false;}catch(e){return false;}}
function _HOpenChatWinfromAutoMsg(Id){if(Id=="0"){alert(_HConfig.msg.connOver);return;}_HOpenChatWin(Id, "y", "agree");}
function _HOpenChatWin(Id, on, Trg){	if(_HbrgAPI.ready==false){alert(decodeURIComponent("%EC%97%B0%EA%B2%B0%EC%A4%91%EC%9E%85%EB%8B%88%EB%8B%A4.%203%EC%B4%88%ED%9B%84%EC%97%90%20%EB%8B%A4%EC%8B%9C%20%EC%8B%9C%EB%8F%84%ED%95%B4%20%EC%A3%BC%EC%84%B8%EC%9A%94."));return;}
	if(Id==""){
		if(_HScript.getCookie("aid_"+_HConfig.cdkey)!=null) {
			var chatAdmId = _HScript.getCookie("aid_"+_HConfig.cdkey);
			if(typeof _HbrgAPI.usrs[chatAdmId] != "undefined" && _HbrgAPI.usrs[chatAdmId].chatstatus=="ONLINE") {
				Id=chatAdmId;
			} else {
				Id=_HbrgAPI.getautoMsgUsr();
				_HScript.setCookie("aid_"+_HConfig.cdkey,Id);
			}
		} else {
			Id=_HbrgAPI.getautoMsgUsr();
			_HScript.setCookie("aid_"+_HConfig.cdkey,Id);
		}
	} else {
		_HScript.setCookie("aid_"+_HConfig.cdkey,Id);
	}
	if(Id==""){alert(decodeURIComponent("%EC%A3%84%EC%86%A1%ED%95%A9%EB%8B%88%EB%8B%A4.%20%EC%83%81%EB%8B%B4%EA%B0%80%EB%8A%A5%ED%95%9C%20%EC%9A%B4%EC%98%81%EC%9E%90%EA%B0%80%20%EC%97%86%EC%8A%B5%EB%8B%88%EB%8B%A4."));_HCloseAgreeWin();return;}
	var _name=_HConfig.cdkey+"_"+_HConfig.R.sess+"_"+Id;
	var p=[];
	p.push("sid=" + _HConfig.R.sess);
	p.push("stcnt=" + _HConfig.R.siteTcnt);
	p.push("tc=" + _HConfig.R.conncnt);
	p.push("ano=" + Id);
	p.push("custype=" + encodeURIComponent(unescape(_HConfig.R.cuscate))+"|"+encodeURIComponent(unescape(_HConfig.R.custype)));
	p.push("chatEnable=" + ((_HConfig.chatEnable==true) ? "C" : "R"));
	p.push("sl=" + _HConfig.R.serial);
	p.push("l_flag=" + _HConfig.R.l_flag);
	p.push("set_ip=" + _HConfig.R.set_ip);
	p.push("listen_port=" + _HConfig.R.listen_port);
	p.push("status=" + _HConfig.R.status);
	p.push("hdomain=" + _HServ.host);
	p.push("chatcnt=" + _HConfig.R.chatcnt);
	p.push("skinName=" + _HConfig.skin);
	p.push("chatTitle=" + _HConfig.chatTitle);
	var hv=[];
	hv.push(_HScript.rnd());
	if(Trg == "agree") {
		var msgBox=document.getElementById("HChatAgreeMsgBox");
		p.push(msgBox.value+"=Y");
		hv.push(encodeURIComponent(msgBox.innerHTML));
	} else if(Trg == "textbox") {
		p.push("chkmsg=Y");
		hv.push(encodeURIComponent(_HObject.ele("__Chat_Msg").value));
		_HObject.ele("__Chat_Msg").value = "";
	} else if(Trg == "fix") {
		p.push("chkmsg=Y");
		hv.push(_HfixedFormMsg);
		_HfixedFormMsg="";
	}
	var qry=_Hs6.encode(p.join("&"));
	var u=_HConfig.server + "/v6/chatWin.php?HTTP_MSN_AUTH_CDKEY=" + _HConfig.cdkey+"&qry="+qry+"#"+hv.join("@");
    var k=window.open(u,_name, "width="+_HConfig.chatWidth+",height="+_HConfig.chatHeight+",toolbar=no,scrollbars=no,resizable=yes");
	//if(k){}
	try{_name.focus()}catch(e){}
	_HCloseAgreeWin();
	return;
}
function _HOpenGsiktalkWin(a){
	var u="http://www.gsiktalk.com/" + a;
	var k=window.open(u,_HConfig.cdkey+"_"+a, "width=350,height=450,toolbar=no,scrollbars=no,resizable=yes");
	k.focus();
	return;
}
function _Alert(a){alert(a)}
function _HCloseAgreeWin(){_HClearAgCB();}

//function _HgetFajaxVal(a){return (_HobjHttpFajax) ? _HobjHttpFajax.CallScript("_gC", a) : null;}
//function _HsetFajaxVal(a){if (_HobjHttpFajax){_HobjHttpFajax.CallScript("_sC", a);}}
function _HgetFajaxVal(a){return  null;}
function _HsetFajaxVal(a){}


var _HAdminOpenCloseImgs=new Array();
function showHide_HAdminList(id){
    var area=_HObject.ele("_HAdminArea" + id);
    var list=_HObject.ele("_HAdminList" + id);
	if(list){
		if (list.style.display==""){
			area.style.backgroundImage="url(" + _HConfig.server + "/images/chat/bg_up.jpg)";
			list.style.display="none";
		} else {
			area.style.backgroundImage="url(" + _HConfig.server + "/images/chat/bg_down.jpg)";
			list.style.display="";
		}
	}
}

function _HClearCB(obj,prop){
    _HScript.Inner(_HChat.body, "");
    _HChat.body.style.width=0+"px";
    _HChat.body.style.height=0+"px";
}

function _HwkMinimize(){
    _HChat.body.style.display="none";
    _HChat.miniBody.style.display="";
	_HChat.ck.set("skinview","m");
}

function _HwkMaxmize(){
	_HChat.body.style.display="";
	_HChat.miniBody.style.display="none";
    //document.getElementById("HAPIadmJ").style.display="";
	//document.getElementById("HAdmMinimize").style.display="none";
	//_HChat.body.style.width="";
	//_HChat.body.style.height="";
	_HChat.ck.set("skinview","l");
}

function HaddStyleText(cssStr){
	var s=document.createElement("style");
	var h=document.getElementsByTagName("head")[0];
	if(h){h.appendChild(s);}else{return;}
	s.setAttribute("type", "text/css");
	if(typeof s.styleSheet == "object" && s.styleSheet == null){
		try{
			s.sheet.cssText = cssStr;
		}catch(e){}
		return;
	}
	if(s.styleSheet){   // IE
		s.styleSheet.cssText = cssStr;
	} else {   // w3c
		var cssText = document.createTextNode(cssStr);
		s.appendChild(cssText);
	}
}

/*Get skin Properties*/

function _HClearAgCB(){
	if(_HChat.Agbody){
		_HScript.Inner(_HChat.Agbody, "");
		_HChat.Agbody.style.width=0 + "px";
		_HChat.Agbody.style.height=0 + "px";
	}
}

/*remove object if deleted list*/
function _HclearChatField(A){
    if (A=="A"){
        if (_HObject.ele("_HChatBB")){
            _HScript.Del(_HObject.ele("_HChatBB"));
        }
        if (_HObject.ele("_HCTxtArea")){
            _HScript.Del(_HObject.ele("_HCTxtArea"));
        }
    }
}

/*----------------------------------------------------------------------------------------------------------------
size and position
----------------------------------------------------------------------------------------------------------------*/
var HSizePosBody=new (function(){
	var b=this;
	this.obj=_HDOMBody;
	this.scrollx=function(){return typeof window.pageXOffset != 'undefined' ? parseInt(window.pageXOffset,10) : parseInt(b.obj.scrollLeft,10);};
	this.scrolly=function(){return typeof window.pageYOffset != 'undefined' ? parseInt(window.pageYOffset,10) : parseInt(b.obj.scrollTop,10);};
	this.screenx=function(){return b.obj.clientWidth - 5;};
	this.screeny=function(){return b.obj.clientHeight - 17;};
	this.posx=function(){return b.scrollx() + b.screenx();};
	this.posy=function(){return b.scrolly() + b.screeny();};
	this.w=function(){return (self.innerWidth)?parseInt(self.innerWidth):parseInt(b.obj.offsetWidth);};
	this.h=function(){return (self.innerHeight)?parseInt(self.innerHeight):parseInt(b.obj.offsetHeight);};
})();

function HSizePos(obj){
	var p=this;
	this.trg=obj;
	this.dist=document.all?4:24;
	this.x=function(){var L=0;while (p.trg.offsetParent){L+= p.trg.offsetLeft;p.trg=p.trg.offsetParent;}L+=p.trg.offsetLeft;return parseInt(L,10);};
	this.y=function(){var T=0;while (p.trg.offsetParent){T+= p.trg.offsetTop;p.trg=p.trg.offsetParent;}T+=p.trg.offsetTop;return parseInt(T,10);};
	this.w=function(){return (p.trg.innerWidth)?parseInt(p.trg.innerWidth,10):parseInt(p.trg.offsetWidth,10);};
	this.h=function(){return (p.trg.innerHeight)?parseInt(p.trg.innerHeight,10):parseInt(p.trg.offsetHeight,10);};
	this.screenx=function(){return parseInt(p.x() - HSizePosBody.scrollx(),10);};
	this.screeny=function(){return parseInt(p.y() - HSizePosBody.scrolly(),10);};
	this.centerpos=function(){
		var L=(parseInt(HSizePosBody.screenx(),10) / 2 - parseInt(p.w(),10) / 2);
		var T=(parseInt(HSizePosBody.screeny(),10) / 2 - parseInt(p.h(),10) / 2);
		L=(L < 0) ? 0 : L;
		T=(T < 0) ? 0 : T;
		return {x:L,y:T};
	};
}

function _HresetPosition(obj,pos){
	var xp=_HgetCurrPos();
	if(xp.x<HSizePosBody.screenx()||xp.y<HSizePosBody.screeny()){_HsetPos(obj,pos)}	
}

/*----------------------------------------------------------------------------------------------------------------
current position
----------------------------------------------------------------------------------------------------------------*/
function _HsetPos(obj,pos,addx,addy){
	if(!obj){return;}
	if(!addx){addx=0;}else{addx=parseInt(addx,10);}
	if(!addy){addy=0;}else{addy=parseInt(addy,10);}
	var sobj=new HSizePos(obj);
	var x=0;
	var y=0;
	if(pos=="lt"){
		x=addx;
		y=addy;
	}else if(pos=="rt"){
		x=HSizePosBody.screenx()-sobj.w()+addx;
		y=addy;		
	}else if(pos=="cc"){
		//var cc=sobj.centerpos();
		x=Math.floor(parseInt(HSizePosBody.screenx(),10) / 2 - parseInt(sobj.w(),10) / 2)+addx;
		y=Math.floor(parseInt(HSizePosBody.screeny(),10) / 2 - parseInt(sobj.h(),10) / 2)+addy;		
	}else if(pos=="lb"){
		x=addx;
		y=HSizePosBody.screeny()-sobj.h()+addy;
	}else if(pos=="rb"){
		x=HSizePosBody.screenx()-sobj.w()+addx;
		y=HSizePosBody.screeny()-sobj.h()+addy;
	}

	if(obj.id == "HAgBody" && pos == "pt"){	//comment no.04
		x = parseInt(_HChat.body.style.left)+addx;
		y = parseInt(_HChat.body.style.top)+addy;
	}

	try{
		if(obj.id == "H_HTTP_MSN_chat_layer"){
			x=parseInt(_HScript.getCookie("xpos_HskinBox_title"+_HConfig.cdkey)||x);
			y=parseInt(_HScript.getCookie("ypos_HskinBox_title"+_HConfig.cdkey)||y);
		}
	}catch(e){}
	var maxX=HSizePosBody.screenx()-sobj.w();
	var maxY=HSizePosBody.screeny()-sobj.h();
	x=(x>maxX)?maxX:x;
	y=(y>maxY)?maxY:y;

	x=(x<0)?0:x;
	y=(y<0)?0:y;

	obj.style.left=x + "px";
	obj.style.top=y + "px";
}


/*----------------------------------------------------------------------------------------------------------------
Moving layer
----------------------------------------------------------------------------------------------------------------*/
_HEvent.add(document, "mousemove", _HOnMouseMove);
_HEvent.add(document, "mouseup", _HOnMouseUp);
function HMove(obj,Id){
	var mousedownObj=document.getElementById(Id);
	if (mousedownObj && !mousedownObj.onmousedown){
		mousedownObj.onmousedown=function (ev){_HDragObject=obj;_HMouseOffset=_HgetMouseOffset(this, ev);return false;}
	}
}

var _HDragObject=null;
var _HMouseOffset=null;
function _HMouseCoords(ev){
    if (ev.pageX || ev.pageY){return {x: ev.pageX,y: ev.pageY};}
    //return {x:ev.clientX+_HDOMBody.scrollLeft-_HDOMBody.clientLeft,y:ev.clientY+_HDOMBody.scrollTop-_HDOMBody.clientTop};
    return {x: ev.clientX,y: ev.clientY};
}

function _HgetPosition(e){var L=0,T=0;while (e.offsetParent){L += e.offsetLeft;T += e.offsetTop;e=e.offsetParent;}L += e.offsetLeft;T += e.offsetTop;return {x: L,y: T};}

function _HgetMouseOffset(target, ev){
    var ev=ev || window.event;
    var docPos=_HgetPosition(target);
    var mousePos=_HMouseCoords(ev);
    return {
        x: mousePos.x - docPos.x,
        y: mousePos.y - docPos.y
    };
}

function _HOnMouseMove(ev){
    if (_HDragObject){
        var ev=ev || window.event;
        var mousePos=_HMouseCoords(ev);
        _HDragObject.style.position='absolute';
        if (window.attachEvent){
            _HDragObject.style.pixelTop=mousePos.y - _HMouseOffset.y;
            _HDragObject.style.pixelLeft=mousePos.x - _HMouseOffset.x;
        } else {
            _HDragObject.style.top=parseInt(mousePos.y) - parseInt(_HMouseOffset.y) + "px";
            _HDragObject.style.left=mousePos.x - _HMouseOffset.x + "px";
        }
        return false;
    }
}

/*----------------------------------------------------------------------------------------------------------------
current position
----------------------------------------------------------------------------------------------------------------*/
function _HgetCurrPos(_Node){
	var left=0,top =0;
	while(_Node.offsetParent){left += _Node.offsetLeft;top  += _Node.offsetTop;_Node=_Node.offsetParent;}
	left+=_Node.offsetLeft;
	top+=_Node.offsetTop;
	return {x:left, y:top};
}

/*----------------------------------------------------------------------------------------------------------------
Fixing layer
----------------------------------------------------------------------------------------------------------------*/
function HfixingLayer(obj,y){
	var o=this;
	this.trg=obj;
	this.posY=y;
	this.pcnt=0;
	this.lastScrollY=function(){return (_HisIE) ? parseInt(_HDOMBody.scrollTop): window.pageYOffset;};
	this.resetPos=function(){var innerY=parseInt(_HScript.getCookie("ypos_"+o.trg.id+_HConfig.cdkey)||o.posY);o.trg.style.top=(parseInt(o.lastScrollY(),10) + innerY)+"px";};
	this.resetPos();
	this.lsy=o.lastScrollY();
	this.stLayer=function(){var diff=parseInt(_HDOMBody.scrollTop);if (diff != o.lsy){o.pcnt=.9 * (diff - o.lsy);o.pcnt=(o.pcnt > 0) ? Math.ceil(o.pcnt) : Math.floor(o.pcnt);o.trg.style.pixelTop += o.pcnt;o.lsy += o.pcnt;setTimeout(o.stLayer, 100);} else {setTimeout(o.resetPos, 100);}};
	this.stLayerMos=function(){var diff=window.pageYOffset;if (diff != o.lsy){o.pcnt=.9 * (diff - o.lsy);o.pcnt=(o.pcnt > 0) ? Math.ceil(o.pcnt) : Math.floor(o.pcnt);o.trg.style.top=parseInt(o.trg.style.top) + o.pcnt + "px";o.lsy += o.pcnt;setTimeout(o.stLayerMos, 100);} else {setTimeout(o.resetPos, 100);}};
	this.stLayerMos=function(){if(_HmoveScrollFlag == false){return;} var diff=window.pageYOffset;if (diff != o.lsy){o.pcnt=.9 * (diff - o.lsy);o.pcnt=(o.pcnt > 0) ? Math.ceil(o.pcnt) : Math.floor(o.pcnt);o.trg.style.top=parseInt(o.trg.style.top) + o.pcnt + "px";o.lsy += o.pcnt;setTimeout(o.stLayerMos, 100);} else {setTimeout(o.resetPos, 100);}};
	this.focus = function(e){
		var target=null;
		if(e){
			target = e.target;
		}else{
			target = event.srcElement;
		}
		try{
			if(typeof target.type != "undefined") {
				if(target.type == "textarea" || target.type == "text"){
					_HmoveScrollFlag = false;
				}
			}
		}catch(except){}
	};
	this.blur = function(e){
		var target=null;
		if(e){
			var target = e.target;
		}else{
			var target = event.srcElement;
		}
		try{
			if(typeof target.type != "undefined") {
				if(target.type == "textarea" || target.type == "text"){
					_HmoveScrollFlag = true;
				}
			}
		}catch(except){}
	};
}
var isBridgeInit=false;

function _HconfigMsg(s){
    if (s=="" || s=="undefined"){
        return;
    }
    var A=s.split(".");
    var M=(A[1]) ? (_HConfig[A[0]][A[1]]) : (_HConfig[A[0]]);
    alert(unescape(M));
}
function _HgetParams(a){
    _HresetFbridge();
    _HobjBridge.CallScriptToObj("SetVarsMain", {
		cdkey:_HConfig.cdkey
		,sid:_HConfig.R.sess
		,serial:_HConfig.R.serial
		,writeday:_HConfig.R.writeday
		,winnum:"main"
		,ip:_HMy.ip
		,l_flag:_HConfig.R.l_flag
		,memname:_HMy.name
		,part1:""
		,part2:""
		,targetid:"0"
		,siteTcnt:_HConfig.R.siteTcnt
		,chatcnt:_HConfig.R.chatcnt
		,chatdenied:((_HConfig.R.status=="B")?"y":"n")
		,conncnt:_HConfig.R.conncnt
		,customtype:encodeURIComponent(unescape(_HConfig.R.cuscate))+"|"+encodeURIComponent(unescape(_HConfig.R.custype))
		,hdomain:_HServ.host
		,Sserver:_HConfig.server
		,uwhere:_HCusParam["UPO"]
		,referer:decodeURIComponent(_HConfig.R.referer)
		,cpctype:_HConfig.R.cpctype
		,cpccount:_HConfig.R.cpccount
		,cpcwarnstep:_HConfig.R.cpcwarnstep
		,chatEnable: (_HConfig.chatEnable==true) ? "C" : "R"
        ,DebugMode: (_HMy.isAdm==true) ? true : false
        ,ConnLiveOption: "Y"
        ,runMode: "B"
        /*A:all, B:when chatEnable*/
        ,openChatwinType: _HConfig.openChatwinType
        ,CustNickName: _HConfig.customName
        ,AdminNickName: _HConfig.adminName
        ,defaultAdminNickName: _HConfig.adminName
		,sockIP:_HConfig.R.set_ip
		,sockPort:_HConfig.R.listen_port
		,svrtm:_HConfig.R.svrtm
		,line:_HConfig.R.line
		,addr:_HConfig.R.addr
    });
    isBridgeInit=true;
	if(_HScript.getCookie("AutoMsg_"+_HConfig.cdkey)=="y") {
		HsendAutoMsgalready=true;
	}
}
function _HChkChatStart(){_HInit_bridge();}
function HsetBodyStyle(trg,obj){
	if(trg.id == "H_HTTP_MSN_chat_layer"){
		trg.style.width  = HSkin["item"]["list"]["size"].width;
		trg.style.height = HSkin["item"]["list"]["size"].height;
	}else{
		trg.style.width=obj.width;
		trg.style.height=obj.height;
	}

	if(trg.id == "HAgBody"){
		if(trg.innerHTML == ""){
			trg.style.display = "none";
		}else{
			if(HSkinprop.p.agreeBox.agboxtype == "B"){
				trg.style.width = "218px";
				trg.style.height = "228px";
			}
			trg.style.display = "";
			if(HSkinprop.p.agreeBox.move=="y"){HMove(_HChat.Agbody,"HagreeBox_body_img")}
		}
	}

	if(trg.id == "HAdmMinimize"){
	}else{
		_HsetPos(trg,obj.pos,obj.left,obj.top);
	}
}

HsendAutoMsgalready=false;
function HsendAutoMsg(){
	if(_HScript.getCookie("AutoMsg_"+_HConfig.cdkey)=="y"){return;}
	if(HsendAutoMsgalready==true){return;}
	HsendAutoMsgalready=true;
	if((_HstrAutoMsg!=""&&_HConfig.chatEnable==true&&_HConfig.btnHidden!="Y")||_HConfig.CbtnType=="D"){
		_HInsertChatAttributes("|$_$|"+_HstrAutoMsg);
		_HScript.setCookie("AutoMsg_"+_HConfig.cdkey,"y");
	}
}
var _HbrgAPI=new (function(){
	var p=this;
	this.ready=false;
	this.usrs={};
	this.webUsers=[];
	this.set=function(trg,param){
		var tmp;
		if(typeof p.usrs[trg]=="undefined"||p.usrs[trg]==null){p.usrs[trg]={};}
		if(param.length<1){
			delete p.usrs[trg];
		}else{
			var b=param.split(",");
			for(var i=0;i<b.length;i++){tmp=b[i].split(":");try{p.usrs[trg][tmp[0]]=decodeURIComponent(tmp[1]);}catch(e){p.usrs[trg][tmp[0]]=unescape(tmp[1]);}}
			p.usrs[trg]["admin"]=(trg.toString().length<5)?true:false;
		}
	};
	this.setWebUser=function(){
		if(p.webUsers.length > 0) return;
		if(typeof _HadmListJs=="undefined"||typeof _HadmListJs["members"]=="undefined" || typeof _HadmListJs["part"]=="undefined"){return;}
		for(var i = 0; i < _HadmListJs["members"].length; i++){
			p.webUsers.push(_HadmListJs["members"][i].id);
		}
		for(var i = 0; i < _HadmListJs["part"].length; i++){
			for(var j=0; j < _HadmListJs["part"][i]["info"].length; j++) {
				p.webUsers.push(_HadmListJs["part"][i]["info"][j].id);
			}
		}
	};
	this.chstatus=function(obj){
		p.ready=true;
		var trg=obj.trg_sessionid,onoff=obj.onoff,param=obj.param,icoUsr=document.getElementById("HALItem_p_"+trg),icoUsrOncnt=0;
		var isWebUser=false;
		p.setWebUser();
		for(var i=0; i < p.webUsers.length; i++) {
			if(p.webUsers[i] == trg){
				isWebUser=true;
				break;
			}
		}
		if(isWebUser) {
			p.set(trg,param);
		}

		if(icoUsr){
			if(onoff=="on"){
				icoUsr.style.backgroundImage="url("+_HadmList.icon.on+")";
				icoUsr.onclick=function(){_HOpenChatWin(trg, 'y', 'click');}
				icoUsrOncnt++;
			}else{
				icoUsr.style.backgroundImage="url("+_HadmList.icon.off+")";
				icoUsr.onclick=function(){_HSMSConfirm(trg);}
			}
			if(!HsendAutoMsgalready && icoUsrOncnt>0){HsendAutoMsg();}
		} else if(!HsendAutoMsgalready && onoff=="on"){
			if(isWebUser) {
				HsendAutoMsg();
			}
		}
	};
	this.getautoMsgUsr=function(){
		var avail=[];
		for(var i in p.usrs){
			if(p.usrs[i].chatstatus=="ONLINE"){
				if(typeof p.usrs[i].maxchatcnt=="undefined"){p.usrs[i].maxchatcnt=0;}
				if(typeof p.usrs[i].curchatcnt=="undefined"){p.usrs[i].curchatcnt=0;}
				if(parseInt(p.usrs[i].maxchatcnt,10)>parseInt(p.usrs[i].curchatcnt,10)){
					avail.push(p.usrs[i].curchatcnt+","+p.usrs[i].lastrevtime+","+i);
				}
			}
		}
		if(avail.length>0){
			avail.sort();
			return avail[0].split(",")[2];
		}else{
			return "";
		}
	};
	this.drop=function(trg){
		var obj=document.getElementById("LI_"+trg);
		if(obj){obj.parentNode.removeChild(obj);}
		delete p.usrs[trg];
	};
})();

function _HwinOpen(url, width, height, pid, addTop, addLeft){  //현재 SMS/MEMO개인정보취급방침 외 사용하지 않음
	if(!url) return;
	if(!pid) pid = "";
	if(!addTop) addTop = 0;
	if(!addLeft) addLeft = 0;
	var clientWidth = clientHeight = scrollTop = 0;
	if(!document.compatMode || document.compatMode.toLowerCase() == 'backcompat'){
		clientWidth = document.body.clientWidth;
		clientHeight = document.body.clientHeight;
	}else{
		clientWidth = document.documentElement.clientWidth;
		clientHeight = document.documentElement.clientHeight;
	}
	scrollTop = document.body.scrollTop;
	var top = parseInt(((clientHeight-height)/2) + scrollTop + addTop);
		if(top >= 0){
		if(scrollTop > top) top = scrollTop;
		else top = top;
	}else{
		top = "0";   //바탕화면보다 객체가 클경우
	}
	if(width > clientWidth){
		var left = "0";
	}else{
		var left = parseInt((clientWidth/2) - ((width/2)+20) + (addLeft));
	}
		url = _HConfig.server + url;
	var win = window.open(url, pid, "width="+width+",height="+height+",left="+left+",top="+top+",scrollbars=yes");
	win.focus();
}

_HEvent.add(document, "click", function(event) {
	var eventTarget = null;
	if(window.event) {
		eventTarget = window.event.srcElement;
	} else {
		eventTarget = event.target; 
	}
	if(eventTarget.id == "HskinBox_sms_btnsend" || eventTarget.parentNode.id == "HskinBox_sms_btnsend") {
		_HsmsSend();
	} else if(eventTarget.id == "HskinBox_memo_btnsend" || eventTarget.parentNode.id == "HskinBox_memo_btnsend") {
		_HmemoSend();
	} else if(eventTarget.id == "HskinBox_sms_agree_title" || eventTarget.parentNode.id == "HskinBox_sms_agree_title" || eventTarget.id == "HskinBox_memo_agree_title" || eventTarget.parentNode.id == "HskinBox_memo_agree_title") {
		_HwinOpen("/HTTP_MSN/admin/personal_Info.php", 717, 600);
	}
});

function _Htrim(str){var re = /^\s+|\s+$/g;return str.replace(re,'');}

function _HbyteCheck(msg){var nbytes=0;for(var i=0;i<msg.length;i++){var ch=msg.charAt(i);if(escape(ch).length>4){nbytes+=2;}else if(ch=='\n'){if(msg.charAt(i-1)!='\r'){nbytes+=1;}}else if(ch=='<'||ch=='>'){nbytes+=4;}else{nbytes += 1;}}return nbytes;}

function _HChkByteR(d,t,m){
	var Obj = document.getElementById(t);
	var v = d.value;
	var bc = _HbyteCheck(v);
	var ml = (parseInt(m) > 0 ? m : (_HConfig.RbtnType == "F" ? 200 : 60));
	if (bc>ml){
		d.style.color="blue";
		Obj.innerHTML=bc + "/"+ml+" Bytes";
	}else{
		if (bc==0){
			//Obj.innerHTML="";
			Obj.innerHTML=bc + "/"+ml+" Bytes";
		}else{
			d.style.color="black";
			Obj.innerHTML=bc + "/"+ml+" Bytes";
		}
	}
}

//Send SMS
function _HsmsSend(){
	if(typeof _HChatDesign=="object" && typeof _HChatDesign.useSMSDesign == "string" && _HChatDesign.useSMSDesign != "N"){
		var ph1 = document.getElementById("http_SMS_Number1");
		var ph2 = document.getElementById("http_SMS_Number2");
		var ph3 = document.getElementById("http_SMS_Number3");
		var Msg = document.getElementById("http_SMS_MEMO");
		var agr = document.getElementById("http_SMS_agree");
	}else{
		var ph1 = document.getElementById("HsmsNum1");
		var ph2 = document.getElementById("HsmsNum2");
		var ph3 = document.getElementById("HsmsNum3");
		var Msg = document.getElementById("HsmsContent");
		var agr = document.getElementById("HskinBox_sms_agree_check");
	}

	var p1 = _Htrim(ph1.value);
	var p2 = _Htrim(ph2.value);
	var p3 = _Htrim(ph3.value);
	var message = Msg.value;
	message = _Htrim(message);
	if (message == _HConfig.strSMSmemo){
		alert(_HConfig.msg.emptyMsg);
		Msg.focus();
		return;
	}
	if (message.length<1){
		alert(_HConfig.msg.emptyMsg);
		Msg.focus();
		return;
	}
	if (_HbyteCheck(message)>200){
		alert(_HConfig.msg.byte200);
		return;
	}
	if(agr){
		if (!agr.checked){
			alert(decodeURIComponent("%EA%B0%9C%EC%9D%B8%EC%A0%95%EB%B3%B4%EC%B7%A8%EA%B8%89%EB%B0%A9%EC%B9%A8%EC%97%90%20%EB%8F%99%EC%9D%98%20%ED%95%98%EC%85%94%EC%95%BC%20%ED%95%A9%EB%8B%88%EB%8B%A4."));
			return;
		}
	}

	if (p1.length<1 || p2.length<1 || p3.length<1){
			alert(_HConfig.msg.emptypPhone);
			if(p1.length == 0 ) {ph1.focus(); return;}
			if(p2.length == 0 ) {ph2.focus(); return;}
			if(p3.length == 0 ) {ph1.focus(); return;}
	}
	if (isNaN(p1) || isNaN(p2) || isNaN(p3)){
			alert(_HConfig.msg.onlynumberPhone);
			if(isNaN(p1)) ph1.focus();
			if(isNaN(p2)) ph2.focus();
			if(isNaN(p3)) ph3.focus();
			return;
	}
	message = encodeURIComponent(message);
	var _p = [p1,p2,p3];
	var phone = _p.join("");
	
	var param = [];
	_u = _HConfig.server+"/HTTP_MSN/Messenger/sendClientSMS.php?";
	param.push("message="+message);
	param.push("from_number="+phone);
	param.push("HTTP_MSN_AUTH_CDKEY="+_HConfig.cdkey);
	param.push("rtype="+_HConfig.RbtnType);
	param.push("ctype=js");
	_u += param.join("&");
	_HObject.jsInclude(_u,"_HifrmSMS");
	try{ph1.value="";ph2.value="";	ph3.value="";}catch(E00112){}
	Msg.value="";
}

//Send MEMO
function _HmemoSend(tid){
	if(typeof _HChatDesign=="object" && typeof _HChatDesign.useMemoDesign == "string" && _HChatDesign.useMemoDesign != "N"){
		var Msg = document.getElementById("http_MEMO_MEMO");
	}else{
		var agr = document.getElementById("HskinBox_memo_agree_check");
		var Msg = document.getElementById("HmemoContent");
	}
	var message = Msg.value;
	message = _Htrim(message);
	if (message==_HConfig.strMEMOmemo || message.length<1){
		alert(_HConfig.msg.emptyMemoMsg);
		Msg.focus();
		return;
	}
	if (_HbyteCheck(message)>200){
		alert(_HConfig.msg.emptyMemoByte200);
		return;
	}

	if(agr){
		if (!agr.checked){
			alert(decodeURIComponent("%EA%B0%9C%EC%9D%B8%EC%A0%95%EB%B3%B4%EC%B7%A8%EA%B8%89%EB%B0%A9%EC%B9%A8%EC%97%90%20%EB%8F%99%EC%9D%98%20%ED%95%98%EC%85%94%EC%95%BC%20%ED%95%A9%EB%8B%88%EB%8B%A4."));
			return;
		}
	}

	var ph1 = document.getElementById("HmemoNum1");
	var ph2 = document.getElementById("HmemoNum2");
	var ph3 = document.getElementById("HmemoNum3");
	if(ph1 && ph2 && ph3){
		var p1 = _Htrim(ph1.value);
		var p2 = _Htrim(ph2.value);
		var p3 = _Htrim(ph3.value);
		if (p1.length<1 || p2.length<1 || p3.length<1){
				alert(_HConfig.msg.emptypPhone);
				if(p1.length == 0 ) {ph1.focus(); return;}
				if(p2.length == 0 ) {ph2.focus(); return;}
				if(p3.length == 0 ) {ph1.focus(); return;}
		}
		if (isNaN(p1) || isNaN(p2) || isNaN(p3)){
				alert(_HConfig.msg.onlynumberPhone);
				if(isNaN(p1)) ph1.focus();
				if(isNaN(p2)) ph2.focus();
				if(isNaN(p3)) ph3.focus();
				return;
		}
		var _p = [p1,p2,p3];
		var phone = _p.join("");
		ph1.value = ph2.value = ph3.value = "";
	}else{
		var phone = "";
	}

	message = encodeURIComponent(message);
	var param = [];
	_u = _HConfig.server+"/HTTP_MSN/Messenger/MEMO_PROC.php?";
	param.push("message="+message);
	param.push("from_number="+phone);
	param.push("v=v6");
	param.push("mid="+_HScript.rnd());
	if(tid){param.push("tid="+tid);}
	param.push("HTTP_MSN_AUTH_CDKEY="+_HConfig.cdkey);
	_u += param.join("&");
	_HObject.jsInclude(_u,"_HifrmMEMOF");
	Msg.value="";
	//document.getElementById("_HRealByte").innerHTML="";
}

var HskinFirstFlag = true; //comment no.01
function HshowSkinBox(mode){
	var pnode = document.getElementById("tabMenuWrapper");
	if(/active(SMS|CHAT|MEMO)/i.test(pnode.className)){
		pnode.className = pnode.className.replace(/(SMS|CHAT|MEMO)/i, mode.toUpperCase());
	}else{
		pnode.className = pnode.className+" active"+mode.toUpperCase();
	}
	if(_HConfig.chatEnable!=true && !/abs$/.test(pnode.className)){ //comment no.02
		pnode.parentNode.className += (pnode.parentNode.className.length > 0 ? " " : "")+"abs";
	}
	var li = pnode.getElementsByTagName("li");
	var pattern = eval("/"+mode+"$/i");
	for(var i=0; i<li.length; i++){
		if(pattern.test(li[i].id)){
			li[i].className = (li[i].className.lenath > 0 ? " " : "")+"on";
		}else{
			li[i].className = li[i].className.replace(/[\s]?on$/,"");
		}
	}
	
	var trgId="HskinBox_"+mode;
	var menu = Array("HskinBox_chat", "HskinBox_sms", "HskinBox_memo");
	for(i=0; i<menu.length; i++){
		var obj = document.getElementById(menu[i]);
		if(trgId == menu[i]){
			if(pnode.tagName.toLowerCase() == "div"){
				if(HskinFirstFlag == true){
					HskinFirstFlag = false;
					obj.style.display = "";
				}else{
					obj.style.display = (obj.style.display == "none" ? "" : "none");
				}
			}else{
				obj.style.display = "";
			}
		}else{
			obj.style.display = "none";
		}
	}
}

function _HgetProfImg(Id){
	if(!Id) return;
	var key = -1;
	var img="<img src='"+_HConfig.server+"/HTTP_MSN/UsrConfig/"+_HConfig.cdkey+"/pic/thumb/default.gif' width='55' height='55' border='0' />";
	for(var i = 0; i < _HadmListJs["members"].length; i++){
		if(_HadmListJs["members"][i].id == Id){
			key = i;
			break;
		}
	}
	if(key != -1) {
		var left=0, top=0;
		if(parseInt(_HadmListJs["members"][key].width) < 53) {
			left=Math.floor((55-parseInt(_HadmListJs["members"][key].width))/2);
		}
		if(parseInt(_HadmListJs["members"][key].height) < 53) {
			top=Math.floor((55-parseInt(_HadmListJs["members"][key].height))/2);
		}
		img="<img src='"+_HConfig.server+"/HTTP_MSN/UsrConfig/"+_HConfig.cdkey+"/pic/thumb/"+_HadmListJs["members"][key].pic+"' width='"+_HadmListJs["members"][key].width+"' height='"+_HadmListJs["members"][key].height+"' border='0' style='padding-left:"+left+"px;padding-top:"+top+"px;' />";
	}
	var profImg=document.getElementById("HagreeBox_body_img");
	if(profImg){ //agBox Type B is "HagreeBox_body_img" not exits... 
		profImg.innerHTML=img;
	}
}
function _HdisplayBtn(Id, Msg){	
	if(typeof Id=="undefined"){Id="";}
	if(typeof Msg=="undefined"){Msg="";}
	if(Msg==""){return;}
	_HClearAgCB();
	_HScript.Inner(_HChat.Agbody, HSkinAgree.replace(/\{rep__Id\}/gi,Id));
	var box=document.getElementById("HagreeBox");
	var msgBox=document.getElementById("HChatAgreeMsgBox");
	var boxT=document.getElementById("HagreeBox_title");	
	msgBox.innerHTML=Msg;
	if(Id=="") {
		msgBox.value="auto";
	} else {
		msgBox.value="agree";
	}
	_HgetProfImg(Id);
	_HChat.Agbody.style.display="";
	HsetBodyStyle(_HChat.Agbody,HSkinprop.p.agreeBox);
	_HsetPos(box);	
	try {if (document.hasFocus()==false){window.focus();}} catch (e){delete e;}
}

function _HInsertChatAttributes(arg){var arr=arg.split("|$_$|");_HdisplayBtn(arr[0], decodeURIComponent(_H_OnMsg(arr[1])));}

function _HClearTextM(obj,txt){if(txt==obj.value){obj.value="";obj.style.color="black";}}

var _HfixedFormMsg="";
function _HSendChatFixedForm(arg) {
	if(typeof arg[0] != "undefined") {
		if (_HbyteCheck(arg[0])>200){
			alert(_HConfig.msg.byte200);
			return;
		}
		_HfixedFormMsg=encodeURIComponent(arg[0]);
	}
	_HOpenChatWin('','y','fix');
}

setTimeout(HdspSkin,100);function _HresetFbridge(){window["HswfObj"]=_HgetLastObject("HswfObj");_HobjBridge=window["HswfObj"];}

function _HInit_bridge(){
    var nIEF=[];
    var IEF=[];
	var strSrc=_HConfig.server + "/v6/fb.swf?r=" + _HScript.rnd();
    nIEF.push("<embed src=\"" + strSrc + "\" quality=\"high\" ");
    nIEF.push("pluginspage=\"" + _Hprotocol + "www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"1px\" height=\"1px\" name=\"HswfObj\" id=\"HswfObj\" style=\"display:block\" ");
    nIEF.push("Wmode=\"Opaque\" allowScriptAccess=\"always\" swLiveConnect=\"true\" FlashVars=\"svr="+encodeURIComponent(_HConfig.server)+"\"></embed>");
    IEF.push("<object style=\"display:block;\" classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"" + _Hprotocol + "fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0\" ");
    IEF.push("width=\"1\" height=\"1\" name=\"HswfObj\" id=\"HswfObj\" align=\"middle\">");
    IEF.push("<param name=\"movie\" value=\"" + strSrc + "\">");
    IEF.push("<param name=\"FlashVars\" value=\"svr="+encodeURIComponent(_HConfig.server)+"\">");
    IEF.push("<param name=\"Wmode\" value=\"transparent\"><param name=\"allowScriptAccess\" value=\"always\"><param name=\"quality\" value=\"low\"><param name=\"scale\" value=\"noborder\" ></object>");
    var strFlObj=(_HbrowsDetect.browser=="Explorer") ? IEF.join("") : nIEF.join("");
    window["HswfObj"]=new Object();
	if(_HMy.isSmartphone()==false){
		if (!_HObject.ele("HswfObj")){_HScript.Inner(_HChat.getSwfContain(), strFlObj);}
	}
	if(typeof _HskincssText!="undefined"){HaddStyleText(_HskincssText);}
    _HresetFbridge();
}
_HlogCallback({ip:"220.116.54.75",isAdm:false,isViewInfo:false,HTTP_MSN_USER_DATA:"NO",HTTP_MSN_USER_DATA:"NO",HTTP_MSN_USER_DATA_VALUE:'220.116.54.75/0/0/1/0/omg26o8rmi08sl9eug3r6ja8t4-201607298790554/0/0/0/0/0/0/0/0/0/0/2016-07-29 19:25:05/0/0/0/0/0/0/0/0/0/0/0/0/0/0/NO/owlsrecipe.com/N/2016-07-29 19:25:05/0',isChatBrws:true,l_flag:"P",SERVICE_ONOFF:"Y",except_ip:"0",referer:"owlsrecipe.com%2FNO",cpctype:"N",cpccount:"1",custype:"0",cuscate:"",cusidx:"",svrtm:"1469787925735",warnAdcount:"0",line:"KT",addr:"%EA%B2%BD%EA%B8%B0+%EC%84%B1%EB%82%A8%EC%8B%9C+%EB%B6%84%EB%8B%B9%EA%B5%AC",set_ip:"114.108.136.245",listen_port:"80",_COMB_NODE_1:"220.116.54.75^omg26o8rmi08sl9eug3r6ja8t4^omg26o8rmi08sl9eug3r6ja8t4^0^170^Y^Y^http://www.moongori.com,    http://m.moongori.com/^OK^moongori.com^D^moongori^^0^0^7^7^L^M^10^13^M^Y^Y^N^10^15^20^M^N^30^NO^NO^0^0^0^0^0^NO^NO^7^10^13^M^0",'_SEARCH_STRING':'NO','_OV_PAGE_EXIST_VAL':'','_SINFO':'74','_BFIRST':'1','_RETGT_BUSE':'N',arr:["0,T,,omg26o8rmi08sl9eug3r6ja8t4,170,1,0,N,M,N,0"]});_HK_vars=[];