<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use App\History;
use App\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // untuk home guest
        $category = Category::all();
        return view('mainindex',compact('category'));
    }

    public function home(){
        // untuk home manager dan user
        $category = Category::all();
        return view('mainlogin',compact('category'));
    }

    public function cart(){
        // menampilkan cart
        $transaction = Transaction::all();
        return view('cart',compact('transaction'));
    }

    public function deleteflower(Flower $flower){
        // untuk menghapus flower
        $flower->delete();
        return redirect()->back();
    }

    public function transact(){
       
        // code logic untuk methode transact yaitu menampilkan transaction history lalu menghapus yang ada di cart

        $tmp = Transaction::all();

        if($tmp!=null){
            foreach($tmp as $tampung){
                if($tampung->user_id==auth()->user()->id){
                    History::create([
                        'name' => $tampung->name,
                        'image' => $tampung->image,
                        'price' => (int)$tampung->price,
                        'user_id' => $tampung->user_id,
                        'flower_id' =>$tampung->flower_id,
                        'transactions_id' => $tampung->id,
                        'quantity' => $tampung->quantity,
            
                    ]);
                }
            }
            foreach($tmp as $tampung2){
                if($tampung2->user_id==auth()->user()->id){
                    $tampung2->delete();
                }
            }
        }
        return redirect('/home');
    }

    public function viewtransact(){
        $history = History::all();
        return view('transactionhistory',compact('history'));
    }

    // public function viewCategory(){
    //     $viewCategoryFlower = Category::all();
    //     return view('navbar',compact('viewCategoryFlower'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
