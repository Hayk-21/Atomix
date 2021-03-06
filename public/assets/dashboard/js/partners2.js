let container = document.querySelector('.partners2-cardContainer');
let seeMore = document.querySelector('.partners2-seeMore');
let languageTransitionImplement = 0;
let whiteLine = document.querySelector("#whiteLine")
let allContant = document.querySelector("#allContant")
let footer = document.querySelector("#footer")
let language = document.querySelector("#language")





let logoContainer = document.querySelector("#logoContainer")
let langBut = document.querySelector("#langBut")
let img1 = document.querySelector("#flagImg")
let img2 = document.querySelector("#img2")



// adding divs with fragment
// function addDiv() {
//     let fr = new DocumentFragment();
//
//     for (let i = 0; i<=5; i++) {
//         let div = document.createElement("div");
//         div.classList.add('partners2-card');
//         fr.append(div);
//     }
//
//     return fr
// }



// adding divs with array
function addDiv() {

    let result = [];

    for (let i = 0; i <= 5; i++) {
        let div = document.createElement("div");
        for (let j = 0; j <= 1; j++) {
            let p = document.createElement("p");
            div.append(p);
        }
        div.classList.add('partners2-card');
        result.push(div);
    }

    return result

}

//
seeMore.addEventListener('click', () => {
    container.append(...addDiv());
})

let button = document.querySelector("#navButton")
let ul = document.querySelector("#hideenLi")
let counter = 0;


button.addEventListener("click", () => {
    if (counter > 0) {
        ul.style.display = 'none'
        counter -= 1
    } else {
        ul.style.display = 'block'
        counter += 1
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



//show and hide language list, and hiding list from clicking everywhere
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

// logoContainer.addEventListener("click",(e)=>{
//     if( e.target === langBut ||  e.target === img1 || e.target === img2){
//         languageList.classList.add('block')
//     }
// })


let logOut = document.querySelector('.logOut');
let walletLiSpanArray = document.querySelectorAll('.walletLi>span');


logOut.addEventListener('click', () => {
    console.log('hello world');
    walletLiSpanArray.forEach(item => {
        if (getComputedStyle(item).display === 'block'){
            item.style.display = 'none'
        }else {
            item.style.display = 'block'
        }
    })
})




