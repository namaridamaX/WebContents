<?php get_header(); ?>


  <nav>
    <div class="log-box">
      <div class="log-1">NPO法人 海外子供事業支援協会 おぶさっく</div>
      <div class="log-2">OBSAC</div>
      <div class="log-3">Overseas Business Support Association for Children</div>
    </div>

    <div class="nav-box">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>achievements">活動実績</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>information">英会話情報</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>introduction">講師の紹介</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a></li>
      </ul>
    </div>
  </nav>

  <div id="philosophy">
    <p class="philosophy-1">理念</p>
    <p class="philosophy-2">我々オブサックは、途上国の子どものために立ち上がるNPO、NGO法人、その他団体への資金援助、寄付活動を目的にしたNPO法人です。1レッスン500円で質の高い語学教室を開き、その純利益全てを寄付活動に当てます。宮城県内の大学の教授の方や外国人さん方、熱意ある学生さん方、社団法人の方々など我々の理念に共感してくださる皆様に協力をいただきながら活動をしております。</p>
  </div>

  <div class="img">
    <img src="<?php echo get_theme_file_uri( 'img\relation.png' ); ?>" alt="" />
  </div>

  <a class="achievements" href="<?php echo esc_url( home_url( '/' ) ); ?>achievements">活動実績</a>
  <a class="achievements" href="<?php echo esc_url( home_url( '/' ) ); ?>information">英会話情報</a>
  <a class="achievements" href="<?php echo esc_url( home_url( '/' ) ); ?>introduction">講師の紹介</a>
  <a class="achievements" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a>

<?php get_footer(); ?>