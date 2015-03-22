<div class="container">

	<div class="row">

	{% for category in categories %}
		<div class="col s12 m4">
			<div class="card small">
				<div class="card-image">
					{{ image('assets/images/apparalang.jpg') }}
					<span class="card-title">{{ category.name }}</span>
				</div>
				<div class="card-content">
					<p>{{ category.description }}</p>
				</div>
				<div class="card-action">
					{{ link_to('category/show/' ~ category.urlname, 'Daftar Tempat') }}
				</div>
			</div>
		</div>
	{% endfor %}

	</div>

</div>