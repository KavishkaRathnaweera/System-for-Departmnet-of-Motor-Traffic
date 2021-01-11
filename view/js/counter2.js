function Sbutton(verified) {
    if(verified=="Yes"){
        document.location = "counter2View/signatureView.php";
    }
    
}
function Fbutton(verified) {
    if(verified=="Yes"){
    document.location = "counter2View/FprintView.php";
    }
}
function Pbutton(verified) {
    if(verified=="Yes"){
    document.location = "counter2View/photoView.php";
    }
}
function backButton() {
    document.location = "../counter2View.php";
}
function CounterTwoLogout() {

    document.location = "../index.php";
}
function takeButton() {
    // document.location="photoView.php";
}
function deleteButton() {
    // document.location="photoView.php";
}
function saveButton() {
    // document.location="photoView.php";
}
function cancleButton() {
    // document.location="photoView.php";
}

