<div class="container">
	<h1 class="section-title"><span><i class="mdi-hardware-keyboard-alt"></i>{{ category.name }}</span></h1>

	<div class="row">

	{% for place in places %}
		<a href="{{ url('places/show/' ~ place.urlname) }}">
			<div class="col s12 m4">
				<div class="card small">
					<div class="card-image">
						{{ image('assets/images/' ~ place.images ) }}
						<span class="card-title">{{ place.name }}</span>
					</div>
					<div class="card-content">
						<p class="black-text">{{ place.description }}</p>
					</div>
				</div>
			</div>
		</a>
	{% endfor %}

	</div>

</div>