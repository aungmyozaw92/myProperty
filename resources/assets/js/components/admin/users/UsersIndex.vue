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
											<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>
														New User
													</span>
												</span>
											</a>
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
											<td><span class="m-badge  m-badge--info m-badge--wide">Info</span></td>
											<td><button type="button" class="btn m-btn--square  btn-primary">
															Edit
														</button>
														<button type="button" class="btn m-btn--square  btn-danger">
															Delete
														</button></td>
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
		data() {
           return {
           	users: [],
           	user: {
           		id: 0,
           		name: '',
           		email: ''
           	}
           }
        },
        mounted() {
           this.getUsers()
        },
        methods: {
        	getUsers(){
        		axios.get('/api/users').then(response=>{
        			console.log(response)
        			this.users = response.data
        		})
        	}
        }
	}
</script>

<style>
	
</style>