<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 Template Name:  Movers & Shakers
 */

get_header();

$permalink = get_permalink();
$homePage = home_url('/');
$subPage = substr($permalink, 25, 5);
	
if ($subPage=="about") {
	$mainTitle = "About Us";
	$subUrl = "about";
} else if ($subPage=="progr"){
	$mainTitle = "Our Programs";
	$subUrl = "programs";
} else if ($subPage=="movem"){
	$mainTitle = "Global Movement";
	$subUrl = "movement";
} else if ($subPage=="learn"){
	$mainTitle = "Learn More";
	$subUrl = "learn-more";
} else if ($subPage=="join-"){
	$mainTitle = "Join Us";
	$subUrl = "join-us";
}?>

<div id="main" class="mtwWrapper mtwPage clearfix" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      	<article class="subTitleBar">
			<?php
			$currentTitle = get_the_title($post);
			$currentTitleImg = str_replace(' ', '', $currentTitle);
			$parent = $post->post_parent;
			$parentTitle = get_the_title($post->post_parent);
			$grandparent_get = get_post($parent);
			$grandparent = $grandparent_get->post_parent;
			// if there is a gparent, display the link
			if($grandparent != 0){
				echo '<a href="'.get_permalink($grandparent).'" class="gparentLink">'.get_the_title($grandparent).'</a> &raquo;';
			}
            // if there is a parent, display the link
			if($currentTitle != $mainTitle){
				echo '<a href="'.get_permalink($parent).'" class="parentLink">'.get_the_title($parent).'</a> &raquo;';
			}
			// current link
			?>
			<a href='<?php the_permalink() ?>' class="currentLink"><?php the_title(); ?></a> &raquo;</article>
        <article class="hdrPageImg"><img src="<?php echo $homePage ?>wp-content/images/<?php echo $subUrl ?>/hdr<?php echo $currentTitleImg ?>.jpg" alt="page header" /></article>
        <section class="pageContent pageMovers">
        	<?php the_content('Read the rest of this entry &raquo;'); ?>
        </section>
        <div class="moverPopups">
        	<a href="" class="btnClosePopup spriteLink"><img src="/wp-content/images/shim.gif" alt="close popup" /></a>
        	<div id="saraPotler" class="popupPerson">
            	<img src="/wp-content/images/movers/moverSaraPotlerLahayneRO.png" alt="Sara Potler Lahayne" class="imgMoverPopup floatLeft" />
                <p class="floatLeft personTitle"><span class="moverName">Sara Potler Lahayne</span>Founder &amp; CEO</p>
                <article class="personBio clear">
		        	<p>A life-long dancer and previous professional performer, Sara was a Fulbright Scholar in Bogot&aacute;, Colombia when she authored, implemented, and evaluated the original Move This World curriculum with third graders in Colombian public elementary schools. Today she is the CEO of Move This World, a conflict transformation program that has worked with over 10,000 individuals across 22 cities in four continents.</p>
        			<p>A graduate of the University of Virginia, Sara is a Global Shaper with the World Economic Forum; an American Express Ashoka Emerging Innovator; a Cordes Fellow with the Opportunity Collaboration; a Peace X Peace 2012 Women, Power, &amp; Peace Award Winner (Generation Peace Award); the only U.S. recipient of the Youth Leader Award in the Americas by the Inter-American Development Bank Annual Board of Governors Meeting; an Ashoka Activating Empathy Award Winner; a two-time Beyond Sport Award Finalist; named a &ldquo;Woman Entrepreneur&rdquo; by World Resources Institute New Ventures Mexico; a StartingBloc Fellow; a Finalist Nominee Social Entrepreneur/Innovator for the Women’s Information Network 18th Annual Young Women of Achievement Award; 1 of 3 Artists Transforming the World by the Arts and Healing Network; Global Good Fund Fellow; and a Susan Schiffer Stautberg Leadership Fellow.</p>
                    <p>She has presented at conferences across 5 continents and been featured in <i>Forbes</i>, <i>The Washington Post</i>, <i>The Guardian</i>, <i>The Carnegie Council&rsquo;s Policy Innovations</i>, <i>Americans for the Arts</i>, <i>Ashoka</i>, <i>El Tiempo</i>, <i>Unrest Magazine</i>, <i>Rising Pyramid</i>, <i>Whole Living Magazine</i>, <i>Martha Stewart Radio on SiriusXM</i>, <i>the International Platform on Sport and Peace</i>, and <i>El Espectador</i>, among others.</p>
                </article>
        	</div><!-- #saraPotler -->
            <div id="katherineLam" class="popupPerson">
            	<img src="/wp-content/images/movers/moverKatherineLamRO.png" alt="Katherine Lam" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Katherine Lam</span>Director of Operations</p>
               	<article class="personBio clear">
					<p>Katherine works at the nexus of social change, innovation and entrepreneurship. She is the Director of Operations at Move This World where she works with a creative and passionate international team to transform conflict and prevent violence across 4 continents. Previously, she worked with Ashoka Changemakers&mdash;fostering social entrepreneurship and innovation and served as the Executive Director of the Village Education Project&mdash;funding education scholarships for Ecuadorian students. Katherine graduated from Swarthmore College with a B.A. in Political Science with High Honors where she served as a Eugene Lang Opportunity Scholar.</p>
                    <p><b>Favorite thing about MTW:</b> As an operations person who is in-my-head all the time, problems that I used to label as impossible, I now see a different possibility because of kinesthetic learning. We are taught that cognitive learning is the most valuable method to solve problems but it misses an entire realm of possibility—learning using our bodies. There is something very fundamentally powerful about understanding our own bodies and being comfortable in them.</p>
                    <p><b>What excites her:</b> African dance and drumming</p>
                    <p><b>Wha&rsquo;’s on her mind:</b> How we build structures to encourage people to co-exist.</p>
                </article>
            </div><!-- #katherineLam-->
            <div id="yolondaEarlThompson" class="popupPerson">
           		<img src="/wp-content/images/movers/moverYolondaEarlThompsonRO.png" alt="Yolonda Earl-Thompson" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Yolonda Earl-Thompson</span>U.S. Program Manager</p>
               	<article class="personBio clear">
					<p>Yolonda is a Detroit native and graduate of Mount Vernon College (now under George Washington University) who believes her purpose in life is to heal and restore people in an effort to help them live out their destiny. She joined MTW as a PeaceMover in 2011 and later quit the corporate life to join the MTW movement full-time. This wife and mother of 2 sons finds great joy in speaking out for her community.</p>
					<p><b>Why I MTW:</b> My ability to reach both youth and adults with an amazing curriculum that is limitless in its ability to reach and teach everyone, including myself.  Every time I share with others about MTW I experience growth emotionally and socially.</p>
					<p><b>Quote she lives by:</b> Don&rsquo;t let your mind trump your spirit.</p>
					<p><b>On her bucket list:</b> Sing on a major stage</p>
               	</article>
           	</div><!-- #yolondaEarlThompson-->
			<div id="primeCabanes" class="popupPerson">
           		<img src="/wp-content/images/movers/moverPrimeCabanesRagandangRO.png" alt="Prime Cabanes Ragandang III" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Prime Cabanes Ragandang III</span>Philippines Director</p>
               	<article class="personBio clear">
					<p>Prime is a Political Science professional from Mindanao State University-Iligan Institute of Technology in Southern Philippines. Before joining Move This World, he was a university instructor in Mindanao. He was the Founder and Philippine Executive Director of MasterPeace, a Cairo-based global movement. He has been twice to the Netherlands as the Philippine representative to an international meeting on Millennium Development Goals, Youth Volunteering and Peace Education from developing countries, sponsored by the Netherlands Committee on Sustainable Development and International Cooperation (NCDO). He was also a scholar of the Japan Overseas Missionaries Assistance Society (JOMAS) and the Sen. Kiko Pangilinan Scholarship Program. He holds both a B.A. Cum Laude in Political Science from Mindanao State University of Science and Technology and a M.P.A. from Mindanao University of Science and Technology.</p>
					<p><b>Why I am excited about Move This World:</b> Growing up, working and studying in the most war-ridden island in the Philippines might explain my desire to get involved in peace building. I believe that instilling the culture of peace through the minds of young people is the most sustainable way. Using movement can be very effective way to capture vulnerable and young minds. I am a Filipino. I will do this for my beloved country. But I am also a citizen on Earth. I will do this for the entire community.</p>
					<p><b>Quote he lives by:</b> There&rsquo;s always sun after the rain.</p>
					<p><b>Favorite Activity:</b> Though I&rsquo;m not an expert, I love cooking experiments!</p>
               	</article>
           	</div><!-- #primeCabanes-->
			<div id="ginaEscobar" class="popupPerson">
           		<img src="/wp-content/images/movers/moverGinaEscobarRO.png" alt="Gina Escobar" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Gina Escobar</span>Europe Director</p>
              	<article class="personBio clear">
					<p>Gina is a Colombian currently living in Leipzig, Germany. She is a PhD Candidate in Sociology at the University of Vienna, with a focus on internal displacement and gender and ethnic inequality in Colombia. She holds an M.A degree in Global Studies – A European Perspective from the Universities of Leipzig and Vienna and a B.A degree in Languages and Sociocultural Studies from the University of Los Andes in Colombia.</p>
					<p>Her experience involves the implementation and promotion of projects concerned with organized crime prevention at the United Nations Office on Drugs and Crime in Vienna. She is working on the creation of a project related to the Internally Displaced Population in Colombia in partnership with La Fundacion Femenina de Servicio Social del Meta.</p>
					<p><b>Why I am excited about Move This World:</b> MTW provides me the possibility to work with two of my passions: dance and cultural exchange. Through its program, I conceive the opportunity to contribute to a better future for our communities. Coming from a country like Colombia, I can&rsquo;t help to think that maybe one day my country would experience zero violence, which I believe is only possible through programs like Move This World. What I like most about Move This World is that it is not only about dancing, but most importantly about changing our mentality to make sure new generations do not continue to reproduce the social problems that currently afflict our societies.</p>
               	</article>
           	</div><!-- #ginaEscobar-->
			<div id="adrianaGuzman" class="popupPerson">
           		<img src="/wp-content/images/movers/moverAdrianaGuzmanRO.png" alt="Adriana Guzman" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Adriana Guzman</span>Latin America Partnerships Coordinator</p>
               	<article class="personBio clear">
					<p>Adriana has worn many hats as a teaching artist in New York City, an arts coordinator and a Peace Corps volunteer. As a student at Pratt Institute, she majored in Communication Design, minored in Art Education and worked with at-risk youth and vulnerable populations. She has worked with after school and summer programs teaching youth and adults how to use visual art as a tool for expression, developed arts curriculum and coordinated arts events. In particular, she has focused on multiculturalism in NYC and has experience working in Guatemala, The Dominican Republic, and Morocco.</p>
                    <p>She is currently pursuing her Masters Degree in Intercultural Service Leadership and Management from the School for International Training. She is extremely excited personally and professionally to be working with Move This World Latin America as she values building strong partnerships and multicultural teams.</p>
                    <p><b>Why I MTW:</b> I Move This World because I believe in peace and happiness. A large part of happiness comes from being ourselves and owning who we are, and we can develop that piece of ourselves through creative expression. MTW shares tools that can guide us in positive self-expression and empathy-building, both of which can ultimately lead us towards happiness and peaceful coexistence.</p>
                    <p><b>A favorite book:</b> <i>The Alchemist</i> by Paulo Coelho</p>
               	</article>
           	</div><!-- #adrianaGuzman-->
			<div id="denashaBullock" class="popupPerson">
           		<img src="/wp-content/images/movers/moverDenashaBullockRO.png" alt="Denasha Bullock" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Denasha Bullock</span>DC Partnerships Coordinator</p>
               	<article class="personBio clear">
					<p>A native Washingtonian, Denasha has been working in youth outreach for the past five years. Her passion for youth development led her to pursue her bachelor&rsquo;s degree in psychology at the College of William and Mary. She has been dancing for eight years and continues to make dance an integral part of her life. Denasha fused her passions for dance and youth outreach in her work as a PeaceMover for MTW. </p>
					<p><b>Why I MTW:</b> When I think about MTW I think about all the young people that I went to school with&mdash;the people that I run into at the grocery store or the gas station, the people that fell through the cracks. I only wish that my classmates could have had a program like MTW, one that opened their eyes to a world less dangerous and more promising.</p>
					<p><b>On her bucket list:</b> See Stevie Wonder in concert</p>
					<p><b>A favorite book:</b> <i>A Return to Love</i> by Marriane Williamson</p>
              	</article>
           	</div><!-- #denashaBullock-->
			<div id="anyaWarburg" class="popupPerson">
         		<img src="/wp-content/images/movers/moverAnyaWarburgRO.png" alt="Anya Warburg" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Anya Warburg</span>Program Coordinator</p>
             	<article class="personBio clear">
					<p>A lifelong performer, Anya moved to Los Angeles after completing her BA in Theatre Studies from Emerson College, where her dreams transformed when she realized that her true passion lies not just in performing, but also in using her love of theatre and dance as a vehicle for social change. She worked with STAR Education, the Unusual Suspects Theatre Company, Warner Elementary School, and the Youth Justice Coalition in Los Angeles. In 2012, Anya earned her MA in Applied Theatre Arts from the University of Southern California, where she was trained in the activism and therapeutic techniques of Theatre of the Oppressed. Since her move back to the East Coast in August 2012, she has worked in several NYC public schools as a teaching artist for LeAp NYC and a PeaceMover for Move This World.</p>
					<p><b>A favorite book:</b> <i>Lean In</i> by Sheryl Sandberg</p>
					<p><b>Favorite activity:</b> Whether it is sunny or snowy, I like to walk and run in Central Park with my dog, Tux, early in the morning.</p>
					<p><b>Why I am excited about Move This World:</b> In my work so far, I have witnessed first hand the ways in which exploration through the art of movement can raise critical questions, open space for dialogue, and inspire counter narratives to normalized violence and oppression— beginning the process of transformation on the individual as well as the collective level.</p>
               	</article>
           	</div><!-- #anyaWarburg-->
			<div id="anthonyNewman" class="popupPerson">
           		<img src="/wp-content/images/movers/moverAnthonyNewmanRO.png" alt="Anthony Newman" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Anthony Newman</span>Baltimore Partnerships Coordinator</p>
               	<article class="personBio clear">
					<p>Anthony is thrilled to be on board with Move This World, a vehicle for empowerment and change. Before MTW, he was an Adult Education Program Coordinator &amp; GED Instructor in East Baltimore. He has also facilitated several conflict management workshops in Maryland prisons.</p>
					<p><b>A favorite book:</b> <i>Peace From Broken Pieces</i> by Iyanla Vanzant</p>
					<p><b>Quote he lives by:</b> You don&rsquo;t know where you&rsquo;re going if you don&rsquo;t know where you come from.</p>
					<p><b>Why I am excited about Move This World:</b> I&rsquo;m excited to equip students with tools, experiences, and opportunities that were never presented to me. I know that social and emotional development can open up a student&rsquo;s world. I&rsquo;m honored to be a part of a team that is dedicated to move our communities, schools, and our world in the right direction.</p>
               	</article>
           	</div><!-- #anthonyNewman-->
            <div id="dianaRagandang" class="popupPerson">
           		<img src="/wp-content/images/movers/moverDianaRagandangRO.png" alt="Diana Ragandang" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Diana Ragandang</span>Philippines Program Manager</p>
               	<article class="personBio clear">
					<p>Diana has been volunteering for Move This World in the Philippines since July 2012 while she was a registered nurse. She is a product of Capitol University’s College of Nursing Batch from March 2010 in Cagayan de Oro City. She has been active both in academic and volunteer activities since her graduation.</p>
					<p><b>Why I MTW:</b> I move simply because I found a place where I can show my passion to help in a fun and unique way. MTW is a place where both the facilitator and program attendees can benefit from the curriculum. The advocacy of promoting peace and social change takes a lot of heart and courage, and I admire the passion of the team which empowers me to strive harder to be a catalyst for social change. MTW not only offers a new medium of teaching and a whole new aspect of learning but the global movement offers emotional and social development to everyone it touches.</p>
               	</article>
           	</div><!-- #dianaRagandang-->
            
           	<div id="cindyHallberlin" class="popupPerson">
           		<img src="/wp-content/images/movers/supportCindyHallberlinRO.png" alt="Cindy Hallberlin" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName supportName">Cindy Hallberlin</span>Board Chair</p>
               	<article class="personBio clear">
					<p>Cindy is the President and CEO of Good360, formerly Gifts In Kind International, the leading nonprofit in product philanthropy bringing corporate America together with the nonprofit world to help people in need. She is responsible for rebranding the organization, which has expanded its reach in both corporate America and the communities it serves, distributing over $350 million in product. Prior to joining Gifts In Kind, Cindy served as the Chief Ethics, Diversity and Accountability Officer with U.S. Foodservice. Following a $1 billion fraud, she contributed to the cultural transformation of U.S. Foodservice by developing exceptional ethics training and awareness programs, a risk assessment strategy and a model code of conduct. Prior to joining U.S. Foodservice, Cindy developed and successfully managed the U.S. Postal Service&rsquo;s REDRESS employment mediation program, which successfully resolved more than 80 percent of discrimination claims and resulted in $60 million in cost avoidance.</p>
               	</article>
           	</div><!-- #cindyHallberlin-->
           	<div id="jenniferMeyerhoff" class="popupPerson">
           		<img src="/wp-content/images/movers/supportJenniferMeyerhoffRO.png" alt="Jennifer Meyerhoff" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName supportName">Jennifer Meyerhoff</span>Vice Board Chair</p>
               	<article class="personBio clear">
					<p>As a community activist and strategist and current Development Director for Boys Hope Girls Hope Baltimore, Jennifer has spent the last 20 years immersed in the work of local and national nonprofits and international NGO&rsquo;s. With extensive experience in fundraising, friend-raising, leadership development and creative programming, she comes to Move This World with a desire to repair the world through innovative experiential education. A founding member of the Global Steering Committee of the Jewish Salons and as former co-chair of Slim Peace Groups, Jennifer sees social entrepreneurship as the best way to leverage the power of the next generation of changemakers.</p>
               	</article>
           	</div><!-- #jenniferMeyerhoff-->
           	<div id="billBavin" class="popupPerson">
           		<img src="/wp-content/images/movers/supportBillBavinRO.png" alt="Bill Bavin" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName supportName">Bill Bavin</span>Board Member</p>
               	<article class="personBio clear">
					<p>A co-founding Managing Partner of The Washington Corporation, Bill Bavin has more than two decades of financial, business, and management experience. Since 1994, he has specialized in advising education companies and investors on capital formation, mergers & acquisitions, divestitures, valuation, and strategy. His practice includes all facets of the education market across the life-long learning continuum, including content companies, education service providers, and infrastructure. In 1998, Bill co-founded Education Capital, LLC, which provided capital market solutions, sophisticated transaction advice, and sound consulting services to scores of emerging and middle-market education companies. Bill received his B.A. in History from the University of Virginia and his M.B.A. from the Goizueta Business School at Emory University. He is a member of the Board of Directors of Total Education Solutions, Inc., a California-based special education company, and UVA Innovation Venture Forward Mentor at the University of Virginia, advising Goha Learning, the Institute on Aging, and PALS.</p>
               	</article>
           	</div><!-- #billBavin-->
            <div id="zanetaClark" class="popupPerson">
           		<img src="/wp-content/images/movers/supportZanetaClarkRO.png" alt="Zaneta Clark" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName supportName">Zaneta Clark</span>Board Member</p>
               	<article class="personBio clear">
					<p>Zaneta Clark, a Vice President at BlackRock and a member of BlackRock&rsquo;s Hedge Fund Strategy Team responsible for formulating and implementing a global business strategy for the firm&rsquo;s $30 billion hedge fund platform. Ms. Clark is also the lead investment strategist for EquityONE, a global market neutral hedge fund.</p>
                    <p>Prior to her current role, Ms. Clark was an investment strategist for US Fundamental Equity Hedge Funds within the Portfolio Management Group providing a link between the investment teams and account managers. Previously, she was a member of BlackRock&rsquo;s Proprietary Alpha Strategies team responsible for structuring, product management, and marketing BlackRock&rsquo;s absolute return, hedge fund, and commodities strategies as well as developing and maintaining relationships with the firm&rsquo;s alternative investment clients. In 2012 Ms. Clark co-launched and led &ldquo;BlackRock Impact&rdquo;, a team of 28 BlackRock professionals across 21 functions and 6 regions with a mandate to research the impact investing landscape. Ms. Clark presented the team&rsquo;s findings and proposals to BlackRock&rsquo;s Global Executive Committee in March 2013 which has resulted in the creation of impact solutions for strategic clients.  Prior to joining BlackRock in 2007, Ms. Clark received a Princeton in Asia fellowship and began her career at American International Group in Asia.</p>
                    <p>Ms. Clark earned an AB degree in Politics from Princeton University.</p>
               	</article>
           	</div><!-- #zanetaClark-->
            <div id="janDorman" class="popupPerson">
           		<img src="/wp-content/images/movers/supportJanDormanRO.png" alt="Jan Dorman" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName supportName">Jan Dorman</span>Board Member</p>
               	<article class="personBio clear">
					<p>Jan Dorman is an independent contractor in new venture development.  Most recently, Jan engaged with UVa faculty in the Curry School of Education, developing Teachstone Training, LLC, and serving as Executive Director (2009-2011) and President and CEO (2011-2012).  Drawing on expertise developed from management provisions with the University of Virginia Health Services Foundation and Cornell University, Jan operated a local management consulting practice, providing facilitation, strategic and operational planning services (2003-2009).  Jan is passionate about supporting families, primarily through advocacy for early childhood education and access to quality education and health services. Jan is a Director of Virginia National Bank (1998 to present) and has served on local education boards.  Jan earned a B.A. in Psychology from the University of Delaware and an M.B.A. from the Wharton School of the University of Pennsylvania.</p>
               	</article>
           	</div><!-- #janDorman-->
           	<div id="rickiFairley" class="popupPerson">
           		<img src="/wp-content/images/movers/supportRickiFairleyRO.png" alt="Ricki Fairley" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName supportName">Ricki Fairley</span>Board Member</p>
               	<article class="personBio clear">
					<p>Ricki Fairley is the Founder, President and Thought Leader of DOVE Marketing. She is responsible for the growth and prosperity of the company. Fairley is a seasoned marketer with 30 years of marketing experience including 20 years in brand management at Johnson & Johnson, Nabisco, Reckitt &amp; Colman and The Coca-Cola Company. Her agency experience encompasses strategic planning and consulting for numerous Fortune 500 companies. She is passionate about helping clients identify marketplace opportunities, establish insight-based objectives and strategies, and then build results-driven campaigns with resonating creative.</p>
					<p>Prior to starting DOVE in February 2012, Ricki held the position of Chief Marketing Officer and a Partner at IMAGES USA where she managed strategy and planning for all IMAGES USA clients. She led the implementation of successful and award-winning campaigns for Amtrak, Sara Lee, Wachovia-Wells Fargo, Glory Foods, The National Black Arts Festival, Teach for America and Brown Forman. She also directed the Agency&rsquo;s new business development initiatives that maintained its position as a leading multicultural marketing firm.</p>
					<p>Ricki holds a BA from Dartmouth College and an MBA from Kellogg School of Management at Northwestern University. She is the President Emeritus of the Black Alumni of Dartmouth Association, is a member of the Dartmouth Committee on Trustees, serves on the Board of Kenny Leon&rsquo;s True Colors Theatre Company, the Board of the Latin American Association, Ne-Yo’s Compound Foundation Board, the Executive Board of the Magnolia Chapter of The Links, Inc. and the Women’s Issues &amp; Economic Empowerment Committee for the National Links, Inc. She holds the Leadership Award from the Creative Thinking Association of America. was named a Top 100 Marketer by Black Enterprise Magazine in February 2011 and is member of the 2011 Class of Leadership Atlanta.</p>
               	</article>
           	</div><!-- #rickiFairley-->
           	<div id="valerieRowland" class="popupPerson">
           		<img src="/wp-content/images/movers/supportValerieRowlandRO.png" alt="Valerie Rowland" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName supportName">Valerie Rowland</span>Board Member</p>
               	<article class="personBio clear">
					<p>Valerie Rowland Gesualdi is the Chief Administrative Officer for the Wealth Management Advisory Group (WMAG) of UBS Financial Services Inc. In her role at UBS, she leads the operations, service and risk for the extensive domestic branch office network with a team of over 4000. In her almost 30 year tenure with the Firm, Valerie has held various positions in product management, banking products development, process reengineering, strategy development and execution. She has also led teams working on numerous integrations of retail brokerage acquisitions, combining both the operations and the culture of distinct organizations. Valerie is a founding steering committee member of the WMAG All Bar None, women&rsquo;s network. She co-chaired the Regional Chief Operating Officer’s Diversity Council in 2009. She was recognized in 2006 by the YWCA of New York Academy of Women&rsquo;s Leaders. Valerie holds a Bachelor of Business Administration from Hofstra University and a Masters in Business Administration from New York University&rsquo;s Stern School of Business.</p>
               	</article>
           	</div><!-- #valerieRowland-->
            
           	<div id="alitoAlessi" class="popupPerson">
           		<img src="/wp-content/images/movers/supportAlitoAlessiRO.png" alt="Alito Alessi" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Alito Alessi</span>Advisory Board Member</p>
               	<article class="personBio clear">
					<p>Alito Alessi is the Artistic Director of Joint Forces Dance Company and of DanceAbility International. Alessi is internationally known as a pioneering teacher and choreographer of contemporary dance, and dance and disability. In 1987 he founded the DanceAbility method of connecting people with and without disabilities through dance. Alessi has received a Guggenheim Fellowship, Ashoka Fellowship, Choreographer of the Year award in Hong Kong, Choreographer&rsquo;s Fellowships from the American National Endowment for the Arts and from the Oregon Arts Commission. He has taught and performed throughout Europe, North and South America and Asia, at many of the world’s premier dance festivals and venues. He has been training people to become teachers of the DanceAbility since 1996. He has also created an educational performance-assembly together with dance partner Emery Blackwell—who uses a wheelchair and has cerebral palsy—and has performed for and led discussions on dance and disability with over 100,000 children.</p>
               	</article>
           	</div><!-- #alitoAlessi-->
           	<div id="paulEmerson" class="popupPerson">
           		<img src="/wp-content/images/movers/supportPaulEmersonRO.png" alt="Paul Emerson" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Paul Emerson</span>Advisory Board Member</p>
               	<article class="personBio clear">
					<p>Paul Emerson is the Founder &amp; Executive Director of Company E. Prior to co-founding Company | E he co-founded and then served as Executive Director for CityDance Ensemble from 1996-2004 and was Artistic Director between 2000 and his resignation at the end of June 2011, when the performing company was disbanded. During his tenure with CityDance Ensemble, the company received every significant award in its history, including the 2010 DC Mayor&rsquo;s Arts Award for Service to Education, the 2009 DC Mayor&rsquo;s Arts Award for Artistic Excellence, 2003 DC Mayors Arts Award for Outstanding Emerging Artist and the 2005 DC Mayor’s Arts Award for Innovation in the Arts. During that time the Company was named a “Top 25 To Watch” worldwide by Dance Magazine.</p>
               	</article>
           	</div><!-- #paulEmerson-->
           	<div id="jurgenGriesbeck" class="popupPerson">
           		<img src="/wp-content/images/movers/supportJurgenGriesbeckRO.png" alt="Jurgen Griesbeck" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">J&uuml;rgen Griesbeck</span>Advisory Board Member</p>
               	<article class="personBio clear">
					<p>J&uuml;rgen Griesbeck is the Founder &amp; CEO of streetfootballworld. He is driving social change by using football as a tool to engage millions of disadvantaged youth. He built streetfootballworld, a large network uniting 82 citizen organizations in 54 countries that uses the sport to improve the lives of children and young adults aged 10-25. Jürgen believes that football provides an effective framework for establishing a common set of values and a continuous dialogue platform, which are crucial for facilitating long-term behavior change and helping young people develop the skills necessary to lead a healthy and economically independent life. Essential to its success, streetfootballworld works on the principle that social change is created locally but has to be reinforced through global cooperation. The network member organizations are rooted in their communities and share their first-hand knowledge of the local needs and cultural contexts in order to create sustainable solutions. Reaching 1.5 million children with its largest concentrations in Africa, South America, and Europe, its potential reach will be determined by the strength of civil society and the relevance of football in the community. Jürgen now envisions creating a global and replicable value chain for social change through football, reaching up to 25 million children and young adults in Africa, the Americas, Europe, the Middle East and India.</p>
               	</article>
           	</div><!-- #jurgenGriesbeck-->
           	<div id="susanAllen" class="popupPerson">
           		<img src="/wp-content/images/movers/supportSusanAllenNanRO.png" alt="Susan Allen Nan" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Susan Allen Nan</span>Advisory Board Member</p>
               	<article class="personBio clear">
					<p>Dr. Susan Allen Nan is practitioner and scholar of conflict resolution with a passion for dance. She is Associate Professor of Conflict Analysis and Resolution at George Mason University. She co-founded the Alliance for Conflict Transformation, practiced conflict resolution at The Carter Center, taught at American University&rsquo;s International Peace and Conflict Resolution program, and served on the Board of the Alliance for Peacebuilding.</p>
              	</article>
           	</div><!-- #susanAllen-->
           	<div id="johnPryor" class="popupPerson">
           		<img src="/wp-content/images/movers/supportJohnHPryorRO.png" alt="John H. Pryor" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">John H. Pryor</span>Advisory Board Member</p>
               	<article class="personBio clear">
					<p>John H. Pryor is the director of the largest and longest running study of higher education in the United States, the Cooperative Institutional Research Program (CIRP). He is also the managing director of the Higher Education Research Institute at UCLA, where the CIRP surveys are housed. Before coming to UCLA in 2005, he was the Director of Student Affairs Planning, Evaluation, and Research at Dartmouth College. He obtained his M.A. in Psychology from the University of Virginia and his A.B. from Dartmouth College. As the Director of the CIRP surveys, he conducts longitudinal research on the changing nature of college students and the impact of college, and is a frequent speaker across the nation. He has extensive experience evaluating programs that work for social change, similar to those of Move This World.</p>
               	</article>
           	</div><!-- #johnPryor-->
           	<div id="scottSherman" class="popupPerson">
           		<img src="/wp-content/images/movers/supportScottShermanRO.png" alt="Scott Sherman" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Scott Sherman</span>Advisory Board Member</p>
               	<article class="personBio clear">
					<p>Dr. Scott Sherman is the executive director of an award-winning nonprofit organization, the Transformative Action Institute. The mission of TAI is to train the next generation of social entrepreneurs, innovators, and change makers for the 21st century. Scott&rsquo;s work on nonviolent social change projects has been praised by such Nobel Peace Prize Laureates as the Dalai Lama, Desmond Tutu, and the late Mother Teresa. Sherman earned his undergraduate and law degrees from U.C. Berkeley, as well as his Ph.D. in environmental studies from the University of Michigan. Besides his work as a grassroots community organizer, lecturer, and author, Sherman has worked with the Natural Resources Defense Council and the Environmental Law Foundation. Since 2000, he has been an adjunct faculty member in UCLA&rsquo;s School of Public Affairs. In 2005, the global nonprofit organization Echoing Green recognized Sherman as one of the world&rsquo;s &ldquo;Best Emerging Social Entrepreneurs.&rdquo;</p>
               	</article>
           	</div><!-- #scottSherman-->
           	<div id="chrisUnderhill" class="popupPerson">
           		<img src="/wp-content/images/movers/supportChrisUnderhillRO.png" alt="Chris Underhill" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Chris Underhill</span>Advisory Board Member</p>
               	<article class="personBio clear">
					<p>Chris Underhill is a global expert in the delivery of health and rehabilitation systems to very poor people.  He is a serial social entrepreneur and his latest organisation, BasicNeeds, concerns the delivery of a holistic Model to mentally ill people and people with epilepsy in some of the poorest countries of the world.  Chris is a Senior Fellow with the Ashoka Fellowship and is a recipient of the Skoll Award for Social Entrepreneurship.  The BasicNeeds Model for Mental Health and Development is recognised as a significant innovation in community mental health care delivery combining medical, social, economic and personal aspects into one successful programme. Over 600,000 beneficiaries having been served in the BasicNeeds global programme.  Previous organisations founded by Chris include Action on Disability and Development and Thrive, and in 2000 Chris was made an MBE by her Majesty the Queen for his services to disability and development.</p>
               	</article>
           	</div><!-- #chrisUnderhill-->
           	<div id="craigZelizer" class="popupPerson">
           		<img src="/wp-content/images/movers/supportCraigZelizerRO.png" alt="Craig Zelizer" class="imgMoverPopup floatLeft" />
               	<p class="floatLeft personTitle"><span class="moverName">Craig Zelizer</span>Advisory Board Member</p>
               	<article class="personBio clear">
					<p>Dr. Craig Zelizer is Associate Director of the Conflict Resolution MA Program in the Department of Government at Georgetown University. His areas of expertise include working with youth from violent conflict regions, civil society development and capacity building in transitional societies, program evaluation and design, working on conflict sensitivity and mainstreaming across development sectors, the connection between trauma and conflict, the role of the private sector in peacebuilding, and arts and peacebuilding. He is founder of the Peace and Collaborative Development Network, a leading networking website with over 7500 professionals, academics, and students interested and working on issues of international development and conflict.</p>
               	</article>
           	</div><!-- #craigZelizer-->
        </div><!-- .moverPopups -->
     </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>