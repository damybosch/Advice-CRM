<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Customer::all();
        return view('pages/customers', ['customers' => $customers]);
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        $domains = DB::table('customers')
        ->join('domains', 'customers.id', '=', 'domains.customer_id')
        ->join('seo_contracts', 'seo_contracts.id', '=', 'domains.seo_contract_id')
        ->join('social_contracts', 'social_contracts.id', '=', 'domains.social_contract_id')->select('domains.*', 'seo_contracts.contract_name AS seo_contract_name', 'social_contracts.contract_name AS social_contract_name')->where('customers.id', $id)->get();
        

        return view('pages/customer_profile', ['customer' => $customer, 'domains' => $domains]);
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('customers')
         ->where('customer_name', 'like', '%'.$query.'%')
         ->orWhere('contact_person', 'like', '%'.$query.'%')
         ->orderBy('id', 'asc')
         ->get();
         
      }
      else
      {
       $data = DB::table('customers')
         ->orderBy('id', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td><a href="/klant/'. $row->id .'">'.$row->customer_name.'</a></td>
         <td>'.$row->website.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
