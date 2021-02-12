<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function addFlower(){
        $categoryflower = Category::all();
        return view('addflower',compact('categoryflower'));
    }

    public function viewFlower(Category $category){
        $flower = Flower::paginate(8);
        return view('mainflower',compact('flower','category'));
    }

    public function buyflower(Flower $flower){
        return view('detailsflower',compact('flower'));
    }

    public function flowerpost(Request $request)
    {
        // $flowersDescription = Flower::where('category',$request->category);
        $flowers = new Flower;
        $flowers->name = $request->flowername;
        $flowers->image = $request->uploadimageflower;
        $flowers->price = $request->price;
        $flowers->description = $request->descriptionflower;
        $flowers->categories_id = $request->category;
        $flowers->save();
        return redirect('/home');
    }

    public function cartpost(Flower $flower , Request $request){
        $price = $flower->price*$request->qty;
        $userid = Auth::user()->id;
        $targetuser = Transaction::all();
        $flag = 0;
        foreach($targetuser as $isi){
            if($isi->flower_id==$flower->id){
                $flag=1;
                break;
            }
        }

        // logic untuk menampilkan cart apabila sudah ada melakukan increment pada price dan qty apabila belum ada akan dilakukan create
        if($flag==1){
            DB::table('transactions')
            ->where('user_id', $userid)
            ->where('flower_id', $flower->id)
            ->increment('price',(int)$price);

            DB::table('transactions')
            ->where('user_id', $userid)
            ->where('flower_id', $flower->id)
            ->increment('quantity',(int)$request->qty);
        }else{
            Transaction::create([
                'name' => $flower->name,
                'image' => $flower->image,
                'price' => $price,
                'quantity' => $request->qty,
                'user_id' => $userid,
                'flower_id' => $flower->id,
    
            ]);
        }
        return redirect("/home");
    }

    public function updateCart(Transaction $transaction , Request $request){
        $pricetmp = Flower::find($transaction->flower_id);
        $price = $pricetmp->price*$request->qty;
        $transactiontampung = $transaction->flower_id;
        $userid = Auth::user()->id;

        // melakukan update cart

        DB::table('transactions')
            ->where('user_id', $userid)
            ->where('flower_id', $transactiontampung)
            ->increment('price',(int)$price);

            DB::table('transactions')
            ->where('user_id', $userid)
            ->where('flower_id', $transactiontampung)
            ->increment('quantity',(int)$request->qty);

            return redirect("/viewcart");
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
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function show(Flower $flower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function edit(Flower $flower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flower $flower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flower $flower)
    {
        //
    }
}
