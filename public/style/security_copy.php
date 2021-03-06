<?php
  header("Content-type: text/css");

  $content = file_get_contents('../../map.json');
  $json = json_decode($content, true);
?>

@import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap");

:root{
  --cor_principal: <?= $json['configuracoes']['website']['cor_principal'] ?>;
  --cor_secundaria: <?= $json['configuracoes']['website']['cor_secundaria'] ?>;
  --cor_filter_footer: <?= $json['configuracoes']['website']['cor_principal'] ?>98; 
  --cor_filter_header: <?= $json['configuracoes']['website']['cor_principal'] ?>a4;
}

* {
  margin: 0px;
  padding: 0px;
  font-family: 'Montserrat', sans-serif;
  border: none;
  outline: none;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-weight: normal;
  scroll-behavior: smooth; }
  * ::-webkit-scrollbar {
    width: 10px; }
  * ::-webkit-scrollbar-track {
    background: #fff;
    border-radius: 0px; }
  * ::-webkit-scrollbar-thumb {
    background: var(--cor_principal);
    border-radius: 0px; }
  * body img {
    max-width: 100%; }
  * body svg {
    max-width: 100%; }

.header_template {
  width: 100%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat; }
  .header_template .big_filter {
    width: 100%;
    min-height: 40vh;
    background-color: var(--cor_filter_header); }
    .header_template .big_filter #fixed_header {
      height: 90px;
      position: fixed;
      top: -90px;
      left: 0px;
      background-color: var(--cor_principal);
      padding: 1.5% 14%;
      z-index: 9999;
      transition: all linear .1s;
      box-shadow: 0px 0px 15px 1px #1111112c; }
    .header_template .big_filter .show {
      top: 0px !important; }
    .header_template .big_filter .header_top_line {
      width: 100%;
      display: flex;
      padding: 3% 14%;
      justify-content: space-between;
      align-items: center;
      top: 0px; }
      .header_template .big_filter .header_top_line .logo a img {
        width: <?= $json['configuracoes']['website']['proporcao_logo'] ?>%; }
      .header_template .big_filter .header_top_line ul {
        display: flex;
        justify-content: center;
        align-items: center; }
        .header_template .big_filter .header_top_line ul li a {
          color: #fff;
          display: block;
          margin-left: 20px;
          font-weight: bold; }
      .header_template .big_filter .header_top_line p {
        color: #fff;
        font-size: 2em;
        display: none; }
    .header_template .big_filter .banner_header {
      width: 100%;
      padding: 4% 14%;
      display: flex;
      justify-content: space-between;
      align-items: center; }
      .header_template .big_filter .banner_header .left_side, .header_template .big_filter .banner_header .right_side {
        width: 50%; }
      .header_template .big_filter .banner_header .left_side {
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        flex-direction: column; }
        .header_template .big_filter .banner_header .left_side h1 {
          color: #fff;
          font-weight: bold;
          font-size: 2.5em;
          margin-bottom: 30px; }
        .header_template .big_filter .banner_header .left_side p {
          color: #fff;
          line-height: 1.8em; }
      .header_template .big_filter .banner_header .right_side {
        display: flex;
        justify-content: flex-end;
        align-items: flex-start; }
        .header_template .big_filter .banner_header .right_side .container_simulation {
          background-color: #fff;
          padding: 40px 0px;
          width: 90%;
          border-radius: 5px;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column; }
          .header_template .big_filter .banner_header .right_side .container_simulation .header_simulation {
            width: 100%;
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; }
            .header_template .big_filter .banner_header .right_side .container_simulation .header_simulation p {
              width: 50%;
              font-size: 1em;
              border-radius: 50px;
              text-align: center;
              padding: 8px 12px;
              color: #fff;
              font-weight: 500;
              background: linear-gradient(183deg, var(--cor_secundaria), var(--cor_principal)); }
            .header_template .big_filter .banner_header .right_side .container_simulation .header_simulation small {
              color: #888;
              font-weight: 500;
              margin-top: 20px;
              font-size: 1.1em; }
          .header_template .big_filter .banner_header .right_side .container_simulation .valor_emprestimo {
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; }
            .header_template .big_filter .banner_header .right_side .container_simulation .valor_emprestimo .submenu {
              width: 100%;
              border-bottom: solid 1px #888;
              padding: 12px 12px;
              display: flex;
              justify-content: space-between;
              align-items: center;
              margin-bottom: 10px;
              transition: all linear .1s; }
              .header_template .big_filter .banner_header .right_side .container_simulation .valor_emprestimo .submenu h1 {
                color: #444; }
              .header_template .big_filter .banner_header .right_side .container_simulation .valor_emprestimo .submenu input[type=text] {
                width: 100%;
                color: var(--cor_principal);
                font-size: 1.8em;
                text-align: right; }
            .header_template .big_filter .banner_header .right_side .container_simulation .valor_emprestimo small {
              text-align: center;
              color: #666; }
          .header_template .big_filter .banner_header .right_side .container_simulation input[type=range] {
            width: 60%;
            margin-top: 25px;
            background-color: red;
            z-index: 1;
            opacity: 0;
            cursor: grab; }
          .header_template .big_filter .banner_header .right_side .container_simulation .range_bar {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: -12px;
            align-items: center; }
            .header_template .big_filter .banner_header .right_side .container_simulation .range_bar .bar_global {
              width: 57.5%;
              height: 10px;
              position: relative;
              border-radius: 50px;
              background-color: #ccc; }
              .header_template .big_filter .banner_header .right_side .container_simulation .range_bar .bar_global .bar_interno {
                width: 0%;
                height: 10px;
                border-radius: 50px;
                position: absolute;
                background: linear-gradient(183deg, var(--cor_secundaria), var(--cor_principal)); }
              .header_template .big_filter .banner_header .right_side .container_simulation .range_bar .bar_global .btn {
                position: absolute;
                left: 0%;
                width: 30px;
                box-shadow: 0px 2px 3px 1px rgba(0, 0, 0, 0.35);
                height: 30px;
                top: -11px;
                border-radius: 50px;
                background-color: #fff;
                cursor: grab; }
          .header_template .big_filter .banner_header .right_side .container_simulation .parcelas {
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            margin-top: 40px; }
            .header_template .big_filter .banner_header .right_side .container_simulation .parcelas .header_parcelas {
              text-align: center; }
              .header_template .big_filter .banner_header .right_side .container_simulation .parcelas .header_parcelas p {
                font-size: 16px;
                margin-top: 0px;
                color: #777;
                font-weight: 500;
                width: 100%; }
            .header_template .big_filter .banner_header .right_side .container_simulation .parcelas ul {
              width: 100%;
              margin-top: 15px;
              display: flex;
              justify-content: center;
              align-items: center; }
              .header_template .big_filter .banner_header .right_side .container_simulation .parcelas ul li .active {
                background: linear-gradient(183deg, var(--cor_secundaria), var(--cor_principal));
                color: #fff; }
              .header_template .big_filter .banner_header .right_side .container_simulation .parcelas ul li button {
                display: flex;
                justify-content: center;
                align-items: center;
                font-weight: 500;
                color: #666;
                background-color: #ebebeb;
                width: 40px;
                margin: 0px 5px;
                height: 40px;
                border-radius: 5px;
                cursor: pointer; }
                .header_template .big_filter .banner_header .right_side .container_simulation .parcelas ul li button:hover {
                  background: linear-gradient(183deg, var(--cor_secundaria), var(--cor_principal));
                  color: #fff; }
            .header_template .big_filter .banner_header .right_side .container_simulation .parcelas .valor_parcelado {
              width: 100%;
              display: flex;
              justify-content: flex-start;
              align-items: center;
              flex-direction: column;
              margin-top: 20px;
              transition: all linear .01s; }
              .header_template .big_filter .banner_header .right_side .container_simulation .parcelas .valor_parcelado p {
                color: #666;
                font-weight: 500;
                font-size: 16px; }
                .header_template .big_filter .banner_header .right_side .container_simulation .parcelas .valor_parcelado p span {
                  font-weight: bold; }
              .header_template .big_filter .banner_header .right_side .container_simulation .parcelas .valor_parcelado .max {
                width: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
                transition: all linear .1s; }
                .header_template .big_filter .banner_header .right_side .container_simulation .parcelas .valor_parcelado .max h1 {
                  color: #444;
                  font-weight: 500;
                  font-size: 1.5em; }
                .header_template .big_filter .banner_header .right_side .container_simulation .parcelas .valor_parcelado .max #valor_par {
                  margin-left: 10px;
                  transition: all linear .1s; }
            .header_template .big_filter .banner_header .right_side .container_simulation .parcelas a {
              background-color: #519b14;
              color: #fff;
              padding: 12px 24px;
              border-radius: 5px;
              margin-top: 20px; }
            .header_template .big_filter .banner_header .right_side .container_simulation .parcelas p {
              width: 90%;
              text-align: center;
              font-size: 13px;
              color: #666;
              margin-top: 15px; }
              .header_template .big_filter .banner_header .right_side .container_simulation .parcelas p strong {
                font-weight: 500; }

.first_section {
  width: 100%;
  padding: 6% 14%;
  display: flex;
  justify-content: space-between;
  align-items: flex-start; }
  .first_section .top_side_left, .first_section .top_right_side {
    width: 50%; }
  .first_section .top_side_left {
    display: flex;
    justify-content: flex-start;
    align-items: center; }
  .first_section .top_right_side {
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    flex-direction: column;
    padding: 4% 0%; }
    .first_section .top_right_side h1 {
      text-align: right;
      color: var(--cor_principal);
      font-weight: 700;
      font-size: 2.4em; }
    .first_section .top_right_side h3 {
      text-align: right;
      margin-top: 20px;
      color: #444;
      font-size: 18px;
      font-weight: 500; }
    .first_section .top_right_side p {
      text-align: right;
      margin-top: 10px;
      color: #666;
      font-size: 14px;
      line-height: 1.8em; }

.vantagens {
  width: 100%;
  padding: 2% 14%;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 20px; }
  .vantagens .container_text_info {
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: column; }
    .vantagens .container_text_info h1 {
      font-size: 18px;
      font-weight: 600;
      color: var(--cor_principal);
      margin-bottom: 15px; }
    .vantagens .container_text_info p {
      color: #666;
      line-height: 1.8em;
      font-size: 14px; }

.conteinar_box {
  width: 100%;
  padding-top: 3%;
  padding-bottom: 6%;
  padding-right: 14%;
  padding-left: 14%;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-gap: 20px; }
  .conteinar_box .box_container {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    border: solid 1px #ccc;
    box-shadow: 2px 2px 5px 1px #11111149;
    border-radius: 5px;
    padding: 24px 12px;
    flex-direction: column; }
    .conteinar_box .box_container i {
      font-size: 2.6em;
      color: #555;
      margin-bottom: 20px; }
    .conteinar_box .box_container h1 {
      text-align: center;
      color: var(--cor_principal);
      font-weight: 500;
      font-size: 19px; }

.how_work {
  width: 100%;
  padding: 6% 14%;
  background-color: #f4f4f4;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px; }
  .how_work .base_svg {
    display: flex;
    justify-content: center;
    align-items: center; }
  .how_work .how {
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: flex-end;
    flex-direction: column; }
    .how_work .how h1 {
      text-align: right;
      color: var(--cor_principal);
      font-weight: 700;
      font-size: 2.4em; }
    .how_work .how ul {
      display: flex;
      justify-content: flex-end;
      align-items: flex-end;
      flex-direction: column;
      margin-top: 50px; }
      .how_work .how ul li {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-bottom: 30px; }
        .how_work .how ul li p {
          width: 80%;
          color: #666;
          text-align: right;
          line-height: 1.8em;
          margin-right: 20px; }
        .how_work .how ul li i {
          width: 50px;
          height: 50px;
          display: flex;
          justify-content: center;
          align-items: center;
          background-color: #999;
          color: #fff;
          border-radius: 5px; }

.container_questions {
  width: 100%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
  padding: 6% 14%; }
  .container_questions .header_top {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 40px; }
    .container_questions .header_top h1 {
      text-align: right;
      color: var(--cor_principal);
      font-weight: 700;
      font-size: 2em; }
  .container_questions ul {
    width: 80%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column; }
    .container_questions ul li {
      margin-bottom: 50px; }
      .container_questions ul li .header_faq {
        width: 100%;
        padding: 12px;
        cursor: pointer;
        border-bottom: solid 1px var(--cor_principal);
        display: flex;
        justify-content: space-between;
        align-items: center; }
        .container_questions ul li .header_faq p {
          color: #555;
          font-weight: 600; }
        .container_questions ul li .header_faq i {
          cursor: pointer;
          color: #555; }
      .container_questions ul li .content {
        transition: all linear .2s;
        height: 0px;
        overflow: hidden; }
        .container_questions ul li .content p {
          color: #666;
          line-height: 1.8em;
          text-align: center; }
      .container_questions ul li .show {
        padding: 12px;
        height: 100px; }
    .container_questions ul li:last-child {
      margin-bottom: 0px; }

.fale_conosco {
  width: 100%;
  background: var(--cor_principal);
  padding: 5% 10%; }
  .fale_conosco .header_conosco {
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column; }
    .fale_conosco .header_conosco h1 {
      color: #fff;
      font-size: 2.5em;
      font-weight: bold;
      margin-bottom: 20px; }
    .fale_conosco .header_conosco p {
      color: #fff;
      text-align: center;
      letter-spacing: 1.5px; }
  .fale_conosco form {
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column;
    margin-top: 30px; }
    .fale_conosco form .duble_inputs {
      width: 65%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 3%; }
      .fale_conosco form .duble_inputs input[type=text], .fale_conosco form .duble_inputs input[type=email] {
        width: 100%;
        background-color: transparent;
        color: #fff;
        border-bottom: solid 1px #fff;
        padding: 12px;
        margin: 10px; }
        .fale_conosco form .duble_inputs input[type=text]::-webkit-input-placeholder, .fale_conosco form .duble_inputs input[type=email]::-webkit-input-placeholder {
          color: #fff; }
      .fale_conosco form .duble_inputs input:first-child {
        margin-left: 0px; }
      .fale_conosco form .duble_inputs input:last-child {
        margin-right: 0px; }
    .fale_conosco form textarea {
      width: 65%;
      background-color: transparent;
      color: #fff;
      resize: none;
      border-bottom: solid 1px #fff;
      padding: 12px; }
      .fale_conosco form textarea::-webkit-input-placeholder {
        color: #fff; }
    .fale_conosco form input[type=submit] {
      margin-top: 3%;
      background-color: #fff;
      color: var(--cor_principal);
      padding: 25px 48px;
      border-radius: 2px;
      cursor: pointer; }

footer {
  width: 100%;
  background-color: #111; }
  footer .filter_footer {
    padding: 6% 14%;
    background-color: var(--cor_filter_footer);
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column; }
    footer .filter_footer .header_footer {
      width: 100%;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      flex-direction: column; }
      footer .filter_footer .header_footer a {
        display: flex;
        justify-content: center;
        align-items: center; }
        footer .filter_footer .header_footer a img {
          width: 60%;
          margin: 0px; }
      footer .filter_footer .header_footer ul {
        display: flex;
        margin: 40px 0px;
        justify-content: center;
        align-items: center; }
        footer .filter_footer .header_footer ul li a {
          display: block;
          color: #fff;
          font-weight: 500;
          margin: 0px 20px; }
    footer .filter_footer .social_network {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center; }
      footer .filter_footer .social_network li a {
        display: flex;
        color: #fff;
        width: 40px;
        height: 40px;
        border: solid 1px #fff;
        border-radius: 50px;
        justify-content: center;
        align-items: center;
        margin: 0px 10px; }
    footer .filter_footer p {
      color: #fff;
      margin-top: 50px; }

.close {
  width: 100%;
  position: fixed;
  top: 0px;
  display: none;
  left: 0px;
  background-color: #00000062;
  min-height: 100vh;
  z-index: 999999999999; }
  .close .modal_menu {
    position: fixed;
    right: -65vw;
    top: 0px;
    width: 65vw;
    background-color: var(--cor_principal);
    min-height: 100vh;
    padding: 10% 5%;
    transition: all linear .2s; }
    .close .modal_menu ul {
      width: 100%;
      display: flex;
      justify-content: flex-start;
      align-items: flex-start;
      flex-direction: column; }
      .close .modal_menu ul li {
        width: 100%; }
        .close .modal_menu ul li a {
          width: 100%;
          padding: 12px;
          display: block;
          color: #fff;
          border-bottom: solid 1px #fff; }
  .close .show_menu_modal {
    right: 0vw; }

@media (max-width: 360px) {
  .header_template .big_filter #fixed_header {
    padding: 5%;
    height: 70px; }
  .header_template .big_filter .header_top_line {
    padding: 5%; }
    .header_template .big_filter .header_top_line .logo {
      display: flex;
      justify-content: center;
      align-items: center; }
      .header_template .big_filter .header_top_line .logo a {
        text-align: left; }
    .header_template .big_filter .header_top_line p {
      display: block; }
    .header_template .big_filter .header_top_line ul {
      display: none; }
  .header_template .big_filter .banner_header {
    flex-direction: column;
    padding: 5%; }
    .header_template .big_filter .banner_header .left_side, .header_template .big_filter .banner_header .right_side {
      width: 100%; }
    .header_template .big_filter .banner_header .left_side h1 {
      font-size: 2em; }
    .header_template .big_filter .banner_header .left_side {
      margin-bottom: 20px; }
      .header_template .big_filter .banner_header .left_side h1, .header_template .big_filter .banner_header .left_side p {
        text-align: center; }
    .header_template .big_filter .banner_header .right_side .container_simulation {
      width: 100%; }
      .header_template .big_filter .banner_header .right_side .container_simulation .valor_emprestimo {
        width: 90%; }

  .first_section {
    flex-direction: column;
    padding: 15% 5%; }
    .first_section .top_side_left, .first_section .top_right_side {
      width: 100%; }
    .first_section .top_right_side h1 {
      font-size: 1.8em;
      margin-bottom: 10px; }
    .first_section .top_right_side h3 {
      margin: 10px 0px; }
    .first_section .top_right_side h1, .first_section .top_right_side h3, .first_section .top_right_side p {
      text-align: center; }

  .vantagens {
    padding: 5%;
    grid-template-columns: 1fr; }
    .vantagens .container_text_info {
      align-items: center; }
      .vantagens .container_text_info h1 {
        font-size: 20px; }
      .vantagens .container_text_info h1, .vantagens .container_text_info p {
        text-align: center; }

  .conteinar_box {
    padding: 15% 5%;
    grid-template-columns: 1fr; }

  .how_work {
    grid-template-columns: 1fr;
    padding: 5%; }
    .how_work .how {
      align-items: center; }
      .how_work .how h1 {
        text-align: center; }
      .how_work .how ul li {
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        margin-bottom: 40px; }
        .how_work .how ul li p {
          text-align: center;
          margin-right: 0px; }
        .how_work .how ul li i {
          margin-top: 10px; }

  .container_questions {
    padding: 15% 5%; }
    .container_questions .header_top h1 {
      text-align: center; }
    .container_questions ul {
      width: 100%; }

  .fale_conosco {
    padding: 15% 5%; }
    .fale_conosco form .duble_inputs, .fale_conosco form textarea {
      width: 100%; }
    .fale_conosco form input[type=submit] {
      margin-top: 20px; }

  footer .filter_footer .header_footer {
    margin-bottom: 40px; }
    footer .filter_footer .header_footer ul {
      display: none; }
  footer .filter_footer p {
    text-align: center; } }
@media (max-width: 411px) {
  .header_template .big_filter #fixed_header {
    padding: 5%;
    height: 70px; }
  .header_template .big_filter .header_top_line {
    padding: 5%; }
    .header_template .big_filter .header_top_line .logo {
      display: flex;
      justify-content: center;
      align-items: center; }
      .header_template .big_filter .header_top_line .logo a {
        text-align: left; }
    .header_template .big_filter .header_top_line p {
      display: block; }
    .header_template .big_filter .header_top_line ul {
      display: none; }
  .header_template .big_filter .banner_header {
    flex-direction: column;
    padding: 5%; }
    .header_template .big_filter .banner_header .left_side, .header_template .big_filter .banner_header .right_side {
      width: 100%; }
    .header_template .big_filter .banner_header .left_side h1 {
      font-size: 2em; }
    .header_template .big_filter .banner_header .left_side {
      margin-bottom: 20px; }
      .header_template .big_filter .banner_header .left_side h1, .header_template .big_filter .banner_header .left_side p {
        text-align: center; }
    .header_template .big_filter .banner_header .right_side .container_simulation {
      width: 100%; }
      .header_template .big_filter .banner_header .right_side .container_simulation .valor_emprestimo {
        width: 90%; }

  .first_section {
    flex-direction: column;
    padding: 15% 5%; }
    .first_section .top_side_left, .first_section .top_right_side {
      width: 100%; }
    .first_section .top_right_side h1 {
      font-size: 1.8em;
      margin-bottom: 10px; }
    .first_section .top_right_side h3 {
      margin: 10px 0px; }
    .first_section .top_right_side h1, .first_section .top_right_side h3, .first_section .top_right_side p {
      text-align: center; }

  .vantagens {
    padding: 5%;
    grid-template-columns: 1fr; }
    .vantagens .container_text_info {
      align-items: center; }
      .vantagens .container_text_info h1 {
        font-size: 20px; }
      .vantagens .container_text_info h1, .vantagens .container_text_info p {
        text-align: center; }

  .conteinar_box {
    padding: 15% 5%;
    grid-template-columns: 1fr; }

  .how_work {
    grid-template-columns: 1fr;
    padding: 5%; }
    .how_work .how {
      align-items: center; }
      .how_work .how h1 {
        text-align: center; }
      .how_work .how ul li {
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        margin-bottom: 40px; }
        .how_work .how ul li p {
          text-align: center;
          margin-right: 0px; }
        .how_work .how ul li i {
          margin-top: 10px; }

  .container_questions {
    padding: 15% 5%; }
    .container_questions .header_top h1 {
      text-align: center; }
    .container_questions ul {
      width: 100%; }

  .fale_conosco {
    padding: 15% 5%; }
    .fale_conosco form .duble_inputs, .fale_conosco form textarea {
      width: 100%; }
    .fale_conosco form input[type=submit] {
      margin-top: 20px; }

  footer .filter_footer .header_footer {
    margin-bottom: 40px; }
    footer .filter_footer .header_footer ul {
      display: none; }
  footer .filter_footer p {
    text-align: center; } }
@media (max-width: 414px) {
  .header_template .big_filter #fixed_header {
    padding: 5%;
    height: 70px; }
  .header_template .big_filter .header_top_line {
    padding: 5%; }
    .header_template .big_filter .header_top_line .logo {
      display: flex;
      justify-content: center;
      align-items: center; }
      .header_template .big_filter .header_top_line .logo a {
        text-align: left; }
    .header_template .big_filter .header_top_line p {
      display: block; }
    .header_template .big_filter .header_top_line ul {
      display: none; }
  .header_template .big_filter .banner_header {
    flex-direction: column;
    padding: 5%; }
    .header_template .big_filter .banner_header .left_side, .header_template .big_filter .banner_header .right_side {
      width: 100%; }
    .header_template .big_filter .banner_header .left_side h1 {
      font-size: 2em; }
    .header_template .big_filter .banner_header .left_side {
      margin-bottom: 20px; }
      .header_template .big_filter .banner_header .left_side h1, .header_template .big_filter .banner_header .left_side p {
        text-align: center; }
    .header_template .big_filter .banner_header .right_side .container_simulation {
      width: 100%; }
      .header_template .big_filter .banner_header .right_side .container_simulation .valor_emprestimo {
        width: 90%; }

  .first_section {
    flex-direction: column;
    padding: 15% 5%; }
    .first_section .top_side_left, .first_section .top_right_side {
      width: 100%; }
    .first_section .top_right_side h1 {
      font-size: 1.8em;
      margin-bottom: 10px; }
    .first_section .top_right_side h3 {
      margin: 10px 0px; }
    .first_section .top_right_side h1, .first_section .top_right_side h3, .first_section .top_right_side p {
      text-align: center; }

  .vantagens {
    padding: 5%;
    grid-template-columns: 1fr; }
    .vantagens .container_text_info {
      align-items: center; }
      .vantagens .container_text_info h1 {
        font-size: 20px; }
      .vantagens .container_text_info h1, .vantagens .container_text_info p {
        text-align: center; }

  .conteinar_box {
    padding: 15% 5%;
    grid-template-columns: 1fr; }

  .how_work {
    grid-template-columns: 1fr;
    padding: 5%; }
    .how_work .how {
      align-items: center; }
      .how_work .how h1 {
        text-align: center; }
      .how_work .how ul li {
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        margin-bottom: 40px; }
        .how_work .how ul li p {
          text-align: center;
          margin-right: 0px; }
        .how_work .how ul li i {
          margin-top: 10px; }

  .container_questions {
    padding: 15% 5%; }
    .container_questions .header_top h1 {
      text-align: center; }
    .container_questions ul {
      width: 100%; }

  .fale_conosco {
    padding: 15% 5%; }
    .fale_conosco form .duble_inputs, .fale_conosco form textarea {
      width: 100%; }
    .fale_conosco form input[type=submit] {
      margin-top: 20px; }

  footer .filter_footer .header_footer {
    margin-bottom: 40px; }
    footer .filter_footer .header_footer ul {
      display: none; }
  footer .filter_footer p {
    text-align: center; } }

/*# sourceMappingURL=style.css.map */
