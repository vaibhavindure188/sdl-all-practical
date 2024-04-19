let uid = document.getElementById('uid');
let pass = document.getElementById('pass');
let name1 = document.getElementById('name');
let address = document.getElementById('address');
let zip = document.getElementById('zip');
let email = document.getElementById('email');
let lang = document.getElementById('lang');
let cityOther = document.getElementById('cityOther');
let about = document.getElementById('about');

function valid_uid(uid,min,max){
    let val = uid.value.trim();
    if(val.length < min || val.length > max  || val.length == 0){
        uid.focus();
        alert(`user id  not be empty & max lenght ${max} & min lenght ${min}`);
        return;
    }
}

const validation = ()=>{
    if(valid_uid(uid,2,20)){
        if(valid_pass(pass,6,20)){
            if(valid_name(name1,2,20)){
                if(valid_addr(address,20)){
                    if(valid_zip(zip,6)){
                        if(valid_email(email)){
                            if(valid_uid(about,20)){
                                return true;
                            }
                        }
                    }
                }
            }
        }
    }

    else return false;
}

let ans = validation();

if(ans == true) {
    alert("registration successfull");
}



