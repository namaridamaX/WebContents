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

  <div class="greeting_box">
    <div id="greeting_img">
      <img src="<?php echo get_theme_file_uri('img\yagi.jpg'); ?>" alt="" />
    </div>
    <div id=greeting>
      <a id=name>八木晃輝
        <br>
        Yagi Kouki
        <br>
      </a>
      <br>
      東北学院大学３年、TOEIC900点、岩手大学合格後、英語の教員を目指して<br>
      入学を辞退し東北学院大学へ。英語の偏差値40→TOEIC900点を取得。<br>
      ニュージーランドで日本語のALTとして働き、その後はアフリカ,ガーナで<br>
      学校建設プロジェクトにインターンとして参加。留学生や県内に住む<br>
      外国人の方のご協力を頂き本英会話を建設。安価ですべての英語学習者に<br>
      英会話のお機会をの理念を掲げ邁進中。<br>
    </div>
  </div>
  <div class="comment_box">
    <a id="comment">コメント</a>
    <a>

    </a>
  </div>

  <a class="achievements" href="<?php echo esc_url( home_url( '/' ) ); ?>achievements">活動実績</a>
  <a class="information" href="<?php echo esc_url( home_url( '/' ) ); ?>information">英会話情報</a>
  <a class="introduction" href="<?php echo esc_url( home_url( '/' ) ); ?>introduction">講師の紹介</a>
  <a class="contact" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a>

<?php get_footer(); ?>