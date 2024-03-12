const message = document.querySelector('#flash-message');

if(message) {
    setTimeout(() => {
        message.remove();
    }, 4000);
}
