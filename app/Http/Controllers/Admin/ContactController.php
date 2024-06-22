<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MailContact;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        $mailContacts = MailContact::all();
        $webConfig = Webconfig::find(1);
        return view('admin.contact.index', compact('contacts', 'webConfig','mailContacts'));
    }
   

   public function EmailCotact()
   {
      $webConfig = Webconfig::find(1);
      return view('admin.mailContact.index', compact('webConfig'));
   }
}
