 // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $message = new Message;

        // メッセージ作成ビューを表示
        return view('messages.create', [
            'message' => $message,
        ]);
    }