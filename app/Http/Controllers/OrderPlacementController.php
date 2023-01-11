<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Request;
// use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Controllers\Controller;
 
class OrderPlacementController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function storeCustomerSessionData(Request $requestApp){
        $billing_first_name = Request::createFromGlobals()->get('billing_first_name');
        $billing_last_name = Request::createFromGlobals()->get('billing_last_name');
        $billing_company = Request::createFromGlobals()->get('billing_company');
        $billing_country = Request::createFromGlobals()->get('billing_country');
        $billing_address_1 = Request::createFromGlobals()->get('billing_address_1');
        $billing_address_2 = Request::createFromGlobals()->get('billing_address_2');
        $billing_city = Request::createFromGlobals()->get('billing_city');
        $billing_state = Request::createFromGlobals()->get('billing_state');
        $billing_postcode = Request::createFromGlobals()->get('billing_postcode');
        $billing_phone = Request::createFromGlobals()->get('billing_phone');
        $billing_email = Request::createFromGlobals()->get('billing_email');
        $order_comments = Request::createFromGlobals()->get('order_comments');
        $metal = Request::createFromGlobals()->get('metal');;
        $breastMilk = Request::createFromGlobals()->get('breastMilk');
        $inclusion = Request::createFromGlobals()->get('inclusions');
        $product = Request::createFromGlobals()->get('product');
        $message = sprintf('Hello Magic of Memories,
I am %s and would like to place an order for a %s. 
The following are my details and specification:
        metal: 	%s
        breast milk inclusion: %s 
        other inclusion: %s
        design description : %s
        
        Here are my billing details 
        Address 1: %s
        Address 2: %s
        City: %s 
        State: %s
        PostCode : %s
        Country : %s
        Phone: %s
        Email: %s',$billing_first_name,
        $product,
        $metal,
        $breastMilk,
        $inclusion,
        $order_comments,
        $billing_address_1,
        $billing_address_2,
        $billing_city,
        $billing_state,
        $billing_postcode,
        $billing_country,
        $billing_phone,
        $billing_email
        );
        $url = urlencode($message);
        $send = sprintf('https://api.whatsapp.com/send/?phone=919289583868&text=%s' , $url);
        return Redirect::to($send);
    }
    public function getData(Request $request) {
        $metal = Request::createFromGlobals()->get('attribute_pa_metal');
        $inclusion = Request::createFromGlobals()->get('attribute_pa_inclusions');
        $breastMilk = Request::createFromGlobals()->get('attribute_pa_milk');
        $request->session([
            'product' => json_encode([
                [
                    'metal'=>$metal,
                    'inclusion'=>$inclusion,
                    'breastMilk'=>$breastMilk
                ]
            ])
          ]);
        echo "Data has been added to session";
     }
   
}

?>