<?php

include_once 'connection.php';

$CARD_PAYMENT = "cardPayment";
$BANK_TRNF= "OnlineBankPayment";
$PAYPAL_PAYMENT = "paypalPayment";

$CardNumber = $_POST['cardNumber'];
$CardCVC = $_POST['cardCVC'];
$CardHolderName = $_POST['cardHolderName'];
$CardExpireDate = $_POST['cardExpireDate'];

$AccName = $_POST['accName'];
$accNmb = $_POST['accNmb'];
$accBankName = $_POST['accBankName'];
$accBranch = $_POST['accBranch'];


if (!isset($_POST['method'])){
   echo "Please select the payement type";
    return;
}
$type = $_POST['method'];

if (strcmp($type, $CARD_PAYMENT) == 0) {

    if (empty($CardNumber) || empty($CardCVC) || empty($CardHolderName) || empty($CardExpireDate)) {
        echo "Invalid input";

    } else {
        $query = "INSERT INTO cardpaymenttable(cardNumber,cardCVC,cardHolderName,cardExpireDate,donateId) VALUES('".$CardNumber."','".$CardCVC."','".$CardHolderName."','".$CardExpireDate."',1)";
        $insert = mysqli_query($connect, $query);

        if ($insert) {
            echo "data enterd succesully";
        } else {
            echo "data not entered" . mysqli_error($connect);
        }
    }

} elseif (strcmp($type, $BANK_TRNF) == 0) {

    if (empty($AccName) || empty($accNmb) || empty($accBankName) || empty($accBranch)) {
        echo "Invalid input";

    } else {
        $query = "INSERT INTO bankpaymenttable(AccountNumber,AccountHolderName,BankName,Branch,donateId) VALUES('".$accNmb."','".$AccName."','".$accBankName."','".$accBranch."',1)";
        $insert = mysqli_query($connect, $query);

        if ($insert) {
            echo "data enterd succesully";
        } else {
            echo "data not entered" . mysqli_error($connect);
        }
    }


} elseif (strcmp($type, $PAYPAL_PAYMENT) == 0) {




} else {

}


?>