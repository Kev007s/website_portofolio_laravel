<?php

use App\Models\project;
use App\Models\setting;
use App\Models\section;

function get_setting ($key){
    $data =  setting::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;
    }
    else
    return 'empty';
}

function get_section ($key){
    $data =section::where('post',$key)->first();
    if(isset($data)){
        return $data;
    }

}

function get_project (){
    $data =project::all();
    return $data;
}