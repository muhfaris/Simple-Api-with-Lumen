<?php
  
namespace App\Http\Controllers;
  
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class ContactController extends Controller {

    public function index(){
        $Contact  = Contact::all();
        return response()->json($Contact);
  
    }

}

?>
