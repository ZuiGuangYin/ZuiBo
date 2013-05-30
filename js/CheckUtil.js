var CheckUtil = function() {
	this.version = '1.0';
	this._errs = "";
}

CheckUtil.prototype = {

	getErrors : function(){
		if(this._errs!=""){
			window.alert(this._errs);
			return false;
		} else {
			return true;
		}
	},

	requiredCheck : function(value,err) {
		if(value=="" || value==undefined){
			this._errs += err + "必须输入 \r";
		}
	},

	requiredRadioCheck : function(elm,err) {
		flag=false;
		for(i=0;i<elm.length;i++){
			if(elm[i].checked){flag=true;}
		}
		if(!flag){
			this._errs += err + "必须输入 \r";
		}
	},

	lengthCheck : function(value,max,err) {
		if(value!="" && value!=undefined){
			if(value.length>max){
				this._errs += "请在"+ err +"中输入" + max + "个字符以内 \r";
			}
		}
	},
	
	passwordCheck : function(value1,value2) {
		if(value1!="" && value1!=value2){

			this._errs += "请输入相同的密码 \r";

		}
	},
	passwordChgCheck : function(value1,value2) {
		if(value1!="" && value1==value2){

			this._errs += "请输入新的密码  \r";

		}
	},

	numberTypeCheck : function(value,err){
		if(value!="" && value!=undefined){
			if(isNaN(value)){
				this._errs += "请在"+ err  +"中输入数字\r";
			}
		}
	},

	dateTypeCheck : function(value,err){
		if(value!="" && value!=undefined){
			var reg=new RegExp("^[0-9]{4}-[0-9]{2}-[0-9]{2}$","gi");
			if(!reg.test(value)){
				this._errs += "请在"+ err  +"中输入日期\r";
			}else{
				var year =value.substring(0,4);
				var month=value.substring(5,7);
				var day  =value.substring(8,10);
				var dat  =new Date(year,month-1,day);
				if(year!=dat.getFullYear() || month-1!=dat.getMonth() || day!=dat.getDate()){
					this._errs += "请在"+ err  +"中输入日期\r";
				}
			}
		}
	},

	rangeCheck : function(value,max,min,err){
		if(value!="" && value!=undefined){
			if(isNaN(value)){
				this._errs += "请在"+ err  +"中输入数字\r";
			}else{
				val=parseInt(value,10);
				if(val<min || val>max){
					this._errs += "请在"+ err  +"中输入"+ min +"到"+ max +"之间的数字\r";
				}
			}
		}
	},

	regExCheck : function(value,ptn,err){
		if(value!="" && value!=undefined){
			var reg=new RegExp(ptn,"gi");
			if(!reg.test(value)){
				this._errs += "请在"+ err  +"中输入正确的值\r";
			}
		}
	}

};
