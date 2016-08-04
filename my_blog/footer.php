	<footer>
		<section id="ft_widgets">
	<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer' ) ): endif; ?>
		</section>
		<section>
		<ul class="list-inline">
                        <li>
                            <a href="https://twitter.com/crologis" target="_blanck">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Crologis?fref=ts" target="_blanck">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                                Facebook
                            </a>
                        </li>
                    </ul>
			<p id="copyright">CROLOGIS Copyright@ 2016</p>
		</section>
	</footer>
	<?php wp_footer();?>
	</div>
</body>
</html>