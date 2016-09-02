var set=function(){
	return{
		login : function(_this){
			if($('#id').val()!='test' || $('#pw').val()!='123456')alert(' 아이디 또는 패스워드가 일치하지 않습니다.');
			else {
				$.cookie('id', 'test');
				document.location.href="./main.html"
			}
		}
		,logout : function(_this){
			$.cookie('id',null);
			document.location.href="./index.html"
		}
		,report_day : function(_gubun){
			switch(_gubun){
				case '20160902':
				//no date sosok name
					$('#no').html('R20160902-1');
					$('#date').html('2016 .09 .02');
					$('#name').html('김영철');
					$('#content').val('쇼핑몰 고구마 11박스 판매 \n고구마캐기 체험 20인 방문');
					break;
				case '20160901':
					$('#no').html('R20160901-1');
					$('#date').html('2016 .09 .01');
					$('#name').html('김영철');
					$('#content').val('쇼핑몰 고구마 10박스 판매');
					break;
				case '20160831':
					$('#no').html('R20160831-1');
					$('#date').html('2016 .08 .31');
					$('#name').html('김영철');
					$('#content').val('쇼핑몰 판매없음');
					$('#content2').val('쇼핑몰에 결제오류로 인해 판매없음');
					break;
				case '20160830':
					$('#no').html('R20160830-1');
					$('#date').html('2016 .08 .30');
					$('#name').html('김영철');
					$('#content').val('쇼핑몰 고구마 3박스 판매 \n   감자 10 박스 판매\n   옥수수 10 박스 판매');
					break;
				case '20160829':
					$('#no').html('R20160829-1');
					$('#date').html('2016 .08 .29');
					$('#name').html('김영철');
					$('#content').val('쇼핑몰 고구마 1박스 판매 \n ');
					break;
				default:
					break;
			}
			$('#listPanelClose').click();
		}
	};
}();