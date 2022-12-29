<?php get_header(); ?>


  <nav>
    <div class="nav-box">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>achievements">活動実績</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>information">英会話情報</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>introduction">講師の紹介</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a></li>
      </ul>
    </div>
  </nav>

  <div class="log_img">
    <img src="<?php echo get_theme_file_uri('img\log.jpg'); ?>" alt="" />
  </div>

  <div class="sub">
    <div id="txt">
      我々は安価で英語を学びたい皆様に英会話サービスを提供する非営利団体です。<br>
      皆様からは運営に最低限必要な代金のみいただきます。<br>
      余剰の利益に関しましては海外の子ども支援をしているNPO法人様に寄付しております。
    </div>
  </div>

  <div class="greeting">
    <div class="greeting_box">
      <div class="greeting_img">
        <img src="<?php echo get_theme_file_uri('img\yagi.jpg'); ?>" alt="" />
      </div>
      <div id=greeting>
        <a id=name>八木晃輝
          <br>
          Yagi Kouki
          <br>
        </a>
        <br>
        東北学院大学３年、TOEIC900点、岩手大学合格後、英語の教員を目指して
        入学を辞退し東北学院大学へ。英語の偏差値40→TOEIC900点を取得。
        ニュージーランドで日本語のALTとして働き、その後はアフリカ,ガーナで
        学校建設プロジェクトにインターンとして参加。留学生や県内に住む
        外国人の方のご協力を頂き本英会話を建設。安価ですべての英語学習者に
        英会話のお機会をの理念を掲げ邁進中。
      </div>
    </div>
  </div>

  <div class="comment_box">
    <a id="comment">代表挨拶<br></a>
    <a>
      皆さんこんにちは。八木晃輝と申します。英会話に行きたいけど、どこも高くて手が出ないという友人の声を<br>
      聞いて本英会話設立を決心致しました。英語を使って世界中の異なる考えを持った人と話す、自分の思いが<br>
      伝わった時の嬉しさを皆様とぜひ共有したいです。講師メンバー共々皆様の英語学習を全力でサポートさせて<br>
      頂きます。よろしくお願いいたします。<br>
    </a>
  </div>

  <div class="box">
    <div class="box11">
      <a class="achievements" href="<?php echo esc_url( home_url( '/' ) ); ?>achievements">活動実績</a>
    </div>

    <div class="box11">
      <a class="information" href="<?php echo esc_url( home_url( '/' ) ); ?>information">英会話情報</a>
    </div>
  </div>
  
  <div class="box">
    <div class="box11">
      <a class="introduction" href="<?php echo esc_url( home_url( '/' ) ); ?>introduction">講師の紹介</a>
    </div>

    <div class="box11">
      <a class="contact" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a>
    </div>
  </div>
 

 
  
  
  

<?php get_footer(); ?>