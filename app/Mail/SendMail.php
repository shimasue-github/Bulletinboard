<?php
//アプリケーションが送信する各種メールタイプが"mailable"クラス

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    // 引数で受け取ったデータ用の変数
    protected $mail;
    protected $token;

    public function __construct($mail,$token)
    {
      // 引数で受け取ったデータを変数にセット
      $this->mail = $mail;
      $this->token = $token;
    }    

    public function build()
    {
      return $this
      ->from('mai.shimasue@gmail.com') //送信元
      ->view('mail')
      ->subject('仮登録完了のお知らせ')   //メールタイトル
      ->with([                         //viewと送ることが出来る
        'token' => $this->token,
        'mail' => $this->mail,
      ]);
    }
}