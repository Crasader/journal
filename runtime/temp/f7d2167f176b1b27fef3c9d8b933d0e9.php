<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"F:\journal\public/../application/index\view\author\index.html";i:1578562079;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>投稿系统</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="http://www.journal.com/static/index/author/img/favicon.png" rel="icon">
  <link href="http://www.journal.com/static/index/author/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="http://www.journal.com/static/index/author/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="http://www.journal.com/static/index/author/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Pratt
    Template URL: https://templatemag.com/pratt-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

  <!-- Fixed navbar -->
  <div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand smothscroll" href="#home"><b>重庆工商大学派斯学院在线投稿系统</b></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#home" class="smothscroll">主页</a></li>
          <li><a href="#tougao" class="smothscroll">在线投稿</a></li>
          <li><a href="#draft" class="smothscroll">稿件管理</a></li>
          <li><a href="#message" class="smothscroll">个人信息修改</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <section id="home" name="home">
    <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
            <h3>欢迎 <b>作者</b></h3>
            <br>
          </div>

          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">基本信息</div>
            <!-- Table -->
            <table class="table">
              <tbody>
                <tr>
                  <td scope="row">作者：张三</td>
                  <td scope="row">电话：888888</td></tr>
                  <td scope="row">邮箱：123@qq.com</td>
                  <td scope="row">专业：计算机</td>
                </tr>
                <tr>
                  <td scope="row">已投稿件&nbsp;&nbsp;<span class="badge badge-primary">10</span></td>
                  <td scope="row">未审核稿件&nbsp;&nbsp;<span class="badge badge-warning">3</span></td></tr>
                  <td scope="row">已通过稿件&nbsp;&nbsp;<span class="badge badge-success">4</span></td>
                  <td scope="row">未通过稿件&nbsp;&nbsp;<span class="badge badge-danger">3</span></td>
                </tr>
                <tr>
                  <td><a href="">返回网站主页</a></td>
                  <td><a href="">注销账号</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #headerwrap -->
  </section>


  <section id="tougao" name="tougao">
    <!-- INTRO WRAP -->
    <div id="intro">
      <div class="container">
        <div class="row centered">
          <h1>在线投稿</h1>
          <form action="">
          <br>
          <div class="col-lg-4">
            <img  src="http://www.journal.com/static/index/author/img/intro01.png" alt="">
            <h3>选择稿件</h3>
            <p><div class="input-group">
               <input id='location' class="form-control" onclick="$('#i-file').click();" style="width: 360px;">
              <input type="file" name="file" id='i-file'  accept=".xls, .xlsx" onchange="$('#location').val($('#i-file').val());" style="display: none">
               </div></p>
          </div>
          <div class="col-lg-4">
            <img  src="http://www.journal.com/static/index/author/img/intro02.png" alt="">
            <h3>选择附件</h3>
            <p><div class="input-group">
               <input id='location' class="form-control" onclick="$('#i-file').click();" style="width: 360px;">
              <input type="file" name="file" id='i-file'  accept=".xls, .xlsx" onchange="$('#location').val($('#i-file').val());" style="display: none">
               </div></p>
          </div>
          <div class="col-lg-4">
            <p><input type="text" placeholder="请输入标题"></p>
            <p><input type="text" placeholder="请输入作者"></p>
            <p><select name="" id="" style="width: 100%;height: 34px;">
              <option value="">请选择类型</option>
              <option value="">文学</option>
              <option value="">物理</option>
              <option value="">生物</option>
              <option value="">数学</option>
            </select></p>
                <p><input type="submit" class="form-control" style="width: 100%;background-color: #43CD80;margin-top:71px;" ></p>
          </div>
          </br>
          </form>
        </div>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #introwrap -->
  </section>


  <section id="draft" name="draft">
    <div id="showcase">
      <div class="container">
        <div class="row centered">
        <h1>稿件管理</h1>
          <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed" aria-expanded="false">
      <h4 class="panel-title">已投稿件&nbsp;&nbsp;<span class="badge badge-primary">10</span></h4>
    </a>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
      <table class="table">
        <tbody>
          <tr>
            <th>标题</th>
            <th>状态</th>
            <th>审改意见</th>
            <th>操作</th>
          </tr>
          <tr>
            <td>标题111111</td>
            <td><span class="badge badge-success">通过</span></td>
            <td>
    <!-- 审改意见 -->
            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                审改意见
              </button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">审改意见</h4>
                    </div>
                    <div class="modal-body">
                      这里是审改意见
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                  </div>
                </div>
              </div>

    <!-- 审改意见end -->

              </td>
            <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                删除
              </button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
      <h4 class="panel-title">待审核稿件&nbsp;&nbsp;<span class="badge badge-success">4</h4>
    </a>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
      <table class="table">
        <tbody>
          <tr>
            <th>标题</th>
            <th>状态</th>
            <th>审改意见</th>
            <th>操作</th>
          </tr>
          <tr>
            <td>标题111111</td>
            <td><span class="badge badge-warning">待审</span></td>
            <td>
    <!-- 审改意见 -->
            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                审改意见
              </button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">审改意见</h4>
                    </div>
                    <div class="modal-body">
                      这里是审改意见
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                  </div>
                </div>
              </div>

    <!-- 审改意见end -->

              </td>
            <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                删除
              </button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="" aria-expanded="true">
      <h4 class="panel-title">未通过稿件&nbsp;&nbsp;<span class="badge badge-danger">3</h4>
    </a>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="true" style="">
      <table class="table">
        <tbody>
          <tr>
            <th>标题</th>
            <th>状态</th>
            <th>审改意见</th>
            <th>操作</th>
          </tr>
          <tr>
            <td>标题111111</td>
            <td><span class="badge badge-danger">未通过</span></td>
            <td>
    <!-- 审改意见 -->
            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                审改意见
              </button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">审改意见</h4>
                    </div>
                    <div class="modal-body">
                      这里是审改意见
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                  </div>
                </div>
              </div>

    <!-- 审改意见end -->

              </td>
            <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                删除
              </button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
        <br>
        <br>
        <br>
      </div>
      <!-- /container -->
    </div>
  </section>


  <section id="message" name="message">
    <div id="footerwrap">
      <div class="container">
        <div class="col-lg-5">
          <h3>Address</h3>
          <p>
            Av. Greenville 987,<br/> New York,<br/> 90873
            <br/> United States
          </p>
        </div>

        <div class="col-lg-7">
          <h3>Drop Us A Line</h3>

          <br>
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <label for="contact-name">Your Name</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email">Your Email</label>
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <label for="contact-message">Your Message</label>
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </section>
  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Pratt</strong>. All Rights Reserved 
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/pratt-app-landing-page-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Pratt template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="http://www.journal.com/static/index/author/lib/jquery/jquery.min.js"></script>
  <script src="http://www.journal.com/static/index/author/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="http://www.journal.com/static/index/author/lib/php-mail-form/validate.js"></script>
  <script src="http://www.journal.com/static/index/author/lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="http://www.journal.com/static/index/author/js/main.js"></script>

</body>
</html>
