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
        $message = sprintf('billing_first_name : %s
        billing_last_name: %s
        billing_company: %s
        billing_country: %s
        billing_address_1: %s
        billing_address_2: %s
        billing_city: %s
        billing_state: %s
        billing_postcode: %s
        billing_phone: %s
        billing_email: %s
        order_comments: %s
        metal: %s
        breastMilk: %s
        inclusion: %s',$billing_first_name,
        $billing_last_name,
        $billing_company,
        $billing_country,
        $billing_address_1,
        $billing_address_2,
        $billing_city,
        $billing_state,
        $billing_postcode,
        $billing_phone,
        $billing_email,
        $order_comments,
        $metal,
        $breastMilk,
        $inclusion);
        $url = urlencode($message);
        $send = sprintf('https://api.whatsapp.com/send/?phone=919013064446&text=%s' , $url);
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