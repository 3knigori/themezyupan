<?php
/*
Template Name: cafe
*/
get_header("cafe"); ?>

<main class="cafe">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="https://placehold.jp/800x400.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://placehold.jp/800x400.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://placehold.jp/800x400.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
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
  <section id="cafe-news">
    <div class="container">
      <h2 class="cafe__title"><span>NEWS</span></h2>
      <div class="cafe__news">
        <div class="cafe__news__item">
          <div class="cafe__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
        <div class="cafe__news__item">
          <div class="cafe__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
        <div class="cafe__news__item">
          <div class="cafe__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
        <div class="cafe__news__item">
          <div class="cafe__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
        <div class="cafe__news__item">
          <div class="cafe__news__time">2020/00/00 Sunday</div>
          <dl>
            <dt>新着情報のタイトルが入ります</dt>
            <dd>本文が入ります。本文が入ります。本文が入ります。本文が入ります。</dd>
          </dl>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer("cafe"); ?>
