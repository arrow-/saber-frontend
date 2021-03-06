<?php 

$page_title = "Rules";

include 'includes/header.php'; ?>
			<!-- Main -->
			<article id="main">
				<header>
					<h2>Rules</h2>
					<p>Abide by these...</p>
				</header>
				<section class="wrapper style5">
					<div class="inner">
						<p >First and foremost, you agree that decisions made by the event managers pertaining to hosting, running, administering the tournaments will be final, and binding.</p>
						<p class="no-margin"><i>This document is <b>subject to change</b>, in that case <a href="index.html#news">News</a> will be updated, so stay tuned.</i><br>
					And,</p>
					<ul>
						<li> You promise to not indulge in malpractice and ensure that your bot (submitted computer program) conforms to these specifications <a href="#botspec">(below)</a>. If you fail to do so and are discovered, you will be banned and removed from the competition and the leaderboard on the discretion of the event managers.</li>
						<li>In case you suspect a bug in the game-engine, you will use the <a href="#" title="You can see it once you submit your first bot!">issue tool</a> provided so that we can review and resolve the problem.</li>
						<li>You must provide proof that you are an enrolled student at your institute by uploading a photo of your Institute ID Card, and any other identification documents as we require from you TO BE ELIGIBLE FOR THE PRIZES. Your bot WILL FEATURE on the leaderboard nevertheless.</li>
					</ul>
					<p>We will provide you template code in all the three supported languages, <code id='rules-code'>C, C++, python</code> and an API to affect your in-game-decisions in a turn based manner. You will not have to worry about input and output formatting as well as game-state parsing.
					You can test your bot against a few sample bots that we provide so you can feel the heat of the real-deal that your bot will handle in the finale.</p>
					<p>Reach us out in case of any clarifications on the game-engine or administration and we'll be happy to assist you! If you wish, you can follow our <a href="https://www.facebook.com/battleofthebots'16">fb page</a> to stay up-to-date with the proceedings, or just head over to <a href="index.html#news"><span class="bob">bob's</span> newspaper</a> for any news.</p>
				<div id="botspec">
					<h1>Bot Specifications</h1>
					<p class="no-margin">Your program,</p>
					<ul>
						<li>must not access the execution environment in any way. Specifically, the program
							<ul>
								<li>must not try to fork or spawn processes and threads</li>
								<li>must not try to access any other running process</li>
								<li>must not try to access any files, network streams</li>
							</ul>
							<li>must provide an output within the prescribed time-limit constraints</li>
							<li>must not utilise more than 15MB of memory at any time during execution</li>
						</ul>
						<p>In case of any violation detected during runtime, your bot-program will be killed and to everyone it will look as if your bot has timed out or crashed, but it will be awarded the rating for the game.</p>

					</p>
					</div>
					<div id="judgement">
				        <h1>Judging</h1>

				        <p>In the last week, 11 Feb to 18 Feb, 2016 we will run nightly tournaments to calibrate the leaderboards.
				        Bot rating is changed as per the <a href="https://en.wikipedia.org/wiki/Elo_rating_system">ELO Rating System</a> after each Game in the tournament.</p>
				    </div>
				    <div id="prize">
				        <h1>Prizes</h1>

				        <p>Prize may not completely be in cash. Our means of prize distribution will be finalised and expressed here by <b>Feb 8</b>.</p>
				    </div>
				</div>
			</section>
		</article>
		<?php include 'includes/footer.php'; ?>