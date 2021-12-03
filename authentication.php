<?php
$uid=$_POST['username'];
$pwd=$_POST['password'];
$conn=mysqli_connect('localhost:3308','root','','gamingbaba');
$query="select * from user where uid='$uid' AND password='$pwd' ";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	 $data=$row["uname"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home</title>
      <link rel="stylesheet" href="style2.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body bgcolor="DarkGrey">

      <div class="wrapper">
            <header>

                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              PC Gamer
                        </div>
                        <div class="menu">
                              <ul>
				<li>Home</li>
                                <li><a href="games2.html">Games</a></li>   
				<li><a href="about.html">About</a></li>    
                                <li><a href="contact.html">Contact</a></li>
                                <li>Hiii, <?php echo "$data"; ?>
					
				</li>
				</ul>
			</div>
                  </nav>
            <div class="section">
			<h1>Welcome to PC Gamer</h1>
		</div>
            </header>	
            <div class="content">
                  <p>

				  A PC game, also known as a computer game or personal computer game, is a video game played on a personal computer rather than a dedicated video game console or arcade machine. Its defining characteristics include: more diverse and user-determined gaming hardware and software; and generally greater capacity in input, processing, and video output. The uncoordinated nature of the PC game market, and now its lack of physical media, make precisely assessing its size difficult.
                  </p>
                  <p>
					Online multiplayer games have achieved popularity largely as a result of increasing broadband adoption among consumers. Affordable high-bandwidth Internet connections allow large numbers of players to play together, and thus have found particular use in massively multiplayer online role-playing games, Tanarus and persistent online games such as World War II Online.
				 </p>
            </div>
			<video width="1510vh" height="900vh" autoplay controls loop="loop">
			<source src="video2.MKV" type="video/mp4">
			Your browser does not support the video tag.
			</video>
      </div>
      <script type="text/javascript">
      // Menu-toggle button
      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });
      // Scrolling Effect
      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
      </script>

</body>
</html>
