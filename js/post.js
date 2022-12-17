let submit = document.getElementsById('submit');
submit.addEventListener('click', post());

function post(){
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'action.php', true);
    xhr.onload = function () {
        // PHPスクリプトからのレスポンスを処理する
    };
}
