//progress
function Progress(){
window.onscroll = function(){myFunction()};
var p=document.createElement("p");
var div=document.createElement("div");
function myFunction(){
    var winScroll= document.body.scrollTop || document.documentElement.scrollTop;
    var height= document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled=( winScroll / height )*100;
            var progress=document.querySelectorAll(".progress-bar");
                                progress[0].className ="progress-bar";
                                    progress[0].appendChild(p);
                         progress[0].appendChild(div);
                     div.innerHTML= parseInt(scrolled)+"%";
                         p.style.width = scrolled+"%";
                                
      
}
}


//filter
function Filter(){
var inputSearch = document.getElementById("mySearch");
inputSearch.onkeyup=function (){
    var filter, ul, li, a, i;
             filter= inputSearch.value.toUpperCase();
                ul =document.getElementById("myMenu");
                li=ul.getElementsByTagName("li");
            for (i=0; i<li.length; i++){
                a= li[i].getElementsByTagName("a")[0];
                if(a.innerHTML.toUpperCase().indexOf(filter)>-1){
                    li[i].style.display="";
                }else{
                    li[i].style.display="none";
             }
        }
  

 }
}


Filter()
/*
#mySearch
#myMenu{
   li{
      a
   }
}
 */

//Progress()
//.progress-bar

