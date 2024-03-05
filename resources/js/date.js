const dateLabel = document.querySelector('#date-label');
const dateInput = document.querySelector('#date-input');
const fakeDateInput = document.querySelector('#fake-date-input');
const dateRegex = /^(20\d\d)-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/;

const realToFakeDate = date => {
    if(dateRegex.test(date)) {
        let [y, m, d] = date.substring(2, 10).split('-');
        fakeDateInput.value = `${d}/${m}/${y}`;
    }else{
        fakeDateInput.value = '';
    }
};

dateLabel.onclick = () => {
    dateInput.showPicker();
};

dateInput.onchange = e => {
    realToFakeDate(e.target.value);
};

fakeDateInput.oninput = e => {
    if(e.target.value.length !== 8) return;
    let date = e.target.value;
    let  [d, m, y ] = date.split('/');
    let result = `20${y}-${m}-${d}`;
    if(dateRegex.test(result)) {
        dateInput.value = result;
    }
};

fakeDateInput.onchange = () => {
    realToFakeDate(dateInput.value);
};
