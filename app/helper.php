<?php

function currentUserRole()
{
    if(isset(auth()->user()->roles[0])){
        return auth()->user()->roles[0]->name;
    }
    return '';
}