window.name = "edit";

function refresh(FROM,TO){
  if(TO == 1){
    if( FROM ==2 ){
      CopyQuery2('1');
    }else{
      CopyQuery3('1');
    }
  }
  if(TO == 2){
    if( FROM ==1 ){
      CopyQuery1('2');
    }else{
      CopyQuery3('2');
    }
  }
  if(TO == 3){
    if( FROM ==1 ){
      CopyQuery1('3');
    }else{
      CopyQuery2('3');
    }
  }
//  document.forms["myFORM"].submit();
}

function anchor(){
  str = navigator.userAgent.toUpperCase();
  if (str.indexOf("MAC") >= 0) {
    return false;
  }else{
    location.href = "#a";
  }
}


function setTF(cOBJ,fName){
  document.myFORM[fName].disabled = cOBJ.checked;
}

function submit(mAddress){
  winname = window.open("","winname","width=540,height=550,toolbar=yes,scrollbars=yes");
  document.forms["mapFORM"].target = winname.name;
  document.forms["mapFORM"].action = "mapget2.cgi";
  document.forms["mapFORM"].elements["Address"].value = mAddress;
  document.forms["mapFORM"].submit();
}

function CopyQuery1(Dist){
  fOBJ = document.myFORM;
  keitai1 = fOBJ.elements['keitai1'].selectedIndex;
  ky1_kind = fOBJ.elements['ky1_kind'].selectedIndex;
  ky1_from = fOBJ.elements['ky1_from'].value;
  ky1_to = fOBJ.elements['ky1_to'].value;
  ky1_info = fOBJ.elements['ky1_info'].value;
  sikaku1 = fOBJ.elements['sikaku1'].value;
  jikan1 = fOBJ.elements['jikan1'].value;
  kyujitu1 = fOBJ.elements['kyujitu1'].value;
  taigu1 = fOBJ.elements['taigu1'].value;
  koutsuuhi1_info = fOBJ.elements['koutsuuhi1_info'].value;
  training_period1 = fOBJ.elements['training_period1'].value;
  training_ky1 = fOBJ.elements['training_ky1'].value;
  training_period_kind1 = fOBJ.elements['training_period_kind1'].value;

  if(Dist == 2){
    fOBJ.elements["keitai2"].options[keitai1].selected = true;
    fOBJ.elements['ky2_kind'].options[ky1_kind].selected = true;
    fOBJ.elements['ky2_from'].value = ky1_from;
    fOBJ.elements['ky2_to'].value = ky1_to;
    fOBJ.elements['ky2_info'].value = ky1_info;
    fOBJ.elements['mikeiken2'].checked = fOBJ.elements['mikeiken1'].checked;
    fOBJ.elements['sikaku2'].value = sikaku1;
    fOBJ.elements['jikan2'].value = jikan1;
    fOBJ.elements['kyujitu2'].value = kyujitu1;
    fOBJ.elements['koutsuuhi2_info'].value = koutsuuhi1_info;
    fOBJ.elements['training_period2'].value = training_period1;
    fOBJ.elements['training_ky2'].value = training_ky1;
    fOBJ.elements['training_period_kind2'].value = training_period_kind1;
    for (i=0; i<3; i++) fOBJ.elements['koutsuuhi2'][i].checked = fOBJ.elements['koutsuuhi1'][i].checked;
    fOBJ.elements['taigu2'].value = taigu1;
  }

  if(Dist == 3){
    fOBJ.elements["keitai3"].options[keitai1].selected = true;
    fOBJ.elements['ky3_kind'].options[ky1_kind].selected = true;
    fOBJ.elements['ky3_from'].value = ky1_from;
    fOBJ.elements['ky3_to'].value = ky1_to;
    fOBJ.elements['ky3_info'].value = ky1_info;
    fOBJ.elements['mikeiken3'].checked = fOBJ.elements['mikeiken1'].checked;
    fOBJ.elements['sikaku3'].value = sikaku1;
    fOBJ.elements['jikan3'].value = jikan1;
    fOBJ.elements['kyujitu3'].value = kyujitu1;
    fOBJ.elements['koutsuuhi3_info'].value = koutsuuhi1_info;
    fOBJ.elements['training_period3'].value = training_period1;
    fOBJ.elements['training_ky3'].value = training_ky1;
    fOBJ.elements['training_period_kind3'].value = training_period_kind1;
    for (i=0; i<3; i++) fOBJ.elements["koutsuuhi3"][i].checked = fOBJ.elements["koutsuuhi1"][i].checked;
    fOBJ.elements['taigu3'].value = taigu1;
  }
}




function CopyQuery2(Dist){
  fOBJ = document.myFORM;
  keitai2 = fOBJ.elements['keitai2'].selectedIndex;
  ky2_kind = fOBJ.elements['ky2_kind'].selectedIndex;
  ky2_from = fOBJ.elements['ky2_from'].value;
  ky2_to = fOBJ.elements['ky2_to'].value;
  ky2_info = fOBJ.elements['ky2_info'].value;
  sikaku2 = fOBJ.elements['sikaku2'].value;
  jikan2 = fOBJ.elements['jikan2'].value;
  kyujitu2 = fOBJ.elements['kyujitu2'].value;
  taigu2 = fOBJ.elements['taigu2'].value;
  koutsuuhi2_info = fOBJ.elements['koutsuuhi2_info'].value;
  training_period2 = fOBJ.elements['training_period2'].value;
  training_ky2 = fOBJ.elements['training_ky2'].value;
  training_period_kind2 = fOBJ.elements['training_period_kind2'].value;

  if(Dist == 1){
    fOBJ.elements["keitai1"].options[keitai2].selected = true;
    fOBJ.elements['ky1_kind'].options[ky2_kind].selected = true;
    fOBJ.elements['ky1_from'].value = ky2_from;
    fOBJ.elements['ky1_to'].value = ky2_to;
    fOBJ.elements['ky1_info'].value = ky2_info;
    fOBJ.elements['mikeiken1'].checked = fOBJ.elements['mikeiken2'].checked;
    fOBJ.elements['sikaku1'].value = sikaku2;
    fOBJ.elements['jikan1'].value = jikan2;
    fOBJ.elements['kyujitu1'].value = kyujitu2;
    fOBJ.elements['koutsuuhi1_info'].value = koutsuuhi2_info;
    fOBJ.elements['training_period1'].value = training_period2;
    fOBJ.elements['training_ky1'].value = training_ky2;
    fOBJ.elements['training_period_kind1'].value = training_period_kind2;
    for (i=0; i<3; i++) fOBJ.elements['koutsuuhi1'][i].checked = fOBJ.elements['koutsuuhi2'][i].checked;
    fOBJ.elements['taigu1'].value = taigu2;
  }

  if(Dist == 3){
    fOBJ.elements["keitai3"].options[keitai2].selected = true;
    fOBJ.elements['ky3_kind'].options[ky2_kind].selected = true;
    fOBJ.elements['ky3_from'].value = ky2_from;
    fOBJ.elements['ky3_to'].value = ky2_to;
    fOBJ.elements['ky3_info'].value = ky2_info;
    fOBJ.elements['mikeiken3'].checked = fOBJ.elements['mikeiken2'].checked;
    fOBJ.elements['sikaku3'].value = sikaku2;
    fOBJ.elements['jikan3'].value = jikan2;
    fOBJ.elements['kyujitu3'].value = kyujitu2;
    fOBJ.elements['koutsuuhi3_info'].value = koutsuuhi2_info;
    fOBJ.elements['training_period3'].value = training_period2;
    fOBJ.elements['training_ky3'].value = training_ky2;
    fOBJ.elements['training_period_kind3'].value = training_period_kind2;
    for (i=0; i<3; i++) fOBJ.elements["koutsuuhi3"][i].checked = fOBJ.elements["koutsuuhi2"][i].checked;
    fOBJ.elements['taigu3'].value = taigu2;
  }
}


function CopyQuery3(Dist){
  fOBJ = document.myFORM;
  keitai3 = fOBJ.elements['keitai3'].selectedIndex;
  ky3_kind = fOBJ.elements['ky3_kind'].selectedIndex;
  ky3_from = fOBJ.elements['ky3_from'].value;
  ky3_to = fOBJ.elements['ky3_to'].value;
  ky3_info = fOBJ.elements['ky3_info'].value;
  sikaku3 = fOBJ.elements['sikaku3'].value;
  jikan3 = fOBJ.elements['jikan3'].value;
  kyujitu3 = fOBJ.elements['kyujitu3'].value;
  taigu3 = fOBJ.elements['taigu3'].value;
  koutsuuhi3_info = fOBJ.elements['koutsuuhi3_info'].value;
  training_period3 = fOBJ.elements['training_period3'].value;
  training_ky3 = fOBJ.elements['training_ky3'].value;
  training_period_kind3 = fOBJ.elements['training_period_kind3'].value;

  if(Dist == 1){
    fOBJ.elements["keitai1"].options[keitai3].selected = true;
    fOBJ.elements['ky1_kind'].options[ky3_kind].selected = true;
    fOBJ.elements['ky1_from'].value = ky3_from;
    fOBJ.elements['ky1_to'].value = ky3_to;
    fOBJ.elements['ky1_info'].value = ky3_info;
    fOBJ.elements['mikeiken1'].checked = fOBJ.elements['mikeiken3'].checked;
    fOBJ.elements['sikaku1'].value = sikaku3;
    fOBJ.elements['jikan1'].value = jikan3;
    fOBJ.elements['kyujitu1'].value = kyujitu3;
    fOBJ.elements['koutsuuhi1_info'].value = koutsuuhi3_info;
    fOBJ.elements['training_period1'].value = training_period3;
    fOBJ.elements['training_ky1'].value = training_ky3;
    fOBJ.elements['training_period_kind1'].value = training_period_kind3;
    for (i=0; i<3; i++) fOBJ.elements['koutsuuhi1'][i].checked = fOBJ.elements['koutsuuhi3'][i].checked;
    fOBJ.elements['taigu1'].value = taigu3;
  }

  if(Dist == 2){
    fOBJ.elements["keitai2"].options[keitai3].selected = true;
    fOBJ.elements['ky2_kind'].options[ky3_kind].selected = true;
    fOBJ.elements['ky2_from'].value = ky3_from;
    fOBJ.elements['ky2_to'].value = ky3_to;
    fOBJ.elements['ky2_info'].value = ky3_info;
    fOBJ.elements['mikeiken2'].checked = fOBJ.elements['mikeiken3'].checked;
    fOBJ.elements['sikaku2'].value = sikaku3;
    fOBJ.elements['jikan2'].value = jikan3;
    fOBJ.elements['kyujitu2'].value = kyujitu3;
    fOBJ.elements['koutsuuhi2_info'].value = koutsuuhi3_info;
    fOBJ.elements['training_period2'].value = training_period3;
    fOBJ.elements['training_ky2'].value = training_ky3;
    fOBJ.elements['training_period_kind2'].value = training_period_kind3;
    for (i=0; i<3; i++) fOBJ.elements["koutsuuhi2"][i].checked = fOBJ.elements["koutsuuhi3"][i].checked;
    fOBJ.elements['taigu2'].value = taigu3;
  }
}




function clearForm(Dist){
  fOBJ = document.myFORM;

  if(Dist == 1){
    fOBJ.elements["keitai1"].options[0].selected = true;
    fOBJ.elements['ky1_kind'].options[0].selected = true;
    fOBJ.elements['ky1_from'].value = "";
    fOBJ.elements['ky1_to'].value = "";
    fOBJ.elements['ky1_info'].value = "";
    fOBJ.elements['mikeiken1'].checked = 0;
    fOBJ.elements['sikaku1'].value = "";
    fOBJ.elements['jikan1'].value = "";
    fOBJ.elements['kyujitu1'].value = "";
    for (i=0; i<3; i++) fOBJ.elements['koutsuuhi1'][i].checked = 0;
    fOBJ.elements['taigu1'].value = "";
    fOBJ.elements['koutsuuhi1_info'].value = "";
    fOBJ.elements['training_period1'].value = "";
    fOBJ.elements['training_ky1'].value = "";
    fOBJ.elements['training_period_kind1'].value = "undecided";
  }

  if(Dist == 2){
    fOBJ.elements["keitai2"].options[0].selected = true;
    fOBJ.elements['ky2_kind'].options[0].selected = true;
    fOBJ.elements['ky2_from'].value = "";
    fOBJ.elements['ky2_to'].value = "";
    fOBJ.elements['ky2_info'].value = "";
    fOBJ.elements['mikeiken2'].checked = 0;
    fOBJ.elements['sikaku2'].value = "";
    fOBJ.elements['jikan2'].value = "";
    fOBJ.elements['kyujitu2'].value = "";
    for (i=0; i<3; i++) fOBJ.elements['koutsuuhi2'][i].checked = 0;
    fOBJ.elements['taigu2'].value = "";
    fOBJ.elements['koutsuuhi2_info'].value = "";
    fOBJ.elements['training_period2'].value = "";
    fOBJ.elements['training_ky2'].value = "";
    fOBJ.elements['training_period_kind2'].value = "undecided";
  }

  if(Dist == 3){
    fOBJ.elements["keitai3"].options[0].selected = true;
    fOBJ.elements['ky3_kind'].options[0].selected = true;
    fOBJ.elements['ky3_from'].value = "";
    fOBJ.elements['ky3_to'].value = "";
    fOBJ.elements['ky3_info'].value = "";
    fOBJ.elements['mikeiken3'].checked = 0;
    fOBJ.elements['sikaku3'].value = "";
    fOBJ.elements['jikan3'].value = "";
    fOBJ.elements['kyujitu3'].value = "";
    for (i=0; i<3; i++) fOBJ.elements['koutsuuhi3'][i].checked = 0;
    fOBJ.elements['taigu3'].value = "";
    fOBJ.elements['koutsuuhi3_info'].value = "";
    fOBJ.elements['training_period3'].value = "";
    fOBJ.elements['training_ky3'].value = "";
    fOBJ.elements['training_period_kind3'].value = "undecided";
  }
}

