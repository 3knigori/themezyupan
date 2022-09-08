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
          <div class="studio__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
        <div class="studio__news__item">
          <div class="studio__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
        <div class="studio__news__item">
          <div class="studio__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
        <div class="studio__news__item">
          <div class="studio__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
        <div class="studio__news__item">
          <div class="studio__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
      </div>
    </div>
  </section>
  <section id="studio-menu">
    <div class="container">
      <h2 class="studio__title"><span>CAFE MENU</span></h2>
      <div class="studio__menu">
        <div class="row">
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">アールグレーモヒート＆ノンアル</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">アプリコットフィズ</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">アプリコットマンゴー</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">オレンジスピリッツ＆ノンアル</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">カシスオレンジ</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">カシスソーダ＆ノンアル</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">グランマニエ</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">グリーンアップル＆ノンアル</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu9.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">さくら＆ノンアル</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu10.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">しそ</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu11.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">チャイナブルー</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu12.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">ピーチティー</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu13.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">ピーチパイン</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu14.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">ファーグリーン</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu15.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">ファジーネーブル</h3>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafemenu/cafemenu16.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">モヒート</h3>
              </div>
            </div>
          </div>
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
            ここにはSTUDIOの簡単な説明文が入ります。<br>
            ここにはSTUDIOの簡単な説明文が入ります。<br>
            ここにはSTUDIOの簡単な説明文が入ります。<br>
            ここにはSTUDIOの簡単な説明文が入ります。
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
          <img class="studio__store__image" src="https://placehold.jp/800x600.png" alt="...">
        </div>
        <div class="col-md-6">
          <div class="studio__store__item">
            <h2>STUDIO A</h2>
            <p>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。<br>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。<br>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。<br>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。
            </p>
          </div>
        </div>
      </div>
      <div class="row g-0 flex-md-row-reverse">
        <div class="col-md-6">
          <img class="studio__store__image" src="https://placehold.jp/800x600.png" alt="...">
        </div>
        <div class="col-md-6">
          <div class="studio__store__item">
            <h2>STUDIO B</h2>
            <p>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。<br>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。<br>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。<br>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。
            </p>
          </div>
        </div>
      </div>
      <div class="row g-0">
        <div class="col-md-6">
          <img class="studio__store__image" src="https://placehold.jp/800x600.png" alt="...">
        </div>
        <div class="col-md-6">
          <div class="studio__store__item">
            <h2>STUDIO C</h2>
            <p>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。<br>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。<br>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。<br>
              STUDIOの店鋪説明文が入ります。STUDIOの店鋪説明文が入ります。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer("studio"); ?>
