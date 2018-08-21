<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index(){
    	$data["menuAtivo"] =  "Principal";
    	return view('projeto.index', $data);
    }
    public function sobreOProjeto(){
    	$data["menuAtivo"] =  "Sobre o projeto";
    	return view('projeto.sobre-o-projeto', $data);
    }
    public function trabalhosPublicados(){
    	$data["menuAtivo"] =  "Trabalhos publicados";
    	return view('projeto.trabalhos-publicados', $data);
    }
    public function idealizadores(){
    	$data["menuAtivo"] =  "Idealizadores";
    	return view('projeto.idealizadores', $data);
    }
    public function termoConsentimento(){
        $data["menuAtivo"] =  "Principal";
        return view('projeto.termo-consentimento', $data);
    }
}