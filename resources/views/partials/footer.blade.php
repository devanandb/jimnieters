<footer class="uk-clearfix">
	<div class="uk-container">
		
		<div class="footer-content">
			<div uk-grid>
				<div class="uk-width-1-2@m">
					<div class="social-links">
						<a target="_blank" href="mailto:jnieters@mac.com" class="uk-icon-button uk-margin-small-right" uk-icon="icon: mail"></a>
						<a target="_blank" href="https://www.linkedin.com/in/jimnieters/en" class="uk-icon-button uk-margin-small-right" uk-icon="icon: linkedin"></a>
						<a target="_blank" href="https://www.facebook.com/JimNieters" class="uk-icon-button  uk-margin-small-right" uk-icon="icon: facebook"></a>
						<a target="_blank" href="https://twitter.com/jimnieters" class="uk-icon-button uk-margin-small-right" uk-icon="icon: twitter"></a>
						<a target="_blank" href="https://about.me/jnieters" class="uk-icon-button uk-margin-small-right" uk-icon="icon: link"></a>
						<a target="_blank" href="https://plus.google.com/118351713961437921299/posts" class="uk-icon-button uk-margin-small-right" uk-icon="icon: google-plus"></a>
					</div>
				</div>
				<div class="uk-width-1-2@m">
					<div class="subscribe-module uk-text-right@m uk-text-left">
						<a target="_blank" href="https://www.linkedin.com/in/jimnieters/en" class="uk-button uk-button-primary">Contact me</a>
						<h4>Let's craft experiences that make people love your product or service. How? That's a conversation worth having!</h4>
						
					</div>
				</div>
			</div>
			
			<hr>
			<div uk-grid>
				<div class="uk-width-1-2@m">
					<ul class="uk-list primary-links">
						@foreach ($categories as $cat)
	                        @if (count($cat->articles))
	                            <li class="">
	                                <a class="" href="/category/{{$cat->slug}}">{{$cat->title}}</a>
	                            </li>
	                        @endif
	                    @endforeach
	                    <li class="">
	                        <a class="" href="/tags">Tags</a>
	                    </li>
					</ul>
				</div>
				<div class="uk-width-1-2@m">
					<div class="copyright uk-text-right@m uk-text-left">
						&copy; {{ date('Y') }} Jim Nieters | Online portfolio | Designed and Developed by <a target="_blank" href="https://www.linkedin.com/in/devanandb">Devanand</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>