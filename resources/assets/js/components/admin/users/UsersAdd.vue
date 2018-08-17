<template>
<!-- 	<div> -->
	     <div class="m-grid__item m-grid__item--fluid m-wrapper">
		    <div class="m-content">
		    	<div class="row">
		    		<div class="col-lg-12">
		    			<!--begin::Portlet-->
		    			<div class="m-portlet m-portlet--success m-portlet--head-solid-bg">
		    				<div class="m-portlet__head">
		    					<div class="m-portlet__head-caption">
		    						<div class="m-portlet__head-title">
		    							<span class="m-portlet__head-icon">
		    								<i class="flaticon-placeholder-2"></i>
		    							</span>
		    							<h3 class="m-portlet__head-text">
		    								User Form
		    							</h3>
		    						</div>
		    					</div>
		    					<div class="m-portlet__head-tools">
		    						<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<router-link :to="{name: 'Users.Add'}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
											<span>
													<i class="la la-plus"></i>
													<span>Back</span>
												</span>
											</router-link>
										</li>
		    						</ul>
		    					</div>
		    				</div>
		    				<div class="m-portlet__body">
		    					<!--begin::Form-->
				    			<form class="m-form m-form--fit m-form--label-align-right">
				    				<div class="m-portlet__body">
				    					<div class="form-group m-form__group row">
				    						<label for="exampleInputEmail1" class="col-3 col-form-label">
				    							Name
				    						</label>
				    						<div class="col-6">
												<input class="form-control m-input--square" type="text" value="" id="name" v-model="name">
												<span v-if="errors.name" class="error">{{errors.name[0]}}</span>
											</div>
				    					</div>
				    					<div class="form-group m-form__group row">
				    						<label for="username" class="col-3 col-form-label">
				    							Username
				    						</label>
				    						<div class="col-6">
												<input class="form-control m-input--square" type="text" value="" id="username" v-model="username">
												<span v-if="errors.username" class="error">{{errors.username[0]}}</span>
											</div>
				    					</div>
				    					<div class="form-group m-form__group row">
				    						<label for="email" class="col-3 col-form-label">
				    							Email address
				    						</label>
				    						<div class="col-6">
												<input class="form-control m-input--square" type="email" value="" id="email" v-model="email">
												<span v-if="errors.email" class="error">{{errors.email[0]}}</span>
											</div>
				    					</div>
				    					<div class="form-group m-form__group row">
				    						<label for="password" class="col-3 col-form-label">
				    							Password
				    						</label>
				    						<div class="col-6">
												<input class="form-control m-input--square" type="password" value="" id="password" v-model="password">
												<span v-if="errors.password" class="error">{{errors.password[0]}}</span>
											</div>
				    					</div>
				    					<div class="form-group m-form__group row">
				    						<label for="password" class="col-3 col-form-label">
				    							Confirm Password
				    						</label>
				    						<div class="col-6">
												<input class="form-control m-input--square" type="password" value="" id="password" v-model="confirm_password">
												<span v-if="errors.confirm_password" class="error">{{errors.confirm_password[0]}}</span>
											</div>
				    					</div>				    					
				    					<div class="form-group m-form__group row">
										<label class="col-form-label col-lg-3 col-sm-12">
											Select Roles
										</label>
										<div class="col-lg-6 col-md-9 col-sm-12">
											<select class="form-control" id=""  v-model="roles" multiple="" >
												<option v-for="(role, name) in all_roles" v-bind:value="role">
													{{ role }}
												</option>												
											</select>
										</div>
									</div>
				    				</div>
				    				<div class="m-portlet__foot m-portlet__foot--fit">
				    					<div class="m-form__actions">
				    						<button type="button" v-on:click="addNewUser()" class="btn btn-success">
				    							Submit
				    						</button>
				    					</div>
				    				</div>
				    			</form>
				    			<!--end::Form-->
		    				</div>
		    			</div>
		    			<!--end::Portlet-->
		    		</div>
		    	</div>
		    </div>
		</div>
<!-- 	</div> -->
</template>

<script>
	export default{
		data(){
			return {
				all_roles: [],
				name: '',
				username: '',
				email: '',
				password: '',
				confirm_password: '',
				errors: [],
				roles: []
			}
		},
		mounted() {
           this.getRoles()
        },
		methods: {
			addNewUser() {
				console.log(this)
				console.log("input rolessssssssssssss")
				console.log(this.roles)
				this.errors = []
				//passing data to api
				
				axios.post('/api/users', {
					name: this.name,
					username: this.username,
					email: this.email,
					password: this.password,
					confirm_password: this.confirm_password,
					roles: this.roles,

				}).then(response=>{
					this.$router.push('/admin/users');
				}).catch(error=>{
					if(error.response.status = 422){
						this.errors = error.response.data.errors
					}
				})
			},
			getRoles(){
        		axios.get('/api/get_all_roles').then(response=>{
        			console.log("rrrrrrrrrrrrrrrrrrrrr");
				console.log(response.data);
        			this.all_roles = response.data
        		})
        	}
		}
	}
</script>