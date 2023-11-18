"use strict";


document.addEventListener("DOMContentLoaded", function () {

    /*var headerCarouselHTML = 
        "<div id='header_owl_carousel' class='header__carousel owl-carousel'>" +
                    "<div class='owl-carousel__item'>" +
                        "<img src='img/image1.jpg' alt='owl2 carousel image 1'>" + 
                    "</div>" + 
                    "<div class='owl-carousel__item'>" +
                            "<img src='img/image2.jpg' alt='owl carousel image 2 '>" +
                    "</div>" +
                    "<div class='owl-carousel__item'>" +
                        "<img src='img/image1.jpg' alt='owl2 carousel image 1'>" +
                    "</div>" +
                    "<div class='owl-carousel__item'>" +
                        "<img src='img/image2.jpg' alt='owl carousel image 2 '>" +
                    "</div>" +
                "</div>";
    var headerCarousel = document.getElementById('container_owl_carousel');
    headerCarousel.innerHTML = headerCarouselHTML;*/

    let  bbtn = document.getElementById("bmenubtn");
    let navUl = document.getElementById("nav_sliding_ul");
    //nav_sliding_ul.classList.remove("show-me");
    navUl.classList.remove("show-me");
    bbtn.onclick = function (){
        if (!nav_sliding_ul.classList.contains('show-me')){
            navUl.classList.add("show-me");
        }
        else{
            navUl.classList.remove("show-me");
        }
    }

     //OWL CAROUSEL
     
     const leftArrow = '<img src="storage/img/left-arrow.jpg">';
     const rightArrow = '<img src="storage/img/right-arrow.jpg">';
    $('#header_owl_carousel').owlCarousel({
        loop:true,
        margin: 10,
        nav:true,
        navText: [leftArrow, rightArrow],
        autoplay: true,
        autoWidth:true,
        autoHeight: true,
        dots: false,
        responsive:{
            0:{
                items:1,
                center:true,
                margin: 250,
                autoHeight: true,
                autoWidth: true,
            },
            1024:{
                items:2,
            },
            //1900:{
            //    items:2
            //}
        }
    });
    //END OWL CAROUSEL  

    //phrase_carousel begining
    $('#phrase_carousel').owlCarousel({
        loop:true,
        margin:300,
        nav:false,
        dots:true,
        autoplay: true,
        items:1,
        center:true,
        autoHeight: true,
        autoWidth: true,
        /*responsive:{
            0:{
                items:1,
                center:true,
                autoHeight: true,
                autoWidth: true,
            },
        }*/
    });

    //phrase_carousel end 
     
    //TESTING
    var mainDoc = document.getElementById('main_wrapper');
    //wholeDoc.classList.add('asd');
    //console.log(wholeDoc);
    var allTexts = document.querySelectorAll("h1, h2, h3, h4, h5, h6, p, address");
    //console.log(wholeDivs);
    //wholeDivs.setAttribute("name", "asdasd");
    
    //const buttons = document.querySelectorAll("button");
    //console.log(buttons);

    //var $;
    //$ = document.querySelectorAll.bind(document);

    var lookingFor = "div";
    function getParentByTag(elem, lookingFor) {
        lookingFor = lookingFor.toUpperCase();
        while (elem = elem.parentNode) if (elem.tagName === lookingFor) return elem;
      }

    allTexts.forEach(function(textTag){
        textTag.setAttribute("contenteditable", "false");
        textTag.setAttribute("style", "min-width:5px;");
        let content = textTag.innerHTML;
        console.log(content);
        let newElm = document.createElement('input');
        newElm.value = content;
        newElm.type='text'; 
        newElm.style.border = '1px solid red';
        newElm.size = content.length || 5;
        const d = new Date();
        newElm.name = d.getTime();
        //console.log(newElm.name);
        //newElm.name = newElm.parentNode.classList; //  getTime()
        textTag.replaceWith(newElm);
        if (textTag.childNodes){
                console.log("TC = ", textTag.textContent );
        }else{
            console.log("textTag.nodeList_____________________________________________________",textTag.childNodes);
        }
        if (textTag.textContent !== ''){
            textTag.textContent = textTag.textContent + '2'; ////////////////////////////
        }
        //console.log("NEW EL is: ", typeof newElm);
        //console.log(newElm.parentNode.className);

        newElm.replaceWith(textTag);////////////////////////////
        
        console.log(getParentByTag(newElm, lookingFor));
        //console.log($.length);

    });
    console.log(mainDoc);
    //button.setAttribute("name", "helloButton");
    //button.setAttribute("disabled", "");
  });


/////////////////////////////////////// tests remove after 
 document.addEventListener("DOMContentLoaded",function () {
        
        var myFunction = function(){
            console.log("Changed !!!"); 
            var mainDoc = document.getElementById('main_wrapper');
            //wholeDoc.classList.add('asd2');
            console.log(mainDoc);
        }
        //myFunction();
        window.setTimeout(myFunction, 15000);
    });

/////////////////////////////////////// tests remove after 
const a = {
    x: 1,
    y: "2",
    z: function(){
        console.log(a);
    }
}
console.log(typeof a);
console.log("x=", typeof a.x);
console.log("y=", typeof a.y);
console.log("f z=", typeof a.z);
console.log("void =",void " ");
a.z();
 