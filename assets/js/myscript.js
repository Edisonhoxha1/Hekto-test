var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

function favTutorial() {  
    var mylist = document.getElementById("myList");  
    document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;  
}      