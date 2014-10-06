<div class="row sidebar-element">
    <div class="col-sm-4 avatar">
    	<img src="{{ $profile->avatar }}" class="img-circle img-responsive" alt="Avatar de {{ $profile->fullName }}">
    </div>
    <div class="col-sm-8">
    	<h3>{{ $profile->fullName }}</h3>
		<p>{{ $profile->userName }}</p>
    </div>
</div>
<div class="separator"></div>
<div class="row sidebar-element">
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					<h4 class="panel-title">
						Usuarios <span class="glyphicon glyphicon-user menu-icono"></span>
					</h4>
				</a>
			</div>
			<div id="collapseOne" class="panel-collapse collapse">
				<div class="panel-body">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
					<h4 class="panel-title">				
						Proyectos <span class="glyphicon glyphicon-folder-open menu-icono"></span>
					</h4>
				</a>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse">
				<div class="panel-body">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">			
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
					<h4 class="panel-title">
						Recursos <span class="glyphicon glyphicon-list-alt menu-icono"></span>
					</h4>
				</a>			
			</div>
			<div id="collapseThree" class="panel-collapse collapse">
				<div class="panel-body">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">			
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
					<h4 class="panel-title">
						Configuración <span class="glyphicon glyphicon-cog menu-icono"></span>
					</h4>
				</a>			
			</div>
			<div id="collapseFour" class="panel-collapse collapse">
				<div class="panel-body">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
	</div>
</div>
<div class="separator"></div>
<div class="row sidebar-element">
	<div class="panel panel-success chat">
		<div class="panel-heading">
			<h3 class="panel-title">{{ $profile->fullName }} / {{ $profile->userName }} <img src="{{ $profile->avatar }}" class="img-circle img-responsive" alt="Avatar de {{ $profile->fullName }}"></h3>
		</div>
		<div class="panel-body">
			Panel content
		</div>
		<div class="panel-footer">
			<a href="#" class="settings-chat btn btn-default"><span class="glyphicon glyphicon-cog"></span></a>
		</div>
	</div>
</div>