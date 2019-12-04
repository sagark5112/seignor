<?php 
  include('header.php');
?>
<title> </title>
<?php 
  include('sidebar.php'); 
  $product_id = $_GET['id'];
?>  
      <div class="header" id="myHeader">        
          <img class="header__image" style="width: 140px" src="dist/images/logos/Blue/BluePng.png">
      </div>

      <div class="breadcrumb__wrapper background--primary">
          <div class="breadcrumb__inner container">
              <ul class="breadcrumb--list">
                  <li class="list-item"><a  class="list-item--link" href="#">Home</a></li>
                  <li class="list-item"><a  class="list-item--link" href="#">Product Overview</a></li>
                  <li class="list-item"><a  class="list-item--link" href="#">Product Name</a></li>
              </ul>
          </div>
      </div>

      <div class="product-detail__wrapper">
          <div class="product-detail__inner container">
              <div class="row product-row">
                  <div class="col-md-5">
                    <div class="product-img__wrapper">
                      <div id="myCarousel1" class="carousel slide" data-interval="false">
                        <div class="carousel-inner" role="listbox">
                          <div class="item active">
                            <img src="./dist/images/logo_1.svg">
                          </div>
                          <div class="item">
                              <img src="./dist/images/logo_2.svg">
                            </div>
                          <div class="item">
                              <img src="./dist/images/logo_3.svg">
                            </div>
                          <div class="item">
                              <img src="./dist/images/logo_4.svg">
                            </div>
                          <div class="item">
                              <img src="./dist/images/logo_2.svg">
                            </div>                            
                          <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                          </div>                        
                          <div id="thumbCarousel">
                            <div data-target="#myCarousel1" data-slide-to="0" class="thumb active"><img src="./dist/images/logo_1.svg" alt="XZ"></div>
                            <div data-target="#myCarousel1" data-slide-to="1" class="thumb"><img src="./dist/images/logo_2.svg" alt="XZ"></div>
                            <div data-target="#myCarousel1" data-slide-to="2" class="thumb"><img src="./dist/images/logo_3.svg" alt="XZ"></div>
                            <div data-target="#myCarousel1" data-slide-to="3" class="thumb"><img src="./dist/images/logo_4.svg" alt="XZ"></div>
                            <div data-target="#myCarousel1" data-slide-to="4" class="thumb"><img src="./dist/images/logo_2.svg" alt="XZ"></div>           
                          </div>                        
                        </div>
                      </div>
                  </div>    
                  <div class="col-md-7">
                    <div class="product-desc__wrapper">  
                      <div class="product-desc__inner">
                        <h2 class="product__title">Product Name here</h2>
                        <div class="product__info row">
                          <div class="product__category col-md-4">
                            <div class="product__info--inner">
                              <div class="product__info--title">
                                <span>Category</span>
                              </div>
                              <span class="product__category--name">Category Name</span>
                            </div>
                          </div>
                          <div class="product__tags col-md-8">
                            <div class="product__info--inner">
                              <div class="product__info--title">
                                <span>Search by tags</span>
                              </div>
                              <span class="product__tags--name"><a href="#">Tag Name</a></span>
                              <span class="product__tags--name"><a href="#">Tag Name</a></span>
                              <span class="product__tags--name"><a href="#">Tag Name</a></span>
                            </div>
                          </div>
                        </div>
                        <div class="product__description">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facilis dolorum. Blanditiis quisquam doloribus, a in minima repellat consequatur corrupti autem cum. Aperiam tenetur, iste cum libero ea est recusandae dolores eum suscipit nihil provident. Optio fuga, cupiditate asperiores at vitae molestias ex corporis assumenda eum adipisci rem amet ullam ea itaque facilis incidunt magni, numquam tempore? </p>
                        </div>
                        <div class="product__price">
                          <span class="product__price--title"><strong>Price Range:</strong></span>
                          <span class="product__price--desc">2400-3400</span>
                        </div>
                        <div class="product__actions">
                            <a href="tel:7021544940"><button class="btn btn--primary chevron-right">Call</button></a>
                          <button class="btn btn--primary chevron-right">Service</button>
                        </div>
                      </div>
                    </div>
                  </div>      
                </div>
                <div class=" row specs-row">
                  <div class="col-md-12">
                    <div class="specs--title">
                      <h1>Product Specifications</h1>
                    </div>
                    <div class="specs--table">
                      <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>      
                  </div>


              </div>
          </div>
      </div>

      <script type="text/javascript" src="./node_modules/slick-carousel/slick/slick.js"></script>
      <script src="js/commonScripts.js"></script>

      <!--Page Specific Scripts -->
      <script> 
        $(document).ready(function(){
          //Active thumbnail
          $("#thumbCarousel .thumb").on("click", function(){
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
          });
    
          //When the carousel slides, auto update
          $('#myCarousel1').on('slid.bs.carousel', function(){
            var index = $('.carousel-inner .item.active').index();
            var thumbnailActive = $('#thumbCarousel .thumb[data-slide-to="'+index+'"]');
            thumbnailActive.addClass('active');
            $(thumbnailActive).siblings().removeClass("active");
          });

          //Get Product Details
          var product_id = '<?php echo $product_id; ?>';
          $.ajax({
            url: 'http://seignorscaleindustries.com/backend/api/product/'+product_id,
            type: 'GET'
          }).done(function(data){
            console.log(data);
            var obj = data;
            console.log(obj);
          });
        });
      </script>
        