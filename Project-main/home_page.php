<?php   

session_start();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Reach Me Social Media Website Using HTML, CSS </title>

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <nav>
            <div class="container">
                <h2 class="logo">
                    Reach Me
                </h2>
                <div class="search-bar">
                    <i class="uil uil-search"></i>
                    <input type="search" placeholder="Search for creators, inspirations, and projects">
                </div>
                <div class="create">
                    <!-- <label class="btn btn-primary" for="create-post">Create</label> -->
                    <div class="profile-photo">
                        <img src="image/logo.png" alt="">
                    </div>
                </div>
            </div>
        </nav>

        <!-- ------------------------------start--------------------------------- -->
        <main>
            <div class="container">
                <!----------------- left-------------------->
                <div class="left">
                    <a class="profile">
                        <div class="profile-photo">
                            <img src="./image/logo.png">
                        </div>
                        <div class="handle">
                            <h4>Reach Me</h4>
                            <p class="text-muted">
                                @<?php echo $_SESSION['username']; ?>
                            </p>
                        </div>
                    </a>

                    <!----------------- SIDEBAR -------------------->
                    <div class="sidebar">
                        <a class="menu-item active">
                            <span><i class="uil uil-home"></i></span>
                            <h3>Home</h3>
                        </a>
                        <a class="menu-item">
                            <span><i class="uil uil-compass"></i></span>
                            <h3>Explore</h3>
                        </a>
                        <a class="menu-item" id="notifications">
                            <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span>
                            <h3>Notification</h3>
                            <!--------------- NOTIFICATION POPUP --------------->
                            <div class="notifications-popup">
                                <div>
                                    <div class="profile-photo">
                                        <img src="./image/ashishchanchlani.jpg">
                                    </div>
                                    <div class="notification-body">
                                        <b>Ashish Chanchlani</b> accepted your friend request
                                        <small class="text-muted">2 Days Ago</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="profile-photo">
                                        <img src="./image/carryminati.jpeg">
                                    </div>
                                    <div class="notification-body">
                                        <b>Carry Minati</b> commented on your post
                                        <small class="text-muted">1 Hour Ago</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="profile-photo">
                                        <img src="./image/Elvishyadav.jpg">
                                    </div>
                                    <div class="notification-body">
                                        <b>Elvish Yadav
                                        </b> and <b>283 Others</b> liked your post
                                        <small class="text-muted">4 Minutes Ago</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="profile-photo">
                                        <img src="./image/SUNNY LEONE 2.jpg">
                                    </div>
                                    <div class="notification-body">
                                        <b>Sunny Leone</b> commented on a post you are tagged in
                                        <small class="text-muted">2 Days Ago</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="profile-photo">
                                        <img src="./image/NORAFATEHI 1.jpg">
                                    </div>
                                    <div class="notification-body">
                                        <b>Nora Fatehi</b> commented on a post you are tagged in
                                        <small class="text-muted">1 Hour Ago</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="profile-photo">
                                        <img src="./image/salman.jpg">
                                    </div>
                                    <div class="notification-body">
                                        <b>Salman Khan
                                        </b> commented on your post
                                        <small class="text-muted">1 Hour Ago</small>
                                    </div>
                                </div>
                            </div>
                            <!--------------- END NOTIFICATION POPUP --------------->





                        </a>
                        <a class="menu-item" id="messages-notifications">
                            <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span>
                            <h3>Messages</h3>
                        </a>
                        <a class="menu-item">
                            <span><i class="uil uil-bookmark"></i></span>
                            <h3>Bookmarks</h3>
                        </a>
                        <a class="menu-item">
                            <span><i class="uil uil-chart-line"></i></span>
                            <h3>Analytics</h3>
                        </a>
                        <a class="menu-item" id="theme">
                            <span><i class="uil uil-palette"></i></span>
                            <h3>Theme</h3>
                        </a>

                        <a href="./index3.php" class="setting">
                            <span><i class="uil uil-setting"></i></span>
                            <h3>Setting</h3>

                        </a>

                    </div>
                    <!----------------- END OF SIDEBAR -------------------->
                    <label class="btn btn-primary" for="create-post">Create Post</label>
                </div>

                <!----------------- MIDDLE -------------------->
                <div class="middle">
                    <!----------------- STORIES -------------------->
                    <div class="stories">
                        <div class="story">
                            <div class="profile-photo">
                                <img src="./image/CUTTACK 1.jpg">
                            </div>
                            <p class="name">MY Story</p>
                        </div>
                        <div class="story">
                            <div class="profile-photo">
                                <img src="./image/Chandrayan 3.jpg">
                            </div>
                            <p class="name">Gunupur</p>
                        </div>
                        <div class="story">
                            <div class="profile-photo">
                                <img src="./image/kajol.jpg">
                            </div>
                            <p class="name">Deba</p>
                        </div>
                        <div class="story">
                            <div class="profile-photo">
                                <img src="./image/CSE 6.jpeg">
                            </div>
                            <p class="name">Gietu</p>
                        </div>
                        <div class="story">
                            <div class="profile-photo">
                                <img src="./image/tamannaah.jpg">
                            </div>
                            <p class="name">Gobinda</p>
                        </div>
                        <div class="story">
                            <div class="profile-photo">
                                <img src="./image/technicalguruji.jpg">
                            </div>
                            <p class="name">Abhisek</p>
                        </div>
                    </div>
                    <!----------------- END OF STORIES -------------------->
                    <form action="" class="create-post">
                        <div class="profile-photo">
                            <img src="image/logo.png">
                        </div>
                        <input type="text" placeholder="What's on your mind ?" id="create-post">
                        <input type="submit" value="Post" class="btn btn-primary">
                    </form>
                    <!----------------- FEEDS -------------------->
                    <div class="feeds">
                        <!----------------- FEED 1 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="./image/Chandrayan 2.jpeg">
                                    </div>
                                    <div class="info">
                                        <h3>Odisha</h3>
                                        <small>Cuttack, 45 Minutes Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <img src="" id="randomImage1">
                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/Elvishyadav.jpg"></span>
                                <span><img src="image/cd panda.jpg"></span>
                                <span><img src="image/sp panda.jpg"></span>
                                <p>Liked by <b>Abhisek Panda</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b></b> Standing tall in the heart of Cuttack, the iconic Cuttack Clock Tower is a
                                    timeless symbol of this historic city's
                                    heritage. With its elegant architecture and a rich history it continues to be a
                                    cherished landmark, reminding us of Cuttack's glorious past. 🕰️.
                                    <span class="harsh-tag">#lifestyle #odisha #odishatourism #odishaclicks
                                        #odishaphotographers
                                        #myodisha#streetsofodisha#incredibleodisha </span>
                                </p>
                            </div>
                            <div class="comments text-muted">
                                View all 277 comments
                            </div>
                        </div>
                        <!----------------- END OF FEED 1 -------------------->

                        <!----------------- FEED 2 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/CSE 6.jpeg">
                                    </div>
                                    <div class="info">
                                        <h3>Hacker</h3>
                                        <small>Delhi, 2 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <img src="" id="randomImage2">
                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/NORAFATEHI 3.jpg"></span>
                                <span><img src="image/SUNNY LEONE 2.jpg"></span>
                                <span><img src="image/NORAFATEHI 2.jpg"></span>
                                <p>Liked by <b>Ragni </b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b> </b> The Taj Mahal, a masterpiece of Mughal architecture, stands as an enduring
                                    symbol of love. Located in Agra, India, this
                                    white marble mausoleum was built by Emperor Shah Jahan in memory of his beloved wife
                                    Mumtaz Mahal. Its exquisite beauty
                                    and intricate design continue to captivate hearts worldwide.
                                    <span class="harsh-tag">#TajMahal #SymbolOfLove</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 100 comments
                            </div>
                        </div>
                        <!----------------- END OF FEED 2 -------------------->

                        <!----------------- FEED 3 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/GIET PHOTO 6.jpeg">
                                    </div>
                                    <div class="info">
                                        <h3>Gunupur</h3>
                                        <small>Gobriguda, 50 Minutes Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <img src="" id="randomImage3">
                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/sp panda.jpg"></span>
                                <span><img src="image/nvj rao.jpg"></span>
                                <span><img src="image/cd panda.jpg"></span>
                                <p>Liked by <b>GIETU</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b></b>Captured an eerie moment in the darkness. This spine-chilling ghost photo
                                    sends shivers down my spine.
                                    <span class="harsh-tag">#GhostlyEncounter #ParanormalPhotography 👻📷</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 50 comments
                            </div>
                        </div>
                        <!----------------- END OF FEED 3 -------------------->

                        <!----------------- FEED 4 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/GIET PHOTO 9.jpeg">
                                    </div>
                                    <div class="info">
                                        <h3>Giet University</h3>
                                        <small>Gunupur, 1 Hour Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <img src="" id="randomImage4">
                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/murmu.jpg"></span>
                                <span><img src="image/salman.jpg"></span>
                                <span><img src="image/Elvishyadav.jpg"></span>
                                <p>Liked by <b>Giet,Abhi,Deba</b> and <b>5, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Abhisek Panda</b> Capturing a moment of academic excellence at Giet - the
                                    vibrant campus, bustling with eager minds. A picturesque blend
                                    of modern architecture and natural beauty, where dreams take flight. 🎓📸
                                    <span class="harsh-tag">#GIETCampusVibes #AcademicExcellence
                                        #CampusLife</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 540 comments
                            </div>
                        </div>
                        <!----------------- END OF FEED 4 -------------------->

                        <!----------------- FEED 5 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/GIET PHOTO 10.jpeg">
                                    </div>
                                    <div class="info">
                                        <h3>Keonjhar</h3>
                                        <small>Town Odisha, 3 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <img src="image/NATURE 4.jpg">
                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/saru.jpg"></span>
                                <span><img src="image/salman.jpg"></span>
                                <span><img src="image/INDIA 1.jpg"></span>
                                <p>Liked by <b>Rosy,Ragini,Arman</b> and <b>1, 226 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Debashish</b> "Captured the breathtaking beauty of Kendhujhar Hill. Its
                                    lush green slopes bathed in the soft morning light
                                    create a mesmerizing landscape. Nature's masterpiece! 🌄🌿
                                    <span class="harsh-tag">#KendhujharHill
                                        #NaturePhotography #MorningGlow"</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 199 comments
                            </div>
                        </div>
                        <!----------------- END OF FEED 5 -------------------->

                        <!----------------- FEED 6 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/JAGANNATH 3.jpg">
                                    </div>
                                    <div class="info">
                                        <h3>Jagannath Temple</h3>
                                        <small>Puri, 5 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <img src="image/JAGANNATH 4.jpg">
                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/Elvishyadav.jpg"></span>
                                <span><img src="image/murmu.jpg"></span>
                                <span><img src="image/modi.png"></span>
                                <p>Liked by <b>Puri Official,Puri,Jagannath temple</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Chalo Odisha</b>The divine fervor at Puri Jagannath Temple during the Ratha
                                    Yatra - a spectacular spectacle of faith and tradition.
                                    Witnessing the grand procession of colossal chariots, resounding chants, and
                                    jubilant devotees was a mesmerizing
                                    experience. 🙏🏰🪶
                                    <span class="harsh-tag">#PuriJagannathRathaYatra #DivineJourney</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 277 comments
                            </div>
                        </div>
                        <!----------------- END OF FEED 6 -------------------->
                        <!----------------- FEED 6 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/JAGANNATH 3.jpg">
                                    </div>
                                    <div class="info">
                                        <h3>Jagannath Puri</h3>
                                        <small>Odisha, 5 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <img src="image/JAGANNATH 8.jpg">
                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/Elvishyadav.jpg"></span>
                                <span><img src="image/murmu.jpg"></span>
                                <span><img src="image/modi.png"></span>
                                <p>Liked by <b>Odisha Official ,Chalo odisha</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Puri Jagannath</b> "Captured the divine beauty of Puri Jagannath Temple today.
                                    Standing tall on the eastern coast of India, this sacred
                                    shrine is a symbol of spirituality and architectural brilliance. Its towering spires
                                    and intricate carvings narrate
                                    centuries of history and devotion. The temple is not just a place of worship; it's a
                                    sanctuary of peace and faith,
                                    drawing pilgrims from all corners of the world.
                                    🙏🏛️"
                                    <span class="harsh-tag">#PuriJagannathTemple #SacredBeauty
                                        #DivineArchitecture #EternalFaith</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 277 comments
                            </div>
                        </div>
                        <!----------------- END OF FEED 6 -------------------->
                        <!----------------- FEED 6 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/JAGANNATH 3.jpg">
                                    </div>
                                    <div class="info">
                                        <h3>Hacker</h3>
                                        <small>Hyderabad, 5 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <video src="image/CSE 9.mp4" height="500px" autoplay width="100%" controls
                                    muted></video>

                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/Elvishyadav.jpg"></span>
                                <span><img src="image/murmu.jpg"></span>
                                <span><img src="image/modi.png"></span>
                                <p>Liked by <b>hacker,rockey,Engineer</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Benjamin Dwayne</b> Tech Enthusiast's Dream🧰💰🎮🔥⌨️✨
                                    <span class="harsh-tag">#lifestyle#PCSetupGoals 🖥️💡#CreativeSetup 🎨💻</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 277 comments
                            </div>
                        </div>
                        <!----------------- END OF FEED 6 -------------------->



                        <!----------------- FEED 6 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/tamannaah.jpg">
                                    </div>
                                    <div class="info">
                                        <h3>Tamannaah Bhatia</h3>
                                        <small>Mumbai, 5 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <img src="image/GIET PHOTO 14.jpeg">
                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/Elvishyadav.jpg"></span>
                                <span><img src="image/murmu.jpg"></span>
                                <span><img src="image/modi.png"></span>
                                <p>Liked by <b>Gupta Dynasty</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Tamannaah</b>Shree Krishna Temple! Nestled in a tranquil corner, this
                                    sacred haven offers solace and spiritual rejuvenation. Adorned
                                    with exquisite architecture, it's a timeless tribute to Lord Krishna's divine grace.
                                    🕉️🏛️
                                    <span class="harsh-tag">#ShreeKrishnaTemple
                                        #DivineJourney #SereneSanctuary</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 277 comments
                            </div>
                        </div>
                        <!----------------- END OF FEED 6 -------------------->

                        <!----------------- FEED 7 -------------------->
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/INDIA 3.jpg">
                                    </div>
                                    <div class="info">
                                        <h3>ISRO</h3>
                                        <small>Bengaluru, 8 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">


                                <img src="image/Chandrayan 3.jpg">


                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/naveen.jpg"></span>
                                <span><img src="image/china.jpg"></span>
                                <span><img src="image/russia.jpg"></span>
                                <p>Liked by <b>N.modi,Droupadi Murmu,S. Somanath</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Chandrayaan-3</b>India's lunar mission, soared to success with
                                    precision and determination. It exemplified India's prowess
                                    in space exploration, landing softly on the moon's surface and achieving its
                                    scientific objectives flawlessly. A
                                    testament to Indian Space Research Organization's excellence and commitment to lunar
                                    exploration. 🌕🚀
                                    <span class="harsh-tag">#Chandrayaan3Success</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 277 comments
                            </div>



                        </div>
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/Elvishyadav.jpg">
                                    </div>
                                    <div class="info">
                                        <h3>Elvesh Yadav</h3>
                                        <small>Gurugram, 8 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <video src="./image/3.mp4" height="500px" autoplay width="100%" controls muted></video>

                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/naveen.jpg"></span>
                                <span><img src="image/china.jpg"></span>
                                <span><img src="image/russia.jpg"></span>
                                <p>Liked by <b>Abhisek,Vomik,Sameerdeep</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Elvesh Yadav</b> Elvesh Yadav' monumental meetup with a staggering 10,000 lakh
                                    enthusiastic individuals was nothing short of a
                                    resounding triumph! The event served as a testament to his unwavering charisma and
                                    magnetic appeal. With an electrifying
                                    atmosphere charged with positivity and inspiration, attendees experienced a
                                    one-of-a-kind gathering that left an
                                    indelible mark on their hearts and minds. Elvesh's ability to connect with such a
                                    massive audience showcases his
                                    incredible influence and dedication to empowering others. This historic meetup, a
                                    beacon of unity and motivation, will
                                    undoubtedly be etched in the annals of history.
                                    <span class="harsh-tag">#lifestyle#ElveshMeetupSuccess
                                        #10MillionStrong"</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 277 comments
                            </div>
                        </div>
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/INDIA 3.jpg">
                                    </div>
                                    <div class="info">
                                        <h3>Bharampur</h3>
                                        <small>Chilika, 8 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <video src="image/CHILIKA 2.mp4" height="500px" autoplay width="100%" controls
                                    muted></video>

                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/naveen.jpg"></span>
                                <span><img src="image/china.jpg"></span>
                                <span><img src="image/russia.jpg"></span>
                                <p>Liked by <b>Odisha,CM odisha</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Chilika Lake</b>🌊🦩
                                    Dive into the enchanting world of Chilika, India's largest coastal lagoon. This
                                    short video captures the serene waters,
                                    vibrant birdlife, and picturesque landscapes that make Chilika a natural wonder.
                                    Witness flocks of flamingos gracefully
                                    gliding over the shimmering blue expanse, while dolphins playfully dance beneath the
                                    surface. Explore the lush mangrove
                                    forests and the tranquil fishing villages that dot the shoreline. Every frame tells
                                    a story of ecological marvel and
                                    cultural richness. Join us on this virtual journey to Chilika, where nature's
                                    grandeur meets coastal charm. 🌅🐬🌿
                                    <span class="harsh-tag">#NatureWonders #ChilikaLake #CoastalBeauty</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 277 comments
                            </div>
                        </div>
                        <div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="image/INDIA 3.jpg">
                                    </div>
                                    <div class="info">
                                        <h3>Fodiee</h3>
                                        <small>Odisha, 8 Hours Ago</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="photo">
                                <video src="image/FOOD.mp4" height="500px" autoplay width="100%" controls muted></video>

                            </div>

                            <div class="action-buttons">
                                <div class="interaction-buttons">
                                    <span><i class="uil uil-heart"></i></span>
                                    <span><i class="uil uil-comment-dots"></i></span>
                                    <span><i class="uil uil-share-alt"></i></span>
                                </div>
                                <div class="bookmark">
                                    <span><i class="uil uil-bookmark-full"></i></span>
                                </div>
                            </div>

                            <div class="liked-by">
                                <span><img src="image/naveen.jpg"></span>
                                <span><img src="image/china.jpg"></span>
                                <span><img src="image/russia.jpg"></span>
                                <p>Liked by <b>Chalo Odisha,Fodiee</b> and <b>2, 323 others</b></p>
                            </div>

                            <div class="caption">
                                <p><b>Fodiee</b> "Fodiee Odisha" is a culinary journey through the heart of
                                    Odisha, India. This gastronomic odyssey celebrates the rich
                                    tapestry of flavors and traditions that define Odia cuisine. From piping hot plates
                                    of Dalma, a wholesome lentil and
                                    vegetable stew, to crispy Pakhala Bhata, fermented rice served with an array of
                                    delectable accompaniments, Fodiee Odisha
                                    captures the essence of this coastal state's food culture. Savor the intricate
                                    balance of sweet and savory in Rasagola,
                                    Odisha's gift to the dessert world. Explore the vibrant street food scene and
                                    experience the warmth of Odisha's
                                    hospitality, all through the lens of Fodiee Odisha.
                                    <span class="harsh-tag">#FoodieOdisha #OdiaCuisine
                                        #FlavorsOfOdisha</span>
                                </p>
                            </div>

                            <div class="comments text-muted">
                                View all 277 comments
                            </div>



                        </div>
                        <!----------------- END OF FEED 7 -------------------->
                    </div>
                    <!----------------- END OF FEEDS -------------------->
                </div>
                <!----------------- END OF MIDDLE -------------------->

                <!----------------- RIGHT -------------------->
                <div class="right">
                    <!------- MESSAGES ------->
                    <div class="messages">
                        <div class="heading">
                            <h4>Messages</h4>
                            <i class="uil uil-edit"></i>
                        </div>
                        <!------- SEARCH BAR ------->
                        <div class="search-bar">
                            <i class="uil uil-search"></i>
                            <input type="search" placeholder="Search messages" id="message-search">
                        </div>
                        <!------- MESSAGES CATEGORY ------->
                        <div class="category">
                            <h6 class="active">Primary</h6>
                            <h6>General</h6>
                            <h6 class="message-requests">Requests (7)</h6>
                        </div>
                        <!------- MESSAGES ------->
                        <div class="message">
                            <div class="profile-photo">
                                <img src="image/NORAFATEHI 1.jpg">
                            </div>
                            <div class="message-body">
                                <h5>Nora fatehi</h5>
                                <p class="text-muted">Wake up for College</p>
                            </div>
                        </div>
                        <!------- MESSAGES ------->
                        <div class="message">
                            <div class="profile-photo">
                                <img src="image/SUNNY LEONE 2.jpg">
                            </div>
                            <div class="message-body">
                                <h5>Sunny Leone</h5>
                                <p class="text-bold">Sending lots of love to you!</p>
                            </div>
                        </div>
                        <!------- MESSAGES ------->
                        <div class="message">
                            <div class="profile-photo">
                                <img src="image/Elvishyadav.jpg">
                                <div class="active"></div>
                            </div>
                            <div class="message-body">
                                <h5>Elvish Yadav</h5>
                                <p class="text-muted">"Grateful for your support .</p>
                            </div>
                        </div>
                        <!------- MESSAGES ------->
                        <div class="message">
                            <div class="profile-photo">
                                <img src="image/saru.jpg">
                            </div>
                            <div class="message-body">
                                <h5>Shah Rukh Khan</h5>
                                <p class="text-muted">Birtday Tomorrow</p>
                            </div>
                        </div>
                        <!------- MESSAGES ------->
                        <div class="message">
                            <div class="profile-photo">
                                <img src="image/salman.jpg">
                                <div class="active"></div>
                            </div>
                            <div class="message-body">
                                <h5>Salman Khan</h5>
                                <p class="text-bold">5 new messages</p>
                            </div>
                        </div>
                        <!------- MESSAGES ------->
                        <div class="message">
                            <div class="profile-photo">
                                <img src="image/newton.jpg">
                            </div>
                            <div class="message-body">
                                <h5>Sir Isaac Newton</h5>
                                <p class="text-muted">Greate Future</p>
                            </div>
                        </div>
                    </div>
                    <!------- END OF MESSAGES ------->

                    <!------- FRIEND REQUEST ------->
                    <div class="friend-requests">
                        <h4>Requests</h4>
                        <div class="request">
                            <div class="info">
                                <div class="profile-photo">
                                    <img src="image/modi.png">
                                </div>
                                <div>
                                    <h5>Shri Narendra Modi</h5>
                                    <p class="text-muted">80 mutual friends</p>
                                </div>
                            </div>
                            <div class="action">
                                <button class="btn btn-primary">
                                    Accept
                                </button>
                                <button class="btn">
                                    Decline
                                </button>
                            </div>
                        </div>
                        <div class="request">
                            <div class="info">
                                <div class="profile-photo">
                                    <img src="image/russia.jpg">
                                </div>
                                <div>
                                    <h5>Vladimir Putin</h5>
                                    <p class="text-muted">20 mutual friends</p>
                                </div>
                            </div>
                            <div class="action">
                                <button class="btn btn-primary">
                                    Accept
                                </button>
                                <button class="btn">
                                    Decline
                                </button>
                            </div>
                        </div>
                        <div class="request">
                            <div class="info">
                                <div class="profile-photo">
                                    <img src="image/china.jpg">
                                </div>
                                <div>
                                    <h5>Xi Jinping</h5>
                                    <p class="text-muted">5 mutual friends</p>
                                </div>
                            </div>
                            <div class="action">
                                <button class="btn btn-primary">
                                    Accept
                                </button>
                                <button class="btn">
                                    Decline
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------------- END OF RIGHT -------------------->
            </div>
        </main>

        <!----------------- THEME CUSTOMIZATION -------------------->
        <div class="customize-theme">
            <div class="card">
                <h2>Customize your view</h2>
                <p class="text-muted">Manage your font size, color, and background</p>

                <!----------- FONT SIZE ----------->
                <div class="font-size">
                    <h4>Font Size</h4>
                    <div>
                        <h6>Aa</h6>
                        <div class="choose-size">
                            <span class="font-size-1"></span>
                            <span class="font-size-2 active"></span>
                            <span class="font-size-3"></span>
                            <span class="font-size-4"></span>
                            <span class="font-size-5"></span>
                        </div>
                        <h3>Aa</h3>
                    </div>
                </div>

                <!----------- PRIMARY COLORS ----------->
                <div class="color">
                    <h4>Color</h4>
                    <div class="choose-color">
                        <span class="color-1 active"></span>
                        <span class="color-2"></span>
                        <span class="color-3"></span>
                        <span class="color-4"></span>
                        <span class="color-5"></span>
                    </div>
                </div>

                <!----------- BACKGROUND COLORS ----------->
                <div class="background">
                    <h4>Background</h4>
                    <div class="choose-bg">
                        <div class="bg-1 active">
                            <span></span>
                            <h5 for="bg-1">Light</h5>
                        </div>
                        <div class="bg-2">
                            <span></span>
                            <h5 for="bg-2">Dim</h5>
                        </div>
                        <div class="bg-3">
                            <span></span>
                            <h5 for="bg-3">Dark</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./index.js"></script>
        <script src="./gobinda.js"></script>
    </body>

</html>
