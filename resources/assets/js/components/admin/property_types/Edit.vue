<template>
<!-- 	<div> -->
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
		    								Purpose Management
		    							</h3>
		    						</div>
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
				    						<button type="button" v-on:click="UpdatePurpose()" class="btn btn-success">
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
	props: ['id'],
	data() {
		return {
			name: '',
			errors: []
		}
	},
	mounted() {
		axios.get('/api/purposes/'+this.id).then(response=>{
			var purpose = response.data
			this.name = purpose.name
		}).catch(error=>{
			console.log(error)
		})
	},
	methods: {
		UpdatePurpose() {
			axios.put('/api/purposes/'+this.id, {
				name: this.name
			}).then(response=>{
				this.$router.push('/admin/purposes');
			}).catch(error=>{
				console.log(error.response)
				if (error.response.status = 422) {
					this.errors = error.response.data.errors
				}
			})
		}
	}
}
</script>

<style>
	
</style>