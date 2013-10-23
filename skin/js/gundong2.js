
var Speed = 10; //閫熷�?姣�?
var Space = 6; //姣忔绉诲姩(px)
var PageWidth = 121; //缈婚〉瀹藉�?
var fill = 0; //鏁翠綋绉讳綅
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("Lisf6").innerHTML = GetObj("Lisf5").innerHTML;
GetObj('ISL_Conf3').scrollLeft = fill;

//GetObj("ISL_Cong2").onmouseover = function(){clearInterval(AutoPlayObj);}
//GetObj("ISL_Cong2").onmouseout = function(){AutoPlay();}

//榛樿鍥剧墖鑷姩婊氬姩
var tab00=document.getElementById("ISL_Conf3");
var tab5=document.getElementById("Lisf5");
var tab6=document.getElementById("Lisf6");
tab6.innerHTML=tab5.innerHTML;
function Marquee3(){
	if(tab6.offsetWidth-tab00.scrollLeft<=0)
		tab00.scrollLeft-=tab6.offsetWidth
	else{
		tab00.scrollLeft++;
	}
}
var MyMar3=setInterval(Marquee3,Speed);
tab00.onmouseover=function() {clearInterval(MyMar3)};
tab00.onmouseout=function() {MyMar3=setInterval(Marquee3,Speed)};

function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval('document.all.'+objName)}}

function AutoPlay(){ //鑷姩婊氬姩
 clearInterval(AutoPlayObj);
 AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',3000); //闂撮殧鏃堕棿
}

function ISL_StartAuto(){ //寮€濮嬭嚜鍔ㄦ粴�?
	MyMar3=setInterval(Marquee3,Speed);
}

function ISL_StopAuto(){ //鏆傚仠鑷姩婊氬�?
 clearInterval(MyMar3);
}

function ISL_GoUp(){ //涓婄炕寮€濮?
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
}

function ISL_StopUp(){ //涓婄炕鍋滄
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Conf3').scrollLeft % PageWidth - fill != 0){
  Comp = fill - (GetObj('ISL_Conf3').scrollLeft % PageWidth);
  CompScr();
 }else{
  MoveLock = false;
 }
}

function ISL_ScrUp(){ //涓婄炕鍔ㄤ綔
 if(GetObj('ISL_Conf3').scrollLeft <= 0){GetObj('ISL_Conf3').scrollLeft = GetObj('ISL_Conf3').scrollLeft + GetObj('Lisf5').offsetWidth}
 GetObj('ISL_Conf3').scrollLeft -= Space ;
}
function ISL_GoDown(){ //涓嬬�?
 clearInterval(MoveTimeObj);
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 ISL_ScrDown();
 MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
 tab.onmouseover=function() {clearInterval(MyMar3)};
}
function ISL_StopDown(){ //涓嬬炕鍋滄
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Conf3').scrollLeft % PageWidth - fill != 0 ){
  Comp = PageWidth - GetObj('ISL_Conf3').scrollLeft % PageWidth + fill;
  CompScr();
 }else{
  MoveLock = false;
 }

}
function ISL_ScrDown(){ //涓嬬炕鍔ㄤ綔
 if(GetObj('ISL_Conf3').scrollLeft >= GetObj('Lisf5').scrollWidth){GetObj('ISL_Conf3').scrollLeft = GetObj('ISL_Conf3').scrollLeft - GetObj('Lisf5').scrollWidth;}
 GetObj('ISL_Conf3').scrollLeft += Space ;
}
function CompScr(){
 var num;
 if(Comp == 0){MoveLock = false;return;}
 if(Comp < 0){ //涓婄�?
  if(Comp < -Space){
   Comp += Space;
   num = Space;
  }else{
   num = -Comp;
   Comp = 0;
  }
  GetObj('ISL_Conf3').scrollLeft -= num;
  setTimeout('CompScr()',Speed);
 }else{ //涓嬬�?
  if(Comp > Space){
   Comp -= Space;
   num = Space;
  }else{
   num = Comp;
   Comp = 0;
  }
  GetObj('ISL_Conf3').scrollLeft += num;
  setTimeout('CompScr()',Speed);
 }
}

