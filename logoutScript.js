// var timeout;

// document.onmousemove = resetTimer;
// document.onclick = resetTimer;

// function resetTimerx() {
//     clearTimeout(timeout);
//     timeout = setTimeout(function resetTimerx() { alert("3 minute warning"); }, 150000);
// }

var t;
window.onload = resetTimer();
// DOM Events
document.onmousemove = resetTimer();
document.onkeypress = resetTimer();
console.log('loaded');

function logout() {
    alert("You are now logged out.");
    location.href = '../logout.php';
}

function resetTimer() {

    clearTimeout(t);
    t = setTimeout(logout, 600000);

}