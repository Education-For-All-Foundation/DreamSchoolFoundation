function validateForm1(){
    if (document.formOne.name.value.length==0)   {
        document.getElementById("nameError").innerHTML="Please enter your name!!";
        return;
    }


    if (document.formOne.mail.value.length==0)   {
        document.getElementById("emailError").innerHTML="Please enter your Email!!";
        return;

    }
    var mail=document.formOne.mail.value;
    var atPoss=mail.indexOf("@");
    var dotPoss=mail.lastIndexOf(".");
    if (atPoss < 1 || dotPoss<atPoss+2 || dotPoss+2>=mail.length){
        document.getElementById("emailError").innerHTML="Email is not valid";
        return;
    }

    if (document.formOne.phone.value.length!=10)   {
        document.getElementById("phoneError").innerHTML="Please enter valid phone number!!";
        return;

    }

    if (isNaN(document.formOne.phone.value)) {
        document.getElementById("phoneError").innerHTML="Please enter valid phone number!!";
        return;

    }

    if (document.formOne.Address.value.length==0) {
        document.getElementById("addressError").innerHTML="Please enter your Address!!";
        return;

    }
    document.getElementById("successOne").innerHTML="Your Data successfully Submitted!!!";

}



function validateAmount() {
    if (document.formTwo.amount.value.length === 0) {
        document.getElementById("amountError").innerHTML="Please Select an Amount";
    }else {
        document.getElementById("successTwo").innerHTML = "Your amount is selected!!!";
    }

}



function validatePayment(){
    if ((!document.formThree.method[0].checked)&& (!document.formThree.method[1].checked)&&(!document.formThree.method[2].checked)){
        document.getElementById("paymentError").innerHTML="Please select Your payement method";
    }else{

        document.getElementById("successThree").innerHTML="Your payment method is recorded successfully!!!";}
}