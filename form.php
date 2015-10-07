<?php
    // echo "Form sample";
?>

<!-- html -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP form サンプル</title>
  </head>
  <body>
    <h1>フォームサンプル</h1>
    <?php
        // htmlコードの間にPHPが書ける
        // echo "Hogehoge";
        // echo "<br>";
        // echo '<h2 style="color:red;">Fugafuga</h2>';
    ?>
    
    <!-- htmlのフォームタグ -->
    <form action="form.php" method="get">
      <div>
        <input type="text" name="nickname">
      </div>
      <div>
        <input type="text" name="email">
      </div>
      <div>
        <input type="submit" value="登録">
      </div>
    </form>

    <?php
        var_dump($_GET);
        // $_GETとは
        //// スーパーグローバル変数の一種
        ////// $と_と大文字でできた変数がPHPには元々数種類存在します。
        ////// この変数にはそれぞれ「すごく」重要な意味や役割があり、
        ////// コードを書く中で頻繁にでてきます。
        //// $_GETの役割
        ////// htmlのformタグにオプションでmethod="get"と指定した際、
        ////// フォームの情報として送られた(URLの?以下に書き加えられた)データを
        ////// 構造的に取得して変数化するもの。

        // URLの読み方
        //// パラメータ
        ////// URLにはformから送信されたデータが後付されます。
        ////// 必ず「?」がつき、その後に送信された情報がつきます。
        ////// この?以下の情報たちをパラメータと呼びます。
        //////// 例
        //////// http://192.168.33.10/form.php?nickname=shinyahirai&email=hogehoge
        ////////                              ↑ ここから先パラメータ
        ////// パラメータ (?以下) の読み方
        //////// inputタグのオプションでname="hoge"とついている部分のhogeの部分が
        //////// キーとなり、=でくくってブラウザからそのinputタグに入力された情報が
        //////// 値として入る。
        //////// ユーザーが入力するinputタグが複数ある場合、パラメータは&で繋げて、
        //////// 上記のようにキー=値を繰り返します。
        //////// $_GETは、このパラメータの情報を構造的に取得して変数に入れると
        //////// ありますが、連想配列として取得しています。
        ////////// 例
        //////////// パラメータ → ?nickname=shinya&email=hogehoge
        //////////// $_GET → array("nickname" => "shinya", "email" => "hogehoge")

        echo "ようこそ" . $_GET["nickname"];
        echo "<br>";
        echo "アカウントID : " . $_GET["email"];

        // PHPによる動的処理
        //// 上記echo文が出力する内容は、ユーザーが何を入力したか、
        //// ようはユーザーの動きによって変わります。
        //// こういった処理を動的処理といいます。
        //// HTML自体は、ユーザーの動きに左右されないので、
        //// 対照的に静的処理と言われます。
        //// 静的処理のみできる人はデザイナーやコーダーと呼ばれ、
        //// プログラマとして活躍するにはこの動的処理は必須です。
    ?>


  </body>
</html>
