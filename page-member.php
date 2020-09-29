<?php

/*
Template Name: 会員専用
*/

?>


<?php get_header(); ?>

<div class="container-fluid bg-gray">
    <div class="container">
        <div class="row">
            <h2 class="heading-lg">会員専用</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 kitou-top-box">
            <h3 class="heading-sm">会員専用ページ</h3>
            <div class="card kitou-card-box">
                <div class="row no-gutters">
                    <div class="col-md-6 pb-5">
                        <img src="<?php echo esc_url( get_theme_file_uri('images/member/member_image.jpg') ); ?>" width="182px" alt="イメージ画像">
                        <div class="card-body">
                        <p class="card-text">絶対音感コーチ学会®の認定校<br>ご入会の生徒ページです。<br><br>以下のボタンから<br>パスワードを入力してください。</p>
                        </div>
                        <div class="kitou-btn-box"><a class="kitou-btn2">認定校　生徒専用ページ</a></div>
                    </div>
                    <div class="col-md-6 pb-5">
                        <img src="<?php echo esc_url( get_theme_file_uri('images/member/member_image2.jpg') ); ?>" width="136px" alt="イメージ画像">
                        <div class="card-body">
                        <p class="card-text">絶対音感コーチ学会®<br>認定コーチのページです。<br><br>以下のボタンから<br>パスワードを入力してください。</p>
                        </div>
                        <div class="kitou-btn-box"><a class="kitou-btn2">認定コーチ　専用ページ</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
