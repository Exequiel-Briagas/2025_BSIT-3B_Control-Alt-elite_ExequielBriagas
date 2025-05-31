<style>
  /* Content Header */
.content-header {
  padding: 20px 30px;
  background: #f8f9fa;
  border-bottom: 1px solid #dee2e6;
}

.content-header h1 {
  font-size: 32px;
  margin: 0;
  font-weight: 600;
  color: #343a40;
}

.content-header small {
  font-size: 14px;
  color: #6c757d;
}

.breadcrumb {
  background: none;
  margin-top: 10px;
  padding: 0;
  font-size: 14px;
  color: #6c757d;
}

.breadcrumb li {
  display: inline;
}

.breadcrumb li + li:before {
  content: "›";
  margin: 0 6px;
  color: #adb5bd;
}

.breadcrumb a {
  color: #007bff;
  text-decoration: none;
}

.breadcrumb .active {
  color: #495057;
}

/* Banner Section */
#banner {
  position: relative;
  margin-top: 20px;
}

#main-slider {
  position: relative;
  max-height: 450px;
  overflow: hidden;
}

#main-slider .slides {
  list-style: none;
  padding: 0;
  margin: 0;
}

#main-slider .slides li {
  position: relative;
}

#main-slider img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
}

/* Text Outside Container */
#main-slider h3,
#main-slider p {
  position: absolute;
  left: 8%;
  color: black;
  text-shadow: 1px 1px 2px rgba(255,255,255,0.8);
  margin: 0;
  padding: 0;
  z-index: 2;
}

#main-slider h3 {
  bottom: 30%;
  font-size: 36px;
  font-weight: bold;
}

#main-slider p {
  bottom: 22%;
  font-size: 18px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  #main-slider h3 {
    font-size: 24px;
    bottom: 25%;
  }

  #main-slider p {
    font-size: 16px;
    bottom: 18%;
  }
}

/* Call to Action Section */
#call-to-action-2 {
  background: #00cfee; /* Bright sky blue background */
  padding: 60px 0;
  color: #212529;
  text-align: center;
}

#call-to-action-2 h3 {
  font-size: 36px;
  font-weight: 700;
  color: #212529; /* Dark text for visibility */
  margin-bottom: 20px;
}

#call-to-action-2 p {
  max-width: 900px;
  margin: 0 auto;
  font-size: 18px;
  line-height: 1.8;
  color: #212529;
  padding: 0 20px;
}

/* Optional: Smooth rounded edge at the bottom (just for style) */
#call-to-action-2::after {
  content: "";
  display: block;
  height: 30px;
  background: white;
  border-top-left-radius: 100% 30px;
  border-top-right-radius: 100% 30px;
  margin-top: 30px;
}

/* Responsive Layout */
@media (max-width: 768px) {
  #call-to-action-2 h3 {
    font-size: 28px;
  }

  #call-to-action-2 p {
    font-size: 16px;
  }
}




</style>
    
    
    <!-- Content Header (Page header) -->
  

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


         

           