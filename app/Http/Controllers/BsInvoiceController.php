<?php

namespace App\Http\Controllers;

use App\BsInvoice;
use App\BsCompany;
use App\BsItems;
use App\BsUsers;
use Auth;
use App\BsInvoiceDetail;
use App\BsInvoiceItem;
use Illuminate\Http\Request;
use DB;


class BsInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('invoices.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function gst_view($id)
    {
       $vendor = BsItems::where([['id','=',$id]])->first();
        return json_encode($vendor);
    }
    public function item_view($id)
    {
    	
      /*$vendor = BsCompany::pluck('id','name')->get();*/
      $vendor = BsItems::where('company_id',$id)->pluck('name','id');
      /*$vendor=	DB::table("bs_items")->pluck("name","id");*/
      /*$cities = BsCompany::all();*/
      
       return json_encode($vendor);
        /*$present = Vendor::all();*/
        //dd($present);

        /*$cust = Customer::all();*/

        /* return view('orders.add')->with(['customer' ,$cust,'menu' ,$present]);*/
      
    }
    public function add_view()
    {
    $vendor=	DB::table("bs_companies")->pluck("name","id");
    $user=	BsUsers::where('role_id','2')->pluck('name','id');
   /*$vendor = BsCompany::pluck('id','name')->get();*/
    /*  $vendor = BsCompany::all();*/
     
        /*$present = Vendor::all();*/
        //dd($present);

        /*$cust = Customer::all();*/

        /* return view('orders.add')->with(['customer' ,$cust,'menu' ,$present]);*/
       return view('invoices.add')->with([
            'vendor' => $vendor,
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
       public function add(Request $request)
    {
    	
    	
       $AuthUserData = Auth::user();
       
    	$invoice = new BsInvoice;
        $invoice->customer_name=$request->customer_name;
        $invoice->paid=$request->paid;    
        $invoice->sub_total=$request->invoice_subtotal;
        $invoice->disc_amount=$request->invoice_discount;
        $invoice->total_amount=$request->invoice_total;
        $invoice->balance=$request->balance;
        $invoice->bill_generated_by=$AuthUserData->name;
      
        if($invoice->save())
        {
        	//Save invoice item
       $count = count($request->vendor);
        	 for($i = 0; $i<$count; $i++)
        	  {
    	   	  $invo_detail = new BsInvoiceItem;
        $invo_detail->bill_id= $invoice->id;
        $invo_detail->rate=$request->invoice_product_price[$i];;    
        $invo_detail->quantity=$request->invoice_product_qty[$i];
        $invo_detail->sub_total=$request->invoice_product_sub[$i];
        $invo_detail->disc_amount=$request->invoice_product_discount[$i];
        $invo_detail->vendor=$request->vendor[$i];
        $invo_detail->item=$request->item[$i];
        $invo_detail->salesperson=$request->salesperson[$i];
        $invo_detail->gst_per=$request->gst_per[$i];
        $invo_detail->gst_tax=$request->gst_tax[$i];
        if($invo_detail->save())
        {
			
		}
    	   }
        	 $response = array(
                    'status' => 'success',
                    'message' => 'Invoice added',
                     'error' => '0',
                    
                );
           
        }
    	       return \Response::json($response);
    	
        /*$user = Customer::where([['name','=',$request->name],['email','=',$request->email],['phone','=',$request->phone]])->first();
        if (!empty($user)){
            $response = array(
                'status' => 'allready',
                'msg' => 'place order',
                'cust_id' => $user->id,
            );
        }
        else{
            $user = new Customer;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->dob=$request->dob;
            $user->address=$request->address;
            if($user->save())
            {
                $response = array(
                    'status' => 'success',
                    'msg' => 'Add user Now You can Place order ',
                    'cust_id' =>   $user->id,
                );

            }
          /*  $article = new Customer($request->all());
            Auth::user()->Customer()->save($article);*/


    /*    }

        return \Response::json($response);*/


    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
