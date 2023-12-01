const calendar = document.querySelector(".calendar"),
    date = document.querySelector(".date"),
    days = document.querySelector(".days"),
    prev = document.querySelector(".prev-date"),
    next = document.querySelector(".next-date");

let today = new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();

const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];

function initCalendar() {
    cons
}
initCalendar();
function prevMonth(){
    month--;
    if(month < 0){
        month = 11;
        year--;
    }
    initCalendar();
}
function nextMonth(){
    month++;
    if(month > 11){
        month = 0;
        year++;
    }
}