<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safar Tourism</title>

    <!-- font awesom cdn liner -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- External Css File -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
          include 'header.php';
    ?>
    <!-- Home Section Start -->
    <section class="home" id="home">
        <div class="content">
            <h3>Advanture is Worthwhile</h3>
            <p>Discover New Places with us, Advanture awaits</p>
            <a href="#" class="btn">Discover More</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="vi1.mp4"></span>
            <span class="vid-btn" data-src="vi2.mp4"></span>
            <span class="vid-btn" data-src="vi3.mp4"></span>
            <span class="vid-btn" data-src="vi4.mp4"></span>
            
        </div>

        <div class="video-container">
            <video src="vi1.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </section>
    <!-- Home Section End -->
    <!-- Book Section -->
     <section class="book" id="book">
        <h1 class="heading">
            <span>B</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>N</span>
            <span>o</span>
            <span>w</span>
        </h1>
        <div class="row">

            <div class="image">
                <img src="tourF.jpg" alt="">
            </div>
            <form action="">
                <div class="inputBox">
                    <h3>WHere To</h3>
                    <input type="text" placeholder="Place Name">
                </div>
                <div class="inputBox">
                    <h3>How Many</h3>
                    <input type="number" placeholder="Number Of Guests">
                </div>
                <div class="inputBox">
                    <h3>Arrivals</h3>
                    <input type="date">
                </div>
                <div class="inputBox">
                    <h3>Leaving</h3>
                    <input type="date">
                </div>
                <input type="submit" class="btn" value="Book Now">
                
            </form>

        </div>
     </section>
    
    <!-- Places Section -->
    <section class="po-pl" id="po-pl">
        <h1 class="heading">
            <span>P</span>
            <span>o</span>
            <span>p</span>
            <span>u</span>
            <span>l</span>
            <span>a</span>
            <span>r</span>
            <span class="space"></span>
            <span>P</span>
            <span>l</span>
            <span>a</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="box-container">

            <div class="box">
                <img src="jodhpur.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Jodhpur</h3>
                    <p>Jodhpur, the second largest city in Rajasthan is popularly known as the Blue City. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500</div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="w-bangal.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>West-Bengal</h3>
                    <p>West Bengal is a state in eastern India, between the Himalayas and the Bay of Bengal.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500</div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="jaisalmer.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Jaisalmer</h3>
                    <p>The dramatic desert fortress of Jaisalmer is an exotic city in Rajasthan’s great Thar Desert.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500</div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="jai.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Jaipur</h3>
                    <p>THE PINK CITY  Jaipur holds the distinction of being the first planned city of India.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500</div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="saputara.png" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Saputara</h3>
                    <p> Saputara is a quaint little hill station in the Dang district of Gujarat.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500</div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">   
                <img src="manali.webp" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Manali</h3>
                    <p> Manali will take your breath away dventure experiences in the heart of Himalayas.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500</div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>
            
            <div class="box">
                <img src="agra.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Agra</h3>
                    <p>Agra is a city on the banks of the Yamuna river in the Indian state of Uttar Pradesh.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500</div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="goa.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Goa</h3>
                    <p>The magical land of Goa is a land of celebrations and festivities.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500</div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Packages Section -->
    <section class="po-pl" id="po-pl">
        <h1 class="heading">
            <span>P</span>
            <span>o</span>
            <span>p</span>
            <span>u</span>
            <span>l</span>
            <span>a</span>
            <span>r</span>
            <span class="space"></span>
            <span>P</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="box-container">

            <div class="box">
                <img src="kutch.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Kutch</h3>
                    <p>Kutch is an erstwhile princely state of India holding onto its grandeur nature from the past. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500 <span>&#8360;9,000</span></div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="coorg.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Coorg</h3>
                    <p>Coorg is an enchanting land of misty hills, lush green valleys, and cascading waterfalls.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500 <span>&#8360;9,000</span></div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="kerla.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Kerla</h3>
                    <p>Kerala, known as "God's Own Country," features tranquil backwaters and lush landscapes.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500 <span>&#8360;9,000</span></div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>
            
            <div class="box">
                <img src="lakd.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Lakshadweep</h3>
                    <p>Lakshadweep: Pristine coral atolls with clear waters, white sands, and excellent snorkeling.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500 <span>&#8360;9,000</span></div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="ooty.webp" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Ooty</h3>
                    <p>Ooty, the "Queen of Hill Stations," offers picturesque tea gardens, cool climate and viewpoints. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500 <span>&#8360;9,000</span></div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="ellora.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>Ellora Caves</h3>
                    <p>Ellora Caves: Ancient rock-cut temples showcasing stunning architecture and intricate carvings.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">&#8360; 3,500 <span>&#8360;9,000</span></div>
                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Review Section -->
        <section class="Review" id="Review">

            <h1 class="heading">
                <span>R</span>
                <span>e</span>
                <span>v</span>
                <span>i</span>
                <span>e</span>
                <span>w</span>
                <span>s</span>
            </h1>
                        <div class="box">
                            <img src="vishu.jpg" alt="Img-1">
                            <h3>Vishal Patel</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et harum inventore commodi. Veniam, quae dolores vitae molestiae saepe corporis ipsum commodi distinctio libero a ratione. Velit voluptates similique fugiat magnam?</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <div class="box">
                            <img src="meet.png" alt="Img-2">
                            <h3>Meet Patel</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et harum inventore commodi. Veniam, quae dolores vitae molestiae saepe corporis ipsum commodi distinctio libero a ratione. Velit voluptates similique fugiat magnam?</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <div class="box">
                            <img src="paka.jpg" alt="Img-3">
                            <h3>Prakash Chavda</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et harum inventore commodi. Veniam, quae dolores vitae molestiae saepe corporis ipsum commodi distinctio libero a ratione. Velit voluptates similique fugiat magnam?</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>             

        </section>
    <!-- Review End -->
    <?php
          include 'footer.php';
    ?>
    <!-- JS file link -->
    <script src="script.js"></script>
</body>

</html>