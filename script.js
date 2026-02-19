document.querySelectorAll(".skills-box").forEach(card =>{
    card.addEventListener('click', () =>{
        card.classList.toggle('flipped');
    });
});

const aboutMe = document.getElementById("aboutMe");
const experience = document.getElementById("experience");
const education = document.getElementById("education");

const aboutMeText = document.getElementById("aboutMeText");
const experienceText = document.getElementById("experienceText");
const educationText = document.getElementById("educationText");

aboutMe.addEventListener("click", () =>{
    experienceText.classList.remove("active");
    educationText.classList.remove("active");
    aboutMeText.classList.add("active");
});

experience.addEventListener("click", () =>{
    aboutMeText.classList.remove("active");
    educationText.classList.remove("active");
    experienceText.classList.add("active");
});

education.addEventListener("click", () =>{
    aboutMeText.classList.remove("active");
    experienceText.classList.remove("active");
    educationText.classList.add("active");
});

let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
}

const typed = new Typed('.multiple-text', {
    strings: ['Data Analyst', 'Financial Analyst', 'Data Analyst', 'Financial Analyst', ],
    typeSpeed: 80,
    backSpeed: 80,
    backDelay: 1200,
    loop: true,
});

