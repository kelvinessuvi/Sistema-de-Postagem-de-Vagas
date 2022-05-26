

const inputTitle = document.querySelector('#inputTitle');
const inputCity = document.querySelector('#inputCity');
const title = document.querySelector('#title');
const city = document.querySelector('#city');

inputTitle.addEventListener('focus', ()=>{
    title.classList.add('title');
})

