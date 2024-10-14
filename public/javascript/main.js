function singup(){
    event.preventDefault();
    var userNanme = document.getElementById('name').value;
    var password = document.getElementById('password').value;
    var password2 = document.getElementById('password2').value;
    var user = {
        userNanme: userNanme,
        password: password,
    }
    if(password != password2){
        alert('Mật khẩu không trùng nhau');
        password2.focus();
        return false;
    }
    var json = JSON.stringify(user);
    localStorage.setItem(userNanme, json);
    alert('Đăng ký thành công');
    window.location.href = '/HTML/trang_login.html';
}

function login(){
    var userNanme = document.getElementById('name').value;
    var password = document.getElementById('password').value;
    var user = localStorage.getItem(userNanme);
    var data = JSON.parse(user);
    if(userNanme == data.userNanme && password == data.password){
        window.location.href = '/HTML/trangchu.html';
        alert('Đăng nhập thành công');    
    }
    else{
        alert('Đăng nhập thất bại');
    }
}