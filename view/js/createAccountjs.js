var name;
var surname;
var other;
var fullName;
var gender;
var birth;
var age;
var height;
var blood;
var vehicle;
var adress;
var phone;
var email;
var passwd;



function Validate(){
    name = document.getElementById("userDetails").elements[0].value;
    surname = document.getElementById("userDetails").elements[1].value;
    other = document.getElementById("userDetails").elements[2].value;
    fullName = document.getElementById("userDetails").elements[3].value;
    var sexMale = document.getElementById("userDetails").elements[4];
    var sexFemale = document.getElementById("userDetails").elements[5];
    birth = document.getElementById("userDetails").elements[6].value;
    age = document.getElementById("userDetails").elements[7].value;
    height = document.getElementById("userDetails").elements[8].value;
    blood = document.getElementById("userDetails").elements[9].value;
    vehicle = document.getElementById("userDetails").elements[10].value;
    adress = document.getElementById("userDetails").elements[11].value;
    phone = document.getElementById("userDetails").elements[12].value;
    email = document.getElementById("userDetails").elements[13].value;
    passwd = document.getElementById("userDetails").elements[14].value;
    var repsswd = document.getElementById("userDetails").elements[15].value;
    //alert(sexFemale+sexMale);
    var sex = !(sexMale.checked || sexFemale.checked);
    
    if(sexMale.checked){
        gender="Male"
    }
    else{
        gender="Female"
    }
    
    if(other.trim() == ''){
        other="None";
    }

    if(name.trim() == '' || surname.trim() == '' || fullName.trim() == '' || sex || birth.trim() == '' || age.trim() == '' || height.trim() == '' || blood.trim() == '' || adress.trim() == '' || phone.trim() == '' || email.trim() == '' || passwd.trim() == '' || repsswd.trim() == ''){
        alert("Please Fill out all the details")
        //document.getElementById("demo1").innerHTML="login";
    }
    else{
        if(passwd!==repsswd){
            alert("Password doesn't match");
        }
        else{
            document.getElementById("id1").disabled = false;
            document.getElementById("id2").disabled = false;
            document.getElementById("subt").disabled = true;
            //document.getElementById("demo").innerHTML="<button id='id2' onclick='fn2()'>create account</button>";
            //document.getElementById("demo1").innerHTML="<button id='id1' onclick='fn3()'>Update Details</button>";
            document.getElementById("userDetails").elements[0].disabled = true;
            document.getElementById("userDetails").elements[1].disabled = true;
            document.getElementById("userDetails").elements[2].disabled = true;
            document.getElementById("userDetails").elements[3].disabled = true;
            document.getElementById("userDetails").elements[4].disabled = true;
            document.getElementById("userDetails").elements[5].disabled = true;
            document.getElementById("userDetails").elements[6].disabled = true;
            document.getElementById("userDetails").elements[7].disabled = true;
            document.getElementById("userDetails").elements[8].disabled = true;
            document.getElementById("userDetails").elements[9].disabled = true;
            document.getElementById("userDetails").elements[10].disabled = true;
            document.getElementById("userDetails").elements[11].disabled = true;
            document.getElementById("userDetails").elements[12].disabled = true;
            document.getElementById("userDetails").elements[13].disabled = true;
            document.getElementById("userDetails").elements[14].disabled = true;
            document.getElementById("userDetails").elements[15].disabled = true;

        }
    }

   // document.getElementById("demo").innerHTML=name+suraname+other+fullName+sex+birth+age+height+blood+adress+phone+email+passwd+repsswd
    //name+suraname+other+fullName+sex+birth+age+height+blood+adress+phone+email+passwd+    sexMale.trim() == '' || sexFemale.trim() == '' || 
}

function UpdateDetails(){
    document.getElementById("userDetails").elements[0].disabled = false;
    document.getElementById("userDetails").elements[1].disabled = false;
    document.getElementById("userDetails").elements[2].disabled = false;
    document.getElementById("userDetails").elements[3].disabled = false;
    document.getElementById("userDetails").elements[4].disabled = false;
    document.getElementById("userDetails").elements[5].disabled = false;
    document.getElementById("userDetails").elements[6].disabled = false;
    document.getElementById("userDetails").elements[7].disabled = false;
    document.getElementById("userDetails").elements[8].disabled = false;
    document.getElementById("userDetails").elements[9].disabled = false;
    document.getElementById("userDetails").elements[10].disabled = false;
    document.getElementById("userDetails").elements[11].disabled = false;
    document.getElementById("userDetails").elements[12].disabled = false;
    document.getElementById("userDetails").elements[13].disabled = false;
    document.getElementById("userDetails").elements[14].disabled = false;
    document.getElementById("userDetails").elements[15].disabled = false;
    document.getElementById("id1").disabled = true;
    document.getElementById("id2").disabled = true;
    document.getElementById("subt").disabled = false;
    // document.getElementById("demo").innerHTML="";
    // document.getElementById("demo1").innerHTML="";
}



// function addToDatabse(){
//     //alert(name+" "+surname+" "+other+" "+fullName+" "+gender+" "+birth+" "+age+" "+height+" "+blood+" "+adress+" "+phone+" "+email+" "+passwd);
//   //  if(other)
//     var xhttp = new XMLHttpRequest();
//             xhttp.onreadystatechange = function() {
//                 if (this.readyState == 4 && this.status == 200)
//                 {   
//                     document.getElementById("demo").innerHTML = this.responseText;
                    
//                 }
//             };
//             var url = "../database/userDetailsAdd.php?nic="+name+"&sname="+surname+"&other="+other+"&fname="+fullName+"&gender="+gender+"&birth="+birth+"&age="+age+"&height="+height+"&blood="+blood+"&vehicle="+vehicle+"&addrs="+adress+"&phone="+phone+"&email="+email+"&psswd="+passwd;
//             xhttp.open("GET", url, true);
//             xhttp.send();

// }