<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
 
$parent = $post->post_parent;
$parentTitle = get_the_title($post->post_parent);
	
if ($parentTitle=="About") {
	$mainTitle = "About Us";
	$subUrl = "about";
} else if ($parentTitle=="Program"){
	$mainTitle = "Our Programs";
	$subUrl = "programs";
} else if ($parentTitle=="Partners"){
	$mainTitle = "Global Movement";
	$subUrl = "movement";
} else if ($parentTitle=="Blog"){
	$mainTitle = "Learn More";
	$subUrl = "learn-more";
}

$currentTitle = get_the_title($post);
?>
<aside id="sidebar" class="mtwSidebar">
    <article class="sidebarContent">
        <?php if ($currentTitle == "Our Story"): ?>
            <p><i>&ldquo;In Bogota, I saw that a textbook approach to teaching empathy wasn&rsquo;t working. Students&rsquo; eyes were glazed over, their bodies were limp, and they weren&rsquo;t connecting conflict resolution lessons to the conflicts in their lives. Bullying and violence remained prevalent, and students were disengaged. The breakthrough moment came one day at recess, as I watched students dance to reggaeton with passion. As a lifelong dancer, I knew movement could engage students in building character and promoting civic engagement.  I approached the physical education teacher to discuss how we could use something the students and I both loved, creative movement, to inspire peaceful behavior.&rdquo;</i></p>
            <p>-Sara, Founder and CEO</p>
        <? endif; ?>
        <?php if ($currentTitle == "Our Programs"): ?>
            <p><i>&ldquo;The activities that MTW structured for our group helped to bring a level of cohesion and collaboration that transcended roles and responsibilities that can, at times, be a source of division/discord...I think the PeaceMover facilitator did a great job of reaching a very diverse group of staff members, and helped to break down some of the barriers between communication that we were experiencing previously.&rdquo;</i></p>
            <p>-Matthew Phifer, Henry Street Settlement</p>
        <? endif; ?>
        <?php if ($currentTitle == "Employee Wellness"): ?>
            <p><i>&ldquo;Move This World&rsquo;s program was a breath of fresh air! Our employees were pleasantly surprised by the active and FUN engagement. Some of the employees are still saying hello to each other by their signs. I would recommend your program to any fellow manager that is looking to engage their employees in a positive way while developing, learning and gaining a great understanding of empathy towards people who are different!&rdquo;</i></p>
            <p>-Jessica Marino, Unum</p>
        <? endif; ?>
        <?php if ($currentTitle == "US"): ?>
            <p><i>&ldquo;It has always been our philosophy that the creative process deepens the experience of any learning opportunity. In particular, kinesthetic learners are particularly engaged during Move This World activities, for obvious reasons, when they use their bodies as part of the learning process. Finally, and really more to the point, creating a culture of caring through Move This World&rsquo;s focus on conflict resolution, peace-making and bully-prevention through movement, is a great addition to our mission of creating leaders for the renaissance of New York.&rdquo;</i></p>
            <p>-Rebekah Oakes, Renaissance Charter School, Jackson Heights, Queens</p>
            <hr />
            
        <? endif; ?>
        <?php if ($currentTitle == "Latin America"): ?>
            <p><i>&ldquo;I never knew that I could learn using my body as an instrument. The mirror exercise for us is difficult sometimes because you can really see the soul of the people through their eyes.&rdquo;</i></p>
            <p>-Robinson, participant from San José del Guaviare</p>
            <hr />
            <p>Read more about our work in <a href="http://www.eltiempo.com/mundo/latinoamerica/cinco-ideas-que-transforman-conflictos-en-el-mundo_12244812-4" target="_blank">El Tiempo Newspaper</a></p>
            <hr />
            <p>Read more about our work in <a href="/wp-content/uploads/MTWElEspectador.pdf" target="_blank">El Espectador</a></p>
        <? endif; ?>
        <?php if ($currentTitle == "The Philippines"): ?>
            <p>Mindanao is one of the 7,107 islands of the Philippine archipelago. It is the second biggest island, whose people are of diverse cultural background and also one of the war-driven islands. The conflict has persisted  with a long-standing conflict that has its historical underpinnings since the 333 years of Spanish colonization. This was followed by the occupation of the Americans, and the short subjugation of the Japanese government during the second world war. The territorial conflict has persisted as the cultural minority has claimed part of the island as separate from the republic.</p>
        <? endif; ?>
        <?php if ($currentTitle == "Join Us"): ?>
            <p><i>&ldquo;Doing what you love everyday is rare. Speaking passionately about what you believe in as part of your job description is hard to find. Seeing your dreams and ideas transform into action regularly is almost unheard of. Being surrounded by a fiercely brilliant, honest, creative,  hardworking, and supportive team is the reason all of the above are possible. This is the life I get to live and I feel so lucky to collaborate, grow, and learn from and with this inspiring group of people. This is not work-- it&rsquo;s a lifestyle, a social movement, and a dream come true.&rdquo;</i></p>
            <p>-Anya, U.S. Program Manager</p>
        <? endif; ?>
        <?php if ($currentTitle == "Join Team MTW"): ?>
            <p class="sidebarTitle">Joining the Move This World Team Means:</p>
            <ul>
            	<li>Being a member of a fun, talented team that empowers you while giving you the freedom to be creative and help shape the organization</li>
            	<li>Full time salary &amp; benefits, plus unlimited Subway, cell phone &amp; dance parties</li>
            	<li>The fulfillment of spending time on high-impact work that is defining the future of empathy education</li>
	            <li>Waking up excited every morning that you are building a worldwide movement</li>
	            <li>Cooking up big ideas (and implementing them!) with a diverse, inspiring team across 4 continents</li>
            </ul>
			<p class="sidebarTitle">A MTW DISCLAIMER</p>
			<p>All of our positions require individuals with an entrepreneurial mind who are able to navigate ambiguity, take matters into their own hands, take risks, learn things they don’t know, and do whatever it takes to get the job done. That might mean working until midnight with the team, coaching teachers, watching online hub videos, helping coordinate our Global Training Summit, dancing your booty off, crunching numbers in Excel, and going out of your way to share the MTW story with the world.</p>
        <? endif; ?>
    </article><!--.sidebarContent-->
</aside>