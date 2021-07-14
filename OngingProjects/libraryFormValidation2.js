function validateData(){
    if (document.formA.name.value.length==0)   {
        document.getElementById("nameError").innerHTML="Please enter your name!!";
        return;
    }


    if (document.formA.mail.value.length==0)   {
        document.getElementById("emailError").innerHTML="Please enter your Email!!";
        return;

    }
    var mail=document.formA.mail.value;
    var atPoss=mail.indexOf("@");
    var dotPoss=mail.lastIndexOf(".");
    if (atPoss < 1 || dotPoss<atPoss+2 || dotPoss+2>=mail.length){
        document.getElementById("emailError").innerHTML="Email is not valid";
        return;
    }

    if (document.formA.phone.value.length!=10)   {
        document.getElementById("phoneError").innerHTML="Please enter valid phone number!!";
        return;

    }

    if (isNaN(document.formA.phone.value)) {
        document.getElementById("phoneError").innerHTML="Please enter valid phone number!!";
        return;

    }

    if (document.formA.Address.value.length==0) {
        document.getElementById("addressError").innerHTML="Please enter your Address!!";
        return;

    }else{
        document.getElementById("successOne").innerHTML="Your Data successfully Submitted!!!";}

}



function validateAmount() {
    if (document.formB.amount.value.length == 0) {
        document.getElementById("amountError").innerHTML="Please Select an Amount";
    }else{
        document.getElementById("successTwo").innerHTML="Your amount is selected!!!";}


}



function validatePayment(){
    if ((!document.formC.method[0].checked)&& (!document.formC.method[1].checked)&&(!document.formC.method[2].checked)){
        document.getElementById("paymentError").innerHTML="Please select Your payement method";
    }else{

        document.getElementById("successThree").innerHTML="Your payment method is recorded successfully!!!";}
}