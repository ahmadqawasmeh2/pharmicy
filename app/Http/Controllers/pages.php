<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    public function index()
    {
    	return view ('user.index');
    }

    public function Adding()
    {
    	return view ('user.AddingAds');
    }

      public function AddingMedicine()
    {
    	return view ('user.AddingMedicine');
    }

    public function mailbox()
    {
    	return view ('user.mailbox');
    }

     public function Addinguser()
    {
    	return view ('user.Addinguser');
    }

     public function Reciper()
    {
    	return view ('user.Reciper');
    }

      public function Company()
     {
    	return view ('user.company');
    }

      public function Information()
     {
     	return view ('user.Information');
    }

      public function compose()
     {
      return view ('user.compose');
    }
       public function read()
     {
      return view ('user.read');
    }

         public function profile()
    {
      return view ('user.profile');
    }
    public function Recipers()
    {
       return view ('user.Recipers');
    }

  public function login()
    {
       return view ('user.login');
    }

      public function register()
    {
       return view ('user.register');
    }
    
     public function forget()
    {
      return view ('user.forgetpassword');
    }

     public function newpass()
    {
      return view ('user.newpass');
    }

       public function storecompany()
    {
      return view ('user.storecompany');
    }

        public function shopsingle()
    {
      return view ('user.shopsingle');
    }

        public function drug()
    {
      return view ('user.drug');
    }

    public function insert()
    {
      return view('user.insert');
    }

    public function  Nearing()
    {
      return view('user.Nearing');
    }

    
//endfunction get pages pharmicy 

//function get pages admin

     public function inde()
    {
      return view ('admindoctor.index');
    }

    public function Addin()
    {
      return view ('admindoctor.writereciper');
    }

         public function profil()
    {
      return view ('admindoctor.profile');
    }
    public function Recip()
    {
       return view ('admindoctor.Recipers');
    }

  public function logi()
    {
       return view ('admindoctor.login');
    }

      public function registe()
    {
       return view ('admindoctor.register');
    }

     public function foge()
    {
      return view ('admindoctor.forgetpassword');
    }

     public function newpassw()
    {
      return view ('admindoctor.newpass');
    }

     public function SearchDrug()
    {
      return view ('admindoctor.SearchDrug');
    }

    //endget pages admin doctor
  

  //start pages admin company
    public function home()
    {
      return view('company.home');
    }
    
     public function AddDrug()
    {
      return view('company.adddrug');
    }


     public function warehouses()
    {
      return view('company.warehouses');

    }

      public function AddRepresentative()
    {
      return view('company.AddRepresentative');
    }

      public function Inbox()
    {
      return view('company.inbox');
    }

       public function composee()
    {
      return view('company.composee');
    }

       public function reade()
    {
      return view('company.reade');
    }

       public function All()
    {
      return view('company.All');
    }

       public function informations()
    {
      return view('company.informations');
    }

    public function salespharmicy()
    {
      return view('company.salespharmicy');
    }

     public function pharmicy()
    {
      return view('company.pharmicy');
    }

      public function total()
    {
      return view('company.total');
    }

       public function totalware()
    {
      return view('company.totalware');
    }

         public function warehousess()
    {
      return view('company.warehousess');
    }

    public function reportdrug()
    {
      return view('company.reportdrug');
    }

    public function stores()
    {
      return view('company.store');
    }
    
}
