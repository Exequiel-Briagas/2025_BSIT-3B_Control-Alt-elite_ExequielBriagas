  <section id="banner">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
                <div class="flex-caption "  >
                    <h3>LOCALTHRIVE</h3> 
          <p>We create the opportunities</p> 
           
                </div>
              </li>
              <!-- <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/3.png" alt="" />
                <div class="flex-caption">
                   <h3>Specialize</h3> 
         <p>Success depends on work</p> -->
           
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Empower Local Partnerships</h3>
          <p>At LocalThrive, we foster meaningful, strategic collaborations between local talent and business leaders. Our platform is built on trust, speed, and community-driven values—connecting businesses with skilled individuals for short-term or project-based needs. By aligning goals and leveraging local expertise, we drive agile support and sustainable success across neighborhoods. This partnership model ensures mutual growth, promotes economic inclusivity, and transforms communities into thriving ecosystems of opportunity.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
  <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Business</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php 
   
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div>
  </section>
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Popular Jobs</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>    
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>Our Team</h3>
        </div>
        <div class="editContent"  style="height:265px;">
          <p> 
          &nbsp;&nbsp;At LocalThrive, our strength lies in our shared purpose and community-first mindset. We operate as one unified team—bridging strategy, technology, and human connection to support both local businesses and local talent. From frontline support staff to platform engineers, every team member is driven by the goal of creating accessible and meaningful opportunities within our neighborhoods.<br/><br/>

          Our collaborative culture values inclusivity, open dialogue, and action-oriented thinking. We believe that real impact happens when diverse perspectives come together—so we listen actively, work transparently, and adapt quickly. People often describe us as responsive, humble, and deeply invested in the people we serve.<br/><br/>

          We champion practical, sustainable results. Whether it’s launching a new job category, supporting a small business in need, or helping a freelancer land their first gig, we show up ready to make a difference. Our team members don’t just solve problems—they help others grow the skills to thrive long after the first hire. </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>Programes</span></h3>
                </div>
                <p>Empowering Local Workforce Through Strategic Placement
                At LocalThrive, we offer structured programs designed to match local talent with immediate, short-term, or long-term employment opportunities that align with their skills and availability. Whether it's a full-time position or a part-time freelance gig, our programs ensure that both businesses and workers thrive together.<br/><br/>

                <strong>FullTimeMatch:</strong> A streamlined recruitment path connecting professionals with stable, full-time roles such as administrative assistants, retail managers, and marketing coordinators.<br/>

                <strong>FlexiGigs:</strong> Designed for individuals seeking flexible schedules, this program connects talent to part-time and freelance jobs like tutoring, photography, or event coordination.<br/>

                <strong>WorkStart:</strong> For new job seekers or career changers, this initiative offers onboarding support, resume assistance, and matching guidance to jumpstart their employment journey.</p>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Latest News</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> LocalThrive Expands Job Categories 

                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                      We're excited to add more dynamic part-time and freelance job listings across our supported areas, enhancing access to diverse opportunities.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> Success Story:Freelancer to Full-Time
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      A local photographer who started with part-time gigs via LocalThrive has now joined a creative agency full-time thanks to one of our employer partners.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> New Employer Partnership 

                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                     Businesses in retail and logistics are increasingly relying on LocalThrive for fast, reliable staffing solutions.
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i> LocalThrive Hits 100 Hires
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      Thanks to community support and proactive employers, LocalThrive has matched over 100 job seekers to local opportunities within its first year.
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
              
              <div class="col-md-10">
                <div class="block-heading-two">
                  <h3><span>Testimonials</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>LocalThrive helped me land a tutoring gig that turned into a steady schedule. It's flexible eas, to use, and supports people like me who need part-time work.</p></blockquote>
                      <div class="carousel-info">
                      <img alt="" src="theme/a1.jpg" class="pull-left">
                      <div class="pull-left">
                        <span class="testimonials-name">Sarah L.</span>
                        <span class="testimonials-post">Freelance Tutor</span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>