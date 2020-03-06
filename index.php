<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="2019年オープン。Instagramで話題の癒やしを提供するパン屋さん">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="#">
    <link rel="stylesheet" href="#">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Miu Bread</title>

<?php
  require('common/header.php');
?>
  </head>

      <div class="wrapper">
        <div class="contents">
          <article>
            <div class="post-info">
              <h2 class="post-title">お知らせ</h2>
              <p class="text1">
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。<br>
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。<br>
              </p>
            </div> <!-- post-info -->
          </article>

          <div class="f-container">
            <article>
              <div class="item1">
                <div class="commitment">
                  <h2 class="commitment-title">こだわり</h2>
                  <p class="text2">
                    テキストが入ります。テキストが入ります。テキストが入ります。<br>
                    テキストが入ります。テキストが入ります。テキストが入ります。<br>
                    テキストが入ります。テキストが入ります。テキストが入ります。<br>
                    テキストが入ります。テキストが入ります。テキストが入ります。<br>
                  </p>
                </div> <!-- .commitment -->
              </div> <!-- .item1 -->
            </article>

            <article>
              <div class="item2">
                <div class="point">
                  <h2 class="point-title">お店の特徴</h2>
                  <p class="text2">
                    テキストが入ります。テキストが入ります。テキストが入ります。<br>
                    テキストが入ります。テキストが入ります。テキストが入ります。<br>
                    テキストが入ります。テキストが入ります。テキストが入ります。<br>
                    テキストが入ります。テキストが入ります。テキストが入ります。<br>
                  </p>
                </div> <!-- point -->
              </div> <!-- .item2 -->
            </article>
          </div> <!-- .f-container -->

          <article>
            <div class="toppage-menu-wrapper-grid">
              <div class="toppage-menu-box">
                <h2 class="toppage-menu-title">商品メニュー</h2>
                <div class="toppage-menu-images">
                  <figure>
                    <img src="images/menu1.jpg" alt="あんぱん">
                    <figcaption>あんぱん</figcaption>
                  </figure>

                  <figure>
                    <img src="images/menu2.jpg" alt="クロワッサン">
                    <figcaption>クロワッサン</figcaption>
                  </figure>

                  <figure>
                    <img src="images/menu3.jpg" alt="食パン">
                    <figcaption>食パン</figcaption>
                  </figure>

                  <figure>
                    <img src="images/menu4.jpg" alt="菓子パン">
                    <figcaption>菓子パン</figcaption>
                  </figure>
                </div> <!-- .toppage-menu-images -->
              </div> <!-- .toppage-menu-box -->
            </div> <!-- .toppage-menu-wrapper-grid -->
          </article>


          <section id="location">
            <div class="location-wrapper">
              <div class="location-box">
                <div class="location-info">
                  <dl>
                    <dt>営業時間：</dt>
                    <dd>9:00〜18:00</dd>
                  </dl>

                  <dl>
                    <dt>休日：</dt>
                    <dd>水曜日・年末年始</dd>
                  </dl>

                  <dl>
                    <dt>住所：</dt>
                    <dd>○○○○○○○○○</dd>
                  </dl>

                  <dl>
                    <dt>電話番号：</dt>
                    <dd>000-000-0000</dd>
                  </dl>
                </div> <!-- .location-info -->
              </div> <!-- .location-box -->
              <div class="location-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26030.395396954013!2d138.70985379914703!3d35.360623737281166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6019629a42fdc899%3A0xa6a1fcc916f3a4df!2z5a-M5aOr5bGx!5e0!3m2!1sja!2sjp!4v1578738629697!5m2!1sja!2sjp" width="600" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div> <!-- .location-map -->
            </div> <!-- .location-wrapper -->
          </section> <!-- #location -->


          <div class="contact-wrapper">
            <div class="form-box">
              <h2 class="page-title">お問い合わせ</h2>
              <div class="label-box">
              <form action="#">
                <div>
                  <label for="name">お名前(必須)</label>
                  <input type="text" id="name" name="your-name">
                </div>

                <div>
                  <label for="email">メールアドレス(必須)</label>
                  <input type="email" id="email" name="your-email">
                </div>

                <div>
                  <label for="message">お問い合わせ内容</label>
                  <textarea id="message" name="your-message" placeholder="内容を入力してください"></textarea>
                </div>

                <input type="submit" class="button" value="送信">
              </form>
              </div> <!-- .label-box -->
            </div> <!-- .form-box -->
          </div> <!-- .contact-wrapper -->
        </div> <!-- .contents-->

<?php
  get_sidebar();
?>

      </div> <!-- #wrapper -->

<?php
  require('common/footer.php');
?>

    </body>
</html>
