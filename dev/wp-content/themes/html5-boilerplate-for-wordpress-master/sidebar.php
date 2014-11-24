<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
 
$currentTitle = get_the_title($post);
?>
<aside id="sidebar" class="mtwSidebar">
    <article class="sidebarContent">
        <?php if ($currentTitle == "Our Story"): ?>
            <p><i>&ldquo;In Bogota, I saw that a textbook approach to teaching empathy wasn&rsquo;t working. Students&rsquo; eyes were glazed over, their bodies were limp, and they weren&rsquo;t connecting conflict resolution lessons to the conflicts in their lives. Bullying and violence remained prevalent, and students were disengaged. The breakthrough moment came one day at recess, as I watched students dance to reggaeton with passion. As a lifelong dancer, I knew movement could engage students in building character and promoting civic engagement.  I approached the physical education teacher to discuss how we could use something the students and I both loved, creative movement, to inspire peaceful behavior.&rdquo;</i></p>
            <p>-Sara, Founder and CEO</p>
        <? endif; ?>
        <?php if ($currentTitle == "Employee Wellness"): ?>
            <p><i>&ldquo;Move This World&rsquo;s program was a breath of fresh air! Our employees were pleasantly surprised by the active and FUN engagement. Some of the employees are still saying hello to each other by their signs. I would recommend your program to any fellow manager that is looking to engage their employees in a positive way while developing, learning and gaining a great understanding of empathy towards people who are different!&rdquo;</i></p>
            <p>-Jessica Marino, Unum</p>
        <? endif; ?>
        <?php if ($currentTitle == "Careers"): ?>
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