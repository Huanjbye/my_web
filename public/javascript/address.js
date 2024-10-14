// xuat hien dien dia chi
const addressbtn = document.querySelector('.header__address');
addressbtn.addEventListener("click", function(){
    document.querySelector('.address_form').style.display = 'flex';
});
// tat address form
const exitbtn = document.querySelector('.exit_address_form');
exitbtn.addEventListener("click", function(){
    document.querySelector('.address_form').style.display = 'none';
});
