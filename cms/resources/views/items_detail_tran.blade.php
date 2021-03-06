<!DOCTYPE html>

<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neenee-お悩み相談</title>
    <link rel="stylesheet" href="{{ secure_asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css')}}">

</head>    

<body>
    <!--ヘッダ-->
    <header class="header">　
        <div class="headerLogo" >
            <a href="{{url('/') }}" ><img src="/image/icon2.jpg" alt="TOP画像" class="example1 icon1"></a>
        </div>
        
        <div>
            <a href="{{url('/mypage') }}" ><img src="/image/user.jpg" width="50" height="50" class="icon2"></a>
            <a href="{{url('/items_create') }}" class="box2">出品する</a>
        </div>
            
    </header>
    
    <div class="pc-view">
    <!--アイテム詳細-->
    <!-- item_id -->
    <div>
        <input type="hidden" id="item_id" value="{{$item->user_id}}">
    </div>
    
    <!--カバー画像-->
    <div class="profile-header" style="background: url(/img/{{$item->user_id}}/{{$item->item_cov_img}}) center no-repeat;background-size:cover;">
        <!--<img src="/image/bts.jpg" alt="プロフィールヘッダー画像"class="profile-header-img" >-->
        <!--<img src="/img/{{$item->user_id}}/{{$item->item_cov_img}}" alt="プロフィールヘッダー画像"class="profile-header-img" >-->
    </div>
    
    <!--出品ユーザー情報-->
    <div class="item_block">
        <!--ユーザー画像 -->
        <div class="profile-img"> 
            <!--<img src="/image/user.jpg" class="profile-icon">-->
            <img src="/img/prof/{{$item->prof_img}}" class="profile-icon">
        </div>
        
        <!--ユーザー情報詳細-->
        <div class="profile-detail">
            
            <!--ユーザー名 -->
            <div class ="profile-user-info">
                    <!--<p class =name2>saki</p>-->
                    <p class =name2>{{$item->user_name}}</p>
            </div>
            
            <!--お気に入り数 ※一旦ダミー-->
            <div class="service-star2">
                <div>
                    <img src="/image/star.jpg" class="star-icon">
                    <img src="/image/star.jpg" class="star-icon">
                    <img src="/image/star.jpg" class="star-icon">
                    <img src="/image/star.jpg" class="star-icon">
                    <img src="/image/star.jpg" class="star-icon">
                </div>
                <div>
                    <p class="star-count">(55件)</p>
                </div>
                <div>
                    <img src="/image/heart.jpg" class="heart-icon">
                </div>    
                <div>
                    <p class="heart-count">121</p>
                </div>
            </div>
        </div>
        
        <!--一言-->
        <div class="balloon1 child">
            <!--<p>はじめまして！</p>-->
            <p>{{$item->item_comment}}</p>
        </div>
        
        <!--アイテム名-->
        <div>
            <!--<p class="profile-title">悩んだ時の駆け込み寺</p>-->
            <p class="profile-title">{{$item->item_name}}</p>
        </div>
        
        <!--タグ ※一旦ダミー-->
        <div class="tab">
            <div class="box">
                <p>MTF</p>
            </div>
            <div class="box">
                <p>お悩み</p>
            </div>
            <div class="box">
                <p>お悩み</p>
            </div>
            <div class="box">
                <p>お悩み</p>
            </div>
            <div class="box">
                <p>お悩み</p>
            </div>
        </div>
        
        <!--アイテム画像３つ-->
        <div class="img-list">
            <img img src="/img/{{$item->user_id}}/{{$item->item_img1}}" alt="アイテム画像1" class="item-img" >
            <img img src="/img/{{$item->user_id}}/{{$item->item_img2}}" alt="アイテム画像2" class="item-img" >
            <img img src="/img/{{$item->user_id}}/{{$item->item_img3}}" alt="アイテム画像3" class="item-img" >
        </div>
        
        
        
        <!--アイテム説明-->
        <div class="profile-text">
            <!--<p>おはこんばんちわ！遅刻ギリギリでもう-->
            <!--        大変！前髪パーラーをつけながら外に出ち-->
            <!--        ゃった22歳大学生のサキです。<br>-->

            <!--        こんなドジな私ですが、過去にはめっちゃ-->
            <!--        メンヘラでした。でも、今は何とか人生-->
            <!--        エンジョイ勢で頑張って呼吸してます。-->
            <!--        嫌な事の特効薬は、人と話すこととお酒だ-->
            <!--        なと思いました。人生悩んだら是非こんな-->
            <!--        私とお話してみましょう！<br>-->

            <!--        Let’s everyday 酒クズ<br>-->

            <!--        最近の癒しは韓流見ながら長風呂すること-->
            <!--        です。風呂場だから泣いてもオッケーだね！<br>-->
            <!--        あはは-->
            <!--</p>-->
            <p>{{$item->item_description}}</p>
        </div>
        
        <!--アイテム料金-->
        <div class="profile-price">
                <!--<p class="price2">10分/1,000円</p>-->
                <p class="price2">{{$item->item_price}}円</p>
        </div>
        
        <!--決済ボタン-->
        <!--<div class="profile-button">-->
        <!--    <a href="{{url('/items_tran')."/".$item->id }}"><button class="buy-button">購入画面にすすむ</button></a>-->
        <!--</div>-->
        
        <!--決済ボタン-->
        <!--連絡方法-->
        <div class="tool-box">
            <div class="tool-box-child1">
                <p class="tool-box-name">チャット</p></a>
            </div>
            <div class="tool-box-child1">
                <a href="{{url('/call')."/".$item->id }}"><p class="tool-box-name">音声通話</p>
            </div>
            <div class="tool-box-child1">
                <!--<a href="{{url('/video') }}"><p class="tool-box-name">TV通話</p></a>-->
                <a href="{{url('/video')."/".$item->id }}"><p class="tool-box-name">TV通話</p></a>
            </div>
        </div>
        
        
    </div>


</div>    
</body>
    
</html>    