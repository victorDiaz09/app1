<?php

function setActive($routeNmae)
{
    return request()->routeIs($routeNmae) ? 'active' : '';
}







?>