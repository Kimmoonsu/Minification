var qna_edit=1;
function addCart(f,next,opt_check_only,mb) {
	if(f) {
		if(f.optionKind) optionKind = f.optionKind.value;
		if(f.memo_default) memo_default = f.memo_default.value;
		if(f.memo_use) memo_use = f.memo_use.value;
	}
	var astr = '';
	if (f.stat.value!=2)
	{
		ems='\n �˼��մϴ�\n\n '+soldout_name+'�� ��ǰ�� �ֹ��� �� �����ϴ�        \n';
		if (typeof f.sold_reserve!='undefined' && f.sold_reserve.value=='Y')
		{
			ems+='\n �����ֹ��ϱ⸦ �̿��Ͻø� �԰��� �����帮�ڽ��ϴ�        ';
		}
		alert(ems);
		return;
	}
	var min_ord=eval(f.min_ord.value);
	var max_ord=eval(f.max_ord.value);
	if(f.buy_ea) var buy_ea=eval(f.buy_ea.value);


	if (buy_ea<min_ord && optionKind != 1000)
	{
		if(min_ord>1) astr='�� ��ǰ�� ';
		alert(astr+'�ּ� '+min_ord+'�� �̻� �����ϼž��մϴ�');
		f.buy_ea.value=min_ord;
		return;
	}
	if (max_ord && buy_ea>max_ord)
	{
		alert('�� ��ǰ�� �ִ� '+max_ord+'������ �����Ͻ� �� �ֽ��ϴ�');
		f.buy_ea.value=max_ord;
		return;
	}

	// �޸�üũ
	if(typeof f.memo_desc != 'undefined' && memo_use == 'A') {
		if(!f.memo_desc.value || f.memo_desc.value == memo_default) {
			window.alert('�޸� �Է��� �ֽʽÿ�.');
			return;
		}
	}

	_option_txt='';
	opt_no=eval(f.opt_no.value);
	if (opt_no>0)
	{
		// �Ϲ�/���ݰ���, �ٴ���, �г�/���� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
		if(optionKind == 100 || optionKind == 500 || optionKind == 600 || optionKind == 700 || optionKind == 1000){

			for (j=1; j<=eval(opt_no); j++)
			{

				if (f.elements['option_necessary'+j].value=="Y" || optionKind == 500) // necessary
				{
					if (f.elements['option_type'+j].value==2) // select
					{
						if (!checkSel(f.elements['option'+j],f.elements['option_name'+j].value+'��(��)')) return;
					}
					else // radio, checkbox
					{
						if (!checkCB(f.elements['option'+j],f.elements['option_name'+j].value+'��(��)')) return;
					}

				}
				// <2006-12-01 : �ɼ����üũ - Han
				if(f.elements['option_ea_ck'+j].value == "Y"){
					if(f.elements['option_ea_num'+j].value < 1){ alert("�ش� �ɼ��� ǰ���Ǿ����ϴ�. - "+f.elements['option_name'+j].value+"   "); return; }
					if(buy_ea > f.elements['option_ea_num'+j].value){
						alert("�ش� �ɼ��� "+f.elements['option_ea_num'+j].value+"������ ���Ű� �����մϴ�. - "+f.elements['option_name'+j].value+"   ");
						f.buy_ea.value=f.elements['option_ea_num'+j].value;
						return;
					}
				}
				/*
				_option_txt += (_option_txt != '') ? ', \n' : '';
				_option_txt += f.elements['option_name'+j].value +' : '+ f.elements['option'+j].options[f.elements['option'+j].selectedIndex].text;
				*/
			}

			// �ٴ���, �������� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
			if((optionKind == 500 || optionKind == 700) && !opt_check_only){
				if(f.option_cal_txt.value == f.option_cal_txt.defaultValue || !f.option_cal_txt.value){
					alert('������ֽñ� �ٶ��ϴ�');
					return;
				}
				if(f.option_cal_txt.value != ''){
					if(optionKind == 500) _option_txt=f.option_cal_txt.value;
					if(optionKind == 700) _option_txt += _option_txt ? '\n'+f.option_cal_txt.value : f.option_cal_txt.value;
				}
			}

			// �г�/���� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
			if(optionKind == 600){
				if(f.option_cal_txt.value == '' ) panelCal();
				if(f.option_cal_txt.value == '' && !opt_check_only){
					alert('���� ���̸� �Է����ֽñ� �ٶ��ϴ�');
					return;
				}
				_option_txt += f.option_cal_txt.value;
			}

			if(optionKind == 1000) {

			}

		}

		// ������ �ɼ� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
		if(optionKind == 400){

			if(f.elements['option1'].value == ''){
				alert('�ɼ� ������ �Է����ֽñ� �ٶ��ϴ�');
				f.elements['option1'].focus();
				return;
			}

			_option_txt += '���Է����� : '+f.elements['option1'].value;

		}

		// ����Ʈ�÷� �ɼ� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
		if(optionKind == 800){
			if(f.option1) {
				optionCal(f, '1', f.option1.value);
			}
			if(f.option_color_txt.value == '' && $('input[name=opt_color_search]').eq(0).attr('checked') == 'checked'){
				alert('������ �������ֽñ� �ٶ��ϴ�');
				return;
			}
			_option_txt =  f.elements['option_name1'].value +': '+ f.elements['option1'].options[f.elements['option1'].selectedIndex].text;
			_option_txt += '\n�����ڵ� : '+f.opt_color_code.value;
			_option_txt += '\n'+f.option_color_txt.value;

		}

		f.option_txt.value=_option_txt;
		if(opt_check_only == 1){
			return true;
		}
	}

	if(typeof cart_direct_order != 'undefined' && next==2){
		if(cart_direct_order == 'D') {
			cwith=confirm('\n ��ٱ��Ͽ� �ִ� ��ǰ�� �Բ� �ֹ��Ͻðڽ��ϱ�?\n\n \'���\'�� Ŭ���Ͻø� �����Ͻ� ��ǰ�� �ֹ��Ǹ� ���� ��ٱ��� ��ǰ�� �����˴ϴ�.                  ');
		}
		else if(cart_direct_order == 'Y') cwith=0;
		else cwith=1;
	} else if(next == 'checkout') {
		cwith=0;
	} else {
		cwith=1;
	}

	if (next==1 || next==2 || next == 'checkout')	{
		tg=hid_frame;
		if(typeof f.qd != 'undefined' && f.qd.value) tg=parent.hid_frame;
		ac=root_url+'/main/exec.php?exec_file=cart/cart.exe.php&cwith='+cwith;
		f.next.value=next;
	} else {
		tg='';
		ac=root_url+'/shop/order.php';
	}

	// 2008-10-15 : ���̽� ī���� ó�� - Han
	if(ace_counter == '1'){
		AEC_F_D(_AEC_prodidlist[0],'i',buy_ea);
	}

	if(!mb) mb = '';

	f.exec.value='add';
	if(f.is_mb) f.is_mb.value = mb;
	f.target=tg;
	f.action=ac;
	f.submit();

}

// �ٴ��� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
function ordSizeCal(){
	f=document.prdFrm;

	if(!f.option1.value){
		alert('�ɼ��� �������ּ���');
		return;
	}
	if(!f.opt_width.value || !f.opt_height.value){
		alert('���� �Ǵ� ���� ����� �Է��ϼ���');
		return;
	}
	if(!checkNum(f.opt_width, '���λ������')) return;
	if(!checkNum(f.opt_height, '���λ������')) return;

	_prd_prc=parseInt(f.total_prc.value);
	_add_prc=f.option1.value.split('::');
	_add_prc=parseInt(_add_prc[1]);
	_width=parseInt(f.opt_width.value);
	_height=(f.opt_height.value);

	if(_width < min_width){
		alert('���λ���� �ּ� '+min_width+'cm ���� ũ�� �Է����ּ���');
		return;
	}
	if(_width > max_width){
		alert('���λ���� �ִ� '+max_width+'cm ���� �۰� �Է����ּ���');
		return;
	}
	if(_height < min_height){
		alert('���λ���� �ּ� '+min_height+'cm ���� ũ�� �Է����ּ���');
		return;
	}
	if(_height > max_height){
		alert('���λ���� �ִ� '+max_height+'cm ���� �۰� �Է����ּ���');
		return;
	}

	add_prc = Math.round(_width * _height * (_add_prc + _prd_prc) / 10000); //ȸ��� ���� ���

	if(confirm("����� ��û�Ͻ� �ݾ��� "+add_prc+"���Դϴ�. ������ �����Ͻðڽ��ϱ�?")){
		f.option_cal_txt.value='';
		f.option_prc1.value=add_prc-_prd_prc;
		//content =  f.elements['option_name1'].value +': '+ f.elements['option1'].options[f.elements['option1'].selectedIndex].text;
		content = '����: '+_width+'cm ����: '+_height+'cm �ݾ�: '+add_prc;
		f.option_cal_txt.value=content;
		totalCal(f);
		return;
	}
}

// �������� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
function blindSizeCal(){
	f=document.prdFrm;

	if(addCart(f,'',1) != true) return;

	if(!f.opt_width.value || !f.opt_height.value){
		alert('���� �Ǵ� ���� ����� �Է��ϼ���');
		return;
	}
	if(!checkNum(f.opt_width, '���λ������')) return;
	if(!checkNum(f.opt_height, '���λ������')) return;

	_width=parseInt(f.opt_width.value);
	_height=parseInt(f.opt_height.value);

	if(_width < min_width){
		alert('���λ���� �ּ� '+min_width+'cm ���� ũ�� �Է����ּ���');
		return;
	}
	if(_width > max_width){
		alert('���λ���� �ִ� '+max_width+'cm ���� �۰� �Է����ּ���');
		return;
	}
	if(_height < min_height){
		alert('���λ���� �ּ� '+min_height+'cm ���� ũ�� �Է����ּ���');
		return;
	}
	if(_height > max_height){
		alert('���λ���� �ִ� '+max_height+'cm ���� �۰� �Է����ּ���');
		return;
	}

	// �������ϱ�
	//_result=Math.ceil((_width * _height)/1000)/10; ����������ǰ�� �ɼ��� �����ϱ� ���� �ø��Լ� ���� 12.04.16 ���� ��) 20cm x 20cm = 0.1�� => 20cm x 20cm = 0.04��
	_result=Math.ceil((_width * _height)/100)/100;
	_content_msg=(_result < min_order) ? '\n�ֹ��Ͻ� ��ǰ�� ũ�Ⱑ '+min_order+'���� ���� ������� \n'+min_order+'�� ������ ����˴ϴ�.' : '';
	_result=(_result < min_order) ? min_order : _result;
	f.opt_result.value=_result;
	opt_no=parseInt(f.opt_no.value);

	if(opt_no>0){
		for(ii=1; ii<=opt_no; ii++){
			_option_total_prc=0;
			_option_prc=f['option'+ii].value.split('::');
			_option_prc=parseInt(_option_prc[1]);
			_risekind=f['option_risekind'+ii].value; // �����ɼ�
			if(_risekind == '100'){ // ȸ������
				_option_total_prc=_option_prc*_result;
			}
			if(_risekind == '200'){ // ��������
				_option_total_prc=_option_prc;
			}
			f['option_prc'+ii].value=_option_total_prc;
		}
	}
	f.total_prc.value=parseInt(standard_price*_result); //����������ǰ�� ������ �־� parseInt �߰� 12.09.17 ����
	content='��'+_width+'cm x ����'+_height+'cm = '+_result+'��'+_content_msg;
	f.option_cal_txt.value=content;
	totalCal(f);
}


// �г�/���� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
var _panel_arr=new Array(); // �г� �迭 ����
var _panel_com=''; // �ϼ��� �г�
var _panel_com_arr=new Array(); // �ϼ��� �г� ǥ��
var _extra_arr=new Array(); // ������ �迭 ����
var _panel_tmp_width=0; // ���� ����
function panelCal(){
	f=document.prdFrm;
	_option_txt='';
	_panel_count=0;
	if(f.opt_cutting[1].checked == true){ // ����

_panel_com = '';

		$('#opt_cutting_div').css('display', 'block');

		// ���ܿ� ���� ������ �������Ƿ� �Է� ����
		//$('#qty_img').css('display', 'none');
		f.buy_ea.value=1;
		f.buy_ea.readOnly=true;

		for(ii=0; ii<f.cutting_width.length; ii++){
			if(!checkNum(f.cutting_width[ii], '���ܱ��̴�')) return false;
			if(!checkNum(f.cutting_ea[ii], '������')) return false;

			if(!f.cutting_width[ii].value || !f.cutting_ea[ii].value){
				continue;
			}

			if(f.cutting_width[ii].value < min_cutting){
				alert('�ּ� �ֹ� ���̺��� ª�� �ֹ��ϼ̽��ϴ�');
				f.cutting_width[ii].value='';
				return false;
			}
			//if(f.cutting_width[ii].value < min_cutting_45 && min_cutting_45 > 0 && f.cutting_line[ii].value == "45������"){
			if(f.cutting_width[ii].value < min_cutting_45 && min_cutting_45 > 0){
				alert('45������ �ּ� �ֹ� ���̺��� ª�� �ֹ��ϼ̽��ϴ�');
				f.cutting_width[ii].value='';
				return false;
			}
			if(f.cutting_width[ii].value >= goods_width){
				alert('�ִ� �ֹ� ���̺��� ��� �ֹ��ϼ̽��ϴ�');
				f.cutting_width[ii].value='';
				return false;
			}

			_ea=parseInt(f.cutting_ea[ii].value);
			_width=parseInt(f.cutting_width[ii].value);

			_cutting_line=(typeof f.cutting_line != 'undefined') ? ' '+f.cutting_line[ii].value : '';
			for(jj=1; jj<=_ea; jj++){
				_panel_arr[_panel_count]=_width;
				_panel_count++;
			}
			_option_txt += '\n'+_width+'mm x'+_ea+'��'+_cutting_line;

		}

		// ��ܱ��� ���ϱ�
		getPanelWidth();

		_option_txt += _panel_com ? '\n<div>'+_panel_com+'</div>' : '';

		// �Ѽ���
		_panel_num=_panel_com.split('<cut>');
		_panel_num=_panel_num.length-1;
		_panel_num=(_panel_num < 1) ? 1 : _panel_num;
		f.buy_ea.value=_panel_num;

		// ������
		_extra_num=new Array();
		_extra_txt='';
		if(_panel_com != ''){
			if(f.choice_extra.value == 'T'){
				var pieces = new Array();
				for(ii=0; ii<_extra_arr.length; ii++){
					if(!pieces[_extra_arr[ii]]) pieces[_extra_arr[ii]] = 0;
					pieces[_extra_arr[ii]]++;
				}
				for(var key in pieces) {
					if(key > min_cutting){
						_extra_txt += _extra_txt ? ', '+key+'x'+pieces[key]+'��': '������: '+key+'x'+pieces[key]+'��';
					}
				}
			}else{
				_extra_txt += '������ �̹��';
			}
		}

		_panel_div_content=_panel_com.replace(/<cut>\/|<cut>/g, '</table><table style="width:100%;" border="1"><tr><td>');
		_panel_div_content='<table style="width:100%;" border="1"><tr><td>'+_panel_div_content+'</td></tr></table>';
		$('#panel_div').html(_panel_div_content);
		// ���ǥ ������
		$('#panel_div table:last').remove();
		$('#panel_div table td').each(function (){
			_td_content=$(this).html();
			_td_content=_td_content.replace(/\//g, '��');
			$(this).html(_td_content);
		});
		_panel_div_content=$('#panel_div').html();
		_panel_div_content=_panel_div_content.replace(/��/g, '</td><td>');
		$('#panel_div').html(_panel_div_content);
		$('#panel_div table td').each(function (){
			_td_width=$(this).html();
			_td_width=_td_width*100/goods_width;
			$(this).css('width', _td_width+'%');
		});
		$('#panel_div table td').css({'textAlign':'center', 'backgroundColor':'#ffddaa', 'color':'#000'});

		f.extra_panel.value=_extra_txt;
		_option_txt += _extra_txt ? '\n'+_extra_txt : '';

	}else{ // ���ܾ���

		$('#opt_cutting_div').css('display', 'none');
		//$('#qty_img').css('display', 'block');
		f.buy_ea.readOnly=false;
		f.buy_ea.value=1;
		_option_txt = '\n���ܼ��þ���';

		_panel_arr=new Array(); // �г� �迭 ����
		_panel_com=''; // �ϼ��� �г�
		_panel_com_arr=new Array(); // �ϼ��� �г� ǥ��
		_extra_arr=new Array(); // ������ ǥ��
		_panel_tmp_width=0; // ���� ����
	}

	f.option_cal_txt.value=_option_txt;
}

// �г�/���� ��ܱ��� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
function getPanelWidth() { // �� ���� ����
	var pannels = new Array();
	var str = new Array();

	pannels[0] = goods_width;
	str[0] = '';

	for(ii=0; ii<_panel_arr.length; ii++) {
		process = false;
		_panel_arr[ii] = parseInt(_panel_arr[ii]);
		for(var pano = 0; pano < pannels.length; pano++) {
			if(pannels[pano] >= cutting_lose+_panel_arr[ii]) {
				pannels[pano] -= (cutting_lose+_panel_arr[ii]);
				str[pano] += '/'+_panel_arr[ii];
				process = true;
				break;
			}
		}
		if(process == false) {
			str[pannels.length] = '';
			pannels[pannels.length] = goods_width;
			ii--;
		}
	}

	for(var key in pannels) {
		_panel_com += str[key].replace(/^\//, '');
		if(pannels[key] > 0) {
			_panel_com += '/'+pannels[key];
			_extra_arr.push(pannels[key]);
		}
		_panel_com += '<cut>';
	}

}

// �г�/���� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
function panelChk(){
	f=document.prdFrm;

	if(addCart(f,'',1) != true) return;

	_panel_arr=new Array(); // �г� �迭 ����
	_panel_com=''; // �ϼ��� �г�
	_panel_com_arr=new Array(); // �ϼ��� �г� ǥ��
	_extra_arr=new Array(); // ������ ǥ��
	_panel_tmp_width=0; // ���� ����
	if(!panelCal()) return;
}

// ����Ʈ�÷� �˾�â - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
function openColorPop(){
	srurl=root_url+'/shop/detail_colorpop.php';
	window.open(srurl,'color', 'scrollbars=yes,resizable=yes,width=750, height=850');
}

// ����Ʈ�÷� ������ - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
function colorPriceSet(){
	f=document.prdFrm;
	_color_prc=0;
	if(f.option1.value && f.opt_color_base.value){
		_value=f.option1.value.split('/');
		_price=_value[1].split('@');
		for(ii=0; ii<_price.length; ii++){
			_tmp=_price[ii].split('::');
			if(_tmp[0] ==  f.opt_color_base.value){
				_color_prc=parseInt(_tmp[1]);
				break;
			}
		}
	}

	_option_prc=f.option1.value.split('::');
	_option_prc=parseInt(_option_prc[1]);
	f.option_prc1.value = _option_prc+_color_prc;
	totalCal(f);

	if(f.opt_color_name.value){
		$('#opt_color_div').css('backgroundColor', f.opt_color.value);
		_tmp_txt=(_color_prc > 0) ? '+' : '';
		_tmp_txt=_color_prc ? ','+_tmp_txt+_color_prc : '';
		$('#opt_color_name_div').html('����� : '+f.opt_color_name.value+'('+f.opt_color_base.value+_tmp_txt+')');
		f.option_color_txt.value=$('#opt_color_name_div').html()+'<div class="paint_color" style="background-color:'+f.opt_color.value+';"></div>';
	}
}

// ����Ʈ ����˻�
function colorSearch(mode) {
	for(var i = 1; i <= 2; i++) {
		$('#color_search'+i).css('display', i == mode ? 'block' : 'none');
	}
}
function searchColorCode() {
	var code = $('#colorCode').val();
	$.post(root_url+'/main/exec.php?exec_file=shop/searchColorCode.php', {"code":code}, function(result) {
		if(!result) window.alert('�÷��ڵ尡 �����ϴ�.');
		else {
			var result = $.parseJSON(result);

			$('#opt_color').val('#'+result.color);
			$('#opt_color_code').val(result.code);
			$('#opt_color_base').val(result.base);
			$('#opt_color_name').val(result.name);
			colorPriceSet();
		}
	});
}

// �ٴ��� ��� ��� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
function ordSizeCancel(){
	f=document.prdFrm;
	if(f.option_cal_txt.value != f.option_cal_txt.defaultValue){
		if(confirm("��� ������ ����Ͻðڽ��ϱ�?")){
			f.opt_width.value='';
			f.opt_height.value='';
			f.option_cal_txt.value='';
		}
	}
}

// �����ɼ� ��� 2012-02-20 by zardsama
function getStencilOption() {
	var f = document.getElementsByName('prdFrm');
	if(f.length > 0) f = f[0];
	else return;

	totalCal(f);
}

function addMultiCart(f,next){
	if (f.stat.value!=2)
	{
		ems='\n �˼��մϴ�\n\n '+soldout_name+'�� ��ǰ�� �ֹ��� �� �����ϴ�        \n';
		if (typeof f.sold_reserve!='undefined' && f.sold_reserve.value=='Y')
		{
			ems+='\n �����ֹ��ϱ⸦ �̿��Ͻø� �԰��� �����帮�ڽ��ϴ�        ';
		}
		alert(ems);
		return;
	}
	var opt_no=eval(f.opt_no.value);
	var min_ord=eval(f.min_ord.value);
	var max_ord=eval(f.max_ord.value);
	var buy_ea=0;
	var ea_num=f["buy_ea[]"].length;
	if(!ea_num) ea_num=1;
	if(ea_num == 1){
		buy_ea += eval(f["buy_ea[]"].value);
		if(opt_no>0){
			for(ii=1; ii<=opt_no; ii++){
				if(f['option_necessary'+ii].value=="Y"){
					if(f['option_type'+ii].value==2){ if(!checkSel(f['option'+ii+'[]'],f['option_name'+ii].value+'��(��)')) return; }
					else{ if(!checkCB(f['option'+ii+'[]'],f['option_name'+ii].value+'��(��)')) return; }
				}
			}
		}
	}else{
		for(jj=0; jj<ea_num; jj++){
			buy_ea += eval(f["buy_ea[]"][jj].value);
			if(opt_no>0){
				for(ii=1; ii<=opt_no; ii++){
					if(f['option_necessary'+ii].value=="Y"){
						if(f['option_type'+ii].value==2){ if(!checkSel(f['option'+ii+"[]"][jj],f['option_name'+ii].value+'��(��)')) return; }
						else{ if(!checkCB(f['option'+ii][jj],f['option_name'+ii].value+'��(��)')) return; }
					}
				}
			}
		}
	}
	if(buy_ea<min_ord){
		if(min_ord>1) astr='�� ��ǰ�� '; else astr='';
		alert(astr+'�ּ� '+min_ord+'�� �̻� �����ϼž��մϴ�'); return;
	}
	if(max_ord && buy_ea>max_ord){ alert('�� ��ǰ�� �ִ� '+max_ord+'������ �����Ͻ� �� �ֽ��ϴ�'); return; }

	tg=hid_frame;
	ac=root_url+'/main/exec.php?exec_file=cart/cart.exe.php';
	f.next.value=next;

	f.exec.value='multi_option';
	f.target=hid_frame;
	f.action=root_url+'/main/exec.php?exec_file=cart/cart.exe.php';
	f.submit();
}

function reservePrd(f,url){
	if (f.stat.value!=3)
	{
		alert('\n ���� ��ǰ�� ���� �Ǹ����Դϴ�\n\n �����ϱ� �Ǵ� ��ٱ��ϴ�⸦ Ŭ���ϼ���         \n');
		return;
	}
	else if (typeof f.sold_reserve=='undefined' || f.sold_reserve.value!='Y')
	{
		alert('\n �˼��մϴ� \n\n ���� ��ǰ�� ���� �ֹ��� �Ұ����մϴ�         \n');
		return;
	}
	if (url=='')
	{
		location.href=root_url+'/shop/reserve.php?pno='+f.pno.value;
	}
	else
	{
		location.href=url;
	}
}

function priceCal(f){
	var mpc;
	if (typeof f.multi_price=='undefined') mpc=0;
	else mpc=eval(f.multi_price.value);

	if (mpc==0) return;
	if (mpc>1)
	{
		for (m=0; m<mpc; m++)
		{
			if (f.price[m].checked==true)
			{
				tmp=f.price[m].value.split("::");
				price=eval(tmp[1]);
				break;
			}
		}
	}
	else
	{
		tmp=f.price.value.split("::");
		price=eval(tmp[1]);
	}

	f.new_total_prc.value=eval(f.total_prc.value)+price;
}

function optionCal(f,opt_no,sval){
	tmp=sval.split("::");

	// ǰ�� ǥ�ð� �� ��ǰ �ɼ��� ������ �� ������ �߰� 2015-11 �ڼ���
	if (tmp[0].indexOf('ǰ��') != -1) {
		alert('�˼��մϴ� ǰ���� ��ǰ �ɼ� �Դϴ�.');

		$('#option'+opt_no+' > option:eq(0)').attr('selected', true);
		
		return false;
	}

	f.elements['option_sel_item'+opt_no].value=tmp[0];
	f.elements['option_prc'+opt_no].value=tmp[1];
	f.elements['option_ea_num'+opt_no].value=tmp[2];

	// �гΰ��� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
	if(optionKind == 600){
		// ���� ���� ����
		panelCal();
	}
	// �������� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
	if(optionKind == 700){
		// ���� ���� ����
		if(f.option_cal_txt.value != '')	blindSizeCal();
	}
	// ����Ʈ�÷� - �������� �ɼ� ��� Ŀ���� 2011-12 - Han
	if(optionKind == 800){
		colorPriceSet();
		return;
	}

	totalCal(f);
	return true; //���ϰ��� �޾ƾ� �ؼ� �߰� 12.10.25 ����
}


function totalCal(f){
	if(!f.total_prc) return false;

	priceCal(f);
	new_total_prc=eval(f.total_prc.value); // 2006-05-12

	var len = 1;
	if(optionKind == 1000) {
		len = f.stencil.value.replace(/\s/g, '').length;
		if(len < 1) len = 1;
		if(len < f.min_ord.value.toNumber()) { // �ּ��Ǹż���
			len = f.min_ord.value.toNumber();
		}

		new_total_prc *= len;
	}

	total_option=eval(f.opt_no.value);
	if (total_option) {
		for (i=1; i<=total_option; i++)
		{
			oprc=eval(f.elements['option_prc'+i].value);
			if (!oprc)
			{
				oprc=0;
			}
			how_cal=f.elements['option_how_cal'+i].value;
			switch(how_cal) {
				case '1' : // �Ϲ� �ɼ� �߰�����
					new_total_prc += oprc;
				break;
				case '2' : // ���ڼ��� �߰�����
					new_total_prc += (oprc*len);
				break;
			}

		}
	}

	if(f.ebig_per) {
		var ebig_per = parseInt(f.ebig_per.value);

		var tmp = new_total_prc * (ebig_per / 100);
		tmp = Math.round(tmp, 0);
		tmp -= (tmp%10);
		new_total_prc -= tmp;
	}

	var tmp1=document.getElementById('sell_prc_str');
	f.new_total_prc.value=new_total_prc;
	if(tmp1) tmp1.innerHTML=setComma(new_total_prc);
}

function addWish(f, mode){
	if(!mode) mode = 'add';
	f.exec.value = mode;
	f.rURL.value=this_url;
	f.target=hid_frame;
	if(typeof f.qd != 'undefined' && f.qd.value) f.target=parent.hid_frame;
	f.action=root_url+'/main/exec.php?exec_file=mypage/wish.exe.php';
	f.submit();
}

function addWish2(f, mode){
	if(!mode) mode = 'add2';
	if (mlv == '10') {
		if (!confirm('���ø���Ʈ�� �����ðڽ��ϱ�?\n���� �α����� �ϼž� �մϴ�.')) return;
	}
	f.exec.value = mode;
	f.rURL.value=this_url;
	f.target=hid_frame;
	if(typeof f.qd != 'undefined' && f.qd.value) f.target=parent.hid_frame;
	f.action=root_url+'/main/exec.php?exec_file=mypage/wish.exe.php';
	f.submit();
}

function toWish(pno) {
	var f = document.getElementById('wishFrm');
	f.target = hid_frame;
	f.action = root_url+'/main/exec.php?exec_file=mypage/wish.exe.php';
	f.pno.value = pno;
	f.submit();
}

function checkWish(f){
	if (eval(f.total_wish.value)<1)
	{
		alert('���ø���Ʈ�� ������ϴ�');
		return false;
	}
	return true;
}

function deleteWish(f){
	if(!checkWish(f)) return;
	if(!checkCB(f.wno,"������ ��ǰ�� �ϳ� �̻�")) return;
	f.exec.value='delete';
	f.submit();
}

function deleteWish2(f){
	if (!confirm('���ø���Ʈ���� �����Ͻðڽ��ϱ�?')) return;
	f.exec.value='delete2';
	f.rURL.value=this_url;
	f.target=hid_frame;
	f.action=root_url+'/main/exec.php?exec_file=mypage/wish.exe.php';
	f.submit();
}

function cartWish(f){ // 2007-12-13 : wishlist > cart - Han
	if(!checkWish(f)) return;
	if(!checkCB(f.wno,"��ٱ��Ͽ� ���� ��ǰ�� �ϳ� �̻�")) return;
	f.exec_file.value = "cart/cart.exe.php";
	f.exec.value='from_wish';
	f.submit();
}

function checkCart(f){
	if (f.cart_rows.value=="0")
	{
		alert('��ٱ��ϰ� ������ϴ�');
		return false;
	}
	return true;
}

function deleteCart(f){
	if(!checkCart(f)) return;
	if(!checkCB(f.cno,"������ ��ǰ�� �ϳ� �̻�")) return;
	f.exec.value='delete';

	// 2008-10-16 : ���̽�ī���� - Han
	if(typeof ace_counter_cart != 'undefined'){
		if(ace_counter_cart == '1'){
			cnum=f['cno[]'].length ? f['cno[]'].length : 1;
			for(ii=0; ii<cnum; ii++){
				if(cnum > 1){
					if(f['cno[]'][ii].checked) {
						if (document.getElementsByName("buy_ea["+ii+"]").length > 0) AEC_F_D(_AEC_prodidlist[ii], 'o', f['buy_ea['+ii+']'].value);
						else AEC_F_D(_AEC_prodidlist[ii], 'o', f['buy_ea[]'][ii].value);
					}
				}else{
					if(f['cno[]'].checked) {
						if (document.getElementsByName("buy_ea["+ii+"]").length > 0) AEC_F_D(_AEC_prodidlist[ii], 'o', f['buy_ea['+ii+']'].value);
						else AEC_F_D(_AEC_prodidlist[ii], 'o', f['buy_ea[]'].value);
					}
				}
			}
		}
	}
	f.submit();
}

function deletePartCart(f,cn){
	if(!checkCart(f)) return;
	if(f['cno[]'].length > 1) {
		f.cno[cn].checked=true;
	} else {
		f.cno.checked=true;
	}
	f.exec.value='delete';
	f.submit();
}

function truncateCart(f){
	if(!checkCart(f)) return;
	if (!confirm('��ٱ��ϸ� ��� ���ðڽ��ϱ�?')) return;
	f.exec.value='truncate';

	// 2008-10-16 : ���̽�ī���� - Han
	if(typeof ace_counter_cart != 'undefined'){
		if(ace_counter_cart == '1'){
			AEC_D_A();
		}
	}
	f.submit();
}

function updateCart(f){
	if(!checkCart(f)) return;
	checkAll(f.cno,true);
	f.exec.value='update';

	// 2008-10-16 : ���̽�ī���� - Han
	if(typeof ace_counter_cart != 'undefined'){
		if(ace_counter_cart == '1'){
			cnum=f['cno[]'].length ? f['cno[]'].length : 1;
			for(ii=0; ii<cnum; ii++){
				if(cnum > 1){
					if (document.getElementsByName("buy_ea["+ii+"]").length > 0) AEC_U_V(_AEC_prodidlist[ii], f['buy_ea['+ii+']'].value);
					else AEC_U_V(_AEC_prodidlist[ii], f['buy_ea[]'][ii].value);
				}else{
					if (document.getElementsByName("buy_ea["+ii+"]").length > 0) AEC_U_V(_AEC_prodidlist[ii], f['buy_ea['+ii+']'].value);
					else AEC_U_V(_AEC_prodidlist[ii], f['buy_ea[]'].value);
				}
			}
		}
	}
	f.submit();
}

function orderCart(f, checked){
	if(!checkCart(f)) return;
	u=root_url+'/shop/order.php';
	if (typeof f.cart_where!='undefined' && f.cart_where.value) {
		u+='?cart_where='+f.cart_where.value;
	}

	if (typeof f.cart_selected != 'undefined' && f.cart_selected.value) {
		u += /\?/.test(u) ? '&' : '?';
		u += 'cart_selected='+f.cart_selected.value;
	}

	if(checked == 'checked') {
		if(!checkCB(f.cno,"������ ��ǰ�� �ϳ� �̻�")) return;
		f.action = u;
		f.target = '_self';
		f.submit();
	} else {
		location.href=u;
	}
}

function orderCartAll(){
	c1=eval(document.cartFrm1.cart_rows.value);
	c2=eval(document.cartFrm2.cart_rows.value);

	total_cart=c1+c2;
	if (total_cart==0)
	{
		alert('��ٱ��ϰ� ������ϴ�  ');
		return;
	}
	if (c2>0 && !confirm('\n �Ϲ� ��ǰ�� ������ �Һ� ��ǰ�� �Բ� �����Ͻ� ���     \n\n ������ �Һΰ� �Ұ����մϴ�\n\n ����Ͻðڽ��ϱ�?\n'))
	{
		return;
	}
	location.href=root_url+'/shop/order.php';
}

function checkRevFrm(f){

	if (ra==2)
	{
		if(!memberOnly(this_url,1,1)) return false;

	}
	if (ra==1 && mlv==10)
	{
		if (f.name.value=='�̸�') f.name.value='';
		if (f.pwd.value=='��й�ȣ') f.pwd.value='';
		if(!checkBlank(f.name,'�̸���')) return false;
		if(!checkBlank(f.pwd,'��й�ȣ��')) return false;
	}
	if (typeof f.rev_pt!='undefined')
	{
		if (f.pno.value) pmsg="��ǰ�� ������";
		else pmsg="������";

		if (!checkCB(f.rev_pt,pmsg)) return false;
	}

	if(!checkBlank(f.title,'������')) return false;
	if(review_strlen){
		if(review_strlen > f.title.value.length){ alert("������ "+review_strlen+"�� �̻� �Է��ϼž� �մϴ�"); return false; }
	}
	if(!checkBlank(f.content,'��ǰ����')) return false;

	return true;
}

function checkQnaFrm(f){

	if (qa==2)
	{
		if(!memberOnly(this_url,1,1)) return false;

	}
	if (qa=='' && mlv==10)
	{
		if (f.name.value=='�̸�') f.name.value='';
		if(!checkBlank(f.name,'�̸���')) return false;

		if (f.pwd.value=='��й�ȣ' || f.pwd.value=='pass') f.pwd.value='';
		if(!checkBlank(f.pwd,'��й�ȣ��')) return false;
	}

	if (typeof f.cate!='undefined')
	{
		if (!checkSel(f.cate,'�з���')) return false;
	}
	if(!checkBlank(f.title,'������')) return false;
	if(qna_strlen){
		if(qna_strlen > f.title.value.length){ alert("������ "+qna_strlen+"�� �̻� �Է��ϼž� �մϴ�"); return false; }
	}
	if(!checkBlank(f.content,'������')) return false;
	return true;
}

// ��Ǫ �ı� ���� ���̾� ����
function writeReview(){
	var tmp=document.getElementById('revWriteDiv');
	if (ra=='2')
	{
		if(memberOnly(this_url,1,1)) layTgl(tmp);
	}
	else if (ra=='3')
	{
		alert('�� ��ǰ�� ������ ���� ��ǰ���� �ۼ��Ͻ� �� �ֽ��ϴ�');
		return;
	}
	else layTgl(tmp);
}

// ��Ǫ ���� ���� ���̾� ����
function writeQna(){
	if (qna_edit==2)
	{
		f=document.qnaFrm;
		if (typeof f.name!='undefined') {
			f.name.readOnly=false;
			f.name.style.backgroundColor='';
			f.name.value='';
		}
		if (typeof f.pwd!='undefined') {
			f.pwd.readOnly=false;
			f.pwd.style.backgroundColor='';
			f.pwd.value='';
		}
		f.title.value="";
		f.content.value="";
		qna_edit=1;
	}
	var tmp=document.getElementById('qnaWriteDiv');
	if (qa=='2' || qa=='3')
	{
		if(memberOnly(this_url,1,1)) layTgl(tmp);
	}
	else layTgl(tmp);
}
// ��õ���Ϻ����� �˾�â���� 2006-11-17 - Han
function recomMail(pno,w,h){
	if(mlv == 10){
	    c=confirm("\n �α����� �ʿ��� �����Դϴ�          \n\n �α����Ͻðڽ��ϱ�? \n");
		if(c){
			window.location=root_url+'/member/login.php?rURL='+escape(this_url);
		}
		return;
	}
	if (!w) w=600
	if (!h) h=500
	url=root_url+'/shop/product_request.php?pno='+pno;
	window.open(url,'proRequest','top=10,left=10,height='+h+',width='+w+',status=no,scrollbars=no,toolbar=no,menubar=no');
}
// ��õ���Ϻ����� ��üũ 2006-11-20 - Han
function checkProRequest(frm){
	if (!checkBlank(frm.from_name,"������ ����� �̸���")) return false;
	if (!checkBlank(frm.from_email,"������ ����� �̸�����")) return false;
	if(CheckMail(frm.from_email.value) == false){
		alert("������ ����� ��Ȯ�� �����ּҸ� �Է��ϼ���."); return false;
	}
	if (!checkBlank(frm.to_name,"�޴� ����� �̸���")) return false;
	if (!checkBlank(frm.to_email,"�޴� ����� �̸�����")) return false;
	if(CheckMail(frm.to_email.value) == false){
		alert("�޴� ����� ��Ȯ�� �����ּҸ� �Է��ϼ���."); return false;
	}
	if (!checkBlank(frm.sub,"������")) return false;
	if (!checkBlank(frm.content,"������")) return false;
}
function checkRevCmt(f){
	if (!checkBlank(f.content,'������')) return false;
}

function delRevCmt(no){
	if (!confirm('�����Ͻðڽ��ϱ�?')) return;
	f=document.reviewDelFrm;
	f.no.value=no;
	f.exec_file.value='shop/review_comment.exe.php';
	f.submit();
}

function delRev(no){
	ams='';
	if (alv!='')
	{
		ams='\n\n (���� ���θ� �����ڷ� �α������̹Ƿ� �ٷ� �����˴ϴ�)';
	}
	if (!confirm('\n �����Ͻðڽ��ϱ�?  '+ams+'\n')) return;
	f=document.reviewDelFrm;
	f.no.value=no;
	f.exec_file.value='shop/review_reg.exe.php';
	f.submit();
}

function editRev(no){
	f=document.reviewDelFrm;
	f.no.value=no;
	f.exec_file.value='shop/review_edit.php';
	f.submit();
}
// <2006-11-22 Qna����, ��������߰� - Han
function delQna(no){
	ams='';
	if (alv!='')
	{
		ams='\n\n (���� ���θ� �����ڷ� �α������̹Ƿ� �ٷ� �����˴ϴ�)';
	}
	if (!confirm('\n �����Ͻðڽ��ϱ�?  '+ams+'\n')) return;
	f=document.qnaFrm;
	f.no.value=no;
	f.exec_file.value='shop/qna_reg.exe.php';
	f.exec.value='delete';
	f.submit();
}
function conDelQna(no){ // 2007-03-07 : Qna������� ���� - Han
	f=document.forms["qna_pfrm"+no];
	f.exec_file.value="shop/qna_reg.exe.php";
	f.exec.value='delete';
	parent.document.getElementById('qna_pwd'+no).style.display='block';
	parent.document.getElementById('qna_modi'+no).style.display='none';
}
function conDelRev(no){ // 2007-03-07 : Review������� ���� - Han
	f=document.forms["review_pfrm"+no];
	f.exec_file.value="shop/review_reg.exe.php";
	f.exec.value='delete';
	parent.document.getElementById('review_pwd'+no).style.display='block';
	parent.document.getElementById('review_modi'+no).style.display='none';
}
function editQna(no){
	qna_edit=2;
	f=document.qnaFrm;
	f.no.value=no;
	f.exec_file.value='shop/qna_edit.php';
	f.exec.value='';
	f.submit();
}
function checkQnapwdFrm(f){
	if(!checkBlank(f.pwd,'��й�ȣ��')) return false;
}
function checkQnaModiFrm(f){
	if (typeof f.cate!='undefined')
	{
		if (!checkSel(f.cate,'�з���')) return false;
	}
	if(!checkBlank(f.title,'������')) return false;
	if(!checkBlank(f.content,'������')) return false;
}
// >
// <2006-11-24 Review����, ��������߰� - Han
function checkReviewpwdFrm(f){
	if(!checkBlank(f.pwd,'��й�ȣ��')) return false;
}
function checkReviewModiFrm(f){
	if(!checkBlank(f.title,'������')) return false;
	if(!checkBlank(f.content,'������')) return false;
}
// >

function zoomView(pno,w,h){
	if (!w) w=735;
	if (!h) h=630;

	url=root_url+'/shop/zoom.php?pno='+pno;
	window.open(url,'wmZoomView','top=10,left=10,height='+h+',width='+w+',status=no,scrollbars=no,toolbar=no,menubar=no');
}

function noPrd(){
	alert('���� �Ǹ����� ��ǰ�� �ƴմϴ�');
}

function orderCust(tp,newstat){
	var cf=document.orderCustFrm;
	var oldstat=eval(cf.stat.value);
	if (oldstat>10 && newstat>10)
	{
		alert('���/ȯ��/��ǰ �������Դϴ�');
		return;
	}

	if (newstat==12 && oldstat>2) // ���
	{
		alert('\n �ֹ� ��ҽ�û�� ������� �����մϴ�.\n');
		return;
	}
	if (newstat==16 && oldstat<4)
	{
		alert('\n ��ǰ ��û�� ����Ŀ� �����մϴ�\n\n �ֹ� ��� ��û�� �Ͻʽÿ�.\n');
		return;
	}
	cf.cate1.value=tp;
	cf.cate2.value=newstat;

	if (mlv==10) cf.method='post';
	else cf.method='get';
	cf.submit();
}

function checkCounselFrm(f){
	if (mlv==10)
	{
		if(!checkBlank(f.name,'�̸���')) return false;
		if (!f.email.value)
		{
			alert('1:1 ģ�� ����� �̸����� �Է��ϼž� �亯�� ������ �� �ֽ��ϴ�');
			return false;
		}
	}

	if(!checkBlank(f.title,'���� ������')) return false;
	if(!checkBlank(f.content,'���� ������')) return false;
}


function toggleAttatchImage(s,w,h){
	var mimg1=document.getElementById('mainImg');
	if (mimg1.src==s) return;
	var mimg=document.getElementById('mimg_div');
	str='<img id="mainImg" src="'+s+'" width="'+w+'" height="'+h+'">';
	mimg.innerHTML=str;
/*
	var mimg=document.getElementById('mainImg');
	mimg.src=root_url+'/_image/_default/etc/spacer.gif';
	mimg.width=w;
	mimg.height=h;
	mimg.src=s;
*/
}

function csView(no,stat){
	layTglList('rev','revQna',no);

	return;

	if (!stat)
	{
		layTglList('rev','revQna',no);
	}
	else
	{
		alert('\n ���� �亯 �غ����Դϴ� \n\n Ȯ���� �ż��� �亯�帮�ڽ��ϴ�           \n');
		return;
	}
}

function checkQnaSecret(f){
	if (!checkBlank(f.pwd,"��й�ȣ��")) return false;
}

function downLoadCoupon(n){
	if (confirm('������ �ٿ�����ðڽ��ϱ�?'))
	{
		curl=root_url+'/main/exec.php?exec_file=mypage/coupon_download.php&no='+n+'&rURL='+escape(this_url);
		window.frames[hid_frame].location.href=curl;
		//location.href=curl;
	}
}

function multiCart(f){
	total_ea=0;
	for (i=0; i<f.buy_ea.length; i++)
	{
		total_ea+=eval(f.buy_ea[i].value);
	}
	if (total_ea<=0)
	{
		alert('���ż����� �Է����ּ���    ');
		return;
	}
	f.submit();
}

// <2006-11-28 ����Ȯ�� Ȯ�� �Լ� �߰� - Han
function receiveProduct(ono, escrow_type, escrow_id, opno){
	if(!confirm("��ǰ�� �����̽��ϱ�? \n\n��ǰ�� �����ź��� 'Ȯ��'��ư�� �����ּ���.")) return;

	if (escrow_type == "hana_escrow" && escrow_id ){
		var ef = document.getElementById("hana_escrow");
		if (ef)	{
			ef.tid.value = escrow_id;
			ef.ctype.value = "CFRM";

			approve();
			if ( status_cd != "SUCCESS" ) return;
		}
	}

	gurl=root_url+"/main/exec.php?exec_file=mypage/receive.exe.php&ono="+ono+"&opno="+opno;
	window.frames[hid_frame].location.href=gurl;
}

function UserDefine() { // �ϳ� ����ũ�� ���ſϷ�/���� �޽��� ó���Լ�(�ϳ����࿡�� ������ �޼ҵ�, ���� ���̹Ƿ� ���� �Ұ�)
	var f = document.cporder;
	var ctype = ( document.cporder.ctype.value == "CFRM" ) ? "���ſϷᰡ" : "���Ű�����";

	if(status_cd == "SUCCESS")	{
		alert("����ũ�� "+ctype+" ���������� �Ϸ�Ǿ����ϴ�.");
	} else if (status_cd == "CANCEL") {
		alert("����ũ�� "+ctype+" ��ҵǾ����ϴ�.");
	} else {
		alert("����ũ�� ����"+status_cd);
	}
}
// >

var mtopt_no=1;
function addMultiOpt(){ // 2007-03-20 : ��Ƽ �ɼ� �߰� - Han
    var obj=document.all.multiOpt;
	if(!obj) return;
	var ori=obj.innerHTML;
	def=defaultOpt;
	if(def == ""){ alert(" �������ε��� ���� �� �õ��� �ֽñ� �ٶ��ϴ�"); return; }
	if(document.all.optDelImg){
		imgN="optDelImg";
		def=def.replace(imgN, imgN+mtopt_no);
		def=def.replace("visibility: hidden", "visibility: visible");
		def=def.replace("VISIBILITY: hidden", "VISIBILITY: visible");
		def=def.replace("deleteMultiOpt()", "deleteMultiOpt("+mtopt_no+")");
	}
	obj.innerHTML=ori+"<div id=\"multiOpt"+mtopt_no+"\">"+def+"</div>";
	mtopt_no++;
}

function deleteMultiOpt(objnum){ // 2007-03-20: ��Ƽ �ɼ� ���� - Han
	if(!objnum) return;
	var obj=document.all["multiOpt"+objnum];
	if(!obj) return;
	obj.innerHTML="";
	optobj=document.all.multiOpt;
	if(!optobj) return;
	delobj="<DIV id="+obj.id+">&nbsp;</DIV>";
	var con=optobj.innerHTML.replace(delobj, "");
	optobj.innerHTML=con;
}

function rvQnaHit(type, no){ // 2007-12-04 : Review & Qna ��ȸ�� ���� - Han
	window.frames[hid_frame].location.href=root_url+'/main/exec.php?exec_file=shop/hit.exe.php&type='+type+'&no='+no;
}

function modRevCmt(no){
	f=document.reviewDelFrm;
	f.no.value=no;
	f.exec.value='modify';
	f.exec_file.value='shop/review_comment.exe.php';
	f.submit();
}

function CyScrap(pno) {
	if(!cy_sid) {
		window.alert('Cy Open Scrap ���񽺰� Ȱ��ȭ �Ǿ����� �ʰų�, SID�� ��ϵǾ����� �ʽ��ϴ�');
		return false;
	}

    var xml_url = escape(root_url+'/main/exec.php?exec_file=shop/cy_engine.exe.php&pno='+pno);

    var cyScrap_url = 'http://api.cyworld.com/openscrap/shopping/v1/?xu='+xml_url +'&sid='+cy_sid;

    window.open(cyScrap_url, 'cyopenscrap', 'width=450,height=410');
}



/* +----------------------------------------------------------------------------------------------+
' |  2010-04-22 ���̹� üũ�ƿ� by zardsama
' +----------------------------------------------------------------------------------------------+*/
function buy_nc(a, b) {
	if(confirm("���̹� ���̷� ��ǰ�� ������ ��� \n��� �ֹ��� ���̹����̿��� Ȯ�ΰ����ϸ�,\n\n�������� ȸ������ �����ϴ� �������� ���޵���\n������, ȸ����ޱ��� �ݾ׿��� �ջ���� �ʽ��ϴ�.\n\n���̹� ���̷� �����Ͻðڽ��ϱ�?\n\n���ֵ� �� �����갣������ ����� �߰��� �� �ֽ��ϴ�.\n(�߰���� �߻��� ���� ������ �帳�ϴ�.)")) {
		if(b) {
			var f = document.getElementById('prdFrm'+b);
			nhn.CheckoutButton.prdable = f.CheckoutButton_prdable.value;
			nhn.CheckoutButton.enable = f.CheckoutButton_enable.value;
		} else {
			var f = document.getElementById('prdFrm');
		}
		if(nhn.CheckoutButton.prdable != 'Y') {
			window.alert('�˼��մϴ�. ���̹� üũ�ƿ����� ���Ű� �Ұ��� ��ǰ�Դϴ�');
			return false;
		}
		if(nhn.CheckoutButton.enable == 'N') {
			window.alert('�˼��մϴ�. ��� �����Ͽ� ���̹� üũ�ƿ����� �����Ͻ� �� �����ϴ�');
			return false;
		}
		addCart(f, 'checkout');
	}
}

function wishlist_nc(a, b) {
	if(b) {
		var f = document.getElementById('prdFrm'+b);
		nhn.CheckoutButton.prdable = f.CheckoutButton_prdable.value;
		nhn.CheckoutButton.enable = f.CheckoutButton_enable.value;
	} else {
		var f = document.getElementById('prdFrm');
	}
	if(nhn.CheckoutButton.prdable != 'Y') {
		window.alert('�˼��մϴ�. ���̹� üũ�ƿ����� ���Ű� �Ұ��� ��ǰ�Դϴ�');
		return false;
	}
	if(nhn.CheckoutButton.enable == 'N') {
		window.alert('�˼��մϴ�. ��� �����Ͽ� ���̹� üũ�ƿ����� �����Ͻ� �� �����ϴ�');
		return false;
	}

	if(is_mobile == 'mobile') {
		var url = getHttpRequest(root_url+'/main/exec.php?exec_file=mypage/wish.exe.php&pagetype=mobilecheckout&exec=checkout&pno='+f.pno.value, 'POST');
		var checkoutWish = window.open(url, 'checkoutWish');
		return;
	}
	addWish(f, 'checkout');
}

function order_nc() {
	if(nhn.CheckoutButton.enable == 'N') {
		window.alert('��ٱ��Ͽ� ������ ��ǰ�� �����ϴ�.');
		return false;
	}

	var fr = document.getElementsByName('cartFrm');
	try {
		fr = fr[0];
		fr.exec.value = 'checkout';
		fr.submit();
	} catch (e) {
		window.alert('üũ�ƿ� �����ϱ� �����Դϴ�.');
		window.alert(e.description);
	}
}


/* +----------------------------------------------------------------------------------------------+
' |  ��ٱ��� ���� ���̾�
' +----------------------------------------------------------------------------------------------+*/
function cartModify(cno, event) {
	var ev = window.event ? window.event : event;
	var left = ev.clientX;
	var top = ev.clientY;
	var scrollLeft = document.body.scrollLeft > 0 ? document.body.scrollLeft : document.documentElement.scrollLeft;
	var scrollTop = document.body.scrollTop > 0 ? document.body.scrollTop : document.documentElement.scrollTop;

	$.post(root_url+'/main/exec.php?exec_file=cart/cart_modify.exe.php', {"cno":cno}, function(data) {
		$('#cartModify').remove();

		var mLayer = $(document.createElement('div'));
		$('body').append(mLayer);
		mLayer.attr('id', 'cartModify')
			  .html(data)
			  .css("position", "absolute")
			  .css({"top" : (top + scrollTop - mLayer.innerHeight()), "left" : (left + scrollLeft - mLayer.innerWidth())})
			  .draggable();
	});
}

function cancelCartModify() {
	$('#cartModify').remove();
}

function cartRemove(cno) {
	if(!confirm('������ ��ǰ�� �����Ͻðڽ��ϱ�?')) return false;

	$.post(root_url+'/main/exec.php?exec_file=cart/cart.exe.php', {"exec":"delete", "cno[]":cno}, function(data) {
		window.location.reload();
	});
}

function repage(pno, page) {
	$.get('/main/exec.php?exec_file=shop/shop_detail_reform.exe.php&prd[no]='+pno+'&repage='+page, function(result) {
		$('#reform_gallery').html(result);
	});
}




function removeMulti(m) {
	var f = $('#'+m).parents('form');
	$('#'+m).remove();
	setMultiPrc(f);
	if($(f).find("input[name='multihash\[\]']").length == 0) {
		$(f).find('input[name="rel_cart"]').val('');
		$(f).find('.multi_total').hide();
	}
}

function multiEa(val, hash) {
	var jsondata = $('input[name="jsondata['+hash+']"]').val();
	var args = $.parseJSON(jsondata);

	var obj = $('#buy_ea_'+hash);
	var ea = parseInt(obj.val());
	ea+=val;
	if(ea < 1) ea = 0;
	args.buy_ea = ea;

	if ($('#memo_desc_'+hash).length > 0) {
		var obj_memo = $('#memo_desc_'+hash);
		args.memo_desc = obj_memo.val();
	}

	$.post(root_url+'/_include/multiOption.inc.php', args, function(result) {
		try {
			var json = $.parseJSON(result);
			if(json.result == 'error') {
				window.alert(json.msg);
			} else {
				$('#'+hash).replaceWith(json.html);
			}

			var f = $('input[name="jsondata['+hash+']"]').parents('form');
			setMultiPrc(f);
		} catch(ex) {
			//window.alert(result);
		}
	});
}

function setMultiPrc(f) {
	var total_prc = 0;
	var multi_prcs = (f) ? $(f).find('input[name="multi_prc[]"]') : $('input[name="multi_prc[]"]');
	if(!f) var f = multi_prcs.parents('form');

	if(multi_prcs.length > 0) {
		multi_prcs.each(function() {
			total_prc += parseInt(this.value);
		});

		if(total_prc > 0) {
			if ($('#qdMain', parent.document).length > 0){
				var frameH = $('body').prop('scrollHeight');
				$('#qdMain', parent.document).css({'height': frameH + 'px'});
			}

			$(f).find('.multi_total').show();
			$(f).find('.multi_total .price').html(setComma(total_prc));
		}
	} else {
		$(f).find('.multi_total').hide();
	}
}

// ����Ʈ ������, �����Է� �κ�
function ColorInputCheck (num) {
	if (num == 0) {
		$('#opt_color_div').show();
		$('#color_search1').show();
		$('#opt_color_name_div').show();
	} else {
		$('#opt_color_div').hide();
		$('#color_search1').hide();
		$('#opt_color_name_div').hide();
	}
}