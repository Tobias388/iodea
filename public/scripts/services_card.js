"use strict";for(var read_more=document.querySelectorAll(".read_more"),read_less=document.querySelectorAll(".read_less"),service_card_front=document.querySelectorAll(".service_front"),service_card_back=document.querySelectorAll(".service_back"),service_container=document.querySelectorAll(".service_container"),_loop=function(e){read_more[e].onclick=function(){service_card_front[e].classList.add("visibility"),service_card_back[e].classList.add("visibility"),service_container[e].classList.add("rotate")},read_less[e].onclick=function(){service_card_front[e].classList.remove("visibility"),service_card_back[e].classList.remove("visibility"),service_container[e].classList.remove("rotate")}},i=0;i<service_card_front.length;i++)_loop(i);