<template>
	<div>
	     <div class="m-grid__item m-grid__item--fluid m-wrapper">
		    <div class="m-content">
		    	<div class="row">
		    		<div class="col-md-12">
		    			<!--begin::Portlet-->
		    			<div class="m-portlet m-portlet--success m-portlet--head-solid-bg">
		    				<div class="m-portlet__head">
		    					<div class="m-portlet__head-caption">
		    						<div class="m-portlet__head-title">
		    							<span class="m-portlet__head-icon">
		    								<i class="flaticon-placeholder-2"></i>
		    							</span>
		    							<h3 class="m-portlet__head-text">
		    								User Management
		    							</h3>
		    						</div>
		    					</div>
		    					<div class="m-portlet__head-tools">
		    						<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<router-link :to="{name: 'Users.Add'}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
											<span>
													<i class="la la-plus"></i>
													<span>New User</span>
												</span>
											</router-link>
										</li>
		    						</ul>
		    					</div>
		    				</div>
		    				<div class="m-portlet__body">
		    					<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
									<thead>
										<tr>
											<th>No</th>
											<th>User Name</th>
											<th>Name</th>
											<th>Email</th>
											<th>Roles</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr v-for="user in users">
											<td>{{user.id}}</td>
											<td>{{user.username}}</td>
											<td>{{user.name}}</td>
											<td>{{user.email}}</td>
											<td>
												<span v-if="user.roles">
											           <span v-for="role in user.roles" class="m-badge  m-badge--success m-badge--wide">
														{{role.name}}
														</span>
											    </span>										</td>
											<td>
												<router-link :to="{name: 'Users.Edit',params: {id: user.id}}" class="btn m-btn--square  btn-primary">
											<span>
													<i class="la la-plus"></i>
													<span>Edit</span>
												</span>
											</router-link>
												<button type="button" class="btn m-btn--square  btn-danger">Delete</button>
											</td>
										</tr>
									</tbody>
								</table>
		    				</div>
		    			</div>
		    			<!--end::Portlet-->
		    		</div>
		    	</div>
		    </div>
		</div>
	</div>

</template>


<script>
	export default {
		mounted() {
           this.$store.dispatch('getUsers');
        },
        computed: {
           users(){
           		return this.$store.getters.users;
           }
        }
	}
</script>

<style>
	
</style>