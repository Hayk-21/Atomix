
// BIG BUTTONS
let firstStepButton1 = document.querySelector("#but1_1")
let firstStepButton2 = document.querySelector("#but1_2")
let firstStepButton3 = document.querySelector("#but1_3")
let firstStepButton4 = document.querySelector("#but1_4")

let secondStepButton1 = document.querySelector("#but2_1")
let secondStepButton2 = document.querySelector("#but2_2")
let secondStepButton3 = document.querySelector("#but2_3")
let secondStepButton4 = document.querySelector("#but2_4")

//SMALL BUTTON
let smallButton1_1 = document.querySelector("#smallButton1_1")
let smallButton1_2 = document.querySelector("#smallButton1_2")
let smallButton1_3 = document.querySelector("#smallButton1_3")
let smallButton1_4 = document.querySelector("#smallButton1_4")

let smallButton2_1 = document.querySelector("#smallButton2_1")
let smallButton2_2 = document.querySelector("#smallButton2_2")
let smallButton2_3 = document.querySelector("#smallButton2_3")
let smallButton2_4 = document.querySelector("#smallButton2_4")

// BIG BUTTON CONTENTS
let firstContent1 = document.querySelector(".button1_content");
let firstContent2 = document.querySelector(".button2_content");
let firstContent3 = document.querySelector(".button3_content");
let firstContent4 = document.querySelector(".button4_content");

let secondContent1 = document.querySelector(".button5_content");
let secondContent2 = document.querySelector(".button6_content");
let secondContent3 = document.querySelector(".button7_content");
let secondContent4 = document.querySelector(".button8_content");


//Circles 
let circle2 = document.querySelector("#circle2")
let circle3 = document.querySelector("#circle3")
let circle4 = document.querySelector("#circle4")
let circle5 = document.querySelector("#circle5")
let circle6 = document.querySelector("#circle6")
let circle7 = document.querySelector("#circle7")
let circle8 = document.querySelector("#circle8")
let circle9 = document.querySelector("#circle9")
let circle10 = document.querySelector("#circle10")
circle2.style.backgroundColor='yellow'

let smallCircle1_1 = document.querySelector("#smallCircle1_1")
let smallCircle1_2 = document.querySelector("#smallCircle1_2")
let smallCircle1_3 = document.querySelector("#smallCircle1_3")
let smallCircle1_4 = document.querySelector("#smallCircle1_4")

smallCircle1_3.style.backgroundColor='violet'

let smallCircle2_1 = document.querySelector("#smallCircle2_1")
let smallCircle2_2 = document.querySelector("#smallCircle2_2")
let smallCircle2_3 = document.querySelector("#smallCircle2_3")
let smallCircle2_4 = document.querySelector("#smallCircle2_4")



let truthy1 = 0;
let truthy2 = 0;
let truthy3 = 0;
let truthy4 = 0;
let truthy5 = 0;
let truthy6 = 0;
let truthy7 = 0;
let truthy8 = 0;

let smalCircleTruthy1 = 0;
let smalCircleTruthy2 = 0;
let smalCircleTruthy3 = 0;
let smalCircleTruthy4 = 0;
let smalCircleTruthy5 = 0;
let smalCircleTruthy6 = 0;
let smalCircleTruthy7 = 0;
let smalCircleTruthy8 = 0;

//BIG CLICK BUTTONS
firstStepButton1.addEventListener("click",()=>{
    firstContent1.style.display = 'block';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
    if(truthy1 > 0){
        circle2.style.backgroundColor = ""
        truthy1-=1
    }else{
        circle2.style.backgroundColor = "yellow"
        truthy1+=1
    }
})

firstStepButton2.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'block';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
    if(truthy2 > 0){
        circle3.style.backgroundColor = ""
        truthy2-=1
    }else{
        circle3.style.backgroundColor = "yellow"
        truthy2+=1
    }
})

firstStepButton3.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'block';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
    if(truthy3 > 0){
        circle4.style.backgroundColor = ""
        truthy3-=1
    }else{
        circle4.style.backgroundColor = "yellow"
        truthy3+=1
    }
})

firstStepButton4.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'block';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
    if(truthy4 > 0){
        circle5.style.backgroundColor = ""
        circle6.style.backgroundColor = ""
        truthy4-=1
    }else{
        circle5.style.backgroundColor = "yellow"
        circle6.style.backgroundColor = "yellow"
        truthy4+=1
    }
})

secondStepButton1.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'block';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
    if(truthy5 > 0){
        circle7.style.backgroundColor = ""
        truthy5-=1
    }else{
        circle7.style.backgroundColor = "yellow"
        truthy5+=1
    }
})

secondStepButton2.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'block';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
    if(truthy6 > 0){
        circle8.style.backgroundColor = ""
        truthy6-=1
    }else{
        circle8.style.backgroundColor = "yellow"
        truthy6+=1
    }
})

secondStepButton3.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'block';
    secondContent4.style.display = 'none';
    if(truthy7 > 0){
        circle9.style.backgroundColor = ""
        truthy7-=1
    }else{
        circle9.style.backgroundColor = "yellow"
        truthy7+=1
    }
})

secondStepButton4.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'block';
    if(truthy8 > 0){
        circle10.style.backgroundColor = ""
        truthy8-=1
    }else{
        circle10.style.backgroundColor = "yellow"
        truthy8+=1
    }
})



//SMALL CLICK BUTTONS
smallButton1_1.addEventListener("click",()=>{
    firstContent1.style.display = 'block';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
})

smallButton1_2.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'block';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
})

smallButton1_3.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'block';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
})

smallButton1_4.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'block';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
})

smallButton2_1.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'block';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
})

smallButton2_2.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'block';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'none';
})

smallButton2_3.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'block';
    secondContent4.style.display = 'none';
})

smallButton2_4.addEventListener("click",()=>{
    firstContent1.style.display = 'none';
    firstContent2.style.display = 'none';
    firstContent3.style.display = 'none';
    firstContent4.style.display = 'none';
    secondContent1.style.display = 'none';
    secondContent2.style.display = 'none';
    secondContent3.style.display = 'none';
    secondContent4.style.display = 'block';
})

// Active class

// Get the container element
let btnContainer = document.getElementById("block_2020_1");

// Get all buttons with class="btn" inside the container
let btns = btnContainer.getElementsByClassName("but_2021");

// Loop through the buttons and add the active class to the current/clicked button
for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

