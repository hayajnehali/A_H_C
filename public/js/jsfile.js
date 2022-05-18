console.log('bj');
const { ary } = require("lodash");

// Initialize and add the map
function initMap() {
    // The location of irbid
    var irbid = { lat: 32.556957, lng: 35.847908 };
    // The map, centered at irbid
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: irbid,
    });
    // The marker, positioned at irbid
    var marker = new google.maps.Marker({
      position: irbid,
      map: map,
    });
}
  window.initMap = initMap;


function showcar(){
      document.getElementById('showcar').style.display = "block";
      document.getElementById('showadd').style.display = "none";
}

function showadd(){
    document.getElementById('showcar').style.display = "none";
    document.getElementById('showadd').style.display = "block";
}

function fun(smullimg){
    var bigimg = document.getElementById('bigimg');
    bigimg.src = smullimg.src;
}

/*
function fi(h){
    h.childNodes[0].src=h.childNodes[2].nodeValue;
    console.log(h.childNodes[2]);
}

function hoverimg(z){
    setTimeout(z.style.display="none", 40000);


    z.nextElementSibling.style.display="block";


}


function funlode(){
    document.getElementById('firstimg').childNodes[1,2,3].style.display="none";
  document.getElementById('firstimg').firstElementChild.style.display="block";
  document.getElementById('firstimg').childNodes[0].style.display='block';
}*/

//function firstimg(){
  //  document.getElementById(0).style.display="block";
//}


window.onscroll=function(){n()};

function n(){
    if(document.body.scrollTop >80 || document.documentElement.scrollTop >80){
        let x = document.getElementById("navsss");
        x.style.backgroundColor="#333";

    }else{
        document.getElementById("navsss").style.backgroundColor="";
        console.log('no');

    }
}


