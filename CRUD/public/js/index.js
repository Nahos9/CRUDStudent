const nav = document.querySelector('.nav-hidden')

console.log(nav);

window.addEventListener('scroll',()=>{
    console.log(window.scrollY);

    if(window.scrollY >= 100)
    {
        nav.style.top=0;
    }else{
        nav.style.top= -100 +"px";
    }
})