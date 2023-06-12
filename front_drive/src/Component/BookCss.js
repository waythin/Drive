const buttons = document.querySelectorAll('a');

buttons.forEach(btn =>{
    btn.addEventListener('click', function(e)
    {
        let x = e.clientX - e.target.offsetLeft;
        let y = e.clientY - e.target.offsetTop;

        let ripples = document.createElement('span');
        ripples.style.left = x + 'px';
        ripples.style.top = y + 'px';
        this.appendChild(ripples);

        setTimeout(() => {
            ripples.remove()
        },1000);
 
    })
})
// buttons.forEach((button) => {
//     button.onclick = function(e){
//         let x = e.clientX - e.target.offsetLeft;
//         let y = e.clientY - e.target.offsetRight;
//         let ripple = document.createElement("span");
//         ripple.style.left = `${x}px`;
//         ripple.style.right =`${y}px`;
//         this.appendChile(ripple);
//     }

// });
