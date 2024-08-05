// const wrapper=document.querySelector('.wrapper');
// const btnPopup=document.querySelector('.btnLogin-popup');
// const iconclose=document.querySelector('.icon-close');


// btnPopup.addEventListener('Click',()=>{
//     wrapper.classList.add('active-popup');
// });

// iconclose.addEventListener('Click',()=>{
//     wrapper.classList.remove('active-popup');
// });


console.log("script running...")
document.querySelector('.icon-close').style.display='none';
document.querySelector('.hamberger').addEventListener("click",()=>{
    document.querySelector('.aside').classList.toggle('sidebarGo')
    if(document.querySelector('.aside').classList.contains('sidebarGo')){
        document.querySelector('.btnLogin-popup').style.display='inline'
        document.querySelector('.icon-close').style.display='none'
    }
    else{
        document.querySelector('.btnLogin-popup').style.display='none'
        document.querySelector('.icon-close').style.display='inline'
    }
})





 
