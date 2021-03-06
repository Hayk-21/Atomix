//SLIDER for 30 SLides
let documentWidth = document.body.clientWidth;

console.log(documentWidth);

if ( documentWidth > 1280 ){
    let swiper1 = new Swiper('.swiper-container', {
        slidesPerView: 5,
        spaceBetween: 45,
        slidesPerGroup: 5,
        loop: false,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: false,
            backgroundColor: '#303030'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
}else {
    let swiper1 = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 35,
        slidesPerGroup: 3,
        loop: false,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: false,
            backgroundColor: '#303030'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
}




//Navbar-Servicess-Toggle Menu
let button = document.querySelector("#navButton")
let ul = document.querySelector("#hideenLi")
let counter  = 0;



button.addEventListener("click",()=>{
    if(counter>0){
        ul.style.display = 'none'
        counter-=1
    }else{
        ul.style.display = 'block'
        counter+=1
    }
})

//Copy Button
let copyButton = document.querySelector("#copyButton")
let input = document.querySelector("#copyInput");

copyButton.addEventListener("click",()=>{
    input.select();
    input.setSelectionRange(0, 99999)
    document.execCommand("copy");
})


let languageTransitionImplement = 0;
let whiteLine = document.querySelector("#whiteLine")
let allContant = document.querySelector("#allContant")
let footer = document.querySelector("#footer")
let language = document.querySelector("#language")



const languageList = document.querySelector('.languageList');
const languageButton = document.querySelector('.languageButton');

languageButton.addEventListener('click', showHideLanguage);


whiteLine.addEventListener("click",()=>{
    if (languageTransitionImplement > 0) {
        languageList.classList.remove('block')
    }
})
allContant.addEventListener("click",()=>{
    if (languageTransitionImplement > 0) {
        languageList.classList.remove('block')
    }
})
footer.addEventListener("click",()=>{
    if (languageTransitionImplement > 0) {
        languageList.classList.remove('block')
    }
})
function showHideLanguage() {    
    if (languageList.classList.contains('block')) {
        languageList.classList.remove('block')
        languageTransitionImplement-=1
    } else {
        languageList.classList.add('block')
        languageTransitionImplement+=1        
    }
}
