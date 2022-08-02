function check_input() {
    if(!document.members.id.value) {
        alert("아이디를 입력해주세요");
        document.member.id.focuse();
        return;
    }
    if(!document.members.pas.value) {
        alert("비밀번호를 입력해주세요");
        document.member.pass.focuse();
        return;
    }
    if(!document.members.pass_confirm.value) {
        alert("비밀번호 확인을 입력해주세요");
        document.member.pass_confirm.focuse();
        return;
    }
    if(!document.members.name.value) {
        alert("이름을 입력해주세요");
        document.member.name.focuse();
        return;
    }
    if(!(document.members.license_num1.value || document.members.license_num2.value) || 
        document.members.license_num3.value || document.members.license_num4.value ){
        alert("면허증 번호를 입력해주세요");
        document.member.license_num1.focuse();
        document.member.license_num2.focuse();
        document.member.license_num3.focuse();
        document.member.license_num4.focuse();

        return;
    }
    document.members.submit();
}

function reset_form() {
    document.members.id.value = "";
    document.members.pass.value = "";
    document.members.pass_confirm.value = "";
    document.members.name.value = "";
    document.members.license_num1.value = "";
    document.members.license_num2.value = "";
    document.members.license_num3.value = "";
    document.members.license_num4.value = "";
    document.members.id.focuse();
    
    return;
}

function check_id() {
    window.open("/source/Project2/php/idcheck.php?id="+document.members.id.value, "IDcheck",
    "left=700,top=300,width=380, height=160, scrollbars=no, resizable=yes");
}

function check_pass() {
    var p = document.getElementById('pass').value; 
    var p_cf = document.getElementById('pass_confirm').value; 

    if (p!=p_cf) { 
    document.getElementById('pw_check_msg').innerHTML = "비밀번호가 다릅니다. 다시 확인해 주세요."; 
    } 
    else { 
        document.getElementById('pw_check_msg').innerHTML = ""; 
    } 
    if (p_cf=="") { 
    document.getElementById('pw_check_msg').innerHTML = ""; 
    } 
}

function check() {
    var t1 = document.getElementById('name').value;
    var t2 = document.getElementById('id').value;
    var t3 = document.getElementById('pass').value;
    var t4 = document.getElementById('pass_confirm').value;
    var t5 = document.getElementById('birth').value;
    var t6 = document.getElementById('license_num1').value;
    var t7 = document.getElementById('license_num2').value;
    var t8 = document.getElementById('license_num3').value;
    var t9 = document.getElementById('license_num4').value;
    
    console.log("name : " + t1
            + "id : " + t2
            + "pass : " + t3
            + "passCon : " + t4
            + "birth : " + t5
            + "lNum1 : " + t6
            + "lNum2 : " + t7
            + "lNum3 : " + t8   
            + "lNum4 : " + t9
            )
}

