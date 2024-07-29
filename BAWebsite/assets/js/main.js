/*==================== SHOW MENU ====================*/
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
    
    // Validate that variables exist
    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
// // 選取所有具有 id 屬性的 section 元素，並將它們存入 sections 常量中。這些元素將用來確定當前滾動到的區段。
// const sections = document.querySelectorAll('section[id]')
// // 定義一個名為 scrollActive 的函數，這個函數將在滾動事件發生時執行。
// function scrollActive(){
//     // 取得當前頁面的垂直滾動位置（即頁面頂部到當前視窗頂部的距離），並將其存入 scrollY 常量中。
//     const scrollY = window.pageYOffset

//     sections.forEach(current =>{
//         const sectionHeight = current.offsetHeight
//         // 取得當前 section 元素的頂部位置，並將其減去 XX 像素的偏移量，將結果存入 sectionTop 常量中。這個偏移量可以用來調整滾動判斷的靈敏度。
//         const sectionTop = current.offsetTop - 200;
//         sectionId = current.getAttribute('id')

//         if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
//             document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
//         }else{
//             document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
//         }
//     })
// }
// window.addEventListener('scroll', scrollActive)


$(document).ready(function() {
    const sections = $('section[id]');
    const options = {
      root: null, // 表示相對於視口
      rootMargin: '0px',
      threshold: 0.8 // 50%的區域可見時觸發回調
    };
  
    function scrollActive(entries, observer) {
      entries.forEach(entry => {
        const sectionId = entry.target.id;
        const navLink = $('.nav__menu a[href*=' + sectionId + ']');
  
        if (entry.isIntersecting) {
          navLink.addClass('active-link');
        } else {
          navLink.removeClass('active-link');
        }
      });
    }
  
    const observer = new IntersectionObserver(scrollActive, options);
  
    sections.each(function() {
      observer.observe(this);
    });
  });

/*==================== CHANGE BACKGROUND HEADER ====================*/ 
function scrollHeader(){
    const nav = document.getElementById('header')
    // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 200) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*==================== SHOW SCROLL TOP ====================*/ 
function scrollTop(){
    const scrollTop = document.getElementById('scroll-top');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)

/*==================== LOGIN ====================*/ 


$(document).ready(function() {
  // 當按下會員登入按鈕時，動態加載login.php並顯示彈出視窗
  $("#loginButton").click(function() {
      $("#loginContainer").load('./backend/login.php', function() {
          $("#loginModal").css("display", "block");

          // 添加關閉彈出視窗的功能
          $(".close").click(function() {
              $("#loginModal").css("display", "none");
          });

          // 當點擊彈出視窗外部時，隱藏彈出視窗
          $(window).click(function(event) {
              if (event.target.id == "loginModal") {
                  $("#loginModal").css("display", "none");
              }
          });
      });
  });

  // 當按下忘記密碼按鈕時，動態加載forgot.php並顯示彈出視窗
  $(document).on('click', '#forgotButton', function() {
      $("#loginContainer").load('./backend/forgot.php', function() {
          $("#forgotModal").css("display", "block");

          // 添加關閉彈出視窗的功能
          $(".close").click(function() {
              $("#forgotModal").css("display", "none");
          });

          // 當點擊彈出視窗外部時，隱藏彈出視窗
          $(window).click(function(event) {
              if (event.target.id == "forgotModal") {
                  $("#forgotModal").css("display", "none");
              }
          });
      });
  });

  // 當按下尚未註冊按鈕時，動態加載reg.php並顯示彈出視窗
  $(document).on('click', '#registerButton', function() {
      $("#loginContainer").load('./backend/reg.php', function() {
          $("#regModal").css("display", "block");

          // 添加關閉彈出視窗的功能
          $(".close").click(function() {
              $("#regModal").css("display", "none");
          });

          // 當點擊彈出視窗外部時，隱藏彈出視窗
          $(window).click(function(event) {
              if (event.target.id == "regModal") {
                  $("#regModal").css("display", "none");
              }
          });
      });
  });
});

// $(document).ready(function(){
//     // 當按下會員登入按鈕時，動態加載login.php並顯示彈出視窗
//     $("#loginButton").click(function(){
//         $("#loginContainer").load('./backend/login.php', function() {
//             $("#loginModal").css("display", "block");

//             // 添加關閉彈出視窗的功能
//             $(".close").click(function(){
//                 $("#loginModal").css("display", "none");
//             });

//             // 當點擊彈出視窗外部時，隱藏彈出視窗
//             $(window).click(function(event){
//                 if (event.target.id == "loginModal") {
//                     $("#loginModal").css("display", "none");
//                 }
//             });
//         });
//     });
// });




/*==================== DARK LIGHT THEME ====================*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx-moon' : 'bx-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'bx-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})


/*==================== SCROLL REVEAL ANIMATION ====================*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 2000,
    reset: true
});

sr.reveal(`.home__data, .home__img,
            .about__data, .about__img,
            .services__content, .menu__content,
            .app__data, .app__img,
            .contact__data, .contact__button,
            .footer__content`, {
    interval: 200
})