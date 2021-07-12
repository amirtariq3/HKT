@include('frontend.header')

<div class="directory_list_content">
    <div class="container">
      <div class="pagination">
        <ul>
           <li><a href="#">Home <i class="fa fa-angle-double-right"></i> </a> </li>
           <li><a href="#">Directory  <i class="fa fa-angle-double-right"></i> </a> </li>
           <li>News &amp; Press  </li>
        </ul>
      </div>
      <div class="row">
          <div class="col-md-8">
          <?php while ($a = $n->fetch_array()) {
              ?>
          <div class="directory_list_col" style="padding: 30px">
              <h3><?php echo $a['title'] ?> <span class="pull-right"><small><?php echo $a['date_added'] ?></small></span></h3>
              <p><?php echo $a['details'] ?></p>
              <a class="btn btn-theme" style="float: right">Read more...</a>
          </div>
          <?php
          } ?>
          </div>
          <div class="col-md-4">
               <?php include_once 'recently_added_companies.php'; ?>
               
               <div class="section_adds">
                   <h5>Ads will show there </h5>
               </div>
               
               <div class="section_adds">
                   <h5>Ads will show there </h5>
               </div>
               
               <div class="section_adds">
                   <h5>Ads will show there </h5>
               </div>
               
               <a href="#" class="advertise_button">Advertise with us</a>
               
          </div>
      </div>
  
  </div>
  </div>
  @include('frontend.footer')