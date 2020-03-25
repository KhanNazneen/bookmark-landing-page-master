const burger = document.querySelector('.nav-hamburger');
const header = document.querySelector('.header');
const nav = document.querySelector('.nav-lists')

console.log(header)

burger.addEventListener('click', () => {
    header.classList.toggle('header-mobile')
    burger.classList.toggle('nav-hamburger-close')
    burger.classList.toggle('nav-hamburger')
    nav.classList.toggle('nav-active')
})

// FEATURES

const tabLists = document.querySelectorAll("[role='tab']");
const tabContents = document.querySelectorAll("[role='tabpanel']")

tabLists.forEach(tab => {
    tab.addEventListener('click', () => {
        // select targeted tab
        let tabPanelId = tab.getAttribute("aria-controls")
        let targetTabPanel = document.querySelector("#" + tabPanelId);

        // deselect all the tabs
        tabLists.forEach(tab => {
            tab.setAttribute("aria-selected", "false")
        });
        
        // hide all the tab Panels
       tabContents.forEach(tabContent => {
           tabContent.setAttribute("aria-hidden", "true")
       });
        // show target panel
        tab.setAttribute("aria-selected", "true")
        targetTabPanel.setAttribute("aria-hidden", "false")
    });
});

// FAQS

const questions = document.querySelectorAll('.question');
const answers = document.querySelectorAll('.answer');


questions.forEach((list, i) => {
    list.addEventListener('click', () => {
        if (list.classList.contains("active")) {
            list.classList.remove("active")
        } else {
            list.classList.add("active")
        }
        answers[i].classList.toggle("hide")
    })
});


// EMAIL CALLOUT

// simple regular expression for email validation
const re = /[\w]+@(\w+\.)+[a-zA-Z]+/;

let submitBtn = document.getElementById('submit-btn')
console.log(submitBtn);
submitBtn.addEventListener('click', event => {
    event.preventDefault();

    const emailInput = document.getElementById('email');
    if(!re.test(emailInput.value)) {
        document.querySelector('.invalid-feedback').style.backgroundColor = "hsl(0, 94%, 66%)";
        emailInput.classList.add('invalid');
    }
})
