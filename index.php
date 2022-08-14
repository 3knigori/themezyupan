<?php
/**
 * TOPページ
 *
 * @package WordPress
 * @subpackage THEM ISHIICPA
 * @since 1.0
 * @version 1.0
 */
?>
<?php get_header(); ?>

<div id="wrap"></div>
<main id="index">
  <div id="mainvisual" class="top-mainvisual d-none d-md-block">
    <div class='top-mainvisual__catchcopy'>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/logo.png">
    </div>
    <div class="top-mainvisual__bottom">
      <div class="top-mainvisual__bottom_down">
        <span>scroll</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/scroll.png" alt="京都嵐山着物レンタルじゅぱん" />
      </div>
      <div class="top-mainvisual__bottom_reservatiobar">
        <a href="<?php echo home_url('/news') ?>">Click here for reservation status　～予約状況はこちら～</a>
      </div>
    </div>
  </div>
  <div id="mainvisualsp" class="top-mainvisual d-block d-md-none">
    <div class='top-mainvisual__catchcopy'>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/logo-sp.png">
    </div>
    <div class="top-mainvisual__bottom">
      <div class="top-mainvisual__bottom_down">
        <span>scroll</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/scroll.png" alt="京都嵐山着物レンタルじゅぱん" />
      </div>
    </div>
  </div>
  <!-- <div class="top-recruit">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="top-recruit__header">
            <h2>スタッフ募集</h2>
            <p>16時〜20時までのパートタイム</p>
            <p>時給：900円〜</p>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="top-recruit__body">
            <p>
              散策後、帰ってこられたお客様への
              接客対応や洗濯、アイロンがけ等の軽作業。
              能力により昇給有。
              詳しくは、じゅぱんまでお問い合わせください。
              <span>※随時面接を受け付けております。</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="top-contents">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="top-contents__image">
              <img class="acce acce1" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/acce1.png">
              <img class="acce acce4" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/acce4.png">
              <img class="acce acce2" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/acce2.png">
              <img class="acce acce3" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/acce3.png">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="top-contents__header">
              <h2>About</h2>
            </div>
            <div class="top-contents__body">
              <h3>レンタル着物 じゅぱん</h3>
              <p>
                私達は、京都嵐山の友禅職人の娘として産れました。<br>
                一昔前は京都でも着物を着る人もちらほら見かけたのですが、最近はほとんど見かけなくなりました。<br>
                確かに着物は着るのも手間や時間がかかりますし苦しい・しんどいイメージがあると思います。<br>
                そのため、父も大変苦労したと思います。<br>
                その上、父が病で倒れ大変な状況になりました。<br>
                しかし、また着物を作ることを始めて頑張っています。<br>
                私達もそんな父のように着物を愛し、着物のお仕事に関わりたいと思う様になりました。<br>
                私たち「じゅぱん」の着物とは、女性が女性らしくいられ、行動も肌に感じる空気さえ変わる凛とした自分になれるもの…<br>
                だからもっと着物を着て実際に体感してほしい。日本の京都の文化に触れて欲しい。日本の文化に触れて欲しい。<br>
                父の様に着物を大切にしたい。という強い思いからレンタル着物を始めようと思いました。<br>
                京都の良さ、着物の良さを解って頂き、京都の街を体感していただきたいと思います。<br>
                リーズナブルな価格なので京都旅行のプランにも組み込み易いです。
              </p>
              <a class="btn btn__more" href="<?php echo home_url('/about') ?>"><i class="fa-fw fas fa-angle-right"></i>more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-12 col-md-6">
            <div class="top-contents__image">
              <img class="bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/plan.png">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="top-contents__header">
              <h2>Plan</h2>
            </div>
            <div class="top-contents__body">
              <h3>着物レンタルプラン</h3>
              <p>
                じゅぱんのノーマルプラン。<br>
                本格的に着物を着て頂ける一番人気のおすすめレンタルプランです。
                着物・帯・帯上げ・帯締め・根付or帯留・色柄襟・草履・バックなど全ての物が揃っております。
                帯も半幅帯だけでなくお太鼓も選べるフルセットレンタル！
                お太鼓はレンタルでは少ないのですが、当店はお太鼓帯も豊富に選んで頂けます。
                半幅帯の結びも長尺の帯ですので豪華に結べます。<br>
                アンティークの着物や帯がたくさんありますのでゆっくりお選びいただけます。
              </p>
              <a class="btn btn__more" href="<?php echo home_url('/kimono') ?>"><i class="fa-fw fas fa-angle-right"></i>more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="top-contents__image">
              <img class="bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/reservation.png">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="top-contents__header">
              <h2>Reservation</h2>
            </div>
            <div class="top-contents__body">
              <h3>予約フォーム</h3>
              <p>
                着物をレンタルされる場合は予約フォーム<br>
                もしくはお電話でのご予約をお願いします。
                当日のご予約はできませんので、前日までにご予約をお願いします。
              </p>
              <p>
                前日の予約受付時間は19：00までとなっております。
                メールアドレスの間違いが多くご返信できない事例が多発しております。
                アドレスをもう一度ご確認くださいませ。<br>
                ご予約後、翌日中に返信の無い場合はお電話にてお問い合わせください。
                予約状況を知りたい方は『whats new』ページをご覧くださいませ。
              </p>
              <p class="tel">tel 090-3945-7449</p>
              <a class="btn btn__more" href="<?php echo home_url('/reservation') ?>"><i class="fa-fw fas fa-angle-right"></i>more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="top-contents__header">
          <h2>Gallery</h2>
        </div>
        <div class="top-contents__body">
          <h3>ギャラリー</h3>
          <p>Yourself different than usual | ノスタルジックに京都散歩してみませんか?</p>
        </div>
        <div class="top-contents__gallery">
          <h4 class="top-contents__gallery_title">Spring / Summer</h4>
          <div class="row">
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item ss1">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/ss01.jpg" data-lightbox="ss" title="京都のレトロな風景での着物姿の2人の女性の写真です。上品なシンプルな着物に二人ともアンティークのお太鼓で。本人の美しさが引き立つコーディネートです。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">京都のレトロな風景での着物姿の2人の女性の写真です。上品なシンプルな着物に二人ともアンティークのお太鼓で。本人の美しさが引き立つコーディネートです。</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item ss2">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/ss02.jpg" data-lightbox="ss" title="京都の古い蔵の前で着物姿の女性の写真です。スキっとした青緑の着物にモダンなお太鼓がとっても引き立つコーディネートです。お太鼓の結びも角出し風に粋に結んでいます。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">京都の古い蔵の前で着物姿の女性の写真です。スキっとした青緑の着物にモダンなお太鼓がとっても引き立つコーディネートです。お太鼓の結びも角出し風に粋に結んでいます。</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item ss3">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/ss03.jpg" data-lightbox="ss" title="「じゅぱん」のオリジナル手作り簪の一部の写真です。淡路玉を使いカラフルにキュートに仕上げました。一番人気のヘアアクセサリーです。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">「じゅぱん」のオリジナル手作り簪の一部の写真です。淡路玉を使いカラフルにキュートに仕上げました。一番人気のヘアアクセサリーです。</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item ss4">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/ss04.jpg" data-lightbox="ss" title="京都の嵐山の竹林で浴衣で楽しそうに散策する男女の写真です。女性は一人は半幅帯でもう一人はヘコ帯を使用しています。男性は襟元がポイントになっています。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">京都の嵐山の竹林で浴衣で楽しそうに散策する男女の写真です。女性は一人は半幅帯でもう一人はヘコ帯を使用しています。男性は襟元がポイントになっています。</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item ss5">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/ss05.jpg" data-lightbox="ss" title="浴衣姿の女性の写真です。帯結びにはこだわりが・・ヘコ帯で可愛らしくしています。ポイントは帯と鳥かごのようなバックです。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">浴衣姿の女性の写真です。帯結びにはこだわりが・・ヘコ帯で可愛らしくしています。ポイントは帯と鳥かごのようなバックです。</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item ss6">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/ss06.jpg" data-lightbox="ss" title="京都の嵐山の奥嵯峨で歩く男女の写真です。春らしい淡い色身の着物にアンティークの黄色のお太鼓と男性はシックに落ち着いたコーディネートで。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">京都の嵐山の奥嵯峨で歩く男女の写真です。春らしい淡い色身の着物にアンティークの黄色のお太鼓と男性はシックに落ち着いたコーディネートで。</p>
            </div>
          </div>
          <h4 class="top-contents__gallery_title">Autumn / Winter</h4>
          <div class="row">
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item aw1">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/aw01.jpg" data-lightbox="ss" title="京都のレトロな木塀の前を着物で歩く女性の写真です。モダンで粋な着物にカッコいい半幅帯が馴染む秋冬らしいコーディネートです">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">京都のレトロな木塀の前を着物で歩く女性の写真です。モダンで粋な着物にカッコいい半幅帯が馴染む秋冬らしいコーディネートです</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item aw2">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/aw02.jpg" data-lightbox="ss" title="京都の嵐山の奥嵯峨で着物姿で団子を食べる男性の写真です。ハンチング帽を被りレトロにコーディネート。京都は和服が似合います。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">京都の嵐山の奥嵯峨で着物姿で団子を食べる男性の写真です。ハンチング帽を被りレトロにコーディネート。京都は和服が似合います。</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item aw3">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/aw03.jpg" data-lightbox="ss" title="京都の嵐山のレトロな喫茶店でお茶を楽しむ女性の写真です。こちらは半幅帯の織り上げ方を上下にし、裏の赤を出した結びになっています。上品さと可愛らしさが出るコーディネートです。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">京都の嵐山のレトロな喫茶店でお茶を楽しむ女性の写真です。こちらは半幅帯の織り上げ方を上下にし、裏の赤を出した結びになっています。上品さと可愛らしさが出るコーディネートです。</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item aw4">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/aw04.jpg" data-lightbox="ss" title="京都の奥嵯峨のお寺で着物姿で歩く二人の着物姿の女性の写真です。一人は半幅帯で華やかに、一人はお太鼓でクールにコーディネートしています。京都はシックで上品な着物が似合います。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">京都の奥嵯峨のお寺で着物姿で歩く二人の着物姿の女性の写真です。一人は半幅帯で華やかに、一人はお太鼓でクールにコーディネートしています。京都はシックで上品な着物が似合います。</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item aw5">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/aw05.jpg" data-lightbox="ss" title="京都の嵐山のお寺で着物姿の女性の写真です。フランス製のモダンなマフラーと合わせてレトロにモダンにコーディネートしています。苔の緑に映えるレトロモダンなコーディネートです。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">京都の嵐山のお寺で着物姿の女性の写真です。フランス製のモダンなマフラーと合わせてレトロにモダンにコーディネートしています。苔の緑に映えるレトロモダンなコーディネートです。</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <figure class="top-contents__gallery_item aw6">
                <figcaption class="top-contents__gallery_icon">
                  <a class="top-contents__gallery_link" href="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/gallery/aw06.jpg" data-lightbox="ss" title="シンプルな細かいドット柄の着物にアンティークのお太鼓を合わせたお洒落なコーディネートです。じゅぱんはお太鼓が売りになっております。モダン柄帯やレトロなアンティークの帯も取りそろえております。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_click.png" class="pb-3" alt="click">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/hover_detail.png" alt="detail">
                  </a>
                </figcaption>
              </figure>
              <p class="top-contents__gallery_text">シンプルな細かいドット柄の着物にアンティークのお太鼓を合わせたお洒落なコーディネートです。じゅぱんはお太鼓が売りになっております。モダン柄帯やレトロなアンティークの帯も取りそろえております。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="top-contents__header">
          <h2>Other Plans</h2>
        </div>
        <div class="top-contents__body">
          <h3>その他のプラン</h3>
        </div>
        <div class="top-contents__plans">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="top-contents__plans_item">
                <div class="top-contents__plans_image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/plans/plan1.jpg">
                </div>
                <div class="top-contents__plans_body">
                  <h4 class="top-contents__plans_title">Oi Tea</h4>
                  <p class="top-contents__plans_text">
                    おいTeaぷらん<br>
                    着物レンタル　『じゅぱん』と『茶三楽』が初コラボ！茶道体験で特別なひと時を過ごしてみませんか？
                  </p>
                  <a class="btn btn__more" href="<?php echo home_url('/oitea') ?>"><i class="fa-fw fas fa-angle-right"></i>more</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="top-contents__plans_item">
                <div class="top-contents__plans_image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/plans/plan2.jpg">
                </div>
                <div class="top-contents__plans_body">
                  <h4 class="top-contents__plans_title">Oishiosue</h4>
                  <p class="top-contents__plans_text">
                    おいしおすえぷらん<br>
                    じゅぱんオリジナルマップで京都を回るレンタルとお食事の特別なプランです。
                  </p>
                  <a class="btn btn__more" href="<?php echo home_url('/oishiosue') ?>"><i class="fa-fw fas fa-angle-right"></i>more</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="top-contents__plans_item">
                <div class="top-contents__plans_image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/plans/plan3.jpg">
                </div>
                <div class="top-contents__plans_body">
                  <h4 class="top-contents__plans_title">Photo Plan</h4>
                  <p class="top-contents__plans_text">
                    ふぉとぷらん<br>
                    京都の街で素敵な写真を想い出として残したい！と思われる方にピッタリのレンタルと観光ロケプランです。
                  </p>
                  <a class="btn btn__more" href="<?php echo home_url('/photo') ?>"><i class="fa-fw fas fa-angle-right"></i>more</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="top-contents__plans_item">
                <div class="top-contents__plans_image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/plans/plan4.jpg">
                </div>
                <div class="top-contents__plans_body">
                  <h4 class="top-contents__plans_title">Yukata</h4>
                  <p class="top-contents__plans_text">
                    浴衣レンタルぷらん<br>
                    京都をはんなり華やかに浴衣で散歩するプランです。
                  </p>
                  <a class="btn btn__more" href="<?php echo home_url('/yukata') ?>"><i class="fa-fw fas fa-angle-right"></i>more</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="top-contents__plans_item">
                <div class="top-contents__plans_image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/plans/plan5.jpg">
                </div>
                <div class="top-contents__plans_body">
                  <h4 class="top-contents__plans_title">Hair Set</h4>
                  <p class="top-contents__plans_text">
                    ヘアセットプラン<br>
                    着物にもこだわるなら、ヘアスタイルにもこだわりたい！そんなあなたはヘアセットプラン。
                  </p>
                  <a class="btn btn__more" href="<?php echo home_url('/hairset') ?>"><i class="fa-fw fas fa-angle-right"></i>more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-12 col-md-6">
            <div class="top-contents__image">
              <img class="bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/tourist.png">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="top-contents__header">
              <h2>Tourist Spot</h2>
            </div>
            <div class="top-contents__body">
              <h3>じゅぱんからのオススメ京都観光地</h3>
              <p>
                「じゅぱん」からこんな所にも足を運んでみてはいかがでしょうか？
                京都のお勧めスポットをご紹介いたします。
              </p>
              <a class="btn btn__more" href="<?php echo home_url('/spot') ?>"><i class="fa-fw fas fa-angle-right"></i>more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="top-contents__image">
              <img class="bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/top/top-contents/kituke.png">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="top-contents__header">
              <h2>Dressing up only</h2>
            </div>
            <div class="top-contents__body">
              <h3>着付けのみでもお受付可</h3>
              <p>
                着物や浴衣をお持ちでも、着付けは苦手。 そんな時も『じゅぱん』にお任せください。
                ご家庭で代々引き継がれてきた素敵な着物をもう一度袖を通して 京都の町を散策されませんか？
              </p>
              <p>
                お持物などのご案内と併せて詳細ページからご確認下さい。
              </p>
              <a class="btn btn__more" href="<?php echo home_url('/kimono') ?>"><i class="fa-fw fas fa-angle-right"></i>Details</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
