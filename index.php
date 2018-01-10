
  <?php
 
$strAccessToken = "qveMi/HKFOa5gbemLBlyMo2AubnOw0PTQw8C2Y8aOCYJnXqlIYzE7sIhD/5ikBAeTtvqyya/oifbYN9ND3QMieDvXAFb+cusVdRsSRgoYL5o50L7/weYoLVOxdSxdpwaMnDcK9WR0oDIHl8ayyEKrQdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีครับ";
}else if($arrJson['events'][0]['message']['text'] == "ดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี";
}else if($arrJson['events'][0]['message']['text'] == "hi"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "hi5 55++";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรอยู่"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เล่นไลน์ครับ";
}else if($arrJson['events'][0]['message']['text'] == "ควย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ควายใครครับ";
 }else if($arrJson['events'][0]['message']['text'] == "ควาย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "มันคือคุณ";
 }else if($arrJson['events'][0]['message']['text'] == "555"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "หัวเราะไปเพื่ออะไร";
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันยังไม่มีชื่อนะ";

}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";

 }else if($arrJson['events'][0]['message']['text'] == "เธอมีแฟนยัง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันมีเป็นพัน";

 }else if($arrJson['events'][0]['message']['text'] == "โง่วะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ไม่ต่างอะไรจากคุณมึง";

  }else if($arrJson['events'][0]['message']['text'] == "คนชื่อนัทต้าหล่อมั๊ย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "หล่อมาก ฉันแอบหลงรักเขามานานแล้ว";

  }else if($arrJson['events'][0]['message']['text'] == "แล้วแพรวละ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ถ้าบอกไป เขาคงรับไม่ได้";

  }else if($arrJson['events'][0]['message']['text'] == "คนชื่อแพรวสวยมั๊ย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "น่า.........เตะมาก";

}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "คุณพิมพ์อะไรมา";
}
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
 echo "OK";
?>
<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink\EventHandler\MessageHandler;

use LINE\LINEBot;
use LINE\LINEBot\Event\MessageEvent\TextMessage;
use LINE\LINEBot\KitchenSink\EventHandler;

use Predis\Client;

class TextMessageHandler implements EventHandler
{
    /** @var LINEBot $bot */
    private $bot;
    /** @var \Monolog\Logger $logger */
    private $logger;
    /** @var \Slim\Http\Request $logger */
    private $req;
    /** @var TextMessage $textMessage */
    private $textMessage;

    private $redis;

    /**
     * TextMessageHandler constructor.
     * @param $bot
     * @param $logger
     * @param \Slim\Http\Request $req
     * @param TextMessage $textMessage
     */
    public function __construct($bot, $logger, \Slim\Http\Request $req, TextMessage $textMessage)
    {
        $this->bot = $bot;
        $this->logger = $logger;
        $this->req = $req;
        $this->textMessage = $textMessage;
        $this->redis = new Client(getenv('REDIS_URL'));
    }

    public function handle()
    {
        $TEACH_SIGN = '==';
        $text = $this->textMessage->getText();
        $text = trim($text);
        # Remove ZWSP
        $text = str_replace("\xE2\x80\x8B", "", $text);
        $replyToken = $this->textMessage->getReplyToken();

        if ($text == 'บอท') {
            $this->bot->replyText($replyToken, $out =
                "ใช้ $TEACH_SIGN เพื่อสอนเราได้นะ\nเช่น สวัสดี" . $TEACH_SIGN . "สวัสดีชาวโลก");
            return true;
        }

        $sep_pos = strpos($text, $TEACH_SIGN);
        if ($sep_pos > 0) {
            $text_arr = explode($TEACH_SIGN, $text, 2);
            if (count($text_arr) == 2) {
                $this->saveResponse($text_arr[0], $text_arr[1]);
            }
            return true;
        }

        $re = $this->getResponse($text);
        $re_count = count($re);
        if ($re_count > 0) {
            // Random response.
            $randNum = rand(0, $re_count - 1);
            $response = $re[$randNum];
            $this->bot->replyText($replyToken, $response);
            return true;
        }
        return false;
    }

    private function saveResponse($keyword, $response)
    {
        $this->redis->lpush("response:$keyword", $response);
    }

    private function getResponse($keyword)
    {
        return $this->redis->lrange("response:$keyword", 0, -1);
    }
}
?>


