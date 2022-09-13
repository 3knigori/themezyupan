<?php
/*
Template Name: studio
*/
get_header("studio"); ?>

<main class="studio">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio/studio_main1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio/studio_main2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio/studio_main3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <section id="studio-news">
    <div class="container">
      <h2 class="studio__title"><span>NEWS</span></h2>
      <div class="studio__news">
        <div class="studio__news__item">
          <div class="studio__news__time">2022/09/11 Sunday</div>
          <dl>
            <dt>京都嵐山初！お洒落に撮れるセルフスタジオ</dt>
            <dd>2022年8月1日にOpenしました！とっても可愛いスタジオが3部屋もあるんです。誰にも見られる事なく思いっきり自撮りしちゃいませんか？</dd>
          </dl>
        </div>
      </div>
    </div>
  </section>
  <section id="studio-about">
    <div class="studio__about">
      <div class="container">
        <div class="studio__about__inner">
          <h2 class="studio__about__title">STUDIO ZYUPANとは</h2>
          <p class="studio__about__body">
            嵐山で創業14年人気の着物レンタルzyupanが姉妹店スタジオzyupanを作りました。<br>
            着付師監修なので、着物でも可愛く撮れる様に考えたセルフスタジオです！<br>
            プロカメラマンが丁寧にセッティングした本格機材が揃っているので安心して写真が撮れます！<br class="d-none d-md-block">
            cafeスペースではちょっと大人のノンアルカクテルや、もちろんお酒もビール、カクテルをご用意！<br class="d-none d-md-block">
            食べ歩きをするなら元フレンチレストランのシェフがお洒落にブルスケッタも。<br class="d-none d-md-block">
            ブルスケッタは自分でカスタマイズ出来ます。<br>
            その他プリクラ(ハルイロセカイ)も設置しています。<br class="d-none d-md-block">
            とことん写真映えを狙うなら是非ご来店ください。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="studio-flow">
    <div class="container">
      <h2 class="studio__title"><span>FLOW</span></h2>
      <div class="studio__flow">
        <dl class="studio__flow__item">
          <dt><span>STEP.1</span>受付とお支払い</dt>
          <dd>受付にて【SUDIO A】【SUDIO B】【SUDIO C】より好きなお部屋をCHOICE!</dd>
        </dl>
        <dl class="studio__flow__item">
          <dt><span>STEP.2</span>お部屋の説明</dt>
          <dd>カメラ操作の仕方など、簡単に説明</dd>
        </dl>
        <dl class="studio__flow__item">
          <dt><span>STEP.3</span>撮影</dt>
          <dd>15分間撮り放題で可愛く自撮りを撮影しちゃおう!</dd>
        </dl>
        <dl class="studio__flow__item">
          <dt><span>STEP.4</span>受付にてデータをお渡し</dt>
          <dd>全てのデータを携帯へ転送</dd>
        </dl>
        <p class="studio__flow__text"><span>POINT!</span>プロカメラマン監修のスタジオセッティングなので、誰でも可愛く安心して撮影ができます。</p>
      </div>
    </div>
  </section>
  <section id="studio-store">
    <div class="studio__store">
      <div class="row g-0">
        <div class="col-md-6">
          <div class="studio__store__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio/main_studioA_top.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="studio__store__item">
            <h2>STUDIO A</h2>
            <p>
              たくさんのアンティーク調のお花をあしらったcute & cuteなお部屋。壁紙も海外から取り寄せて、こだわっています。日本には無い壁紙がよりお花と貴女を可愛く見せてくれる事間違いなし！フラワーシャワーを浴びた様な可愛い写真が撮れます。とことん可愛いを追求するならスタジオA！
            </p>
          </div>
        </div>
      </div>
      <div class="row g-0 flex-md-row-reverse">
        <div class="col-md-6">
          <div class="studio__store__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio/main_studioB_top.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="studio__store__item">
            <h2>STUDIO B</h2>
            <p>
              たくさんのアンティークのペンダントライトをあしらった、
              ちょっと大人のお部屋です。こちらも海外から取り寄せた壁紙を使用し足元には白の人工芝を敷き詰めました。
              ランプがより素敵に見えるゴールドを基調としたお洒落なお部屋。
              着物でも洋服でも映えるファッショナブルな空間！大人っぽく写真を撮るならスタジオB！
            </p>
          </div>
        </div>
      </div>
      <div class="row g-0">
        <div class="col-md-6">
          <div class="studio__store__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio/main_studioC_top.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="studio__store__item">
            <h2>STUDIO C</h2>
            <div class="studio__store__subimagewrap d-md-none">
              <div class="row">
                <div class="col-4">
                  <img class="studio__store__subimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/studio/studioC1.jpg" alt="studioC">
                </div>
                <div class="col-4">
                  <img class="studio__store__subimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/studio/studioC2.jpg" alt="studioC">
                </div>
                <div class="col-4">
                  <img class="studio__store__subimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/studio/studioC3.jpg" alt="studioC">
                </div>
              </div>
            </div>
            <p>
              全てオリジナルの特注ロールスクリーンを使用したバック紙のお部屋です。デザイン性も抜群でシンプルに可愛くコミカルにを実現しました！白を基調とした幾何学模様のスクリーンとチェックを基調としたcuteなスクリーンとアメコミをイメージし漫画のコマ割りのコミカルなスクリーンが選べます。いくつもの箱を組み立てて椅子や階段に出来るキューブも自分スタイルで変更可能。個性的にorシンプルにを選ぶならスタジオC！
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer("studio"); ?>
