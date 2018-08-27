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
		    								Purpose Form
		    							</h3>
		    						</div>
		    					</div>
		    					<div class="m-portlet__head-tools">
		    						<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<router-link :to="{name: 'Purpose.Add'}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
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
				    					<div class="form-group m-form__group row " v-bind:class="{ 'has-danger': errors.name }">
				    						<label for="exampleInputEmail1" class="col-3 col-form-label">
				    							Name
				    						</label>
				    						<div class="col-6">
												<input class="form-control m-input--square" type="text" value="" id="name" v-model="name">

												<div v-if="errors.name" class="form-control-feedback">
													{{errors.name[0]}}
												</div>
											</div>
				    					</div>				    					
				    				</div>
				    				<div class="m-portlet__foot m-portlet__foot--fit">
				    					<div class="m-form__actions">
				    						<button type="button" v-on:click="addNewPurpose()" class="btn btn-success">
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
			return{
				name: '',
				errors: []
			}
		},
		mounted(){

		},
		methods: {
			addNewPurpose(){
				this.errors = []
				//passing data to api
				axios.post('/api/purposes',{
					name: this.name,
				}).then(response=>{
					this.$router.push('/admin/purposes');
					this.$toasted.success(response.data);
				}).catch(error=>{
					if (error.response.status = 422) {
						this.errors = error.response.data.errors;
					}
				})
			}
		}
	}
</script>