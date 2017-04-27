<?php

function createCookie($name,$value){
	setcookie($name,$value,time() + (86400 * 30),'/');
}

function expireCookie($name){
	setcookie($name,"",time() - (86400 * 60),'/');
}