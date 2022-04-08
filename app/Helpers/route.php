<?php

if(! function_exists('prefixActive')){
	function prefixActive($prefixName): string
    {
		return	request()->route()->getPrefix() == $prefixName ? 'active' : '';
	}
}

if(! function_exists('prefixBlock')){
	function prefixBlock($prefixName): string
    {
<<<<<<< HEAD
		return	request()->routeIs($prefixName) ? 'block' : 'none';
=======
		return	request()->route()->getPrefix() == $prefixName ? 'none' : 'block';
>>>>>>> b9ec36ef2acc1a67fdaa1cd270bcd7f985f30afe
	}
}

if(! function_exists('routeActive')){
	function routeActive($routeName): string
    {
		return	request()->routeIs($routeName) ? 'active' : '';
	}
}
