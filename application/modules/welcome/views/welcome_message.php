<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='UTF-8'>

  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
	<Link rel='stylesheet prefetch' href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<Link rel='stylesheet' href='<?php echo base_url();?>assets/css/style.css' >
</head> 
	
	<body>
    <!--Start Frame-->
	<div id="frame">
        <!--Start sidepanel-->
		<div id="sidepanel">

        <!--Start Profile sidepanel-->
			<div id="profile" class="headerside">
				<div class="wrap">
					<img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                    <div style="float:right;">
                        <a href="#" style="margin-right:20px"><i class="fa fa-circle-o-notch fa-fw" aria-hidden="true"></i></a>
                        <a href="#" style="margin-right:20px"><i class="fa fa-commenting fa-fw" aria-hidden="true"></i></a>
                        <a href="#" style="margin-right:20px"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                    </div>
                    
                </div>	
			</div>
        <!--End Profile sidepanel-->

        <!--Start Search sidepanel-->
			<div id="search">
				<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
				<input type="text" placeholder="Search contacts..." />
			</div>
        <!--End Search sidepanel-->

        <!--Start Contact sidepanel-->
			<div id="contacts" class="bodyside">
				<ul>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
							<div class="meta">
                                <span style="float:right;">
                                    <p>01:00 PM</p>
                                </span>
                                <p class="name">Louis Litt</p>
                                <span style="float:right;">
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </span>
                                <p class="preview">You just got LITT up, Mike.</p>
                            </div>
                            
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
							<div class="meta">
								<p class="name">Harvey Specter</p>
								<p class="preview">Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do
									any one of a hundred and forty six other things.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/rachelzane.png" alt="" />
							<div class="meta">
								<p class="name">Rachel Zane</p>
								<p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/donnapaulsen.png" alt="" />
							<div class="meta">
								<p class="name">Donna Paulsen</p>
								<p class="preview">Mike, I know everything! I'm Donna..</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/jessicapearson.png" alt="" />
							<div class="meta">
								<p class="name">Jessica Pearson</p>
								<p class="preview">Have you finished the draft on the Hinsenburg deal?</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/haroldgunderson.png" alt="" />
							<div class="meta">
								<p class="name">Harold Gunderson</p>
								<p class="preview">Thanks Mike! :)</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/danielhardman.png" alt="" />
							<div class="meta">
								<p class="name">Daniel Hardman</p>
								<p class="preview">We'll meet again, Mike. Tell Jessica I said 'Hi'.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/katrinabennett.png" alt="" />
							<div class="meta">
								<p class="name">Katrina Bennett</p>
                                <p class="preview">I've sent you the files for the Garrett trial.</p>
                                <span>

                                </span>
                               
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/charlesforstman.png" alt="" />
							<div class="meta">
								<p class="name">Charles Forstman</p>
								<p class="preview">Mike, this isn't over.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<img src="http://emilcarlsson.se/assets/jonathansidwell.png" alt="" />
							<div class="meta">
								<p class="name">Jonathan Sidwell</p>
								<p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
        <!--End Contact sidepanel-->

		
        </div>
        <!--End sidepanel-->

        <!--Start Content-->
		<div class="content">
        
        <!--Start Header Profile-->
			<div class="contact-profile">
				<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
				<p>Harvey Specter</p>
				<div class="social-media">
					<i class="fa fa-search" aria-hidden="true"></i>
					<i class="fa fa-paperclip" aria-hidden="true"></i>
					<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				</div>
			</div>
        <!--End Header Profile-->
        <!--Start Body Message-->
			<div class="messages">
				<ul>
					<li class="replies">
						<p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
					</li>
					<li class="sent">

						<p>When you're backed against the wall, break the god damn thing down.</p>
					</li>
					<li class="replies">

						<p>Excuses don't win championships.</p>
					</li>
					<li class="sent">

						<p>Oh yeah, did Michael Jordan tell you that?</p>
					</li>
					<li class="replies">

						<p>No, I told him that.</p>
					</li>
					<li class="replies">

						<p>What are your choices when someone puts a gun to your head?</p>
					</li>
					<li class="sent">

						<p>What are you talking about? You do what they say or they shoot you.</p>
					</li>
					<li class="replies">
						<p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a
							hundred and forty six other things.</p>
					</li>
				</ul>
			</div>
            <!--End Body Message-->  

            <!--Start Input Message-->   
            <div class="message-input">
  			<div class="wrap">
					<button class="emote"><i class="fa fa-smile-o" aria-hidden="true"></i></button>
                    <!-- <button class="submit" style="float:left;" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>                     -->
					<input type="text" placeholder="Type a message" />
					<button class="submit"><i class="fa fa-microphone" aria-hidden="true"></i></button>
				</div>
			</div>
             <!--End Input Message-->
		</div> 
        <!--End Content-->

	</div>
    <!--Start Frame-->


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src='<?php echo base_url();?>assets/js/script.js'></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>

</html>