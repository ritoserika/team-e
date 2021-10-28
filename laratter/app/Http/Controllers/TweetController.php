<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//追加講義8
use Validator;
use App\Models\Tweet;
// ↓ 追加
use Auth;
// ↓ 追加12－2
use App\Models\User;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //追加
       // return view ('tweet.index');
       // ↓編集
       $tweets = Tweet::getAllOrderByDeadline();
       return view('tweet.index', [
       'tweets' => $tweets
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //追加
         return view ('tweet.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // バリデーション
  $validator = Validator::make($request->all(), [
    'tweet' => 'required | max:191',
    'description' => 'required',
  ]);
  // バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('tweet.create')
      ->withInput()
      ->withErrors($validator);
  }
  // create()は最初から用意されている関数
  // 戻り値は挿入されたレコードの情報
  //$result = Tweet::create($request->all());
// ↓編集 フォームから送信されてきたデータとユーザIDをマージし，DBにinsertする

   $data = $request->merge(['user_id' => Auth::user()->id])->all();
   $data = $request->merge(['user_id2' => Auth::user()->id])->all();
   $result = Tweet::create($data);
  
   // ルーティング「tweet.index」にリクエスト送信（一覧ページに移動）
  return redirect()->route('tweet.index');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //追加
        $tweet = Tweet::find($id);
        return view('tweet.show', ['tweet' => $tweet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //追加
        $tweet = Tweet::find($id);
        return view('tweet.edit', ['tweet' => $tweet]);
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
     //バリデーション
     $validator = Validator::make($request->all(), [
    'tweet' => 'required | max:191',
    'description' => 'required',
  ]);
       //バリデーション:エラー
       if ($validator->fails()) {
       return redirect()
      ->route('tweet.edit', $id)
      ->withInput()
      ->withErrors($validator);
  }
      //データ更新処理
      // updateは更新する情報がなくても更新が走る（updated_atが更新される）
      $result = Tweet::find($id)->update($request->all());
      // $redult = Tweet::find($id)->fill($request->all())->save();
      return redirect()->route('tweet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //追加！
        $result = Tweet::find($id)->delete();
        return redirect()->route('tweet.index');
    }

    public function mydata()
    {
      $tweets = User::find(Auth::user()->id)->mytweets;
      return view('tweet.index', [
        'tweets' => $tweets
      ]);
    }
}
