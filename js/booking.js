var d = new Date();
var H = d.getHours();
var M = roundedMinutes(d.getMinutes());

document.booking.fromt.value = H + ':' + M;
document.booking.tot.value = (H+1) + ':' + M;


function roundedMinutes(inminute){
    do {inminute ++;}
    while (inminute % 5 !== 0){
        if(inminute == 60){
            inminute = '00';
        }
        return inminute;
    }
}

function validateContact(){
    var phone = document.booking.phone.value.trim();
    var email = document.booking.email.value.trim();
    if(phone == '' && email ==''){
        return false;
    }else{
        return true;
    }

}