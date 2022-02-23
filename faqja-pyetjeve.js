var searchBarForm = document.querySelector('#search-bar-form');
var mobileFilterForumText = document.querySelector('#mobile-filter-forum-text');
var addQuestionBtn = document.querySelector('.add-question-btn');
searchBarForm.addEventListener('click', () => {
    mobileFilterForumText.style.display = 'none';
    addQuestionBtn.style.display = 'none';
})
document.body.addEventListener('click', () => {
    setTimeout(() => {
        if (searchBarForm.offsetWidth == 50) {
            mobileFilterForumText.style.display = 'block';
            addQuestionBtn.style.display = 'block';
        }
    }, 500);
})

const nav = document.querySelector('.mobile-navigation-bar');
let navTop = nav.offsetTop;

function fixedNav() {
    if (window.scrollY >= navTop) {
        nav.classList.add('fixed');
    } else {
        nav.classList.remove('fixed');
    }
}

window.addEventListener('scroll', fixedNav);

// Change to your STICKY element
let parent = document.querySelectorAll('.sticky').parentElement;

while (parent) {
    const hasOverflow = getComputedStyle(parent).overflow;
    if (hasOverflow !== 'visible') {
        console.log(hasOverflow, parent);
    }
    parent = parent.parentElement;
}

let addQuestionPopupDiv = document.querySelector('.add-question-popup-div');

function openPopup() {
    addQuestionPopupDiv.style.display = 'inline-block';
    console.log("hello")
}

function closePopup() {
    addQuestionPopupDiv.style.display = 'none';
}

var questionOptionsDiv = document.querySelector('.question-options-div');
var questionCardOptions = document.querySelector('.question-card-options');

questionOptionsDiv.addEventListener('click', () => {
    if (questionOptionsDiv.classList.contains('addMenuIconColor')) {
        questionOptionsDiv.classList.remove('addMenuIconColor')
        questionCardOptions.style.display = "none";
    } else {
        questionOptionsDiv.classList.add('addMenuIconColor')
        questionCardOptions.style.display = "block";
    }
})

let mobileNavigationDropdown = document.querySelector('.mobile-navigation-dropdown')
let mobileDropdownLinks = document.querySelector('#mobile-dropdown-links')

mobileNavigationDropdown.addEventListener('click', ()=>{
    if(mobileDropdownLinks.style.display == "none"){
        mobileDropdownLinks.style.display = "block"
    }else{
        mobileDropdownLinks.style.display = "none"
    }
})

let mobileFilterForumDiv = document.querySelector('.mobile-filter-forum-div');

mobileFilterForumText.addEventListener('click', ()=>{
    if(mobileFilterForumDiv.style.display == "none"){
        mobileFilterForumDiv.style.display = "block"
    }else{
        mobileFilterForumDiv.style.display = "none"
    }
})

let addToFavoritesBtn = document.querySelector('.fa-heart');

function addToFavorites(){
    if(addToFavoritesBtn.style.color == 'rgb(186, 168, 155)'){
        addToFavoritesBtn.style.color = 'red'
    }else{
        addToFavoritesBtn.style.color = '#BAA89B'   
    }
}